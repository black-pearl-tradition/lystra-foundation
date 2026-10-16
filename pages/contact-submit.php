<?php

function redirectToContact(string $status): void
{
    header('Location: contact.php?status=' . rawurlencode($status), true, 303);
    exit;
}

if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    header('Location: contact.php', true, 303);
    exit;
}

$fields = [];
foreach (['name', 'email', 'subject', 'message'] as $field) {
    if (!isset($_POST[$field]) || !is_string($_POST[$field])) {
        redirectToContact('empty_fields');
    }

    $fields[$field] = trim($_POST[$field]);
    if ($fields[$field] === '') {
        redirectToContact('empty_fields');
    }
}

if (filter_var($fields['email'], FILTER_VALIDATE_EMAIL) === false) {
    redirectToContact('invalid_email');
}

try {
    require __DIR__ . '/../includes/db.php';

    $stmt = $pdo->prepare(
        'INSERT INTO contact_submissions (name, email, subject, message) VALUES (?, ?, ?, ?)'
    );
    $stmt->execute([
        $fields['name'],
        $fields['email'],
        $fields['subject'],
        $fields['message'],
    ]);
} catch (PDOException | RuntimeException $exception) {
    error_log('Contact form submission failed: ' . $exception->getMessage());
    redirectToContact('error');
}

redirectToContact('success');

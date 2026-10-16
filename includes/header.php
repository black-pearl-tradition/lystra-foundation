<?php $currentPage = basename($_SERVER['SCRIPT_FILENAME'] ?? ''); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="../">
    <title>Lystra Foundation Uganda | Empowering People, Restoring Nature</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm" aria-label="Main navigation">
        <div class="container align-items-center">
            <a class="navbar-brand" href="pages/index.php" aria-label="Lystra Foundation Uganda home">
                <img src="assets/images/lystra-logo.png" alt="Lystra Foundation — Nature for Humanity">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-lg-auto align-items-lg-center">
                    <li class="nav-item"><a class="nav-link<?= $currentPage === 'index.php' ? ' active' : '' ?>" href="pages/index.php"<?= $currentPage === 'index.php' ? ' aria-current="page"' : '' ?>>Home</a></li>
                    <li class="nav-item"><a class="nav-link<?= $currentPage === 'about.php' ? ' active' : '' ?>" href="pages/about.php"<?= $currentPage === 'about.php' ? ' aria-current="page"' : '' ?>>About Us</a></li>
                    <li class="nav-item"><a class="nav-link<?= $currentPage === 'programs.php' ? ' active' : '' ?>" href="pages/programs.php"<?= $currentPage === 'programs.php' ? ' aria-current="page"' : '' ?>>Our Programs</a></li>
                    <li class="nav-item"><a class="nav-link<?= $currentPage === 'impact.php' ? ' active' : '' ?>" href="pages/impact.php"<?= $currentPage === 'impact.php' ? ' aria-current="page"' : '' ?>>Our Impact</a></li>
                    <li class="nav-item"><a class="nav-link<?= $currentPage === 'get-involved.php' ? ' active' : '' ?>" href="pages/get-involved.php"<?= $currentPage === 'get-involved.php' ? ' aria-current="page"' : '' ?>>Get Involved</a></li>
                    <li class="nav-item ms-lg-3"><a class="<?= $currentPage === 'contact.php' ? 'btn btn-success' : 'btn btn-outline-success' ?> btn-sm px-3" href="pages/contact.php"<?= $currentPage === 'contact.php' ? ' aria-current="page"' : '' ?>>Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
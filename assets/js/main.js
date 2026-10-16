const contactForm = document.querySelector("#contact-form");

if (contactForm) {
    contactForm.addEventListener("submit", (event) => {
        event.preventDefault();

        if (!contactForm.reportValidity()) {
            return;
        }

        const formData = new FormData(contactForm);
        const subject = String(formData.get("subject") || "").trim();
        const body = [
            `Name: ${String(formData.get("name") || "").trim()}`,
            `Email: ${String(formData.get("email") || "").trim()}`,
            "",
            String(formData.get("message") || "").trim(),
        ].join("\n");
        const mailto = new URL("mailto:lystrafoundationuganda@gmail.com");
        mailto.searchParams.set("subject", subject);
        mailto.searchParams.set("body", body);

        window.location.href = mailto.toString();
    });
}
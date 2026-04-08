    function onloadCallback() {
        document.querySelectorAll('.g-recaptcha-response').forEach((e) => {
            e.setAttribute("aria-hidden", "true");
            e.setAttribute("aria-label", "do not use");
            e.setAttribute("aria-readonly", "true");
        });
    }
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback"></script>
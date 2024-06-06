<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Consent Modal</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Cookie Consent Modal -->
<div class="modal fade" id="cookieConsentModal" tabindex="-1" aria-labelledby="cookieConsentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cookieConsentModalLabel">Cookie Consent</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>This website uses cookies to ensure you get the best experience on our website.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Reject</button>
                <button type="button" class="btn btn-primary" onclick="acceptCookies()">Accept</button>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS and jQuery (required for Bootstrap) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Your custom JavaScript file -->
<script src="cookies.js"></script>

<script>
    // Show the cookie consent modal when the page loads
    $(document).ready(function() {
        $('#cookieConsentModal').modal('show');
    });

    // Function to accept cookies
    function acceptCookies() {
        setCookie("cookie_consent", "accepted");
        $('#cookieConsentModal').modal('hide');
    }

    // Function to set cookie
    function setCookie(name, value) {
        document.cookie = name + "=" + value;
    }
</script>

</body>
</html>

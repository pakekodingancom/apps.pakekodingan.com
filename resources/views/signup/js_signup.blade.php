<script>

    (function () {
    'use strict'
    var forms = document.querySelectorAll('.needs-validation')
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
        form.addEventListener('submit', function (event) {
            event.preventDefault()
            if (!form.checkValidity()) {
                event.stopPropagation();
            } else {
                var password = $('#password').val();
                var repeatPassword = $('#repeatPassword').val();
                if (password != repeatPassword) {
                    $('.invalid-password-match').show();
                } else if (password.length < 8) {
                    $('.invalid-password-length').show();
                } else {
                    $('.invalid-password-match').hide();
                    $('.invalid-password-length').hide();
                    var urlPost = "{{ url('/signup/store') }}";
                    var formData = new FormData(this);
                    $.ajax({
                        url : urlPost,
                        type: 'POST',
                        data: formData,
                        dataType: 'JSON',
                        processData: false,
                        contentType: false,
                        success: function(reponse) {

                        }
                    });
                }
            }
            form.classList.add('was-validated');
        }, false)
        })
    })()

</script>

<style>
    .invalid-password-match {
        display: none;
        width: 100%;
        margin-top: 0.25rem;
        font-size: .875em;
        color: #dc3545;
    }

    .invalid-password-length {
        display: none;
        width: 100%;
        margin-top: 0.25rem;
        font-size: .875em;
        color: #dc3545;
    }
</style>
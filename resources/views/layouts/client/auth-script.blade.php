<script src="/client/auth/assets/js/jquery.min.js"></script>
<script src="/client/auth/assets/js/bootstrap.min.js"></script>
<script src="/client/auth/assets/js/color-switcher.min.js"></script>
<script src="/client/auth/assets/js/preloader.min.js"></script>
<script src="/client/auth/assets/js/rocket-loader.min.js" defer=""></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script>
    window.addEventListener('success', function(event) {
        Toastify({
            text:event.detail,
            duration: 3000,
            style: {
                background: "linear-gradient(to right, #00b09b, #96c93d)",
            }
        }).showToast();
    });
    window.addEventListener('error', function(event) {
        Toastify({
            text:event.detail,
            duration: 3000,
            style: {
                background: "linear-gradient(to right, #ff0018, #ff0018)",
            }
        }).showToast();
    });
</script>
@stack('scripts')

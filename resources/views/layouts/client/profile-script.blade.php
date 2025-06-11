<!-- Start::Global Bundle Scripts (used by all pages) -->
<script src="/client/assets/js/scripts.bundle.js"></script>
<script src="/client/assets/js/custom/sidebar.js"></script>
<!-- End::Global Bundle Scripts -->
<!-- Start::Plugins (used by this page) -->
<script src="/client/assets/plugins/apexcharts/apexcharts.min.js"></script>
<script src="/client/assets/plugins/slick/slick.min.js"></script>
<script src="/client/assets/plugins/aos-master/src/aos.js"></script>
<!-- End::Plugins -->
<!-- Start::Page Scripts (used by this page) -->
<script src="/client/assets/js/custom/chart.js"></script>
<script src="/client/assets/js/custom/navbar.js"></script>
<script src="/client/assets/js/custom/custom-select.js"></script>
<!-- End::Page Scripts -->
<!-- End::Page Scripts -->
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
<script>
    let attrs = [
        'snapshot',
        'effects',
        // 'id'
    ];

    function snapKill() {
        document.querySelectorAll('div').forEach(function (element) {
            for (let i in attrs) {
                if (element.getAttribute(`wire:${attrs[i]}`) !== null) {
                    element.removeAttribute(`wire:${attrs[i]}`);
                }
            }
        });
    }

    window.addEventListener('load', (ev) => {
        snapKill();
    });
</script>
@stack('scripts')

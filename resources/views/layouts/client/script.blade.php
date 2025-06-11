<script  src="/client/assets/js/scripts.bundle.js"></script>
<!-- End::Global Bundle Scripts -->
<!-- Start::Plugins (used by this page) -->
<script  src="/client/assets/plugins/slick/slick.min.js"></script>
<script  src="/client/assets/plugins/aos-master/src/aos.js"></script>
<script  src="/client/assets/plugins/apexcharts/apexcharts.min.js"></script>
<!-- End::Plugins -->
<!-- Start::Page Scripts (used by this page) -->
<script  src="/client/assets/js/custom/custom-select.js"></script>
<script  src="/client/assets/js/pages/landing-page-v3.js"></script>
<script  src="/client/assets/js/custom/chart.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
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

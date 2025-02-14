{{-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>  --}}
<script src="{{ asset('/assets/js/core/popper.min.js') }}"></script>

<script src="{{ asset('/assets/js/core/bootstrap.min.js') }}"></script>


<script src="{{ asset('/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
<!-- <script src="../assets/js/plugins/chartjs.min.js"></script> -->
<!-- <script src="../assets/js/costume/foot.js"></script> -->
<!-- <script src="../assets/js/costume/admin/aside.js"></script> -->
<!-- <script src="../assets/js/costume/admin/nav.js"></script> -->
<!-- <script src="../assets/js/costume/head.js"></script> -->
<!-- <script src="../assets/js/costume/footer.js"></script> -->
<script>
var win = navigator.platform.indexOf('Win') > -1;
if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
    damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
}
</script>
<!-- Bootstrap JS -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('/assets/js/material-dashboard.min.js?v=3.2.0') }}"></script>
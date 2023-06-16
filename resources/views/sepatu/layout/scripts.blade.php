
{{-- script for datatables --}}
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

{{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>

{{-- datatables script --}}
<script>
    $(function() {
        let table = new DataTable('#data-table');
    })
</script>

{{-- select2 script --}}
<script>
    $("#ukuran").select2({
        theme: "bootstrap-5",
        containerCssClass: "select2--small", // For Select2 v4.0
        dropdownCssClass: "select2--small",
    });
</script>
<script>
    $("#jenis").select2({
        theme: "bootstrap-5",
        containerCssClass: "select2--small", // For Select2 v4.0
        dropdownCssClass: "select2--small",
    });
</script>

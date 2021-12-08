<!-- App's Basic Js  -->
<script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/metisMenu.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/jquery.slimscroll.js') }}"></script>
<script src="{{ URL::asset('assets/js/waves.min.js') }}"></script>

 @yield('script')

<!-- App js-->
<script src="{{ URL::asset('assets/js/app.js') }}"></script>


<!-- Sweet-Alert  -->
{{-- <script src="{{ URL::asset('plugins/sweet-alert2/sweetalert2.min.js') }}"></script>
<script src="{{ URL::asset('assets/pages/sweet-alert.init.js') }}"></script>   --}}
<script src="/js/sweetalert.min.js"></script>
<!-- Responsive-table-->
<script src="{{ URL::asset('plugins/RWD-Table-Patterns/dist/js/rwd-table.min.js') }}"></script>      
<!-- Required datatable js -->
<script src="{{ URL::asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<!-- Buttons examples -->
<script src="{{ URL::asset('plugins/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ URL::asset('plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ URL::asset('plugins/datatables/jszip.min.js') }}"></script>
<script src="{{ URL::asset('plugins/datatables/pdfmake.min.js') }}"></script>
<script src="{{ URL::asset('plugins/datatables/vfs_fonts.js') }}"></script>
<script src="{{ URL::asset('plugins/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ URL::asset('plugins/datatables/buttons.print.min.js') }}"></script>
<script src="{{ URL::asset('plugins/datatables/buttons.colVis.min.js') }}"></script>
<!-- Responsive examples -->
<script src="{{ URL::asset('plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ URL::asset('plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

<!-- Datatable init js -->
<script src="{{ URL::asset('assets/pages/datatables.init.js') }}"></script>   


@yield('script-bottom')


        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        2016 - 2018 © Aldytmra.com
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->



        <!-- jQuery  -->
        <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/waves.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.slimscroll.js"></script>

        <!-- KNOB JS -->
        <!--[if IE]>
        <script type="text/javascript" src="assets/plugins/jquery-knob/excanvas.js"></script>
        <![endif]-->
        <script src="<?php echo base_url();?>assets/plugins/jquery-knob/jquery.knob.js"></script>

        <!--Morris Chart-->
        <script src="<?php echo base_url();?>assets/plugins/morris/morris.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/raphael/raphael-min.js"></script>

        <!-- Sweet Alert Js  -->
        <script src="<?php echo base_url();?>assets/plugins/sweet-alert/sweetalert2.min.js"></script>
        <script src="<?php echo base_url();?>assets/pages/jquery.sweet-alert.init.js"></script>

        <!-- Required datatable js -->
        <script src="<?php echo base_url();?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="<?php echo base_url();?>assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/datatables/jszip.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/datatables/buttons.print.min.js"></script>

        <!-- Dashboard init -->
        <script src="<?php echo base_url();?>assets/pages/jquery.dashboard.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url();?>assets/js/jquery.core.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {

                // Default Datatable
                $('#datatable').DataTable();

                loadData();   


            });

        </script>
        <script type="text/javascript">
        function loadData(){
            var kelas=$("#kelas").val();
            var jurusan=$("#jurusan").val();
            $.ajax({
                type:'GET',
                url :'<?php echo base_url("kurikulum/dataKurikulumDetail") ?>',
                data:'jurusan='+jurusan+'&kelas'+kelas,
                success:function(html){
                    $("#tabel").html(html);
                }
            })
        }


        

    </body>
</html>
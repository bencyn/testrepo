
        <!-- /#left -->
        
                <!-- /.inner -->
         </div>
            <!-- /.outer -->

        <!-- /#content -->
        <!-- Modal -->
            <div class="modal fade" id="search_modal" tabindex="-1" role="dialog"  aria-hidden="true">
                <form>
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span class="float-right" aria-hidden="true">&times;</span>
                            </button>
                            <div class="input-group search_bar_small">
                                <input type="text" class="form-control" placeholder="Search..." name="search">
                                <span class="input-group-btn">
                                <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>
                              </span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>


</div>
<!-- /#wrap -->
<!-- !-- global scripts--> 

 <script type="text/javascript">
  var base_url="<?php echo site_url();?>";
</script>

<script type="text/javascript" src="<?php echo base_url();?>js/components.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/custom.js"></script>
<!-- global scripts end-->
<script type="text/javascript" src="<?php echo base_url();?>vendors/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>

 <script type="text/javascript" src="<?php echo base_url();?>vendors/validate/jquery.validate.min.js"></script>
 <script type="text/javascript" src="<?php echo base_url();?>js/users.js"></script>
 <script type="text/javascript" src="<?php echo base_url();?>js/members.js"></script>
 <script type="text/javascript" src="<?php echo base_url();?>js/accounts.js"></script>
 <script type="text/javascript" src="<?php echo base_url();?>js/loans.js"></script>
 <script type="text/javascript" src="<?php echo base_url();?>js/trans_type.js"></script>
 <script type="text/javascript" src="<?php echo base_url();?>js/transactions.js"></script>
 <script type="text/javascript" src="<?php echo base_url();?>js/loan_trans.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>vendors/slimscroll/js/jquery.slimscroll.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>vendors/raphael/js/raphael-min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>vendors/d3/js/d3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>vendors/c3/js/c3.min.js"></script>
<!-- <script type="text/javascript" src="<?php echo base_url();?>/vendors/toastr/js/toastr.min.js"></script> -->
<script type="text/javascript" src="<?php echo base_url();?>vendors/switchery/js/switchery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>vendors/flotchart/js/jquery.flot.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>vendors/flotchart/js/jquery.flot.resize.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>vendors/flotchart/js/jquery.flot.stack.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>vendors/flotchart/js/jquery.flot.time.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>vendors/flotspline/js/jquery.flot.spline.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>vendors/flotchart/js/jquery.flot.categories.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>vendors/flotchart/js/jquery.flot.pie.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>vendors/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>vendors/jquery_newsTicker/js/newsTicker.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>vendors/countUp.js/js/countUp.min.js"></script>
<!--end of plugin scripts-->

<script type="text/javascript" src="<?php echo base_url();?>vendors/izitoast/js/iziToast.min.js"></script>


<script type="text/javascript" src="<?php echo base_url();?>js/pages/new_dashboard.js"></script>

<!-- users script -->
      <!-- <script type="text/javascript" src="<?php echo base_url();?>js/pages/users.js"></script> -->

    <script type="text/javascript" src="<?php echo base_url('vendors/select2/js/select2.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('vendors/datatables/js/jquery.dataTables.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('vendors/datatables/js/dataTables.bootstrap.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('vendors/datatables/js/dataTables.responsive.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('vendors/datatables/js/dataTables.buttons.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('vendors/datatables/js/buttons.colVis.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('vendors/datatables/js/buttons.html5.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('vendors/datatables/js/buttons.bootstrap.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('vendors/datatables/js/buttons.print.min.js');?>"></script>

    <script type="text/javascript" src="<?php echo base_url();?>js/pluginjs/jasny-bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>vendors/holderjs/js/holder.js"></script>


    <script type="text/javascript" src="<?php echo base_url();?>vendors/slimscroll/js/jquery.slimscroll.min.js"></script>

    <!--End of Plugin scripts-->
    <!--Page level scripts-->
    <script type="text/javascript" src="<?php echo base_url();?>js/pages/mini_calendar.js"></script>
    <!--End of Page level scripts-->
    <script type="text/javascript">
        var table = $('#editable_table');
            // table.DataTable({
            //     // dom: "<'text-right'B><f>lr<'table-responsive't><'row'<'col-md-5 col-12'i><'col-md-7 col-12'p>>",
            //     // buttons: [
            //     //     'copy', 'csv', 'print'
            //     // ]
            // });
            // var tableWrapper = $("#editable_table_wrapper");
            // tableWrapper.find(".dataTables_length select").select2({
            //     showSearchInput: false //hide search box with special css class
            // }); // initialize select2 dropdown
            // $("#editable_table_wrapper .dt-buttons .btn").addClass('btn-secondary').removeClass('btn-default');
            // $(".dataTables_wrapper").removeClass("form-inline");

    </script>


</body>
</html>

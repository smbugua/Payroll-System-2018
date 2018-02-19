<?php
include('header.php');
$id=$_REQUEST['id'];

?>

    <link href="css/plugins/datapicker/datepicker3.css" rel="stylesheet">
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-5">
                    <h2>Run Payroll </h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="hrdash.php">HR Dashboard</a>
                        </li>
                        <li class="active">
                            <strong><a href="#">Run Payroll</a></strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
       <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
            <div class="col-lg-3">
            
            </div>
            <div class="col-lg-4">
            
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Add Advance</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="staffclass.php?action=addadvance&&id=<?php echo $id?>" method="post">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Period</label>
                      <div class="col-sm-10">
                        <div class="input-group">
                    	<select class="form-control" name="period">
                    	<option value="" required="">--Select Period--</option>
                    	<option><?php echo date('Y-m')?></option>
                    </select>
                    </div>
                      </div>
                    </div>
                      <div class="form-group" id="data_1">
                                <label for="inputEmail3" class="col-sm-2 control-label">Date Added</label>
                                <div class="col-sm-10">
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" name="datea" value="<?php echo Date('d-m-Y');?>">
                                </div>
                                </div>
                            </div>
                     <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Amount</label>
                      <div class="col-sm-10">
                        <input type="text" name="amount" required="" class="form-control">
                      </div>
                    </div>
                  

                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <a href="staffmember.php?id=<?php echo $id?>"  class="btn btn-default">Cancel</a>
                    <button type="submit" class="btn btn-info pull-right">Submit</button>
                  </div><!-- /.box-footer -->
                </form>
              </div><!-- /.box -->
              </div>
  </div>

            <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>


   <!-- Data picker -->
   <script src="js/plugins/datapicker/bootstrap-datepicker.js"></script>
    <script>
        $(document).ready(function(){

            $('#loading-example-btn').click(function () {
                btn = $(this);
                simpleLoad(btn, true)

                // Ajax example
//                $.ajax().always(function () {
//                    simpleLoad($(this), false)
//                });

                simpleLoad(btn, false)
            });
        });

        function simpleLoad(btn, state) {
            if (state) {
                btn.children().addClass('fa-spin');
                btn.contents().last().replaceWith(" Loading");
            } else {
                setTimeout(function () {
                    btn.children().removeClass('fa-spin');
                    btn.contents().last().replaceWith(" Refresh");
                }, 2000);
            }
        };
         function checker(){
             var $pplt=document.getElementById("ppl").value;
             var  $total=document.getElementById("tot").value;
              document.getElementById("lit").value=parseFloat($total)/parseFloat($pplt);

                      };

                       $('#data_1 .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });


    </script>
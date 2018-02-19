<?php
include('header.php');
$user=$_SESSION['user'];

?>

<link href="css/plugins/datapicker/datepicker3.css" rel="stylesheet">
    <link href="css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">
    <link href="css/plugins/clockpicker/clockpicker.css" rel="stylesheet">


<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>My Dashboard</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li class="active">
                            <strong></strong>
                        </li>
                    </ol>
                </div>
            </div>
 <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-md-3">
                    <div class="ibox float-e-margins">
                    <div class="ibox-title">
                      <font color="blue"><h5>Leaves</h5></font>
                    </div>
                    <div class="ibox-content">
                        <i class="fa fa-plane"></i><h3></h3><br>
                          <div class="font-bold text-navy"><br> <a href="vehicleadd.php" class="btn btn-success">Request Leave</a></div>
                    
                          <div class="font-bold text-navy"><br> <a href="selectreport.php" class="btn btn-success">View My Leaves</a></div>
                    </div>
                </div>
            </div>

                <div class="col-md-3">
                    <div class="ibox float-e-margins">
                    <div class="ibox-title">
                      <font color="green"><h5>Loans</h5></font>
                    </div>
                    <div class="ibox-content">
                          <i class="fa fa-bank"></i><h3></h3><br>
                          <div class="font-bold text-navy">
                <a href="servicelogs.php" class="btn btn-primary">Request Loan</a></div>
                          <div class="font-bold text-navy"><br> <a href="selectreport.php" class="btn btn-primary">My Loans</a></div>
                    </div>
                </div>
            </div>

              <div class="col-md-3">
                    <div class="ibox float-e-margins">
                    <div class="ibox-title">
                      <font color="red"><h5>Overtime</h5></font>
                    </div>
                    <div class="ibox-content">
                          <i class="fa fa-clock-o"></i><h3></h3><br>
                          <div class="font-bold text-navy">
                           <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal6">
                                    Request Overtime
                                </button>
                        </div>
                          <div class="font-bold text-navy"><br> <a href="selectreport.php" class="btn btn-danger">My Overtime Logs</a></div>
                    </div>
                </div>
            </div>
      
              <div class="col-md-3">
                    <div class="ibox float-e-margins">
                    <div class="ibox-title">
                      <font color="blue"><h5>Advances</h5></font>
                    </div>
                    <div class="ibox-content">
                          <i class="fa fa-money"></i><h3></h3><br>
                          <div class="font-bold text-navy">
                <a href="servicelogs.php" class="btn btn-info">Request Advance</a></div>
                          <div class="font-bold text-navy"><br> <a href="selectreport.php" class="btn btn-info">My Advance Logs</a></div>
                    </div>
                </div>
            </div>
            </div>
            <div class="row"> 
         <div class="col-lg-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-warning pull-right">User Inforamtion</span>
                        <h5>Active User</h5>
                    </div>
                    <?php
                    $user=$_SESSION['user'];
                    $query="SELECT * FROM staff where payrollno='$user'";
                    $row=mysql_fetch_array(mysql_query($query));
                    ?>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-xs-6">
                                <small class="stats-label">Payroll No</small>
                                <h4><?php echo $user?></h4>
                            </div>

                            <div class="col-xs-6">
                                <small class="stats-label">Full Name</small>
                                <h4><?php echo $row['staff_name']?></h4>
                            </div>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-xs-6">
                                <small class="stats-label">Email</small>
                                <h4><?php echo $row['staff_email']?></h4>
                            </div>

                            <div class="col-xs-6">
                                <small class="stats-label">My Department</small>
                                <?php
                                $sid=$row['staff_type'];
                                $dep=mysql_fetch_array(mysql_query("SELECT type_name as t from stafftype where id='$sid' "));
                                $d=$dep['t'];
                                ?>
                                <h4><?php echo $d ?></h4>
                            </div>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-xs-12">
                                <a href="updateprofile.php?id=<?php echo $row['id']?>" class="btn btn-danger btn-lng ">Update Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<div class="col-md-7">
<div class="ibox float-e-margins">
<div class="ibox-title">
          <font color="green"><h5>My Reports</h5></font>
                    </div>
                    <div class="ibox-content">
                <br >
                <a href="selectperiod.php" class="btn btn-primary">Remmitance Reports</a>
                <a href="selectperiod.php" class="btn btn-info ">NSSF Reports</a>
                <a href="selectperiod.php" class="btn btn-success ">NHIF Hours</a>
                <a href="selectperiod.php" class="btn btn-danger ">PAYE Reports</a>
                <a href="payslip.php?payrollno=<?php echo $user?>" class="btn btn-warning ">Payslip</a>
                    
          </div>

</div>

<br>



<!--MY MODALS Request Overtime -->

      <div class="modal inmodal fade" id="myModal6" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <h4 class="modal-title">Request Overtime</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p><strong>Request Overtime</strong></p>
                                        <form action="attendanceclass.php?action=requestovertime" method="post" >
                                                      <div class="form-group" id="data_1">
                                                    <label class="font-noraml">Start Date</label>
                                                    <div class="input-group date">
                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" name="datefrom" class="form-control" value="<?php echo date('Y-m-d')?>">
                                                    </div>
                                                </div>
                                                  <div class="form-group" id="data_2">
                                                    <label class="font-noraml">End Date</label>
                                                    <div class="input-group date">
                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" name="dateto" class="form-control" value="<?php echo date('Y-m-d')?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                <label class="font-noraml">Time From</label>
                                                     <div class="input-group clockpicker" data-autoclose="true">
                                                        <input type="text" name="timefrom" class="form-control" value="17:30" >
                                                        <span class="input-group-addon">
                                                            <span class="fa fa-clock-o"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                   <div class="form-group">
                                                <label class="font-noraml">Time To</label>
                                                     <div class="input-group clockpicker2" data-autoclose="true">
                                                        <input type="text" name="timeto" class="form-control" value="21:30" >
                                                        <span class="input-group-addon">
                                                            <span class="fa fa-clock-o"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <a type="button" class="btn btn-white" data-dismiss="modal">Close</a>
                                            <button type="submit" class="btn btn-primary" >Save changes</button>
                               </div>
                             </form>
                        </div>
                    </div>
        </div>
   
<!--end modal-->

<!--Request loan -->



<!--end modal -->


<!--request leave -->



<!--end modal-->



<!--request advance -->



<!--end modal -->

</div>

             <div class="footer">
            <div class="pull-right">
                Powered By <strong> Techcube Ltd</strong> Ke.
            </div>
            <div>
                <strong>Copyright</strong> Employee Portal Admin Suite &copy; 2014-<?php echo date('Y')?>
            </div>
        </div>

<style type="text/css">
    
.datepicker { 
    position: relative; z-index: 10000 !important;

 }
 .clockpicker-popover {
    z-index: 999999;
}

</style>

         <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>


   <!-- Data picker -->
   <script src="js/plugins/datapicker/bootstrap-datepicker.js"></script>

    <!-- Clock picker -->
    <script src="js/plugins/clockpicker/clockpicker.js"></script>

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
        }

          $('#data_1 .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                format: "yyyy-mm-dd",
                autoclose: true
            });
             $('#data_2 .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                format: "yyyy-mm-dd",
                autoclose: true
            });


            $('.clockpicker').clockpicker();


            $('.clockpicker2').clockpicker();

    </script>
</body>

</html>



     
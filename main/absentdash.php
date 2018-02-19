<?php
include('header.php');
$user=$_SESSION['user'];
$count=mysql_fetch_array(mysql_query("SELECT COUNT(id) as c FROM empvsovertime where status='0'"));
$c=$count['c'];
?>

    <!-- Sweet Alert -->
    <link href="css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
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
                          <div class="font-bold text-navy"><br> <a href="addleave.php" class="btn btn-success">Leave Requests</a></div>
                    
                          <div class="font-bold text-navy"><br> <a href="leaves.php" class="btn btn-success">Approved Leaves</a></div>
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
                <a href="addloans.php" class="btn btn-primary">Loan Requests</a></div>
                          <div class="font-bold text-navy"><br> <a href="loans.php" class="btn btn-primary">Approved Loans</a></div>
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
                                        <button class="btn btn-danger btn-sm demo4">Overtime Requests</button>
                                    
                                    </div>
                        <div class="font-bold text-navy">
                           <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal7">
                                    Overtime Report
                                </button>
                        </div>
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
                <a href="addadvance.php" class="btn btn-info">Advance Requests </a></div>
                          <div class="font-bold text-navy"><br> <a href="advances.php" class="btn btn-info">Approved Advances</a></div>
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
                    $query="SELECT * FROM users where username='$user'";
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
                                <h4><?php echo $row['fullname']?></h4>
                            </div>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-xs-6">
                                <small class="stats-label">Email</small>
                                <h4><?php echo $row['email']?></h4>
                            </div>

                            <div class="col-xs-6">
                                <small class="stats-label">My Department</small>
                               <h4><?php echo "ADMINISTRATOR" ?></h4>
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

</div>

             <div class="footer">
            <div class="pull-right">
                Powered By <strong> Techcube Ltd</strong> Ke.
            </div>
            <div>
                <strong>Copyright</strong> Employee Portal Admin Suite &copy; 2014-<?php echo date('Y')?>
            </div>
        </div>



        <!--MY MODALS Overtime report -->

      <div class="modal inmodal fade" id="myModal7" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <h4 class="modal-title">Overtime Report</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p><strong>Overtime Report</strong></p>
                                        <form action="report.php?action=overtime" method="post" >
                                                      <div class="form-group" id="data_1">
                                                    <label class="font-noraml">PERIOD</label>
                                                        <select class="form-control" name="period">
                                                            <option><?php echo date('Y-m')?></option>
                                                            <option value="all">All</option>
                                                        </select>
                                                    
                                                </div>
                                                  
                                            
                                        </div>
                                        <div class="modal-footer">
                                            <a type="button" class="btn btn-white" data-dismiss="modal">Close</a>
                                            <button type="submit" class="btn btn-primary" >Submit</button>
                               </div>
                             </form>
                        </div>
                    </div>
        </div>
   
<!--end modal-->

         <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>


    <!-- Sweet alert -->
    <script src="js/plugins/sweetalert/sweetalert.min.js"></script>

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


           $('.demo4').click(function () {
            swal({
                 title: "Overtime Requests",
                        text: "Your have <?php echo $c ?> Requests",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Approve Requests!",
                        cancelButtonText: "Do it Later!",
                        closeOnConfirm: true,
                        closeOnCancel: true },
                    function (isConfirm) {
                        if (isConfirm) {
                            swal("Confirmed!", "Okay wait a minute we'll take you there ", "success");
                            window.location.replace('overtime.php?period=all');
                        } else {
                            swal("Cancelled", "Have a cup of Coffee and come back later :)", "error");
                            window.location.replace('absentdash.php');
                        }
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


     

    </script>
</body>

</html>



     
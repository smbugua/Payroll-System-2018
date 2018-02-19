<?php 
include ('header.php');


?>
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Payroll Reports Dshboard</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="payroll.php">Payroll Dashboard</a>
                        </li>
                        <li class="active">
                            <strong><a href="#">Payroll Reports Dshboard</a></strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">
 
                </div>
            </div>
       <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
            <div class="col-lg-10">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Payroll Reports Dshboard</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content success">
                        <div class="row" >
                           <div class="col-sm-3 b-r"><h3 class="m-t-none m-b">Payroll Reports Dshboard</h3>
                             
                                
                            
                            </div>
                            <div class="col-sm-3 b-r"><h3 class="m-t-none m-b"><font color="red">Payroll Reports</font></h3>
                             
                    <form action="reportsclass.php"  method="post">
                                  
                                    <div class="form-group"><label>Payroll Period</label> 
                                <?php
                                     $statusQuery="select period from payrollruns";
                                        $statusResult=queryMysql($statusQuery);
                                        $no = mysql_num_rows($statusResult);
                                      echo "<select name='period' type='text' class='form-control' >";
                                    for ($i = 0 ; $i < $no ; ++$i)
                                      {
                                        $statusRow = mysql_fetch_row($statusResult);
                                        echo "<option value='$statusRow[0]'>$statusRow[0]</option>";
                                      }

                                      echo "</select><br/>";
                                    ?>
                                    </div>
                                    <div class="form-group"><label>Report</label>
                                        <select name="report" class="form-control">
                                            <option value="1">Remmitance</option>
                                            <option value="2">NSSF</option>
                                            <option value="3">NHIF</option>
                                            <option value="4">PAYE</option>
                                        </select>
                                    </div>
                                  <div class="col-sm-6">
                              
                                        <button class="btn btn-sm btn-danger pull-right m-t-n-xs" type="submit"><strong>Generate</strong></button>
                                    </div>
                            
                            </div>
                            </form>
                            <form action="pdf_batchpayslips.php" method="post">
                                 <div class="col-sm-3 b-r"><h3 class="m-t-none m-b"><font color="blue">Generate Payslips</font></h3>
                             
                                     
                                    <div class="form-group"><label>Payroll Period</label> 
                                <?php
                                     $statusQuery="select period from payrollruns";
                                        $statusResult=queryMysql($statusQuery);
                                        $no = mysql_num_rows($statusResult);
                                      echo "<select name='period' type='text' class='form-control' >";
                                    for ($i = 0 ; $i < $no ; ++$i)
                                      {
                                        $statusRow = mysql_fetch_row($statusResult);
                                        echo "<option value='$statusRow[0]'>$statusRow[0]</option>";
                                      }

                                      echo "</select><br/>";
                                    ?>
                                    </div>
                                  
                                  <div class="col-sm-6">
                              
                                        <button class="btn btn-sm btn-success pull-right m-t-n-xs" type="submit"><strong>Generate</strong></button>
                                    </div>
                            
                            </div>

                        </form>
                        <form>
                                 <div class="col-sm-3 b-r"><h3 class="m-t-none m-b">Payroll Reports Dshboard</h3>
                             
                            
                            </div></form>
                        
                          
                           </div>
                            
                        </div>
                    </div>
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
    </script>
</body>

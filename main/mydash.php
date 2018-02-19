<?php
include('header.php');
$row=mysql_fetch_array(mysql_query("SELECT COUNT(id) as c From vehicle where status='0'"));
$row1=mysql_fetch_array(mysql_query("SELECT COUNT(id) as c From servicelogs "));
$row2=mysql_fetch_array(mysql_query("SELECT COUNT(id) as c From garagelogs"));

//current month
$m=date('m'); 
$m0=$m-1; 
$m1=$m-2;
// current months
$mstart=date('Y-m-1');
$mend=date('Y-m-30');

//last month
$m0start=date('Y-'.$m0.'-1');
$m0end=date('Y-'.$m0.'-30');
//lastx1 month
$m1start=date('Y-'.$m1.'-1');
$m1end=date('Y-'.$m1.'-30');

//Convert MonthNumber to month Name
$mname = date("F", mktime(0, 0, 0, $m, 10));
$m0name = date("F", mktime(0, 0, 0, $m0, 10));
$m1name = date("F", mktime(0, 0, 0, $m1, 10));

//get income data
$income=mysql_fetch_array(mysql_query("SELECT SUM(amountpaid) as tot from receipts where dateadded>='$mstart' && dateadded<='$mend'"));
$i=$income['tot'];

$income1=mysql_fetch_array(mysql_query("SELECT SUM(amountpaid) as tot from receipts where dateadded>='$m0start' && dateadded<='$m0end'"));
$i1=$income1['tot'];

$income2=mysql_fetch_array(mysql_query("SELECT SUM(amountpaid) as tot from receipts where dateadded>='$m1start' && dateadded<='$m1end'"));
$i2=$income2['tot'];

//get expense data
$exp=mysql_fetch_array(mysql_query("SELECT SUM(voucher_amount) as tot from voucher where dateadded>='$mstart' && dateadded<='$mend'"));
$e=$exp['tot'];

$exp1=mysql_fetch_array(mysql_query("SELECT SUM(voucher_amount) as tot from voucher where dateadded>='$m0start' && dateadded<='$m0end'"));
$e1=$exp1['tot'];

$exp2=mysql_fetch_array(mysql_query("SELECT SUM(voucher_amount) as tot from voucher where dateadded>='$m1start' && dateadded<='$m1end'"));
$e2=$exp2['tot'];

?>
  <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>Vehicle Dashboard</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li class="active">
                            <strong>Vehicle Dashboard</strong>
                        </li>
                    </ol>
                </div>
            </div>
 <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-md-3">
                    <div class="ibox float-e-margins">
                    <div class="ibox-title">
                      <font color="green"><h5>Vehicles</h5></font>
                    </div>
                    <div class="ibox-content">
                        <i class="fa fa-pie-chart"></i><h3> <?php echo $row['c'] ?> Vehicles</h3><br>
                          <div class="font-bold text-navy"><br> <a href="vehicleadd.php" class="btn btn-success">Add Vehicle</a></div>
                    
                          <div class="font-bold text-navy"><br> <a href="vehicles.php" class="btn btn-info">View Vehicles</a></div>
                    </div>
                </div>
            </div>

                <div class="col-md-3">
                    <div class="ibox float-e-margins">
                    <div class="ibox-title">
                      <font color="green"><h5>Service Logs</h5></font>
                    </div>
                    <div class="ibox-content">
                          <i class="fa fa-desktop"></i><h3> <?php echo $row1['c'] ?> Service Logs</h3><br>
                          <div class="font-bold text-navy">
                <a href="servicelogs.php" class="btn btn-primary">Service Logs</a></div>
                          <div class="font-bold text-navy"><br> <a href="fuels.php" class="btn btn-info">Fuel Logs</a></div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                    <form action="vcatreport.php" method="post">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                      <font color="green"><h5>Vehicle Category Reports</h5></font>
                    </div>
                    <div class="ibox-content">
                        <label>Choose Vehicle Category</label><i class="fa fa-star"></i><br>
                              <?php
                                     $statusQuery="select vcategory from vcat";
                                        $statusResult=queryMysql($statusQuery);
                                        $no = mysql_num_rows($statusResult);
                                      echo "<select name='vitem' type='text' class='form-control' >";
                                    for ($i = 0 ; $i < $no ; ++$i)
                                      {
                                        $statusRow = mysql_fetch_row($statusResult);
                                        echo "<option>$statusRow[0]</option>";
                                      }

                                      echo "</select><br/>";
                                    ?>
                          <div class="font-bold text-navy"><br> <button class="btn btn-danger">Generate Report</button></div>
                    </div>
                </div>
                </form>
            </div>
               <div class="col-md-3">
            <div class="ibox float-e-margins">
                    <div class="ibox-title">
                      <font color="green"><h5>Vehicle Maintenance</h5></font>
                    </div>
                    <div class="ibox-content">
                <br >
                <i class="fa fa-sitemap"></i><h3> <?php echo $row2['c'] ?> Garage Logs</h3>
                <a href="garage.php" class="btn btn-primary">Add Garage Logs</a>
                <a href="garagelogs" class="btn btn-danger">Garage Logs</a>
                    
          </div>
          </div>
          </div>
            </div>
            <div class="row"> 
            <div class="col-md-3">
            <div class="ibox float-e-margins">
                    <div class="ibox-title">
                      <font color="green"><h5>Vehicles</h5></font>
                    </div>
                    <div class="ibox-content">

            <table class="table table-stripped table-bordered">
              <?php
              $query="SELECT plate as vi  FROM vehicle ORDER BY plate ASC ";
              $result=mysql_query($query);
              ?>
              <tbody>
              <?php while ($row = mysql_fetch_array($result)) { ?>     
              <tr>
              <td><?php echo $row['vi'];?></td>
              </tr>
              <?php } ?>
              </tbody>
            </table> 
            </div>
</div>
</div>
<div class="col-md-7">
<div class="ibox float-e-margins">
<div class="ibox-title">
          <font color="green"><h5>Vehicle Reports</h5></font>
                    </div>
                    <div class="ibox-content">
                <br >
                <a href="selectvehicle.php?section=fuel" class="btn btn-primary">Fuel Reports</a>
                <a href="selectvehicle.php?section=mileage" class="btn btn-info ">Mileage Reports</a>
                <a href="selectvehicle.php?section=hours" class="btn btn-success ">Operation Hours</a>
                <a href="selectvehicle.php?section=service" class="btn btn-danger ">Service Reports</a>
                <a href="selectvehicle.php?section=garage" class="btn btn-warning ">Garage Reports</a>
                    
          </div>

</div>
<div class="ibox float-e-margins">
<div class="ibox-title">
          <font color="green"><h5>Vehicle Graphs</h5></font>
                    </div>
                    <div class="ibox-content">
                <br >
                <a href="graphselect.php?section=fuel" class="btn btn-primary">Fueling Graphs</a>
                <a href="graphselect.php?section=mileage" class="btn btn-info ">Mileage Graphs</a>
                <a href="graphselect.php?section=hours" class="btn btn-success ">Operation Graphs</a>
                    
          </div>

</div>
<div class="ibox-title">
          <font color="green"><h5>Account Reports</h5></font>
                    </div>
                    <div class="ibox-content">
                <br >
                <a href="selectaccount.php?section=customer" class="btn btn-primary">Cutomer Statements</a>
                <a href="selectaccount.php?section=supplier" class="btn btn-info ">Supplier Statements</a>
                <a href="selectaccount.php?section=voucher" class="btn btn-success ">Voucher Reports</a>
                <!--a href="selectaccount.php?section=service" class="btn btn-danger ">Service Reports</a>
                <a href="selectaccount.php?section=garage" class="btn btn-warning ">Garage Reports</a-->
                    
          </div>

</div>
<br>

</div>

             <div class="footer">
            <div class="pull-right">
                Powered By <strong> Techcube Ltd</strong> Ke.
            </div>
            <div>
                <strong>Copyright</strong> Fleet Manager+ Admin Suite &copy; 2014-<?php echo date('Y')?>
            </div>
        </div>
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

</html>

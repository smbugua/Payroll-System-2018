<?php
include('header.php');
$query="SELECT COUNT(id) as c  FROM users";
$usr=mysql_fetch_array(mysql_query($query));

$proj="SELECT COUNT(id) as c FROM staff";
$veh=mysql_fetch_array(mysql_query($proj));


$sch="SELECT COUNT(id) as c   FROM payrollruns";
$serv=mysql_fetch_array(mysql_query($sch));


$gr="SELECT COUNT(id) as c   FROM stafftype";
$gar=mysql_fetch_array(mysql_query($gr));


$gr1="SELECT COUNT(id) as c   FROM users";
$gar1=mysql_fetch_array(mysql_query($gr1));


$main="SELECT * FROM settings";
$mainquery=mysql_fetch_array(mysql_query($main));


//$balquery="SELECT balance as bal FROM reconsiledbalance ORDER BY id DESC ";
//$b=mysql_fetch_array(mysql_query($balquery));
//$bal=$b['bal'];

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



?>
 <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-md-2">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Current Staff Members</h5>
                    </div>
                    <div class="ibox-content">
                         <h1 class="no-margins"><?php echo $veh['c']?></h1><br ><small> </small><br>
                          <div class="font-bold text-navy"><br> <a href="addstaff.php" class="btn btn-warning">Add Staff Member</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Payroll Run Logs </h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">
                        <?php echo $serv['c']?></h1><br ><small> </small><br>
                        <div class="font-bold text-navy"><br> <a href="saldetails.php" class="btn btn-danger">Payroll Report</a></div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-primary pull-right"></span>
                        <h5>Employee Categories</h5>
                    </div>
                    <div class="ibox-content">

                        <div class="row">
                            <div class="col-md-6">
                                <h1 class="no-margins"><?php echo $gar['c']?> </h1><br><small></small><br>
                                <div class="font-bold text-navy"> <br><a href="addstafftype.php" class="btn btn-success">Add Category</a></div>
                            </div>
                            <div class="col-md-6">
                            
                                <h1 class="no-margins"><?php echo $gar1['c']?> </h1><br><small>Users</small><br>
                                <div class="font-bold text-navy"><br> <a href="adduser.php" class="btn btn-danger">Add User</a></div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Head Office Details</h5>
                        <div class="ibox-tools">
                            <span class="label label-primary">Updated <?php echo $mainquery['datemodified']?></span>
                        </div>
                    </div>
                    <div class="ibox-content no-padding">
                        <div class="hidden">
                        <div class="flot-chart m-t-lg" style="height: 55px;">
                            <div class="flot-chart-content" id="flot-chart1"></div>
                        </div>
                        </div>
                         <table class="table table-stripped">
                        <tbody>
                            <tr>
                                <td>Office: </td>
                                <td><?php echo $mainquery['main_name']?></td>
                            </tr>
                             <tr>
                                <td>County: </td>
                                <td><?php echo $mainquery['main_location']?></td>
                            </tr>
                              <tr>
                                <td>Tel: </td>
                                <td><?php echo $mainquery['main_tel']?></td>
                            </tr>
                              <tr>
                                <td>Address: </td>
                                <td><?php echo $mainquery['main_address']?></td>
                            </tr>
                        </tbody>
                           
                        </table>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                       <table class="table table-bordered table-stripped">
                       <h2><font  color="blue">Department Count</font></h2>
                           <body>
                          <tr> <th>Department</th><th>Count</th></tr>
                               <?php
                               $result=mysql_query("SELECT id,type_name from  stafftype");
                               while ( $row=mysql_fetch_array($result)) {
                                $r=$row['type_name'];
                                $rid=$row['id'];
                                $count=mysql_fetch_array(mysql_query("SELECT COUNT(id) as c FROM staff WHERE staff_type='$rid'"));
                                $c=$count['c'];
                               echo "<tr bgcolor='#DEEDEE'><td>$r</td><td>$c</td></tr>";
                            }
                               ?>
                               <tr><th>Total</th><th><font color="red"><?php echo $veh['c'] ?></font></th></tr>
                           </body>
                           
                       </table>
                </div>
            </div>
        </div>

               
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
                                <small class="stats-label">User Name</small>
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
                                <small class="stats-label">Date Created</small>
                                <h4><?php echo $row['datemodified']?></h4>
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

        </div>

       
           <div class="footer">
            <div class="pull-right">
                Powered By <strong> Techcube Ltd</strong> Ke.
            </div>
            <div>
                <strong>Copyright</strong> Fleet Manage+ Admin Suite &copy; 2014-<?php echo date('Y')?>
            </div>
        </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="js/plugins/flot/jquery.flot.symbol.js"></script>
    <script src="js/plugins/flot/curvedLines.js"></script>

    <!-- Peity -->
    <script src="js/plugins/peity/jquery.peity.min.js"></script>
    <script src="js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- Jvectormap -->
    <script src="js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- Sparkline -->
    <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="js/plugins/chartJs/Chart.min.js"></script>

    <script>
        $(document).ready(function() {


            var d1 = [[1262304000000, 6], [1264982400000, 3057], [1267401600000, 20434], [1270080000000, 31982], [1272672000000, 26602], [1275350400000, 27826], [1277942400000, 24302], [1280620800000, 24237], [1283299200000, 21004], [1285891200000, 12144], [1288569600000, 10577], [1291161600000, 10295]];
            var d2 = [[1262304000000, 5], [1264982400000, 200], [1267401600000, 1605], [1270080000000, 6129], [1272672000000, 11643], [1275350400000, 19055], [1277942400000, 30062], [1280620800000, 39197], [1283299200000, 37000], [1285891200000, 27000], [1288569600000, 21000], [1291161600000, 17000]];

            var data1 = [
                { label: "Data 1", data: d1, color: '#17a084'},
                { label: "Data 2", data: d2, color: '#127e68' }
            ];
            $.plot($("#flot-chart1"), data1, {
                xaxis: {
                    tickDecimals: 0
                },
                series: {
                    lines: {
                        show: true,
                        fill: true,
                        fillColor: {
                            colors: [{
                                opacity: 1
                            }, {
                                opacity: 1
                            }]
                        },
                    },
                    points: {
                        width: 0.1,
                        show: false
                    },
                },
                grid: {
                    show: false,
                    borderWidth: 0
                },
                legend: {
                    show: false,
                }
            });

            var lineData = {
                labels: ["<?php echo $m1name?>", "<?php echo $m0name ?>","<?php echo $mname ?>"],
                datasets: [
                    {
                        label: "Monthly Income",
                        fillColor: "rgba(220,220,220,0.5)",
                        strokeColor: "rgba(220,220,220,1)",
                        pointColor: "rgba(220,220,220,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(220,220,220,1)",
                        data: [700000,440000, <?php echo $i?> ]
                    },
                    {
                        label: "Monthly Expense",
                        fillColor: "rgba(26,179,148,0.5)",
                        strokeColor: "rgba(26,179,148,0.7)",
                        pointColor: "rgba(26,179,148,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(26,179,148,1)",
                        data: [400000,200000, <?php echo $e?>]
                    }
                ]
            };

            var lineOptions = {
                scaleShowGridLines: true,
                scaleGridLineColor: "rgba(0,0,0,.05)",
                scaleGridLineWidth: 1,
                bezierCurve: true,
                bezierCurveTension: 0.4,
                pointDot: true,
                pointDotRadius: 4,
                pointDotStrokeWidth: 1,
                pointHitDetectionRadius: 20,
                datasetStroke: true,
                datasetStrokeWidth: 2,
                datasetFill: true,
                responsive: true,
            };


            var ctx = document.getElementById("lineChart").getContext("2d");
            var myNewChart = new Chart(ctx).Line(lineData, lineOptions);




        });
    </script>
</body>
</html>

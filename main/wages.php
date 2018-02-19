<?php 
include ('header.php');


?>
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Wages Dashboard </h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="wages.php">Wages</a>
                        </li>
                        <li class="active">
                            <strong><a href="#">Initialize</a></strong>
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
                        <h5>Wages Dashboard </h5>
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
                    <form action="recordwages.php"  method="post">
                        <div class="row" >
                           <div class="col-sm-3 b-r"><h3 class="m-t-none m-b">Wage Dashboard</h3>
                             
                                
                            
                            </div>
                            <div class="col-sm-3 b-r"><h3 class="m-t-none m-b">Record Wages</h3>
                             
                                    <div class="form-group"><label>Start Date</label> <input name="sdate" type="date" required=""  class="form-control"></div>

                                    <div class="form-group"><label>End Date</label> <input name="edate" type="date" required=""  class="form-control">
                                    </div>
                                    <div class="form-group"> <label>No of Casuals</label><input type="number" class="form-control" name="no" required="">
                                    	
                                    </div>
                                  <div class="col-sm-6">
                              
                                        <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Submit</strong></button>
                                    </div>
                            
                            </div>
                            </form>
                            <form action="wagereport.php" method="post">
                                 <div class="col-sm-3 b-r"><h3 class="m-t-none m-b">Generate Wage Report</h3>
                             
                                     <div class="form-group"><label>Start Date</label> <input name="sdate" type="date" required=""  class="form-control"></div>

                                    <div class="form-group"><label>End Date</label> <input name="edate" type="date" required=""  class="form-control">
                                    </div>
                                    
                                  <div class="col-sm-6">
                              
                                        <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Submit</strong></button>
                                    </div>
                            
                            </div>

                        </form>
                        <form>
                                 <div class="col-sm-3 b-r"><h3 class="m-t-none m-b">Wages Dshboard</h3>
                             
                            
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

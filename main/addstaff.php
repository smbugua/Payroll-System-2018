<?php
include('header.php');
?>

    <link href="css/plugins/datapicker/datepicker3.css" rel="stylesheet">
  <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Add New Staff</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="staffdetails.php">Staff</a>
                        </li>
                        <li class="active">
                            <strong><a href="#">Add New Staff</a></strong>
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
                        <h5><font color="blue">Add a New Staff</font></h5>
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
                    <div class="ibox-content">
                    <form action="staffadd.php"  method="post">
                        <div class="row" >
                            <div class="col-sm-6 b-r"><h3 class="m-t-none m-b"> <font color="green">New Staff Details</font></h3>
                                    <div class="form-group"><label>Staff Name</label> <input name="sname" type="text" required="" placeholder="Enter staff's name" class="form-control"></div>
                                    
                                    <div class="form-group"><label>Staff ID number</label> <input name="sidno" type="number" required="" placeholder="Enter staff's ID Number" class="form-control"></div>
                                    
                                    <div class="form-group"><label>Staff Email</label> <input name="semail" type="email"  placeholder="Enter staff's email" class="form-control"></div>
                                    
                                      <div class="form-group"><label>Telephone Number</label> <input name="stel" type="number"  placeholder="Enter Member's phone number" class="form-control"></div>

                                   <div class="form-group"><label>Status</label> <select name="sstatus" class="form-control">
                                        <option value="1">Active</option>
                                        <option value="2">Terminated</option>
                                        <option value="3">On Leave</option>
                                    </select> </div>
                                    
                                    
                            
                            </div>
                            <div class="col-sm-6">
                                <div>
                                <div class="form-group" id="data_1">
                                <label>Date added </label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" name="datea" value="<?php echo Date('d-m-Y');?>">
                                </div>
                            </div>
                                 <div class="form-group"><label>NHIF No</label> <input name="nhif" type="text"  class="form-control"></div>
                                   <div class="form-group"><label>NSSF No</label> <input name="nssf" type="text"  class="form-control"></div>
                                     <div class="form-group"><label>PIN No</label> <input name="pinno" type="text"  class="form-control"></div>

                              <div class="form-group"><label>Job Description</label>
                                         <?php
                                     $statusQuery="select id,type_name from stafftype";
                                        $statusResult=queryMysql($statusQuery);
                                        $no = mysql_num_rows($statusResult);
                                      echo "<select name='stype' type='text' class='form-control' >";
                                    for ($i = 0 ; $i < $no ; ++$i)
                                      {
                                        $statusRow = mysql_fetch_row($statusResult);
                                        echo "<option value='$statusRow[0]'>$statusRow[1]</option>";
                                      }

                                      echo "</select><br/>";
                                    ?>
                           </div>
                                        </div>
                                        <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Save</strong></button>
                                    </div>

                            </div>
                            
                        </div>
                        </form>
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
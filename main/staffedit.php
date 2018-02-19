<?php
include('header.php');
$id=$_REQUEST['id'];
$row=mysql_fetch_array(mysql_query("SELECT * FROM staff where id='$id'"));
?>
  <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Update Staff Details</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="staffdetails.php">Staff</a>
                        </li>
                        <li class="active">
                            <strong><a href="#">Update Staff Details</a></strong>
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
                        <h5>Update Staff Details</h5>
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
                    <form action="staffclass.php?id=<?php echo $id?>&action=updatestaff"  method="post">
                        <div class="row" >
                            <div class="col-sm-6 b-r"><h3 class="m-t-none m-b">New Staff Details <input type="text"  value="<?php echo $id?>" class="hidden" name="id"> </h3>
                               
                                    <div class="form-group"><label>Staff Name</label> <input name="sname" type="text" required="" value="<?php echo $row['staff_name']?>" class="form-control"></div>
                                    
                                    <div class="form-group"><label>Staff ID number</label> <input name="sidno" type="number" required="" value="<?php echo $row['national_id']?>" class="form-control"></div>
                                    
                                    <div class="form-group"><label>Staff Email</label> <input name="semail" type="email" required=""value="<?php echo $row['staff_email']?>"class="form-control"></div>
                                    
                                      <div class="form-group"><label>Telephone Number</label> <input name="stel" type="number" required="" value="<?php echo $row['staff_telno']?>" class="form-control"></div>

                                   <div class="form-group"><label>Status</label> <select name="sstatus" class="form-control">
                                        <option>Active</option>
                                        <option>Terminated</option>
                                        <option>On Leave</option>
                                    </select> </div>
                                    
                                    
                            
                            </div>
                            <div class="col-sm-6">
                                <div>                                <div class="form-group"><label>Salary</label>
                                 <input name="salary" type="number" value="<?php echo $row['salary']?>" class="form-control"></div>
                                 <div class="form-group"><label>NHIF No</label> 
                                 <input name="nhif" type="text" value="<?php echo $row['nhifno']?>"  class="form-control"></div>
                                   <div class="form-group"><label>NSSF No</label> 
                                   <input name="nssf" type="text" value="<?php echo $row['nssfno']?>"  class="form-control"></div>
                                     <div class="form-group"><label>PIN No</label> <input name="pinno" type="text" value="<?php echo $row['pinno']?>"  class="form-control"></div>


                              <div class="form-group"><label>Job Description</label>
                                         <?php
                                     $statusQuery="select type_name from stafftype";
                                        $statusResult=queryMysql($statusQuery);
                                        $no = mysql_num_rows($statusResult);
                                      echo "<select name='stype' type='text' class='form-control' >";
                                    for ($i = 0 ; $i < $no ; ++$i)
                                      {
                                        $statusRow = mysql_fetch_row($statusResult);
                                        echo "<option value=$statusRow[0]>$statusRow[0]</option>";
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
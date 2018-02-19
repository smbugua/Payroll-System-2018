<?php
include('header.php');
?>
  <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Add New Bank</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="banks.php">Banks</a>
                        </li>
                        <li class="active">
                            <strong><a href="#">Add Bank</a></strong>
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
                        <h5>Add a New Bank <small>Use this form to add a new bank</small></h5>
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
                    <form action="bankadd.php" method="post">
                        <div class="row" method="post">
                            <div class="col-sm-6 b-r"><h3 class="m-t-none m-b">Bank</h3>
                                <p>Add new bank details below.</p>
                                    <div class="form-group"><label>Bank Name</label> 
                                        <?php
                                     $statusQuery="select bank from banks order by bcode asc";
                                        $statusResult=queryMysql($statusQuery);
                                        $no = mysql_num_rows($statusResult);
                                      echo "<select name='bname' type='text' class='form-control' >";
                                    for ($i = 0 ; $i < $no ; ++$i)
                                      {
                                        $statusRow = mysql_fetch_row($statusResult);
                                        echo "<option>$statusRow[0]</option>";
                                      }
                                            # code...
                                                                       
                                      echo "</select><br/>";
                                    ?>
                                    </div>
                                    <div class="form-group"><label>Branch Name</label> 
                                    <input type="text" class="form-control" name="bbranch" required="" placeholder="Bank Branch">
                                    </div>
                                    
                            </div>
                            <div class="col-sm-6">
                                <div>
                        <div class="form-group"><label>Account No</label> <input name="accountno" type="number"  class="form-control" required="" placeholder="Bank Account Number" ></div> 
                        <div class="form-group"><label>Bank Balance</label> <input name="bbal" type="number"  class="form-control" required="" placeholder="Bank Account Balance" ></div>                                 
                                 <div class="form-group"><label>Date </label> <input name="datea" type="date"  class="form-control" value="<?php echo date('Y-m-d')?>" ></div>
                                        <button class="btn btn-sm btn-danger pull-right m-t-n-xs" type="submit"><strong>Save</strong></button>
                                    </div>
                            </div>
                            
                        </div>
                        </form>
                    </div>
                </div>
            </div>
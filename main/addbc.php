<?php
include('header.php');
?>
  <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Bank to Cashbook</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                    
                        <li class="active">
                            <strong><a href="#">Withdraw from Bank</a></strong>
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
                        <h5>Record cash from Bank</h5>
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
                    <form action="bcadd.php"  method="post">
                        <div class="row" >
                            <div class="col-sm-6 b-r"><h3 class="m-t-none m-b">Cash Details</h3>

                               
                                    <div class="form-group"><label>Amount (Ksh)</label> <input name="camount" type="text" required="" placeholder="Enter the amount withdrawn" class="form-control"></div>
                                    
                                    <div class="form-group"><label>Particular</label> <input name="cparticular" type="text" required="" placeholder="Enter the details of the transaction" class="form-control"></div>
                                    <div class="col-sm-6">
                                <div>
                               <div class="form-group"><label> Date of withdrawal </label> <input name="datea" type="date"  class="form-control" 
                               value="<?php echo Date('Y-m-d');?>" ></div>

                             
                                        </div>
                                    
                            
                            </div>
                            
                                        <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Save</strong></button>
                                    </div>

                          
                            
                        </div>
                        </form>
                    </div>
                </div>
            </div>
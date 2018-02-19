<?php
include('header.php');
?>
  <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Add New Settings </h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="settingsdetails.php">Settings</a>
                        </li>
                        <li class="active">
                            <strong><a href="#">Add Settings</a></strong>
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
                        <h5>Add Settings </h5>
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
                    <form action="assetadd.php"  method="post">
                        <div class="row" >
                            <div class="col-sm-6 b-r"><h3 class="m-t-none m-b">Settings</h3>
                                <p>Add Your Settings Here.</p>
                                    <div class="form-group"><label>Institution name</label> <input name="stname" type="text" required="" placeholder="Enter your institution name" class="form-control"></div>
                                    <div class="form-group"><label>Location</label> <input name="stlocation" type="text" required="" placeholder="Enter your location" class="form-control"></div>
                                     <div class="form-group"><label>Phone Number</label> <input name="sttel" type="number" required="" placeholder="Enter your phone number" class="form-control"></div>
                                      <div class="form-group"><label>Address</label> <input name="staddress" type="text" required="" placeholder="Enter your address" class="form-control"></div>
                                    
                                   
                                   
                                    
                            
                            </div>
                            <div class="col-sm-6">
                                <div>
                               <div class="form-group"><label> Date modified</label> <input name="stdate" type="date"  class="form-control" 
                               value="<?php echo Date('mm/dd/yyyy');?>" ></div>
                                        <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Save</strong></button>
                                    </div>
                            </div>
                            
                        </div>
                        </form>
                    </div>
                </div>
            </div>
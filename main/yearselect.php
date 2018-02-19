<?php
include('header.php');
?>
  <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Add New Vote Allocation</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="bursary.php">Allocations</a>
                        </li>
                        <li class="active">
                            <strong><a href="#">Select Vote Item</a></strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
       <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
            <div class="col-lg-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        
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
                    <form action="voteallocation.php" method="post">
                        <div class="row" method="post">
                            <div class="col-sm-12 b-r"><h3 class="m-t-none m-b">Select Year</h3>
                               
                                    <div class="form-group"><label>Year Name</label> 
                                    <select class="form-control" name="yr">
                                       <option>2016/2017</option>
                                       <option>2015/2016</option>
                                       </select>
                                    </div>
                                      
                                        <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Submit</strong></button>
                                    </div>
                            </div>
                            
                        </div>
                        </form>
                    </div>
                </div>
            </div>
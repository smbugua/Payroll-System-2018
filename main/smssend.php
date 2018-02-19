<?php
include('header.php');
$id=$_REQUEST['id'];
$msg=mysql_fetch_array(mysql_query("SELECT body FROM sms WHERE id='$id'"));
?>
  <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>SEND SMS</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="smslist.php">SMS List</a>
                        </li>
                        <li class="active">
                            <strong><a href="#">Send SMS</a></strong>
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
                        <h5>SEND SMS</h5>
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
                    <form action="smsverify.php?id=<?php echo $id?>"  method="post">
                        <div class="row" >
                               
                          
                                     <div class="form-group"><label>Message Text</label> 
                                     <textarea class="form-control" name="msg" readonly="" cols="10" rows="5">
                                     	<?php echo $msg['body']?>
                                     </textarea>
                                     </div>

                              <div class="form-group"><label>Choose Database</label>
                                         <select name="db" class="form-control">
                                         	<option value="0">TEST</option>
                                         	<option value="1">MolarsDb</option>
                                         </select>
                           </div>
                                        <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Send</strong></button>
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
        };
         function checker(){
             var $pplt=document.getElementById("ppl").value;
             var  $total=document.getElementById("tot").value;
              document.getElementById("lit").value=parseFloat($total)/parseFloat($pplt);

                      };


    </script>
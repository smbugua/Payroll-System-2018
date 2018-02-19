<?php
include('header.php');

$usr=$_SESSION['user'];
$msgCOUNT=mysql_fetch_assoc(mysql_query("SELECT COUNT(id) as c FROM messages where touser='$usr'"));
$msgsent=mysql_fetch_assoc(mysql_query("SELECT COUNT(id) as c FROM messages where uname='$usr'"));
$no= $msgCOUNT['c'];
$nosent= $msgsent['c'];
?>


        <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-lg-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-content mailbox-content">
                        <div class="file-manager">
                            <a class="btn btn-block btn-info compose-mail" href="mailbox.php">View Inbox</a>
                            <div class="space-25"></div>
                            <h5>Folders</h5>
                            <ul class="folder-list m-b-md" style="padding: 0">
                                <li><a href="mailbox.php"> <i class="fa fa-inbox "></i> Inbox <span class="label label-warning pull-right"><?php echo $no?></span> </a></li>
                                <li><a href="mailsent.php"> <i class="fa fa-envelope-o"></i> Outbox<span class="label label-danger pull-right"><?php echo $nosent?></span></a></li>
                               <!--li><a href="#"> <i class="fa fa-file-text-o"></i> Drafts </a></li>
                                <li><a href="#"> <i class="fa fa-trash-o"></i> Trash</a></li-->
                            </ul>
                            
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 animated fadeInRight">
            <div class="mail-box-header">
                <div class="pull-right tooltip-demo">
                    <a href="mailbox.html" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Move to draft folder"><i class="fa fa-pencil"></i> Draft</a>
                    <a href="mailbox.php" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Discard email"><i class="fa fa-times"></i> Discard</a>
                </div>
                <h2>
                    Compse mail
                </h2>
            </div>
                <div class="mail-box">


                <div class="mail-body">

                    <form class="form-horizontal" action="mailer.php" method="post">
                        <div class="form-group"><label class="col-sm-2 control-label">To:</label>

                            <div class="col-sm-10"><?php
                                     $statusQuery="select username from users";
                                        $statusResult=queryMysql($statusQuery);
                                        $no = mysql_num_rows($statusResult);
                                      echo "<select name='touser' type='text' class='form-control' >";
                                    for ($i = 0 ; $i < $no ; ++$i)
                                      {
                                        $statusRow = mysql_fetch_row($statusResult);
                                        echo "<option value=$statusRow[0]>$statusRow[0]</option>";
                                      }

                                      echo "</select><br/>";
                                    ?></div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label" >Subject:</label>

                            <div class="col-sm-10"><input type="text" name="sub" class="form-control" value=""></div>
                        </div>
                        

                </div>

                    <div class="mail-text h-200">
<label class="col-sm-2 control-label" >Message:</label>
                      <textarea class="form-control" cols="10" rows="10" required="" name="msg"></textarea>
                            
                            <br/>
                            <br/>

                        
                        </div>
<div class="clearfix"></div>
                        </div>
                    <div class="mail-body text-right tooltip-demo">
                        <button  class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Send" ><i class="fa fa-reply"></i> Send</button>
                        <a href="mailbox.php" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Discard email"><i class="fa fa-times"></i> Discard</a>
                        <a href="#" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Move to draft folder"><i class="fa fa-pencil"></i> Draft</a>
                    </div>
                    <div class="clearfix"></div>

</form>

                </div>
            </div>
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

    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>

    <!-- SUMMERNOTE -->
    <script src="js/plugins/summernote/summernote.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });


            $('.summernote').summernote();

        });
        var edit = function() {
            $('.click2edit').summernote({focus: true});
        };
        var save = function() {
            var aHTML = $('.click2edit').code();
            alert (aHTML) //save HTML If you need(aHTML: array).
            $('.click2edit').destroy();
        };

    </script>
</body>

</html>

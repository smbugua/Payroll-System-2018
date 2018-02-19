<?php
include('header.php');
$usr=$_SESSION['user'];
$id=$_REQUEST['id'];
$msg=mysql_query("SELECT * FROM messages where id='$id' ");
mysql_query("UPDATE messages SET status='1' WHERE id='$id'");
$msgCOUNT=mysql_fetch_assoc(mysql_query("SELECT COUNT(id) as c FROM messages where touser='$usr'"));
$msgsent=mysql_fetch_assoc(mysql_query("SELECT COUNT(id) as c FROM messages where uname='$usr'"));
$no= $msgCOUNT['c'];
$nosent= $msgsent['c'];
$msgrows=mysql_fetch_assoc($msg);
$user=$msgrows['uname'];
$fquery=mysql_fetch_array(mysql_query("SELECT fullname FROM users WHERE username='$user'"));
$fname=$fquery['fullname'];
?>

    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-lg-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-content mailbox-content">
                        <div class="file-manager">
                            <a class="btn btn-block btn-primary compose-mail" href="mail_compose.php">Compose Mail</a>
                            <div class="space-25"></div>
                            <h5>Folders</h5>
                            <ul class="folder-list m-b-md" style="padding: 0">
                                <li><a href="mailbox.php"> <i class="fa fa-inbox "></i> Inbox <span class="label label-warning pull-right"><?php echo $no?></span> </a></li>
                                <li><a href="mailsent.php"> <i class="fa fa-envelope-o"></i> Send Mail<span class="label label-danger pull-right"><?php echo $nosent?></span></a></li>
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
                
                <h2>
                    View Message
                </h2>
                <div class="mail-tools tooltip-demo m-t-md">


                    <h3>
                        <span class="font-noraml">Subject: </span><?php echo $msgrows['msgsub']?>
                    </h3>
                    <h5>
                        <span class="pull-right font-noraml"><?php echo $msgrows['datesent']?></span>
                        <span class="font-noraml">From: </span><?php echo $fname?>
                    </h5>
                </div>
            </div>
                <div class="mail-box">


                <div class="mail-body">
                    <p>
                        <?php echo $msgrows['msg']?>
                    </p>
                    
          </div>
                        <div class="mail-body text-right tooltip-demo">
                                <a class="btn btn-sm btn-white" href="mail_compose.php"><i class="fa fa-reply"></i> Reply</a>
                                <a class="btn btn-sm btn-white" href="mail_compose.php"><i class="fa fa-arrow-right"></i> Forward</a>
                                <button title="" data-placement="top" data-toggle="tooltip" type="button" data-original-title="Print" class="btn btn-sm btn-white"><i class="fa fa-print"></i> Print</button>
                                <button title="" data-placement="top" data-toggle="tooltip" data-original-title="Trash" class="btn btn-sm btn-white"><i class="fa fa-trash-o"></i> Remove</button>
                        </div>
                        <div class="clearfix"></div>


                </div>
            </div>
        </div>
        </div>
          <div class="footer">
            <div class="pull-right">
                Powered By <strong> Techcube Ltd</strong> Ke.
            </div>
            <div>
                <strong>Copyright</strong> INCOUNTY+ Admin Suite &copy; 2014-<?php echo date('Y')?>
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
    <script>
        $(document).ready(function(){
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
</body>

</html>

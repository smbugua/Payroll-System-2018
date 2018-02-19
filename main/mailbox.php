<?php
include('header.php');
$usr=$_SESSION['user'];
$msg=mysql_query("SELECT * FROM messages where touser='$usr' ORDER BY datesent DESC");
$msgCOUNT=mysql_fetch_assoc(mysql_query("SELECT COUNT(id) as c FROM messages where touser='$usr' && status='0' "));
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
                            <a class="btn btn-block btn-primary compose-mail" href="mail_compose.php">Compose Mail</a>
                            <div class="space-25"></div>
                            <h5>Folders</h5>
                            <ul class="folder-list m-b-md" style="padding: 0">
                                <li><a href="mailbox.php"> <i class="fa fa-inbox "></i> Inbox <span class="label label-warning pull-right"><?php echo $no?></span> unread</a></li>
                                <li><a href="mailsent.php"> <i class="fa fa-envelope-o"></i> Outbox<span class="label label-danger pull-right"><?php echo $nosent?></span></a></li>
                               <!--li><a href="#"> <i class="fa fa-file-text-o"></i> Drafts </a></li>
                                <li><a href="#"> <i class="fa fa-trash-o"></i> Trash</a></li-->
                            </ul>
                            <!--h5>Categories</h5>
                            <ul class="category-list" style="padding: 0">
                                <li><a href="#"> <i class="fa fa-circle text-navy"></i> Work </a></li>
                                <li><a href="#"> <i class="fa fa-circle text-danger"></i> Documents</a></li>
                                <li><a href="#"> <i class="fa fa-circle text-primary"></i> Social</a></li>
                                <li><a href="#"> <i class="fa fa-circle text-info"></i> Advertising</a></li>
                                <li><a href="#"> <i class="fa fa-circle text-warning"></i> Clients</a></li>
                            </ul>

                            <h5 class="tag-title">Labels</h5>
                            <ul class="tag-list" style="padding: 0">
                                <li><a href=""><i class="fa fa-tag"></i> Family</a></li>
                                <li><a href=""><i class="fa fa-tag"></i> Work</a></li>
                                <li><a href=""><i class="fa fa-tag"></i> Home</a></li>
                                <li><a href=""><i class="fa fa-tag"></i> Children</a></li>
                                <li><a href=""><i class="fa fa-tag"></i> Holidays</a></li>
                                <li><a href=""><i class="fa fa-tag"></i> Music</a></li>
                                <li><a href=""><i class="fa fa-tag"></i> Photography</a></li>
                                <li><a href=""><i class="fa fa-tag"></i> Film</a></li>
                            </ul-->
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 animated fadeInRight">
            <div class="mail-box-header">

                <form method="get" action="index.html" class="pull-right mail-search">
                    <div class="input-group">
                        <input type="text" class="form-control input-sm" name="search" placeholder="Search email">
                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-sm btn-primary">
                                Search
                            </button>
                        </div>
                    </div>
                </form>
                <h2>
                    Inbox <?php echo $msgCOUNT['c']?>
                </h2>
                <div class="mail-tools tooltip-demo m-t-md">
                    <div class="btn-group pull-right">
                        <button class="btn btn-white btn-sm"><i class="fa fa-arrow-left"></i></button>
                        <button class="btn btn-white btn-sm"><i class="fa fa-arrow-right"></i></button>

                    </div>
                    <button class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="left" title="Refresh inbox"><i class="fa fa-refresh"></i> Refresh</button>
                    <button class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Mark as read"><i class="fa fa-eye"></i> </button>
                    <button class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Mark as important"><i class="fa fa-exclamation"></i> </button>
                    <button class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>

                </div>
            </div>
                <div class="mail-box">

                <table class="table table-hover table-mail">
                <tbody>
                <?php while ($msgrows=mysql_fetch_assoc($msg)){ ?>
                <?php
                $status=$msgrows['status'];
                $usr=$msgrows['uname'];
                $fquery=mysql_fetch_array(mysql_query("SELECT fullname FROM users WHERE username='$usr'"));
                $fname=$fquery['fullname'];
                $msgsub=$msgrows['msgsub'];
                $datesent=$msgrows['datesent'];
                $id=$msgrows['id'];
                if ($status==0) {
                    echo "<tr class='unread'>
                    <td class='check-mail'>
                        <input type='checkbox' class='i-checks'>
                    </td>
                    <td class='mail-ontact'><a href='mail_detail.php?id=$id'>$fname</a></td>
                    <td class='mail-subject'><a href='mail_detail.php?id=$id'>$msgsub</a></td>
                    <td class=''></td>
                    <td class='text-right mail-date'>$datesent</td>
                </tr>";
                }else
                echo " <tr class='read'>
                    <td class='check-mail'>
                        <input type='checkbox' class='i-checks'>
                    </td>
                   <td class='mail-ontact'><a href='mail_detail.php?id=$id'>$fname </a></td>
                    <td class='mail-subject'><a href='mail_detail.php?id=$id'>$msgsub</a></td>
                    <td class=''></td>
                    <td class='text-right mail-date'>$datesent</td>
                </tr>";
                ?>

                    
              
               
                    <?php } ?>

                </tbody>
                
                </table>


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

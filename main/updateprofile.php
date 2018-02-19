<?php

require_once('header.php');
//$id=$_REQUEST['id'];
$user=$_SESSION['user'];
$row=mysql_fetch_array(mysql_query("SELECT * FROM users where username='$user'"));
//update Details


//update Photo
if (isset($_FILES['image']['name']))
{
$saveto = "img/$user.jpg";
move_uploaded_file($_FILES['image']['tmp_name'], $saveto);
$typeok = TRUE;
switch($_FILES['image']['type'])
{
case "image/gif": $src = imagecreatefromgif($saveto); break;
case "image/jpeg": // Allow both regular and progressive jpegs
case "image/pjpeg": $src = imagecreatefromjpeg($saveto); break;
case "image/png": $src = imagecreatefrompng($saveto); break;
default: $typeok = FALSE; break;
}
if ($typeok)
{
list($w, $h) = getimagesize($saveto);
$max = 215;
$tw = $w;
$th = $h;
if ($w > $h && $max < $w)
{
$th = $max / $w * $h;
$tw = $max;
}
elseif ($h > $w && $max < $h)
{
$tw = $max / $h * $w;
$th = $max;
}
elseif ($max < $w)
{
$tw = $th = $max;
}
$tmp = imagecreatetruecolor($tw, $th);
imagecopyresampled($tmp, $src, 0, 0, 0, 0, $tw, $th, $w, $h);
imageconvolution($tmp, array(array(-1, -1, -1),
array(-1, 16, -1), array(-1, -1, -1)), 8, 0);
imagejpeg($tmp, $saveto);
imagedestroy($tmp);
imagedestroy($src);
}
}

?>

 <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Profile</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li class="active">
                            <strong>Profile</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content">
            <div class="row animated fadeInRight">
                <div class="col-md-4">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Profile Detail</h5>
                        </div>
                        <div>
                            <div class="ibox-content no-padding border-left-right">
                             <?php
                if (file_exists("img/$user.jpg"))
                	echo "<img src='img/$user.jpg' alt='image' title='img' class='img-responsive' />";
				else
              echo "<img src='img/avatar.png' alt='image' title='img' class='img-responsive'>";
  	?>
                            </div>
                            <div class="ibox-content profile-content">
                                <h4><strong><?php echo $row['fullname']?></strong></h4>
                                <p><i class="fa fa-map-marker"></i>Wealthsmith Investments</p>
                                <h5>
                                    About me
                                </h5>
                                <form action="profile.php" method="post">
                                <p>
                                   Email:<input type="email" class="form-control" name="email" value="<?php echo $row['email']?>">  <br>
                                   Username:<input type="text" class="form-control" name="uname" value="<?php echo $row['username']?>" readonyly="">  <br>
                                   Password: <input type="password" class="form-control" name="password" required="" >  <br>                              
                                   Confirm Password: <input type="password" class="form-control" name="p2" required="">  <br>
                                     </p>

                                     <button class="btn btn-danger" type="submit" name="submit">Update Details</button></form>
                                <div class="row m-t-lg">
                                  
                                </div>
                                <div class="user-button">
                                    <div class="row">
                                        <div class="col-md-6">
                                                  <form action='updateprofile.php' method='post' enctype='multipart/form-data'>
              <input type='file'name='image' size='14' maxlength='32' class="btn btn-success btn-xs" ><br />
              <button type='submit' class='btn btn-primary btn-xs'>Change profile Pic</button>
            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                    </div>

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
</body>

</html>

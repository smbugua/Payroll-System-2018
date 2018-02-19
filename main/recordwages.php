<?php
include('header.php');
$sdate=$_POST['sdate'];
$edate=$_POST['edate'];
$no=$_POST['no'];
?>
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Record Wages</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="wages.php">Wages Dashboard</a>
                        </li>
                        <li class="active">
                            <strong><a href="recordwages.php">Record Wages</a></strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">
 
                </div>
            </div>
       <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>WWages For : <?php echo $sdate." To ".$edate?></h5>
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
                    <div class="ibox-content success">
                    <div class="row">
                    	<table class="table table-bordered">
                    		<thead>
                    			<th>Name</th>
                    			<th>ID No</th>
                    			<th>Mon</th>
                    			<th>Tue</th>
                    			<th>Wed</th>
                    			<th>Thur</th>
                    			<th>Fri</th>
                    			<th>Sat</th>
                    			<th>Sun</th>
                                <th>NHIF</th>
                                <th>NSSF</th>
                    			<th>Total</th>
                    		</thead>
     <form action="wageclass.php?sdate=<?php echo $sdate?>&&edate=<?php echo $edate?>&&action=postwages" method="post">
                    		<tbody class="details">
                    			<?php for ($i=0; $i < $no; $i++) {?>
                    			<tr>
				                    				<td><input type="text" name="name[]" required="" size="19" required=""></td>
				                    				<td><input type="text" name="id[]" required="" size="15" required=""></td>
				                    			<td><input type="text" id="mon" name="mon[]" required="" size="5" value="0" required="" ></td>
				<td><input type="text" id="tue" name="tue[]" required="" size="5" value="0" required="" ></td>
				<td><input type="text" id="wed" name="wed[]" required="" size="5" value="0" required="" ></td>
				<td><input type="text" id="thur" name="thur[]" required="" size="5" value="0" required="" ></td>
				<td><input type="text" id="fri" name="fri[]" required="" size="5" value="0" required="" ></td>
				<td><input type="text" id="sat" name="sat[]" required="" size="5" value="0" required="" ></td>
				<td><input type="text" id="sun" name="sun[]" required="" size="5" value="0" required="" ></td>
                <td><input type="text" id="nhif" name="nhif[]" required="" size="5" value="0" required="" ></td>
                <td><input type="text" id="nssf" name="nssf[]" required="" size="5" value="0" required="" ></td>
				<td><input type="text" id="tot" name="tot[]" required="" size="7" readonly=""></td>
				                    				</tr>
                    			<?php }?>

                    		</tbody>
                    	</table>
                    		<button class="btn btn-danger pull-left" type="submit">Save Entries</button>
          </form>
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

       $('.details').delegate('#mon,#tue,#wed,#thur,#fri,#sat,#sun,#nhif,#nssf','keyup',function(){
			var tr = $(this).parent().parent();
			var mon = parseFloat(tr.find('#mon').val());
			var tue   = parseFloat(tr.find('#tue').val());
			var wed   = parseFloat(tr.find('#wed').val());
			var thur   = parseFloat(tr.find('#thur').val());
			var fri   = parseFloat(tr.find('#fri').val());
			var sat   = parseFloat(tr.find('#sat').val());
			var sun   = parseFloat(tr.find('#sun').val());
            var nhif   = parseFloat(tr.find('#nhif').val());
            var nssf   = parseFloat(tr.find('#nssf').val());
			var amount = mon+tue+wed+thur+fri+sat+sun+nhif+nssf;
			tr.find('#tot').val(amount);
			total();
		});



    </script>




</body>

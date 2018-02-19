<?php
include('header.php');
$period=$_POST['period'];
//
$stafftyperesult=mysql_query("SELECT id,type_name from stafftype ");
?>
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-5">
                    <h2>Payroll Entries Period: <?php echo $period?></h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="dash.php">HR Dashboard</a>
                        </li>
                        <li class="active">
                            <strong><a href="#">Payroll Benefits Entries </a></strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>

 <div class="wrapper wrapper-content white-bg">
<div class="row">
<div class="col-sm-12">          
<form  action="payrollclass.php?period=<?php echo $period?>&&action=postbenefits" method="post">
<?php  while($staff=mysql_fetch_array($stafftyperesult)) {
//$staff=mysql_fetch_array($stafftyperesult) ;
$sname=$staff['type_name'];
$sid=$staff['id'];
$len=count($staff);	

	?>
<div class="form-group">
<table class="table table-bordered ">
<h3 align="center"><font color="blue"  ><?php echo $sname?></font></h3>
	<thead>
		<th>Payroll No </th>
		<th>Staff Name </th>
		<th>Category </th>
		<th>Salary </th>
		<th>Lunch </th>
		<th>Allowance </th>
		<th>Overtime </th>
		<th>Commission </th>
		<th>Total Benefits </th>
	</thead>
	<tbody class="details">
	<?php 
	$seresult=mysql_query("SELECT id,staff_name as s ,payrollno as p,salary as sal FROM staff WHERE staff_type='$sid' ");

	while($s=mysql_fetch_array($seresult)){ 
	
		?>
	<tr>
		<input class="hidden" name="id[]" value="<?php echo $s['id'] ?>">
		<td><?php echo $s['p']?> </td>
		<td><?php echo $s['s']?> </td>
		<td><font color="red"><?php echo $sname ?></font> </td>
		<td><?php echo $s['sal']?> </td>
		<td><input required=""  name="lunch[]" id="lunch" value="" > </td>
		<td><input required=""  name="allowance[]" id="allowance" value="0" > </td>
		<td><input required=""  name="overtime[]" id="overtime" value="0" > </td>
		<td><input required=""  name="commission[]" id="commission" value="0" > </td>
		<td><input readonly=""   name="ben[]" id="benefits" value="0" > </td>
		
	</tr>
	<?php }?>	
	</tbody>
</table>
</div>
<?php  } ?>
<div class="form-group">
	<button class="btn btn-danger" type="submit">Post Benefits</button>
</div>
</form>




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

function calc(){
$l=document.getElementById('lunch').value;
$all=document.getElementById('allowance').value;
$comm=document.getElementById('commission').value;
$overtime=document.getElementById('overtime').value;
$sum=parseFloat($l)+parseFloat($comm)+parseFloat($all)+parseFloat($overtime);;
document.getElementById('benefits').value=$sum.toFixed(2);


}


	$('.details').delegate('#lunch,#commission,#overtime,#allowance','keyup',function(){
			var tr = $(this).parent().parent();
			var lunch = tr.find('#lunch').val();
			var allowance   = tr.find('#allowance').val();
			var commission = tr.find('#commission').val();
			var overtime = tr.find('#overtime').val();
			var amount = parseFloat(lunch)+parseFloat(commission)+parseFloat(overtime)+parseFloat(allowance);
			tr.find('#benefits').val(amount);
			total();
		});

    </script>
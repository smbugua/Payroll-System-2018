<?php
include('header.php');
$period=$_REQUEST['period'];
?>
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-5">
                    <h2>Payroll Entries Period: <?php echo $period?></h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="payroll.php">HR Dashboard</a>
                        </li>
                        <li class="active">
                            <strong><a href="#">Payroll Entries </a></strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>

 <div class="wrapper wrapper-content white-bg">
<div class="row">
<div class="col-sm-12">          
    <div class="ibox-content">
                            
                            <div class="alert alert-danger alert-dismissable">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                               Carefully Review Payroll once confirmed action is irreversible. <a class="alert-link" href="#">Warning</a>.
                            </div>
                    </div>
<div class="form-group">
<table class="table table-bordered ">
<h3 align="center"><font color="blue"  >Confirm Payroll Entries</font></h3>
<!--a class="btn btn-primary pull-left" href="payrollclass.php?period=<?php echo $period?>&&action=confirmpayroll" >Confirm and Run</a-->
	<thead>
		<th>Payroll No </th>
		<th>Staff Name </th>
		<th>Salary </th>
		<th>Lunch </th>
		<th>Allowance </th>
		<th>Overtime </th>
		<th>Commission </th>
		<th>Total Benefits </th>
		<th>NHIF</th>
		<th>NSSF </th>
		<th>Advance</th>
		<th>Total Deduction</th>
		<th>Income Taxable</th>
		<th>Tax Amount</th>
		<th>Net Pay</th>
	</thead>
	<tbody>
	<?php 
	$seresult=mysql_query("SELECT * FROM payroll_tbl where payrollrun='$period' ");

	while($s=mysql_fetch_array($seresult)){ ?>
	<tr>
		<td><?php echo $s['payrollno']?> </td>
		<td><?php echo $s['sname']?> </td>
		<td><?php echo $s['salary']?> </td>
		<td><?php echo $s['lunch']?> </td>
		<td><?php echo $s['allowance']?> </td>
		<td><?php echo $s['overtime']?> </td>
		<td><?php echo $s['commission']?> </td>
		<td><?php echo $s['totalbenefits']?> </td>
		<td><?php echo $s['nhif']?> </td>
		<td><?php echo $s['nssf']?> </td>
		<td><?php echo $s['advance']?> </td>
		<td><?php echo $s['totaldeductions']?> </td>
		<td><?php echo $s['taxableincome']?> </td>
		<td><?php echo $s['tax']?> </td>
		<td><?php echo $s['netpay']?> </td>
	</tr>
	<?php }?>	
	<tr>
		<td colspan="15"><h3 align="center"><font color="blue"  >Confirm Payroll Entries</font></h3>
<a class="btn btn-primary pull-left" href="payrollclass.php?period=<?php echo $period?>&&action=confirmpayroll" >Confirm and Run</a></td>
	</tr>
	</tbody>

</table>
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
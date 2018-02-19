<?php
ini_set('dsipaly_errors', 1);
include('connect.php');
$period=$_POST['period'];
$result=mysql_query("SELECT * FROM payroll_tbl WHERE payrollrun='$period'");
while($row=mysql_fetch_array($result)){
    $id=$row['staffid'];
    $s=mysql_fetch_array(mysql_query("SELECT st.type_name as stype, s.national_id as natid ,s.accountno as bankacc ,s.bankcode as bcode FROM staff s  inner join stafftype st on st.id=s.staff_type  where s.id='$id'"));
    $bcode=$s['bcode'];
    $b=mysql_fetch_array(mysql_query("SELECT bank as bb FROM banks where bcode like'%$bcode%'"));
?>

<link href="css/bootstrap.min.css" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <address>
                        <strong>BARLETTA HOLDINGS LTD</strong>
                        <br>
                        Name: <?php echo $row['sname']?>
                        <br>
                        JD: <?php echo $s['stype']?>
                        <br>
                        <abbr >ID:</abbr> <?php echo $s['natid']?>
                    </address>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    <p>
                        <em>Bank Details: <?php echo $b['bb']." ACC NO: ".$s['bankacc'] ?></em>
                    </p>
                    <p>
                        <!--em>Payroll #: <?php echo $row['payrollno']?></em-->
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <h1>Payslip 2018-JAN  </h1>
                </div>
                </span>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Description</th>
                            <th class="text-center">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Basic Pay</th>
                            <th class="text-center"><?php  echo $row['salary']?></th>
                        </tr>
                        <tr><th>Benefits</th></tr>
                        <tr>
                            <td>Allowance</td>
                            <td class="text-center"><?php  echo $row['allowance']?></td>
                        </tr> <tr>
                            <td>Commission</td>
                            <td class="text-center"><?php  echo $row['commission']?></td>
                        </tr> <tr>
                            <td>Lunch</td>
                            <td class="text-center"><?php  echo $row['lunch']?></td>
                        </tr>
                        <tr>
                            <th>Total Benefits</th>
                            <th class="text-center"><?php  echo $row['totalbenefits']?></th>
                        </tr>
                         <tr><th>Deductions</th></tr>
                         <tr>
                            <td>Advance</td>
                            <td class="text-center"><?php  echo $row['advance']?></td>
                        </tr> <tr>
                            <td>NSSF</td>
                            <td class="text-center"><?php  echo $row['nssf']?></td>
                        </tr> <tr>
                            <td>NHIF</td>
                            <td class="text-center"><?php  echo $row['nhif']?></td>
                        </tr><tr>
                            <td>PAYE</td>
                            <td class="text-center"><?php  echo $row['tax']?></td>
                        </tr>
                        <tr>
                            <th>Total Deductions</th>
                            <?php
                            $t=$row['totaldeductions'];
                            $p=$row['tax'];
                            $tt=$t+$p;
                            ?>
                            <th class="text-center"><?php  echo $tt?></th>
                        </tr>
                        <tr>
                            
                            
                            <td class="text-right">
                            <p>Taxable Amount:</p></td>
                            <td class="text-center">
                            <p><strong><?php  echo $row['taxableincome']?></strong>
                            </p>
                            </td>
                        </tr>
                        <tr>
                            
                            <td class="text-right">Net pay:</td>
                            <td class="text-center text-danger"><h4><strong><?php  echo $row['netpay']?></strong></h4></td>
                        </tr>
                    </tbody>
                </table>
                </td>
            </div>
        </div>
    </div>
</div>    
    <style type="text/css">
        body {
    margin-top: 40px;
}
@media print{
    @page {
        size: a5 portrait;
        margin: 0;
    }
}
    </style>
    <?php }?>

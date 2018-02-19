<?php
ob_start();  
require('payslip_pdf.php');
define('FPDF_FONTPATH','fonts/');
include('connect.php');
$period=$_REQUEST['period'];
$datesquery=mysql_query("SELECT pt.staffid as id, pt.payrollno as payrollno ,pt.sname as name ,pt.salary as basic ,pt.lunch as lunch,pt.commission as commission ,(pt.salary+pt.overtime+pt.commission+pt.allowance+pt.lunch) as gross,pt.nhif as nhif ,pt.nssf as nssf,pt.advance as advance,pt.tax as paye,pt.taxableincome as taxableincome,pt.totaldeductions as totaldeductions,pt.daterun as payrolldate,pt.overtime as overtime ,pt.allowance as allowance,pt.netpay as net FROM payroll_tbl pt  WHERE pt.payrollrun='$period' order by id asc");
$pdf = new PDF_Invoice( 'p', 'mm', 'A4' );
while ( $row=mysql_fetch_array($datesquery)) {
  $pdf->AddPage();
  $id=$row['id'];
  $s=mysql_fetch_array(mysql_query("SELECT st.type_name as stype, s.national_id as natid ,s.accountno as bankacc ,s.bankcode as bcode FROM staff s  inner join stafftype st on st.id=s.staff_type  where s.id='$id'"));
    $bcode=$s['bcode'];
    $b=mysql_fetch_array(mysql_query("SELECT b.bank as bank ,bb.bname as branch FROM staff s inner join bankbranch bb on bb.code=s.branchcode inner join banks b on b.bcode=s.bankcode where s.id='$id' "));
    $bank=$b['bank'];
    $stype=$s['stype'];
    $natid=$s['natid'];
    $bankacc=$s['bankacc'];
    $branch=$b['branch'];
$date=$row['payrolldate'];
$name=$row['name'];
$basic=$row['basic'];
$id=$row['id'];
$lunch=$row['lunch'];
$commission=$row['commission'];
$allowance=$row['allowance'];
$gross=$row['gross'];
$nhif=$row['nhif'];
$nssf=$row['nssf'];
$advance=$row['advance'];
$paye=$row['paye'];
$net=$row['net'];
$taxableincome=$row['taxableincome'];
$totaldeductions=$row['totaldeductions'];
$payrollno=$row['payrollno'];
$overtime=$row['overtime'];
$pdf->addSociete( "Barletta Holdings Ltd",
                  "P.O BOX 1239-00200 \n" .
                  "Nairobi,Kenya \n".
                  "email: barlettahltd@gmail.com \n" .
                  "Tel : 0729036698 ");
$pdf->fact_dev( "MONTHLY","PAYSLIP" );
$pdf->temporaire( "Barletta Holdings Ltd." );
$pdf->addDate( "$date");
$pdf->addClient("PAID");
$pdf->addPageNumber("$period");
$pdf->addClientAdresse("BANKING INFO: \nNo:$payrollno\nBank:$bank\nBranch:$branch\nAccount No: $bankacc");
$pdf->addReglement("$name");
$pdf->addEcheance("$natid");
$pdf->Ln();
$pdf->addNumTVA("$stype");
$pdf->addReference("$id.$date");
$cols=array( 
             "Description"  => 100,
             "Amount"      => 69 );
$pdf->addCols( $cols);
$cols=array( 
             "Description"  => "L",
             "Amount"      => "R");
$pdf->addLineFormat( $cols);
$pdf->addLineFormat($cols);

$y    = 109;
$line = array( 
               "Description"  => "Basic \n" ,
               "Amount"      => "$basic" );
$size = $pdf->addLine( $y, $line );
$y   += $size + 5;

$line = array( 
               "Description"  => "BENEFITS \n" .
                                 "Allowance \n".
                                 "Commission \n".
                                 "Overtime \n".
                                 "Lunch \n",
               "Amount"      => "\n".
                                " $allowance\n".
                                " $commission\n".
                                " $overtime\n".
                                " $lunch\n");
$size = $pdf->addLine( $y, $line );
$y   += $size + 5;

$line = array( 
               "Description"  => "DEDUCTIONS \n" .
                                 "Advance \n".
                                 "NSSF \n".
                                 "NHIF \n".
                                 "PAYE \n",
               "Amount"      => "\n".
                                " $advance\n".
                                " $nssf\n".
                                " $nhif\n".
                                " $paye\n");
$size = $pdf->addLine( $y, $line );
$y   += $size + 5;



$line = array( 
               "Description"  => "Gross Pay\n" .
                                 "Taxable Income \n".
                                 "PAYE \n".
                                 "\n".
                                 "NET PAY \n",
               "Amount"      => "$gross\n".
                                " $taxableincome\n".
                                " $paye\n".
                                " \n".
                                " $net\n");
$size = $pdf->addLine( $y, $line );
$pdf->addRemarque("This is a valid computer generated document for any information kindly contact: 0729036698".
                  "\n".
                  "Powered by Techcube Ke!");
}
$filename="PAYSLIPS ".$period.".pdf";
$pdf->Output();
mysql_free_result($datesquery);
ob_end_flush();
?>

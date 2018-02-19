<?php
/**
 * Charts 4 PHP
 *
 * @author Shani <support@chartphp.com> - http://www.chartphp.com
 * @version 1.2.3
 * @license: see license.txt included in package
 */
 
include("../../lib/inc/chartphp_dist.php");

include("../../../connect.php");
$votequery="SELECT itemname from vote_item Order by itemname ASC";
$voterow=mysql_fetch_array(mysql_query($votequery));
$item=$voterow['itemname'];
$result=mysql_query("SELECT amount as a,vote_item as v FROM votes");

$no=mysql_num_rows($result);

while ($yaxis=mysql_fetch_array($result)) {
	# code...

$p = new chartphp();
for ($i=0; $i <$no ; $i++) { 
	# code...

$p->data = array(array(array($yaxis['v'],$yaxis['a'])));
}
$p->chart_type = "bar";
}

// Common Options
$p->title = "Bar Chart";
$p->xlabel = "Votes";
$p->ylabel = "Amount Awarded";
$p->export = false;
$p->options["legend"]["show"] = true;
$p->series_label = array('Q1','Q2','Q3'); 

$out = $p->render('c1');
?>
<!DOCTYPE html>
<html>
	<head>
		<script src="../../lib/js/jquery.min.js"></script>
		<script src="../../lib/js/chartphp.js"></script>
		<link rel="stylesheet" href="../../lib/js/chartphp.css">
	</head>
	<body>
		<div style="width:40%; min-width:450px;">
			<?php echo $out; ?>
		</div>
	</body>
</html>


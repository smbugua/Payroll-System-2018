<?php
//cal paye and taxable income
				//RATES
				/*
				Up to 11,180	Up to 134,164	10
11,181 - 21,714	134,165 - 260,567	15
21,715 - 32,248	260,568 - 386,970	20
32,249 - 42,782	386,971 - 513,373	25
Above 42,782
					taxableincome = (salary+benefits)-deductions
				*/
$taxableincome=$s['sal'];
if ($taxableincome<=11181) {
$paye=$taxableincome*.10;			
}elseif ($taxableincome>11181 and $taxableincome<=21714) {
$paye=$taxableincome*.15;
}elseif ($taxableincome>21714 and $taxableincome<=32248) {
$paye=$taxableincome*.20;
}elseif ($taxableincome>32248 and $taxableincome<=42782) {
$paye=$taxableincome*.25;
}elseif ($taxableincome>42782) {
$paye=$taxableincome*.30;
}
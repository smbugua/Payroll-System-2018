<?php
include('header.php');
$id=$_REQUEST['id'];
$row=mysql_fetch_array(mysql_query("SELECT * FROM staff where id='$id'"));
?>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">

    <link href="css/plugins/chosen/chosen.css" rel="stylesheet">

    <link href="css/plugins/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet">

    <link href="css/plugins/cropper/cropper.min.css" rel="stylesheet">

    <link href="css/plugins/switchery/switchery.css" rel="stylesheet">

    <link href="css/plugins/jasny/jasny-bootstrap.min.css" rel="stylesheet">

    <link href="css/plugins/nouslider/jquery.nouislider.css" rel="stylesheet">

    <link href="css/plugins/datapicker/datepicker3.css" rel="stylesheet">

    <link href="css/plugins/ionRangeSlider/ion.rangeSlider.css" rel="stylesheet">
    <link href="css/plugins/ionRangeSlider/ion.rangeSlider.skinFlat.css" rel="stylesheet">

    <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">

    <link href="css/plugins/clockpicker/clockpicker.css" rel="stylesheet">

    <link href="css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Update Staff Details</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="staffdetails.php">Staff</a>
                        </li>
                        <li class="active">
                            <strong><a href="#">Update Staff Details for: <?php echo $row['staff_name'] ?></a></strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
       <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
            <div class="col-lg-10">


<ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">General Details</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Bank Information</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Salary Information</a></li>
    <li role="presentation"><a href="#advance" aria-controls="settings" role="tab" data-toggle="tab">Advance</a></li>
    <li role="presentation"><a href="#deductions" aria-controls="deductions" role="tab" data-toggle="tab">Deductions</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
    	<div class="ibox-content">
    <form action="staffclass.php?id=<?php echo $id ?>&action=updatestaff" method="post">
        <div class="row">
            <div class="col-sm-6 b-r"><h3 class="m-t-none m-b">Update Staff Details <input type="text"
                                                                                        value="<?php echo $id ?>"
                                                                                        class="hidden" name="id"></h3>

                <div class="form-group"><label>Staff Name</label> <input name="sname" type="text" required=""
                                                                         value="<?php echo $row['staff_name'] ?>"
                                                                         class="form-control"></div>

                <div class="form-group"><label>Staff ID number</label> <input name="sidno" type="number" required=""
                                                                              value="<?php echo $row['national_id'] ?>"
                                                                              class="form-control"></div>

                <div class="form-group"><label>Staff Email</label> <input name="semail" type="email" value="<?php echo $row['staff_email'] ?>"
                                                                          class="form-control"></div>

                <div class="form-group"><label>Telephone Number</label> <input name="stel" type="number" required=""
                                                                               value="<?php echo $row['staff_telno'] ?>"
                                                                               class="form-control"></div>

                <div class="form-group"><label>Status</label> <select name="sstatus" class="form-control">
                        <option>Active</option>
                        <option>Terminated</option>
                        <option>On Leave</option>
                    </select>
                </div>


            </div>
            <div class="col-sm-6">
                <div>
                    <div class="form-group"><label>NHIF No</label>
                        <input name="nhif" type="text" value="<?php echo $row['nhifno'] ?>" class="form-control"></div>
                    <div class="form-group"><label>NSSF No</label>
                        <input name="nssf" type="text" value="<?php echo $row['nssfno'] ?>" class="form-control"></div>
                    <div class="form-group"><label>PIN No</label> <input name="pinno" type="text"
                                                                         value="<?php echo $row['pinno'] ?>"
                                                                         class="form-control"></div>


                    <div class="form-group"><label>Job Description</label>
                       <select name="stype" class="form-control">
                        <?php
                        $s=$row['staff_type'];
                       $statusQuery = mysql_query("SELECT id, type_name from stafftype ");

                       while($st=mysql_fetch_array($statusQuery)){
                        $type=$st['type_name'];
                        ?>

                    <option  value="<?php echo $st[0] ;?>"><?php echo $st[1]?></option>
                    <?php }?>
                    </select>
                    </div>
                </div>
                <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Save</strong></button>
</form>
            </div>

        </div>

</div>
    </div>              
    <div role="tabpanel" class="tab-pane" id="profile">
<div class="ibox-content">
    <form action="staffclass.php?id=<?php echo $id ?>&&action=setbank" method="post">
        <div class="row">
            <div class="col-sm-6 b-r"><h3 class="m-t-none m-b">Banking Information Details</h3>

                <div class="form-group">
               <label class="font-normal">Bank Name</label>
               <?php 
               $bankcode=$row['bankcode'];
               $b=mysql_fetch_array(mysql_query("SELECT bank FROM banks WHERE bcode='$bankcode'"));
               $bank=$b['bank'];
               if($bank!=NULL || $bank!="" ){
               	echo "<input value='$bank' class='form-control' readonly >";
               }elseif($bank==NULL || $bank=="" ){
               	?>
                <div class="input-group">
                <?php
                $statusQuery="select bcode,bank from banks ";
                $statusResult=mysql_query($statusQuery);
                 $no = mysql_num_rows($statusResult);
                echo "<select data-placeholder='Choose A Bank' class='chosen-select' id='selector' name='bank' style='width:350px;' tabindex='2'>";
                  for ($i = 0 ; $i < $no ; ++$i)
                  {
                  $statusRow = mysql_fetch_row($statusResult);
                  echo "<option value='$statusRow[0]'>$statusRow[1]</option>";
                  }
                echo "</select><br/>";
				?>
        
                </div>
 <?php  }?>  
                   

                 <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit" ><strong>Save Bank</strong></button>
                
                
        </form>
                </div>
            </div>
            <div class="col-sm-6">
 <form action="staffclass.php?id=<?php echo $id ?>&&action=setbranch" method="post">
                         <div class="form-group"><label>Branch Name</label>
                 <?php 
               $bankcode=$row['bankcode'];
               $branchcode=$row['branchcode'];
               $b=mysql_fetch_array(mysql_query("SELECT bname FROM bankbranch WHERE code='$branchcode' and bankCode='$bankcode'"));
               $bank=$b['bname'];
               if($bank!=NULL || $bank!="" ){
                echo "<input value='$bank' class='form-control' readonly >";
               }elseif($bank==NULL || $bank=="" ){
                ?>

                <??>
                <div class="input-group">
                    <?php
                    $statusQuery = "SELECT bc.code, bc.bname,b.bank FROM bankbranch bc inner join banks b on b.bcode=bc.bankCode inner join staff s on s.bankcode=b.bcode WHERE s.id='$id'";
                    $statusResult = mysql_query($statusQuery);
                    $no = mysql_num_rows($statusResult);
                     echo "<select data-placeholder='Choose an Branch' class='chosen-select' id='selector2' name='bankbranch' style='width:350px;' tabindex='2'>";
                    for ($i = 0; $i < $no; ++$i) {
                      $code=$statusRow[2];
                      $banks=mysql_fetch_array(mysql_query("SELECT bc.bname,b.bank FROM bankbranch bc inner join bank b on b.bcode=bc.bankCode inner join staff s on s.bankcode=b.bcode WHERE s.id='$id'"));
                        $statusRow = mysql_fetch_row($statusResult);
                        echo "<option value='$statusRow[0]'>$statusRow[1]-Bank name : $statusRow[2]</option>";
                    }

                    echo "</select><br/>";
                    ?>
                    </div>

                <?php }?>
                </div>
                <div class="form-group"><label>Account No</label>
                    <input name="accno" type="text" value="<?php echo $row['accountno'] ?>" class="form-control" required=""></div>
                <div class="form-group"><label>Account Name</label>
                    <input name="accname" type="text" value="<?php echo $row['accountname'] ?>" class="form-control" required=""></div>
                    <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit" ><strong>Update Branch</strong></button>
        </div>
                </div>
    </form>
</div>



</div>
    <div role="tabpanel" class="tab-pane" id="messages">
    <div class="ibox-content">
    <form action="staffclass.php?id=<?php echo $id ?>&action=setsalary" method="post">
        <div class="row">
            <div class="col-sm-6 "><h3 class="m-t-none m-b">Banking Information Details</h3>
            <div class="form-group"><label>Salary</label>
                    <input name="salary" type="text" value="<?php echo $row['salary'] ?>" class="form-control" required=""></div>
            <!--div class="form-group"><label>Allowance</label>
                    <input name="allowance" type="text" value="<?php // echo $row['allowance'] ?>" class="form-control" required=""></div-->
               
                <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Update</strong></button>
        </div>
                </div>
    </form>
</div>
   	
    </div>
    <div role="tabpanel" class="tab-pane" id="advance">
    	<div class="ibox-content">
    	<?php
    	$advanceresult=mysql_query("SELECT * FROM empvsadvances WHERE empid='$id' ORDER BY payrollPeriod DESC ");
    	?>
    	<table class="table table-bordered">
    	<thead>
    		<th>Advance period</th>
    		<th>Date Added</th>
    		<th>Amount</th>
    		<a class="btn btn-primary pull-right"  href="advance.php?id=<?php echo $id?>" >Add Advance</a>
    	</thead>
    	<tbody>
    		<?php while($arow=mysql_fetch_array($advanceresult)){
    			?>
    			<td><?php echo $arow['payrollPeriod']?></td>
    			<td><?php echo $arow['dateadded']?></td>
    			<td><?php echo $arow['amount']?></td>
    		<tr>
    			
    		</tr>
    		<?php }?>
    	</tbody>
    		
    	</table>   	
    </div>
    </div>
     <div role="tabpanel" class="tab-pane" id="deductions">
    	<div class="ibox-content">
    	<?php
    	$deductresult=mysql_query("SELECT * FROM empdeductions WHERE employeeId='$id'");
    	?>
    	<table class="table table-bordered">
    	<thead>
    		<th>Deduction</th>
    		<th>Amount</th>
    		<a class="btn btn-success pull-right"  id="addBtn" >Add Deduction</a>
    	</thead>
    	<tbody>
    		<?php while($drow=mysql_fetch_array($deductresult)){
    			$did=$drow['empdeductionid'];
    			$d=mysql_fetch_array(mysql_query("SELECT deduction as d FROM deductions WHERE id='$did'"));
    			$dname=$d['d'];
    			?>
    			<td><?php echo $dname?></td>
    			<td><?php echo $drow['amount']?></td>
    		<tr>
    			
    		</tr>
    		<?php }?>
    	</tbody>
    		
    	</table>   	
    </div>
  </div>

</div>
	</div>
</div>

<!-- The Modal -->
<div id="adddeduction" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
   <!-- Horizontal Form -->
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Add Deduction</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="staffclass.php?action=addDeduction&&id=<?php echo $id?>" method="post">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Deduction</label>
                      <div class="col-sm-10">
                        <div class="input-group">
                    <?php
                    $statusQuery = "SELECT id,deduction FROM deductions";
                    $statusResult = mysql_query($statusQuery);
                    $no = mysql_num_rows($statusResult);
                     echo "<select data-placeholder='Choose an Deduction' class='form-control' id='selector3' name='deduction' style='width:350px;' tabindex='2'>";
                    for ($i = 0; $i < $no; ++$i) {
                        $statusRow = mysql_fetch_row($statusResult);
                        echo "<option value='$statusRow[0]'>$statusRow[1]</option>";
                    }

                    echo "</select><br/>";
                    ?>
                    </div>
                      </div>
                    </div>
                     <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Amount</label>
                      <div class="col-sm-10">
                        <input type="text" name="amount" required="" class="form-control">
                      </div>
                    </div>
                  

                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <a href="staffmember.php?id=<?php echo $id?>"  class="btn btn-default">Cancel</a>
                    <button type="submit" class="btn btn-info pull-right">Submit</button>
                  </div><!-- /.box-footer -->
                </form>
              </div><!-- /.box -->
              </div>
  </div><!--End Modal -->
<!--End Modal -->

<!--MODAL STYLE-->
<style type="text/css">
	/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 15% auto; /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
    width: 30%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}



</style>







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
    </script>
</body>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Chosen -->
    <script src="js/plugins/chosen/chosen.jquery.js"></script>

   <!-- JSKnob -->
   <script src="js/plugins/jsKnob/jquery.knob.js"></script>

   <!-- Input Mask-->
    <script src="js/plugins/jasny/jasny-bootstrap.min.js"></script>

   <!-- Data picker -->
   <script src="js/plugins/datapicker/bootstrap-datepicker.js"></script>

   <!-- NouSlider -->
   <script src="js/plugins/nouslider/jquery.nouislider.min.js"></script>

   <!-- Switchery -->
   <script src="js/plugins/switchery/switchery.js"></script>

    <!-- IonRangeSlider -->
    <script src="js/plugins/ionRangeSlider/ion.rangeSlider.min.js"></script>

    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>

    <!-- MENU -->
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Color picker -->
    <script src="js/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>

    <!-- Clock picker -->
    <script src="js/plugins/clockpicker/clockpicker.js"></script>

    <!-- Image cropper -->
    <script src="js/plugins/cropper/cropper.min.js"></script>

    <!-- Date range use moment.js same as full calendar plugin -->
    <script src="js/plugins/fullcalendar/moment.min.js"></script>

    <!-- Date range picker -->
    <script src="js/plugins/daterangepicker/daterangepicker.js"></script>






    <script>
$("#selector").chosen({
   width: '100%'
});
$("#selector2").chosen({
   width: '100%'
});
   


	// Get the modal-- Add project
var modal = document.getElementById('adddeduction');

// Get the button that opens the modal
var btn = document.getElementById("addBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

      $(document).ready(function(){

            var $image = $(".image-crop > img")
            $($image).cropper({
                aspectRatio: 1.618,
                preview: ".img-preview",
                done: function(data) {
                    // Output the result data for cropping image.
                }
            });

            var $inputImage = $("#inputImage");
            if (window.FileReader) {
                $inputImage.change(function() {
                    var fileReader = new FileReader(),
                            files = this.files,
                            file;

                    if (!files.length) {
                        return;
                    }

                    file = files[0];

                    if (/^image\/\w+$/.test(file.type)) {
                        fileReader.readAsDataURL(file);
                        fileReader.onload = function () {
                            $inputImage.val("");
                            $image.cropper("reset", true).cropper("replace", this.result);
                        };
                    } else {
                        showMessage("Please choose an image file.");
                    }
                });
            } else {
                $inputImage.addClass("hide");
            }

            $("#download").click(function() {
                window.open($image.cropper("getDataURL"));
            });

            $("#zoomIn").click(function() {
                $image.cropper("zoom", 0.1);
            });

            $("#zoomOut").click(function() {
                $image.cropper("zoom", -0.1);
            });

            $("#rotateLeft").click(function() {
                $image.cropper("rotate", 45);
            });

            $("#rotateRight").click(function() {
                $image.cropper("rotate", -45);
            });

            $("#setDrag").click(function() {
                $image.cropper("setDragMode", "crop");
            });

            $('#data_1 .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });

            $('#data_2 .input-group.date').datepicker({
                startView: 1,
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true,
                format: "dd/mm/yyyy"
            });

            $('#data_3 .input-group.date').datepicker({
                startView: 2,
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true
            });

            $('#data_4 .input-group.date').datepicker({
                minViewMode: 1,
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true,
                todayHighlight: true
            });

            $('#data_5 .input-daterange').datepicker({
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true
            });

            var elem = document.querySelector('.js-switch');
            var switchery = new Switchery(elem, { color: '#1AB394' });

            var elem_2 = document.querySelector('.js-switch_2');
            var switchery_2 = new Switchery(elem_2, { color: '#ED5565' });

            var elem_3 = document.querySelector('.js-switch_3');
            var switchery_3 = new Switchery(elem_3, { color: '#1AB394' });

            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green'
            });

            $('.demo1').colorpicker();

            var divStyle = $('.back-change')[0].style;
            $('#demo_apidemo').colorpicker({
                color: divStyle.backgroundColor
            }).on('changeColor', function(ev) {
                        divStyle.backgroundColor = ev.color.toHex();
                    });

            $('.clockpicker').clockpicker();

            $('input[name="daterange"]').daterangepicker();

            $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

            $('#reportrange').daterangepicker({
                format: 'MM/DD/YYYY',
                startDate: moment().subtract(29, 'days'),
                endDate: moment(),
                minDate: '01/01/2012',
                maxDate: '12/31/2015',
                dateLimit: { days: 60 },
                showDropdowns: true,
                showWeekNumbers: true,
                timePicker: false,
                timePickerIncrement: 1,
                timePicker12Hour: true,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                opens: 'right',
                drops: 'down',
                buttonClasses: ['btn', 'btn-sm'],
                applyClass: 'btn-primary',
                cancelClass: 'btn-default',
                separator: ' to ',
                locale: {
                    applyLabel: 'Submit',
                    cancelLabel: 'Cancel',
                    fromLabel: 'From',
                    toLabel: 'To',
                    customRangeLabel: 'Custom',
                    daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr','Sa'],
                    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    firstDay: 1
                }
            }, function(start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            });


        });
        var config = {
                '.chosen-select'           : {},
                '.chosen-select-deselect'  : {allow_single_deselect:true},
                '.chosen-select-no-single' : {disable_search_threshold:10},
                '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
                '.chosen-select-width'     : {width:"95%"}
                }
            for (var selector in config) {
                $(selector).chosen(config[selector]);
            }

        $("#ionrange_1").ionRangeSlider({
            min: 0,
            max: 5000,
            type: 'double',
            prefix: "$",
            maxPostfix: "+",
            prettify: false,
            hasGrid: true
        });

        $("#ionrange_2").ionRangeSlider({
            min: 0,
            max: 10,
            type: 'single',
            step: 0.1,
            postfix: " carats",
            prettify: false,
            hasGrid: true
        });

        $("#ionrange_3").ionRangeSlider({
            min: -50,
            max: 50,
            from: 0,
            postfix: "°",
            prettify: false,
            hasGrid: true
        });

        $("#ionrange_4").ionRangeSlider({
            values: [
                "January", "February", "March",
                "April", "May", "June",
                "July", "August", "September",
                "October", "November", "December"
            ],
            type: 'single',
            hasGrid: true
        });

        $("#ionrange_5").ionRangeSlider({
            min: 10000,
            max: 100000,
            step: 100,
            postfix: " km",
            from: 55000,
            hideMinMax: true,
            hideFromTo: false
        });

        $(".dial").knob();

        $("#basic_slider").noUiSlider({
            start: 40,
            behaviour: 'tap',
            connect: 'upper',
            range: {
                'min':  20,
                'max':  80
            }
        });

        $("#range_slider").noUiSlider({
            start: [ 40, 60 ],
            behaviour: 'drag',
            connect: true,
            range: {
                'min':  20,
                'max':  80
            }
        });

        $("#drag-fixed").noUiSlider({
            start: [ 40, 60 ],
            behaviour: 'drag-fixed',
            connect: true,
            range: {
                'min':  20,
                'max':  80
            }
        });


    </script>

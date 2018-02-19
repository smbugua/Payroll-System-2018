<?php
include('header.php');
$user=$_SESSION['user'];
$period=$_REQUEST['period'];
if ($period=="all") {
    $seresult=mysql_query("SELECT * FROM payroll_tbl where payrollno='$user' ");
}elseif ($period!="all") {
    $seresult=mysql_query("SELECT * FROM payroll_tbl where status='1'  AND payrollno='$user' and payrollrun='$period'");
}
?>
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-5">
                    <h2>REMMITANCE</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="reports.php">REPORTS</a>
                        </li>
                        <li class="active">
                            <strong><a href="#">REMMITANCE REPORT</a></strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
       <div class="wrapper wrapper-content animated fadeInRight">
                    
         
             <div class="row">
            <div class="col-lg-12">

    <link href="dataTables/dataTables.bootstrap.css" rel="stylesheet" >
    <link href="dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="dataTables/dataTables.tableTools.min.css" rel="stylesheet">
                <div class="wrapper wrapper-content animated fadeInUp">

                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>REMMITANCE REPORT</h5>
                            <div class="ibox-tools">
                            </div>
                        </div>
                        <div class="ibox-content">
<div class="row m-b-sm m-t-sm">
<div class="table-responsive">
<table class="table table-bordered  dataTables-example"  align="center" id="tableid" datapagesize="20"   >
         <thead>
          <th colspan="11" >
           <h3 align="center"><font color="blue"  >Salary Remmitance for <?php echo date('Y-M')?></font></h3>          
             </th>
   </tr>
        <th>Payroll No </th>
        <th>Staff Name </th>
        <th>Bank </th>
        <th>Branch</th>
        <th>Account </th>
        <th>Account Name</th>
        <th>Amount</th>
    </thead>
    <tbody>
    <?php 
       while($s=mysql_fetch_array($seresult)){ ?>
    <tr>
        <td><?php echo $s['payrollno']?> </td>
        <td><?php echo $s['sname']?> </td>
        <?php
        $id=$s['staffid'];
        $bank=mysql_fetch_array(mysql_query("SELECT bankcode,branchcode,accountno,accountname from staff where id='$id'"));
        ?>
        <td><?php echo $bank['bankcode']?> </td>
        <td><?php echo $bank['branchcode']?> </td>
        <td><?php echo $bank['accountno']?> </td>
        <td><?php echo $bank['accountname']?> </td>
        <td><?php echo $s['netpay']?> </td>
    </tr>
    <?php }?>   
    <tr>
        
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
       
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="js/plugins/dataTables/dataTables.responsive.js"></script>
    <script src="js/plugins/dataTables/dataTables.tableTools.min.js"></script>


             <script>
        $(document).ready(function() {
            $('.dataTables-example').dataTable({
                responsive: true,
                "dom": 'T<"clear">lfrtip',
                "tableTools": {
                    "sSwfPath": "js/plugins/dataTables/swf/copy_csv_xls_pdf.swf"
                }
            });

            /* Init DataTables */
            var oTable = $('#editable').dataTable();

            /* Apply the jEditable handlers to the table */
            oTable.$('td').editable( '../example_ajax.php', {
                "callback": function( sValue, y ) {
                    var aPos = oTable.fnGetPosition( this );
                    oTable.fnUpdate( sValue, aPos[0], aPos[1] );
                },
                "submitdata": function ( value, settings ) {
                    return {
                        "row_id": this.parentNode.getAttribute('id'),
                        "column": oTable.fnGetPosition( this )[2]
                    };
                },

                "width": "90%",
                "height": "100%"
            } );


        });

        function fnClickAddRow() {
            $('#editable').dataTable().fnAddData( [
                "Custom row",
                "New row",
                "New row",
                "New row",
                "New row" ] );

        }
    </script>
    <style>
    body.DTTT_Print {
        background: #fff;

    }
    .DTTT_Print #page-wrapper {
        margin: 0;
        background:#fff;
    }

    button.DTTT_button, div.DTTT_button, a.DTTT_button {
        border: 1px solid #e7eaec;
        background: #fff;
        color: #676a6c;
        box-shadow: none;
        padding: 6px 8px;
    }
    button.DTTT_button:hover, div.DTTT_button:hover, a.DTTT_button:hover {
        border: 1px solid #d2d2d2;
        background: #fff;
        color: #676a6c;
        box-shadow: none;
        padding: 6px 8px;
    }

    .dataTables_filter label {
        margin-right: 5px;

    }
</style>
               
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

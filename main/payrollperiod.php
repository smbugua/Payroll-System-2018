<?php
include('header.php');
$period=$_POST['period'];
$result=mysql_query("SELECT DISTINCT * FROM payroll WHERE status='1' and payrollrun='$period' ORDER BY id ASC ");

?>
    <link href="dataTables/dataTables.bootstrap.css" rel="stylesheet" >
    <link href="dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="dataTables/dataTables.tableTools.min.css" rel="stylesheet">
  <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>Payroll Run Report </h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="hrdash.php">Hr Dashboard</a>
                        </li>
                        <li class="active">
                            <strong>Payroll Report</strong>
                        </li>
                    </ol>
                </div>
            </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="wrapper wrapper-content animated fadeInUp">

                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Payroll</h5>
                            <div class="ibox-tools">
                            </div>
                        </div>
                        <div class="ibox-content">

                            <div class="row m-b-sm m-t-sm">
<div class="table-responsive">
<table class="table table-bordered  dataTables-example"  align="center" id="tableid" datapagesize="20"   >
         <thead>
          <th colspan="11" >

          


        <h4>Confirmed Payroll Details for <?php echo $period?></h4>         
             </th>
             
                <tr> 
                    <th class="header" id="usr">Payroll Period</th> 
                    <th class="header" id="usr">Staff Name</th> 
                    <th class="header" id="usr">Basic Salary</th>
                    <th class="header" id="usr">NHIF</th>
                    <th class="header" id="usr">NSSF</th>
                    <th class="header" id="usr">Tax</th>
                    <th class="header" id="usr">Taxable Income</th>
                    <th class="header" id="usr">Netpay</th>
                </tr> 
            </thead> 

            <tbody> 
            <?php while ($row = mysql_fetch_array($result)) { ?>           
                <tr > 
                  <td><?php echo $row["payrollrun"]?></td> 
                    <td><?php echo $row["sname"]?></td>
                    <td><?php echo $row["salary"] ?></td>
                    <td><?php echo $row["nhif"] ?></td>
                    <td><?php echo $row["nssf"] ?></td>
                    <td><?php echo $row["tax"] ?></td>
                    <td><?php echo $row["taxableincome"] ?></td>
                    <td><?php echo $row["netpay"] ?></td>
                 </tr>    
                
                           <?php } ?>
                  
            </tbody> 


            </table>
            </div>
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
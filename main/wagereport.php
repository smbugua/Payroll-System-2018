<?php
include('header.php');
$sdate=$_POST['sdate'];
$edate=$_POST['edate'];
$result=mysql_query("SELECT * FROM wages where startdate='$sdate' and enddate='$edate'");

?>
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-5">
                    <h2>Wage Report</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="wages.php">Wages</a>
                        </li>
                        <li class="active">
                            <strong><a href="#">Wages Posted</a></strong>
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
                            <h5>Wages Posted</h5>
                            <div class="ibox-tools">
                            </div>
                        </div>
                        <div class="ibox-content">
<div class="row m-b-sm m-t-sm">
<div class="table-responsive">
<table class="table table-bordered  dataTables-example"  align="center" id="tableid" datapagesize="20"   >
         <thead>
          <th colspan="11" >
           <h4>Wages for <?php echo $sdate." TO ".$edate?></h4>            
             </th>


    </tr>
        <th class="header">Name</th>
        <th class="header">Id</th>
        <th class="header">Mon</th>
        <th class="header">Tue</th>
        <th class="header">Wed</th>
        <th class="header">Thur</th>
        <th class="header">Fri</th>
        <th class="header">Sat</th>
        <th class="header">Sun</th>
        <th class="header">Date Start </th>
        <th class="header">Date End </th>
    </thead>
    <tbody>
    <?php 

    while($s=mysql_fetch_array($result)){ ?>
    <tr>
        <td><?php echo $s['name']?> </td>
        <td><?php echo $s['id']?> </td>     
        <td><?php echo $s['mon']?> </td>
        <td><?php echo $s['tue']?> </td>
        <td><?php echo $s['wed']?> </td>
        <td><?php echo $s['thur']?> </td>
        <td><?php echo $s['fri']?> </td>
        <td><?php echo $s['sat']?> </td>
        <td><?php echo $s['sun']?> </td>
        <td><?php echo $s['startdate']?> </td>
        <td><?php echo $s['enddate']?> </td>
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

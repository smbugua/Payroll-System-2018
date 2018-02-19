<?php
include('header.php');
$result=mysql_query("SELECT * FROM staff ORDER BY id ASC");

?>
    <link href="dataTables/dataTables.bootstrap.css" rel="stylesheet" >
    <link href="dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="dataTables/dataTables.tableTools.min.css" rel="stylesheet">
  <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>Staff list</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li class="active">
                            <strong>list of Staff</strong>
                        </li>
                    </ol>
                </div>
            </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="wrapper wrapper-content animated fadeInUp">

                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Staff</h5>
                            <div class="ibox-tools">
                                <a href="addstaff.php" class="btn btn-primary btn-xs">New Staff</a>
                            </div>
                        </div>
                        <div class="ibox-content">

                            <div class="row m-b-sm m-t-sm">
<div class="table-responsive">
<table class="table table-bordered  dataTables-example"  align="center" id="tableid" datapagesize="20"   >
         <thead>
          <th colspan="11" >

          


        <h4>Staff Details</h4>         
             </th>
             
                <tr> 
                    <th class="header" id="usr">Staff Name</th> 
                    <th class="header" id="usr">Id Number</th> 
                    <th class="header" id="usr">Email</th>
                    <th class="header" id="usr">Staff Category</th>
                    <th class="header" id="usr">View</th>
                    <th class="header" id="usr">Delete</th>
                </tr> 
            </thead> 

            <tbody> 
            <?php while ($row = mysql_fetch_array($result)) { ?>           
                <tr > 
                  <td><?php echo $row["staff_name"]?></td> 
                    <td><?php echo $row["national_id"]?></td>
                    <td><?php echo $row["staff_email"] ?></td>
                    <?php
                    $id=$row["staff_type"];
                    $type=mysql_fetch_array(mysql_query("SELECT type_name FROM stafftype WHERE id='$id'"));
                    $t=$type['type_name'];
                    ?>
                    <td><?php echo $t ?></td>
                    <td><a href="staffmember.php?id=<?php echo $row['id'] ?>"><i class="fa fa-edit"> Edit</i> </a></td>
                    <td><a  href="staffclass.php?id=<?php echo $row['id'] ?>&&action=delete"><i class="fa fa-trash o"> Delete</i></a></td>
                    </tr>    
                
                           <?php } ?>
                  
            </tbody> 


            </table>
            </div>
            </div> 
            
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
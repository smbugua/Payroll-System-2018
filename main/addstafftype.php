<?php
include('header.php');
$result=mysql_query("SELECT * FROM stafftype ORDER BY id ASC");
?>
  <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Add Job Description </h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="staffdetails.php">Staff Details</a>
                        </li>
                        <li class="active">
                            <strong><a href="#">Add Job Description</a></strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
       <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
            <div class="col-lg-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Add a New Job Description</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                    <form action="stafftypeadd.php"  method="post">
                        <div class="row" >
                            
                             
                                    <div class="form-group"><label>Job Description Name</label> <input name="stypename" type="text" required="" placeholder="Enter Staff Type Name(e.g cleaners,clerk,cleaner)" class="form-control"></div>
                                    
                                    <div class="form-group"><label>Department</label>
                                                      <?php
                                     $statusQuery="select id,name from dept";
                                        $statusResult=queryMysql($statusQuery);
                                        $no = mysql_num_rows($statusResult);
                                      echo "<select name='dept' type='text' class='form-control' >";
                                    for ($i = 0 ; $i < $no ; ++$i)
                                      {
                                        $statusRow = mysql_fetch_row($statusResult);
                                        echo "<option value='$statusRow[0]'>$statusRow[1]</option>";
                                      }

                                      echo "</select><br/>";
                                    ?>
                                    </div>

                                  <div class="col-sm-6">
                              
                                        <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Save</strong></button>
                                    </div>
                            
                            </div>
                          
                     </div>
                            
                    </div>
            </form>
  
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


     <link href="dataTables/dataTables.bootstrap.css" rel="stylesheet" >
    <link href="dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="dataTables/dataTables.tableTools.min.css" rel="stylesheet">
  
        <div class="row">
            <div class="col-lg-7">
                <div class="wrapper wrapper-content animated fadeInUp">

                    <div class="ibox">
                    
                        <div class="ibox-content">

                            <div class="row m-b-sm m-t-sm">
<div class="table-responsive">
<table class="table table-bordered  dataTables-example"  align="center" id="tableid" datapagesize="20"   >
         <thead>
          <th colspan="11" >

          


        <h4>Staff Type Details</h4>         
             </th>
             
                <tr> 
                    <th class="header" id="usr">Staff Type</th>
                    <th class="header" id="usr">Department</th>
                    <th class="header" id="usr">Action</th>
                    <th class="header" id="usr">Delete</th>
                </tr> 
            </thead> 

            <tbody> 
            <?php while ($row = mysql_fetch_array($result)) { ?>           
                <tr > 
                    <td><?php echo $row["type_name"] ?></td>
                    <?php
                    $d=$row['deptid'];
                    $dd=mysql_fetch_array(mysql_query("SELECT name from dept where id='$d'"));
                    ?>
                    <td><?php echo $dd['name']?></td>
                    <td><a class="btn btn-success btn-xs" href="stafftypeedit.php?id=<?php echo $row['id'] ?>">Edit</a></td>
                    <td><a class="btn btn-danger btn-xs" href="staffclass.php?id=<?php echo $row['id'] ?>&&action=deletetype">Delete</a></td>
                    </tr>    
                
                           <?php } ?>
                  
            </tbody> 


            </table>
            </div>
            </div> 
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

<?php
include('header.php');
?>
<div class="col-sm-4">

  <div class="row wrapper border-bottom white-bg page-heading">
            <h3>Register user to FM+</h3>
           
            <form class="m-t" role="form" action="userclass.php?action=adduser" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="fname" placeholder="Name" required="">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="UserName" required="">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <input type="password"  id="p1"class="form-control" name="password" placeholder="Password" required="">
                </div>
                <div class="form-group" id="err">
                    
                </div>
                 <div class="form-group">
                    <input type="password" id="p2"  class="form-control" name="password2" placeholder="Confirm Password" required="" 
                    > <br>
                </div>
                <div class="form-group">
                <label>User Account Type</label>  <br>
                    <select name="utype" class="form-control">
                        <option value="0">Administrator</option>
                        <option value="1">Office Clerk</option>
                        <option value="2">Front Office</option>
                    </select>
                </div>
                <div class="form-group">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b" onclick="validater()">Create User</button>
            </form>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
        function validater(){
            var p1=document.getElementById('p1').value;
            var p2=document.getElementById('p2').value;
            if (p1!=p2) {
                 document.getElementById('err').innerHTML="Passwords do not match";
            }


        };
    </script>


</body>

</html>
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
<div class="ibox-content">
    <form action="staffclass.php?id=<?php echo $id ?>&action=setbanking" method="post">
        <div class="row">
            <div class="col-sm-6 b-r"><h3 class="m-t-none m-b">Banking Information Details</h3>

                <div class="form-group"><label>Bank Name</label>
                    <?php
                    $statusQuery = "select bcode,bank from banks";
                    $statusResult = queryMysql($statusQuery);
                    $no = mysql_num_rows($statusResult);
                    echo "<select name='bank' type='text' class='form-control' >";
                    for ($i = 0; $i < $no; ++$i) {
                        $statusRow = mysql_fetch_row($statusResult);
                        echo "<option value='$statusRow[0]'>$statusRow[1]</option>";
                    }

                    echo "</select><br/>";
                    ?>
                </div>
                <div class="form-group"><label>Branch Name</label>
                    <?php
                    $statusQuery = "select code,bname from bankbranch";
                    $statusResult = queryMysql($statusQuery);
                    $no = mysql_num_rows($statusResult);
                    echo "<select name='bankbranch' type='text' class='form-control' >";
                    for ($i = 0; $i < $no; ++$i) {
                        $statusRow = mysql_fetch_row($statusResult);
                        echo "<option value='$statusRow[0]'>$statusRow[1]</option>";
                    }

                    echo "</select><br/>";
                    ?>
                </div>
            </div>
            <div class="col-sm-6">
                </div>
                <div class="form-group"><label>Account No</label>
                    <input name="accno" type="text" value="<?php echo $row['accountno'] ?>" class="form-control"></div>
                <div class="form-group"><label>Account Name</label>
                    <input name="accname" type="text" value="<?php echo $row['accountname'] ?>" class="form-control"></div>
                    <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Save</strong></button>
        </div>
    </form>
</div>
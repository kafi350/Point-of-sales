<?php
require("header.php");



?>


<?php
if(isset($_GET['edt'])) {
    $sql = select("SELECT * FROM pricerules WHERE id=" . $_GET['edt']);
    while ($row = mysqli_fetch_array($sql)) {
        ?>




        <form class="form-horizontal customform" method="post">
            <fieldset>

                <!-- Form Name -->
                <legend style="margin-left: 10px; font-style: bold;">Add/Edit Price Rules</legend>

                <!-- Select Basic -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="selectbasic">ID</label>
                    <div class="col-md-5">
                        <input id="" name="id" type="text" placeholder="ID" class="form-control input-md"
                               required="" value="<?php echo $row['id']; ?>">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="Product Name">Rule Name</label>
                    <div class="col-md-5">
                        <input id="" name="rname" type="text" placeholder="Rule"
                               class="form-control input-md"
                               required="" value="<?php echo $row['name']; ?>">

                    </div>
                </div>


                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="Product Name">Start Date</label>
                    <div class="col-md-5">
                        <input id="" name="stdate" type="text" placeholder="1.1.2017" class="form-control input-md"
                               required="" value="<?php echo $row['stdate']; ?>">

                    </div>
                </div>

                <!-- Select Basic -->

                <div class="form-group">
                    <label class="col-md-4 control-label" for="Product Name">End Date</label>
                    <div class="col-md-5">
                        <input id="" name="endate" type="text" placeholder="1.5.2017" class="form-control input-md"
                               required="" value="<?php echo $row['endate']; ?>">

                    </div>
                </div>





                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="Product Name">Percentage</label>
                    <div class="col-md-5">
                        <input id="" name="rtype" type="text" placeholder="Required" class="form-control input-md"
                               required="" value="<?php echo $row['rtype']; ?>">

                    </div>
                </div>


                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="LoanTerm">Status</label>
                    <div class="col-md-5">
                        <input id="" name="status" type="text" placeholder="" class="form-control input-md" value="<?php echo $row['status']; ?>">

                    </div>
                </div>



                <!-- Select Basic -->
                <div class="button text-right col-md-12">
                    <button class="btn btn-primary" type="submit" name="update" value="udt"><span
                            class="glyphicon glyphicon-download-alt"></span>UPDATE</button>
                </div>

            </fieldset>
        </form>
        <?php
    }
}
else{


    ?>


    <form class="form-horizontal customform" method="post">
        <fieldset>

            <!-- Form Name -->
            <legend style="margin-left: 10px; font-style: bold;">Add/Edit Price Rules</legend>

            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">ID</label>
                <div class="col-md-5">
                    <input id="" name="id" type="text" placeholder="ID" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="Product Name">Rule Name</label>
                <div class="col-md-5">
                    <input id="" name="name" type="text" placeholder="" class="form-control input-md"
                           required="">

                </div>
            </div>


            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="Product Name">Start Date</label>
                <div class="col-md-5">
                    <input id="" name="stdate" type="text" placeholder="" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="Product Name">End Date</label>
                <div class="col-md-5">
                    <input id="" name="endate" type="text" placeholder="" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="LVR">Percentage</label>
                <div class="col-md-5">
                    <input id="" name="rtype" type="text" placeholder="" class="form-control input-md">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="LoanTerm">Status</label>
                <div class="col-md-5">
                    <input id="" name="status" type="text" placeholder="" class="form-control input-md">

                </div>
            </div>




            <!-- Text input-->


            <!-- Select Basic -->
            <div class="button text-right col-md-12">
                <button class="btn btn-primary" type="submit" name="insert" value="ins"><span class="glyphicon glyphicon-download-alt"></span>CREATE RULE
                </button>
            </div>

        </fieldset>
    </form>
    <?php
}
?>



    </div>


    </div>
    </div>




<?php
include("footer.php");
?>
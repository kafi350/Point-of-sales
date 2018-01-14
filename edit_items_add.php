<?php
    require("header.php");



?>


            <?php
            if(isset($_GET['edt'])) {
                $sql = select("SELECT * FROM items WHERE id=" . $_GET['edt']);
                while ($row = mysqli_fetch_array($sql)) {
                    ?>




                    <form class="form-horizontal customform" method="post">
                <fieldset>

                    <!-- Form Name -->
                    <legend style="margin-left: 10px; font-style: bold;">Add/Edit Products*</legend>

                    <!-- Select Basic -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="selectbasic">Item ID</label>
                        <div class="col-md-5">
                            <input id="" name="id" type="text" placeholder="ID" class="form-control input-md"
                                   required="" value="<?php echo $row['id']; ?>">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="Product Name">Barcode</label>
                        <div class="col-md-5">
                            <input id="" name="barcode" type="text" placeholder="#########"
                                   class="form-control input-md"
                                   required="" value="<?php echo $row['barcode']; ?>">

                        </div>
                    </div>


                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="Product Name">Item Name</label>
                        <div class="col-md-5">
                            <input id="" name="name" type="text" placeholder="Name" class="form-control input-md"
                                   required="" value="<?php echo $row['name']; ?>">

                        </div>
                    </div>

                    <!-- Select Basic -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="Category_type">Select Category</label>
                        <div class="col-md-5">
                            <select id="Category_type" name="category" class="form-control" value="<?php echo $row['category']; ?>">
                                <option value="1">Cloths</option>
                                <option value="2">Electronic items</option>
                                <option value="">Cosmetics</option>
                                <option value="">Shoes</option>

                            </select>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="LVR">Size</label>
                        <div class="col-md-5">
                            <input id="" name="size" type="text" placeholder="Size" class="form-control input-md" value="<?php echo $row['size']; ?>">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="LoanTerm">Buying Price</label>
                        <div class="col-md-5">
                            <input id="" name="cprice" type="text" placeholder="" class="form-control input-md" value="<?php echo $row['cprice']; ?>">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="LoanTermMax">Selling Price</label>
                        <div class="col-md-5">
                            <input id="" name="sprice" type="text" placeholder="" class="form-control input-md" value="<?php echo $row['sprice']; ?>">

                        </div>
                    </div>


                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="IntroLength">Quantity</label>
                        <div class="col-md-5">
                            <input id="" name="quantity" type="text" placeholder=class="form-control input-md" value="<?php echo $row['quantity']; ?>">

                        </div>
                    </div>

                    <!-- Select Basic -->
                    <div class="button text-right col-md-12">
                        <button class="btn btn-primary" type="submit" name="update1" value="udt1"><span
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
            <legend style="margin-left: 10px; font-style: bold;">Add/Edit Products*</legend>

            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">Item ID</label>
                <div class="col-md-5">
                    <input id="" name="id" type="text" placeholder="ID" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="Product Name">Barcode</label>
                <div class="col-md-5">
                    <input id="" name="barcode" type="text" placeholder="#########" class="form-control input-md"
                           required="">

                </div>
            </div>


            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="Product Name">Item Name</label>
                <div class="col-md-5">
                    <input id="" name="name" type="text" placeholder="Name" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="Category_type">Select Category</label>
                <div class="col-md-5">
                    <select id="Category_type" name="category" class="form-control">
                        <option value="Cloths">Cloths</option>
                        <option value="Electronic Items">Electronic items</option>
                        <option value="Cosmetics">Cosmetics</option>
                        <option value="Shoes">Shoes</option>

                    </select>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="LVR">Size</label>
                <div class="col-md-5">
                    <input id="" name="size" type="text" placeholder="Size" class="form-control input-md">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="LoanTerm">Buying Price</label>
                <div class="col-md-5">
                    <input id="" name="cprice" type="text" placeholder="" class="form-control input-md">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="LoanTermMax">Selling Price</label>
                <div class="col-md-5">
                    <input id="" name="sprice" type="text" placeholder="" class="form-control input-md">

                </div>
            </div>


            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="IntroLength">Quantity</label>
                <div class="col-md-5">
                    <input id="" name="quantity" type="text" placeholder="" class="form-control input-md">

                </div>
            </div>

            <!-- Select Basic -->
            <div class="button text-right col-md-12">
                <button class="btn btn-primary" type="submit" name="insert1" value="ins1"><span class="glyphicon glyphicon-download-alt"></span>ADD ITEM
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
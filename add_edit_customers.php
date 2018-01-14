<?php

	include("header.php");

	if(isset($_GET['edt'])){
	 	$sql = select("SELECT * FROM customers WHERE id=".$_GET['edt']);
		while($row=mysqli_fetch_array($sql)){
?>
<form class="form-horizontal customform" action="" method="post">
        <fieldset>

<!-- Form Name -->
        <legend style="margin-left: 10px; font-style: bold;">Add/Edit Customers*</legend>

<!-- Select Basic -->
              <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">Name</label>
                <div class="col-md-5">
                  <input id="" name="name" type="text" placeholder="User Name" class="form-control input-md" required="" value="<?php echo $row['name']; ?>">
                  
                </div>
              </div>

              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-4 control-label" for="Product Name">Email</label>  
                <div class="col-md-5">
                <input id="" name="mail" type="text" placeholder="Email" class="form-control input-md" required="" value="<?php echo $row['mail']; ?>">
                  
                </div>
              </div>

            <!-- Select Basic -->

            	<div class="button text-right col-md-12">
                  <button class="btn btn-primary" type="submit" name="update2" value="udt2"><span class="glyphicon glyphicon-download-alt"></span>UPDATE</button>
                </div>
               

                </fieldset>
                </form>
                <?php
					}
				}
					else{
				?>
			<form class="form-horizontal customform" action="" method="post">
       				 <fieldset>

<!-- Form Name -->
        			<legend style="margin-left: 10px; font-style: bold;">Add/Edit Customers*</legend>

<!-- Select Basic -->
              <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">Name</label>
                <div class="col-md-5">
                  <input id="" name="name" type="text" placeholder="User Name" class="form-control input-md" >
                  
                </div>
              </div>

              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-4 control-label" for="Product Name">Email</label>  
                <div class="col-md-5">
                <input id="" name="mail" type="text" placeholder="Email" class="form-control input-md" >
                  
                </div>
              </div>

            <!-- Select Basic -->

            	<div class="button text-right col-md-12">
                  <button class="btn btn-primary" type="submit" value="ins2" name="insert2"><span class="glyphicon glyphicon-download-alt"></span>ADD NEW USER</button>
                </div>
               

                </fieldset>
                </form>
                <?php
           			}
           		?>





</div>

<?php

include("footer.php");

?>
<?php require("header.php");

if(isset($_GET['del'])){
    delete("pricerules", "id =".$_GET['del']);

}


?>

    <div class="panel panel-default">
  <!-- Default panel contents -->

  
      <table class="table">
          <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">

                    <div class="input-group">
                        <form method="post" action="">
                    <input type="hidden" name="search_param" value="all" id="search_param">
                    <input type="text" class="form-control" name="search" placeholder="Search Rules">
                    <span class="input-group-btn">
                     <button class="btn btn-default" type="submit" name="submit" ><span class="glyphicon glyphicon-search"></span></button>
                    </span>
                        </form>
                </div>
            </div>

                  
                  
                  <div class="col col-xs-6 text-right">
                    <a href="edit_pricerule_add.php" style="text-decoration: none; color: #ffffff;"><button type="button" class="btn btn-sm btn-primary btn-create">Create Rule</button></a>
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>

                        <th>Actions</th>
                        <th>Id</th>
                        <th>Rule Name</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Percantage</th>
                        <th>Status</th>
                        
                        
                    </tr> 
                  </thead>
                    <?php
                    $run = select("SELECT * FROM  pricerules");
                    while($row=mysqli_fetch_array($run)){
                    ?>
                    <tbody>
                    <tr>
                        <td><a class="btn btn-default" href="edit_pricerule_add.php?edt=<?php echo $row['id']; ?>"><em
                                        class="fa fa-pencil"></em></a>
                            <a class="btn btn-danger" href="pricerules.php?del=<?php echo $row['id']; ?>"><em
                                        class="fa fa-trash"></em></a></td>
                        <td class="hidden-xs"><?php echo $row['id']; ?></td>
                        <td class="hidden-xs"><?php echo $row['name']; ?></td>
                        <td><?php echo $row['stdate']; ?></td>
                        <td><?php echo $row['endate']; ?></td>
                        <td><?php echo $row['rtype']; ?></td>
                        <td><?php echo $row['status']; ?></td>


                    </tr>
                    <?php
                    }

                    ?>
                    </tbody>
                </table>
              </div>
    
  </div>
  </div>




	<script type="text/javascript" src="js/jquerylib.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/canvasjs/canvasjs.min.js"></script>
	<script type="text/javascript" src="custom.js"></script>
  
</body>
</html>
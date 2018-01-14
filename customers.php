<?php 
  include("header.php");

if(isset($_GET['del'])){
    delete("customers", "id =".$_GET['del']);

}


?>


    <div class="panel panel-default">
  <!-- Default panel contents -->

  
      <table class="table">
          <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Customers</h3>
                  </div>
                  <div class="col col-xs-6 text-right">
                    <button type="button" class="btn btn-sm btn-primary btn-create"><a href="add_edit_customers.php" style="text-decoration: none; color: #fff;">Add New Customer</a></button>
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th><em class="fa fa-cog"></em></th>
                        <th class="hidden-xs">ID</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr> 
                  </thead>
                  <?php
                    $run = select("SELECT * FROM customers");
                    while($row=mysqli_fetch_array($run)){

                    ?> 
                  <tbody>
                          <tr>
                            <td align="center">
                              <a class="btn btn-default" href="add_edit_customers.php?edt=<?php echo $row['id']; ?>"><em class="fa fa-pencil"></em></a>
                              <a class="btn btn-danger" href="customers.php?del=<?php echo $row['id']; ?>"><em class="fa fa-trash"></em></a>
                            </td>
                            <td class="hidden-xs"><?php echo $row['id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['mail']; ?></td>
                          </tr>
                          <?php
                          }
                          ?>
                        </tbody>
                </table>
            
              </div>
              <div class="panel-footer">
                <div class="row">
                  <div class="col col-xs-4">Page 1 of 5
                  </div>
                  <div class="col col-xs-8">
                    <ul class="pagination hidden-xs pull-right">
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                    </ul>
                    <ul class="pagination visible-xs pull-right">
                        <li><a href="#">«</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

</div>
    
    
</div>




<?php

  include("footer.php");

?>
<?php require("header.php"); ?>
  
    <div class="panel panel-default">
  <!-- Default panel contents -->

  
      <table class="table">
          <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    
                    <div class="input-group">
                    <div class="input-group-btn search-panel">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                          <span id="search_concept">Filter by</span> <span class="caret"></span>
                        </button>
                       <ul class="dropdown-menu" role="menu">
                          <li><a href="#contains">Products</a></li>
                          <li><a href="#its_equal">Size</a></li>
                          <li><a href="#greather_than">Price</a></li>
                          <li><a href="#less_than">Quanttity</a></li>
                          
                       </ul>
                    </div>
                    <input type="hidden" name="search_param" value="all" id="search_param">         
                    <input type="text" class="form-control" name="x" placeholder="Search term...">
                    <span class="input-group-btn">
                     <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                    </span>
                </div>
            </div>
                  
                  
                  
                  <div class="col col-xs-6 text-right">
                    
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>

                        <th><input type="checkbox" name=""></th>
                        <th>Item Id</th>
                        <th>BAR Code</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Size</th>
                        <th>Cost Price</th>
                        <th>Selling Price</th>
                        <th>Quantitiy</th>
                        <th>Edit</th>
                        
                    </tr> 
                  </thead>
                  <tbody>
                          <tr>
                            <td><input type="checkbox" name=""></td>
                            <td class="hidden-xs">121</td>
                            <td class="hidden-xs">1256146</td>
                            <td>Polo Shirts</td>
                            <td>Men's Cloth</td>
                            <td>M</td>
                            <td>350TK</td>
                            <td>500TK</td>
                            <td>20</td>
                            <td><a href="edit_items_add.php" style="text-decoration: none">Edit</a></td>
                            
                          </tr>
                          <tr>
                            <td><input type="checkbox" name=""></td>
                            <td class="hidden-xs">121</td>
                            <td class="hidden-xs">1256146</td>
                            <td>Polo Shirts</td>
                            <td>Men's Cloth</td>
                            <td>M</td>
                            <td>350TK</td>
                            <td>500TK</td>
                            <td>20</td>
                            <td><a href="edit_items_add.php" style="text-decoration: none">Edit</a></td>
                          </tr>
                          <tr>
                            <td><input type="checkbox" name=""></td>
                            <td class="hidden-xs">121</td>
                            <td class="hidden-xs">1256146</td>
                            <td>Polo Shirts</td>
                            <td>Men's Cloth</td>
                            <td>M</td>
                            <td>350TK</td>
                            <td>500TK</td>
                            <td>20</td>
                            <td><a href="edit_items_add.php" style="text-decoration: none">Edit</a></td>
                          </tr>
                        </tbody>
                </table>
            
              </div>
</div>
</div>
    
   
  </div>
  </div>




	<script type="text/javascript" src="js/jquerylib.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/canvasjs/canvasjs.min.js"></script>
	<script type="text/javascript" src="custom.js"></script>
  
</body>
</html>
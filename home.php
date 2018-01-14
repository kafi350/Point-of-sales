<?php require("header.php"); ?>
<!-- Main COntent Four Boxes -->
      <!-- <div class="row"> -->
        <div class="col-xs-7 col-md-4">
        
        <a href="#" class="thumbnail box info">
          
          <span class="col-md-8">
          <h3 class="text">57</h3>
          <h4 class="text">Sales Information</h4>
          </span>
          <span class="col-md-4">
          <i class="fa fa-shopping-cart fa-5x" aria-hidden="true"></i>
          <!-- <img class="right-top" src="..." alt="..."> -->
          </span>
          
        </a>

      </div>
      <div class="col-xs-7 col-md-4">
      
        <a href="#" class="thumbnail box items">
        <span class="col-md-8">
        <h3 class="text"><?php
            ?></h3>
        <h4 class="text">Total Items</h4>
        </span>
        <span class="col-md-4">
          <i class="fa fa-archive fa-5x" aria-hidden="true"></i>
          </span>
        </a>
      
      </div>

      <div class="col-xs-7 col-md-4">
      
        <a href="#" class="thumbnail box customers">
        <span class="col-md-8">
        <h3 class="text">40</h3>
        <h4 class="text">Total Customers</h4>
        </span>
        <span class="col-md-4">
          <i class="fa fa-users fa-5x" aria-hidden="true"></i></span>
        </a>
        
      </div>
     
      <!-- </div> -->
    <!-- Main COntent Four Boxes Ends-->
    
    <div class="alertbox col-md-12">
        <div class="col-xs-6 col-md-5 alert alert-success " role="alert"><i class="fa fa-clock-o fa-1x" aria-hidden="true"></i> &nbsp &nbsp <a href="#" class="nounderline">Todays Closeout Deal</a></div>
        <div class="col-xs-6 col-md-5 alert alert-info " role="alert"><i class="fa fa-list-alt fa-1x" aria-hidden="true"></i> &nbsp &nbsp <a href="#" class="nounderline">Today's summary item report</a></div>
        <div class="col-xs-6 col-md-5 alert alert-warning " role="alert"><i class="fa fa-shopping-cart fa-1x" aria-hidden="true"></i></i> &nbsp &nbsp <a href="#" class="nounderline">Start new Sale</a></div>
        <div class="col-xs-6 col-md-5 alert alert-danger " role="alert"><i class="fa fa-bar-chart fa-1x" aria-hidden="true"></i></i> &nbsp &nbsp <a href="#" class="nounderline">Today's detailed report</a></div> 
        <div class="col-xs-6 col-md-5 alert alert-danger " role="alert"><i class="fa fa-cloud-download fa-1x" aria-hidden="true"></i> &nbsp &nbsp <a href="#" class="nounderline">Start new Receiving</a></div>
    </div>

    <div class="col-md-12 space"></div>


    <div class="graph col-md-12">
      <ul class="nav nav-tabs">
          <li role="presentation" class="active"><a href="#">Sales</a>
            <div id="chartContainer" style="height: 300px; width: 850px;">
          </li>
     </ul>
    </div>
    
    <div class="col-md-12 space"></div>

  </div>
  </div>
  </div>

	<script type="text/javascript" src="js/jquerylib.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/canvasjs/canvasjs.min.js"></script>
	<script type="text/javascript" src="custom.js"></script>
  
</body>
</html>
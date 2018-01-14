<?php

require("header.php");

$sum =0;
$toquan = 0;
$quan = "";
$change = 0;
global $con;

            if(isset($_GET['edt'])) {
                $sql = select("insert into sales(id, barcode, name, category, size, sprice) select id, barcode, name, category, size, sprice from items where id=" . $_GET['edt']);
                $result = mysqli_query($con, $sql);

            }

            if(isset($_GET['del'])){
            delete("sales", "id =".$_GET['del']);

            }
//            if(isset($_REQUEST['delete'])){
//                del(sales);
//
//            }


?>


    <!--            Search Items-->

    <div class="panel-heading" xmlns="http://www.w3.org/1999/html">
        <div class="row">
            <div class="col col-xs-6">
                <from action="" method="POST">
                    <div class="input-group">
                        <div class="input-group-btn search-panel">
                            <select name="search_param" id="search_param" class="button btn btn-default dropdown-toggle"
                                    data-toggle="dropdown">
                                <option value="all">All</option>
                                <option value="barcode">Barcode</option>
                                <option value="id">Id</option>

                            </select>
                        </div>

                        <input type="hidden" name="search_param" value="all" id="search_param">
                        <input type="text" class="form-control csearch" name="query" placeholder="Search Item"
                               id="searchall">
                        <span class="input-group-btn">
                     <button class="btn btn-default" type="button" value="srch" name="search"><span
                                 class="glyphicon glyphicon-search"></span></button>
                    </span>
                        <!--                                Search Result-->


                        </form>
                    </div>
            </div>


        </div>
    </div>


<!--Search Items end-->

<div class="col-sm-10 col-md-12 col-md-offset-1 cart">
    <table class="table table-hover">
        <thead>
        <tr>

            <th>Product</th>
            <th>ID</th>
            <th>Quantity</th>
            <th class="text-center">Price</th>
            <th class="text-center">Total</th>
            <th>Action</th>
        </tr>

        </thead>

        <?php
        $run = select("SELECT * FROM  sales");
        while($row=mysqli_fetch_array($run)){

        ?>
        <tbody>
        <tr>
            <td class="col-sm-8 col-md-6">
                <div class="media">
                    <a class="thumbnail pull-left" href="#"> <i class="fa fa-shopping-bag fa-4x"
                                                                aria-hidden="true"></i> </a>
                    <div class="media-body">

                        <h4 class="media-heading"><a href="#"><?php echo $row['name']; ?></a></h4>
                        <span>Status: </span><span
                                class="text-success"><strong>Available</strong></span>
                    </div>
                </div>
            </td>
            <td><?php echo $row['id']; ?></td>
            <td class="col-sm-1 col-md-1" style="text-align: center">
                <form method="get" action="">
                    <input type="number" placeholder="1" name="number">
                    <input type="submit">
                </form>

            </td>
            <?php
                if(isset($_REQUEST['number']));{
                    $quan = $_GET['number'];
            }
                $toquan = (int)$quan;

            ?>
            <td class="col-sm-1 col-md-1 text-center"><strong><?php echo $row['sprice']; ?></strong>
            </td>
            <td class="col-sm-1 col-md-1 text-center">
                <strong><?php echo $totsum = $row['sprice'] * $toquan; ?></strong></td>
            <td class="col-sm-1 col-md-1">
                <a class="btn btn-danger" href="sale.php?del=<?php echo $row['id']; ?>"><em
                            class="fa fa-trash"></em></a></td>

        </tr>
        <?php
        $sum = add("sales", $sum, $totsum);

        }

        ?>



                            <td>  </td>
                            <td>  </td>
                            <td>  </td>
                            <td><h5>Sub Total</h5></td>
                            <td class="text-right"><h5><strong><?php echo $sum ?></strong></h5></td>
                            </tr>
                            <tr>
                                <td>  </td>
                                <td>  </td>
                                <td>  </td>
                                <td><h5>VAT</h5></td>
                                <td class="text-right"><h5><strong>$6.94</strong></h5></td>
                            </tr>
                            <tr>
                                <td>  </td>
                                <td>  </td>
                                <td>  </td>
                                <td><h5>Total</h5></td>
                                <td class="text-right"><h5><strong><?php echo $sum ?></strong></h5></td>
                            </tr>
                            <form method="post">
                            <tr>
                                <td>  </td>
                                <td>  </td>
                                <td>  </td>
                                <td><h5>Ammount Given</h5></td>
                                <form method="post">
                                <td class="text-right"><h5><input type="number" name="change" ></strong></h5></td>
                                <td class="text-right"><input type="submit" name="submit" value="submit"></td>
                                </form>
                                <?php if(isset($_REQUEST['change'])){
                                    $ga = $_POST['change'];
                                    $gamou = (int)$ga;
                                    $change = $gamou - $sum;
                                    $change = (abs($change));

                                } ?>

                            </tr>
                            </form>
                            <tr>
                                <td>  </td>
                                <td>  </td>
                                <td>  </td>
                                <td><h5>Change</h5></td>
                                <td class="text-right"><h5><strong><?php echo $change ?></strong></h5></td>
                            </tr>
                            <tr>
                                <td>  </td>
                                <td>  </td>
                                <td>  </td>
                                <td>
                                    <button type="button" class="btn btn-default">
                                        <span class="glyphicon glyphicon-shopping-cart"></span> Print
                                    </button>
                                </td>
                                <td>
                                    <form method="post">
                                    <button type="submit" class="btn btn-success" name="delete">
                                        New Transaction <span class="glyphicon glyphicon-play"></span>
                                    </button>
                                    </form>
                                </td>
                            </tr>
                            </tbody>

                        </table>
                    </div>
</div>


<script type="text/javascript" src="js/jquerylib.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/canvasjs/canvasjs.min.js"></script>
<script type="text/javascript" src="login_js.js" ></script>

</body>
</html>











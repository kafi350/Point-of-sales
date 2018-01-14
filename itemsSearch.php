<?php
require ("header.php");
global $con;
if (isset($_POST["submit"])) {
$search = mysqli_real_escape_string($con, $_POST['search']);
$sql = "SELECT * FROM items WHERE name LIKE '%$search%' OR id LIKE '%$search%' OR category LIKE '%$search%' OR quantity LIKE '%$search%'";
$result = mysqli_query($con, $sql);
$queryResult = mysqli_num_rows($result);
if ($queryResult > 0) {


?>

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
                                    <li></li>
                                    <li><a href="" name="">Category</a></li>
                                    <li><a href="" name="">Size</a></li>
                                    <li><a href="#greather_than" name="">Price</a></li>
                                    <li><a href="#less_than" name="">Quanttity</a></li>

                                </ul>
                            </div>
                            <form method="post" action="itemsSearch.php">
                                <input type="hidden" name="search_param" value="all" id="search_param">
                                <input type="text" class="form-control" name="Search" placeholder="Search Item" id="str"
                                       value="">
                                <span class="input-group-btn">
                        <p data-placement="top" data-toggle="tooltip" title="Edit"><button
                                class="btn btn-primary btn-xs" type="submit" data-title="Edit" data-toggle="modal"
                                data-target="#edit" value="ser" name="sear"><span
                                    class="glyphicon glyphicon-search fa-2x"></span></button></p>
                    </span>
                        </div>
                        </form>
                    </div>



                </div>
            </div>

            <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                    <thead>
                    <tr>


                        <th>Item Id</th>
                        <th>BAR Code</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Size</th>
                        <th>Cost Price</th>
                        <th>Selling Price</th>
                        <th>Quantitiy</th>
                        <th>Actions</th>

                    </tr>
                    </thead>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {


                    ?>
                    <tbody>
                    <tr>

                        <td class="hidden-xs"><?php echo $row['id']; ?></td>
                        <td class="hidden-xs"><?php echo $row['barcode']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['category']; ?></td>
                        <td><?php echo $row['size']; ?></td>
                        <td><?php echo $row['cprice']; ?></td>
                        <td><?php echo $row['sprice']; ?></td>
                        <td><?php echo $row['quantity']; ?></td>
                        <td><a class="btn btn-default" href="edit_items_add.php?edt=<?php echo $row['id']; ?>"><em
                                    class="fa fa-pencil"></em></a>
                            <a class="btn btn-danger" href="items.php?del=<?php echo $row['id']; ?>"><em
                                    class="fa fa-trash"></em></a></td>

                    </tr>
                    <?php
                    }
                    }
                    else {
                        echo "Bullshit!!";
                    }
                    }
                ?>


                </tbody>
            </table>

        </div>
    </div>
    </div>


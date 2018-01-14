<?php require("header.php");

?>

<div class="alert-danger">
    <h2>Product Add into Cart</h2>
</div>

<div class="panel-body">
    <table class="table table-striped table-bordered table-list cart">
        <thead>
        <tr>


            <th>Item Id</th>
            <th>BAR Code</th>
            <th>Name</th>
            <th>Category</th>
            <th>Size</th>
            <th>Selling Price</th>
            <th>Add to Cart</th>


        </tr>
        </thead>
        <?php
        $run = select("SELECT id, barcode, name, category, size, sprice FROM  items ");
        while($row=mysqli_fetch_array($run)){
        ?>
        <tbody>
        <tr>

            <td class="hidden-xs"><?php echo $row['id']; ?></td>
            <td class="hidden-xs"><?php echo $row['barcode']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['category']; ?></td>
            <td><?php echo $row['size']; ?></td>
            <td><?php echo $row['sprice']; ?></td>

            <td><a href="sale.php?edt=<?php echo $row['id']; ?>" class="btn btn-info btn-lg">
                        <span class="glyphicon glyphicon-shopping-cart"></span>Add to Cart
                    </a></td>

        </tr>
        <?php
        }
        ?>


        </tbody>
    </table>

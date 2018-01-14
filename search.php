<h1>search page</h1>

<div class="article-container">
    <?php
    include 'header.php';
    global $con;
    if (isset($_POST["submit"])) {
        $search = mysqli_real_escape_string($con, $_POST['search']);
        $sql = "SELECT * FROM items WHERE name LIKE '%$search%' OR id LIKE '%$search%' OR category LIKE '%$search%' OR quantity LIKE '%$search%'";
        $result = mysqli_query($con, $sql);
        $queryResult = mysqli_num_rows($result);
        if ($queryResult > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

                echo "<h3>".$row['name']."</h3>";
                echo "<p>".$row['id']."</p>";
                echo "<p>".$row['category']."</p>";
                echo "<p>".$row['quantity']."</p>";
                echo "</div></a>";
            }
        } else {
            echo "There are no articles.";
        }
    } else {
        echo "There are no results!";
    }
    ?>
</div>
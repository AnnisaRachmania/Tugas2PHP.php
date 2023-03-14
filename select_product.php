<?php
    include ('connecttodatabase.php');
?>

<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php
            $query = "SELECT * FROM products";
            $result_query = mysqli_query($koneksi, $query);

            echo "<center><h2>Data Products</h2></center>";

            if (mysqli_num_rows($result_query)>0){
                echo "<table border = '1'>
                <th> Product Code </th>
                <th> Product Name </th>
                <th> Product Line </th>
                <th> Product Scale </th>
                <th> Product Vendor </th>
                <th> Product Description </th>
                <th> Quantity In Stock </th>
                <th> Buy Price </th>
                <th> MSRP </th>";
                while($row = mysqli_fetch_assoc($result_query)) {
                    echo "<tr>";
                    echo "<td>".$row["productCode"]."</td>";
                    echo "<td>".$row["productName"]."</td>";
                    echo "<td>".$row["productLine"]."</td>";
                    echo "<td>".$row["productScale"]."</td>";
                    echo "<td>".$row["productVendor"]."</td>";
                    echo "<td>".$row["productDescription"]."</td>";
                    echo "<td>".$row["quantityInStock"]."</td>";
                    echo "<td>".$row["buyPrice"]."</td>";
                    echo "<td>".$row["MSRP"]."</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "Tidak ada data customer.";
            }
        ?>
    </body>
</html>
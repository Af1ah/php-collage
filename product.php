<?php
$conn = pg_connect("host=localhost dbname=product user=postgres password=123");

if ($conn) {
    echo "Connected successfully!";
} else {
    echo "Connection failed: " . pg_last_error();
    exit;
}


$query1 = "INSERT INTO product (itemcode, itemname, unitprice) VALUES
('101', 'Pen', 10),
('102', 'Pencil', 5),
('103', 'Notebook', 45),
('104', 'Eraser', 3),
('105', 'Marker', 22)";

pg_query($conn, $query1);


$query2 = "SELECT * FROM product";
$rs = pg_query($conn, $query2);

echo "<h2>Product Table</h2>";
echo "<table border='1' cellpadding='8'>
        <tr>
            <th>Item Code</th>
            <th>Item Name</th>
            <th>Unit Price</th>
        </tr>";

while ($row = pg_fetch_assoc($rs)) {
    echo "<tr>
            <td>{$row['itemcode']}</td>
            <td>{$row['itemname']}</td>
            <td>{$row['unitprice']}</td>
          </tr>";
}

echo "</table>";
?>

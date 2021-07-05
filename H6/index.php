<?php
$sql = new mysqli('localhost','root','','school');

$query = 'SELECT * FROM student';
$output = mysqli_query($sql, $query);
echo "<table border='1'><tr>";
while ($data = mysqli_fetch_array($output)) {
    echo "<td>" . $data['naam'] . "</td>";
}

echo "</tr></table>";


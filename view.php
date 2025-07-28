<?php
<?php
$conn = new mysqli("localhost", "root", "", "webapp");
$result = $conn->query("SELECT * FROM users");
echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Age</th><th>Status</th><th>Action</th></tr>";
while($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['name']}</td>
        <td>{$row['age']}</td>
        <td>{$row['status']}</td>
        <td><button onclick='toggleStatus({$row['id']})'>Toggle</button></td>
    </tr>";
}
echo "</table>";
$conn->close();
?>

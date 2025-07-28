<?php
<?php
$conn = new mysqli("localhost", "root", "", "webapp");
$id = intval($_POST['id']);
$res = $conn->query("SELECT status FROM users WHERE id=$id");
$row = $res->fetch_assoc();
$newStatus = $row['status'] == 1 ? 0 : 1;
$conn->query("UPDATE users SET status=$newStatus WHERE id=$id");
$conn->close();
?>

<?php
$sql = "SELECT * FROM visite";
$result = $conn->query($sql);
$i = $result->fetch_assoc()["visiteurs"] + 1;
$sql = "UPDATE visite SET visiteurs =". $i;
$conn->query($sql);
?>

<?php

include('.dpconn.php');
$sql=$conn->query("DELETE*from student_id='$id'");

$conn->prepare($sql);

echo"<br>".$stmt->rowCount()."row delete successfuly";

?>
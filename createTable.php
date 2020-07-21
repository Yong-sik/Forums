<?php
$dbconn = mysqli_connect("localhost", "root", "rkfdyd4436", "notice");
$create_query = "CREATE TABLE signup(
  member_number int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  member_name varchar(5) NOT NULL,
  member_id varchar(16) NOT NULL,
  member_pw varchar(16) NOT NULL,
  confirm_pw varchar(16) NOT NULL)";
$result = mysqli_query($dbconn, $create_query);

if ($result){
  echo "DB table created!!!";
}
else{
  echo "Error creating table :" . mysqli_error($dbconn);
}

mysqli_close($dbconn);
?>

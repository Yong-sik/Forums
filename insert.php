<?php
$dbconn = mysqli_connect("localhost", "root", "rkfdyd4436", "notice");
$insert_query = "INSERT INTO notice_content(content_title, content_writer, created, content_views)
VALUES('대출신청', '전용식', now(), 23)
";
$result = mysqli_query($dbconn, $insert_query);

if ($result){
  echo "success!";
}
else{
  echo "Error : " . mysqli_error($dbconn);
}

mysqli_close($dbconn);
?>

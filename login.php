<?php
if(isset($_POST['mbid'])){
  $member_id = $_POST['mbid'];
}
if(isset($_POST['mbpw'])){
  $member_pw = $_POST['mbpw'];
}

if(empty($member_id) || empty($member_pw)){
  echo("<script>window.alert('정보를 모두 입력해주세요.'); history.back();</script>");
}
else{
  $dbconn = mysqli_connect("localhost", "root", "rkfdyd4436", "notice");
  $profile_check  = "SELECT member_id, member_pw, member_name FROM signup where member_id = '$member_id'";
  $result = mysqli_query($dbconn, $profile_check);
  $row = mysqli_fetch_array($result, MYSQLI_NUM);
  $member_name = $row[2];
  if($row[0] == $member_id){
    if($row[1] == $member_pw){
      session_start();
      $_SESSION['member_id'] = $member_id;
      echo("<script>window.alert('로그인 되었습니다.'); location.href='main_login.php';</script>");
    }
    else{
      echo("<script>window.alert('패스워드가 일치하지 않습니다.'); history.back();</script>");
    }
  }
  else{
    echo("<script>window.alert('등록되지 않은 아이디입니다.'); history.back();</script>");
  }
  mysqli_close($dbconn);
}
?>

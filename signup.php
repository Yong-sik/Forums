<?php
if(isset($_POST['mbname'])){
  $member_name = $_POST['mbname'];
}
if(isset($_POST['mbid'])){
  $member_id = $_POST['mbid'];
}
if(isset($_POST['mbpw'])){
  $member_pw = $_POST['mbpw'];
}
if(isset($_POST['mbpw_re'])){
  $confirm_pw = $_POST['mbpw_re'];
}
if(empty($member_name) || empty($member_id) || empty($member_pw) || empty($confirm_pw)){
  echo("<script>window.alert('정보를 모두 입력해주세요.'); history.back();</script>");
}
else{
  $dbconn = mysqli_connect("localhost", "root", "rkfdyd4436", "notice");
  $duplicate_check  = "SELECT member_id FROM signup where member_id = '$member_id'";
  $result = mysqli_query($dbconn, $duplicate_check);
  if(mysqli_num_rows($result) > 0){
    echo("<script>window.alert('중복된 ID가 존재합니다!'); history.back();</script>");
    mysqli_close($dbconn);
  }
  else{
    if($member_pw == $confirm_pw){   #비밀번호와 비밀번호 확인이 같다면 밑에 구문 실행
      $dbconn = mysqli_connect("localhost", "root", "rkfdyd4436", "notice");
      $insert_query = "INSERT INTO signup(member_name, member_id, member_pw, confirm_pw)
      VALUES('$member_name', '$member_id', '$member_pw', '$confirm_pw')";
      $result = mysqli_query($dbconn, $insert_query);
      echo("<script>window.alert('회원가입이 완료되었습니다.'); history.go(-2);</script>");
    }
    else{
      echo("<script>window.alert('비밀번호가 서로 다릅니다.'); history.back();</script>");
    }
  }
  mysqli_close($dbconn);
}

?>

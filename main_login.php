<?php session_start(); ?>
<!doctype html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    -->

    <!-- Latest compiled and minified JavaScript
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    -->
    <title>게시판</title>
    <style>
        body>form>div{
            text-align: center;
        }
        body{
            text-align:right;
            margin-right: 50px;
            margin-top: 20px;
            color:black
        }
        .text_color{
            font-weight: bold;
            font-size:large;
            color:black
        }
        a{
            color:navy;
            font-size:large
        }
    </style>
    </head>
    <body>
        <p class="text_color"><?php echo $_SESSION['member_id']?><small>님</small></a><span style="font-size:large; color:#FF9991">ㅣ</span>
        <a class="text_color" href="main.php">로그아웃</a>
        <h1 align="center"><strong>게시판</strong></h1>
        <br><br>
        <form name="write_form_member" method="post">
            <table width="940" height="300" style="padding:5px 0 5px 0;" align="center" >
                <tr height="4" bgcolor="#FFC8C3"><td colspan="5"></td></tr>
                <tr>
                    <th><center>No.</center></th>
                    <th><center>제목</center></th>
                    <th><center>작성자</center></th>
                    <th><center>작성일</center></th>
                    <th><center>조회수</center></th>
                </tr>
                <tr height="2" bgcolor="#FFDEDB"><td colspan="5"></td></tr>
                <tr>
                    <td><center>1</center></td>
                    <td><center><a href = 'view_post.html'>예약대출서비스 양식을 준수해주세요! (+ 수령일 및 희망도서 안내)</a></center></td>
                    <td><center>관*자</center></td>
                    <td><center>2020-05-29</center></td>
                    <td><center>3328</center></td>
                </tr>
                <tr height="2" bgcolor="#FFDEDB"><td colspan="5"></td></tr>
                <tr>
                    <td><center>2</center></td>
                    <td><center>예약대출서비스 양식을 준수해주세요! (+ 수령일 및 희망도서 안내)</center></td>
                    <td><center>관*자</center></td>
                    <td><center>2020-05-29</center></td>
                    <td><center>3328</center></td>
                </tr>
                <tr height="2" bgcolor="#FFDEDB"><td colspan="5"></td></tr>
                <tr>
                    <td><center>3</center></td>
                    <td><center>예약대출서비스 양식을 준수해주세요! (+ 수령일 및 희망도서 안내)</center></td>
                    <td><center>관*자</center></td>
                    <td><center>2020-05-29</center></td>
                    <td><center>3328</center></td>
                </tr>
                <tr height="4" bgcolor="#FFC8C3"><td colspan="5"></td></tr>
                <tr>
                    <td colspan="5" align="right">
                        <input type="button" value="글쓰기" onclick="location.href='writing.html'">
                    </td>
                </tr>
           </table>
           <div style="font-size:large">
            <input type="submit" value="이전"><!-- 페이징 S -->
                <span>
                <strong>1</strong>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#">6</a>
                <a href="#">7</a>
                <a href="#">8</a>
                <a href="#">9</a>
                <a href="#">10</a>
                </span><!-- 페이징 E -->
            <input type="submit" value="다음">
        </div>
        </form>
    </body>
</html>

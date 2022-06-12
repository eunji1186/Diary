<?php
session_start();

if (isset($_SESSION["userid"]))
    $userid = $_SESSION["userid"];
else
    $userid = "";

if (isset($_SESSION["username"]))
    $username = $_SESSION["username"];
else
    $username = "";
?>

<div id="top">
    <h3 style="color: #F4B183; font-size: 150%">
        <a href="total.php">너 나들이</a>
    </h3>
    <ul id="top_menu">
        <?php
        if (!$userid) {
        ?>
            <li><a href="login_form.php">로그인</a></li>
            <li> | </li>
            <li><a href="member_form.php">회원가입</a></li>

        <?php
        } else {
            $logged = $username . "(" . $userid . ")님";
        ?>

            <li><?= $logged ?></li>
            <li> | </li>
            <li><a href="member_modify.php">정보수정</a></li>
            <li> | </li>
            <li><a href="logout.php">로그아웃</a></li>

        <?php
        }
        ?>
    </ul>
</div>
<div id="menu_bar">
    <ul>
        <li><a href="main.php">게시판</a></li>
        <li><a href="board_form.php">게시판</a></li>
        <li><a href="board_form.php">게시판</a></li>
        <li><a href="board_form.php">내 게시판</a></li>
    </ul>
</div>

<hr>
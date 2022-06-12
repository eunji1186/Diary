<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>너 나들이</title>
</head>

<body>
    <header>
        <?php include "header.php"; ?>
    </header>
    <section>
        <div id="login_form">
            <form name="login_form" method="post" action="login.php">
                <ul>
                    <li><input type="text" name="id" placeholder="아이디"></li>
                    <li><input type="password" id="pass" name="pass" placeholder="비밀번호"></li>
                </ul>

                <div id="login_btn">
                    <a href="#"><button type="button" name="login" onclick="check_input()">LOGIN</button></a>
                </div>
            </form>
        </div> <!-- login_form -->
    </section>
    <footer>
        <?php include "footer.php"; ?>
    </footer>
</body>

</html>
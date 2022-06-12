<html>

<head>
    <meta charset=utf-8>
    <title>Exchange Diary</title>
</head>

<body>
    <section>
        <h4>
            <p>
                <?php
                $today = date("Y년 m월 d일");
                echo $today;
                ?>
            </p>
        </h4>

        <?php
        echo "달력";
        ?>
    </section>

    <section>
        <h4>
            <p>
                <?php
                echo "오늘의 베스트";
                ?>
            </p>
        </h4>

        <?php
        echo "게시글1<br>";
        echo "게시글2<br>";
        ?>
    </section>
</body>

</html>
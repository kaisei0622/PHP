<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>4eahblog 掲示板 </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php 

  mb_internal_encoding("utf8");
   $pdo = new PDO("mysql:dbname=lesson1;host=localhost;","root","");
   $stmt = $pdo->query("select*from 4each_keijiban");

        
   ?>

    <img src="img/4eachblog_logo.jpg" class="logo">
    <header>
        <div class="nav">
            <ul>
                <li>トップ</li>
                <li>プロフィール</li>
                <li>4eachについて</li>
                <li>登録フォーム</li>
                <li>問い合わせ</li>
                <li>その他</li>
            </ul>
        </div>

    </header>
    <main>
        <div class="main_container">
            <div class="left">
                <h2>プログラミングに役立つ掲示板</h2>
                  <form method="post" action="insert.php">
                      <h3>入力フォーム</h3>
                      <div>
                          <label>ハンドルネーム</label>
                          <br>
                          <input type="text" class="text" size="35" name="handlename">
                        </div>
                        
                        <div>
                            <label>タイトル</label>
                            <br>
                            <input type="text" class="text" size="35" name="title">
                        </div>
                        
                        
                        <div>
                            <label>コメント</label>
                            <br>
                            <textarea cols="35" rows="7" name="comments"></textarea>
                        </div>
                        
                        <div>
                            <input type="submit" class="submit" value="送信する">
                        </div>
                   </form>
                    
                    
                <?php

                    while ($row = $stmt->fetch()) {
                     
                        echo "<div class='kiji'>";
                          echo "<h3>".$row['title']."</h3>";
                          echo "<div class='contents'>";
                               echo $row['comments'];
                               echo "<div class='handlename'>posted by".$row['handlename']."</div>";
                           echo "</div>";
                        echo "</div>";
                    }

                ?>

            </div>

            <div class="right">
                <h3>人気の記事</h3>
                <ul>
                    <li>PHPのオススメ本</li>
                    <li>PHP MyAdminの使い方</li>
                    <li>今人気のエディタ　Top5</li>
                    <li>HTMLの基本</li>
                </ul>

                <h3>オススメリンク</h3>
                <ul>
                    <li>インターノウス株式会社</li>
                    <li>XAMPPのダウンのダウンロード</li>
                    <li>Eclipseのダウンロード</li>
                    <li>Bracketのダウンロード</li>
                </ul>

                <h3>カテゴリ</h3>
                <ul>
                    <li>HTML</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>JavaScript</li>
                </ul>


            </div>


        </div>
    </main>


    <footer>
        copyright ©︎ interous | 4each blog the which provides A to Z about programming.
    </footer>
</body>

</html>
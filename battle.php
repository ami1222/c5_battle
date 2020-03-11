<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>php課題</title>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <div id="wrapper">
        <main id=battle_php>
            <h1 id=result_title>結果は・・・</h1>
            <div id=attack_result1>
                <?php
                    if (isset($_POST['attack'])){
                        $attack = $_POST['attack'];
                        echo $attack. "で攻撃した！";
                        echo '<br>';
                    }
                ?>
            </div>

            <div id=attack_result2>
                <?php
                $result = mt_rand(1,4);
                    if($result === 1){
                        echo "見事攻撃が命中し、モンスターを倒すことができた！";
                        echo '<br>';
                        echo '<img src="img/result1.png" alt="">';
                    }elseif ($result === 2) {
                        echo "攻撃が当たらず、モンスターを倒すことができなかった...";
                        echo '<br>';
                        echo '<img src="img/result2.png" alt="">';
                    }elseif ($result === 3) {
                        echo "しかし、攻撃より先にモンスターが逃げていった！";
                        echo '<br>';
                        echo '<img src="img/result3.png" alt="">';
                    }elseif ($result === 4) {
                        echo "しかし、攻撃は当たらずモンスターが懐いてきた。どうしよう...";
                        echo '<br>';
                        echo '<img src="img/result4.png" alt="">';
                    }
                ?>
            </div>
            
            <p><a id="red" href="index.php">>>CONTINUE</a></p>

        </main>
    </div>

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- js -->
    <script src='js/app.js'></script>
    
  </body>
</html>
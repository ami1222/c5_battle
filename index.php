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
    <main id=index_php>
        <h1 id="title">モンスターを倒そう！</h1>
        <div id="monster">
            <?php
            // phpのコードを記述
            //  monsterランダムで選択
            $cpu = mt_rand(1,5);
            if($cpu === 1){
                echo '<img src="img/monster1.png" alt="">';
            }elseif ($cpu === 2) {
                echo '<img src="img/monster2.png" alt="">';
            }elseif ($cpu === 3) {
                echo '<img src="img/monster3.png" alt="">';
            }elseif ($cpu === 4) {
                echo '<img src="img/monster4.png" alt="">';
            }elseif ($cpu === 5) {
                echo '<img src="img/dog.png" alt="">';
            }
            ?>
        </div>

        <p id="setumei">攻撃を選択してbattleボタンを押してね！</p>
        <div id="select_box">
            <form  method="post" action="battle.php">
                <label>
                    <input type="radio" title="attack" name="attack" value="たいあたり" >たいあたり
                </label>
                <label>
                    <input type="radio" title="attack" name="attack" value="ひっかく">ひっかく
                </label>
                <label>
                    <input type="radio" title="attack" name="attack" value="みずでっぽう">みずでっぽう
                </label>
                 <label>
                    <input type="radio" title="attack" name="attack" value="ひのこ">ひのこ
                </label>
                <br>
                <button type="submit" class="battle_button">battle</button>
            </form>
        </div>
    </main>
</div>

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- js -->
    <script src='js/app.js'></script>
    
  </body>
</html>

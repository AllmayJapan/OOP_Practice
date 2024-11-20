<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPPを練習しよう</title>
</head>
<body>
    <header>
        <h1 class="siteTitle">オブジェクト指向構文を練習しよう</h1>
        <p>Person Classを実装して挙動を確認しましょう</p>
    </header>
    <main>
        <h2>Personクラスをバックエンドで用意しています<br />引数を渡してデータを登録しましょう</h2>
        <div class="Dataprepare">
            <form action="PersonClassPrac.php" method="POST">
                <label for="lastName">:苗字</label>
                <input type="text" id="lastName" name="lastName">
                <label for="firstName">:名前</label>
                <input type="text" id="firstName" name="firstName">
                <button type="submit">送信</button>
            </form>
        </div>
        <?php
        class Person {
            public function __construct(
                public string $firstName,
                public string $lastName
            ){}
            public function showPropaty(){
                return [$this -> firstName, $this -> lastName];
            }
        }
        if($_POST){
            $lastName = $_POST['lastName'];
            $firstName = $_POST['firstName'];
            $person = new Person($firstName, $lastName);
            $personProp[] = $person -> showPropaty();
            ?>
            <div class="DataInfo">
                <?php
                    if($person){
                        ?>
                        <h3>クラスに登録されました</h3>
                        <p>登録名</p>
                        <p><?= $personProp[0][1]." ".$personProp[0][0];?></p>
                    <?php }
        }else {
            print "データを登録してください";
        }
        ?>
        </div>
    </main>    
</body>
</html>
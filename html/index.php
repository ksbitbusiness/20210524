<?php
    // 計算結果の格納用変数
    $kekka = 0;
    // 各送信データを変数に代入
    $left = $_POST[ "left" ];
    $center = $_POST[ "center" ];
    $right = $_POST[ "right" ];

    // if：加算
    if( $center == "kasan" ) {
        $kekka = $left + $right;
    }
    // if：減算
    if( $center == "gensan" ) {
        $kekka = $left - $right;
    }
    // if：乗算
    if( $center == "jouzan" ) {
        $kekka = $left * $right;
    }
    // if：除算
    if( $center == "josan" ) {
        $kekka = $left / $right;
    }
    // if：剰余算
    if( $center == "joyozan" ) {
        $kekka = $left % $right;
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>sample php</title>
  </head>
  <body>
    <h1>sample php</h1>
    <form action="index.php" method="post" class="row row-cols-lg-auto g-3 align-items-center">
        <div class="col">
            <div class="input-group">
                <input type="text" name="left" value="<?php echo $left; ?>" class="form-control text-end" id="inlineFormInputGroupUsername">
            </div>
        </div>

        <div class="col">
            <select name="center" class="form-select" id="inlineFormSelectPref">
                <option value="kasan" <?php if( $center == "kasan" ) echo "selected"; ?>>加算（＋）</option>
                <option value="gensan" <?php if( $center == "gensan" ) echo "selected"; ?>>減算（ー）</option>
                <option value="jouzan" <?php if( $center == "jouzan" ) echo "selected"; ?>>乗算（Ｘ）</option>
                <option value="josan" <?php if( $center == "josan" ) echo "selected"; ?>>除算（÷）</option>
                <option value="joyozan" <?php if( $center == "joyozan" ) echo "selected"; ?>>剰余算（％）</option>
            </select>
        </div>

        <div class="col">
            <div class="input-group">
                <input type="text" name="right" value="<?php echo $right; ?>" class="form-control text-end" id="inlineFormInputGroupUsername">
            </div>
        </div>

        <div class="col">
            <button type="submit" class="btn btn-primary">＝</button>
        </div>

        <div class="col">
            <p class="fs-2 mb-0  text-start"><?php echo $kekka; ?></p>
        </div>
    </form>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>
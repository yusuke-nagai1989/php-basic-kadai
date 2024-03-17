<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ソート関数を作成する
        function sort_2way($array,$order){
          if($order == 1){
            // 引数$orderがTRUE(1)のとき
            // 昇順にソートします（メッセージを表示する）
            echo '昇順にソートします'.'<br>';

            // ソート対象の配列を昇順にする
            sort($array);
            foreach($array as $array_num){
                echo $array_num.'<br>';}

          } else {
            // 引数$orderがFALSE(1以外)のとき
            // 降順にソートします（メッセージを表示する）
            echo '降順にソートします'.'<br>';

            // ソート対象の配列を降順にする
            rsort($array);
            foreach($array as $array_num){
                echo $array_num.'<br>';}
          }
        }

        $nums = [15,4,18,23,10];

        sort_2way($nums,1);
        sort_2way($nums,0);

        ?>
    </p>
</body>

</html>

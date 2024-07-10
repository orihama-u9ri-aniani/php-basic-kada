<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        function sort_twowhy($nums,$order){
          if ($order){
            echo "昇順にソートします。<br>";

            sort($nums);
            
          }else{
            echo "降順にソートします。<br>";

            rsort($nums);
          }
          foreach ($nums as $nums) {
            echo "{$nums}<br>";
}
        } 
        // ここにコードを書いていく
        $nums = [15, 4, 18, 23, 10 ];

        sort_twowhy($nums,TRUE);

        sort_twowhy($nums,FALSE);
        ?>
    </p>
</body>

</html>
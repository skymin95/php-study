<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP 배열, 다차원 배열에 대해서 배웁니다</title>
</head>
<body>
  <h2>PHP 배열, 다차원 배열에 대해서 배웁니다</h2>

  <?php
    $age = [
      "아빠" => "65",
      "엄마" => "60",
      "큰누나" => "38",
      "작은누나" => "35",
    ];
  
    //echo $age - 출력안됨 배열이라 
    print_r($age);
    //var_dump($age);

    //key  val 값
    foreach($age AS $key => $val){
      echo "<h2> $key 는 $val 살입니다</h2>";

    }
  ?>













</body>
</html>
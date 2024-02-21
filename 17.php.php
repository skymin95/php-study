<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP 배열, 인덱스 배열에 대해서 배웁니다</title>
</head>
<body>
  <h2>PHP 배열, 인덱스 배열에 대해서 배웁니다</h2>
  <p>인덱스 배열, 연관배열, 다차원 배열</p>
  <p>2:25초 다시보기</p>
  <?php

  $car = ["소형", "중형", "대형"];

  foreach ($car AS $carSize){
    //echo "$carSize <br><br>";

    // 인덱스 배열형태
    echo $carSize . "";
  }


  //echo "$car[0]";
  
  ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> PHP 배열, 정렬내장함수</title>
</head>
<body>
  <h2> PHP 배열, 정렬내장함수</h2>
  <p>sort() - 배열을 오름차순으로 정렬</p>
  <p>rsort() - 배열을 내림차순으로 정렬</p>
  <p>asort() - 값에 따라 연관 배열을 오름차순으로 정렬</p>
  <p>ksort() - 키에 따라 연관 배열을 오름차순으로 정렬</p>
  <p>arsort() - 값에 따라 연관 배열을 내림차순으로 정렬</p>
  <p>krsort() - 키에 따라 연관 배열을 내림차순으로 정렬</p>


  <?php
    $fruits = ["사과","배","귤","수박","토마토"];

    //echo sort($fruits);

    //Array ( [0] => 사과 [1] => 배 [2] => 귤 [3] => 수박 [4] => 토마토 )
    //print_r($fruits);

 /* Array ( [0] => 토마토 [1] => 수박 [2] => 사과 [3] => 배 [4] => 귤 )
  rsort($fruits);
  print_r($fruits);
  */

  
  ?>
</body>
</html>
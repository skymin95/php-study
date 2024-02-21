<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP for 문, foreach문, 반복문</title>
</head>
<body>
  <h2>PHP for 문, foreach문, 반복문</h2>
  <p>for문- for(시작값; 조건; 증감식){}</p>
  <p>foreach문- 배열과같이 사용 </p>


  <?php
    //for문- for(시작값; 조건; 증감식){}

    // for ($i = 1; $i < 10; $i++){
      
    //   echo "<p>$i 출력</p>";
    // }

    // $arr = array("사과","바나나","딸기","오렌지");
    $arr = ["사과","바나나","딸기","오렌지"];

    foreach($arr AS $fruit){
      echo "<p>$fruit</p>";
    }




  ?>

</body>
</html>
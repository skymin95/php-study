<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>변수의 범위,지역변수,글로벌 변수</title>
</head>
<body>
  <h2>변수의 범위,지역변수,글로벌 변수</h2>
  <p>
    xampp<br>
    웹서버, DB서버, php<br>
    Apache, Mariadb, php 컴파일러
  </p>

  <?php 
    $txt = "php";
    echo "I love $txt ! <br><br>";

    $x = 951002;

    function myTest (){
      echo "global - 선언한 이유는 전역에서 설정한 변수는 지역 안으로 못들어와서 global을 선언해 전역변수 사용 하게 함 <br><br>";
      global $x; 
      echo "변수 x의 출력값 $x";    
      echo "<br>";
    }

    myTest();


    echo $x;
  ?>
</body>
</html>
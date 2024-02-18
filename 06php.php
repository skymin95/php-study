<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP 출력함수, 문자열길이, 문자열 뒤집기, 문자열 찾기</title>
</head>
<body>
  <h2>PHP 출력함수, 문자열길이, 문자열 뒤집기, 문자열 찾기</h2>
  <p>
  echo 안에 "html 코드써서 사용가능" <br>
  echo "p echo = print p";<br><br>


  echo , pring 사용법<br>
  echo "1";<br>
  print "2";<br>

  echo ("3");<br>
  print("4");<br>

  </p>

  <?php
  echo "<p> echo = print </p>";
  echo "1";
  print "2";

  echo ("3");
  print("4<br><br>") ;

  // 문자열 연산자    ..을사용
  echo "문자열 연산자    ..을사용";

  $txt = "Learn PHP";

  echo "<h2> $txt </h2>";
  echo "<h2>" .$txt."</h2>";
  echo "asd $txt qwe <br><br><br>";

  echo "<p>php 정수확인 문자열까지 다 확인 가능 - var_dump()</p>";
  
  $dump = "123";

  var_dump($dump) ;

  echo "<p>문자열 길이 확인 변수명 = strlen(한글); </p> <br>";


  ?> 
</body>
</html>
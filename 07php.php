<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>숫자 문자를 구분하는 is_numeric 함수, is_int 함수와 어떤 차이?</title>
</head>
<body>
  <h2>숫자 문자를 구분하는 is_numeric 함수, is_int 함수와 어떤 차이?</h2>

  <?php
    echo "문자열 바꾸기<br><br>";

    $str = "나는 자랑스러운 미국인이다.";

    echo $str;

    $str1 = str_replace("미국인", "한국인", $str);

    echo "<p> str_replace(바꿀글씨, 바뀐글씨, 대상문자(변수) );</p>";
    echo $str1;


  










  ?>
</body>
</html>
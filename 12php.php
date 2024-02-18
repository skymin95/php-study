<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP if문, switch case문 조건문</title>
</head>
<body>
  <h2>PHP if문, switch case문 조건문</h2>
  
  <p>if문/if else문<br>
  $a = 85;<br>

    if($a >= 90){<br>
      echo "당신은 A입니다";<br>
    } else if($a >= 80) {<br>
      echo "당신은 B입니다";<br>
    } else {<br>
      echo "당신은 C입니다";<br>
    }<br><br>

    <?php 
      $a = 85;

      if($a >= 90){
        echo "당신은 A입니다";
      } else if($a >= 80) {
        echo "당신은 B입니다";
      } else {
        echo "당신은 C입니다";
      }

    ?>

  </p>
  <p>
    switch case문<br><br>
    $a = 1;<br><br>

      switch($a){<br><br>

        case 1 :<br>
          echo "가위입니다";<br>
          break;<br>
        case 2 :<br>
          echo "바위입니다";<br>
          break;<br>
        case 3 :<br>
          echo "보입니다";<br>
          break;<br>
        default:<br>
          echo "범위를 벗어났습니다.";  <br>
      }

    <?php
      $a = 1;

      switch($a){

        case 1 :
          echo "가위입니다";
          break;
        case 2 :
          echo "바위입니다";
          break;
        case 3 :
          echo "보입니다";
          break;
        default:
          echo "범위를 벗어났습니다.";  
      }
    
    ?>
    
  </p>
</body>
</html>
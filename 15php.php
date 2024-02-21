<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> PHP break문 continue문은 반복문에서 사용해요</title>
</head>
<body>
  <h2> PHP break문 continue문은 반복문에서 사용해요</h2>
  <p>반복문의 중단과 계속</p>
  <p>break, continue</p>

  <?php
    // for($i =1; $i < 10; $i++){
    //   if($i == 4){
    //     break;
    //   }
    // }
  
    // echo "이번 숫자는 $i 입니다.";

    for($i =0; $i < 10; $i++){
        if($i == 4){
          continue;
        }
      }

      echo "이번 숫자는 $i 입니다.";
  ?>



</body>
</html>
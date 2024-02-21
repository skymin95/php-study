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
  // 2차원배열( 다차원 배열)

  $cars = array(
    array("볼보",22,10),
    array("산타페",25,4),
    array("아우디",12,11),
  );
  //print_r($cars);
  
  //산타페의 재고는25
  echo $cars[1][0]."의 재고는", $cars[1][1];

  for($row = 0; $row < 3; $row++){
    echo "<ul>";
    for($col = 0; $col < 3; $col++){
      echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
  }


  ?>

</body>
</html>
<html>
 <head>
  <title>php example post</title>
  <meta charset="utf-8"/>
 </head>
 <body>
  <?php
  $a11 = $_POST['a11'];
  $a12 = $_POST['a12']; 
  $a13 = $_POST['a13']; 
  $a21 = $_POST['a21'];
  $a22 = $_POST['a22']; 
  $a23 = $_POST['a23']; 
  $a31 = $_POST['a31'];
  $a32 = $_POST['a32']; 
  $a33 = $_POST['a33']; 
  $opred  = $a11*$a22*$a33-$a11*$a23*$a32-$a12*$a21*$a33;
  $opred += $a12*$a23*$a31+$a13*$a21*$a32-$a13*$a22*$a31;
  echo "Определитель матрицы: ".$opred;
 ?>
</body>
</html>
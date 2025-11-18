<?php 
if(isset($_POST["submit"])){
  $name=$_POST['name'];
  $basic=$_POST['basic'];
  $designent=$_POST['designent'];
  $ca = 0;
  $extra = 0;
  switch($designent){
case 'manager': 
    $ca = 1000;
    $extra = 500;
    break;
    case 'supervisor': 
    $ca = 750;
    $extra = 200;
    break;case 'clerk': 
    $ca = 500;
    $extra = 100;
    break;case 'peon': 
    $ca = 250;
    $extra = 0;
    break;

  }
}
$hra = 25; 
$gros = $basic+($basic * 0.25) +$ca  + $extra;
$tax = 0;
if ($gros < 2500){
$tax = 0;
} else if($gros < 4000){
$tax = $gros*0.03;
}else if($gros < 5000){
$tax = $gros*0.05;
}else{
    $tax = $gros * 0.08;
}

$net = $gros - $tax;

echo "gross salary :$gros<br><br>";
echo "tax = $tax<br><br>";
echo "net salary : $net<br><br>";

?>   
<?php  

//5-

/*$x = 50 ;
$y = 50 ;
    if($x == 50 || $y == 50 || $x + $y == 50){
echo "true";
    }else{
echo "fuls";    }

//6-

$num1 =5;
$num2 =6;
if(($num1 < 0 && $num2 > 0) || $num1 > 0 && $num2 < 0){
      echo("the number is positive") ;
    }else{
    	 echo("the number is negative") ;
    	}
        

  //7-
    	$num = 5;
if( $num % 5 ==0){
        echo ("this number is multiple of 5");
    }
   else if($num % 8 ==0){
       echo(" this number is multiple of 8"); 
    }
    else{
        echo("this number not multiple of 5 or multiple of 8 ");
    }*/

    function add($firstNumber,$secondNumber) {
	$result = $firstNumber + $secondNumber;
    return $result;
}
function subtract($firstNumber,$secondNumber) {
	$result = $firstNumber - $secondNumber;
    return $result;
}
function multiply($firstNumber,$secondNumber) {
	$result = $firstNumber * $secondNumber;
    return $result;
}
function divide($firstNumber,$secondNumber) {
	$result = $firstNumber / $secondNumber;
    return $result;
}
echo (add(5,6)."<br>");
echo (subtract(5,6)."<br>");
echo (multiply(5,6)."<br>");
echo (divide(5,6)."<br>");


?>
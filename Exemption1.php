<?php
//Sense posar exepcions
function discountCalculation($discount,$percentage,$price){
  //calculate the final amount after applying the discount and return it
  //considering $discount as a %
 if ($percentage!=0) {
  $discountCalculation=($price * $discount)/$percentage;

  return $price - $discountCalculation;
}
return "APRENDE A CONTAR, PALETO <br>";
}

echo discountCalculation(10,0,50);




//Utilitzant exepcions amb TRY y CATCH
function discountCalculation1($discount,$percentage,$price)
{
    if ($percentage == 0)
        throw new Exception('Divisió per zero.');


    else
        return (($price * $discount)/$percentage);
}

try {
    $discount = 50;
    $percentage  = 0;
    $price = 13;
    echo discountCalculation1($discount,$percentage,$price);
}
catch (Exception $e) {
    echo "S'ha capturat l'excepció: " . $e->getMessage() . "<br>";
}
?>

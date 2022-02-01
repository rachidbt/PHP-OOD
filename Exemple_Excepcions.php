<?php
function filtreDividir($dividend, $divisor)
{
    if ($divisor == 0)
        throw new Exception('Divisió per zero.');

    else
        return ($dividend / $divisor);
}

try {
    $dividend = 50;
    $divisor  = 0;
    echo filtreDividir($dividend, $divisor);
}
catch (Exception $e) {
    echo "S'ha capturat l'excepció: " . $e->getMessage() . "<br>";
}
?>

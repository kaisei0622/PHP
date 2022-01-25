<?php

//税金の計算関数
function calcTax($value, $tax_rate) {
    return floor($value * $tax_rate);
}
//呼び出し例
$price = 3000;
$tax_rate = 0.08;
echo calcTax($price, $tax_rate);
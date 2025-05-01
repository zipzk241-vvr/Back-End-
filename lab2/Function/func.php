<?php
function my_sin($x)
{
    return sin($x);
}

function my_cos($x)
{
    return cos($x);
}

function my_tg($x)
{
    $cos = cos($x);
    return ($cos != 0) ? sin($x) / $cos : '∞';
}

function my_xy($x, $y)
{
    return pow($x, $y);
}

function my_fact($x)
{
    if ($x == 0 || $x == 1)
        return 1;
    $res = 1;
    for ($i = 2; $i <= $x; $i++) {
        $res *= $i;
    }
    return $res;
}
?>
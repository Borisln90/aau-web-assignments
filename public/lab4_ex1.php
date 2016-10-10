<?php
/**
 * Created by PhpStorm.
 * User: boris
 * Date: 29-09-2016
 * Time: 16:51
 */
$a = 2; $b = 4; $c = 6;

print_r("a: ");
if ($a == 4 OR $b > 2) {
    print_r("TRUE");
} else {
    print_r("FALSE");
}
print_r("<br> b: ");
if (6 <= $c AND $a > 3) {
    print_r("TRUE");
} else {
    print_r("FALSE");
}

print_r("<br> c: ");
if (!($a > 2)) {
    print_r("TRUE");
} else {
    print_r("FALSE");
}

print_r("<br> d: ");
if (1 != $b AND $c != 3) {
    print_r("TRUE");
} else {
    print_r("FALSE");
}

print_r("<br> e: ");
if ($a >= -1 OR $a <= $b) {
    print_r("TRUE");
} else {
    print_r("FALSE");
}

print_r("<br> f: ");
if ($a != 2 XOR $b != 4) {
    print_r("TRUE");
} else {
    print_r("FALSE");
}

print_r("<br> g: ");
if (!($c == 6 AND $a >= $b)) {
    print_r("TRUE");
} else {
    print_r("FALSE");
}

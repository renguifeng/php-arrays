
<?php
require_once(�lion.php�);

$fred = new Lion;

print $fred->get_weight(); // 0

print $fred->get_color(); // no color

$fred->set_color(�Yellow�);

$fred->get_color(); // Yellow

$fred->set_weight(50);

$fred->get_weight(); // 50

?>




















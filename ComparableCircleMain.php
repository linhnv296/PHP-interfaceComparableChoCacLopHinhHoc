<?php
include "ComparableCircle.php";

//$circleOne = new ComparableCircle('circleOne', 9);
//$circleTwo = new ComparableCircle('circleTwo', 7);
$circleOne = new ComparableCircle('circleOne', 9);
$circleTwo = new ComparableCircle('circleTwo', 23);

echo ($circleOne->compareTo($circleTwo));

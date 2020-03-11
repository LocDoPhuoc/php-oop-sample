<?php

include('./Student.php');

$student = new Student('Loc', 1.65);

echo $student->getWeight();
<?php

    class Point {
        public $x;
        public $y;

        public function calculateDistance(Point $other) {
            // pow is used to calculate power of a number.
            // sqrt id used to calculate square root of a number.
            return sqrt(pow($this->x - $other->x, 2) + pow($this->y - $other->y, 2));
        }
    }

    // Example Usage:
    $point1 = new Point();
    $point1->x = 8;
    $point1->y = 9;

    $point2 = new Point();
    $point2->x = 2;
    $point2->y = 6;

    echo $point1->calculateDistance($point2);




?>
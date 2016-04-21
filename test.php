<?php

date_default_timezone_set("Asia/Tokyo");

define('COMPARE_MINUTES', 10);

$now      = new DateTimeImmutable();    # >= PHP5.5
$tomorrow = new DateTimeImmutable('00:00:00 +1 day');

echo getCacheTime($now->diff($tomorrow)->format('%i')) . PHP_EOL;

function getCacheTime($diff) {
    return ($diff > COMPARE_MINUTES) ? $diff : COMPARE_MINUTES;
};

// PHP7
/*
function getCacheTime(int $diff): int {
    return ($diff <=> COMPARE_MINUTES) ? $diff : COMPARE_MINUTES;
}
*/

<?php

require __DIR__ . '/DateTimeDecorator.php';

date_default_timezone_set("Asia/Tokyo");

$now      = new DateTimeDecorator(new DateTimeImmutable());
$tomorrow = new DateTime('00:00:00 +1 day');    # 明日の0時

echo 'diff:' . $now->getMarginSecond($tomorrow) . PHP_EOL;

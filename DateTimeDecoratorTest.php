<?php

require_once __DIR__ . '/DateTimeDecorator.php';

/**
 * DateTimeDecoratorTest
 *
 * @author kazuhsat
 */
class DateTimeDecoratorTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers DateTimeDecorator::getMarginSecond
     * @test
     */
    public function 比較する日付との秒差を取得する()
    {
        $a = new DateTimeDecorator(new DateTimeImmutable('2016-04-01 12:00:00'));
        $b = new DateTime('2016-04-02 00:00:00');

        $actual   = $a->getMarginSecond($b);
        $expected = 43200;  # 12時間

        $this->assertEquals($expected, $actual);
    }
}

<?php

/**
 * DateTimeDecorator
 *
 * @author kazuhsat
 */
class DateTimeDecorator extends DateTime
{
    /**
     * DateTimeInterface
     *
     * @var DateTimeInterface
     */
    private $_dateTime;

    /**
     * コンストラクタ
     *
     * @param DateTimeInterface $dateTimeInterface
     */
    public function __construct(DateTimeInterface $dateTime)
    {
        $this->_dateTime = $dateTime;
    }

    /**
     * 比較する日付との秒差を取得する
     *
     * @param DateTime $dateTime
     * @return integer
     */
    public function getMarginSecond(DateTime $dateTime): int
    {
        return $dateTime->getTimestamp() - $this->_dateTime->getTimestamp();
    }
}

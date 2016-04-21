<?php

/**
 * DateTimeDecorator
 *
 * @author kazuhsat
 */
class DateTimeDecorator extends DateTime
{
    /**
     * 比較する日付との秒差を取得する
     *
     * @param DateTimeInterface $dateTime
     * @return integer
     */
    public function getMarginSecond(DateTimeInterface $dateTime): int
    {
        return $dateTime->getTimestamp() - $this->getTimestamp();
    }
}

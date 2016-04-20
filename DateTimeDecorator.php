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
     * @param DateTime $dateTime DateTimeオブジェクト
     * @return integer
     */
    public function getMarginSecond(DateTime $dateTime)
    {
        return $dateTime->getTimestamp() - $this->getTimestamp();
    }
}

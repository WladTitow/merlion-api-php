<?php

namespace Merlion\Type;

class OrderLinesResult
{

    /**
     * @var string
     */
    private $item_no;

    /**
     * @var string
     */
    private $document_no;

    /**
     * @var int
     */
    private $qty;

    /**
     * @var int
     */
    private $desire_qty;

    /**
     * @var int
     */
    private $shipped_qty;

    /**
     * @var float
     */
    private $price;

    /**
     * @var float
     */
    private $amount;

    /**
     * @var float
     */
    private $desire_price;

    /**
     * @var float
     */
    private $weight;

    /**
     * @var float
     */
    private $volume;

    /**
     * @var float
     */
    private $ReserveTime;

    /**
     * @return string
     */
    public function getItem_no()
    {
        return $this->item_no;
    }

    /**
     * @param string $item_no
     * @return OrderLinesResult
     */
    public function withItem_no($item_no)
    {
        $new = clone $this;
        $new->item_no = $item_no;

        return $new;
    }

    /**
     * @return string
     */
    public function getDocument_no()
    {
        return $this->document_no;
    }

    /**
     * @param string $document_no
     * @return OrderLinesResult
     */
    public function withDocument_no($document_no)
    {
        $new = clone $this;
        $new->document_no = $document_no;

        return $new;
    }

    /**
     * @return int
     */
    public function getQty()
    {
        return $this->qty;
    }

    /**
     * @param int $qty
     * @return OrderLinesResult
     */
    public function withQty($qty)
    {
        $new = clone $this;
        $new->qty = $qty;

        return $new;
    }

    /**
     * @return int
     */
    public function getDesire_qty()
    {
        return $this->desire_qty;
    }

    /**
     * @param int $desire_qty
     * @return OrderLinesResult
     */
    public function withDesire_qty($desire_qty)
    {
        $new = clone $this;
        $new->desire_qty = $desire_qty;

        return $new;
    }

    /**
     * @return int
     */
    public function getShipped_qty()
    {
        return $this->shipped_qty;
    }

    /**
     * @param int $shipped_qty
     * @return OrderLinesResult
     */
    public function withShipped_qty($shipped_qty)
    {
        $new = clone $this;
        $new->shipped_qty = $shipped_qty;

        return $new;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return OrderLinesResult
     */
    public function withPrice($price)
    {
        $new = clone $this;
        $new->price = $price;

        return $new;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     * @return OrderLinesResult
     */
    public function withAmount($amount)
    {
        $new = clone $this;
        $new->amount = $amount;

        return $new;
    }

    /**
     * @return float
     */
    public function getDesire_price()
    {
        return $this->desire_price;
    }

    /**
     * @param float $desire_price
     * @return OrderLinesResult
     */
    public function withDesire_price($desire_price)
    {
        $new = clone $this;
        $new->desire_price = $desire_price;

        return $new;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     * @return OrderLinesResult
     */
    public function withWeight($weight)
    {
        $new = clone $this;
        $new->weight = $weight;

        return $new;
    }

    /**
     * @return float
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * @param float $volume
     * @return OrderLinesResult
     */
    public function withVolume($volume)
    {
        $new = clone $this;
        $new->volume = $volume;

        return $new;
    }

    /**
     * @return float
     */
    public function getReserveTime()
    {
        return $this->ReserveTime;
    }

    /**
     * @param float $ReserveTime
     * @return OrderLinesResult
     */
    public function withReserveTime($ReserveTime)
    {
        $new = clone $this;
        $new->ReserveTime = $ReserveTime;

        return $new;
    }


}


<?php

namespace Merlion\Type;

class SetAddOrderLineCommand
{

    /**
     * @var string
     */
    private $document_no;

    /**
     * @var string
     */
    private $item_no;

    /**
     * @var int
     */
    private $qty;

    /**
     * @var float
     */
    private $price;

    /**
     * @return string
     */
    public function getDocument_no()
    {
        return $this->document_no;
    }

    /**
     * @param string $document_no
     * @return SetAddOrderLineCommand
     */
    public function withDocument_no($document_no)
    {
        $new = clone $this;
        $new->document_no = $document_no;

        return $new;
    }

    /**
     * @return string
     */
    public function getItem_no()
    {
        return $this->item_no;
    }

    /**
     * @param string $item_no
     * @return SetAddOrderLineCommand
     */
    public function withItem_no($item_no)
    {
        $new = clone $this;
        $new->item_no = $item_no;

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
     * @return SetAddOrderLineCommand
     */
    public function withQty($qty)
    {
        $new = clone $this;
        $new->qty = $qty;

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
     * @return SetAddOrderLineCommand
     */
    public function withPrice($price)
    {
        $new = clone $this;
        $new->price = $price;

        return $new;
    }


}


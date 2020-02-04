<?php

namespace Merlion\Type;

class SetMoveOrderLineCommand
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
     * @var int
     */
    private $operation_no;

    /**
     * @return string
     */
    public function getDocument_no()
    {
        return $this->document_no;
    }

    /**
     * @param string $document_no
     * @return SetMoveOrderLineCommand
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
     * @return SetMoveOrderLineCommand
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
     * @return SetMoveOrderLineCommand
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
    public function getOperation_no()
    {
        return $this->operation_no;
    }

    /**
     * @param int $operation_no
     * @return SetMoveOrderLineCommand
     */
    public function withOperation_no($operation_no)
    {
        $new = clone $this;
        $new->operation_no = $operation_no;

        return $new;
    }


}


<?php

namespace Merlion\Type;

class OrderLinesGTDResult
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
     * @var string
     */
    private $bundle_item_no;

    /**
     * @var string
     */
    private $gtd_no;

    /**
     * @var int
     */
    private $used_qty;

    /**
     * @var string
     */
    private $country;

    /**
     * @return string
     */
    public function getDocument_no()
    {
        return $this->document_no;
    }

    /**
     * @param string $document_no
     * @return OrderLinesGTDResult
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
     * @return OrderLinesGTDResult
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
    public function getBundle_item_no()
    {
        return $this->bundle_item_no;
    }

    /**
     * @param string $bundle_item_no
     * @return OrderLinesGTDResult
     */
    public function withBundle_item_no($bundle_item_no)
    {
        $new = clone $this;
        $new->bundle_item_no = $bundle_item_no;

        return $new;
    }

    /**
     * @return string
     */
    public function getGtd_no()
    {
        return $this->gtd_no;
    }

    /**
     * @param string $gtd_no
     * @return OrderLinesGTDResult
     */
    public function withGtd_no($gtd_no)
    {
        $new = clone $this;
        $new->gtd_no = $gtd_no;

        return $new;
    }

    /**
     * @return int
     */
    public function getUsed_qty()
    {
        return $this->used_qty;
    }

    /**
     * @param int $used_qty
     * @return OrderLinesGTDResult
     */
    public function withUsed_qty($used_qty)
    {
        $new = clone $this;
        $new->used_qty = $used_qty;

        return $new;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return OrderLinesGTDResult
     */
    public function withCountry($country)
    {
        $new = clone $this;
        $new->country = $country;

        return $new;
    }


}


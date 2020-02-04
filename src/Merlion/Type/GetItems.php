<?php

namespace Merlion\Type;

class GetItems
{

    /**
     * @var string
     */
    private $cat_id;

    /**
     * @var \Merlion\Type\ArrayOfString
     */
    private $item_id;

    /**
     * @var string
     */
    private $shipment_method;

    /**
     * @var int
     */
    private $page;

    /**
     * @var int
     */
    private $rows_on_page;

    /**
     * @var string
     */
    private $last_time_change;

    /**
     * @return string
     */
    public function getCat_id()
    {
        return $this->cat_id;
    }

    /**
     * @param string $cat_id
     * @return GetItems
     */
    public function withCat_id($cat_id)
    {
        $new = clone $this;
        $new->cat_id = $cat_id;

        return $new;
    }

    /**
     * @return \Merlion\Type\ArrayOfString
     */
    public function getItem_id()
    {
        return $this->item_id;
    }

    /**
     * @param \Merlion\Type\ArrayOfString $item_id
     * @return GetItems
     */
    public function withItem_id($item_id)
    {
        $new = clone $this;
        $new->item_id = $item_id;

        return $new;
    }

    /**
     * @return string
     */
    public function getShipment_method()
    {
        return $this->shipment_method;
    }

    /**
     * @param string $shipment_method
     * @return GetItems
     */
    public function withShipment_method($shipment_method)
    {
        $new = clone $this;
        $new->shipment_method = $shipment_method;

        return $new;
    }

    /**
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param int $page
     * @return GetItems
     */
    public function withPage($page)
    {
        $new = clone $this;
        $new->page = $page;

        return $new;
    }

    /**
     * @return int
     */
    public function getRows_on_page()
    {
        return $this->rows_on_page;
    }

    /**
     * @param int $rows_on_page
     * @return GetItems
     */
    public function withRows_on_page($rows_on_page)
    {
        $new = clone $this;
        $new->rows_on_page = $rows_on_page;

        return $new;
    }

    /**
     * @return string
     */
    public function getLast_time_change()
    {
        return $this->last_time_change;
    }

    /**
     * @param string $last_time_change
     * @return GetItems
     */
    public function withLast_time_change($last_time_change)
    {
        $new = clone $this;
        $new->last_time_change = $last_time_change;

        return $new;
    }


}


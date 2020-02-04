<?php

namespace Merlion\Type;

class GetItemsAvail
{

    /**
     * @var string
     */
    private $cat_id;

    /**
     * @var string
     */
    private $shipment_method;

    /**
     * @var string
     */
    private $shipment_date;

    /**
     * @var string
     */
    private $only_avail;

    /**
     * @var \Merlion\Type\ArrayOfString
     */
    private $item_id;

    /**
     * @return string
     */
    public function getCat_id()
    {
        return $this->cat_id;
    }

    /**
     * @param string $cat_id
     * @return GetItemsAvail
     */
    public function withCat_id($cat_id)
    {
        $new = clone $this;
        $new->cat_id = $cat_id;

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
     * @return GetItemsAvail
     */
    public function withShipment_method($shipment_method)
    {
        $new = clone $this;
        $new->shipment_method = $shipment_method;

        return $new;
    }

    /**
     * @return string
     */
    public function getShipment_date()
    {
        return $this->shipment_date;
    }

    /**
     * @param string $shipment_date
     * @return GetItemsAvail
     */
    public function withShipment_date($shipment_date)
    {
        $new = clone $this;
        $new->shipment_date = $shipment_date;

        return $new;
    }

    /**
     * @return string
     */
    public function getOnly_avail()
    {
        return $this->only_avail;
    }

    /**
     * @param string $only_avail
     * @return GetItemsAvail
     */
    public function withOnly_avail($only_avail)
    {
        $new = clone $this;
        $new->only_avail = $only_avail;

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
     * @return GetItemsAvail
     */
    public function withItem_id($item_id)
    {
        $new = clone $this;
        $new->item_id = $item_id;

        return $new;
    }


}


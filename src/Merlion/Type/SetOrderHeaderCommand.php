<?php

namespace Merlion\Type;

class SetOrderHeaderCommand
{

    /**
     * @var string
     */
    private $document_no;

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
    private $counter_agent;

    /**
     * @var string
     */
    private $shipment_agent;

    /**
     * @var string
     */
    private $end_customer;

    /**
     * @var string
     */
    private $comment;

    /**
     * @var string
     */
    private $representative;

    /**
     * @var int
     */
    private $endpoint_delivery_id;

    /**
     * @var string
     */
    private $packing_type;

    /**
     * @return string
     */
    public function getDocument_no()
    {
        return $this->document_no;
    }

    /**
     * @param string $document_no
     * @return SetOrderHeaderCommand
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
    public function getShipment_method()
    {
        return $this->shipment_method;
    }

    /**
     * @param string $shipment_method
     * @return SetOrderHeaderCommand
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
     * @return SetOrderHeaderCommand
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
    public function getCounter_agent()
    {
        return $this->counter_agent;
    }

    /**
     * @param string $counter_agent
     * @return SetOrderHeaderCommand
     */
    public function withCounter_agent($counter_agent)
    {
        $new = clone $this;
        $new->counter_agent = $counter_agent;

        return $new;
    }

    /**
     * @return string
     */
    public function getShipment_agent()
    {
        return $this->shipment_agent;
    }

    /**
     * @param string $shipment_agent
     * @return SetOrderHeaderCommand
     */
    public function withShipment_agent($shipment_agent)
    {
        $new = clone $this;
        $new->shipment_agent = $shipment_agent;

        return $new;
    }

    /**
     * @return string
     */
    public function getEnd_customer()
    {
        return $this->end_customer;
    }

    /**
     * @param string $end_customer
     * @return SetOrderHeaderCommand
     */
    public function withEnd_customer($end_customer)
    {
        $new = clone $this;
        $new->end_customer = $end_customer;

        return $new;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     * @return SetOrderHeaderCommand
     */
    public function withComment($comment)
    {
        $new = clone $this;
        $new->comment = $comment;

        return $new;
    }

    /**
     * @return string
     */
    public function getRepresentative()
    {
        return $this->representative;
    }

    /**
     * @param string $representative
     * @return SetOrderHeaderCommand
     */
    public function withRepresentative($representative)
    {
        $new = clone $this;
        $new->representative = $representative;

        return $new;
    }

    /**
     * @return int
     */
    public function getEndpoint_delivery_id()
    {
        return $this->endpoint_delivery_id;
    }

    /**
     * @param int $endpoint_delivery_id
     * @return SetOrderHeaderCommand
     */
    public function withEndpoint_delivery_id($endpoint_delivery_id)
    {
        $new = clone $this;
        $new->endpoint_delivery_id = $endpoint_delivery_id;

        return $new;
    }

    /**
     * @return string
     */
    public function getPacking_type()
    {
        return $this->packing_type;
    }

    /**
     * @param string $packing_type
     * @return SetOrderHeaderCommand
     */
    public function withPacking_type($packing_type)
    {
        $new = clone $this;
        $new->packing_type = $packing_type;

        return $new;
    }


}


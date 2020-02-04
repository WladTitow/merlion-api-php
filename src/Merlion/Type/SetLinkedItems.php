<?php

namespace Merlion\Type;

class SetLinkedItems
{

    /**
     * @var string
     */
    private $item_id;

    /**
     * @var string
     */
    private $custitem_id;

    /**
     * @var string
     */
    private $custitem_name;

    /**
     * @return string
     */
    public function getItem_id()
    {
        return $this->item_id;
    }

    /**
     * @param string $item_id
     * @return SetLinkedItems
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
    public function getCustitem_id()
    {
        return $this->custitem_id;
    }

    /**
     * @param string $custitem_id
     * @return SetLinkedItems
     */
    public function withCustitem_id($custitem_id)
    {
        $new = clone $this;
        $new->custitem_id = $custitem_id;

        return $new;
    }

    /**
     * @return string
     */
    public function getCustitem_name()
    {
        return $this->custitem_name;
    }

    /**
     * @param string $custitem_name
     * @return SetLinkedItems
     */
    public function withCustitem_name($custitem_name)
    {
        $new = clone $this;
        $new->custitem_name = $custitem_name;

        return $new;
    }


}


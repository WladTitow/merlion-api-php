<?php

namespace Merlion\Type;

class GetItemsBarcodes
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
     * @return string
     */
    public function getCat_id()
    {
        return $this->cat_id;
    }

    /**
     * @param string $cat_id
     * @return GetItemsBarcodes
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
     * @return GetItemsBarcodes
     */
    public function withItem_id($item_id)
    {
        $new = clone $this;
        $new->item_id = $item_id;

        return $new;
    }


}


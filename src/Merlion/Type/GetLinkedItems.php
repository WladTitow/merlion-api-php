<?php

namespace Merlion\Type;

class GetLinkedItems
{

    /**
     * @var int
     */
    private $page;

    /**
     * @var int
     */
    private $rows_on_page;

    /**
     * @var int
     */
    private $type_item_id;

    /**
     * @var \Merlion\Type\ArrayOfString
     */
    private $item_id;

    /**
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param int $page
     * @return GetLinkedItems
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
     * @return GetLinkedItems
     */
    public function withRows_on_page($rows_on_page)
    {
        $new = clone $this;
        $new->rows_on_page = $rows_on_page;

        return $new;
    }

    /**
     * @return int
     */
    public function getType_item_id()
    {
        return $this->type_item_id;
    }

    /**
     * @param int $type_item_id
     * @return GetLinkedItems
     */
    public function withType_item_id($type_item_id)
    {
        $new = clone $this;
        $new->type_item_id = $type_item_id;

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
     * @return GetLinkedItems
     */
    public function withItem_id($item_id)
    {
        $new = clone $this;
        $new->item_id = $item_id;

        return $new;
    }


}


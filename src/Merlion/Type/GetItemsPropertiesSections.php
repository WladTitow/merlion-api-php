<?php

namespace Merlion\Type;

class GetItemsPropertiesSections
{

    /**
     * @var string
     */
    private $id;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return GetItemsPropertiesSections
     */
    public function withId($id)
    {
        $new = clone $this;
        $new->id = $id;

        return $new;
    }


}


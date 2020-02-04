<?php

namespace Merlion\Type;

class ItemsPropertiesSectionsResult
{

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return ItemsPropertiesSectionsResult
     */
    public function withId($id)
    {
        $new = clone $this;
        $new->id = $id;

        return $new;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return ItemsPropertiesSectionsResult
     */
    public function withName($name)
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }


}


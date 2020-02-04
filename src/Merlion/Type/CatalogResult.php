<?php

namespace Merlion\Type;

class CatalogResult
{

    /**
     * @var string
     */
    private $ID;

    /**
     * @var string
     */
    private $ID_PARENT;

    /**
     * @var string
     */
    private $Description;

    /**
     * @return string
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * @param string $ID
     * @return CatalogResult
     */
    public function withID($ID)
    {
        $new = clone $this;
        $new->ID = $ID;

        return $new;
    }

    /**
     * @return string
     */
    public function getID_PARENT()
    {
        return $this->ID_PARENT;
    }

    /**
     * @param string $ID_PARENT
     * @return CatalogResult
     */
    public function withID_PARENT($ID_PARENT)
    {
        $new = clone $this;
        $new->ID_PARENT = $ID_PARENT;

        return $new;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     * @return CatalogResult
     */
    public function withDescription($Description)
    {
        $new = clone $this;
        $new->Description = $Description;

        return $new;
    }


}


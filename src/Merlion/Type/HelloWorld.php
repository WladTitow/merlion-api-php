<?php

namespace Merlion\Type;

class HelloWorld
{

    /**
     * @var string
     */
    private $name;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return HelloWorld
     */
    public function withName($name)
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }


}


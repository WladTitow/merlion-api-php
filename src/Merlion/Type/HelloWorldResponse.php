<?php

namespace Merlion\Type;

class HelloWorldResponse
{

    /**
     * @var string
     */
    private $helloWorldResult;

    /**
     * @return string
     */
    public function getHelloWorldResult()
    {
        return $this->helloWorldResult;
    }

    /**
     * @param string $helloWorldResult
     * @return HelloWorldResponse
     */
    public function withHelloWorldResult($helloWorldResult)
    {
        $new = clone $this;
        $new->helloWorldResult = $helloWorldResult;

        return $new;
    }


}


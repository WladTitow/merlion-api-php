<?php

namespace Merlion\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetCommandResult implements RequestInterface
{

    /**
     * @var string
     */
    private $operation_no;

    /**
     * @return string
     */
    public function getOperation_no()
    {
        return $this->operation_no;
    }

    /**
     * @param string $operation_no
     * @return GetCommandResult
     */
    public function withOperation_no($operation_no)
    {
        $new = clone $this;
        $new->operation_no = $operation_no;

        return $new;
    }


}


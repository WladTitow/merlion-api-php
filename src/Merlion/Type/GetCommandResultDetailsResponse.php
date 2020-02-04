<?php

namespace Merlion\Type;

class GetCommandResultDetailsResponse
{

    /**
     * @var \Merlion\Type\ArrayOfCommandResult
     */
    private $getCommandResultDetailsResult;

    /**
     * @return \Merlion\Type\ArrayOfCommandResult
     */
    public function getGetCommandResultDetailsResult()
    {
        return $this->getCommandResultDetailsResult;
    }

    /**
     * @param \Merlion\Type\ArrayOfCommandResult $getCommandResultDetailsResult
     * @return GetCommandResultDetailsResponse
     */
    public function withGetCommandResultDetailsResult($getCommandResultDetailsResult)
    {
        $new = clone $this;
        $new->getCommandResultDetailsResult = $getCommandResultDetailsResult;

        return $new;
    }


}


<?php

namespace Merlion\Type;

class ContractsResult
{

    /**
     * @var string
     */
    private $Id;

    /**
     * @var string
     */
    private $Description;

    /**
     * @var string
     */
    private $CounterAgentCode;

    /**
     * @var string
     */
    private $DefaultContract;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param string $Id
     * @return ContractsResult
     */
    public function withId($Id)
    {
        $new = clone $this;
        $new->Id = $Id;

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
     * @return ContractsResult
     */
    public function withDescription($Description)
    {
        $new = clone $this;
        $new->Description = $Description;

        return $new;
    }

    /**
     * @return string
     */
    public function getCounterAgentCode()
    {
        return $this->CounterAgentCode;
    }

    /**
     * @param string $CounterAgentCode
     * @return ContractsResult
     */
    public function withCounterAgentCode($CounterAgentCode)
    {
        $new = clone $this;
        $new->CounterAgentCode = $CounterAgentCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getDefaultContract()
    {
        return $this->DefaultContract;
    }

    /**
     * @param string $DefaultContract
     * @return ContractsResult
     */
    public function withDefaultContract($DefaultContract)
    {
        $new = clone $this;
        $new->DefaultContract = $DefaultContract;

        return $new;
    }


}


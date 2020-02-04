<?php

namespace Merlion\Type;

class RepresentativeResult
{

    /**
     * @var string
     */
    private $Representative;

    /**
     * @var string
     */
    private $CounterAgentCode;

    /**
     * @var string
     */
    private $StartDate;

    /**
     * @var string
     */
    private $EndDate;

    /**
     * @return string
     */
    public function getRepresentative()
    {
        return $this->Representative;
    }

    /**
     * @param string $Representative
     * @return RepresentativeResult
     */
    public function withRepresentative($Representative)
    {
        $new = clone $this;
        $new->Representative = $Representative;

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
     * @return RepresentativeResult
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
    public function getStartDate()
    {
        return $this->StartDate;
    }

    /**
     * @param string $StartDate
     * @return RepresentativeResult
     */
    public function withStartDate($StartDate)
    {
        $new = clone $this;
        $new->StartDate = $StartDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }

    /**
     * @param string $EndDate
     * @return RepresentativeResult
     */
    public function withEndDate($EndDate)
    {
        $new = clone $this;
        $new->EndDate = $EndDate;

        return $new;
    }


}


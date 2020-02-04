<?php

namespace Merlion\Type;

class ItemsAvailResult
{

    /**
     * @var string
     */
    private $No;

    /**
     * @var float
     */
    private $PriceClient;

    /**
     * @var float
     */
    private $PriceClient_RG;

    /**
     * @var float
     */
    private $PriceClient_MSK;

    /**
     * @var int
     */
    private $AvailableClient;

    /**
     * @var int
     */
    private $AvailableClient_RG;

    /**
     * @var int
     */
    private $AvailableClient_MSK;

    /**
     * @var int
     */
    private $AvailableExpected;

    /**
     * @var int
     */
    private $AvailableExpectedNext;

    /**
     * @var string
     */
    private $DateExpectedNext;

    /**
     * @var float
     */
    private $RRP;

    /**
     * @var string
     */
    private $RRP_Date;

    /**
     * @var float
     */
    private $PriceClientRUB;

    /**
     * @var float
     */
    private $PriceClientRUB_RG;

    /**
     * @var float
     */
    private $PriceClientRUB_MSK;

    /**
     * @var int
     */
    private $Online_Reserve;

    /**
     * @var float
     */
    private $ReserveCost;

    /**
     * @return string
     */
    public function getNo()
    {
        return $this->No;
    }

    /**
     * @param string $No
     * @return ItemsAvailResult
     */
    public function withNo($No)
    {
        $new = clone $this;
        $new->No = $No;

        return $new;
    }

    /**
     * @return float
     */
    public function getPriceClient()
    {
        return $this->PriceClient;
    }

    /**
     * @param float $PriceClient
     * @return ItemsAvailResult
     */
    public function withPriceClient($PriceClient)
    {
        $new = clone $this;
        $new->PriceClient = $PriceClient;

        return $new;
    }

    /**
     * @return float
     */
    public function getPriceClient_RG()
    {
        return $this->PriceClient_RG;
    }

    /**
     * @param float $PriceClient_RG
     * @return ItemsAvailResult
     */
    public function withPriceClient_RG($PriceClient_RG)
    {
        $new = clone $this;
        $new->PriceClient_RG = $PriceClient_RG;

        return $new;
    }

    /**
     * @return float
     */
    public function getPriceClient_MSK()
    {
        return $this->PriceClient_MSK;
    }

    /**
     * @param float $PriceClient_MSK
     * @return ItemsAvailResult
     */
    public function withPriceClient_MSK($PriceClient_MSK)
    {
        $new = clone $this;
        $new->PriceClient_MSK = $PriceClient_MSK;

        return $new;
    }

    /**
     * @return int
     */
    public function getAvailableClient()
    {
        return $this->AvailableClient;
    }

    /**
     * @param int $AvailableClient
     * @return ItemsAvailResult
     */
    public function withAvailableClient($AvailableClient)
    {
        $new = clone $this;
        $new->AvailableClient = $AvailableClient;

        return $new;
    }

    /**
     * @return int
     */
    public function getAvailableClient_RG()
    {
        return $this->AvailableClient_RG;
    }

    /**
     * @param int $AvailableClient_RG
     * @return ItemsAvailResult
     */
    public function withAvailableClient_RG($AvailableClient_RG)
    {
        $new = clone $this;
        $new->AvailableClient_RG = $AvailableClient_RG;

        return $new;
    }

    /**
     * @return int
     */
    public function getAvailableClient_MSK()
    {
        return $this->AvailableClient_MSK;
    }

    /**
     * @param int $AvailableClient_MSK
     * @return ItemsAvailResult
     */
    public function withAvailableClient_MSK($AvailableClient_MSK)
    {
        $new = clone $this;
        $new->AvailableClient_MSK = $AvailableClient_MSK;

        return $new;
    }

    /**
     * @return int
     */
    public function getAvailableExpected()
    {
        return $this->AvailableExpected;
    }

    /**
     * @param int $AvailableExpected
     * @return ItemsAvailResult
     */
    public function withAvailableExpected($AvailableExpected)
    {
        $new = clone $this;
        $new->AvailableExpected = $AvailableExpected;

        return $new;
    }

    /**
     * @return int
     */
    public function getAvailableExpectedNext()
    {
        return $this->AvailableExpectedNext;
    }

    /**
     * @param int $AvailableExpectedNext
     * @return ItemsAvailResult
     */
    public function withAvailableExpectedNext($AvailableExpectedNext)
    {
        $new = clone $this;
        $new->AvailableExpectedNext = $AvailableExpectedNext;

        return $new;
    }

    /**
     * @return string
     */
    public function getDateExpectedNext()
    {
        return $this->DateExpectedNext;
    }

    /**
     * @param string $DateExpectedNext
     * @return ItemsAvailResult
     */
    public function withDateExpectedNext($DateExpectedNext)
    {
        $new = clone $this;
        $new->DateExpectedNext = $DateExpectedNext;

        return $new;
    }

    /**
     * @return float
     */
    public function getRRP()
    {
        return $this->RRP;
    }

    /**
     * @param float $RRP
     * @return ItemsAvailResult
     */
    public function withRRP($RRP)
    {
        $new = clone $this;
        $new->RRP = $RRP;

        return $new;
    }

    /**
     * @return string
     */
    public function getRRP_Date()
    {
        return $this->RRP_Date;
    }

    /**
     * @param string $RRP_Date
     * @return ItemsAvailResult
     */
    public function withRRP_Date($RRP_Date)
    {
        $new = clone $this;
        $new->RRP_Date = $RRP_Date;

        return $new;
    }

    /**
     * @return float
     */
    public function getPriceClientRUB()
    {
        return $this->PriceClientRUB;
    }

    /**
     * @param float $PriceClientRUB
     * @return ItemsAvailResult
     */
    public function withPriceClientRUB($PriceClientRUB)
    {
        $new = clone $this;
        $new->PriceClientRUB = $PriceClientRUB;

        return $new;
    }

    /**
     * @return float
     */
    public function getPriceClientRUB_RG()
    {
        return $this->PriceClientRUB_RG;
    }

    /**
     * @param float $PriceClientRUB_RG
     * @return ItemsAvailResult
     */
    public function withPriceClientRUB_RG($PriceClientRUB_RG)
    {
        $new = clone $this;
        $new->PriceClientRUB_RG = $PriceClientRUB_RG;

        return $new;
    }

    /**
     * @return float
     */
    public function getPriceClientRUB_MSK()
    {
        return $this->PriceClientRUB_MSK;
    }

    /**
     * @param float $PriceClientRUB_MSK
     * @return ItemsAvailResult
     */
    public function withPriceClientRUB_MSK($PriceClientRUB_MSK)
    {
        $new = clone $this;
        $new->PriceClientRUB_MSK = $PriceClientRUB_MSK;

        return $new;
    }

    /**
     * @return int
     */
    public function getOnline_Reserve()
    {
        return $this->Online_Reserve;
    }

    /**
     * @param int $Online_Reserve
     * @return ItemsAvailResult
     */
    public function withOnline_Reserve($Online_Reserve)
    {
        $new = clone $this;
        $new->Online_Reserve = $Online_Reserve;

        return $new;
    }

    /**
     * @return float
     */
    public function getReserveCost()
    {
        return $this->ReserveCost;
    }

    /**
     * @param float $ReserveCost
     * @return ItemsAvailResult
     */
    public function withReserveCost($ReserveCost)
    {
        $new = clone $this;
        $new->ReserveCost = $ReserveCost;

        return $new;
    }


}


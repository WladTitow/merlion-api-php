<?php

namespace Merlion\Type;

class LinkedItemsResult
{

    /**
     * @var string
     */
    private $No;

    /**
     * @var string
     */
    private $Cust_ItemNo;

    /**
     * @var string
     */
    private $Cust_ItemName;

    /**
     * @return string
     */
    public function getNo()
    {
        return $this->No;
    }

    /**
     * @param string $No
     * @return LinkedItemsResult
     */
    public function withNo($No)
    {
        $new = clone $this;
        $new->No = $No;

        return $new;
    }

    /**
     * @return string
     */
    public function getCust_ItemNo()
    {
        return $this->Cust_ItemNo;
    }

    /**
     * @param string $Cust_ItemNo
     * @return LinkedItemsResult
     */
    public function withCust_ItemNo($Cust_ItemNo)
    {
        $new = clone $this;
        $new->Cust_ItemNo = $Cust_ItemNo;

        return $new;
    }

    /**
     * @return string
     */
    public function getCust_ItemName()
    {
        return $this->Cust_ItemName;
    }

    /**
     * @param string $Cust_ItemName
     * @return LinkedItemsResult
     */
    public function withCust_ItemName($Cust_ItemName)
    {
        $new = clone $this;
        $new->Cust_ItemName = $Cust_ItemName;

        return $new;
    }


}


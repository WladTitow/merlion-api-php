<?php

namespace Merlion\Type;

class ItemsResult
{

    /**
     * @var string
     */
    private $No;

    /**
     * @var string
     */
    private $Name;

    /**
     * @var string
     */
    private $Brand;

    /**
     * @var string
     */
    private $Vendor_part;

    /**
     * @var string
     */
    private $Size;

    /**
     * @var int
     */
    private $EOL;

    /**
     * @var int
     */
    private $Warranty;

    /**
     * @var float
     */
    private $Weight;

    /**
     * @var float
     */
    private $Volume;

    /**
     * @var int
     */
    private $Min_Packaged;

    /**
     * @var string
     */
    private $Sales_Limit_Type;

    /**
     * @var string
     */
    private $GroupName1;

    /**
     * @var string
     */
    private $GroupName2;

    /**
     * @var string
     */
    private $GroupName3;

    /**
     * @var string
     */
    private $GroupCode1;

    /**
     * @var string
     */
    private $GroupCode2;

    /**
     * @var string
     */
    private $GroupCode3;

    /**
     * @var int
     */
    private $IsBundle;

    /**
     * @var string
     */
    private $ActionDesc;

    /**
     * @var string
     */
    private $ActionWWW;

    /**
     * @var string
     */
    private $Last_time_modified;

    /**
     * @var string
     */
    private $VAT;

    /**
     * @var int
     */
    private $IsNew;

    /**
     * @return string
     */
    public function getNo()
    {
        return $this->No;
    }

    /**
     * @param string $No
     * @return ItemsResult
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
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return ItemsResult
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @return string
     */
    public function getBrand()
    {
        return $this->Brand;
    }

    /**
     * @param string $Brand
     * @return ItemsResult
     */
    public function withBrand($Brand)
    {
        $new = clone $this;
        $new->Brand = $Brand;

        return $new;
    }

    /**
     * @return string
     */
    public function getVendor_part()
    {
        return $this->Vendor_part;
    }

    /**
     * @param string $Vendor_part
     * @return ItemsResult
     */
    public function withVendor_part($Vendor_part)
    {
        $new = clone $this;
        $new->Vendor_part = $Vendor_part;

        return $new;
    }

    /**
     * @return string
     */
    public function getSize()
    {
        return $this->Size;
    }

    /**
     * @param string $Size
     * @return ItemsResult
     */
    public function withSize($Size)
    {
        $new = clone $this;
        $new->Size = $Size;

        return $new;
    }

    /**
     * @return int
     */
    public function getEOL()
    {
        return $this->EOL;
    }

    /**
     * @param int $EOL
     * @return ItemsResult
     */
    public function withEOL($EOL)
    {
        $new = clone $this;
        $new->EOL = $EOL;

        return $new;
    }

    /**
     * @return int
     */
    public function getWarranty()
    {
        return $this->Warranty;
    }

    /**
     * @param int $Warranty
     * @return ItemsResult
     */
    public function withWarranty($Warranty)
    {
        $new = clone $this;
        $new->Warranty = $Warranty;

        return $new;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
        return $this->Weight;
    }

    /**
     * @param float $Weight
     * @return ItemsResult
     */
    public function withWeight($Weight)
    {
        $new = clone $this;
        $new->Weight = $Weight;

        return $new;
    }

    /**
     * @return float
     */
    public function getVolume()
    {
        return $this->Volume;
    }

    /**
     * @param float $Volume
     * @return ItemsResult
     */
    public function withVolume($Volume)
    {
        $new = clone $this;
        $new->Volume = $Volume;

        return $new;
    }

    /**
     * @return int
     */
    public function getMin_Packaged()
    {
        return $this->Min_Packaged;
    }

    /**
     * @param int $Min_Packaged
     * @return ItemsResult
     */
    public function withMin_Packaged($Min_Packaged)
    {
        $new = clone $this;
        $new->Min_Packaged = $Min_Packaged;

        return $new;
    }

    /**
     * @return string
     */
    public function getSales_Limit_Type()
    {
        return $this->Sales_Limit_Type;
    }

    /**
     * @param string $Sales_Limit_Type
     * @return ItemsResult
     */
    public function withSales_Limit_Type($Sales_Limit_Type)
    {
        $new = clone $this;
        $new->Sales_Limit_Type = $Sales_Limit_Type;

        return $new;
    }

    /**
     * @return string
     */
    public function getGroupName1()
    {
        return $this->GroupName1;
    }

    /**
     * @param string $GroupName1
     * @return ItemsResult
     */
    public function withGroupName1($GroupName1)
    {
        $new = clone $this;
        $new->GroupName1 = $GroupName1;

        return $new;
    }

    /**
     * @return string
     */
    public function getGroupName2()
    {
        return $this->GroupName2;
    }

    /**
     * @param string $GroupName2
     * @return ItemsResult
     */
    public function withGroupName2($GroupName2)
    {
        $new = clone $this;
        $new->GroupName2 = $GroupName2;

        return $new;
    }

    /**
     * @return string
     */
    public function getGroupName3()
    {
        return $this->GroupName3;
    }

    /**
     * @param string $GroupName3
     * @return ItemsResult
     */
    public function withGroupName3($GroupName3)
    {
        $new = clone $this;
        $new->GroupName3 = $GroupName3;

        return $new;
    }

    /**
     * @return string
     */
    public function getGroupCode1()
    {
        return $this->GroupCode1;
    }

    /**
     * @param string $GroupCode1
     * @return ItemsResult
     */
    public function withGroupCode1($GroupCode1)
    {
        $new = clone $this;
        $new->GroupCode1 = $GroupCode1;

        return $new;
    }

    /**
     * @return string
     */
    public function getGroupCode2()
    {
        return $this->GroupCode2;
    }

    /**
     * @param string $GroupCode2
     * @return ItemsResult
     */
    public function withGroupCode2($GroupCode2)
    {
        $new = clone $this;
        $new->GroupCode2 = $GroupCode2;

        return $new;
    }

    /**
     * @return string
     */
    public function getGroupCode3()
    {
        return $this->GroupCode3;
    }

    /**
     * @param string $GroupCode3
     * @return ItemsResult
     */
    public function withGroupCode3($GroupCode3)
    {
        $new = clone $this;
        $new->GroupCode3 = $GroupCode3;

        return $new;
    }

    /**
     * @return int
     */
    public function getIsBundle()
    {
        return $this->IsBundle;
    }

    /**
     * @param int $IsBundle
     * @return ItemsResult
     */
    public function withIsBundle($IsBundle)
    {
        $new = clone $this;
        $new->IsBundle = $IsBundle;

        return $new;
    }

    /**
     * @return string
     */
    public function getActionDesc()
    {
        return $this->ActionDesc;
    }

    /**
     * @param string $ActionDesc
     * @return ItemsResult
     */
    public function withActionDesc($ActionDesc)
    {
        $new = clone $this;
        $new->ActionDesc = $ActionDesc;

        return $new;
    }

    /**
     * @return string
     */
    public function getActionWWW()
    {
        return $this->ActionWWW;
    }

    /**
     * @param string $ActionWWW
     * @return ItemsResult
     */
    public function withActionWWW($ActionWWW)
    {
        $new = clone $this;
        $new->ActionWWW = $ActionWWW;

        return $new;
    }

    /**
     * @return string
     */
    public function getLast_time_modified()
    {
        return $this->Last_time_modified;
    }

    /**
     * @param string $Last_time_modified
     * @return ItemsResult
     */
    public function withLast_time_modified($Last_time_modified)
    {
        $new = clone $this;
        $new->Last_time_modified = $Last_time_modified;

        return $new;
    }

    /**
     * @return string
     */
    public function getVAT()
    {
        return $this->VAT;
    }

    /**
     * @param string $VAT
     * @return ItemsResult
     */
    public function withVAT($VAT)
    {
        $new = clone $this;
        $new->VAT = $VAT;

        return $new;
    }

    /**
     * @return int
     */
    public function getIsNew()
    {
        return $this->IsNew;
    }

    /**
     * @param int $IsNew
     * @return ItemsResult
     */
    public function withIsNew($IsNew)
    {
        $new = clone $this;
        $new->IsNew = $IsNew;

        return $new;
    }


}


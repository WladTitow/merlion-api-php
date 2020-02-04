<?php

namespace Merlion\Type;

class ItemsPropertiesResult
{

    /**
     * @var string
     */
    private $No;

    /**
     * @var int
     */
    private $PropertyID;

    /**
     * @var string
     */
    private $PropertyName;

    /**
     * @var int
     */
    private $Sorting;

    /**
     * @var string
     */
    private $Value;

    /**
     * @var string
     */
    private $Measure_Name;

    /**
     * @var string
     */
    private $Last_time_modified;

    /**
     * @var string
     */
    private $Section_Id;

    /**
     * @return string
     */
    public function getNo()
    {
        return $this->No;
    }

    /**
     * @param string $No
     * @return ItemsPropertiesResult
     */
    public function withNo($No)
    {
        $new = clone $this;
        $new->No = $No;

        return $new;
    }

    /**
     * @return int
     */
    public function getPropertyID()
    {
        return $this->PropertyID;
    }

    /**
     * @param int $PropertyID
     * @return ItemsPropertiesResult
     */
    public function withPropertyID($PropertyID)
    {
        $new = clone $this;
        $new->PropertyID = $PropertyID;

        return $new;
    }

    /**
     * @return string
     */
    public function getPropertyName()
    {
        return $this->PropertyName;
    }

    /**
     * @param string $PropertyName
     * @return ItemsPropertiesResult
     */
    public function withPropertyName($PropertyName)
    {
        $new = clone $this;
        $new->PropertyName = $PropertyName;

        return $new;
    }

    /**
     * @return int
     */
    public function getSorting()
    {
        return $this->Sorting;
    }

    /**
     * @param int $Sorting
     * @return ItemsPropertiesResult
     */
    public function withSorting($Sorting)
    {
        $new = clone $this;
        $new->Sorting = $Sorting;

        return $new;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * @param string $Value
     * @return ItemsPropertiesResult
     */
    public function withValue($Value)
    {
        $new = clone $this;
        $new->Value = $Value;

        return $new;
    }

    /**
     * @return string
     */
    public function getMeasure_Name()
    {
        return $this->Measure_Name;
    }

    /**
     * @param string $Measure_Name
     * @return ItemsPropertiesResult
     */
    public function withMeasure_Name($Measure_Name)
    {
        $new = clone $this;
        $new->Measure_Name = $Measure_Name;

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
     * @return ItemsPropertiesResult
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
    public function getSection_Id()
    {
        return $this->Section_Id;
    }

    /**
     * @param string $Section_Id
     * @return ItemsPropertiesResult
     */
    public function withSection_Id($Section_Id)
    {
        $new = clone $this;
        $new->Section_Id = $Section_Id;

        return $new;
    }


}


<?php

namespace Merlion\Type;

class ItemsBarcodesResult
{

    /**
     * @var string
     */
    private $ItemNo;

    /**
     * @var string
     */
    private $UnitOfMeasure;

    /**
     * @var string
     */
    private $Barcode;

    /**
     * @var int
     */
    private $Checked;

    /**
     * @return string
     */
    public function getItemNo()
    {
        return $this->ItemNo;
    }

    /**
     * @param string $ItemNo
     * @return ItemsBarcodesResult
     */
    public function withItemNo($ItemNo)
    {
        $new = clone $this;
        $new->ItemNo = $ItemNo;

        return $new;
    }

    /**
     * @return string
     */
    public function getUnitOfMeasure()
    {
        return $this->UnitOfMeasure;
    }

    /**
     * @param string $UnitOfMeasure
     * @return ItemsBarcodesResult
     */
    public function withUnitOfMeasure($UnitOfMeasure)
    {
        $new = clone $this;
        $new->UnitOfMeasure = $UnitOfMeasure;

        return $new;
    }

    /**
     * @return string
     */
    public function getBarcode()
    {
        return $this->Barcode;
    }

    /**
     * @param string $Barcode
     * @return ItemsBarcodesResult
     */
    public function withBarcode($Barcode)
    {
        $new = clone $this;
        $new->Barcode = $Barcode;

        return $new;
    }

    /**
     * @return int
     */
    public function getChecked()
    {
        return $this->Checked;
    }

    /**
     * @param int $Checked
     * @return ItemsBarcodesResult
     */
    public function withChecked($Checked)
    {
        $new = clone $this;
        $new->Checked = $Checked;

        return $new;
    }


}


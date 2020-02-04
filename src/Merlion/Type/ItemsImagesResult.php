<?php

namespace Merlion\Type;

class ItemsImagesResult
{

    /**
     * @var string
     */
    private $No;

    /**
     * @var string
     */
    private $ViewType;

    /**
     * @var string
     */
    private $SizeType;

    /**
     * @var string
     */
    private $FileName;

    /**
     * @var string
     */
    private $Created;

    /**
     * @var int
     */
    private $Size;

    /**
     * @var int
     */
    private $Width;

    /**
     * @var int
     */
    private $Height;

    /**
     * @return string
     */
    public function getNo()
    {
        return $this->No;
    }

    /**
     * @param string $No
     * @return ItemsImagesResult
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
    public function getViewType()
    {
        return $this->ViewType;
    }

    /**
     * @param string $ViewType
     * @return ItemsImagesResult
     */
    public function withViewType($ViewType)
    {
        $new = clone $this;
        $new->ViewType = $ViewType;

        return $new;
    }

    /**
     * @return string
     */
    public function getSizeType()
    {
        return $this->SizeType;
    }

    /**
     * @param string $SizeType
     * @return ItemsImagesResult
     */
    public function withSizeType($SizeType)
    {
        $new = clone $this;
        $new->SizeType = $SizeType;

        return $new;
    }

    /**
     * @return string
     */
    public function getFileName()
    {
        return $this->FileName;
    }

    /**
     * @param string $FileName
     * @return ItemsImagesResult
     */
    public function withFileName($FileName)
    {
        $new = clone $this;
        $new->FileName = $FileName;

        return $new;
    }

    /**
     * @return string
     */
    public function getCreated()
    {
        return $this->Created;
    }

    /**
     * @param string $Created
     * @return ItemsImagesResult
     */
    public function withCreated($Created)
    {
        $new = clone $this;
        $new->Created = $Created;

        return $new;
    }

    /**
     * @return int
     */
    public function getSize()
    {
        return $this->Size;
    }

    /**
     * @param int $Size
     * @return ItemsImagesResult
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
    public function getWidth()
    {
        return $this->Width;
    }

    /**
     * @param int $Width
     * @return ItemsImagesResult
     */
    public function withWidth($Width)
    {
        $new = clone $this;
        $new->Width = $Width;

        return $new;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->Height;
    }

    /**
     * @param int $Height
     * @return ItemsImagesResult
     */
    public function withHeight($Height)
    {
        $new = clone $this;
        $new->Height = $Height;

        return $new;
    }


}


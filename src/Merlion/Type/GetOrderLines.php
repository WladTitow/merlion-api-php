<?php

namespace Merlion\Type;

class GetOrderLines
{

    /**
     * @var string
     */
    private $document_no;

    /**
     * @var string
     */
    private $details;

    /**
     * @return string
     */
    public function getDocument_no()
    {
        return $this->document_no;
    }

    /**
     * @param string $document_no
     * @return GetOrderLines
     */
    public function withDocument_no($document_no)
    {
        $new = clone $this;
        $new->document_no = $document_no;

        return $new;
    }

    /**
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * @param string $details
     * @return GetOrderLines
     */
    public function withDetails($details)
    {
        $new = clone $this;
        $new->details = $details;

        return $new;
    }


}


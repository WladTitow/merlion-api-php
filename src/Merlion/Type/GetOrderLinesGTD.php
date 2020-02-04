<?php

namespace Merlion\Type;

class GetOrderLinesGTD
{

    /**
     * @var string
     */
    private $document_no;

    /**
     * @return string
     */
    public function getDocument_no()
    {
        return $this->document_no;
    }

    /**
     * @param string $document_no
     * @return GetOrderLinesGTD
     */
    public function withDocument_no($document_no)
    {
        $new = clone $this;
        $new->document_no = $document_no;

        return $new;
    }


}


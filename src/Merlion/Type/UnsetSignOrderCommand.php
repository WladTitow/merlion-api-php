<?php

namespace Merlion\Type;

class UnsetSignOrderCommand
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
     * @return UnsetSignOrderCommand
     */
    public function withDocument_no($document_no)
    {
        $new = clone $this;
        $new->document_no = $document_no;

        return $new;
    }


}


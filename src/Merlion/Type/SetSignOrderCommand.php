<?php

namespace Merlion\Type;

class SetSignOrderCommand
{

    /**
     * @var string
     */
    private $document_no;

    /**
     * @var int
     */
    private $sign_type;

    /**
     * @return string
     */
    public function getDocument_no()
    {
        return $this->document_no;
    }

    /**
     * @param string $document_no
     * @return SetSignOrderCommand
     */
    public function withDocument_no($document_no)
    {
        $new = clone $this;
        $new->document_no = $document_no;

        return $new;
    }

    /**
     * @return int
     */
    public function getSign_type()
    {
        return $this->sign_type;
    }

    /**
     * @param int $sign_type
     * @return SetSignOrderCommand
     */
    public function withSign_type($sign_type)
    {
        $new = clone $this;
        $new->sign_type = $sign_type;

        return $new;
    }


}


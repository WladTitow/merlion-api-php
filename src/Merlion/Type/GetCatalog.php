<?php

namespace Merlion\Type;

use Phpro\SoapClient\Type\RequestInterface as RequestInterface;

class GetCatalog implements RequestInterface
{

    /**
     * @var string
     */
    private $cat_id;

    /**
     * @return string
     */
    public function getCat_id()
    {
        return $this->cat_id;
    }

    /**
     * @param string $cat_id
     * @return GetCatalog
     */
    public function withCat_id($cat_id)
    {
        $new = clone $this;
        $new->cat_id = $cat_id;

        return $new;
    }


}


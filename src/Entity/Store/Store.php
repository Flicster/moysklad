<?php

namespace MoySklad\Entity\Store;

use JMS\Serializer\Annotation\Type;

class Store extends AbstractStore
{
    /**
     * @Type("string")
     */
    public $code;

    /**
     * @Type("string")
     */
    public $pathName;

    /**
     * @Type("MoySklad\Entity\Store\Store")
     */
    public $parent;

    /**
     * @Type("array<MoySklad\Entity\Attribute>")
     */
    public $attributes = [];
}

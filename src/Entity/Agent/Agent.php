<?php

namespace MoySklad\Entity\Agent;

use MoySklad\Entity\MetaEntity;
use JMS\Serializer\Annotation\Type;

abstract class Agent extends MetaEntity
{
    /**
     * @Type("string")
     */
    public $name;

    /**
     * @Type("string")
     */
    public $description;

    /**
     * @Type("string")
     */
    public $email;

    /**
     * @Type("string")
     */
    public $phone;

    /**
     * @Type("string")
     */
    public $externalCode;

    /**
     * @Type("string")
     */
    public $legalTitle;

    /**
     * @Type("string")
     */
    public $legalAddress;

    /**
     * @Type("string")
     */
    public $inn;

    /**
     * @Type("bool")
     */
    public $shared;

    /**
     * @Type("bool")
     */
    public $archived;

    /**
     * @Type("array<MoySklad\Entity\Attribute>")
     */
    public $attributes = [];

    /**
     * @Type("DateTime<'Y-m-d H:i:s'>")
     */
    public $created;

    /**
     * @Type("DateTime<'Y-m-d H:i:s'>")
     */
    public $updated;

    /**
     * @Type("MoySklad\Entity\Agent\Employee")
     */
    public $owner;

    /**
     * @Type("MoySklad\Entity\Group")
     */
    public $group;
}

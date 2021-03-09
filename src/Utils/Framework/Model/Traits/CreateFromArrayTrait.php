<?php

declare(strict_types=1);

namespace App\Utils\Framework\Model\Traits;

/**
 * Trait CreateFromArrayTrait
 * @package App\Utils\Framework\Model\Traits
 */
trait CreateFromArrayTrait
{
    /**
     * @param array $array
     *
     * @return self
     */
    public static function createFromArray(array $array): self
    {
        $object = new self;
        foreach ($array as $property => $value) {
            if (property_exists(__CLASS__, $property)) {
                $object->{$property} = $value;
            }
        }
        
        return $object;
    }
}

<?php

declare(strict_types=1);

namespace App\Utils\Filter\Model;

use App\Utils\Framework\Model\Traits\CreateFromArrayTrait;

/**
 * Class Dish
 * @package App\Utils\Filter\Model
 */
class Dish
{
    use CreateFromArrayTrait;
    
    const TYPE_SALAT = 'salat';
    const TYPE_MIXED = 'mixed';
    const TYPE_MILK = 'milk';
    const TYPE_MEAT = 'meat';
    const TYPE_DESSERT = 'dessert';
    
    /**
     * @var integer
     */
    private $cost;
    
    /**
     * @var integer
     */
    private $cookingInMinutes;
    
    /**
     * @var string
     */
    private $type;
    
    /**
     * @var bool
     */
    private $payed;
    
    /**
     * @return int
     */
    public function getCost(): int
    {
        return $this->cost;
    }
    
    /**
     * @return int
     */
    public function getCookingInMinutes(): int
    {
        return $this->cookingInMinutes;
    }
    
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    
    /**
     * @return bool
     */
    public function isPayed(): bool
    {
        return $this->payed;
    }
}
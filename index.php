<?php

use App\Utils\Filter\Model\Dish;

#Input example of dishes
$dishes = array_map(
    function ($i) {
        return Dish::createFromArray(
            [
                'cost'             => random_int(100, 2000),
                'cookingInMinutes' => random_int(10, 100),
                'type'             => [
                    Dish::TYPE_SALAT,
                    Dish::TYPE_MIXED,
                    Dish::TYPE_MILK,
                    Dish::TYPE_MEAT,
                    Dish::TYPE_DESSERT,
                ][random_int(0, 4)],
                'payed'            => [true, false][random_int(0, 1)],
            ]
        );
    },
    range(0, 12)
);



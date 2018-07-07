<?php

namespace App\Models;

class CompanyType
{
    const PRIMARY_SECTOR = 1;
    const SECONDARY_SECTOR = 2;

    const CURRENCY_LOCAL = "local";
    const CURRENCY_GOLD = "gold";

    // Array keys ARE IMPORTANT, DO NOT EDIT THEM OR EDIT COMPANY ID TOO
    public static $types = [
        1 => [
            "id" => 1,
            "name" => "Raw food Factory",
            "sector" => self::PRIMARY_SECTOR,
            "product" => Item::RAW_FOOD,
            "qualities" => [
                1 => [
                    "workers" => 0,
                    "product_amount" => 30,
                    "consume_amount" => 0,
                    "consume_product" => null,
                    "price" => 500,
                    "currency" => self::CURRENCY_LOCAL,
                ],
                2 => [
                    "workers" => 0,
                    "product_amount" => 70,
                    "consume_amount" => 0,
                    "consume_product" => null,
                    "price" => 1000,
                    "currency" => self::CURRENCY_LOCAL,
                ],
                3 => [
                    "workers" => 1,
                    "product_amount" => 120,
                    "consume_amount" => 0,
                    "consume_product" => null,
                    "price" => 10,
                    "currency" => self::CURRENCY_GOLD,
                ],
                4 => [
                    "workers" => 1,
                    "product_amount" => 170,
                    "consume_amount" => 0,
                    "consume_product" => null,
                    "price" => 3000,
                    "currency" => self::CURRENCY_LOCAL,
                ],
                5 => [
                    "workers" => 4,
                    "product_amount" => 250,
                    "consume_amount" => 0,
                    "consume_product" => null,
                    "price" => 35,
                    "currency" => self::CURRENCY_GOLD,
                ]
            ]
        ],
        2 => [
            "id" => 2,
            "name" => "Raw weapon Factory",
            "sector" => self::PRIMARY_SECTOR,
            "product" => Item::RAW_WEAPON,
            "qualities" => [
                1 => [
                    "workers" => 0,
                    "product_amount" => 30,
                    "consume_amount" => 0,
                    "consume_product" => null,
                    "price" => 500,
                    "currency" => self::CURRENCY_LOCAL,
                ],
                2 => [
                    "workers" => 0,
                    "product_amount" => 70,
                    "consume_amount" => 0,
                    "consume_product" => null,
                    "price" => 1000,
                    "currency" => self::CURRENCY_LOCAL,
                ],
                3 => [
                    "workers" => 1,
                    "product_amount" => 120,
                    "consume_amount" => 0,
                    "consume_product" => null,
                    "price" => 10,
                    "currency" => self::CURRENCY_GOLD,
                ],
                4 => [
                    "workers" => 1,
                    "product_amount" => 170,
                    "consume_amount" => 0,
                    "consume_product" => null,
                    "price" => 3000,
                    "currency" => self::CURRENCY_LOCAL,
                ],
                5 => [
                    "workers" => 4,
                    "product_amount" => 250,
                    "consume_amount" => 0,
                    "consume_product" => null,
                    "price" => 35,
                    "currency" => self::CURRENCY_GOLD,
                ]
            ]
        ],
        3 => [
            "id" => 3,
            "name" => "Raw house Factory",
            "sector" => self::PRIMARY_SECTOR,
            "product" => Item::RAW_HOUSE,
            "qualities" => [
                1 => [
                    "workers" => 0,
                    "product_amount" => 30,
                    "consume_amount" => 0,
                    "consume_product" => null,
                    "price" => 500,
                    "currency" => self::CURRENCY_LOCAL,
                ],
                2 => [
                    "workers" => 0,
                    "product_amount" => 70,
                    "consume_amount" => 0,
                    "consume_product" => null,
                    "price" => 1000,
                    "currency" => self::CURRENCY_LOCAL,
                ],
                3 => [
                    "workers" => 1,
                    "product_amount" => 120,
                    "consume_amount" => 0,
                    "consume_product" => null,
                    "price" => 10,
                    "currency" => self::CURRENCY_GOLD,
                ],
                4 => [
                    "workers" => 1,
                    "product_amount" => 170,
                    "consume_amount" => 0,
                    "consume_product" => null,
                    "price" => 3000,
                    "currency" => self::CURRENCY_LOCAL,
                ],
                5 => [
                    "workers" => 4,
                    "product_amount" => 250,
                    "consume_amount" => 0,
                    "consume_product" => null,
                    "price" => 35,
                    "currency" => self::CURRENCY_GOLD,
                ]
            ]
        ],
        4 => [
            "id" => 4,
            "name" => "Food Factory",
            "sector" => self::SECONDARY_SECTOR,
            "product" => Item::FOOD,
            "qualities" => [
                1 => [
                    "workers" => 0,
                    "product_amount" => 100,
                    "consume_amount" => 70,
                    "consume_product" => Item::RAW_FOOD,
                    "price" => 500,
                    "currency" => self::CURRENCY_LOCAL,
                ],
                2 => [
                    "workers" => 0,
                    "product_amount" => 70,
                    "consume_amount" => 100,
                    "consume_product" => Item::RAW_FOOD,
                    "price" => 1000,
                    "currency" => self::CURRENCY_LOCAL,
                ],
                3 => [
                    "workers" => 1,
                    "product_amount" => 120,
                    "consume_amount" => 100,
                    "consume_product" => Item::RAW_FOOD,
                    "price" => 10,
                    "currency" => self::CURRENCY_GOLD,
                ],
                4 => [
                    "workers" => 1,
                    "product_amount" => 170,
                    "consume_amount" => 100,
                    "consume_product" => Item::RAW_FOOD,
                    "price" => 3000,
                    "currency" => self::CURRENCY_LOCAL,
                ],
                5 => [
                    "workers" => 4,
                    "product_amount" => 250,
                    "consume_amount" => 100,
                    "consume_product" => Item::RAW_FOOD,
                    "price" => 35,
                    "currency" => self::CURRENCY_GOLD,
                ]
            ]
        ],
    ];

    public static function getInfo ($id, $quality)
    {
        $mainInfo = self::$types[$id];
        unset($mainInfo["qualities"]);

        return array_merge($mainInfo, self::$types[$id]["qualities"][$quality]);
    }
}
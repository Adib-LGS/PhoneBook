<?php

namespace App\Service;

class PhoneBook
{
    public static function searchByName(string $name)
    {
        return collect(self::contacts())->filter(function($value, $key) {
            dump($value, $key);
        });
    }

    public static function contacts(): array
    {
        return [
            [
                'name' => 'John Doe',
                'email' => 'jjD@test.com',
                'phone' => '987654321',
                'city' => 'Montreal, CA'
            ],

            [
                'name' => 'Jeanne Doe',
                'email' => 'jneD@test.com',
                'phone' => '543219876',
                'city' => 'Montreal, CA'
            ],

            [
                'name' => 'Eli Doe',
                'email' => 'ElieD@test.com',
                'phone' => '1987654321',
                'city' => 'Montreal, CA'
            ],

            [
                'name' => 'Bob Marley',
                'email' => 'BobbyD@test.com',
                'phone' => '4987654327',
                'city' => 'Montreal, CA'
            ],
        ];
    }
}
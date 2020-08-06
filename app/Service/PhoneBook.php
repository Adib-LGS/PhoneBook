<?php

namespace App\Service;
use Illuminate\Support\Str;

class PhoneBook
{
    public static function searchByName(string $name):array
    {
        //PHP 7 fn replace function closure
        return self::searchBy('name', $name);     
    }

    public static function searchByCity(string $city):array
    {
        //PHP 7 fn replace function closure
        return self::searchBy('city', $city);     
    }

    public static function searchByEmail(string $email):array
    {
        //PHP 7 fn replace function closure
        return self::searchBy('email', $email);    
    }

    public static function searchBy(string $key, $value):array
    {
        //PHP 7 fn replace function closure
        return collect(self::contacts())
            //dump($contact);
        ->filter(fn($contact) => Str::contains(strtolower($contact[$key]), strtolower($value)))
        ->all();      
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
                'city' => 'Vancouver, CA'
            ],

            [
                'name' => 'Bob Marley',
                'email' => 'BobbyD@test.com',
                'phone' => '4987654327',
                'city' => 'Toronto, CA'
            ],
        ];
    }
}
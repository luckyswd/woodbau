<?php

class Helpers
{
    const BANI_URLS = [
        'bani-bochki',
        'bani-quad',
        'bani-oval',
    ];

    public static function getPhoneWithOutSymbols($phone) : string
    {
        $phone = str_replace('-', '', $phone);
        $phone = str_replace(' ', '', $phone);

        return $phone;
    }
}
<?php

class Helpers
{
    const SAUNY_URLS = [
        'sauny-beczka',
        'sauny-kwadro',
        'sauny-owalna',
    ];

    public static function getPhoneWithOutSymbols($phone) : string
    {
        $phone = str_replace('-', '', $phone);
        $phone = str_replace(' ', '', $phone);

        return $phone;
    }
}
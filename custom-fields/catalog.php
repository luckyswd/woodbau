<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'post_meta', 'Дополнительные параметры')
    ->show_on_category(['bannye-aksessuary-iz-dereva', 'barbekyu', 'kemping-domiki', 'xaberkub', 'teplicy', 'bani', 'tandyry-i-kazany', 'pilomaterialy', 'stoly-iz-duba'])
    ->add_fields(array(

        Field::make( 'complex', 'code_catalog_photo', 'Фото' )
            ->add_fields('serf', 'Фото', array(
                    Field::make('image', 'code_catalog_photo_item', 'Фото')
                        ->set_value_type( 'url' ),
                )
            ),


        Field::make('textarea', 'code_catalog_description', 'Комплектация')->set_width(100)->help_text('Что содержит, из чего состоит'),
        Field::make('text', 'code_catalog_price', 'Цена')->set_width(50)->help_text('от ## $'),
        Field::make('text', 'code_catalog_time', 'Срок изготовления')->set_width(50)->help_text('от ## дней'),



    ));
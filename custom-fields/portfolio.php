<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;



Container::make( 'post_meta', 'Дополнительные параметры')
    ->show_on_post_type(array('portfolio'))
    ->add_fields(array(

        Field::make( 'complex', 'code_portfolio_photo', 'Фото' )
            ->add_fields('serf', 'Фото', array(
                    Field::make('image', 'code_portfolio_photo_item', 'Фото')
                        ->set_value_type( 'url' ),
                )
            )->help_text( 'Фото проекта' ),

        Field::make('textarea', 'code_portfolio_description', 'Особенности')->set_width(100)->help_text('Что содержит, из чего состоит'),
        Field::make('text', 'code_portfolio_price', 'Цена')->set_width(50)->help_text('от ## $'),
        Field::make('text', 'code_portfolio_time', 'Срок изготовления')->set_width(50)->help_text('от ## дней'),



    ));
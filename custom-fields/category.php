<?php


use Carbon_Fields\Container;
use Carbon_Fields\Field;


Container::make( 'term_meta', 'Настройки для категории')
    ->show_on_taxonomy('categories')
    ->add_fields(array(
        Field::make('text', 'code_category_name', 'Заголовок на баннере')->set_width(100)->help_text('Заголовок на баннере компании'),
        Field::make('text', 'code_category_name_2', 'Подзаголовок на баннере')->set_width(100)->help_text('Подзаголовок на баннере компании'),

        Field::make('text', 'code_category_osob1_1', 'Особенность 1 заголовок')->set_width(100),
        Field::make('text', 'code_category_osob1_2', 'Особенность 1 подзаголовок')->set_width(100),
        Field::make('text', 'code_category_osob1_3', 'Особенность 1 описание')->set_width(100),

        Field::make('text', 'code_category_osob2_1', 'Особенность 2 заголовок')->set_width(100),
        Field::make('text', 'code_category_osob2_2', 'Особенность 2 подзаголовок')->set_width(100),
        Field::make('text', 'code_category_osob2_3', 'Особенность 2 описание')->set_width(100),

        Field::make('text', 'code_category_osob3_1', 'Особенность 3 заголовок')->set_width(100),
        Field::make('text', 'code_category_osob3_2', 'Особенность 3 подзаголовок')->set_width(100),
        Field::make('text', 'code_category_osob3_3', 'Особенность 3 описание')->set_width(100),

        Field::make('text', 'code_category_osob4_1', 'Особенность 4 заголовок')->set_width(100),
        Field::make('text', 'code_category_osob4_2', 'Особенность 4 подзаголовок')->set_width(100),
        Field::make('text', 'code_category_osob4_3', 'Особенность 4 описание')->set_width(100),

        Field::make('image', 'code_category_osob', 'Картинка в описании')->set_width(100)->set_value_type( 'url' )->help_text('Подзаголовок на баннере компании'),

        Field::make('image', 'code_category_texture_1', 'Текстура в описании')->set_width(100)->set_value_type( 'url' )->help_text('262x288'),
        Field::make('image', 'code_category_texture_2', 'Текстура в товарах')->set_width(100)->set_value_type( 'url' )->help_text('237x494'),


//        Слайдер на баннере

        Field::make( 'complex', 'code_category_slider', 'Слайдер на баннере' )
               ->add_fields('serf', 'Слайд', array(
                       Field::make('image', 'code_category_slider_img', 'Фото')->set_value_type( 'url' ),
                       Field::make('text', 'code_category_slider_name', 'Заголовок'),
                       Field::make('text', 'code_category_slider_price', 'Цена')->help_text('от ###'),
                       Field::make('text', 'code_category_slider_des', 'Сроки')->help_text('за ### дней'),
                       Field::make('text', 'code_category_slider_href', 'Ссылка на кнопке'),
                   )),

    ));

<?php
require_once 'helpers/RenderBlock.php';
## Carbon Fields
add_action( 'carbon_fields_register_fields', 'crb_register_custom_fields' ); // Для версии 2.0 и выше
function crb_register_custom_fields() {
    // путь к пользовательскому файлу определения поля (полей), измените под себя
    require_once __DIR__ . '/custom-fields/category.php';
    require_once __DIR__ . '/custom-fields/catalog.php';
    require_once __DIR__ . '/custom-fields/portfolio.php';
}
## end Carbon
## Расширение возможностей WP для новой версии
add_theme_support('title-tag');
##
## Постраничная навигация на сайте
function wp_corenavi()
{
    global $wp_query;
    $pages = '';
    $max = $wp_query->max_num_pages;
    if (!$current = get_query_var('paged')) $current = 1;
    $a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
    $a['total'] = $max;
    $a['current'] = $current;
    $total = 1; //1 - выводить текст "Страница N из N", 0 - не выводить
    $a['mid_size'] = 3; //сколько ссылок показывать слева и справа от текущей
    $a['end_size'] = 1; //сколько ссылок показывать в начале и в конце
    $a['prev_text'] = '&laquo;'; //текст ссылки "Предыдущая страница"
    $a['next_text'] = '&raquo;'; //текст ссылки "Следующая страница"
    if ($max > 1) echo '<div class="pagination">';
    echo $pages . paginate_links($a);
    if ($max > 1) echo '</div>';
}

## end
## Функция красивого вывода информации
if (!function_exists('dump')) {
    function dump($in = null)
    {
        echo '<' . 'pre style="margin-left:0px; margin-right:0px; padding:10px; border:solid 1px black; background-color:ghostwhite; color:black; text-align:left;">';
        foreach (func_get_args() as $var) {
            echo "\n";
            if (is_string($var)) echo "$var\n";
            else                  var_dump($var);
        }
        echo '</' . 'pre>' . "\n";
        return $in;
    }
}
##
## Удаление файлов license.txt и readme.html для защиты
if (is_admin() && !defined('DOING_AJAX')) {
    $license_file = ABSPATH . '/license.txt';
    $readme_file = ABSPATH . '/readme.html';
    if (file_exists($license_file) && current_user_can('manage_options')) {
        $deleted = unlink($license_file) && unlink($readme_file);
        if (!$deleted)
            $GLOBALS['readmedel'] = 'Не удалось удалить файлы: license.txt и readme.html из папки `' . ABSPATH . '`. Удалите их вручную!';
        else
            $GLOBALS['readmedel'] = 'Файлы: license.txt и readme.html удалены из из папки `' . ABSPATH . '`.';
        add_action('admin_notices', function () {
            echo '<div class="error is-dismissible"><p>' . $GLOBALS['readmedel'] . '</p></div>';
        });
    }
}
##
## Добавление стилей в админку
add_action('admin_head', 'custom_colors');
function custom_colors()
{
    echo '<style type="text/css">
 #menu-posts-catalog > a{ background:#e43030; } 
 #menu-posts-portfolio > a{ background:#e4b800; }
 </style>';
}
##

## Создание своих произвольных типов постов (Каталог)
function register_new_posts_type_catalog() {
    $labels = array(
        'name' => __( 'Каталог', 'text-domain' ),//Основное название типа записей
        'singular_name' => __( 'Каталог', 'text-domain' ),//Название для одной записи данного вида
        'add_new' => _x( 'Добавить продукт', 'text-domain', 'text-domain' ),//Текст для добавления новой записи
        'add_new_item' => __( 'Добавить продукт', 'text-domain' ),//Текст для добавления нового поста
        'edit_item' => __( 'Редактировать продукт', 'text-domain' ),//Текст для редактирования записи
        'new_item' => __( 'Новый продукт', 'text-domain' ),//Текст новой записи
        'view_item' => __( 'Просмотреть продукт', 'text-domain' ),//Текст для просмотра записи
        'search_items' => __( 'Найти продукт', 'text-domain' ),//Текст для кнопки поиска
        'not_found' => __( 'Продуктов не найдено', 'text-domain' ),//Текст, если в результате поиска не была найдена ни одна запись
        'menu_name' => __( 'Продукты', 'text-domain' ),//Текст пункта меню
    );
    $args = array(
        'labels' => $labels,//Массив, описанный выше
        'hierarchical' => false,//true - записи имеют древовидную структуру, false - записи имеют обычную структуру
        'description' => 'Каталог',//Описание типа записи
        'taxonomies' => array('catalogs'),//Таксономии, с которыми нужно связать этот тип записей
        'public' => true,//true - публичный тип записей, false - не публичный тип записей
        'show_ui' => true,//Создавать ли логику управления данным типом записи в админ-панели
        'show_in_menu' => true,//Показывать ли тип записи в меню админ-панели
        'show_in_admin_bar' => true,//Делает тип записи доступным из меню
        'menu_position' => 4,//Позиция расположения пункта меню в админ-панели
        'menu_icon' => 'dashicons-admin-multisite',//Иконка для пункта меню в админ-панели
        'show_in_nav_menus' => true,//Включить данный тип записи в навигацию, чтобы записи можно было выбирать в меню
        'publicly_queryable' => true,//true - запросы, относящиеся к этому типу записей будут работать на фронтенде сайта, false- нет
        'exclude_from_search' => false,//Исключить данный тип записи из поиска
//        'has_archive' => true,//Нужна ли поддержка страниц архивов
        'query_var' => true,//Включает/Выключает возможность запросов
        'can_export' => true,//Можно ли экспортировать данный тип записей
        'rewrite' => true,//true - использовать ЧПУ для этого типа записей, false - нет
        'capability_type' => 'post',//Строка которая будет маркером для установки прав для этого типа записи
        'supports' => array(//Поля необходимые при создании данного типа записей
            'title',//блок заголовка
            'editor',//блок ввода контента
            //'author',//возможность выбора автора поста
            'thumbnail',//блок миниатюры поста
            //'excerpt',//поле ввода краткого описания поста (цитаты)
            //'custom-fields',//произвольные поля
            //'trackbacks',//блок уведомлений
            //'comments',//блок комментариев поста
            //'revisions',//ревизии поста
            //'page-attributes',//атрибуты постоянных страниц
            //'post-formats'//форматы записей, при условии, что они включены в теме
        ),
        'show_in_rest' => true,
    );
    register_post_type( 'catalog', $args );
}
add_action( 'init', 'register_new_posts_type_catalog' );
## END каталог
## Регистрация таксономии для каталога (категории)
add_action( 'init', 'create_taxonomy' );
function create_taxonomy(){
    register_taxonomy( 'categories', [ 'catalog' ], [
        'label'                 => '', // определяется параметром $labels->name
        'labels'                => [
            'name'              => 'Категории',
            'singular_name'     => 'Категории',
            'search_items'      => 'Поиск по категориям',
            'all_items'         => 'Все категории',
            'view_item '        => 'Просмотри категории',
            'parent_item'       => 'Родительская категория',
            'parent_item_colon' => 'Родительская категория:',
            'edit_item'         => 'Редактирование категории',
            'update_item'       => 'Обновить категорию',
            'add_new_item'      => 'Добавить новую категорию',
            'new_item_name'     => 'Название новой категории',
            'menu_name'         => 'Категории',
        ],
        'description'           => '', // описание таксономии
        'public'                => true,
        'hierarchical'          => true,
        'rewrite'               => true,
        //'query_var'             => $taxonomy, // название параметра запроса
        'capabilities'          => array(),
        'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
        'show_admin_column'     => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
        'show_in_rest'          => true, // добавить в REST API
        'rest_base'             => null, // $taxonomy
        // '_builtin'              => false,
        //'update_count_callback' => '_update_post_term_count',
    ] );
}
##
## Категории
## Создание своих произвольных типов постов (Портфолио)
function register_new_posts_type_portfolio() {
    $labels = array(
        'name' => __( 'Проекты', 'text-domain' ),//Основное название типа записей
        'singular_name' => __( 'Проекты', 'text-domain' ),//Название для одной записи данного вида
        'add_new' => _x( 'Добавить проект', 'text-domain', 'text-domain' ),//Текст для добавления новой записи
        'add_new_item' => __( 'Добавить проект', 'text-domain' ),//Текст для добавления нового поста
        'edit_item' => __( 'Редактировать проект', 'text-domain' ),//Текст для редактирования записи
        'new_item' => __( 'Новый проект', 'text-domain' ),//Текст новой записи
        'view_item' => __( 'Просмотреть проект', 'text-domain' ),//Текст для просмотра записи
        'search_items' => __( 'Найти проект', 'text-domain' ),//Текст для кнопки поиска
        'not_found' => __( 'Проектов не найдено', 'text-domain' ),//Текст, если в результате поиска не была найдена ни одна запись
        'menu_name' => __( 'Проекты', 'text-domain' ),//Текст пункта меню
    );
    $args = array(
        'labels' => $labels,//Массив, описанный выше
        'hierarchical' => false,//true - записи имеют древовидную структуру, false - записи имеют обычную структуру
        'description' => 'Проекты',//Описание типа записи
        'taxonomies' => array('portfolios'),//Таксономии, с которыми нужно связать этот тип записей
        'public' => true,//true - публичный тип записей, false - не публичный тип записей
        'show_ui' => true,//Создавать ли логику управления данным типом записи в админ-панели
        'show_in_menu' => true,//Показывать ли тип записи в меню админ-панели
        'show_in_admin_bar' => true,//Делает тип записи доступным из меню
        'menu_position' => 5,//Позиция расположения пункта меню в админ-панели
        'menu_icon' => 'dashicons-admin-network',//Иконка для пункта меню в админ-панели
        'show_in_nav_menus' => true,//Включить данный тип записи в навигацию, чтобы записи можно было выбирать в меню
        'publicly_queryable' => true,//true - запросы, относящиеся к этому типу записей будут работать на фронтенде сайта, false- нет
        'exclude_from_search' => false,//Исключить данный тип записи из поиска
//        'has_archive' => true,//Нужна ли поддержка страниц архивов
        'query_var' => true,//Включает/Выключает возможность запросов
        'can_export' => true,//Можно ли экспортировать данный тип записей
        'rewrite' => true,//true - использовать ЧПУ для этого типа записей, false - нет
        'capability_type' => 'post',//Строка которая будет маркером для установки прав для этого типа записи
        'supports' => array(//Поля необходимые при создании данного типа записей
            'title',//блок заголовка
            'editor',//блок ввода контента
            //'author',//возможность выбора автора поста
            'thumbnail',//блок миниатюры поста
            //'excerpt',//поле ввода краткого описания поста (цитаты)
            //'custom-fields',//произвольные поля
            //'trackbacks',//блок уведомлений
            //'comments',//блок комментариев поста
            //'revisions',//ревизии поста
            //'page-attributes',//атрибуты постоянных страниц
            //'post-formats'//форматы записей, при условии, что они включены в теме
        ),
        'show_in_rest' => true,
    );
    register_post_type( 'portfolio', $args );
}
add_action( 'init', 'register_new_posts_type_portfolio' );
## END каталог

if (function_exists('add_theme_support')) {
  add_theme_support('menus');
}

function register_new_posts_type_calculator() {
  $labels = array(
    'name' => __( 'Калькулятор', 'text-domain' ),//Основное название типа записей
    'singular_name' => __( 'Калькулятор', 'text-domain' ),//Название для одной записи данного вида
    'add_new' => _x( 'Добавить Калькулятор', 'text-domain', 'text-domain' ),//Текст для добавления новой записи
    'add_new_item' => __( 'Добавить Калькулятор', 'text-domain' ),//Текст для добавления нового поста
    'edit_item' => __( 'Редактировать Калькулятор', 'text-domain' ),//Текст для редактирования записи
    'new_item' => __( 'Новый Калькулятор', 'text-domain' ),//Текст новой записи
    'view_item' => __( 'Просмотреть Калькулятор', 'text-domain' ),//Текст для просмотра записи
    'search_items' => __( 'Найти Калькулятор', 'text-domain' ),//Текст для кнопки поиска
    'not_found' => __( 'Калькулятор не найдено', 'text-domain' ),//Текст, если в результате поиска не была найдена ни одна запись
    'menu_name' => __( 'Калькулятор', 'text-domain' ),//Текст пункта меню
  );
  $args = array(
    'labels' => $labels,//Массив, описанный выше
    'hierarchical' => false,//true - записи имеют древовидную структуру, false - записи имеют обычную структуру
    'description' => 'Калькулятор',//Описание типа записи
    'taxonomies' => array('portfolios'),//Таксономии, с которыми нужно связать этот тип записей
    'public' => true,//true - публичный тип записей, false - не публичный тип записей
    'show_ui' => true,//Создавать ли логику управления данным типом записи в админ-панели
    'show_in_menu' => true,//Показывать ли тип записи в меню админ-панели
    'show_in_admin_bar' => true,//Делает тип записи доступным из меню
    'menu_position' => 5,//Позиция расположения пункта меню в админ-панели
    'menu_icon' => 'dashicons-admin-network',//Иконка для пункта меню в админ-панели
    'show_in_nav_menus' => true,//Включить данный тип записи в навигацию, чтобы записи можно было выбирать в меню
    'publicly_queryable' => true,//true - запросы, относящиеся к этому типу записей будут работать на фронтенде сайта, false- нет
    'exclude_from_search' => false,//Исключить данный тип записи из поиска
//        'has_archive' => true,//Нужна ли поддержка страниц архивов
    'query_var' => true,//Включает/Выключает возможность запросов
    'can_export' => true,//Можно ли экспортировать данный тип записей
    'rewrite' => true,//true - использовать ЧПУ для этого типа записей, false - нет
    'capability_type' => 'post',//Строка которая будет маркером для установки прав для этого типа записи
    'supports' => array(//Поля необходимые при создании данного типа записей
      'title',//блок заголовка
      'editor',//блок ввода контента
      //'author',//возможность выбора автора поста
      'thumbnail',//блок миниатюры поста
      //'excerpt',//поле ввода краткого описания поста (цитаты)
      //'custom-fields',//произвольные поля
      //'trackbacks',//блок уведомлений
      //'comments',//блок комментариев поста
      //'revisions',//ревизии поста
      //'page-attributes',//атрибуты постоянных страниц
      //'post-formats'//форматы записей, при условии, что они включены в теме
    ),
    'show_in_rest' => true,
  );
  register_post_type( 'calculator', $args );
}
add_action( 'init', 'register_new_posts_type_calculator' );


add_action('after_setup_theme', function () {


  register_nav_menus([
    'header_menu' => 'Меню в шапке',
  ]);

  add_theme_support(
    'custom-logo',
    array(
      'height'      => 500,
      'width'       => 500,
      'flex-height' => true,
    )
  );
});

function globSearch($pattern, $flags = 0)
{
    $files = glob($pattern, $flags);
    foreach (glob(dirname($pattern) . '/*', GLOB_ONLYDIR | GLOB_NOSORT) as $dir)
        $files = array_merge($files, globSearch($dir . '/' . basename($pattern), $flags));
    return $files;
}

function wood_scripts_styles()
{
    $path = get_template_directory();
    $filesCss = globSearch($path . "/dist/*.css");
    $filesJs = globSearch($path . "/dist/*.js");

    foreach ($filesCss as $file) {
        $filePath = str_replace($path, '', $file);
        $fileName = explode('/', $filePath);
        $fileName = end($fileName);
        $fileName = str_replace('.css', ' ', $fileName);
        wp_register_style(trim($fileName),get_template_directory_uri() . $filePath, array(), '1.2', 'screen');
        wp_enqueue_style(trim($fileName));
    }

    foreach ($filesJs as $file) {
        $filePath = str_replace($path, '', $file);
        $fileName = explode('/', $filePath);
        $fileName = end($fileName);
        $fileName = str_replace('.js', ' ', $fileName);
        wp_enqueue_script(trim($fileName),get_template_directory_uri() . $filePath, array(), '1.0', true);
    }

    wp_enqueue_script('masonry', get_template_directory_uri() . '/js/masonry.pkgd.min.js', array(), '1.0', true);
    wp_enqueue_script('swiper_js', get_template_directory_uri() . '/js/swiper.js', array(), '1.0', true);
    wp_enqueue_script('mask', get_template_directory_uri() . '/js/jquery.mask.js', array(), '1.0', true);
    wp_enqueue_script('fancy', get_template_directory_uri() . '/js/fancybox.js', array(), '1.0', true);
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), '1.0', true);
    wp_localize_script('main', 'ajax', [
        'ajaxurl' => admin_url('admin-ajax.php'),
    ]);
}

add_action('wp_enqueue_scripts', 'wood_scripts_styles', 1);

add_action('acf/init', 'my_register_blocks');
function my_register_blocks()
{
    if (function_exists('acf_register_block_type')) {
        $path = get_template_directory();
        $filesPhp = globSearch($path . "/modules/*.php");

        foreach ($filesPhp as $file) {
            $filePath = str_replace($path, '', $file);
            $fileName = explode('/', $filePath);
            $fileName = end($fileName);
            $fileName = str_replace('.php', '', $fileName);
            $file_headers = get_file_data(__DIR__ . $filePath, [
                'title' => 'Title',
                'description' => 'Description',
                'category' => 'Category',
                'icon' => 'Icon',
                'keywords' => 'Keywords',
                'mode' => 'Mode',
                'align' => 'Align',
                'post_types' => 'PostTypes',
                'supports_align' => 'SupportsAlign',
                'supports_anchor' => 'SupportsAnchor',
                'supports_mode' => 'SupportsMode',
                'supports_jsx' => 'SupportsInnerBlocks',
                'supports_align_text' => 'SupportsAlignText',
                'supports_align_content' => 'SupportsAlignContent',
                'supports_multiple' => 'SupportsMultiple',
                'enqueue_style'     => 'EnqueueStyle',
                'enqueue_script'    => 'EnqueueScript',
                'enqueue_assets'    => 'EnqueueAssets',
            ]);

            acf_register_block_type(array(
                'name' => $fileName,
                'title' => __($file_headers['title']),
                'mode' => __($file_headers['mode']),
                'render_callback' => 'my_acf_block_render_callback',
                'category' => 'formatting',
            ));
        }
    }
}

function my_acf_block_render_callback($block)
{
    $slug = str_replace('acf/', '', $block['name']);
    if (file_exists(get_theme_file_path("modules/" . $slug . '/' . $slug . ".php"))) {
        include(get_theme_file_path("modules/" . $slug . '/' . $slug . ".php"));
    }
}
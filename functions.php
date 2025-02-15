<?php
/*
 * @Author: iowen
 * @Author URI: https://www.iowen.cn/
 * @Date: 2023-08-27 16:20:41
 * @LastEditors: iowen
 * @LastEditTime: 2024-01-22 23:24:54
 * @FilePath: \onenavsub\functions.php
 * @Description: 
*/

/**
 * 子主题版本号
 */
define ('SUBVERSION', wp_get_theme()->get('Version') );


/**
 * 加载子主题函数
 * 代码可写到core目录下的php文件中
 */
$functions = array(
    // core文件里增加了什么文件就填文件名称在下面
    'myinc',
);
foreach ($functions as $function) {
    $path = 'core/' . $function . '.php';
    require get_theme_file_path($path);
}


/**
 * 加载前台资源
 * 
 * @return void
 */
function io_my_sub_scripts(){
    // 改了什么静态资源就启用对应注释
    //wp_enqueue_style('sub-css', get_theme_file_uri('assets/css/sub-style.css'), array(), SUBVERSION);

    //wp_enqueue_script('sub-js',  get_theme_file_uri('assets/js/sub-app.js') , array('jquery'), SUBVERSION, true);
}
add_action( 'wp_enqueue_scripts', 'io_my_sub_scripts', 10 );

<?php
/**
 * Created by PhpStorm.
 * User: yyaoz
 * Date: 2018/2/1
 * Time: 21:17
 */
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}
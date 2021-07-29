<?php
/**
 * Created by PhpStorm.
 * User: WILLY
 * Date: 5/2/2019
 * Time: 21:33
 */
class  Request {

    public static function uri() {
        return trim(
            parse_url($_SERVER["REQUEST_URI"],PHP_URL_PATH ),
            '/' );
    }

    public static function method() {
        return $_SERVER["REQUEST_METHOD"];
    }
}
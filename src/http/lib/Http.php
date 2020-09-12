<?php
namespace ifbiu\http;

/**
 * HTTP请求操作类
 * Class Http
 * @package ifbiu\http
 */

class Http
{
    /**
     * GET请求类
     * @param $url
     * @return bool|string
     */
    public static function requertByGet($url)
    {
        return file_get_contents($url);
    }
}
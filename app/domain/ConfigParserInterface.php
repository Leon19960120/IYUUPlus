<?php
namespace app\domain;

/**
 * 配置解析接口
 * Interface ConfigParserInterface
 * @package app\domain
 */
interface ConfigParserInterface
{
    public static function configParser(array $uuid):array;
}
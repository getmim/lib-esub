<?php
/**
 * Subscriber
 * @package lib-esub
 * @version 0.0.1
 */

namespace LibEsub\Library;

class Subscriber
{

    private static $handler;

    static function __callStatic($name, $args) {
        if(!self::$handler){
            $hdr = \Mim::$app->config->libEsub;
            if(!isset($hdr->handler))
                trigger_error('No email subscriber handler installed');
            self::$handler = new $hdr->handler;
        }

        return call_user_func_array([self::$handler, $name], $args);
    }
}
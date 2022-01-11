<?php

namespace Infotech\ImgBB;


class ImgBBAPI
{
    protected static function resolveFacade($name)
    {
        return app()[$name];
    }

    public static function __callStatic($method, $arguments)
    {
        return (self::resolveFacade('ImgBBAPI'))->$method(...$arguments);
    }
}

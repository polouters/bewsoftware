<?php

/**
 * Created by PhpStorm.
 * User: Mikel
 * Date: 3/2/16
 * Time: 10:37
 */
class url
{
    private static $raiz = "http://192.168.33.10/bewsoftware";

    /**
     * @return string
     */
    public static function getRaiz()
    {
        return self::$raiz;
    }


}

?>
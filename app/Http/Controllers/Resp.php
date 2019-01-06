<?php
/**
 * Created by PhpStorm.
 * User: Moham
 * Date: 11/23/2018
 * Time: 4:06 PM
 */

namespace App\Http\Controllers;


class Resp
{
    public static function success($data, $msg = "L'operazione e' avvenuta con successo",  $httpCode = 200)
    {
        http_response_code($httpCode);
        return [
            'msg' => $msg,
            'data' => $data,
            'code' => $httpCode
        ];
    }


    public static function error($data, $msg = "L'operazione e' avvenuta",  $httpCode = 404)
    {
        http_response_code($httpCode);
        return [
            'msg' => $msg,
            'data' => $data,
            'code' => $httpCode
        ];
    }
}

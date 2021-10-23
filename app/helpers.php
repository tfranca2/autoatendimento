<?php

if (!function_exists('onlyNumbers')) {
    function onlyNumbers($str)
    {
        return preg_replace('/\D/', '', $str);
    }
}

if (!function_exists('formatDecimalToDb')) {
    function formatDecimalToDb($valor, $precision = 2)
    {
        if ($valor) {
            if (strstr($valor, ',')) {
                $v = explode(',', $valor);
                $val = 0;
                if ($v[0])
                    $val = onlyNumbers($v[0]);
                if (isset($v[1]))
                    $val .= '.' . onlyNumbers($v[1]);

                return floatval(number_format($val, $precision, '.', ''));
            } else {
                return floatval(number_format($valor, $precision, '.', ''));
            }
        }
        return 0.00;
    }
}

if (!function_exists('formatDecimalToView')) {
    function formatDecimalToView($valor, $precision = 2)
    {
        if ($valor) {
            if (strstr($valor, ',')) {
                $v = explode(',', $valor);
                $val = 0;
                if ($v[0])
                    $val = onlyNumbers($v[0]);
                if (isset($v[1]))
                    $val .= '.' . onlyNumbers($v[1]);

                return number_format($val, $precision, ',', '.');
            } else {
                return number_format($valor, $precision, ',', '.');
            }
        }
        return '0,00';
    }
}

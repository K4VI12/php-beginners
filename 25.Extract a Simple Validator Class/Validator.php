<?php


class Validator
{
    //pure function
    //validate username and password by this function
    public static function string($value, $min = 1, $max = INF)
    {

        $value = trim($value);

        return strlen($value) >= $min && strlen($value) <= $max;
    }

    //validate email by this
    public static function email($value) 
    
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}

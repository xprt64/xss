<?php
////////////////////////////////////////////////////////////////////////////////
// Copyright (c) 2016 Constantin Galbenu <gica.galbenu@gmail.com>              /
////////////////////////////////////////////////////////////////////////////////

namespace Gica\Xss;


class HtmlEscape
{
    public static function xss($str)
    {
        return htmlentities($str, ENT_QUOTES, 'utf-8');
    }
        
    public static function htmlentities($str)
    {
        return htmlentities($str, ENT_QUOTES, 'utf-8');
    }
}

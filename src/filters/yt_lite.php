<?php

namespace andyp\pagebuilder\yt_lite\filters;

class yt_lite
{


    public function __construct()
    {
        add_filter('pagebuilder_rawcode', [$this, 'filter_code'], 10, 1);
    }


    public function filter_code($organism)
    {

        $code = $organism['raw_code'];

        return $code;
    }

}
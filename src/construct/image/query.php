<?php

namespace andyp\pagebuilder\yt_lite\construct\image;

class query
{
    private $config;

    private $result;

    public function set_config($config)
    {
        $this->config = $config;
    }

    public function run()
    {
        if (!isset($this->config['post'])){ return; }
        $this->result = get_the_post_thumbnail_url($this->config['post']['post']->ID);
    }

    public function get_result()
    {   
        return $this->result;
    }
}

<?php

namespace andyp\pagebuilder\yt_lite\construct\image;

class url
{
    private $config;

    private $result;

    public function set_config($config)
    {
        $this->config = $config;
    }

    public function run()
    {
        $this->result = $this->config['image_url'];
    }

    public function get_result()
    {
        return $this->result;
    }
}

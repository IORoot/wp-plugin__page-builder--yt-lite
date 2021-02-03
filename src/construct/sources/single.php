<?php

namespace andyp\pagebuilder\yt_lite\construct\sources;

class single
{

    private $config;

    private $result;

    public function set_config($config)
    {
        $this->config = $config;
    }

    public function run()
    {
        $this->result = $this->config['video_id'];
    }

    public function get_result()
    {
        return $this->result;
    }

}
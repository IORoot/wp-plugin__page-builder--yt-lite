<?php

namespace andyp\pagebuilder\yt_lite\construct\sources;

class random
{
    
    private $config;

    private $result;

    public function set_config($config)
    {
        $this->config = $config;
    }

    public function run()
    {
        $list = $this->config['random_id'];
        $count = count($list);
        $key = rand(0, $count - 1);
        $this->result = $list[$key]['random_video_id'];
    }

    public function get_result()
    {
        return $this->result;
    }

}


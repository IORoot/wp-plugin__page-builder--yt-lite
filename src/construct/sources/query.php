<?php

namespace andyp\pagebuilder\yt_lite\construct\sources;

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
        $this->run_query();
        $this->first();
        $this->random();
    }

    public function get_result()
    {
        return $this->result;
    }

    private function run_query()
    {
        if (empty($this->config['query'])){ return; }
        $post_query = $this->config['query'];
        $args = eval("return $post_query;");
        $this->posts = get_posts($args);
    }


    private function first()
    {
        if (false == $this->config['result_type']){ return; }
        if (empty($this->posts)){ return; }

        $field = $this->config['video_id_field'];
        $meta = get_post_meta($this->posts[0]->ID);
        $this->result = $meta[$field][0];
        
    }

    private function random()
    {
        if (true == $this->config['result_type']){ return; }
        if (empty($this->posts)){ return; }

        $field = $this->config['video_id_field'];
        $count = count($this->posts);
        $key = rand(0, $count - 1);
        $meta = get_post_meta($this->posts[$key]->ID);
        $this->result = $meta[$field][0];
    }

}
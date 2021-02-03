<?php

namespace andyp\pagebuilder\yt_lite\construct;

class yt_lite
{

    private $organism;

    public function __construct()
    {
        add_filter('pagebuilder_yt_lite', [$this, 'construct_component'], 10, 1);
    }


    public function construct_component($organism)
    {
        $this->organism = $organism;

        $image = $this->image();

        $code =  '<lite-youtube ';
        $code .= 'class="'.$this->organism['classes'].'" ';
        $code .= 'videoid="'.$this->source().'" ';
        $code .= 'playlabel="'.$this->organism['play_label'].'" ';
        $code .= 'params="'.$this->organism['params'].'" ';
        $code .= $image;
        $code .= '>';
        $code .= $this->html();
        $code .= '</lite-youtube>';

        return $code;
    }


    private function image()
    {
        $image = 'style="background-image: url(\'';

        
        if (!empty($this->organism['image'])){
            $image .= $this->organism['image']['url'] . '\');"';
            return $image;
        }

        if (!empty($this->organism['image_url'])){
            $image .= $this->organism['image_url'] . '\');"';
            return $image;
        }

    }


    private function source()
    {
        $source_type = $this->organism['input_type'];
        $namespaced = '\\andyp\\pagebuilder\\yt_lite\\construct\\sources\\' . $source_type;
        $this->source = new $namespaced;
        $this->source->set_config($this->organism);
        $this->source->run();
        return $this->source->get_result();
    }

    private function html()
    {
        if ('query' == $this->organism['input_type']){
            $post = $this->source->get_post();
            return apply_filters('yt_lite_html_filter', $this->organism['html'], $post);
        }
        
        return $this->organism['html'];
    }

}
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

        $code =  '<lite-youtube ';
        $code .= 'class="'.$this->organism['classes'].'" ';
        $code .= 'videoid="'.$this->source().'" ';
        $code .= 'playlabel="'.$this->organism['play_label'].'" ';
        $code .= 'params="'.$this->organism['params'].'" ';
        $code .= $this->image();
        $code .= '>';
        $code .= $this->html();
        $code .= '</lite-youtube>';

        return $code;
    }




    private function source()
    {
        $source_type = $this->organism['input_type'];
        $namespaced = '\\andyp\\pagebuilder\\yt_lite\\construct\\sources\\' . $source_type;
        $this->source = new $namespaced;
        $this->source->set_config($this->organism);
        $this->source->run();

        if ('query' == $this->organism['input_type']) {
            $this->organism['post'] = $this->source->get_post();
        }

        return $this->source->get_result();
    }

    private function image()
    {

        $image_type = $this->organism['image_type'];
        $namespaced = '\\andyp\\pagebuilder\\yt_lite\\construct\\image\\' . $image_type;
        $this->image = new $namespaced;
        $this->image->set_config($this->organism);
        $this->image->run();

        $image = 'style="background-image: url(\'';
        $image .= $this->image->get_result();
        $image .= '\');"';
        
        return $image;
    }

    private function html()
    {
        if ('query' == $this->organism['input_type']){
            return apply_filters('yt_lite_html_filter', $this->organism['html'], $this->organism['post']);
        }
        
        return $this->organism['html'];
    }
    
}
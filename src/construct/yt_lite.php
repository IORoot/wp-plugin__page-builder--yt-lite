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
        $code .= 'videoid="'.$this->organism['video_id'].'" ';
        $code .= 'playlabel="'.$this->organism['play_label'].'" ';
        $code .= 'params="'.$this->organism['params'].'" ';
        $code .= $image;
        $code .= '>';
        $code .= $this->organism['html'];
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

}
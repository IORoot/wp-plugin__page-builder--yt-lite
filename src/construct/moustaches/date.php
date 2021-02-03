<?php

namespace andyp\pagebuilder\yt_lite\construct\moustaches;

class date
{

    public function __construct()
    {
        add_filter('yt_lite_html_filter', [$this,'callback'], 10, 2);
    }

    public function callback($html, $post)
    {
        $this->html = $html;
        $this->post = $post;

        $this->regex_moustaches();

        return $this->html;
    }


    private function regex_moustaches()
    {
        preg_match_all('/{{date:(.*)}}/', $this->html, $matches);

        if (empty($matches[0])){ return $this->html; }

        $date = new \DateTime($this->post['post']->post_date);

        foreach ($matches[1] as $key => $match)
        {
            $new_date = $date->format($match);
            $this->html = str_replace($matches[0][$key], $new_date, $this->html);
        }
    }

}
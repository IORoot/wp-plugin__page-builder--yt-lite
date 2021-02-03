<?php

namespace andyp\pagebuilder\yt_lite\construct\moustaches;

class post
{

    public function __construct()
    {
        add_filter('yt_lite_html_filter', [$this,'callback'], 20, 2);
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
        preg_match_all('/{{(.*)}}/', $this->html, $matches);

        foreach ($matches[1] as $key => $match)
        {
            if (property_exists($this->post['post'],$match) )
            {
                $value = $this->post['post']->$match;
                $this->html = str_replace($matches[0][$key], $value, $this->html);
                continue;
            }

            if (array_key_exists($match, $this->post['meta']) )
            {
                $value = $this->post['meta'][$match][0];
                $this->html = str_replace($matches[0][$key], $value, $this->html);
                continue;
            }
        }
    }

}
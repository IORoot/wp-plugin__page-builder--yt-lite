<?php

namespace andyp\pagebuilder\yt_lite;

class initialise
{

    public function __construct()
    {

        // ┌─────────────────────────────────────────────────────────────────────────┐
        // │                            Include Field Groups    	        	     │
        // └─────────────────────────────────────────────────────────────────────────┘
        require __DIR__.'/acf/acf_field_groups.php';

        // ┌─────────────────────────────────────────────────────────────────────────┐
        // │                Register filter for page builder to use.    		     │
        // └─────────────────────────────────────────────────────────────────────────┘
        new construct\yt_lite;

        // ┌─────────────────────────────────────────────────────────────────────────┐
        // │                Register filters for the HTML output.    		         │
        // └─────────────────────────────────────────────────────────────────────────┘
        new construct\moustaches\post;
        new construct\moustaches\date;
        
    }

}
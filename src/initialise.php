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
        // new filters\filter_module;
        
    }

}
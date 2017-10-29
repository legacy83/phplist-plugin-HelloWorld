<?php

class phplistHelloWorld extends phplistPlugin
{
    public $name = 'Hello World';
    public $description = 'Just a sample phplist plugin implementation';
    public $version = '0.1.0';

    public $settings = array(
        "phplistHelloWorld_global_message" => array(
            'value' => 'Hello, World!',
            'description' => 'A default global message',
            'type' => 'text',
            'category' => 'general',
        ),
    );

    public $pageTitles = array(
        'main' => 'Hello World',
        'page01' => 'Hello World - Page With Form',
        'page02' => 'Hello World - Using The UIPanel',
        'page03' => 'Hello World - WebblerListing',
        'page04' => 'Hello World - Simple Paging',
        'page05' => 'Hello World - Using Links',
        'page06' => 'Hello World - Using JavaScript',
    );

    public $topMenuLinks = array(
        'main' => array( 'category' => 'system' ),
    );

    function __construct()
    {
        $this->coderoot = dirname( __FILE__ ) . '/phplistHelloWorld/';
        parent::__construct();
    }

    public function dependencyCheck()
    {
        return array(
            'phpList version' => VERSION == 'dev',
        );
    }

    function adminMenu()
    {
        return $this->pageTitles;
    }
}

<?php

class phplistHelloWorld extends phplistPlugin
{
    function __construct()
    {
        $this->coderoot = dirname( __FILE__ ) . 'phplistHelloWorld/';
        parent::__construct();
    }
}

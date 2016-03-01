<?php
/*
config.php

Provides a place to put all configuration info for our app

*/

//THIS_PAGE is the name of the current page
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;
//die;


switch(THIS_PAGE)
{
    case "index.php": 
        $title = "Home page title";
        $pageID = "Home Page";
        break;

    case "template.php": 
        $title = "Template page title";
        $pageID = "Template Page";
        break;
        
    default: 
        $title = THIS_PAGE;
        $pageID = "";
        

}
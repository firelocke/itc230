<?php

/*
portal-config.php
Used to store all of our WEB120 configuration information
*/



//prevents data from being sent early
ob_start();



//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');



//echo basename($_SERVER['PHP_SELF']);
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;
//die;


switch(THIS_PAGE){

    case 'index.php':
        $title = "Kat Hunt | BIG";
//        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;
    
    case 'big01.php':
        $title = "Kat Hunt | Responsive vs Mobile";
//        $logo = 'fa-pencil-square-o';
        $PageID = 'Contact Sara';
    break;
        
    case 'big02.php':
        $title = "Kat Hunt | Galleries";
//        $logo = 'fa-pencil-square-o';
        $PageID = 'AIA';
    break;

    case 'big03.php':
        $title = "Kat Hunt | Flexbox";
//        $logo = 'fa-pencil-square-o';
        $PageID = 'AIA';
    break;

    case 'big04.php':
        $title = "Kat Hunt | Shopping Carts";
//        $logo = 'fa-pencil-square-o';
        $PageID = 'AIA';
    break;

        
    case 'error.php':
        $title = "Danger, Will Robinson!";
//        $logo = 'fa-pencil-square-o';
        $PageID = 'Error';
    break;
        
    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Welcome';
}
      

      
/*  Function to generate links and keep the highlight on the current page */
//place URL & labels in the array here for navigation:
        $nav1['index.php'] = "Welcome";
        $nav1['big01.php'] = "Responsive vs Mobile";
        $nav1['big02.php'] = "Galleries";
        $nav1['big03.php'] = "Flowchart";
        $nav1['big04.php'] = "Shopping Carts";
        $nav1['error.php'] = "Danger, Will Robinson!";
 
        
/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
    return $myReturn;   
}
?>
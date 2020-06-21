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
        $title = "J.S. Elliot";
//        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;
    
    case 'books.php':
        $title = "Books and Series";
//        $logo = 'fa-book';
        $PageID = 'Books';
    break;
        
    case 'contact.php':
        $title = "Contact J.S. Elliot";
//        $logo = 'fa-book';
        $PageID = 'Contact';
    break;
        
    case 'error.php':
        $title = "Page Not Found";
//        $logo = 'fa-bomb';
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
        $nav1['books.php'] = "Books and Series";
        $nav1['error.php'] = "Error";
 
        
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
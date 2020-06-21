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
        $title = "Kat Hunt | Web120";
//        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;
    
    case 'contactme.php':
        $title = "Kat Hunt | Contact";
//        $logo = 'fa-pencil-square-o';
        $PageID = 'Contact Sara';
    break;
        
    case 'aia.php':
        $title = "Kat Hunt | AIA";
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
        $nav1['big/index.php'] = "Big";
        $nav1['aia.php'] = "AIA";
        $nav1['flowchart.php'] = "Flowchart";
        $nav1['fp/index.php'] = "Final Project";
        $nav1['contactme.php'] = "Contact Kat";
 
        
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


 <!-- original menu text       
            <li><a href="index.php" class="selected">Welcome</a></li>
            <li><a href="big/index.php">Big</a></li>
            <li><a href="aia.php">AIA</a></li>
            <li><a href="flowchart.php">Flowchart</a></li>
            <li><a href="fp/index.php">Final Project</a></li>
            <li><a href="contactme.php">Contact Kat</a></li>
            <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
-->
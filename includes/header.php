<?php include 'portal-config.php'?>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex,nofollow" />
    <meta charset="utf-8">

    <title><?=$title?></title>
    <!-- Kat Hunt | Web120 -->
    
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@700&family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/nav.css">
<!--    <link rel="stylesheet" href="css/form.css"> -->
</head>
<body>
    <!-- // Intro -->
    <header>
        <div class="content-wrap"> <!--new content wrap div -->
                <img class="profile-img" src="images/designSq.jpg" alt="laptop">
                <img class="profile-img" src="images/authorEdge.png" alt="Kat Hunt">
                <img class="profile-img" src="images/typewriterSq.jpg" alt="typewriter">
            
                <h1>Kat Hunt</h1>
                <h2>Web120: Web Authoring II</h2>
                
                <nav>
                    <ul class="topnav" id="myTopnav">
                        <?=makeLinks($nav1)?>
                     
                        <!--
                        <li><a href="index.php" class="selected">Welcome</a></li>
                        <li><a href="big/index.php">Big</a></li>
                        <li><a href="aia.php">AIA</a></li>
                        <li><a href="flowchart.php">Flowchart</a></li>
                        <li><a href="fp/index.php">Final Project</a></li>
                        <li><a href="contactme.php">Contact Kat</a></li>
                        -->
                        <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
                    </ul>
                </nav>

        </div><!-- close content-wrap div -->
   </header> 
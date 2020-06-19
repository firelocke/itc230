<?php include "includes/header.php";?>

        <!-- Profile -->
        <section class="top-color">
            <div class="content-wrap"> <!-- new content wrap div -->
                
                <h2>Contact Us</h2>
                
                <?php
                
                include 'includes/big-contact.php'; #site keys & code here
                
                $toAddress = "example@example.com";  //place your/your client's email address here
                $toName = "BIG Webmaster"; //place your client's name here
                $website = "BIG";  //place NAME of your client's website
                
                echo loadContact('simple.php');#demonstrates a simple contact form
                //echo loadContact('multiple.php');#demonstrates multiple form elements
                ?>        
                
            </div> <!-- close content-wrap div -->
        </section>

        <!-- Second section -->
        <section class="mid-color">
            <div class="content-wrap"> <!-- new content wrap div -->
                <h3>We'd love to hear from you!</h3>

                <p></p>
                <!-- End of section details. -->
            </div> <!-- close content-wrap div -->
        </section>

<?php include 'includes/footer.php';?>
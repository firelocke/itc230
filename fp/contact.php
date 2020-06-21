<?php include "includes/header.php";?>
    
        <!-- Profile -->
        <section class="top-color">
            <div class="content-wrap"> <!-- new content wrap div -->
                
                <h2>Contact Me</h2>
                
                <?php
                
                include 'includes/fp-contact.php'; #site keys & code here
                
                $toAddress = "jselliot@example.com";  //place your/your client's email address here
                $toName = "J.S. Elliot"; //place your client's name here
                $website = "Books by J.S. Elliot";  //place NAME of your client's website
                
                echo loadContact('simple.php');#demonstrates a simple contact form
                //echo loadContact('multiple.php');#demonstrates multiple form elements
                ?>        
                
            </div> <!-- close content-wrap div -->
        </section>

        <!-- Hobbies -->
        <section class="mid-color">
            <div class="content-wrap"> <!-- new content wrap div -->
                <h2>I love hearing from people!</h2>
            </div> <!-- close content-wrap div -->
        </section>
    </main>
    <!-- END WRAPPER -->

<?php include 'includes/footer.php';?>
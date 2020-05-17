<!DOCTYPE html>
<html>
    <body>
    
<?php include "includes/header.php";?>
    
    <main> 
        <!-- Profile -->
        <section class="profile">
            <div class="content-wrap"> <!-- new content wrap div -->
                
                <h2>Contact Me</h2>
                
                <?php
                
                include 'includes/contact_include.php'; #site keys & code here
                
                $toAddress = "kendra.hunt@seattlecollges.edu";  //place your/your client's email address here
                $toName = "KK Grimm"; //place your client's name here
                $website = "Books by KK Grimm";  //place NAME of your client's website
                
                echo loadContact('simple.php');#demonstrates a simple contact form
                //echo loadContact('multiple.php');#demonstrates multiple form elements
                ?>        
                
            </div> <!-- close content-wrap div -->
        </section>

        <!-- Hobbies -->
        <section class="hobbies">
            <div class="content-wrap"> <!-- new content wrap div -->
                <h2>I love hearing from people!</h2>

                <p></p>
                <!-- End of hobbies details. -->
            </div> <!-- close content-wrap div -->
        </section>
    </main>
    <!-- END WRAPPER -->

<?php include 'includes/footer.php';?>
    
    </body>
</html>
    <!-- // Footer & contact info -->
    <footer>
        <div class="content-wrap"> <!--new content wrap div -->
            <h2>Let's Keep in Touch!</h2>
        
            <!-- Social media and contact links. Add or remove any networks. -->
            <div class="contact-info">
                <a href="contactme.php">Send an Email!</a>
                <a href="#" target="_blank">Twitter</a>
                <a href="#" target="_blank">LinkedIn</a>
                <a href="#" target="_blank">Facebook</a>
            </div>

            <p>&copy; 2020 - <?=date('Y')?> by Kat Hunt, all rights reserved ~       <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a>
        </div><!-- close content-wrap div -->
    </footer>
    
    <!-- JavaScript associated with the W3Schools.com Top Navigation Response Exercise -->
    <script>
    /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
        
        function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>
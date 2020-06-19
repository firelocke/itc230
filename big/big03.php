<?php include "includes/header.php";?>
    
        <!-- Profile -->
        <section class="top-color">
            <div class="content-wrap"> <!-- new content wrap div -->
                
                
                <h2>BIG Research 3 - Flexbox</h2>
                
                <p>Flexbox was created by Tab Atkins Jr, based on an unfinished concept originally released by Mozilla. In his own words:</p>
                
                <p><i>In the late aughts, Mozilla tried to formalize its XUL layout model as Flexbox. The earliest draft I know of is from 2009, but I think it started back in 2007. Nothing much came of this; WebKit partially implemented some of it, and even Firefox didn’t match its own spec, because things were woefully underspecified.</i></p>
                
                <p><i>Then in 2010 or so I joined the WG, and one of the first things I did was dust off Flexbox and fix everything. (Read: rewrite the entire goddam thing.) A year or two after that, Microsoft submitted its first draft of the Grid Layout spec, and I muscled my way in and took that over too (rewriting that whole thing as well).</i></p>

                <p><i>My goal in doing Flexbox and later Grid was to replace all the crazy float/table/inline-block/etc hacks that I’d had to master as a webdev. All that crap was (a) stupid, (b) hard to remember, and (c) limited in a million annoying ways, so I wanted to make a few well-done layout modules that solved the same problems in simple, easy-to-use, and complete ways. (<a href="https://medium.com/@spaceninja/what-is-flexbox-6aed968555ef">Vandehey</a>)</i></p>

                <p>Flexbox was originally created to replace more complicated HTML and CSS. The coding was limited and frustrating and pages were static and difficult to set up, especially when creating with the idea of cross-browser compatibility in mind. It was difficult to do basic things like vertically centering a block of content inside it’s parent or making all columns in a multiple column the same height even if they contain a different amount of content. Some workarounds could be done with floats and positioning, but it was a laborious process. (<a href="https://developer.mozilla.org/en-US/docs/Learn/CSS/CSS_layout/Flexbox">MDN contributors</a>)</p>

                <p>The main idea behind the flexbox layout is to give items the ability to alter width, height, and order to best accommodate the available space. A flex container will expand to fill all available space or shrink to prevent overflow, a feature that became especially important with the rise of various sized screens.</p>
                
                <p>But one of the more important features is that flexbox is direction-agnostic--that is, the system can order the elements left to right, right to left, top to bottom, or bottom to top. This gives amazing flexibility when resizing webpages, as well as working better with languages that are not read left to right. It also offers better support for large or complex applications, especially when it comes to stretching, shrinking, and other forms of resizing or rearranging of elements. (<a href="https://css-tricks.com/snippets/css/a-guide-to-flexbox/">Coyier</a>)</p>
                
                <p>Current Browser support for flexbox is excellent, encompassing all the most popular browsers including  Chrome, Opera, Firefox, Safari, and the latest versions of Internet Explorer. Older browsers can be more problematic, especially older IE browsers. The easiest way to handle these compatibility issues may be just to rely on graceful degradation. What this basically entails is that when a browser sees code it doesn’t understand, such as <b>display:flex</b>, it will ignore it entirely, defaulting to a standard, static layout.</p>
                
                <p>If that won’t work, you can provide a fallback float-based layout using tools such as Modernizr. Modernizr is a JavaScript library that evaluates the browser’s capabilities and adds a set of classes to the body element, which allows you to scope CSS based on feature support. You can also add a <b>.no-flexbox</b> class, which alerts older systems to use your fallback code. Another advantage to this approach is when the day comes that you can drop support for non-flexbox browsers, you can just delete the code.</p>
                
                <p>Flexbox comes with a clever set of defaults that make it easy to create complex layouts with relatively little code. It’s stable, easy-to-use, and well-supported, with countless online resources to help a user navigate the code, including MDN Webdocs, CSS-Flexbox, W3Schools, and even game sites like <a href="https://flexboxfroggy.com/">Flexbox Froggy</a> that make learning Flexbox fun. All in all, Flexbox is one of the most versatile and well supported tools in the website coder’s box.</p>
                
            </div> <!-- close content-wrap div -->
        </section>

        <!-- Bibliography -->
        <section class="mid-color">
            <div class="content-wrap"> <!-- new content wrap div -->
                <h2>Bibliography</h2>

                <p>Vandehey, Scott. “What IS Flexbox?” Medium, Medium, 3 Nov. 2016, medium.com/@spaceninja/what-is-flexbox-6aed968555ef.</p>

                <p>MDN contributors. “Flexbox.” MDN Web Docs, MDN Contributors, 29 Apr. 2020, developer.mozilla.org/en-US/docs/Learn/CSS/CSS_layout/Flexbox.</p>

                <p>Coyier, Chris. “A Complete Guide to Flexbox: CSS-Tricks.” CSS, 27 Apr. 2020, css-tricks.com/snippets/css/a-guide-to-flexbox/.</p>
                
                <!-- End of bibliography. -->
            </div> <!-- close content-wrap div -->
        </section>
    <!-- END WRAPPER -->

<?php include 'includes/footer.php';?>
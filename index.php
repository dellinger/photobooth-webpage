<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Freeze Frame Photobooth Rental </title>
    <link href="css/main.css" rel="stylesheet" />
    <link href="js/gumby/css/gumby.css" rel="stylesheet" />
    <link rel="stylesheet" href="js/nivo-slider/themes/default/default.css" type="text/css"
        media="screen" />
    <link rel="stylesheet" href="js/nivo-slider/nivo-slider.css" type="text/css" media="screen" />
    <link href="js/MovingBoxes-master/css/movingboxes.css" rel="stylesheet" />
    <script src="js/jquery-1.9.1.js"></script>
    <script src="js/modernizr2.6.2.js"></script>
    <script src="js/gumby/js/libs/gumby.js"></script>
    <script src="js/nivo-slider/jquery.nivo.slider.pack.js"></script>
    <script src="js/smooth_scroll_1.4.5.js"></script>
    <script src="js/MovingBoxes-master/js/jquery.movingboxes.js"></script>
    <script src="js/MovingBoxes-master/js/jquery.easing.1.2.js"></script>
    <script type="text/javascript">        /* Scroll Up Button */
        $(document).ready(function () {

            $(window).scroll(function () {
                if ($(this).scrollTop() > 100) {
                    $('.scrollup').fadeIn();
                } else {
                    $('.scrollup').fadeOut();
                }
            });

            $('.scrollup').click(function () {
                $("html, body").animate({ scrollTop: 0 }, 600);
                return false;
            });

            $('#eventSlider').movingBoxes({

                // **** Appearance ****
                // start with this panel
                startPanel: 1,
                // non-current panel size: 80% of panel size
                reducedSize: 0.8,
                // if true, slider height set to max panel height; 
                // if false, height will auto adjust.
                fixedHeight: false,

                // **** Behaviour ****
                // if true, movingBoxes will initialize, then animate into the
                // starting slide (if not the first slide)
                initAnimation: true,
                // if true, movingBoxes will force the animation to complete
                // immediately, if the user selects the next panel
                stopAnimation: false,
                // if true, hash tags are enabled
                hashTags: true,
                // if true, the panel will loop through the panels infinitely
                wrap: false,
                // if true, navigation links will be added
                buildNav: true,
                // function which returns the navigation text for each panel
                navFormatter: function (index, panel) {
                    return "&#9679;" // bullets
                },
                // anything other than "linear" or "swing" requires the easing plugin
                easing: 'swing',

                // **** Times ****
                // animation time in milliseconds
                speed: 500,
                // time to delay in milliseconds before MovingBoxes animates
                // to the selected panel
                delayBeforeAnimate: 0,

                // **** Selectors & classes ****
                // current panel class
                currentPanel: 'current',
                // added to the navigation, but the title attribute is blank unless
                // the link text-indent is negative
                tooltipClass: 'tooltip',
                // class added to arrows that are disabled (left arrow when on first
                // panel, right arrow on last panel)
                disabled: 'disabled',

                // **** Callbacks ****
                // e = event, slider = MovingBoxes Object, tar = current panel #
                // callback after the basic MovingBoxes structure has been built;
                // before "initialized"
                preinit: function (e, slider, tar) { },
                // callback when MovingBoxes has completed initialization
                initialized: function (e, slider, tar) { },
                // callback upon change panel initialization
                initChange: function (e, slider, tar) {
                    // alert( 'Changing panels to #' + tar );
                },
                // callback before any animation occurs
                beforeAnimation: function (e, slider, tar) { },
                // callback after animation completes
                completed: function (e, slider, tar) {
                    // get name from title
                    // var name = slider.$panels.eq(tar-1).find('h2').text().split(' ')[0]; 
                    // alert( "Now on " + name + "'s panel" );
                }

                // **** Deprecated options ****
                // overall width of movingBoxes
                // width: 300, // Deprecated, but still works in v2.2.2+
                // current panel width adjusted to 50% of overall width
                // panelWidth: 0.5, // Deprecated, but still works in v2.2.2+   
            });

        });
    </script>
    <script type="text/javascript">
        jQuery(window).load(function () {

            $("#slider").nivoSlider({
                effect: "fade",
                boxCols: 10,
                boxRows: 10,
                animSpeed: 600,
                pauseTime: 3000,
                startSlide: 0,
                directionNav: true,
                controlNav: true,
                controlNavThumbs: false,
                pauseOnHover: false,
                manualAdvance: false
            });
        });
    </script>
</head>
<body>
    <div class="container">
        <header>
            <div class="row">
                <div class="two columns logo">
                </div>
                <nav class="push_three seven columns ">
                    <ul class="main-nav">
                        <li class=skip><a href="#about">About</a></li>
                        <li class=skip><a href="#services">Services</a></li>
                        <li class=skip><a href="#events">Events</a></li>
                        <li class=skip><a href="#contact">Contact</a></li>
                    </ul>
                </nav>
                <div class="line">
                </div>
            </div>
            <!-- End row div -->
        </header>
        <div id="slider-wrapper" class="row">
            <div class="slider-wrapper theme-default">
                <div id="slider" class="nivoSlider">
                    <img src="img/stockphoto.jpg"  alt="" />
                </div>
            </div>
        </div>
        <div class="row">
            <h2 id="aboutHeader">
                About</h2>
            <div>
                <div id="about" class="eight columns">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consequat magna
                        vitae velit vestibulum commodo. Pellentesque tempus orci a sapien consectetur quis
                        posuere orci euismod. Etiam pharetra sapien sed neque vehicula venenatis. Vestibulum
                        ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque
                        vel nibh in tellus accumsan fringilla. Fusce eu eleifend sem. Etiam sodales, mauris
                        sed adipiscing pretium, enim augue scelerisque turpis, ac tempor nibh diam et magna.
                        Suspendisse vel nibh orci, a tempor risus. Sed suscipit lacinia risus, eget vulputate
                        neque pulvinar ut. Nullam ut suscipit mi. Maecenas blandit, orci eget euismod laoreet,
                        elit neque fringilla quam, ut elementum lorem felis vitae lacus. Morbi mollis massa
                        id ligula faucibus porta. Donec ultrices venenatis consequat. Donec consequat mauris
                        vel nisi imperdiet et suscipit nisl convallis. Sed tristique vehicula elit sed consequat.
                        Pellentesque quis ante sapien.
                    </p>
                    <p>
                        Integer consequat turpis non neque aliquet eu tempor lacus consectetur. Ut ac nunc
                        lacus, at fringilla tellus. Cum sociis natoque penatibus et magnis dis parturient
                        montes, nascetur ridiculus mus. Nulla eu faucibus diam. Morbi placerat nisi eu leo
                        interdum id tincidunt augue ultrices. Maecenas vestibulum cursus velit vel vulputate.
                        Sed in ipsum id diam blandit interdum. Sed quis dolor elit. Phasellus vel leo nec
                        libero vehicula elementum. Sed ut arcu lectus, nec lacinia tellus.
                    </p>
                    <p>
                        Integer ultrices, elit nec blandit tincidunt, lacus justo sollicitudin ligula, at
                        euismod elit sapien non mauris. Etiam in elit et libero varius pulvinar in et erat.
                        Curabitur bibendum mauris quis magna dapibus in iaculis velit rutrum. Mauris vitae
                        sem vitae augue cursus iaculis a ac diam. Praesent congue fermentum nisl, suscipit
                        vehicula risus dapibus eget. Sed semper mattis consectetur. Curabitur molestie elementum
                        arcu eget aliquet. Integer in libero enim, in pellentesque sem. Aenean nec magna
                        mi. Suspendisse tempus leo non neque porta lobortis. Class aptent taciti sociosqu
                        ad litora torquent per conubia nostra, per inceptos himenaeos.
                    </p>
                </div>
                <div class=" four columns">
                    <img src="img/photobooth.jpg"  alt="" />
                </div>
            </div>
        </div>
        <hr />
        <div class="row">
            <h2 id="servicesHeader">
                Services</h2>
            <div id="services">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consequat magna
                    vitae velit vestibulum commodo. Pellentesque tempus orci a sapien consectetur quis
                    posuere orci euismod.
                </p>
                <div class="three columns">
                    <img src="http://placehold.it/175" />
                    <p>
                        Integer ultrices, elit nec blandit tincidunt, lacus justo sollicitudin ligula, at
                        euismod elit sapien non mauris. Etiam in elit et libero varius pulvinar in et erat.
                        Curabitur bibendum mauris quis magna dapibus in iaculis velit rutrum.
                    </p>
                </div>
                <div class="three columns">
                    <img src="http://placehold.it/175" />
                    <p>
                        Integer ultrices, elit nec blandit tincidunt, lacus justo sollicitudin ligula, at
                        euismod elit sapien non mauris. Etiam in elit et libero varius pulvinar in et erat.
                        Curabitur bibendum mauris quis magna dapibus in iaculis velit rutrum.
                    </p>
                </div>
                <div class="three columns">
                    <img src="http://placehold.it/175" />
                    <p>
                        Integer ultrices, elit nec blandit tincidunt, lacus justo sollicitudin ligula, at
                        euismod elit sapien non mauris. Etiam in elit et libero varius pulvinar in et erat.
                        Curabitur bibendum mauris quis magna dapibus in iaculis velit rutrum.
                    </p>
                </div>
            </div>
        </div>
        <hr />
        <div class="row">
            <h2 id="eventsHeader">
                Events</h2>
            <div id="events" class="twelve columns">
                <p>
                    Integer ultrices, elit nec blandit tincidunt, lacus justo sollicitudin ligula, at
                    euismod elit sapien non mauris. Etiam in elit et libero varius pulvinar in et erat.
                    Curabitur bibendum mauris quis magna dapibus in iaculis velit rutrum.
                </p>
                <div>
                    <!-- start slider -->
                    <ul id="eventSlider">
                        <li>
                            <img src="img/graduation.jpg" alt="graduation" />
                            <h2>
                                Graduation</h2>
                            <p>
                                A very short excert goes here about graduations</p>
                        </li>
                        <li>
                            <img src="http://placehold.it/175"  alt="wedding" />
                            <h2>
                                Weddings</h2>
                            <p>
                                A very short exerpt goes here about weddings</p>
                        </li>
                        <li>
                            <img src="http://placehold.it/175" alt="picture" />
                            <h2>
                                Birthdays</h2>
                            <p>
                                A very short exerpt goes here about birthdays</p>
                        </li>
                        <li>
                            <img src="http://placehold.it/175" alt="picture" />
                            <h2>
                                Prom</h2>
                            <p>
                                A very short exerpt goes here about proms</p>
                        </li>
                    </ul>
                </div>
                <!-- End slider -->
            </div>
        </div>
        <hr />
        <div>
            <div class="row">
                <h2 id="contactsHeader">
                    Contact</h2>
                <div id="contact" class="twelve columns">
                    <div>
                        <p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consequat magna
                            vitae velit vestibulum commodo. Pellentesque tempus orci a sapien consectetur quis
                            posuere orci euismod. Etiam pharetra sapien sed neque vehicula venenatis. Vestibulum
                            ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque
                            vel nibh in tellus accumsan fringilla. Fusce eu eleifend sem.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consequat magna
                            vitae velit vestibulum commodo. Pellentesque tempus orci a sapien consectetur quis
                            posuere orci euismod. Etiam pharetra sapien sed neque vehicula venenatis. Vestibulum
                            ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque
                            vel nibh in tellus accumsan fringilla. Fusce eu eleifend sem.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="four columns">
                    <h3>
                        Address:</h3>
                    1189 Waverly Place<br />
                    Schenectady NY, 12308
                    <h3>
                        Phone:</h3>
                    (518)335-4357
                    <h3>
                        Email:
                    </h3>
                    <a href="mailto:david.ellinger@me.com">david.ellinger@me.com</a>
                </div>
                <!--<div class="one columns">-->
                <div class="two columns">
                    <br />
                    <br />
                    <img src="http://placehold.it/120" />
                </div>

                <div id="contact-form" class="four columns clearfix">
            <h1>Get In Touch!</h1>
                <?php

                    $cf = array();
                    $sr = false;

                    if(isset($_SESSION['cf_returndata'])){
                        $cf = $_SESSION['cf_returndata'];
                         $sr = true;
                    }
                ?>

           <ul id="errors" class="<?php echo ($sr && !$cf['form_ok']) ? 'visible' : ''; ?>">
    <li id="info">There were some problems with your form submission:</li>
    <?php 
    if(isset($cf['errors']) && count($cf['errors']) > 0) :
        foreach($cf['errors'] as $error) :
    ?>
    <li><?php echo $error ?></li>
    <?php
        endforeach;
    endif;
    ?>
</ul>
<p id="success" class="<?php echo ($sr && $cf['form_ok']) ? 'visible' : ''; ?>">Thanks for your message! We will get back to you ASAP!</p>
            <form method="post" action="contact.php">
                <label for="name">Name: <span class="required">*</span></label>
                <input type="text" id="name" name="name" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['name'] : '' ?>" placeholder="John Doe" required autofocus />
                
                <label for="email">Email Address: <span class="required">*</span></label>
                <input type="email" id="email" name="email" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['email'] : '' ?>" placeholder="johndoe@example.com" required />
                
                <label for="telephone">Telephone: </label>
                <input type="tel" id="telephone" name="telephone" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['telephone'] : '' ?>" />
                
               
                <label for="message">Message: <span class="required">*</span></label>
                <textarea id="message" name="message" placeholder="Your message must be greater than 20 charcters" required data-minlength="20"></textarea>
                
                <span id="loading"></span>
                <input type="submit" value="Holla!" id="submit-button" />
                <p id="req-field-desc"><span class="required">*</span> indicates a required field</p>
            </form>
        </div>
    </div>

    </div>
    <!-- End container div -->
    <a href="#" class="scrollup" style="background-image: url(img/up.png);">Scroll</a>
    <!-- Scroll Up Button -->
</body>
</html>

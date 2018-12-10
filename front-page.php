<html>
<head>
    <?php wp_head(); ?>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:700,800" rel="stylesheet">
</head>
<body <?php body_class(); ?>>
    <header id="masthead" role="banner" class="nav-header">
        <div class="welcome-msg">
            Welcome
        </div>
        <div class="navagation">
            <nav id="main-navigation" class="main-navigation" role="navigation">
                <div class="menu">
                    <ul>
                        <li>
                            <a href="#" class="active-link">
                                <span>Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>About</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>Contact Me</span>
                            </a>
                        </li>
                    </ul>
                </div><!-- menu -->
            </nav><!-- .main-navigation -->
        </div><!-- .navigation -->
    </header><!-- #masthead -->
    <div class="content">
        <div class="intro">
            <div>
                <h2>
                    <span>&#60;b&#62;</span>
                    Hello
                    <span>&#60;/b&#62;</span>
                    <br>
                    I'm Gary, Full-stack
                    <br>
                    Web Developer
                </h2>
                <div>
                    <?php
                        if ( have_posts() ) {
                            while (have_posts()) {
                                the_post();
                                the_content();
                            }
                        }
                    ?>
                </div>
            </div>
            <div>
                <img src="https://via.placeholder.com/550X700.png">
            </div>
        </div>
        <div class="About">
            <div class="section-title">
                <h1>&#60;About Me&#62;</h1>
            </div>
            <div class="about-content">
                <div class="about-list">
                    <div>
                        <h4>Locations</h4>
                    </div>
                    <div class="seperator"></div>
                    <div class="about-list-item">
                        Atlanta, GA
                    </div>
                    <div class="about-list-item">
                        West Palm Beach, FL
                    </div>
                </div>
                <div class="about-list">
                    <div>
                        <h4>Education</h4>
                    </div>
                    <div class="seperator"></div>
                    <div class="about-list-item">
                        Palm Beach State College
                    </div>
                    <div class="about-list-item">
                        Santaluces High School
                    </div>
                </div>
                <div class="about-list">
                    <div>
                        <h4>Employment</h4>
                    </div>
                    <div class="seperator"></div>
                    <div class="about-list-item">
                        Incursus, Inc
                    </div>
                    <div class="about-list-item">
                        Apto Solutions
                    </div>
                </div>
            </div>
        </div>
        <div class="Contact Me">
            <div class="section-title">
                <h1>&#60;Contact Me&#62;</h1>
            </div>
            <div>
                Put a contact form and social links here
            </div>
        </div>
    </div>
<?php
    wp_footer();
?>
</body>
</html>
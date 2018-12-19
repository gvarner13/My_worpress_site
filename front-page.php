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
                            <a href="#">
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
                    <span style="color: #58F6C9;">&#60;b&#62;</span>
                    Hello
                    <span style="color: #58F6C9;">&#60;/b&#62;</span>
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
        <div class="Contact-me">
            <div class="section-title">
                <h1>&#60;Contact Me&#62;</h1>
            </div>
            <div class=contact-me-content>
                <div class="social-links">
                    <ul>
                        <li>
                            <a href="https://twitter.com/gsvarner">
                                <svg class="social-icon" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <title>Twitter icon</title>
                                    <path d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124C7.691 8.094 4.066 6.13 1.64 3.161c-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="https://incurs.us">
                                <svg class="social-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm7.75-8a8.01 8.01 0 0 0 0-4h-3.82a28.81 28.81 0 0 1 0 4h3.82zm-.82 2h-3.22a14.44 14.44 0 0 1-.95 3.51A8.03 8.03 0 0 0 16.93 14zm-8.85-2h3.84a24.61 24.61 0 0 0 0-4H8.08a24.61 24.61 0 0 0 0 4zm.25 2c.41 2.4 1.13 4 1.67 4s1.26-1.6 1.67-4H8.33zm-6.08-2h3.82a28.81 28.81 0 0 1 0-4H2.25a8.01 8.01 0 0 0 0 4zm.82 2a8.03 8.03 0 0 0 4.17 3.51c-.42-.96-.74-2.16-.95-3.51H3.07zm13.86-8a8.03 8.03 0 0 0-4.17-3.51c.42.96.74 2.16.95 3.51h3.22zm-8.6 0h3.34c-.41-2.4-1.13-4-1.67-4S8.74 3.6 8.33 6zM3.07 6h3.22c.2-1.35.53-2.55.95-3.51A8.03 8.03 0 0 0 3.07 6z"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/gvarner13">
                                <svg class="social-icon" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <title>GitHub icon</title>
                                    <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php
    wp_footer();
?>
</body>
</html>
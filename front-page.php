<html>
<head><?php wp_head(); ?></head>
<body <?php body_class(); ?>>
    <header id="masthead" role="banner">
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
                    <span>b</span>
                    Hello
                    <span>b</span>
                    <br>
                    I'm Gary, Full-stack
                    <br>
                    Web Developer
                </h2>
                <div>
                    A WordPress website about Hypergiant company which creates hyper-efficient and scalable. The careful have the as a spirits and client ihave by assistant have took initial sentences omens.
                </div>
            </div>
            <div>
                <img src="https://via.placeholder.com/550X700.png">
            </div>
        </div>
        <div class="About">
            <div>
                <h2>&#60;About Me&#62;</h2>
            </div>
            <div>
                <ul>
                    <li>Hign school</li>
                    <li>Started College</li>
                </ul>
            </div>
        </div>
        <div class="Contact Me">
            <div>
                <h2>&#60;Contact Me&#62;</h2>
            </div>
            <div>
                Put a contact form and social links here
            </div>
        </div>
    </div>

<h1>Front Page</h1>
<?php
if ( have_posts() ) {
    while (have_posts()) {
        the_post();
        the_title('<h3>', '</h3>');
        the_content();
    }
}
wp_footer();
?>
</body>
</html>
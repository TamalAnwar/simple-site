<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tamal Anwar's Website</title>
        <meta name="description" content="">
    <!-- Includes the fonts CDN and some extra tags  -->
        <?php include "includes/head.php" ?>
    </head>
    <body>
        <div class="wrapper">
            <main>
                <div class="row white">
                    <aside id="sidebar" class="col-3">
                        <!-- Nav menu  -->
                        <?php include "includes/nav.php" ?><!-- Nav menu ends  -->
                        <!-- Footer area  -->
                        <?php include "includes/footer.php" ?><!-- Footer area ends here  -->
                    </aside>
                    <!-- Header section  -->
                    <header id="header" class="col-9">
                        <?php include "includes/header.php"; ?>
                    </header><!-- Header section ends  -->

                    <article id="content" class="col-9">
                        <p>Hello and welcome to my website, here you will find all the work related information about me. I am a freelance web designer and developer. I build WordPress themes, customize the popular ones and also love to teach about tech.</p>
                        <h3>Recent Work:</h3>
                        <img src="images/toby-small.jpg" alt="client website" class="shot">
                        <p>Toby Malamute is an up and coming author. I built his site on the WordPress Genesis framework. <a href="http://tobymalamute.com/" target="_blank" class="ext">See the live website</a></p>
                        <p class="center"><a href="portfolio.php">See more work</a></p>



                        <!-- <p>BlogKori: a WordPress theme. <a href="https://wordpress.org/themes/blogkori/" target="_blank">Learn more at WordPress.org</a> <i class="fa fa-external-link" aria-hidden="true" title="Opens in a new tab"></i></p> -->
                        <!-- <p class="center"><img src="images/blogkori-theme-small.jpg" alt=""></p> -->

                        <h3>Services I offer:</h3>
                            <ul>
                                <li>Website design &amp; development</li>
                                <li>WordPress theme customization</li>
                                <li>Custom WordPress theme development</li>
                            </ul>
                        <h3>Work with me</h3>
                        <p>Need help putting together your website?</p>
                        <a href="contact.php" class="cta-button">Get in touch.</a>
                    </article>
                </div>
            </main>
        </div>
        <?php include "includes/foot.php" ?>

    </body>
</html>

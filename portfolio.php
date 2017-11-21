<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Portfolio of Tamal Anwar</title>
        <meta name="description" content="See Tamal Anwar's work as a web designer, developer">
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
                        <!-- Toby site work  -->
                        <h3>Toby Malamute - Author</h3>
                        <img src="images/toby-small.jpg" alt="client website" class="shot">
                        <p>Toby Malamute is an up and coming author. I built his site on the WordPress Genesis framework. <a href="http://tobymalamute.com/" target="_blank" class="ext">Live website</a></p>

                        <!-- BlogKori theme work -->
                        <h3>BlogKori WordPress Theme</h3>
                        <img src="images/blogkori-theme-small.jpg" alt="BlogKori theme" class="shot">
                        <p>BlogKori is a free theme for the WordPress self hosted platform. It is currently listed at the <a href="https://wordpress.org/themes/blogkori/" class="ext" target="_blank">official WordPress theme directory</a> and being used on more than 1,000 websites.</p>
                        <p></p>
                    </article>
                </div>
            </main>
        </div>
        <?php include "includes/foot.php" ?>

    </body>
</html>

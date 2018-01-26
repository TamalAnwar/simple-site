<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tamal Anwar's Website</title>
        <meta name="description" content="I build custom WordPress themes for bloggers">
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
                        <p>Hello and welcome to my official website. I am a freelance web designer, developer from Habiganj, Bangladesh. I specialize in building custom WordPress themes for bloggers.</p>
                        <p>I have worked as a freelance web developer for 10 years and have clients from all around the world including bloggers, internet marketers, small business owners, doctors and book authors.</p>
                        <p>My technical skills include: HTML, CSS, JavaScript, BootStrap; PHP, SQL, and WordPress. I have some digital marketing, content writing and SEO skills, but I keep that exclusive to my personal projects only.</p>
                        <p>When I am not working, I spend time improving my mind and body.</p>
                        <h3>Things I enjoy:</h3>
                            <ul>
                                <li>Building custom WordPress themes</li>
                                <li>Blogging about tech</li>
                                <li>Watching action movies</li>
                            </ul>
                            <p>Thanks for checking me out! Now it's your turn..</p>
                        <a href="contact" class="cta-button cta-regular">Get in touch</a> or <a href="https://www.upwork.com/fl/tamalanwar" target="_blank" class="cta-button cta-hire">Hire me</a>
                    </article>
                </div>
            </main>
        </div>
        <?php include "includes/foot.php" ?>

    </body>
</html>

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
                        <p>To contact me please send me an email:</p>
                        <p>tamalanwaronline [at] gmail.com</p>
                    </article>
                </div>
            </main>
        </div>
        <?php include "includes/foot.php" ?>

    </body>
</html>

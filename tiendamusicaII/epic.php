<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<?php
require_once('inc/utils.php');
require_once('db/Disc.php');
header_login();
?>

<div class="main-container">
    <main role="main" class="wrapper">
        <header class="section-title">
            <h2>Sección de EPIC</h2>
        </header>
        <div class="flex-container-epic">
            <div class="left-column">
                <?php
                $discs = new Disc();
                $data = $discs->getAllDiscs(); // TODO, get only title, add photo, check not empty
                $plurals = $data[0]['numComments'] == 1 ? " Comentario " : " Comentarios ";
                ?>
                <article class="best-seller">
                    <figure>
                        <img src="<?php echo BASE_URL . $data[0]['cover']; ?>" alt="Portada decimus" height="256px"
                             width="256px"/>
                    </figure>
                    <header>
                        <h1><?php echo $data[0]['titulo']; ?></h1>
                    </header>
                    <p><a href="<?php echo BASE_URL . "epic/details.php?id=" . $data[0]['id']; ?>" title="Ver Decimus">Ver</a>
                    </p>
                    <p><?php echo $data[0]['numComments'];
                        echo " " . $plurals; ?></p>
                </article>
                <div class="featured-epic">
                    <?php
                    foreach ($data as $item) {
                        if ($data[0] === $item) continue;
                        $plurals = $item['numComments'] == 1 ? " Comentario " : " Comentarios ";
                        ?>
                        <article class="other-discs">
                            <figure>
                                <img src="<?php echo BASE_URL . $item['cover']; ?>" alt="Portada decimus" height="128px"
                                     width="128px"/>
                            </figure>
                            <header>
                                <h3><?php echo $item['titulo']; ?></h3>
                            </header>
                            <p><?php echo $item['numComments'];
                                echo " " . $plurals; ?></p>
                            <p><a href="<?php echo BASE_URL . "epic/details.php?id=" . $item['id']; ?>"
                                  title="Ver Decimus"> Ver</a></p>
                        </article>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <section class="newer">
                <?php
                foreach ($data as $item) {
                    ?>
                    <article>
                        <div class="flexChild rowParent">
                            <div class="flexChild">
                                <figure>
                                    <img src="<?php echo BASE_URL . $item['cover']; ?>" alt="Portada decimus"
                                         height="64px"
                                         width="64px"/>
                                </figure>
                            </div>
                            <div class="flexChild columnParent">
                                <div class="flexChild"><?php echo $item['titulo']; ?></div>
                                <div class="flexChild columnParent">
                                    <div class="flexChild rowParent">
                                        <div class="flexChild"><?php echo $item['productora']; ?></div>
                                    </div>
                                    <div class="flexChild">Ver</div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <?php
                }
                ?>
            </section>
        </div>
    </main>
</div><!-- #main-container -->
<div class="footer-container">
    <footer class="wrapper">
        <h3>Contacto</h3>
        Encuentranos en
        <address>
            Avda XXXXX, YYYY, Granada, CP: 88888, example@example.com. Webmaster: Alex
        </address>
        <a href="./formulario.php">Suscribete</a>
        <h1><a href="<?php echo BASE_URL . "como_se_hizo.pdf"; ?>">¿Cómo se hizo?</a></h1>
    </footer>
</div>
</body>
</html>


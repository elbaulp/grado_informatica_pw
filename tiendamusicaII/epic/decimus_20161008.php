<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="../css/main.css">
</head>
<body>

<?php
require_once('../inc/utils.php');
header_login();
?>

<div class="main-container">
    <main role="main" class="wrapper">
        <h2>Secciones | Generos: <a href="../epic.php">EPIC</a> / Pop / Metal | Más vendido | Más comentado</h2>
        <header class="section-title">
            <h2>Sección de EPIC</h2>
        </header>
        <header>
            <h1>DECIMUS</h1>
        </header>
        <div class="flex-container-epic">
            <div class="left-column-disc">
                <article class="disc-contents">
                    <div class="disc-left">
                        <h1>Audiomachine</h1>
                        <figure>
                            <img src="../img/decimus_20161008/disk.jpeg" alt="Portada decimus" height="512px"
                                 width="512"/>
                        </figure>
                        <p>Genero</p>
                        <p>Precio</p>
                        <p>Productora</p>
                        <p>Valoración</p>
                    </div>
                    <div class="disc-right">
                        <audio controls="controls">
                            <source src="song.mp3" type="audio/mp3"/>
                            <source src="song.ogg" type="audio/ogg"/>
                            Your browser does not support the audio tag.
                        </audio>
                        <audio controls="controls">
                            <source src="song.mp3" type="audio/mp3"/>
                            <source src="song.ogg" type="audio/ogg"/>
                            Your browser does not support the audio tag.
                        </audio>
                        <audio controls="controls">
                            <source src="song.mp3" type="audio/mp3"/>
                            <source src="song.ogg" type="audio/ogg"/>
                            Your browser does not support the audio tag.
                        </audio>
                        <audio controls="controls">
                            <source src="song.mp3" type="audio/mp3"/>
                            <source src="song.ogg" type="audio/ogg"/>
                            Your browser does not support the audio tag.
                        </audio>
                        <audio controls="controls">
                            <source src="song.mp3" type="audio/mp3"/>
                            <source src="song.ogg" type="audio/ogg"/>
                            Your browser does not support the audio tag.
                        </audio>
                        <audio controls="controls">
                            <source src="song.mp3" type="audio/mp3"/>
                            <source src="song.ogg" type="audio/ogg"/>
                            Your browser does not support the audio tag.
                        </audio>
                        <audio controls="controls">
                            <source src="song.mp3" type="audio/mp3"/>
                            <source src="song.ogg" type="audio/ogg"/>
                            Your browser does not support the audio tag.
                        </audio>
                        <audio controls="controls">
                            <source src="song.mp3" type="audio/mp3"/>
                            <source src="song.ogg" type="audio/ogg"/>
                            Your browser does not support the audio tag.
                        </audio>
                        <audio controls="controls">
                            <source src="song.mp3" type="audio/mp3"/>
                            <source src="song.ogg" type="audio/ogg"/>
                            Your browser does not support the audio tag.
                        </audio>
                        <audio controls="controls">
                            <source src="song.mp3" type="audio/mp3"/>
                            <source src="song.ogg" type="audio/ogg"/>
                            Your browser does not support the audio tag.
                        </audio>
                        <div class="row-nowrap">
                            <p>Comentarios</p>
                            <p>Comprar</p>
                            <p>Reproducir</p>
                        </div>
                    </div>
                </article>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <?php
                    comment_form();
                    ?>
                </form>
            </div>
            <section class="more-discs">
                <article>
                    <div class="flexChild rowParent">
                        <div class="flexChild">
                            <figure>
                                <img src="../img/decimus_20161008/disk.jpeg" alt="Portada decimus" height="64px"
                                     width="64px"/>
                            </figure>
                        </div>
                        <div class="flexChild columnParent">
                            <div class="flexChild">Disco</div>
                            <div class="flexChild columnParent">
                                <div class="flexChild rowParent">
                                    <div class="flexChild">Autor</div>
                                    <div class="flexChild">Reproducir</div>
                                </div>
                                <div class="flexChild">Ver</div>
                            </div>
                        </div>
                    </div>
                </article>
                <article>
                    <div class="flexChild rowParent">
                        <div class="flexChild">
                            <figure>
                                <img src="../img/decimus_20161008/disk.jpeg" alt="Portada decimus" height="64px"
                                     width="64px"/>
                            </figure>
                        </div>
                        <div class="flexChild columnParent">
                            <div class="flexChild">Disco</div>
                            <div class="flexChild columnParent">
                                <div class="flexChild rowParent">
                                    <div class="flexChild">Autor</div>
                                    <div class="flexChild">Reproducir</div>
                                </div>
                                <div class="flexChild">Ver</div>
                            </div>
                        </div>
                    </div>
                </article>
                <article>
                    <div class="flexChild rowParent">
                        <div class="flexChild">
                            <figure>
                                <img src="../img/decimus_20161008/disk.jpeg" alt="Portada decimus" height="64px"
                                     width="64px"/>
                            </figure>
                        </div>
                        <div class="flexChild columnParent">
                            <div class="flexChild">Disco</div>
                            <div class="flexChild columnParent">
                                <div class="flexChild rowParent">
                                    <div class="flexChild">Autor</div>
                                    <div class="flexChild">Reproducir</div>
                                </div>
                                <div class="flexChild">Ver</div>
                            </div>
                        </div>
                    </div>
                </article>
                <article>
                    <div class="flexChild rowParent">
                        <div class="flexChild">
                            <figure>
                                <img src="../img/decimus_20161008/disk.jpeg" alt="Portada decimus" height="64px"
                                     width="64px"/>
                            </figure>
                        </div>
                        <div class="flexChild columnParent">
                            <div class="flexChild">Disco</div>
                            <div class="flexChild columnParent">
                                <div class="flexChild rowParent">
                                    <div class="flexChild">Autor</div>
                                    <div class="flexChild">Reproducir</div>
                                </div>
                                <div class="flexChild">Ver</div>
                            </div>
                        </div>
                    </div>
                </article>
                <article>
                    <div class="flexChild rowParent">
                        <div class="flexChild">
                            <figure>
                                <img src="../img/decimus_20161008/disk.jpeg" alt="Portada decimus" height="64px"
                                     width="64px"/>
                            </figure>
                        </div>
                        <div class="flexChild columnParent">
                            <div class="flexChild">Disco</div>
                            <div class="flexChild columnParent">
                                <div class="flexChild rowParent">
                                    <div class="flexChild">Autor</div>
                                    <div class="flexChild">Reproducir</div>
                                </div>
                                <div class="flexChild">Ver</div>
                            </div>
                        </div>
                    </div>
                </article>
                <article>
                    <div class="flexChild rowParent">
                        <div class="flexChild">
                            <figure>
                                <img src="../img/decimus_20161008/disk.jpeg" alt="Portada decimus" height="64px"
                                     width="64px"/>
                            </figure>
                        </div>
                        <div class="flexChild columnParent">
                            <div class="flexChild">Disco</div>
                            <div class="flexChild columnParent">
                                <div class="flexChild rowParent">
                                    <div class="flexChild">Autor</div>
                                    <div class="flexChild">Reproducir</div>
                                </div>
                                <div class="flexChild">Ver</div>
                            </div>
                        </div>
                    </div>
                </article>
                <article>
                    <div class="flexChild rowParent">
                        <div class="flexChild">
                            <figure>
                                <img src="../img/decimus_20161008/disk.jpeg" alt="Portada decimus" height="64px"
                                     width="64px"/>
                            </figure>
                        </div>
                        <div class="flexChild columnParent">
                            <div class="flexChild">Disco</div>
                            <div class="flexChild columnParent">
                                <div class="flexChild rowParent">
                                    <div class="flexChild">Autor</div>
                                    <div class="flexChild">Reproducir</div>
                                </div>
                                <div class="flexChild">Ver</div>
                            </div>
                        </div>
                    </div>
                </article>
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
        <a href="../formulario.php">Suscribete</a>
    </footer>
</div>
</body>
</html>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link rel="shortcut icon" href="/mains.png"/>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <meta name="theme-color" content="#000000"/>
    <link rel="icon" type="image/png" href="images/icones/favicon.png" />
    <title>Emilie Schultz</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
</head>
<body>

<header class="header bg-dark d-flex flex-column">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <button aria-controls="responsive-navbar-nav" aria-label="Toggle navigation" data-toggle="collapse" data-target="#responsive-navbar-nav"  class="navbar-toggler" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="responsive-navbar-nav">
                <div class="ml-auto navbar-nav"><a class="nav-link" data-rb-event-key="#home" href="#home">
                        <svg fill="currentColor" height="20" stroke="currentColor" stroke-width="0"
                             viewBox="0 0 512 512" width="20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M208 448V320h96v128h97.6V256H464L256 64 48 256h62.4v192z"></path>
                        </svg>
                    </a>
                    <a class="nav-link" href="#about">À propos</a>
                    <a class="nav-link" href="#work">Réalisations</a>
                    <a class="nav-link" href="#studies">Formations</a>
                    <a class="nav-link" href="#skills">Compétences</a>
                    <a class="nav-link" href="#contact">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container flex-grow-1" id="home">
        <div class="row h-100">
            <div class="col-md d-flex flex-column justify-content-center pt-8">
                <div class=""><h1
                            class="header-title animated bounce">Emilie Schultz</h1></div>
                <p class="text-white">Je suis une étudiante aspirant à devenir webdesigner.</p>
                <p class="text-white">Bienvenue sur mon site !</p></div>
            <div class="col-md d-flex row align-self-end"><img alt="" height="600"
                                                               src="images/header.png"></div>
            <div class="col-md d-sm-flex align-items-center justify-content-around flex-column">
                <div></div>
                <div class="d-none d-sm-block"><h2 class="subtitle">Webdesign</h2>
                    <h2 class="subtitle">Graphisme</h2></div>
                <div class="d-none d-sm-block ">
                    <a class="logo" href="https://www.facebook.com/emilie.schultz.92" rel="noopener noreferrer" target="_blank">
                        <?php include './images/logo/_ionicons_svg_logo-facebook.svg'; ?>
                    </a>

                    <a class="logo" href="https://www.instagram.com/balnibarbe/" rel="noopener noreferrer"
                       target="_blank">
                        <?php include './images/logo/_ionicons_svg_logo-instagram.svg'; ?>
                    </a>

                    <a class="logo" href="https://www.linkedin.com/in/emilie-schultz-977629142/"
                       rel="noopener noreferrer" target="_blank">
                        <?php include './images/logo/_ionicons_svg_logo-linkedin.svg'; ?>

                    </a>
                    <a class="logo" href="https://twitter.com/balnibarbe" rel="noopener noreferrer"
                       target="_blank">
                        <?php include './images/logo/_ionicons_svg_logo-twitter.svg'; ?>
                    </a></div>
            </div>
        </div>
    </div>
</header>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Keywords" content="Immanuel, Immanuelm, Immanuel Mruk,Immanuelm.de,
                                ximmanuel, ximmanuel4, ximmanuelm, Mruk Immanuel,
                                lytex development, lytex-development, lytex">
    <link rel="icon" type="image/png" sizes="600x600" href="stuff/images/logo.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="600">
    <meta property="og:image:height" content="600">
    <meta name="description" content="Webseite von Immanuel Mruk">
    <meta name="theme-color" content="#6681d8">

    <title>immanuelm | Start</title>

    <link rel="stylesheet" href="stuff/css/main.css">
    <link rel="stylesheet" href="stuff/css/header.css">
    <link rel="stylesheet" href="stuff/css/footer.css">
    <link rel="stylesheet" href="stuff/css/util/responsive.css">
    <link rel="stylesheet" href="stuff/css/util/tooltip.css">
    <link rel="stylesheet" href="stuff/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    <script src="stuff/js/main.js"></script>
</head>
<body>
    <header>
        <img src="stuff/images/logo.png" height="96px">
        <h1>Immanuel Mruk</h1>
        <div id="nav">
            <a href="index.php?page=start">Start</a>
            <a href="index.php?page=CV">Lebenslauf</a>
            <a href="index.php?page=projects">Projects</a>
        </div>
    </header>

    <?php
        if ($_GET['page'] == 'CV' or $_GET['page'] == 'projects') {
            echo "
                <style>
                body { text-align: center; }
                </style>
                <br> <br> <br> <br> <br> <br>
                <h1>Error 404</h1>
                <h3>Diese Seite wurde nicht gefunden oder ist noch nicht verf??gbar...</h3>
                <br> <br> <br> <br>
                <a href='index.php?page=start'><img src='stuff/images/404.gif' height='500px'></a>
                <br> <br> <br> <br> <br> <br>
            ";
        } else {
            echo "
            <section id='middle'>
                <div class='greeting'>
                    <h3>Hey.</h3>
                </div>
        
                <div class='about-me'>
                    <p>Ich bin <span class='name'>Immanuel</span>,
                    <span class='age'>15</span> Jahre alt
                    <br> und lebe zurzeit in Rheinland-Pfalz.</p>
                </div>
        
                <div class='socials'>
                    <a href='https://github.com/ximmanuel' target='_blank'>
                        <svg xmlns='http://www.w3.org/2000/svg' fill='#fff' width='34' height='34' viewBox='0 0 24 24'>
                            <path d='M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z'/>
                        </svg></a>
        
                    <a href='https://www.instagram.com/ximmanuelm' target='_blank'>
                        <svg xmlns='http://www.w3.org/2000/svg' fill='#fff' width='34' height='34' viewBox='0 0 24 24'>
                            <path d='M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z'/>
                        </svg></a>
                    
                    <div class='tooltip'>
                        <span class='tooltiptext' >
                            immanuel &#35; 6114
                        </span>
                        <svg xmlns='http://www.w3.org/2000/svg' fill='#fff' width='34' height='34' viewBox='0 0 24 24'>
                            <path d='M19.54 0c1.356 0 2.46 1.104 2.46 2.472v21.528l-2.58-2.28-1.452-1.344-1.536-1.428.636 2.22h-13.608c-1.356 0-2.46-1.104-2.46-2.472v-16.224c0-1.368 1.104-2.472 2.46-2.472h16.08zm-4.632 15.672c2.652-.084 3.672-1.824 3.672-1.824 0-3.864-1.728-6.996-1.728-6.996-1.728-1.296-3.372-1.26-3.372-1.26l-.168.192c2.04.624 2.988 1.524 2.988 1.524-1.248-.684-2.472-1.02-3.612-1.152-.864-.096-1.692-.072-2.424.024l-.204.024c-.42.036-1.44.192-2.724.756-.444.204-.708.348-.708.348s.996-.948 3.156-1.572l-.12-.144s-1.644-.036-3.372 1.26c0 0-1.728 3.132-1.728 6.996 0 0 1.008 1.74 3.66 1.824 0 0 .444-.54.804-.996-1.524-.456-2.1-1.416-2.1-1.416l.336.204.048.036.047.027.014.006.047.027c.3.168.6.3.876.408.492.192 1.08.384 1.764.516.9.168 1.956.228 3.108.012.564-.096 1.14-.264 1.74-.516.42-.156.888-.384 1.38-.708 0 0-.6.984-2.172 1.428.36.456.792.972.792.972zm-5.58-5.604c-.684 0-1.224.6-1.224 1.332 0 .732.552 1.332 1.224 1.332.684 0 1.224-.6 1.224-1.332.012-.732-.54-1.332-1.224-1.332zm4.38 0c-.684 0-1.224.6-1.224 1.332 0 .732.552 1.332 1.224 1.332.684 0 1.224-.6 1.224-1.332 0-.732-.54-1.332-1.224-1.332z'/>
                        </svg>
                    </div>
        
                    <div class='contact'>
                        <a href='mailto:contact@immanuelm.de'>Kontakt</a>
                    </div>  
                </div>
        
                <div class='programmerImg'>
                    <img src='stuff/images/programmer-1.png' height='326px'>
                </div>
        
                <br>
                <br>
                <br>
        
                <div class='foreword'>
                    <div class='headline'> Aktuell <i class='fas fa-arrow-right'></i> </div>
                    <div class='text'>
                        <p> Momentan bin ich in der 9. Klasse <br> an einer Realschule.
                        </p>
                    </div>
                </div>
        
                <br>
                <br>
                <br>
        
                <div class='container'>
                    <p>Ich interessiere mich sehr rundum die IT, insbesondere f??r die Programmierung von Software.
                        <br>
                        <br>
                        Aktuell suche ich eine Ausbildungsstelle zum Fachinformatiker f??r Anwendungsentwicklung
                        <br>
                        <br>
                        <br>
                        <br> Unten folgen nun ein paar meiner F??higkeiten...
                    </p>
                </div>
        
                <div id='skills'>
                    <h3>Programming languages:</h3>
        
                    <div class='tooltip'>
                        <span class='tooltiptext'>Python</span>
                        <img src='stuff/images/skills/python.svg' alt='Python' height='48px'>
                    </div>
                    
                    <div class='tooltip'>
                        <span class='tooltiptextBig'>Javascript</span>
                        <img src='stuff/images/skills/javascript.svg' alt='Javascript' height='48px'>
                    </div>
        
                    <div class='tooltip'>
                        <span class='tooltiptext'>HTML5</span>
                        <img src='stuff/images/skills/html5.svg' alt='HTML5' height='48px'>
                    </div>
        
                    <div class='tooltip'>
                        <span class='tooltiptext'>CSS3</span>
                        <img src='stuff/images/skills/css3.svg' alt='CSS3' height='48px'>
                    </div>
        
                    <br>
                    <br>
                    <br>
                    <br>
        
                    <h3>Tools, Editors, IDEs:</h3>
        
                    <div class='tooltip'>
                        <span class='tooltiptext'>Git</span>
                        <img src='stuff/images/skills/git.svg' alt='Git' height='48px'>
                    </div>
                    
                    <div class='tooltip'>
                        <span class='tooltiptext'>Github</span>
                        <img src='stuff/images/skills/github.svg' alt='Github' height='48px'>
                    </div>
        
                    <div class='tooltip'>
                        <span class='tooltiptext'>VS Code</span>
                        <img src='stuff/images/skills/vscode.svg' alt='Visual Studio Code' height='48px'>
                    </div>
        
                    <div class='tooltip'>
                        <span class='tooltiptext'>Pycharm</span>
                        <img src='stuff/images/skills/pycharm.svg' alt='Pycharm' height='46px'>
                    </div>
                </div>
            </section>
            "; }
    ?>

    <button onclick="goToTop()" id="go-to-top">
        <i class="fas fa-arrow-up"></i>
	</button>

    <br> <br> <br> <br> <br>

    <footer>
        <p title="Programmed by Immanuel"> ?? Made with ?????? by Immanuel ?? </p>
        <br>
        <div>
            <a href="mailto:contact@immanuelm.de">Kontakt</a>
            <a href="#-404-">Impressum</a>
            <a href="https://github.com/ximmanuel/portfolio" target="_blank">Sourcecode</a>
        </div>
        <div class="footer-social-media-links">
            <a href="https://github.com/ximmanuel" target="_blank">??? Github</a>
            <br> <br>
            <a href="https://instagram.com/ximmanuelm" target="_blank">??? Instagram</a>
            <br> <br>
            <a href="https://twitter.com/ximmanuelm" target="_blank">??? Twitter</a>
        </div>
    </footer>
</body>
</html>
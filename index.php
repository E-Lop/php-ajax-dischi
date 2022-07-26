<!-- Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: 
al caricamento della pagina ci saranno tutti i dischi.
Seconda Milestone:
Attraverso l’utilizzo di axios: al caricamento della pagina axios chiederà, attraverso una chiamata api, i dischi a php e li stamperà attraverso vue.
Bonus:
Attraverso un’altra chiamata api, filtrare gli album per genere lato backend. -->

<!-- importazione del database di dischi -->
<?php require_once __DIR__ . '/database.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi php</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- HEADER -->
    <header>
        <div class="logo">
            <img src="img\Spotify_logo_without_text.svg.png" alt="logo di spotify">
        </div>
    </header>

    <!-- MAIN -->
    <main>
        <div class="container">
            <div class="discs-box">
                
                    <?php foreach($database as $singleDisc) { ?>
                        <div class="disc-card">
                            <img src="<?php echo $singleDisc['poster'] ?>" alt="copertina del disco <?php echo $singleDisc['title'] ?>">
                            <h2><?php echo $singleDisc['title'] ?></h2>
                            <p class="author"><?php echo $singleDisc['author'] ?></p>
                            <p class="published"><?php echo $singleDisc['year'] ?></p>
                        </div>
                        
                    <?php } ?>
                
            </div>
        </div>
    </main>
</body>
</html>
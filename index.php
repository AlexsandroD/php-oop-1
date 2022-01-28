<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:

-- è definita una classe ‘Movie’
        - all'interno della classe sono dichiarate delle variabili d'istanza
        - all'interno della classe è definito un costruttore
        - all'interno della classe è definito almeno un metodo
-- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php 
        require_once __DIR__. '/classes.php';

        $movies =[
                new Movie ('Batman','9','EN','3h','azione'),
                new Movie ('Spiderman','9','IT','2h','azione'),
                new Movie ('Ironman','9','EN','2.5h','sci-fi'),
                new Movie ('Gesuman','9','JP','33h','religione'),
                new Movie ('Superman','9','EN','2.5h','azione'),
        ];
         $moviesAnime =[
                new Movie ('Dragon ball','9','EN','3h','azione'),
                new Movie ('Naruto','9','IT','2h','azione'),
                new Movie ('Banana','9','EN','2.5h','sci-fi'),
                new Movie ('Renzi','9','JP','33h','religione'),
                new Movie ('Demon Slayer','9','EN','2.5h','azione'),
        ];

        ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="./css/style.css">
         <title>Movie</title>
 </head>
 <body>
<main>
        <div class="main-container">
                <h1>Movies</h1>
                <div class="container">
                <?php foreach ($movies as $movie) { ?>
                        <div class="info">
                                <h2><?php echo $movie->titolo ?></h2>
                                <ul>
                                        <li>Voto: <?php echo "{$movie->voto}"?></li>
                                        <li>Genere: <?php echo "{$movie->genere}"?></li>
                                        <li>Lingua:<?php echo "{$movie->getLeng()}"?></li>
                                </ul>
                        </div>
                                <?php } ?>
                </div>
                <h1>Anime Movies</h1>    
                <div class="container">
                <?php foreach ($moviesAnime as $movie) { ?>
                        <div class="info">
                                <h2><?php echo $movie->titolo ?></h2>
                                <ul>
                                        <li>Voto: <?php echo "{$movie->voto}"?></li>
                                        <li>Genere: <?php echo "{$movie->genere}"?></li>
                                        <li>Lingua:<?php echo "{$movie->getLeng()}"?></li>
                                </ul>
                        </div>
                                <?php } ?>
                 </div>
        </div>
</main> 
 </body>
 </html>
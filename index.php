<?php
include __DIR__ . '/partials/head.php';
include __DIR__ . '/Models/Movie.php';

$movies =
    [
        new Movie("Le ali della libertà", "The Shawshank Redemption", "USA", "1994-09-10", 9.3, "https://shorturl.at/movXZ"),
        new Movie("Il Padrino", "The Godfather", "USA", "1972-03-24", 9.2, "https://shorturl.at/goqI9"),
        new Movie("Fight Club", "Fight Club", "USA", "1999-09-10", 8.8, "https://shorturl.at/qvMZ4")
    ];
?>

<div class="container d-flex gap-2 flex-wrap">
    <?php foreach ($movies as $movie) { ?>
        <div class="card" style="width: 18rem;">
          <?php echo $movie->getImage(); ?>
            <div class="card-body">
                <h5 class="card-title"><?php echo $movie->title ?></h5>
                <small>Titolo originale: <?php echo $movie->original_title ?></small>
                <?php echo $movie->getInfo();?>
            </div>
        </div>
    <?php    } ?>
</div>

<?php include __DIR__ . '/partials/footer.php'; ?>
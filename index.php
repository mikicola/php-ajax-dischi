<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
    <div class="container">
        <img
        src="https://upload.wikimedia.org/wikipedia/commons/7/71/Spotify.png"
        alt="Logo Spotify"/>

        <!-- <select class="genre-selector">
        <option selected>Seleziona genere</option>
        <option value="Rock">Rock</option>
        <option value="pop">pop</option>
        <option value="metal">metal</option>
        </select> -->
    </div>
    </header>

    <main>
    <div class="discs container">
        <?php
        include_once __DIR__ . '/data-discs.php';
        // qui va la card disco
        foreach ($arrDataDiscs as $dataDisc) {?>
            <div class="card-disc">
                <img src="<?= $dataDisc['poster']?>" alt="<?= $dataDisc['title']?>">
                <h3><?= $dataDisc['title']?></h3>
                <small><?= $dataDisc['author']?></small>
                <strong><?= $dataDisc['year']?></strong>
            </div> <?php
        }
        ?>
    </div>
    </main>
</body>
</html>

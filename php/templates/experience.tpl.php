<?php
    include_once "./data/data.php";
    require_once "./templates/header.tpl.php";
?>


<main>
    <section>

        <div class="bloc__experiences">
            <div class="experiences_professionnelles__missions">
                <h2><?= $poste['poste'] ?></h2>
                <h4><em>au sein du <strong><?= $poste['employeur'] ?></strong></em></h4>
            </div>
            <p class="dates"><?= $poste['dates'] ?></p>
            <?= $poste['missions'] ?>
        </div>
        <a href="../php/index.php" class="post__link__experience">Back to home
	    </a>
        

</main>


<?php
    require "./templates/footer.tpl.php";
?>

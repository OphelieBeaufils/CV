<?php
    include_once "./data/data.php";
    require_once "./templates/header.tpl.php";
?>


<main>
    <section class="section_index">
        <div>
          <h2>Expériences professionnelles</h2>
        </div>


<?php
    foreach ($experiences as $postes => $experience) :
?>
        <div class="bloc">
            <div class="experiences_professionnelles__missions">
                <h3><?= $experience['poste'] ?></h3>
                <h4><em>au sein du <strong><?= $experience['employeur'] ?></strong></em></h4>
            </div>
            <p class="dates"><?= $experience['dates'] ?></p>
            <?= $experience['missions_courtes'] ?>
            <p class="en_savoir"><a href="./experience.php?id=<?=$postes ?>">En savoir <span class="en_savoir__plus"> +</span></a> </p></br>
        </div>
        
<?php
    endforeach;
?>

    </section>
    <section class="section_index">
        <h2>Compétences</h2>
            <div class="bloc">
        </div>
    </section>
    <section class="section_index">
        <h2>Formations</h2>
        <div class="bloc">
    </div>
    </section>
</main>


<?php
    require "./templates/footer.tpl.php";
?>

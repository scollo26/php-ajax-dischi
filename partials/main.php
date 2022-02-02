<?php 
include_once __DIR__ . "/../server/db.php";

?>




<div class="container ">
    <div class="flex">

        <?php 
        foreach ($albums as $disc) {
    
        ?>
        <div class="card-container">
            <img class="card-img" src="<?= $disc['poster']?>" alt="">
            <h4 class="card-title"><?= $disc['title']?></h4>
            <h5 class="card-author"><?= $disc['author']?></h5>
            <p class="card-year"><?= $disc['year']?></p>
        </div>
        <?php } ?>

    </div>
</div>
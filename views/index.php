<?php require 'partials/header.php' ?>



    Home

    <h1>Hello <?= $name ?></h1>   <!-- sama, mis <?php echo $name ?> -->

    <?php if(true): ?>
    <h1>True</h1>
    <?php else: ?>
    <h1>False</h1>
    <?php endif ?>

    
    <ol>
        <?php for($i=0;$i<10;$i++): ?>
            <li>Item <?= $i ?></li>
        <?php endfor ?>
    </ol>

<?php require 'partials/footer.php' ?>
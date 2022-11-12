<?php use GitPetra\Core\Application; ?>

<div class="col-12 py-5 text-center">
    <h1>
        <?php echo Application::$app->language->dictionary['About_Pro'];?>
    </h1>
</div>

<div class="col-lg-7 pb-5">
    <div class="card">
        <div class="card-body">
            <?php echo Application::$app->language->dictionary['About_Dec'];?>
        </div>
    </div>
</div>
<div class="col-lg-5">
    <img src="<?php echo IMG . 'UseCase.svg' ?>" class="img-fluid" alt="Use Case">
</div>
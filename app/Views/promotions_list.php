<?php echo $this->extend('base_template'); ?>

<?php $this->section('content') ?>
    <div class="container">
        <h1 class="my-4"><?php echo $header; ?></h1>
        <?php foreach ($list as $promotion) : ?>
            <div class="row promo-section">
                <div class="col-md-8 promo-image">
                    <img src="<?php echo $promotion->image ?>" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-md-4 promo-content">
                    <h2><?php echo $promotion->title ?></h2>
                    <p><?php echo $promotion->description ?></p>
                    <a href="#" class="btn cta-button">CTA #<?php echo $promotion->id; ?></a>
                </div>
            </div>
        <?php endforeach; ?>
    </div> 
<?= $this->endSection() ?>
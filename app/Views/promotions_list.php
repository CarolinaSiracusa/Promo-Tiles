<?php echo $this->extend('base_template'); ?>

<?php $this->section('content') ?>
    <div class="container">
        <h1 class="my-4"><?php echo $header; ?></h1>
        <a class="btn btn-primary buttonspace" href="<?php echo base_url('promos/add'); ?>">Add Promotion</a>
        <div id="promos-container">
            <?php foreach ($list as $promotion) : ?>
            <div class="row promo-section" id="<?php echo $promotion['id']; ?>">
                <div class="col-md-8">
                    <img src="<?php echo $promotion['image'] ?>" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-md-2 promo-content">
                    <h2><?php echo $promotion['title'] ?></h2>
                    <p><?php echo $promotion['description'] ?></p>
                    <button class="btn cta-button" onclick="toTop(<?php echo $promotion['id']; ?>)">CTA #<?php echo $promotion['id']; ?></button>
                </div>
                <div class="col-md-2 promo-content">
                    <a class="btn btn-secondary" href="<?php echo base_url('promos/'. $promotion['id'].'/edit'); ?>"><i class="fas fa-edit"></i></a>
                    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" 
                    data-url=<?php echo base_url('promos/'. $promotion['id']); ?>><i class="fas fa-trash-alt"></i></a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="modal fade" id="deleteModal" name="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="deleteModalLabel">Warning</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this Promotion?</p>
                </div>
                <div class="modal-footer">
                    <form id="form-delete" action="" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>

<?php $this->section('script') ?>
    <script>
        const deleteModal = document.getElementById('deleteModal')
        if (deleteModal) {
            deleteModal.addEventListener('show.bs.modal', event => {
                // Button that triggered the modal
                const button = event.relatedTarget
                // Extract info from data-bs-* attributes
                const url = button.getAttribute('data-url')

                // Update the modal's content.
                const form = deleteModal.querySelector('#form-delete')
                form.setAttribute('action', url)
            })
        }
    </script>

    <script>
        function toTop(id) {
            const promoTile = document.getElementById(id);
            // const promoContainer = document.getElementById('promos-container');
            const promoTileParent = promoTile.parentElement;
            promoTileParent.removeChild(promoTile);
            promoTileParent.prepend(promoTile);
        }
    </script>
<?= $this->endSection() ?>
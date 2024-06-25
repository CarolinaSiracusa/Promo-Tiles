<?php echo $this->extend('base_template'); ?>

<?php $this->section('content') ?>
    <div class="container">
        <div class="row">
            <h1 class="my-4"><?php echo $header; ?></h1>
        </div>
        <div class="row">
            <a class="btn btn-primary" href="<?php echo base_url('promos/add'); ?>">Add Promotion</a>
        </div>
        <div id="promos-container">
            <?php foreach ($list as $promotion) : ?>
            <div class="row promo-section promo-style" id="<?php echo $promotion['id']; ?>">
                <div class="col-md-6 container image-size">
                    <img src="<?php echo $promotion['image'] ?>" alt="Responsive image">
                </div>
                <div class="col-md-4 promo-content">
                    <h2><?php echo $promotion['title'] ?></h2>
                    <p class="arial-text"><?php echo $promotion['description'] ?></p>
                    <div>
                        <a class="link" data-bs-toggle="modal" data-bs-target="#moreInformationModal">*More Information</a>
                    </div>
                    <div>
                        <button class="btn cta-button" onclick="toTop(<?php echo $promotion['id']; ?>)">CTA #<?php echo $promotion['id']; ?></button>
                    </div>
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
    <!-- More Information Modal -->
    <div class="modal fade" id="moreInformationModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Promotion Details</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>More promotion information goes here</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Delete Promotion Modal -->
    <div class="modal fade" id="deleteModal" name="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title" id="deleteModalLabel">Warning</h1>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
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
            const promoTileParent = promoTile.parentElement;
            promoTileParent.removeChild(promoTile);
            promoTileParent.prepend(promoTile);
        }
    </script>
<?= $this->endSection() ?>
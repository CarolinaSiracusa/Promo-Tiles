<?php echo $this->extend('base_template'); ?>
<?php $this->section('content') ?>
    <div class="container">
        <h1>Edit Promotion</h1>
        <form action="<?php echo base_url('promos/'. $promotion['id']) ?>" method="post">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="promotion_id" value="<?php echo $promotion['id'] ?>">
            <div class="form-group">
                <label class="title" for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Enter title" value="<?php echo $promotion['title'] ?>" required>
            </div>
            <div class="form-group">
                <label class="title" for="image">Image</label>
                <input type="url" class="form-control" name="image" id="image" placeholder="www.image.com" value="<?php echo $promotion['image'] ?>" required>
            </div>
            <div class="form-group">
                <label class="title" for="description">Description</label>
                <input type="text" class="form-control" name="description" id="description" placeholder="Enter description" value="<?php echo $promotion['description'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div> 
<?= $this->endSection() ?>
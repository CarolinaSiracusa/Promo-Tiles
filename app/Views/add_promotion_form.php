<?php echo $this->extend('base_template'); ?>
<?php $this->section('content') ?>
    <div class="container">
        <h1>Add a New Promotion</h1>
        <form action="<?php echo site_url('promos/submit') ?>" method="post" autocomplete="off">
            <div class="form-group">
                <label class="title" for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Enter title" value="<?php set_value('title') ?>" required>
            </div>
            <div class="form-group">
                <label class="title" for="image">Image</label>
                <input type="url" class="form-control" name="image" id="image" placeholder="www.image.com" value="<?php set_value('image') ?>" required>
            </div>
            <div class="form-group">
                <label class="title" for="description">Description</label>
                <input type="text-area" class="form-control" name="description" id="description" placeholder="Enter title" value="<?php set_value('description') ?>">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div> 
<?= $this->endSection() ?>
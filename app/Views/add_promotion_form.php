<?php echo $this->extend('base_template'); ?>

<?php $this->section('content') ?>
    <div class="container">
        <div class="row">
            <h1 class="my-4">Add a New Promotion</h1>
        </div>
        <form action="<?php echo base_url('promos/submit') ?>" method="post" autocomplete="off">
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
                <input type="text" class="form-control" name="description" id="description" placeholder="Enter description" value="<?php set_value('description') ?>">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
            <button type="button" class="btn btn-secondary" onclick="history.back()">Go Back</button>
        </form>
    </div> 
<?php $this->endSection() ?>
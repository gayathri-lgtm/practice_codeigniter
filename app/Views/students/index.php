<?=$this->extend("layouts/base");?>
<?=$this->section("body");?>

<div class="container mt-5">
    <div class="card shadow-lg p-4 mx-auto" style="max-width: 500px;">
        <h1 class="text-center text-primary mb-4">Fill the Form</h1>

        <?= form_open('students/index') ?>

        
        
                <?= validation_list_errors() ?>
           

        <div class="mb-3">
            <label class="form-label">Name:</label>
            <input type="text" name="name" class="form-control" value="<?= set_value('name') ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Email:</label>
            <input type="email" name="email" class="form-control" value="<?= set_value('email') ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Gender:</label>
            <input type="text" name="gender" class="form-control" value="<?= set_value('gender') ?>">
            
        </div>

        <div class="mb-3">
            <label class="form-label">Phone:</label>
            <input type="text" name="phone" class="form-control" value="<?= set_value('phone') ?>">
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-success w-100">Submit</button>
        </div>

        <?= form_close() ?>
    </div>
</div>

<?=$this->endSection();?>

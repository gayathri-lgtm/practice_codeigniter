<?=$this->extend("layouts/base");?>
<?=$this->section("body");?>

<div class="container mt-5">
    <div class="card shadow-lg p-4 mx-auto" style="max-width: 500px;">
        <h1 class="text-center text-primary mb-4">Fill the Form</h1>
        <form action="<?= site_url('students/login') ?>" method="POST">
            
            <div class="mb-3">
                <label class="form-label">Name:</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email:</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Gender:</label>
                <input type="text" name="gender" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Phone:</label>
                <input type="text" name="phone" class="form-control">
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-success w-100">Submit</button>
            </div>
        </form>
    </div>
</div>

   
</form>
</div>




<?=$this->endsection();?>










<?=$this->extend("layouts/base");?>
<?=$this->section("body");?>

<div style="text-align:center;">
<h1>Fill the form</h1>
<form action="<?= site_url('students/login') ?>" method="POST">
    <h2>Name: <input type="text" name="name"></h2>
    <h2>Email: <input type="email" name="email"></h2>
    <h2>Gender: <input type="text" name="gender"></h2>
    <input type="submit" value="Submit">
</form>
</div>



<?=$this->endsection();?>










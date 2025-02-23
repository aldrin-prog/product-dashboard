<?php $this->extend('layout/main');?>
<?php $this->section('nav_header'); ?>
    <?=view('partials/_nav_register')?>
<?php $this->endSection();?>
<?php $this->section("content");?>
<?php //var_dump(validation_errors())?>
<h1>Register</h1>
<form action="/register" method="post" class="w-25">
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" value="johndoe@email.com" required name="email" class="form-control border border-2 border-dark">
        <span><?=validation_show_error('email')?></span>
    </div>
    <div class="mb-3">
        <label class="form-label">First name</label>
        <input type="text" value="John" required name="first_name" class="form-control border border-2 border-dark">
        <span><?=validation_show_error('first_name')?></span>
    </div>
    <div class="mb-3">
        <label class="form-label">Last name</label>
        <input type="text" value="Doe" required name="last_name" class="form-control border border-2 border-dark">
        <span><?=validation_show_error('last_name')?></span>
    </div>
    <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" required value="password" name="password" class="form-control border border-2 border-dark">
        <span><?=validation_show_error('password')?></span>
    </div>
    <div class="mb-3">
        <label class="form-label">Confirm Password</label>
        <input type="password" value="password@" required name="confirm_password" class="form-control border border-2 border-dark">
        <span><?=validation_show_error('confirm_password')?></span>
    </div>
    <button type="submit" class="d-block w-max ms-auto btn btn-md btn-success border border-3 border-dark">Register</button>
</form>
<p>
    <a href="<?=route_to('login');?>">Already have an account? Login</a>
</p>
<?php $this->endSection();?>
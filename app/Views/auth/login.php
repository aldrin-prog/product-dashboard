<?php $this->extend('layout/main');?>
<?php $this->section('nav_header'); ?>
    <?=view('partials/_nav_login')?>
<?php $this->endSection();?>
<?php $this->section("content");?>
    <h1>Login</h1>
    <form action="/login" method="post" class="w-25">
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control border border-2 border-dark">
            <span><?=validation_show_error('email')?></span>
        </div>
        <div class="mb-3">
            <label  class="form-label">Password</label>
            <input type="password" name="password" id="" class="border border-2 border-dark form-control">
            <span><?=session()->getFlashdata('error')?></span>
            <span><?=validation_show_error('password')?></span>
        </div>
        <button type="submit" class="btn w-max d-block ms-auto px-4 shadow-md btn-md btn-success border border-3 border-dark">Login</button>
    </form>
    <p>
        <a href="<?=route_to('register');?>">Don't have an account? Register</a>
    </p>
<?php $this->endSection();?>
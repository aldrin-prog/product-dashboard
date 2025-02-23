<!-- product/new.php -->
<?php $this->extend("layout/main");?>
<?php $this->section("nav_header");?>
    <?=view('partials/_nav_user')?>
<?php $this->endSection();?>
<?php $this->section("content");?>
<h1>Edit Profile</h1>
<div class="row mt-5">
    <div class="col">
        <div class="border border-2 border-dark p-4 position-relative">
            <span  style="top:-15px" class="position-absolute bg-white">Edit Information</span>
            <form action="" method="post">
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control border border-2 border-dark">
                </div>
                <div class="mb-3">
                    <label class="form-label">First name</label>
                    <input type="text" name="first_name" class="form-control border border-2 border-dark">
                </div>
                <div class="mb-3">
                    <label class="form-label">Last name</label>
                    <input type="text" name="last_name" class="form-control border border-2 border-dark">
                </div>
                <button type="submit" class="w-max d-block btn btn-success border border-2 border-dark ms-auto">Save</button>
            </form>
        </div>
    </div>
    <div class="col">
        <div class="border border-2 border-dark p-4 position-relative">
            <span  style="top:-15px" class="position-absolute bg-white">Change Password</span>
            <form action="" method="post">
                <div class="mb-3">
                    <label class="form-label">Old Password</label>
                    <input type="email" name="password" class="form-control border border-2 border-dark">
                </div>
                <div class="mb-3">
                    <label class="form-label">New Password</label>
                    <input type="email" name="password" class="form-control border border-2 border-dark">
                </div>
                <div class="mb-3">
                    <label class="form-label">Confirm Password</label>
                    <input type="email" name="password" class="form-control border border-2 border-dark">
                </div>
                <button type="submit" class="w-max d-block btn btn-success border border-2 border-dark ms-auto">Save</button>
            </form>
        </div>
    </div>
</div>
<?php $this->endSection();?>
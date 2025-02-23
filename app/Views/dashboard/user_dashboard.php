<?php $this->extend('layout/main');?>

<?php $this->section("nav_header");?>
    <?=view('partials/_nav_user')?>
<?php $this->endSection();?>

<?php $this->section('content');?>
<div class="row">
    <div class="col col-md-9 m-auto">
        <div class="d-flex justify-content-between">
            <h3>Manage Products</h3>
        </div>
        <table class="table table-bordered table-striped mt-5">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Inventory Count</th>
                    <th>Quality Sold</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><a href="/products/show/1">Cap</a></td>
                    <td>100</td>
                    <td>90</td>
                </tr>
            </tbody>
        </table>
    </div>
    
</div>
<?php $this->endSection();?>
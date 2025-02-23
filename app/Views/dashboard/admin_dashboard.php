<?php $this->extend('layout/main');?>

<?php $this->section("nav_header");?>
    <?=view('partials/_nav_user')?>
<?php $this->endSection();?>

<?php $this->section('content');?>
<div class="row">
    <div class="col col-md-9 m-auto">
        <div class="d-flex justify-content-between">
            <h3>Manage Products</h3>
            <a href="<?=route_to("new_product")?>" class="btn btn-primary px-4 border border-2 border-dark">Add New</a>
        </div>
        <table class="table table-bordered table-striped mt-5">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Inventory Count</th>
                    <th>Quality Sold</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Cap</td>
                    <td>100</td>
                    <td>90</td>
                    <td>
                        <div class="d-flex gap-5">
                            <a href="">edit</a>
                            <a href="">remove</a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    
</div>
<?php $this->endSection();?>
<!-- product/new.php -->
<?php $this->extend("layout/main");?>
<?php $this->section("nav_header");?>
    <?=view('partials/_nav_user')?>
<?php $this->endSection();?>
<?php $this->section("content");?>
<div class="row">
    <div class="col col-md-9 m-auto">
        <div class="d-flex justify-content-between">
            <h3>Edit Product #<?=$product['id']?></h3>
            <a href="<?=route_to("dashboard")?>" class="btn btn-primary px-4 border border-2 border-dark">Return to Dashboard</a>
        </div>
        <div class="row mt-5">
            <div class="col col-lg-4">
                <form action="/products/update/<?=$product['id']?>" method="post">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" value="<?=$product['name']?>" required name="name" class="form-control border border-2 border-dark">
                        <span><?=validation_show_error("name")?></span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control border border-2 border-dark" name="description" rows="3"><?=$product['description']?></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Price</label>
                        <input type="text" required value="<?=$product['price']?>" name="price" class="form-control border border-2 border-dark">
                        <span><?=validation_show_error("price")?></span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Inventory Count</label>
                        <input type="number" required name="quantity" min="1" value="<?=$product["quantity"]?>" max="100"
                            class="form-control border border-2 border-dark w-25">
                        <span><?=validation_show_error("quantity")?></span>
                    </div>
                    <button type="submit" class="d-block w-max ms-auto btn btn-success border border-2 border-dark">Update</button>
                </form>

            </div>
        </div>
    </div>
</div>
<?php $this->endSection();?>
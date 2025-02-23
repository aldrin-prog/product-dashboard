<!-- product/new.php -->
<?php $this->extend("layout/main");?>
<?php $this->section("nav_header");?>
    <?=view('partials/_nav_user')?>
<?php $this->endSection();?>
<?php $this->section("content");?>
<div class="row">
    <div class="col col-md-9 m-auto">
        <div class="d-flex justify-content-between">
            <h3>Add  a new Product</h3>
            <a href="<?=route_to("dashboard")?>" class="btn btn-primary px-4 border border-2 border-dark">Return to Dashboard</a>
        </div>
        <div class="row mt-5">
            <div class="col col-lg-4">
                <form action="<?=route_to()?>" method="post">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" value="T-Shirt" required name="name" class="form-control border border-2 border-dark">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control border border-2 border-dark" col="2" name="description" rows="3">
                            Embrace the vibrant energy of summer with our "Summer Breeze Tee"! This lightweight, 
                            ultra-soft t-shirt is perfect for keeping cool on those warm, sunny days.
                        </textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Price</label>
                        <input type="text" value="99.99" required name="price" class="form-control border border-2 border-dark">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Inventory Count</label>
                        <input type="number" required name="inventory_count" min="1" value="1" max="100"
                            class="form-control border border-2 border-dark w-25">
                    </div>
                    <button type="submit" class="d-block w-max ms-auto btn btn-success border border-2 border-dark">Create</button>
                </form>

            </div>
        </div>
    </div>
</div>
<?php $this->endSection();?>
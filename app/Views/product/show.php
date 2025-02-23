<!-- product/new.php -->
<?php $this->extend("layout/main");?>
<?php $this->section("nav_header");?>
    <?=view('partials/_nav_user')?>
<?php $this->endSection();?>
<?php $this->section("content");?>
<h2 class="mb-3">(Product Name) (product_price)</h2>
<div class="d-flex mt-4  flex-column gap-2">
    <p>Added since: December 21 2021</p>
    <p>Product ID: #2</p>
    <p>Description: Legit,comfortable V88 Tshirt available in any size</p>
    <p>Total sold: 10</p>
    <p>Number of available stocks: 120</p>
</div>
<div class=" mt-4 ">
    <h4>Leave a Review</h4>
    <form action="" method="post">
        <textarea style="resize:none;height:100px"  class="form-control border border-2 border-dark"   rows="3"></textarea>
        <button type="submit" class="border border-2 mt-3 d-block w-max ms-auto px-3 border-dark btn btn-success ">Post</button>
    </form>
</div>
<!-- Reviews -->
<section>
    <div>
        <div class=" mt-4 ">
            <div class="d-flex justify-content-between">
                <h6>Michael Choi wrote:</h6>
                <span class="fst-italic">7 hours ago</span>
            </div>
            <div class="border border-dark rounded border-2 p-3" style="height:max-content;min-height:100px">
                <span>Super cute! Will buy again</span>
            </div>
        </div>
        <div class=" mt-4 w-75 ms-auto ">
            <div class="mb-4 ">
                <div class="d-flex justify-content-between">
                    <h6>Karen wrote:</h6>
                    <span class="fst-italic">7 hours ago</span>
                </div>
                <div class="border border-dark rounded border-2 p-3" style="height:max-content;min-height:100px">
                    <span>Super cute! Will buy again</span>
                </div>
            </div>
            <form action="" method="post">
                <div class="form-floating">
                    <textarea style="height:100px" class="form-control border border-2 border-dark" placeholder="" id="floatingTextarea"></textarea>
                    <label for="floatingTextarea">Write message</label>
                </div>
                <button type="submit" class="border border-2 mt-3 d-block w-max ms-auto px-3 border-dark btn btn-success ">Post</button>
            </form>
        </div>
    </div>
</section>
<?php $this->endSection();?>
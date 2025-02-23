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
<?php foreach($products as $product): ?>
                <tr>
                    <td><?=$product['id']?></td>
                    <td>
                        <a href="/products/show/<?=$product['id']?>"><?=$product['name']?></a>
                    </td>
                    <td><?=$product['quantity']?></td>
                    <td><?=$product['sold']?></td>
                    <td>
                        <div class="d-flex gap-5">
                            <a href="/products/edit/<?=$product["id"]?>">edit</a>
                            <form id="delete_form" action="/products/delete/<?=$product["id"]?>" method="post">
                                <input type="hidden" name="_method" value="delete">
                                <a  class="delete_product text-primary cursor-pointer">delete</a>
                            </form>
                            <!-- <a href="/">remove</a> -->
                        </div>
                    </td>
                </tr>
<?php endforeach ?>
            </tbody>
        </table>
        <?=$pager->links()?>
    </div>
    
</div>

<?php $this->endSection();?>
<?php $this->section("script");?>
<script>
    $(document).ready(function(){
        $('a.delete_product').on("click",function(){
            const is_confirm=confirm("Are you sure?");
            if(is_confirm){
                $(this).closest('form').submit();
            }
        })
    })
</script>
<?php $this->endSection();?>

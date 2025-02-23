<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ProductsController extends BaseController
{
    public function index()
    {
        //
    }
    public function new(){
        return view("/product/new");
    }
    public function edit($id){
        return view("product/edit");
    }
    public function show($id){
        return view("product/show");
    }
}

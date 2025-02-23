<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Product;
class ProductsController extends BaseController
{
    protected $productModel;
    public function __construct() {
        $this->productModel=model(Product::class);    
    }
    public function new(){
        return view("/product/new");
    }
    public function edit($id){
        $product=$this->productModel->find($id);
        return view("product/edit",compact('product'));
    }
    public function update($id){
        try {
            $rules=[
                'name'=>'required',
                'price'=>'required',
                'description'=>'required',
                'price'=>'required|numeric',
                'quantity'=>'required|integer|greater_than[0]'
            ];
            $data=$this->request->getPost(array_keys($rules));
            if(!$this->validateData($data,$rules)){
                return redirect()->to('/products/edit/'.$id)->withInput();
            }
            if(!$this->productModel->update($id,$data)){
                throw new  Exception("unable able to update data");
            }
            return redirect()->route("dashboard");
           } catch (\Throwable $e) {
                // return redirect()->route("new_product")->with("server_error","Server related error");
        }
    }
    public function show($id){
        $product=$this->productModel->where("deleted_at",NULL)->find($id);
        return view("product/show",compact('product'));
    }
    public function store(){
       try {
        $rules=[
            'name'=>'required',
            'price'=>'required',
            'description'=>'required',
            'price'=>'required|numeric',
            'quantity'=>'required|integer|greater_than[0]'
        ];
        $data=$this->request->getPost(array_keys($rules));
        if(!$this->validateData($data,$rules)){
            return redirect()->route('new_product')->withInput();
        }
        if(!$this->productModel->save($data)){
            throw new  Exception("unable able to save data");
        }
        return redirect()->route("dashboard");
       } catch (\Throwable $e) {
            var_dump($e->getMessage());
            // return redirect()->route("new_product")->with("server_error","Server related error");
       }
    }
    public function destroy($id){
        try {
            $request=$this->request->getPost();
            if($request["_method"]!='delete'){
                return redirect()->route('dashboard')->with("system_error","Request must be a delete request.");
            }
            $this->productModel->delete($id);
            return redirect()->route('dashboard');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\User;
use App\Models\Product;
class DashboardController extends BaseController
{
    protected $userModel;
    protected $productModel;
    public function __construct() {
        $this->userModel=model(User::class);
        $this->productModel=model(Product::class);
    }
    public function index()
    {
        $userId=$this->session->get('user_id');
        if(!$userId)
            return redirect()->route('login');
        $pagerService=service('pager');
        $isUserAdmin = $this->userModel->select('is_admin')->find($userId);
        
        $products=$this->productModel->where("deleted_at",NULL)->orderBy('id','asc')->paginate(3);
        $pager=$this->productModel->pager;
        if($isUserAdmin['is_admin'])
            return view('dashboard/admin_dashboard',compact(['products','pager']));
        return view('dashboard/user_dashboard');
    }
}

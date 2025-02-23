<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\User;
class DashboardController extends BaseController
{
    protected $userModel;
    public function __construct() {
        $this->userModel=model(User::class);
    }
    public function index()
    {
        $userId=$this->session->get('user_id');
        if(!$userId)
            return redirect()->route('login');
        $isUserAdmin = $this->userModel->select('is_admin')->find($userId);
        if($isUserAdmin['is_admin'])
            return view('dashboard/admin_dashboard');
        return view('dashboard/user_dashboard');
    }
}

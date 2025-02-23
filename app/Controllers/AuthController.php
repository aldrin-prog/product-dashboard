<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\User;
class AuthController extends BaseController
{
    protected $userModel;

    public function __construct() {
        $this->userModel=model(User::class);
    }
    public function index()
    {
        //
    }
    public function login(){
        return view("auth/login");
    }
    public function sign_in(){
        try {
            $rules=[
                'password'=>'required|min_length[2]',
                'email'=>'required|valid_email'
            ];
            
            $data=$this->request->getPost(array_keys($rules));
            if(!$this->validateData($data,$rules)){
                return redirect()->route('login')->withInput();
            }
            $user=$this->userModel->where('email',$data['email'])->first();
            // if(!$user)
            if($user && !password_verify($data['password'],$user['password'])){
                $this->session->setFlashdata('error','Wrong password');
                return redirect()->route('login');
            }
            $this->session->set('user_id',$user['id']);
            return redirect()->route('dashboard');
        } catch (\Throwable $th) {
            throw $th;
            
            // echo "Database Error";
            
        }
    }
    public function register(){
        return view("auth/register");
    }
}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\User;
class UsersController extends BaseController
{
    protected $userModel;
    public function __construct() {
        $this->userModel=model(User::class);
    }
    public function index()
    {
        return view("user/index");
    }
    public function store(){
        try {
            $rules=[
                'first_name'=>[
                    'rules'=>'required|min_length[2]',
                    'errors'=>[
                        'min_length'=>'This field must have at least 2 characters.'
                    ]
                ],
                'last_name'=>[
                    'rules'=>'required|min_length[2]',
                    'errors'=>[
                        'min_length'=>'This field must have at least 2 characters.'
                    ]
                ],
                'password'=>'required|min_length[2]',
                'confirm_password'=>'required|matches[password]',
                'email'=>'required|valid_email|is_unique[users.email]'
            ];
            
            // $request=$this->request->getPost();
            $data=$this->request->getPost(array_keys($rules));
            if(!$this->validateData($data,$rules)){
                return redirect()->route('register')->withInput();
                // var_dump($this->validation->getErrors());
            }
    
            unset($data['confirm_password']);
            $data['password']=password_hash($data['password'],PASSWORD_BCRYPT);
            $this->userModel->save($data);
            return redirect()->route('login');
        } catch (\Throwable $th) {
            throw $th;

            // echo "Database Error";
        }
    }
}

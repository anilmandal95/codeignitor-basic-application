<?php

namespace App\Controllers;
use App\Models\userModel;
class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function register()
    {
        if($this->request->getMethod() == "get"){
            echo view('register');
        }
        else if($this->request->getMethod() == "post"){
            //Submit the formdata
            $rules = [
                "username"=>"required|min_length[6]|max_length[20]",
                "email"=>"required|valid_email",
                "password"=>"required|integer"
            ];
            //custom error message
            // $message = [
            //     "username" => [
            //         "required" => "Field is required by Anil",
            //         "min_length",
            //         "max_length"
            //     ],
            //     "email" => [
            //         "required",
            //         "valid_email"
            //     ],
            //     "password" => [
            //         "required",
            //         "integer"
            //     ]
            // ];
            // if(!$this->validate($rules, $message)){
            //     //data not found block
            //     return view('register',[
            //         "validation" => $this->validator
            //     ]);
            //    // return redirect()->back()->withInput();
               
            // }
            if(!$this->validate($rules)){
                //data not found block
                return view('register',[
                    "validation" => $this->validator
                ]);
               // return redirect()->back()->withInput();
               
            }else{
                //success block

              $username = $this->request->getVar("username");
              $email = $this->request->getVar("email");
              $password = $this->request->getVar("password");

              $data = [
                "username" => $username,
                "email" => $email,
                "password" => $password
              ];

              $model = new userModel();
              if(!isset($data)){
                echo "Data not found";
              }else{
                if($model->insert($data)){
                    $session = session();
                    $session->set('success_message', 'User registered successfully');
                    $session->markAsFlashdata('success_message');
                  }
                  return view('register');

              }
             
              
            }
          

        }
    }

    public function login()
    {
        echo view('login');
    }



























    // How to pass parameter in function

    public function multiply($a=0, $b=0)
    {
        $c=$a*$b;
        echo ('Multiplication is:'.$c);
    }

    public function countProduct($a=0)
    {
        echo ('Multiplication is:'.$a);
    }
  
}

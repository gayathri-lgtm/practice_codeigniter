<?php
namespace App\Controllers;



class StudentController extends BaseController
{
    
  public function index(): string
{
    $data = [];
 return view("students/index");
}
 public function login()
    {
     
        $name = $this->request->getPost('name');

      
        return view('students/login', ['name' => $name]);
    }


   
 

 

}




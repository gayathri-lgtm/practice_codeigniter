<?php
namespace App\Controllers;
use App\Model\studentmodel;


class StudentController extends BaseController
{
    
  public function index(): string
{
    $data = [];
 return view("students/index");
}
 public function login()

    {
      
       
       $studentModel = new \App\Models\StudentModel();

  
       $data["students"] = $studentModel->studentd(); 
     

      
        return view('students/login',$data);
    }

//  public function page_1()
// {
  
//     $studentModel = new \App\Models\StudentModel();

  
//     $data["students"] = $studentModel->studentd(); 

    
//     return view('students/login', $data);
// }





   
 

 

}




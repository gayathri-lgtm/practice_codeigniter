<?php
namespace App\Controllers;
use App\Models\Studentmodel;


class StudentController extends BaseController


{
  



 protected $helpers = ['form'];
    
  public function index()
{

    if (!$this->request->is("post")){
      return view("students/index");
    }
   

    $rules = [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'gender' => 'required'
    ];
    $data = $this->request->getpost(array_keys($rules));


   if(!$this->validateData($data,$rules)){

    return view("students/index");
   }
   $validData = $this->validator->getValidated();
   return redirect()->to("/students/login");







 
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




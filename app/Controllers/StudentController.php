<?php
namespace App\Controllers;
use App\Models\Studentmodel;
use App\Models\EntryModel;



class StudentController extends BaseController


{

  public $entryModel;
  public function __construct(){
    $this->entryModel = new EntryModel();

  }



 protected $helpers = ['form'];
    
  public function index()
{

    if (!$this->request->is("post")){
      return view("students/index");
    }
   $session = \Config\Services::session();

    $rules = [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'gender' => 'required'
    ];
    $data = $this->request->getpost(array_keys($rules));


   if ($this->validateData($data, $rules)) {
    $cdata = [
        "name"   => $this->request->getVar("name", FILTER_SANITIZE_STRING),
        "email"  => $this->request->getVar("email", FILTER_SANITIZE_STRING), 
        "gender" => $this->request->getVar("gender", FILTER_SANITIZE_STRING),
        "phone"  => $this->request->getVar("phone", FILTER_SANITIZE_STRING)
    ];

    $status = $this->entryModel->savedata($cdata);

    if ($status) {
        return redirect()->to("/students/login")->with('message', 'Data saved successfully!');
    } else {
        return redirect()->back()->with('error', 'Failed to save data.');
    }
}

   //$validData = $this->validator->getValidated();
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




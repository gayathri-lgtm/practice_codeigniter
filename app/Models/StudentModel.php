<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{
    public function studentd(){
        $db = \Config\Database::connect();
        $query = $db->query("SELECT * FROM students");
        $result = $query->getResult();
        // print_r($result);
        return $result;
        
    }
}

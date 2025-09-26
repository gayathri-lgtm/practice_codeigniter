<?php

namespace App\Models;

use CodeIgniter\Model;

class EntryModel extends Model
{
    protected $table = 'entry';  
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'phone', 'gender'];

    public function saveData($data)
    {
        return $this->insert($data) ? true : false;
    }
}

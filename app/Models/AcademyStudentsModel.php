<?php

namespace App\Models;

use CodeIgniter\Model;

class AcademyStudentsModel extends Model {
    protected $table = 'academy_students';

    protected $allowedFields = [
        'name',
        'phonenumber',
        'email',
        'school',
        'age',
        'date_of_birth',
        'gender',
        'height',
        'weight',
        'blood_group',
        'parents_name',
        'referred_by',
        'address',
        'coaching_type',
        'created_at',
        'updated_at',
    ];

    public function saveStudent($data){
        return $this->save($data);
    }
    
    public function getStudentInfo($id){
        return $this->find($id);
    }
    
    public function getRegistrationsList($coachingType){
        $records = $this->where('coaching_type', $coachingType)->findAll();
        $result = array();

        for($i = count($records)-1; $i >= 0; $i--)
            array_push($result, $records[$i]);

        return $result;
    }

    public function getRegistrationsCount($coachingType){
        $records = $this->where('coaching_type', $coachingType)->findAll();
        return count($records);
    }
}

?>
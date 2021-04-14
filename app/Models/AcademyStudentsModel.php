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
    
    public function getCricketStudentsList(){
        return $this->where('coaching_type', 'cricket')->findAll();
    }

    public function getFootballStudentsList(){
        return $this->where('coaching_type', 'football')->findAll();
    }
    
    public function getBodyFitnessStudentsList(){
        return $this->where('coaching_type', 'body_fitness')->findAll();
    }
    
    public function getCricketCount(){
        $cricketRecords = $this->where('coaching_type', 'cricket')->findAll();
        return count($cricketRecords);
    }    
    
    public function getFootballCount(){
        $footballRecords = $this->where('coaching_type', 'football')->findAll();
        return count($footballRecords);
    }
    
    public function getBodyFitnessCount(){
        $bodyFitnessRecords = $this->where('coaching_type', 'body_fitness')->findAll();
        return count($bodyFitnessRecords);
    }
}

?>
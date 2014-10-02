<?php

namespace GSB\Domain;

class PractitionerType
{
     /**
     * Family id.
     *
     * @var integer
     */
    private $practitioner_type_id;

    /**
     * Name.
     *
     * @var string
     */
    private $practitioner_type_code;
    
    private $practitioner_type_name;
    
    private $practitioner_type_place;
    
  
    public function getPractitioner_type_code() {
        return $this->practitioner_type_code;
    }

    public function setPractitioner_type_code($practitioner_type_code) {
        $this->practitioner_type_code = $practitioner_type_code;
    }
    
    public function getPractitioner_type_name() {
        return $this->practitioner_type_name;
    }

    public function setPractitioner_type_name($practitioner_type_name) {
        $this->practitioner_type_name= $practitioner_type_name;
    }

    
    public function getPractitioner_type_place() {
        return $this->practitioner_type_place;
    }

    public function setPractitioner_type_place($practitioner_type_place) {
        $this->practitioner_type_place = $practitioner_type_place;
    }
    public function getPractitioner_type_id() {
        return $this->practitioner_type_id;
    }

    public function setPractitioner_type_id($practitioner_type_id) {
        $this->practitioner_type_id = $practitioner_type_id;
    }

   
}
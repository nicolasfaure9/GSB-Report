<?php

namespace GSB\Domain;

class Practitioner
{
    
     private $practitioner_id;
    private $practitioner_type_id;
    private $practitioner_name;
    private $practitioner_first_name;
    private $practitioner_address;
    private $practitioner_zip_code;
    private $practitioner_city;
    private $notoriety_coefficient;
    
    
    public function getPractitioner_id() {
        return $this->practitioner_id;
    }

    public function getPractitioner_type_id() {
        return $this->practitioner_type_id;
    }

    public function getPractitioner_name() {
        return $this->practitioner_name;
    }

    public function getPractitioner_first_name() {
        return $this->practitioner_first_name;
    }

    public function getPractitioner_address() {
        return $this->practitioner_address;
    }

    public function getPractitioner_zip_code() {
        return $this->practitioner_zip_code;
    }

    public function getPractitioner_city() {
        return $this->practitioner_city;
    }

    public function getNotoriety_coefficient() {
        return $this->notoriety_coefficient;
    }

    public function setPractitioner_id($practitioner_id) {
        $this->practitioner_id = $practitioner_id;
    }

    public function setPractitioner_type_id($practitioner_type_id) {
        $this->practitioner_type_id = $practitioner_type_id;
    }

    public function setPractitioner_name($practitioner_name) {
        $this->practitioner_name = $practitioner_name;
    }

    public function setPractitioner_first_name($practitioner_first_name) {
        $this->practitioner_first_name = $practitioner_first_name;
    }

    public function setPractitioner_address($practitioner_address) {
        $this->practitioner_address = $practitioner_address;
    }

    public function setPractitioner_zip_code($practitioner_zip_code) {
        $this->practitioner_zip_code = $practitioner_zip_code;
    }

    public function setPractitioner_city($practitioner_city) {
        $this->practitioner_city = $practitioner_city;
    }

    public function setNotoriety_coefficient($notoriety_coefficient) {
        $this->notoriety_coefficient = $notoriety_coefficient;
    }


    
    
    
    
    
    
    
    
    
}
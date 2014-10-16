<?php

namespace GSB\Domain;

class Report {

    private $id;
    private $practitioner;
    private $visitor;
    private $date;
    private $assessment;
    private $purpose;

    public function getId() {
        return $this->id;
    }

    public function getPractitioner() {
        return $this->practitioner;
    }

    public function getVisitor() {
        return $this->visitor;
    }

    public function getDate() {
        return $this->date;
    }

    public function getAssessment() {
        return $this->assessment;
    }

    public function getPurpose() {
        return $this->purpose;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setPractitioner($practitioner) {
        $this->practitioner = $practitioner;
    }

    public function setVisitor($visitor) {
        $this->visitor = $visitor;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function setAssessment($assessment) {
        $this->assessment = $assessment;
    }

    public function setPurpose($purpose) {
        $this->purpose = $purpose;
    }

}

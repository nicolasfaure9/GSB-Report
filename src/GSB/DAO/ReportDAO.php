<?php

namespace GSB\DAO;

use GSB\Domain\Report;

class ReportDAO extends DAO {

    protected $practitionerDAO;

    public function setPractitionerDAO($practitionerDAO) {
        $this->practitionerDAO = $practitionerDAO;
    }

    public function findAll() {
        $sql = "select * from visit_report order by report_id";
        $result = $this->getDb()->fetchAll($sql);

        // Converts query result to an array of domain objects
        $reports = array();
        foreach ($result as $row) {
            $reportId = $row['report_id'];
            $reports[$reportId] = $this->buildDomainObject($row);
        }
        return $reports;
    }

    public function setVisitorDAO($visitorDAO) {
        $this->visitorDAO = $visitorDAO;
    }

    protected function buildDomainObject($row) {
        // Find the associated article
        $practitionerId = $row['practitioner_id'];
        $practitioner = $this->practitionerDAO->find($practitionerId);

        // Find the associated user
        $visitorId = $row['visitor_id'];
        $visitor = $this->visitorDAO->find($visitorId);

        $report = new Report();
        $report->setId($row['report_id']);
        $report->setAssessment($row['assessment']);
        $report->setDate($row['reporting_date']);
        $report->setPurpose($row['purpose']);
        $report->setPractitioner($practitioner);
        $report->setVisitor($visitor);
        return $report;
    }

    public function save($report) {
        $reportData = array(
        'practitioner_id' => $report->getPractitioner()->getId(),
        'visitor_id' => $report->getVisitor()->getId(),
        'reporting_date' => $report->getDate(),
        'assessment' => $report->getAssessment(),
        'purpose' => $report->getPurpose(),
            
        );
        
        if ($report->getId()) {
            // The comment has already been saved : update it
            $this->getDb()->update('visit_report', $reportData, array('com_id' => $report->getId()));
        } else {
            // The comment has never been saved : insert it
            $this->getDb()->insert('visit_report', $reportData);
            // Get the id of the newly created comment and set it on the entity.
            $id = $this->getDb()->lastInsertId();
            $report->setId($id);
        }
    }

}

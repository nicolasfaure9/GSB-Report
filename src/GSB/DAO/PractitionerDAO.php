<?php

namespace GSB\DAO;

use GSB\Domain\Practitioner;

class PractitionerDAO extends DAO {

    /**
     * @var \GSB\DAO\FamilyDAO
     */
    private $practitionerTypeDAO;

    public function setPractitionerTypeDAO($practitionerTypeDAO) {
        $this->practitionerTypeDAO = $practitionerTypeDAO;
    }

    /**
     * Returns the list of all drugs, sorted by trade name.
     *
     * @return array The list of all drugs.
     */
    public function findAll() {
        $sql = "select * from practitioner order by practitioner_name";
        $result = $this->getDb()->fetchAll($sql);

        // Converts query result to an array of domain objects
        $pracs = array();
        foreach ($result as $row) {
            $pracId = $row['practitioner_id'];
            $pracs[$pracId] = $this->buildDomainObject($row);
        }
        return $pracs;
    }

    /**
     * Returns the list of all drugs for a given family, sorted by trade name.
     *
     * @param integer $familyDd The family id.
     *
     * @return array The list of drugs.
     */
    public function findAllByPractitionerType($pracId) {
        $sql = "select * from practitioner where practitioner_id=? order by practitioner_name";
        $result = $this->getDb()->fetchAll($sql, array($pracId));

        // Convert query result to an array of domain objects
        $pracs = array();
        foreach ($result as $row) {
            $pracId = $row['practitioner_id'];
            $pracs[$pracId] = $this->buildDomainObject($row);
        }
        return $pracs;
    }

    /**
     * Returns the drug matching a given id.
     *
     * @param integer $id The drug id.
     *
     * @return \GSB\Domain\Drug|throws an exception if no drug is found.
     */
    public function find($id) {
        $sql = "select * from practitioner where practitioner_id=?";
        $row = $this->getDb()->fetchAssoc($sql, array($id));

        if ($row)
            return $this->buildDomainObject($row);
        else
            throw new \Exception("No practitioner found for id " . $id);
    }

    /**
     * Creates a Drug instance from a DB query result row.
     *
     * @param array $row The DB query result row.
     *
     * @return \GSB\Domain\Drug
     */
    protected function buildDomainObject($row) {
        $practitioner_type_id = $row['practitioner_type_id'];
        $practitioner_type = $this->practitionerTypeDAO->find($practitioner_type_id);

        $practitioner = new Practitioner();
        $practitioner->setPractitioner_id($row['practitioner_id']);

        $practitioner->setPractitioner_name($row['practitioner_name']);
        $practitioner->setPractitioner_first_name($row['practitioner_first_name']);
        $practitioner->setPractitioner_address($row['practitioner_address']);
        $practitioner->setPractitioner_zip_code($row['practitioner_zip_code']);
        $practitioner->setPractitioner_city($row['practitioner_city']);
        $practitioner->setNotoriety_coefficient($row['notoriety_coefficient']);
        $practitioner->setPractitioner_type_id($practitioner_type);
        return $practitioner;
    }

}

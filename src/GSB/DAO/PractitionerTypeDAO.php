<?php

namespace GSB\DAO;

use GSB\Domain\PractitionerType;

class PractitionerTypeDAO extends DAO
{
    /**
     * Returns the list of all families, sorted by name.
     *
     * @return array The list of all families.
     */
    public function findAll() {
        $sql = "select * from practitioner_type order by practitioner_type_code";
        $result = $this->getDb()->fetchAll($sql);
        
        // Converts query result to an array of domain objects
        $practitioners_type = array();
        foreach ($result as $row) {
            $practitionersTypeID = $row['practitioner_type_id'];
            $practitioners_type[$practitionersTypeID] = $this->buildDomainObject($row);
        }
        return $practitioners_type;
    }

    /**
     * Returns the family matching the given id.
     *
     * @param integer $id The family id.
     *
     * @return \GSB\Domain\Family|throws an exception if no family is found.
     */
    public function find($id) {
        $sql = "select * from practitioner where practitioner_type_id=?";
        $row = $this->getDb()->fetchAssoc($sql, array($id));

        if ($row)
            return $this->buildDomainObject($row);
        else
            throw new \Exception("No practititioner found for id " . $id);
    }

    /**
     * Creates a Family instance from a DB query result row.
     *
     * @param array $row The DB query result row.
     *
     * @return \GSB\Domain\Family
     */
    protected function buildDomainObject($row) {
        $practitioner_type = new PractitionerType();
        $practitioner_type->setPractitioner_type_id($row['practitioner_type_id']);
       // $practitioner_type->setPractitioner_type_code($row['practitioner_type_code']);
        //$practitioner_type->setPractitioner_type_name($row['practitioner_type_name']);
        //$practitioner_type->setPractitioner_type_place($row['practitioner_type_place']);
        
        return $practitioner_type;
    }
}
    


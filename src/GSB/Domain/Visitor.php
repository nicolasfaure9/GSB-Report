<?php

namespace GSB\Domain;

use Symfony\Component\Security\Core\User\UserInterface;

class Visitor implements UserInterface
{
     private $sector_id;
    private $laboratory_id;
    private $last_name;
    private $first_name;
    private $hiring_date;
    private $address;
    private $zip_code;
    private $city;
    private $type;
    /**
     * User id.
     *
     * @var integer
     */
    private $id;

    /**
     * User name.
     *
     * @var string
     */
    private $username;

    /**
     * User password.
     *
     * @var string
     */
    private $password;

    /**
     * Salt that was originally used to encode the password.
     *
     * @var string
     */
    private $salt;

    /**
     * Role.
     * Values : ROLE_USER or ROLE_ADMIN.
     *
     * @var string
     */
    private $role;
    
    
    public function getSector_id() {
        return $this->sector_id;
    }

    public function getLaboratory_id() {
        return $this->laboratory_id;
    }

    public function getLast_name() {
        return $this->last_name;
    }

    public function getFirst_name() {
        return $this->first_name;
    }

    public function getHiring_date() {
        return $this->hiring_date;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getZip_code() {
        return $this->zip_code;
    }

    public function getCity() {
        return $this->city;
    }

    public function getType() {
        return $this->type;
    }

    public function setSector_id($sector_id) {
        $this->sector_id = $sector_id;
    }

    public function setLaboratory_id($laboratory_id) {
        $this->laboratory_id = $laboratory_id;
    }

    public function setLast_name($last_name) {
        $this->last_name = $last_name;
    }

    public function setFirst_name($first_name) {
        $this->first_name = $first_name;
    }

    public function setHiring_date($hiring_date) {
        $this->hiring_date = $hiring_date;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    public function setZip_code($zip_code) {
        $this->zip_code = $zip_code;
    }

    public function setCity($city) {
        $this->city = $city;
    }

    public function setType($type) {
        $this->type = $type;
    }

                
    

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
        
    }

    /**
     * @inheritDoc
     */
    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    /**
     * @inheritDoc
     */
    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    /**
     * @inheritDoc
     */
    public function getSalt()
    {
        return $this->salt;
    }

    public function setSalt($salt)
    {
        $this->salt = $salt;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role) {
        $this->role = $role;
    }

    /**
     * @inheritDoc
     */
    public function getRoles()
    {
        return array($this->getRole());
    }

    /**
     * @inheritDoc
     */
    public function eraseCredentials() {
        // Nothing to do here
    }
}
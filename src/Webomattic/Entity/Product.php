<?php

namespace Webomattic\Entity;



/**
 * @Entity
 * @Table(name="products")
 */
class Product {

    /**
     * @Id @Column(type="integer") 
     * @GeneratedValue 
     */
    private $id;
    
    
    /**
     *@Column(name="name", type="string")
     */
    private $name;
    
    
    public function __construct() {
        
    }


    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

}

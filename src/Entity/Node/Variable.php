<?php

namespace Entity\Node;

class Variable {
    public function __construct($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    public function getFQCN(){
        return $this->fqcn;
    }
    public function setFQCN($fqcn){
        $this->fqcn = $fqcn;
    }
    private $name;
    private $fqcn;
}

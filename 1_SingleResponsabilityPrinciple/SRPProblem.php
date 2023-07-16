<?php
// SRP - Single Responsability Principle
// Conceito: Uma classe deve ter um, e somente um, motivo para mudar.

// Problema: A classe Course tem mais de uma responsabilidade, ela é responsável por criar um curso e uma categoria.
class Course {
    private $name;
    private $category;
    private $description;

    public function connection(){
        $pdo = new PDO();
        return $pdo;
    }

    public function createCategory(){
        $this->connection()->insert($this->category);
    }

    public function createCourse(){
        $this->connection()->insert($this->name);
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name= $name;
        return $this;
    }

    public function getCategory(){
        return $this->category;
    }

    public function setCategory($category){
        $this->category= $category;
        return $this;
    }

    public function getDescription(){
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description= $description;
        return $this;
    }
}
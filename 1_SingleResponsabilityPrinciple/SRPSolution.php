<?php
// Solução: Criar uma classe para cada responsabilidade.

// A classe Course é responsável por criar um curso.
class Course {
    private $name;
    private $category;
    private $description;

    public function __construct($name, $category, $description){
        $this->name = $name;
        $this->category = $category;
        $this->description = $description;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getCategory(){
        return $this->category;
    }

    public function setCategory($category) {
        $this->category = $category;
    }

    public function getDescription(){
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }
}

// A classe CourseRepository é responsável por salvar um curso.
class CourseRepository {
    private $pdo;

    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }

    public function save(Course $course){
        $query = "INSERT INTO courses (name, category, description) VALUES (?, ?, ?)";
        $statement = $this->pdo->prepare($query);
        $statement->execute([$course->getName(), $course->getCategory(), $course->getDescription()]);
    }
}
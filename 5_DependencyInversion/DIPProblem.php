<?php
// DIP - Dependency Inversion Principle
// Conceito: Depende de abstrações e não de implementações.

// Problema: A classe Movie depende da classe DramaCategory, ou seja, a classe Movie depende de uma classe concreta.
class DramaCategory{}

class Movie{
    private $name;
    private $category;

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name= $name;
    }

    // Problema: O método getCategory() retorna um objeto da classe DramaCategory, ou seja, a classe Movie depende de uma classe concreta.
    public function getCategory(){
        return new DramaCategory();
    }

    // Problema: O método setCategory() recebe um objeto da classe DramaCategory, ou seja, a classe Movie depende de uma classe concreta.
    public function setCategory(DramaCategory $category){
        $this->category= $category;
    }
}
<?php
// ISP - Interface Segregation Principle
// Conceito: Uma classe não deve ser forçada a implementar interfaces e métodos que não irão utilizar.

// Problema: A classe Movie implementa o método increaseVolume(), porém, a classe ModernTimes não irá utilizar esse método.
interface Movie {
    public function play();
    public function increaseVolume();
}

class TheLionKing implements Movie {
    public function play(){
        // play movie
    }
    public function increaseVolume(){
        // increase volume
    }
}

class ModernTimes implements Movie {
    public function play(){
        // play movie
    }

    public function increaseVolume(){
        // Não será utilizado, mas é obrigatório implementar
    }
}
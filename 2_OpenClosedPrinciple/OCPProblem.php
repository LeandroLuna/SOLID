<?php
// OCP - Open Closed Principle
// Conceito: Você deve ser capaz de estender um comportamento de uma classe, sem modificá-lo.

// Problema: A classe Video tem um método que calcula o interesse baseado no tipo de vídeo, porém, se for necessário adicionar um novo tipo de vídeo, será necessário modificar a classe Video.
class Video {
    private $type;

    public function interest() {
        if ($this->type == "Movie"){
            // calcula interesse baseado em filme

        } elseif ($this->type == "TVShow") {
            // calcula interesse baseado em serie
        }
    }
}
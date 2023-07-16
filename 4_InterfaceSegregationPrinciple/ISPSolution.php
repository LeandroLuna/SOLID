<?php
// Solução: Segregar a interface Movie em duas interfaces, Movie e AudioControl, e implementar as interfaces nas classes correspondentes.

// A interface Movie define o método play()
interface Movie {
    public function play();
}

// A interface AudioControl define o método increaseVolume()
interface AudioControl {
    public function increaseVolume();
}

// A classe TheLionKing implementa as interfaces Movie e AudioControl
class TheLionKing implements Movie, AudioControl {
    public function play() {
        // play movie
    }

    public function increaseVolume() {
        // increae volume
    }
}

// A classe ModernTimes implementa, somente, a interface Movie
class ModernTimes implements Movie {
    public function play() {
        // play movie
    }
}
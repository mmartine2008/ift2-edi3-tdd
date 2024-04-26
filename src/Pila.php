<?php
    interface Pila {
        public function InicializarPila();
        // La pila está inicializada
        public function Apilar($x);
        // Pila inicializada y no vacía
        public function Desapilar();
        // Pila inicializada
        public function PilaVacia():bool;
        // Pila inicializada y no vacía
        public function Tope();
     }
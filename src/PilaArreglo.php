<?php

    Class PilaArreglo implements Pila {

        private $data = null;
        private $indice = null;

        public function PilaArreglo() {
            $this->InicializarPila();
        }

        public function InicializarPila() {
            $this->data = [];
            $this->indice = 0;
        }

        // La pila está inicializada
        public function Apilar($x)
        {
            $this->data[$this->indice] = $x;
            $this->indice ++;
        }

        // Pila inicializada y no vacía
        public function Desapilar() {
            if (!$this->PilaVacia()) {
                $this->indice --;
            }
        }

        // Pila inicializada
        public function PilaVacia():bool
        {
            return $this->indice == 0;
        }

        // Pila inicializada y no vacía
        public function Tope() {
            if (!$this->PilaVacia()) {
                return $this->data[$this->indice -1];
            }
        }

    }
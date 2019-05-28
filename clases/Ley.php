<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ley
 *
 * @author cetecom
 */
class Ley {
    private $idLey;
    private $numLey;
    private $fecPublicacion;
    private $fecPromulgacion;
    private $titulo;
    private $fechaHora;
    private $nomArchivo;
    private $archivo;
    
    function __construct($idLey, $numLey, $fecPublicacion, $fecPromulgacion, $titulo, $fechaHora, $nomArchivo, $archivo) {
        $this->idLey = $idLey;
        $this->numLey = $numLey;
        $this->fecPublicacion = $fecPublicacion;
        $this->fecPromulgacion = $fecPromulgacion;
        $this->titulo = $titulo;
        $this->fechaHora = $fechaHora;
        $this->nomArchivo = $nomArchivo;
        $this->archivo = $archivo;
    }
    
    function getIdLey() {
        return $this->idLey;
    }

    function getNumLey() {
        return $this->numLey;
    }

    function getFecPublicacion() {
        return $this->fecPublicacion;
    }

    function getFecPromulgacion() {
        return $this->fecPromulgacion;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getFechaHora() {
        return $this->fechaHora;
    }

    function getNomArchivo() {
        return $this->nomArchivo;
    }

    function getArchivo() {
        return $this->archivo;
    }

    function setIdLey($idLey) {
        $this->idLey = $idLey;
    }

    function setNumLey($numLey) {
        $this->numLey = $numLey;
    }

    function setFecPublicacion($fecPublicacion) {
        $this->fecPublicacion = $fecPublicacion;
    }

    function setFecPromulgacion($fecPromulgacion) {
        $this->fecPromulgacion = $fecPromulgacion;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setFechaHora($fechaHora) {
        $this->fechaHora = $fechaHora;
    }

    function setNomArchivo($nomArchivo) {
        $this->nomArchivo = $nomArchivo;
    }

    function setArchivo($archivo) {
        $this->archivo = $archivo;
    }



    
    
    
}

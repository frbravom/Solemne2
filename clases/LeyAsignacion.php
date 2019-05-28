<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LeyAsignacion
 *
 * @author cetecom
 */
class LeyAsignacion {

    private $idLeyAsignacion;
    private $idLey;
    private $idUdsuario;
    private $revisada;
    private $descripcion;

    function __construct($idLeyAsignacion, $idLey, $idUdsuario, $revisada, $descripcion) {
        $this->idLeyAsignacion = $idLeyAsignacion;
        $this->idLey = $idLey;
        $this->idUdsuario = $idUdsuario;
        $this->revisada = $revisada;
        $this->descripcion = $descripcion;
    }

    function getIdLeyAsignacion() {
        return $this->idLeyAsignacion;
    }

    function getIdLey() {
        return $this->idLey;
    }

    function getIdUdsuario() {
        return $this->idUdsuario;
    }

    function getRevisada() {
        return $this->revisada;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function setIdLeyAsignacion($idLeyAsignacion) {
        $this->idLeyAsignacion = $idLeyAsignacion;
    }

    function setIdLey($idLey) {
        $this->idLey = $idLey;
    }

    function setIdUdsuario($idUdsuario) {
        $this->idUdsuario = $idUdsuario;
    }

    function setRevisada($revisada) {
        $this->revisada = $revisada;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }


}

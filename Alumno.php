<?php

class Alumno
{
  private $nombre;
  private $apellido1;
  private $apellido2;
  private $nie;
  private $edad;

  function __construct($nombre, $apellido1, $apellido2, $nie, $edad)
  {
    $this->nombre = $nombre;
    $this->apellido1 = $apellido1;
    $this->apellido2 = $apellido2;
    $this->nie = $nie;
    $this->edad = $edad;
  }

  public function __get($key)
  {
    return $this->values[$key];
  }

  public function __set($key, $value)
  {
    $this->values[$key] = $value;
  }
}

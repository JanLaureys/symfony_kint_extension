<?php

// src/AppBundle/Twig/AppExtension.php
namespace AppBundle\Twig;

class KintExtension extends \Twig_Extension {

  public function getFunctions(){
    return [
      new \Twig_SimpleFunction('kint', array($this, "kint")),
    ];
  }

  public function getName(){
    return "kint_extension";
  }

  public function kint($var){
    \Kint::dump($var);
  }
}

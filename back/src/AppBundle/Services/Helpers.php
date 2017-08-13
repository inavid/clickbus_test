<?php

namespace AppBundle\Services;

class Helpers {
	public $helper;

	public function __construct($helper){

	}

	/**
	* Metodo de ayuda para revisar cual es la cantidad menor mas cercana a la cantidad dada
	* @param Int La cantidad a analizar
	* @param Array Un arreglo con las cantidad de billetes disponibles en el cajero
	* 
	*/
	public function checkLessNear($cantidad, $disponibles){
		foreach ($disponibles as $key => $denominacion) {
			if ($cantidad >= $denominacion) {
				return $denominacion;
			} else {
				continue;
			} 
		}
	}

}
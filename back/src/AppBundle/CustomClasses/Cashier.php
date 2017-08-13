<?php

namespace AppBundle\CustomClasses;

/**
* 
*/
class Cashier
{
    public $available_denominations;
    private $max_denomination;
    private $min_denomination; 
    
    function __construct()
    {
        $this->available_denominations = array(
            100,
            50,
            20,
            10
        );
        $this->max_denomination = 100;
        $this->min_denomination = 10;
    }

    /**
    * Método de validación de el retiro de dinero solicitado
    * @param Int La cantidad de dinero a retirar solicitada
    * @return Array Respuesta con código, mensaje y resultado de validación 
    */
    public function checkValidRequestedAmount($retiro){
        $response = array(
            'code'      => 200,
            'message'   => "El retiro es posible",
            'valid'     => true
        );

        if ($retiro < $this->min_denomination) {
            $response = array(
                'code'      => 400,
                'message'   => "No puedo entregar una cantidad menor a $this->min_denomination",
                'valid'     => false
            );
            return $response;
        }

        if (($retiro % $this->min_denomination) != 0) {
            $response = array(
                'code'      => 400,
                'message'   => "La cantidad no es multiplo de $this->min_denomination",
                'valid'     => false
            );
        }

        return $response;
    }

    /**
    * Método para validar el numero de billetes a dar de la denominación dada
    * @param Int La cantidad de dinero a retirar restante
    * @param Int Denominacion a regresar
    * @return Array Código, mensaje y resultado de cantidad de billetes y restante a calcular 
    */
    public function getBills($retiro, $denominacion){
        $response = array();
        
        $numero_billetes = intdiv($retiro , $denominacion);
        $restante = $retiro - ($denominacion * $numero_billetes);

        $response = array(
            'cantidad' => $numero_billetes,
            'restante' => $restante
        );

        return $response;
    }


}

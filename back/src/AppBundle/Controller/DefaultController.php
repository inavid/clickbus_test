<?php

namespace AppBundle\Controller;

use AppBundle\CustomClasses\Cashier;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Services\Helpers;

class DefaultController extends Controller
{

    public function indexAction(Request $request)
    {
        //replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    public function retiroAction(Request $request){
        $response   = array();
        $cashier    = new Cashier();
        $cantidad   = (int)$request->get('cantidad', null); 

        $valid = $cashier->checkValidRequestedAmount($cantidad);

        #Si el numero a retirar no es multiplo del minimo no posible entregar dicha cantidad, 
        #igualmente si la cantidad es menor a el tipo de billete minimo disponible (10 en este caso)
        if (!$valid['valid']) {
            return $this->json($valid);
        }

        #Instanciamos clase de metodos de apoyo
        $helper                 = $this->get(Helpers::class);
        $response['code']       = 200;
        $response['message']    = "Se termino el calculo exitosamente";
        $restante               = $cantidad;
        do {
            $denominacion = $helper->checkLessNear($restante, $cashier->available_denominations);
            $result = $cashier->getBills($restante, $denominacion);
            $response['billetes'][$denominacion] = $result['cantidad'];
            $response['billetesa'][] = array(
                'denominacion' => $denominacion,
                'cantidad' => $result['cantidad']
            );
            $restante = $result['restante'];
        }while ($restante > 0);

        return $this->json($response);
    }
}

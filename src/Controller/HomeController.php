<?php
/**
 * Created by PhpStorm.
 * User: anis
 * Date: 11/02/2019
 * Time: 10:32
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController
{

    /**
     * @Route("/")
     */
    public function homePage(){
        return new Response("My first Symfony php !");
    }

}
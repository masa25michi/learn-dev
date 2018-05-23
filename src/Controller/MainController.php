<?php
/**
 * Created by PhpStorm.
 * User: masamichi
 * Date: 23/5/2018
 * Time: 2:14 PM
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function index()
    {
        $number = mt_rand(0, 100);

        return $this->render('main/index.html.twig', array(
            'number' => $number,
        ));
    }
}
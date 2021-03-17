<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/Admin", name="admin")
     */
   
       
        public function index(): Response
    {
        $Agence = array(
            'Id'=>"MIL",
            'Nom'=> 'safari',
            'Telagence'=> '89898',
            'Adresseville'=> 'ezzahra'
        );
        $Voitures =array (
            'Id'=>"1",
            'Marque'=> 'citroen',
            'Couleur'=> 'rouge',
            'Description'=>'bDescription',
            'NombredePlace'=>'5',
            'NomAgence'=>'bNomAgence',
        );

        return $this->render('admin/index.html.twig',array('Agence'=>$Agence,'Voitures'=>$Voitures));
    }
    
       
}

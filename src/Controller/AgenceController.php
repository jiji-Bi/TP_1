<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AgenceController extends AbstractController
{
    /**
     * @Route("/agence/ajouter", name="agence_ajouter")
     */
    public function Ajouter(): Response
    {
        return $this->render('agence/ajouter.html.twig', [
            'controller_name' => 'AgenceController',
        ]);
    }
     /**
     * @Route("/agence/Voir/{id}", name="agence_voir")
     */
    public function Voir(): Response
    {
        return $this->render('agence/voir.html.twig', [
            'controller_name' => 'AgenceController',
        ]);
    } /**
    * @Route("/agence/Modifier/{id}", name="agence_modifier")
    */
   public function Modifier(): Response
   {
       return $this->render('agence/modifier.html.twig', [
           'controller_name' => 'AgenceController',
       ]);
   } /**
   * @Route("/agence/Supprimer/{id}", name="agence_supprimer")
   */
  public function Supprimer(): Response
  {
      return $this->render('agence/supprimer.html.twig', [
          'controller_name' => 'AgenceController',
      ]);
  }
 
}

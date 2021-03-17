<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VoitureController extends AbstractController
{
      /**
     * @Route("/ajouter/voiture", name="ajouter_voiture")
     */
    public function Ajouter(): Response
    {
        return $this->render('voiture/ajouter.html.twig', [
            'controller_name' => 'AgenceController',
        ]);
    }
     /**
     * @Route("/voiture/Voir/{id}", name="voiture_consulter")
     */
    public function Voir(): Response
    {
        return $this->render('voiture/voir.html.twig', [
            'controller_name' => 'AgenceController',
        ]);
    } /**
    * @Route("/voiture/Modifier/{id}", name="voiture_modifier")
    */
   public function Modifier(): Response
   {
       return $this->render('voiture/modifier.html.twig', [
           'controller_name' => 'AgenceController',
       ]);
   } /**
   * @Route("/voiture/Supprimer/{id}", name="voiture_supprimer")
   */
  public function Supprimer(): Response
  {
      return $this->render('voiture/supprimer.html.twig', [
          'controller_name' => 'AgenceController',
      ]);
  }

}

<?php

namespace App\Controller;

use App\Entity\Voiture;
use App\Entity\Agence;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;


class AgenceController extends AbstractController
{
    /**
    * @Route("/agence", name="agences")
    */

   public function index(): Response
   {
       $agences = $this->getDoctrine()->getRepository(Agence::class)->findAll();

       return $this->render('agence/allagence.html.twig', ['agences' => $agences ]); 
   
   }
    /**
     * @Route("/agence/ajouter", name="agence_ajouter")
     */
    public function Ajouter(): Response
    {
            $entityManager = $this->getDoctrine()->getManager();
    
            $agence = new Agence();
            $agence->setNom('ezzahra');
            $agence->setTelAgence('71454289');
            $agence->setAdresseVille('TUNIS');
            $entityManager->persist($agence);
            $entityManager->flush();
    
            return $this->render('agence/allAgence.html.twig', ['agences' => $agence ]); 
    }
     /**
     * @Route("/agence/Voir/{id}", name="agence_voir")
     */
    public function Voir($id): Response
    {   
        $agence = $this->getDoctrine()->getRepository(Agence::class)->find($id);
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

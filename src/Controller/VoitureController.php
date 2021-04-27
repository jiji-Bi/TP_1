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
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class VoitureController extends AbstractController
{
    /**
     * @Route("/voiture/ajouter", name="voiture_ajouter")
     */
    public function Ajouter(): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        $voiture3 = new Voiture();
        $voiture3->setmatricule('200TU1111');
        $voiture3->setmarque('RangeRover');
        $voiture3->setcouleur('Gris');
        $voiture3->setcarburant('Gazoil');
        $voiture3->setdescription('Voiture Luxe');
        $date = new \DateTime('2019-06-05 12:15:30');
        $voiture3->setDateenmiseencirculation($date);
        $voiture3->setdisponibilite(0);
        $entityManager->persist($voiture3);
        return $this->render('voiture/listeVoitures.html.twig');
  
  }
  /**
     * @Route("/voiture", name="voitures")
     */

    public function index(): Response
    {
        $voitures = $this->getDoctrine()->getRepository(Voiture::class)->findAll();

        return $this->render('voiture/listeVoitures.html.twig');
    }
  /**
     * @Route("/voiture/{id}", name="voiture_voir")
     */
    public function Voir($id): Response 
    {
    $voiture = $this->getDoctrine()->getRepository(Voiture::class)->find($id);
    
        return $this->render('voiture/voir.html.twig');
    }
    /**
     * @Route("/voiture/modifier", name="voiture_modifier")
     * * Method({"GET", "POST"})
     */
    
    public function Modifier(Request $request, $id): Response
    {
        $voiture = new Voiture();
        $voiture= $this->getDoctrine()->getRepository(Voiture::class)->find($id);
  
        $form = $this->createFormBuilder($voiture)
            ->add('matricule', TextType::class)
            ->add('marque', TextType::class)
            ->add('description', TextType::class)
            ->add('couleur', TextType::class)
            ->add('carburant', TextType::class)
            ->add('disponibilite', TextType::class)
            ->add('createVoiture', SubmitType::class, array(
            'label' => 'Modifier'         
          ))->getForm();
  
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
  
          $entityManager = $this->getDoctrine()->getManager();
          $entityManager->flush();
  
          return $this->redirectToRoute('voiture');
        }
  
        return $this->render('voiture/modifier.html.twig');
    }
    /**
     * @Route("/voiture/supprimer/{id}", name="voiture_supprimer")
     */
    public function Supprimer(): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $voiture = $entityManager->getRepository(Voiture::class)->find($id);
        $entityManager->remove($voiture);
        $entityManager->flush();
    

        return $this->render('voiture/listeVoitures.html.twig');    
}
}
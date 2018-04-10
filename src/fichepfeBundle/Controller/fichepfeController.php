<?php

namespace fichepfeBundle\Controller;

use fichepfeBundle\Entity\Archives;
use fichepfeBundle\Entity\Fichepfe;
use fichepfeBundle\Form\FichepfeType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class fichepfeController extends Controller
{


    public function AfficheAction (){

        $em=$this->getDoctrine();
        $pfes=$em->getRepository(Fichepfe::class)->findAll();

        return $this->render('fichepfeBundle:Default:affichage.html.twig', array(
            'fichepfe'=>$pfes,

        ));


    }


    public function maficheAction (){

        $em=$this->getDoctrine();
        $pfes=$em->getRepository(Fichepfe::class)->findby(array('id'=>'12'));

        return $this->render('fichepfeBundle:front:mafiche.html.twig', array(
            'fichepfe'=>$pfes,

        ));


    }




    public function ArchivesAction (){

        $em=$this->getDoctrine();
        $pfes=$em->getRepository(Archives::class)->findAll();

        return $this->render('fichepfeBundle:Default:archives.html.twig', array(
            'Archives'=>$pfes,

        ));


    }



    public function ajoutpfeAction(Request $request)
    {
        $fichepfe = new fichepfe();
        $form = $this->createForm(FichepfeType::class, $fichepfe);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($fichepfe);
            $em->flush();


            return new RedirectResponse(
                $this->generateUrl('afficheinfo', array(
                    "id" => $fichepfe->getId(),
                    "nom" => $fichepfe->getNom(),
                    "prenom" =>$fichepfe->getPrenom()
                )));

        }
        return $this->render("fichepfeBundle:Default:ajout.html.twig",
            array('form' => $form->createView()

            ));
    }




    public function AfficheinfoAction (Request $request,$id,$nom,$prenom){

        $em=$this->getDoctrine();
        $pfes=$em->getRepository(Fichepfe::class)->find($id);

        $this->get('knp_snappy.pdf')->generateFromHtml(
            $this->renderView(
                'fichepfeBundle:Default:fiche.html.twig',
                array(
                    'm'  => $pfes
                )
            ),
            'pdf\Fiche De '.$nom.' '.$prenom.'.pdf'
        );

        return $this->redirectToRoute('aff');






    }






    function ArchiverAction($id)
    {

        $archive = new Archives();
        $em = $this->getDoctrine()->getManager();
        $fiches= $em ->getRepository(Fichepfe::class)->find($id);
        $archive->setNom($fiches->getNom());
        $archive->setPrenom($fiches->getPrenom());
        $archive->setSujet($fiches->getSujet());
        $archive->setFonctionnalites($fiches->getFonctionnalites());
        $archive->setTechnologies($fiches->getTechnologies());
        $archive->setEtablissement($fiches->getEtablissement());
        $em->persist($archive);

        $em->remove($fiches);
        $em->flush();
        return $this->redirectToRoute('aff');

    }




    function DesarchiverAction($id)
    {

        $fichepfe = new Fichepfe();
        $em = $this->getDoctrine()->getManager();
        $arch= $em ->getRepository(Archives::class)->find($id);
        $fichepfe->setNom($arch->getNom());
        $fichepfe->setPrenom($arch->getPrenom());
        $fichepfe->setSujet($arch->getSujet());
        $fichepfe->setFonctionnalites($arch->getFonctionnalites());
        $fichepfe->setTechnologies($arch->getTechnologies());
        $fichepfe->setEtablissement($arch->getEtablissement());
        $em->persist($fichepfe);

        $em->remove($arch);
        $em->flush();
        return $this->redirectToRoute('Archives');

    }



    function SupprimerAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $etudiants= $em ->getRepository(Fichepfe::class)->find($id);
        $em->remove($etudiants);
        $em->flush();
        return $this->redirectToRoute('aff');

    }




    public function RechercheAction(Request $request)
    {
        $search=$request->get('nom');
        $em = $this->getDoctrine()->getManager();
        $pfes=$em->getRepository('fichepfeBundle:Fichepfe')->find($search);
        return $this->render("fichepfeBundle:Default:recherche.html.twig",array(
            'fichepfe' => $pfes
        ));
    }


    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $fichep = $em->getRepository(Fichepfe::class)->find($id);
        $form = $this->createForm(fichepfeType::class, $fichep);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em->persist($fichep);
            $em->flush();
            return $this->redirectToRoute("aff");
        }
        return $this->render("fichepfeBundle:Default:ajout.html.twig"
            , array('form' => $form->createView())
        );

    }




}

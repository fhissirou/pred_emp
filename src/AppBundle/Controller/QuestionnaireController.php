<?php

namespace AppBundle\Controller;


use AppBundle\Form\QuestionnaireType;
use AppBundle\Repository\PredEmpRepository;
use AppBundle\Entity\Questionnaire;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class QuestionnaireController extends Controller
{
    /**
     * @Route("/Questionnaire", name="Question")
     */
    public function indexAction(Request $request)
    {
        $questionnaire = new  Questionnaire();

        $form = $this->createForm(QuestionnaireType::class, $questionnaire);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $arrUserTest = $this->getArrdata($questionnaire);


            $em->persist($questionnaire);
            $em->flush();

            die(dump($arrUserTest));

            /*return $this->redirect($this->generateUrl(
                'admin_post_show',
                array('id' => $questionnaire->getId())
            ));*/
        }

        else{
            return $this->render('default/Questionnaire.html.twig', array(
                'form' =>  $form->createView()
            ));
        }



    }



    public function getArrdata($questionnaire)
    {

        $array= array();

        array_push($array, $questionnaire->getCentrePersoUn());
        array_push($array, $questionnaire->getCentrePersoDeux());
        array_push($array, $questionnaire->getCentrePersoTrois());
        array_push($array, $questionnaire->getCentrePersoQuatre());
        array_push($array, $questionnaire->getNoteAnimauxElephant());
        array_push($array, $questionnaire->getNoteAnimauxTaureau());
        array_push($array, $questionnaire->getNoteAnimauxLion());
        array_push($array, $questionnaire->getNoteAnimauxCoq());
        array_push($array, $questionnaire->getNoteAnimauxRenard());
        array_push($array, $questionnaire->getNoteAnimauxChien());
        array_push($array, $questionnaire->getNoteAnimauxHibou());
        array_push($array, $questionnaire->getNoteAnimauxCastor());
        array_push($array, $questionnaire->getNombreExperience());
        array_push($array, $questionnaire->getSentimentEnvironnement());
        array_push($array, $questionnaire->getConfianceEchangeEntreprise());
        array_push($array, $questionnaire->getCooperationEchangeEntreprise());
        array_push($array, $questionnaire->getPetinenceMission());
        array_push($array, $questionnaire->getNiveauExigence());
        array_push($array, $questionnaire->getFreqPauseDejEquipe());
        array_push($array, $questionnaire->getRemuneration());
        array_push($array, $questionnaire->getTrajet());


        return $array;

    }


}

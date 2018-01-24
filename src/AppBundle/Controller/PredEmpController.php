<?php

namespace AppBundle\Controller;

use AppBundle\Form\QuestionnaireType;
use AppBundle\Repository\PredEmpRepository;
use AppBundle\Entity\Questionnaire;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

require_once '/home/fhissirou/www/pred_emp/vendor/autoload.php';

use Phpml\Classification\KNearestNeighbors;
use Phpml\Classification\SVC;
use Phpml\Classification\NaiveBayes;
use Phpml\SupportVectorMachine\Kernel;

class PredEmpController extends Controller
{
    /**
     * @Route("/pred-emp", name="predEmp")
     */
    public function indexAction(Request $request, $userTest=array())
    {

        $questionnaire = new  Questionnaire();

        $form = $this->createForm(QuestionnaireType::class, $questionnaire);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $arrUserTest = $this->userQuestionnaireToArr($questionnaire);


            $predUser= $this->predUserEmp($arrUserTest);

            $questionnaire->setVaQuitter($predUser["AIForUser"]["KNN"]);

            $em->persist($questionnaire);
            $em->flush();

            //die(dump($predUser));


            return $this->render('default/predEmp.html.twig',$predUser);
        }

    else {
        return $this->render('default/Questionnaire.html.twig', array(
            'form' => $form->createView()
        ));
    }

    }

    public function getLabels(){
        $labels= array();
        $questionnaire = $this->getDoctrine()->getRepository(Questionnaire::class)->findAll();

        foreach ($questionnaire as $ligne) {
            array_push($labels, $ligne->getVaQuitter());
        }


        return $labels;

    }


    public function predUserEmp($userTest){

        $data = $this->getdata();
        $labels = $this->getLabels();


        $corrPearson = $this->makeCorrforUserTest($data,$labels,$userTest);

        $resAIForUser = $this->AIForUserTest($data, $labels, $userTest);


        array_push($data, $userTest);

        $matriceCorr = $this->makeMatriceCorr($data);

        $listUsername = array();
        for($i=1; $i<count($data); $i++){
            $name = "usr".strval($i);
            array_push($listUsername,$name);
        }

        array_push($listUsername, "UserTest");

        //dump(count($matriceCorr));
        //die(dump(count($listUsername)));



        return array(
                "AIForUser" => $resAIForUser,
                "CorrPearson"=> $corrPearson,
                "LabelsCorr"=> $listUsername,
                "MatriceCorr" => $matriceCorr,
                "Data"=> $data
            );

    }


    public function userQuestionnaireToArr($questionnaire)
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


    public function getdata()
    {

        $questionnaire = $this->getDoctrine()->getRepository(Questionnaire::class)->findAll();

        $arrData= array();

        foreach ($questionnaire as $ligne) {
            $item = array();

            array_push($item, $ligne->getCentrePersoUn());
            array_push($item, $ligne->getCentrePersoDeux());
            array_push($item, $ligne->getCentrePersoTrois());
            array_push($item, $ligne->getCentrePersoQuatre());
            array_push($item,$ligne->getNoteAnimauxElephant());
            array_push($item, $ligne->getNoteAnimauxTaureau());
            array_push($item ,$ligne->getNoteAnimauxLion());
            array_push($item, $ligne->getNoteAnimauxCoq());
            array_push($item,$ligne->getNoteAnimauxRenard());
            array_push($item,$ligne->getNoteAnimauxChien());
            array_push($item,$ligne->getNoteAnimauxHibou());
            array_push($item, $ligne->getNoteAnimauxCastor());
            array_push($item, $ligne->getNombreExperience());
            array_push($item, $ligne->getSentimentEnvironnement());
            array_push($item, $ligne->getConfianceEchangeEntreprise());
            array_push($item, $ligne->getCooperationEchangeEntreprise());
            array_push($item, $ligne->getPetinenceMission());
            array_push($item, $ligne->getNiveauExigence());
            array_push($item, $ligne->getFreqPauseDejEquipe());
            array_push($item, $ligne->getRemuneration());
            array_push($item, $ligne->getTrajet());

            array_push($arrData, $item);

        }

        return $arrData;

    }


    public function moyenne($x){
        $nb = count($x);
        $sum = array_sum($x);

        return $sum / $nb;
    }


    public function  pearson_for_two_emp($emp1, $emp2){
        if (count($emp1) != count($emp2)){
            return null;
        }
        $diff_produit = 0;
        $emp1_diff2 = 0;
        $emp2_diff2 = 0;

        $nb = count($emp1);
        $moy_emp1 = $this->moyenne($emp1);
        $moy_emp2 = $this->moyenne($emp2);

        for($i =0; $i <$nb ; $i++){
            $emp1_diff1 = $emp1[$i] - $moy_emp1;
            $emp2_diff1 = $emp2[$i] - $moy_emp2;

            $diff_produit += $emp1_diff1 * $emp2_diff1;

            $emp1_diff2 += $emp1_diff1  * $emp1_diff1 ;
            $emp2_diff2 += $emp2_diff1  * $emp2_diff1;

        }

        return round($diff_produit / sqrt($emp1_diff2 * $emp2_diff2), 1);

    }

    public function getIndexMaxVal($array,$labels)
    {
        $max = array_keys($array, max($array));
        return $labels[$max[0]];
    }

    public function makeCorrforUserTest($data,$labels, $userTest){

        $arrResult = array();

        for($i=0; $i< count($data); $i++){
            $val = $this->pearson_for_two_emp($data[$i], $userTest);
            array_push( $arrResult, $val);
        }

        return $this->getIndexMaxVal($arrResult, $labels);


    }

    public function makeMatriceCorr($data){

        $matriceCorr = array();

        for($i=0; $i< count($data); $i++){
            $user1 = $data[$i];
            $arr = array();
            for($j=0; $j<count($data); $j++){
                $user2 = $data[$j];
                $corr = $this->pearson_for_two_emp($user1,$user2 );
                array_push( $arr, $corr);
            }

            array_push($matriceCorr, $arr);

        }
        return $matriceCorr;
    }



    public function AIForUserTest($data,$labels, $userTest)
    {

        //$samples = [[1, 3], [1, 4], [2, 4], [3, 1], [4, 1], [4, 2]];
        //$labels = ['a', 'a', 'a', 'b', 'b', 'b'];

        $classifierKNN = new KNearestNeighbors();
        $classifierSVC = new SVC(Kernel::LINEAR, $cost = 1000);
        $classifierNB = new NaiveBayes();

        $classifierKNN->train($data, $labels);
        $classifierSVC->train($data, $labels);
        $classifierNB->train($data, $labels);

        $predKNN = $classifierKNN->predict($userTest);
        $predSVC = $classifierSVC->predict($userTest);
        $predNB = $classifierNB->predict($userTest);

        return array(
            "KNN"=>$predKNN,
            "SVC"=>$predSVC,
            "NB"=>$predNB
            );

    }

}

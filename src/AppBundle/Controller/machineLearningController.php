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

class machineLearningController extends Controller
{
    /**
     * @Route("/MachineLearning", name="MachineLearn")
     */
    public function indexAction(Request $request)
    {

        $samples = [[1, 3], [1, 4], [2, 4], [3, 1], [4, 1], [4, 2]];
        $labels = ['a', 'a', 'a', 'b', 'b', 'b'];

        $classifier = new KNearestNeighbors();
        $classifier->train($samples, $labels);

        $res = $classifier->predict([3, 2]);


        return $this->render('default/machineLearning.html.twig', array(
            'knn' =>  $res
        ));


    }



}

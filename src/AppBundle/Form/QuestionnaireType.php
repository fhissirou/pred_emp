<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
class QuestionnaireType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('genre',ChoiceType::class, array(
                'choices'=> array("Homme"=>"Homme","Femme"=>"Femme" ),
                'multiple' => false,
                'expanded' => true,
                'choices_as_values' => true,
                'required' => true))
            ->add('age',ChoiceType::class, array(
                'choices'=> array("entre 18 et 25 ans"=>"entre 18 et 25 ans","entre 26 et 35 ans"=>"entre 26 et 35 ans", "entre 36 et  45 ans" =>"entre 36 et  45 ans", "entre 46 et plus"=>"entre 46 et plus"),
                'multiple' => false,
                'expanded' => true,
                'choices_as_values' => true,
                'required' => true))
            ->add('professions',ChoiceType::class, array(
                'choices'=> array("Employes"=>"Employés",'Cadres'=>"Cadres", "Ouvriers"=>"Ouvriers","Autres"=>"Autres"),
                'multiple' => false,
                'expanded' => true,
                'choices_as_values' => true,
                'required' => true))
            ->add('situationHandi',ChoiceType::class, array(
                'choices'=> array("Oui"=>"oui",'Non'=>"Non"),
                'multiple' => false,
                'expanded' => true,
                'choices_as_values' => true,
                'required' => true))
            ->add('centrePersoUn',ChoiceType::class, array(
                'choices'=> array("J'agis pour avoir de l'impact, du contrôle, du pouvoir sur le monde qui m'entoure."=>7,"J'agis pour avoir du contrôle sur moi-même."=>10,"Je cherche un équilibre entre les deux."=>3),
                'multiple' => false,
                'expanded' => true,
                'choices_as_values' => true,
                'required' => true))
            ->add('centrePersoDeux',ChoiceType::class, array(
                'choices'=> array("Je perçois avec une grande finesse les émotions des autres et cherche à les aider."=>5,"Je suis attentif à mes émotions et je valorise le naturel et l'authenticité."=>2,"Je cherche un équilibre entre les deux."=>8),
                'multiple' => false,
                'expanded' => true,
                'choices_as_values' => true,
                'required' => true))
            ->add('centrePersoTrois',ChoiceType::class, array(
                'choices'=> array("Je veux comprendre le fonctionnement du monde qui m'entoure et accumule des informations à son propos."=>9,"J'imagine des plans pour créer une vie plus agréable et plus plaisante."=>4,"Je cherche un équilibre entre les deux."=>6),
                'multiple' => false,
                'expanded' => true,
                'choices_as_values' => true,
                'required' => true))
            ->add('centrePersoQuatre',ChoiceType::class, array(
                'choices'=> array('1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5,'6'=>6,'7'=>7,'8'=>8,'9'=>9,'10'=>10),
                'multiple' => false,
                'expanded' => true,
                'choices_as_values' => true,
                'required' => true))
            ->add('noteAnimauxElephant', ChoiceType::class, array(
                'choices'=> array('1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5,'6'=>6,'7'=>7,'8'=>8,'9'=>9,'10'=>10),
                'multiple' => false,
                'expanded' => true,
                'choices_as_values' => true,
                'required' => true))
            ->add('noteAnimauxTaureau', ChoiceType::class, array(
                'choices'=> array('1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5,'6'=>6,'7'=>7,'8'=>8,'9'=>9,'10'=>10),
                'multiple' => false,
                'expanded' => true,
                'choices_as_values' => true,
                'required' => true))
            ->add('noteAnimauxLion', ChoiceType::class, array(
                'choices'=> array('1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5,'6'=>6,'7'=>7,'8'=>8,'9'=>9,'10'=>10),
                'multiple' => false,
                'expanded' => true,
                'choices_as_values' => true,
                'required' => true))
            ->add('noteAnimauxCoq', ChoiceType::class, array(
                'choices'=> array('1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5,'6'=>6,'7'=>7,'8'=>8,'9'=>9,'10'=>10),
                'multiple' => false,
                'expanded' => true,
                'choices_as_values' => true,
                'required' => true))
            ->add('noteAnimauxRenard', ChoiceType::class, array(
                'choices'=> array('1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5,'6'=>6,'7'=>7,'8'=>8,'9'=>9,'10'=>10),
                'multiple' => false,
                'expanded' => true,
                'choices_as_values' => true,
                'required' => true))
            ->add('noteAnimauxChien', ChoiceType::class, array(
                'choices'=> array('1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5,'6'=>6,'7'=>7,'8'=>8,'9'=>9,'10'=>10),
                'multiple' => false,
                'expanded' => true,
                'choices_as_values' => true,
                'required' => true))
            ->add('noteAnimauxHibou', ChoiceType::class, array(
                'choices'=> array('1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5,'6'=>6,'7'=>7,'8'=>8,'9'=>9,'10'=>10),
                'multiple' => false,
                'expanded' => true,
                'choices_as_values' => true,
                'required' => true))
            ->add('noteAnimauxCastor', ChoiceType::class, array(
                'choices'=> array('1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5,'6'=>6,'7'=>7,'8'=>8,'9'=>9,'10'=>10),
                'multiple' => false,
                'expanded' => true,
                'choices_as_values' => true,
                'required' => true))
            ->add('nombreExperience')
            ->add('sentimentEnvironnement', ChoiceType::class, array(
                'choices'=> array('1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5,'6'=>6,'7'=>7,'8'=>8,'9'=>9,'10'=>10),
                'multiple' => false,
                'expanded' => true,
                'choices_as_values' => true,
                'required' => true))
            ->add('confianceEchangeEntreprise', ChoiceType::class, array(
                'choices'=> array('1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5,'6'=>6,'7'=>7,'8'=>8,'9'=>9,'10'=>10),
                'multiple' => false,
                'expanded' => true,
                'choices_as_values' => true,
                'required' => true))
            ->add('cooperationEchangeEntreprise', ChoiceType::class, array(
                'choices'=> array('1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5,'6'=>6,'7'=>7,'8'=>8,'9'=>9,'10'=>10),
                'multiple' => false,
                'expanded' => true,
                'choices_as_values' => true,
                'required' => true))
            ->add('petinenceMission', ChoiceType::class, array(
                'choices'=> array('1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5,'6'=>6,'7'=>7,'8'=>8,'9'=>9,'10'=>10),
                'multiple' => false,
                'expanded' => true,
                'choices_as_values' => true,
                'required' => true))
            ->add('niveauExigence', ChoiceType::class, array(
                'choices'=> array('1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5,'6'=>6,'7'=>7,'8'=>8,'9'=>9,'10'=>10),
                'multiple' => false,
                'expanded' => true,
                'choices_as_values' => true,
                'required' => true))
            ->add('freqPauseDejEquipe', ChoiceType::class, array(
                'choices'=> array('1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5,'6'=>6,'7'=>7,'8'=>8,'9'=>9,'10'=>10),
                'multiple' => false,
                'expanded' => true,
                'choices_as_values' => true,
                'required' => true))
            ->add('remuneration', ChoiceType::class, array(
                'choices'=> array('1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5,'6'=>6,'7'=>7,'8'=>8,'9'=>9,'10'=>10),
                'multiple' => false,
                'expanded' => true,
                'choices_as_values' => true,
                'required' => true))
            ->add('trajet', ChoiceType::class, array(
                'choices'=> array('1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5,'6'=>6,'7'=>7,'8'=>8,'9'=>9,'10'=>10),
                'multiple' => false,
                'expanded' => true,
                'choices_as_values' => true,
                'required' => true))
            ->add('submit', SubmitType::class, array(
                'label' => 'Envoyer',
                'attr'  => array('class' => 'btn btn-default pull-right')
            ));;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Questionnaire'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_questionnaire';
    }


}

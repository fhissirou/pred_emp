<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Questionnaire
 *
 * @ORM\Table(name="questionnaire")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PredEmpRepository")
 */
class Questionnaire
{
    /**
     * @return string
     */
    public function getVaQuitter()
    {
        return $this->vaQuitter;
    }

    /**
     * @param string $vaQuitter
     */
    public function setVaQuitter($vaQuitter)
    {
        $this->vaQuitter = $vaQuitter;
    }

    /**
     * @return string
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * @param string $genre
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

    /**
     * @return string
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param string $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getProfessions()
    {
        return $this->professions;
    }

    /**
     * @param string $professions
     */
    public function setProfessions($professions)
    {
        $this->professions = $professions;
    }

    /**
     * @return string
     */
    public function getSituationHandi()
    {
        return $this->situationHandi;
    }

    /**
     * @param string $situationHandi
     */
    public function setSituationHandi($situationHandi)
    {
        $this->situationHandi = $situationHandi;
    }

    /**
     * @return int
     */
    public function getCentrePersoUn()
    {
        return $this->centrePersoUn;
    }

    /**
     * @param int $centrePersoUn
     */
    public function setCentrePersoUn($centrePersoUn)
    {
        $this->centrePersoUn = $centrePersoUn;
    }

    /**
     * @return int
     */
    public function getCentrePersoDeux()
    {
        return $this->centrePersoDeux;
    }

    /**
     * @param int $centrePersoDeux
     */
    public function setCentrePersoDeux($centrePersoDeux)
    {
        $this->centrePersoDeux = $centrePersoDeux;
    }

    /**
     * @return int
     */
    public function getCentrePersoTrois()
    {
        return $this->centrePersoTrois;
    }

    /**
     * @param int $centrePersoTrois
     */
    public function setCentrePersoTrois($centrePersoTrois)
    {
        $this->centrePersoTrois = $centrePersoTrois;
    }

    /**
     * @return int
     */
    public function getCentrePersoQuatre()
    {
        return $this->centrePersoQuatre;
    }

    /**
     * @param int $centrePersoQuatre
     */
    public function setCentrePersoQuatre($centrePersoQuatre)
    {
        $this->centrePersoQuatre = $centrePersoQuatre;
    }

    /**
     * @return int
     */
    public function getNoteAnimauxElephant()
    {
        return $this->noteAnimauxElephant;
    }

    /**
     * @param int $noteAnimauxElephant
     */
    public function setNoteAnimauxElephant($noteAnimauxElephant)
    {
        $this->noteAnimauxElephant = $noteAnimauxElephant;
    }

    /**
     * @return int
     */
    public function getNoteAnimauxTaureau()
    {
        return $this->noteAnimauxTaureau;
    }

    /**
     * @param int $noteAnimauxTaureau
     */
    public function setNoteAnimauxTaureau($noteAnimauxTaureau)
    {
        $this->noteAnimauxTaureau = $noteAnimauxTaureau;
    }

    /**
     * @return int
     */
    public function getNoteAnimauxLion()
    {
        return $this->noteAnimauxLion;
    }

    /**
     * @param int $noteAnimauxLion
     */
    public function setNoteAnimauxLion($noteAnimauxLion)
    {
        $this->noteAnimauxLion = $noteAnimauxLion;
    }

    /**
     * @return int
     */
    public function getNoteAnimauxCoq()
    {
        return $this->noteAnimauxCoq;
    }

    /**
     * @param int $noteAnimauxCoq
     */
    public function setNoteAnimauxCoq($noteAnimauxCoq)
    {
        $this->noteAnimauxCoq = $noteAnimauxCoq;
    }

    /**
     * @return int
     */
    public function getNoteAnimauxRenard()
    {
        return $this->noteAnimauxRenard;
    }

    /**
     * @param int $noteAnimauxRenard
     */
    public function setNoteAnimauxRenard($noteAnimauxRenard)
    {
        $this->noteAnimauxRenard = $noteAnimauxRenard;
    }

    /**
     * @return int
     */
    public function getNoteAnimauxChien()
    {
        return $this->noteAnimauxChien;
    }

    /**
     * @param int $noteAnimauxChien
     */
    public function setNoteAnimauxChien($noteAnimauxChien)
    {
        $this->noteAnimauxChien = $noteAnimauxChien;
    }

    /**
     * @return int
     */
    public function getNoteAnimauxHibou()
    {
        return $this->noteAnimauxHibou;
    }

    /**
     * @param int $noteAnimauxHibou
     */
    public function setNoteAnimauxHibou($noteAnimauxHibou)
    {
        $this->noteAnimauxHibou = $noteAnimauxHibou;
    }

    /**
     * @return int
     */
    public function getNoteAnimauxCastor()
    {
        return $this->noteAnimauxCastor;
    }

    /**
     * @param int $noteAnimauxCastor
     */
    public function setNoteAnimauxCastor($noteAnimauxCastor)
    {
        $this->noteAnimauxCastor = $noteAnimauxCastor;
    }

    /**
     * @return int
     */
    public function getNombreExperience()
    {
        return $this->nombreExperience;
    }

    /**
     * @param int $nombreExperience
     */
    public function setNombreExperience($nombreExperience)
    {
        $this->nombreExperience = $nombreExperience;
    }

    /**
     * @return int
     */
    public function getSentimentEnvironnement()
    {
        return $this->sentimentEnvironnement;
    }

    /**
     * @param int $sentimentEnvironnement
     */
    public function setSentimentEnvironnement($sentimentEnvironnement)
    {
        $this->sentimentEnvironnement = $sentimentEnvironnement;
    }

    /**
     * @return int
     */
    public function getConfianceEchangeEntreprise()
    {
        return $this->confianceEchangeEntreprise;
    }

    /**
     * @param int $confianceEchangeEntreprise
     */
    public function setConfianceEchangeEntreprise($confianceEchangeEntreprise)
    {
        $this->confianceEchangeEntreprise = $confianceEchangeEntreprise;
    }

    /**
     * @return int
     */
    public function getCooperationEchangeEntreprise()
    {
        return $this->cooperationEchangeEntreprise;
    }

    /**
     * @param int $cooperationEchangeEntreprise
     */
    public function setCooperationEchangeEntreprise($cooperationEchangeEntreprise)
    {
        $this->cooperationEchangeEntreprise = $cooperationEchangeEntreprise;
    }

    /**
     * @return int
     */
    public function getPetinenceMission()
    {
        return $this->petinenceMission;
    }

    /**
     * @param int $petinenceMission
     */
    public function setPetinenceMission($petinenceMission)
    {
        $this->petinenceMission = $petinenceMission;
    }

    /**
     * @return int
     */
    public function getNiveauExigence()
    {
        return $this->niveauExigence;
    }

    /**
     * @param int $niveauExigence
     */
    public function setNiveauExigence($niveauExigence)
    {
        $this->niveauExigence = $niveauExigence;
    }

    /**
     * @return int
     */
    public function getFreqPauseDejEquipe()
    {
        return $this->freqPauseDejEquipe;
    }

    /**
     * @param int $freqPauseDejEquipe
     */
    public function setFreqPauseDejEquipe($freqPauseDejEquipe)
    {
        $this->freqPauseDejEquipe = $freqPauseDejEquipe;
    }

    /**
     * @return int
     */
    public function getRemuneration()
    {
        return $this->remuneration;
    }

    /**
     * @param int $remuneration
     */
    public function setRemuneration($remuneration)
    {
        $this->remuneration = $remuneration;
    }

    /**
     * @return int
     */
    public function getTrajet()
    {
        return $this->trajet;
    }

    /**
     * @param int $trajet
     */
    public function setTrajet($trajet)
    {
        $this->trajet = $trajet;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    /**
     * @var string
     *
     * @ORM\Column(name="va_quitter", type="string", length=25, nullable=true)
     */
    private $vaQuitter;

    /**
     * @var string
     *
     * @ORM\Column(name="genre", type="string", length=5, nullable=true)
     */
    private $genre;

    /**
     * @var string
     *
     * @ORM\Column(name="age", type="string", length=19, nullable=true)
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="professions", type="string", length=114, nullable=true)
     */
    private $professions;

    /**
     * @var string
     *
     * @ORM\Column(name="situation_handi", type="string", length=3, nullable=true)
     */
    private $situationHandi;

    /**
     * @var integer
     *
     * @ORM\Column(name="centre_perso_un", type="integer", length=35, nullable=true)
     */
    private $centrePersoUn;

    /**
     * @var integer
     *
     * @ORM\Column(name="centre_perso_deux", type="integer", length=82, nullable=true)
     */
    private $centrePersoDeux;

    /**
     * @var integer
     *
     * @ORM\Column(name="centre_perso_trois", type="integer", length=82, nullable=true)
     */
    private $centrePersoTrois;

    /**
     * @var integer
     *
     * @ORM\Column(name="centre_perso_quatre", type="integer", length=102, nullable=true)
     */
    private $centrePersoQuatre;

    /**
     * @var integer
     *
     * @ORM\Column(name="note_animaux_elephant", type="integer", nullable=true)
     */
    private $noteAnimauxElephant;

    /**
     * @var integer
     *
     * @ORM\Column(name="note_animaux_taureau", type="integer", nullable=true)
     */
    private $noteAnimauxTaureau;

    /**
     * @var integer
     *
     * @ORM\Column(name="note_animaux_lion", type="integer", nullable=true)
     */
    private $noteAnimauxLion;

    /**
     * @var integer
     *
     * @ORM\Column(name="note_animaux_coq", type="integer", nullable=true)
     */
    private $noteAnimauxCoq;

    /**
     * @var integer
     *
     * @ORM\Column(name="note_animaux_renard", type="integer", nullable=true)
     */
    private $noteAnimauxRenard;

    /**
     * @var integer
     *
     * @ORM\Column(name="note_animaux_chien", type="integer", nullable=true)
     */
    private $noteAnimauxChien;

    /**
     * @var integer
     *
     * @ORM\Column(name="note_animaux_hibou", type="integer", nullable=true)
     */
    private $noteAnimauxHibou;

    /**
     * @var integer
     *
     * @ORM\Column(name="note_animaux_castor", type="integer", nullable=true)
     */
    private $noteAnimauxCastor;

    /**
     * @var integer
     *
     * @ORM\Column(name="nombre_experience", type="integer", nullable=true)
     */
    private $nombreExperience;

    /**
     * @var integer
     *
     * @ORM\Column(name="sentiment_environnement", type="integer", nullable=true)
     */
    private $sentimentEnvironnement;

    /**
     * @var integer
     *
     * @ORM\Column(name="confiance_echange_entreprise", type="integer", nullable=true)
     */
    private $confianceEchangeEntreprise;

    /**
     * @var integer
     *
     * @ORM\Column(name="cooperation_echange_entreprise", type="integer", nullable=true)
     */
    private $cooperationEchangeEntreprise;

    /**
     * @var integer
     *
     * @ORM\Column(name="petinence_mission", type="integer", nullable=true)
     */
    private $petinenceMission;

    /**
     * @var integer
     *
     * @ORM\Column(name="niveau_exigence", type="integer", nullable=true)
     */
    private $niveauExigence;

    /**
     * @var integer
     *
     * @ORM\Column(name="freq_pause_dej_equipe", type="integer", nullable=true)
     */
    private $freqPauseDejEquipe;

    /**
     * @var integer
     *
     * @ORM\Column(name="remuneration", type="integer", nullable=true)
     */
    private $remuneration;

    /**
     * @var integer
     *
     * @ORM\Column(name="trajet", type="integer", nullable=true)
     */
    private $trajet;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}


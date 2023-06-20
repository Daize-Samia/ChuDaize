<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\ObservationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ObservationRepository::class)]
#[ApiResource]
class Observation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse = null;

    #[ORM\Column(length: 255)]
    private ?string $agemere = null;

    #[ORM\Column(length: 255)]
    private ?string $agepere = null;

    #[ORM\Column(length: 255)]
    private ?string $grossesse = null;

    #[ORM\Column]
    private ?int $parite = null;

    #[ORM\Column]
    private ?int $nombreFratrie = null;

    #[ORM\Column(length: 255)]
    private ?string $grossesseS = null;

    #[ORM\Column(length: 255)]
    private ?string $serologie = null;

    #[ORM\Column(length: 255)]
    private ?string $deroulement = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $optionDeroulement = null;

    #[ORM\Column(length: 255)]
    private ?string $agegestationnel = null;

    #[ORM\Column(length: 255)]
    private ?string $accouchement = null;

    #[ORM\Column(length: 255)]
    private ?string $PN = null;

    #[ORM\Column(length: 255)]
    private ?string $allaitement = null;

    #[ORM\Column(length: 255)]
    private ?string $developpementpsychomoteur = null;

    #[ORM\Column(length: 255)]
    private ?string $irr = null;

    #[ORM\Column(length: 255)]
    private ?string $chirurgicaux = null;

    #[ORM\Column(length: 255)]
    private ?string $consanguinite = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $optionConsanguinite = null;

    #[ORM\Column(length: 255)]
    private ?string $cardfamille = null;

    #[ORM\Column(length: 255)]
    private ?string $atcdmaternels = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $optionAtcd = null;

    #[ORM\Column(length: 255)]
    private ?string $pmedic = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $optionMedicament = null;

    #[ORM\Column(length: 255)]
    private ?string $motif_hosp_consul = null;

    #[ORM\Column(length: 255)]
    private ?string $ageAppSym = null;

    #[ORM\Column(length: 255)]
    private ?string $dyspnee = null;

    #[ORM\Column(length: 255)]
    private ?string $sueursALeffort = null;

    #[ORM\Column(length: 255)]
    private ?string $cyanose = null;

    #[ORM\Column(length: 255)]
    private ?string $malaise = null;

    #[ORM\Column(length: 255)]
    private ?string $diffalimentaire = null;

    #[ORM\Column(length: 255)]
    private ?string $stagnationponderale = null;

    #[ORM\Column(length: 255)]
    private ?string $syncope = null;

    #[ORM\Column(length: 255)]
    private ?string $palpitation = null;

    #[ORM\Column(length: 255)]
    private ?string $signesrespiratoires = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $autres = null;

    #[ORM\Column]
    private ?float $poids = null;

    #[ORM\Column]
    private ?float $taille = null;

    #[ORM\Column]
    private ?float $pc = null;

    #[ORM\Column]
    private ?float $temperature = null;

    #[ORM\Column]
    private ?float $ta = null;

    #[ORM\Column]
    private ?float $fr = null;

    #[ORM\Column]
    private ?float $fc = null;

    #[ORM\Column]
    private ?float $alaireambiante = null;

    #[ORM\Column]
    private ?float $souso2 = null;

    #[ORM\Column(length: 255)]
    private ?string $dysmorphie = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $optionDysmorphie = null;

    #[ORM\Column(length: 255)]
    private ?string $souffle = null;

    #[ORM\Column(length: 255)]
    private ?string $pouls_peripherique_percues = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $optionPPP = null;

    #[ORM\Column(length: 255)]
    private ?string $eclat_B2 = null;

    #[ORM\Column(length: 255)]
    private ?string $bruit_galop = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $optionBruit = null;

    #[ORM\Column(length: 255)]
    private ?string $hippocratisme_digital = null;

    #[ORM\Column(length: 255)]
    private ?string $deformation_thoracique = null;

    #[ORM\Column(length: 255)]
    private ?string $resteexamenclinique = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $optionREC = null;

    #[ORM\Column(length: 255)]
    private ?string $ECG = null;

    #[ORM\Column(length: 255)]
    private ?string $RadioThoracique = null;

    #[ORM\Column(length: 255)]
    private ?string $EchographieCardiaque = null;

    #[ORM\Column(length: 255)]
    private ?string $CAT = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    private array $sInsufCard = [];

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?patient $patient = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getAgemere(): ?string
    {
        return $this->agemere;
    }

    public function setAgemere(string $agemere): self
    {
        $this->agemere = $agemere;

        return $this;
    }

    public function getAgepere(): ?string
    {
        return $this->agepere;
    }

    public function setAgepere(string $agepere): self
    {
        $this->agepere = $agepere;

        return $this;
    }

    public function getGrossesse(): ?string
    {
        return $this->grossesse;
    }

    public function setGrossesse(string $grossesse): self
    {
        $this->grossesse = $grossesse;

        return $this;
    }

    public function getParite(): ?int
    {
        return $this->parite;
    }

    public function setParite(int $parite): self
    {
        $this->parite = $parite;

        return $this;
    }

    public function getNombreFratrie(): ?int
    {
        return $this->nombreFratrie;
    }

    public function setNombreFratrie(int $nombreFratrie): self
    {
        $this->nombreFratrie = $nombreFratrie;

        return $this;
    }

    public function getGrossesseS(): ?string
    {
        return $this->grossesseS;
    }

    public function setGrossesseS(string $grossesseS): self
    {
        $this->grossesseS = $grossesseS;

        return $this;
    }

    public function getSerologie(): ?string
    {
        return $this->serologie;
    }

    public function setSerologie(string $serologie): self
    {
        $this->serologie = $serologie;

        return $this;
    }

    public function getDeroulement(): ?string
    {
        return $this->deroulement;
    }

    public function setDeroulement(string $deroulement): self
    {
        $this->deroulement = $deroulement;

        return $this;
    }

    public function getOptionDeroulement(): ?string
    {
        return $this->optionDeroulement;
    }

    public function setOptionDeroulement(?string $optionDeroulement): self
    {
        $this->optionDeroulement = $optionDeroulement;

        return $this;
    }

    public function getAgegestationnel(): ?string
    {
        return $this->agegestationnel;
    }

    public function setAgegestationnel(string $agegestationnel): self
    {
        $this->agegestationnel = $agegestationnel;

        return $this;
    }

    public function getAccouchement(): ?string
    {
        return $this->accouchement;
    }

    public function setAccouchement(string $accouchement): self
    {
        $this->accouchement = $accouchement;

        return $this;
    }

    public function getPN(): ?string
    {
        return $this->PN;
    }

    public function setPN(string $PN): self
    {
        $this->PN = $PN;

        return $this;
    }

    public function getAllaitement(): ?string
    {
        return $this->allaitement;
    }

    public function setAllaitement(string $allaitement): self
    {
        $this->allaitement = $allaitement;

        return $this;
    }

    public function getDeveloppementpsychomoteur(): ?string
    {
        return $this->developpementpsychomoteur;
    }

    public function setDeveloppementpsychomoteur(string $developpementpsychomoteur): self
    {
        $this->developpementpsychomoteur = $developpementpsychomoteur;

        return $this;
    }

    public function getIrr(): ?string
    {
        return $this->irr;
    }

    public function setIrr(string $irr): self
    {
        $this->irr = $irr;

        return $this;
    }

    public function getChirurgicaux(): ?string
    {
        return $this->chirurgicaux;
    }

    public function setChirurgicaux(string $chirurgicaux): self
    {
        $this->chirurgicaux = $chirurgicaux;

        return $this;
    }

    public function getConsanguinite(): ?string
    {
        return $this->consanguinite;
    }

    public function setConsanguinite(string $consanguinite): self
    {
        $this->consanguinite = $consanguinite;

        return $this;
    }

    public function getOptionConsanguinite(): ?string
    {
        return $this->optionConsanguinite;
    }

    public function setOptionConsanguinite(?string $optionConsanguinite): self
    {
        $this->optionConsanguinite = $optionConsanguinite;

        return $this;
    }

    public function getCardfamille(): ?string
    {
        return $this->cardfamille;
    }

    public function setCardfamille(string $cardfamille): self
    {
        $this->cardfamille = $cardfamille;

        return $this;
    }

    public function getAtcdmaternels(): ?string
    {
        return $this->atcdmaternels;
    }

    public function setAtcdmaternels(string $atcdmaternels): self
    {
        $this->atcdmaternels = $atcdmaternels;

        return $this;
    }

    public function getOptionAtcd(): ?string
    {
        return $this->optionAtcd;
    }

    public function setOptionAtcd(?string $optionAtcd): self
    {
        $this->optionAtcd = $optionAtcd;

        return $this;
    }

    public function getPmedic(): ?string
    {
        return $this->pmedic;
    }

    public function setPmedic(string $pmedic): self
    {
        $this->pmedic = $pmedic;

        return $this;
    }

    public function getOptionMedicament(): ?string
    {
        return $this->optionMedicament;
    }

    public function setOptionMedicament(?string $optionMedicament): self
    {
        $this->optionMedicament = $optionMedicament;

        return $this;
    }

    public function getMotifHospConsul(): ?string
    {
        return $this->motif_hosp_consul;
    }

    public function setMotifHospConsul(string $motif_hosp_consul): self
    {
        $this->motif_hosp_consul = $motif_hosp_consul;

        return $this;
    }

    public function getAgeAppSym(): ?string
    {
        return $this->ageAppSym;
    }

    public function setAgeAppSym(string $ageAppSym): self
    {
        $this->ageAppSym = $ageAppSym;

        return $this;
    }

    public function getDyspnee(): ?string
    {
        return $this->dyspnee;
    }

    public function setDyspnee(string $dyspnee): self
    {
        $this->dyspnee = $dyspnee;

        return $this;
    }

    public function getSueursALeffort(): ?string
    {
        return $this->sueursALeffort;
    }

    public function setSueursALeffort(string $sueursALeffort): self
    {
        $this->sueursALeffort = $sueursALeffort;

        return $this;
    }

    public function getCyanose(): ?string
    {
        return $this->cyanose;
    }

    public function setCyanose(string $cyanose): self
    {
        $this->cyanose = $cyanose;

        return $this;
    }

    public function getMalaise(): ?string
    {
        return $this->malaise;
    }

    public function setMalaise(string $malaise): self
    {
        $this->malaise = $malaise;

        return $this;
    }

    public function getDiffalimentaire(): ?string
    {
        return $this->diffalimentaire;
    }

    public function setDiffalimentaire(string $diffalimentaire): self
    {
        $this->diffalimentaire = $diffalimentaire;

        return $this;
    }

    public function getStagnationponderale(): ?string
    {
        return $this->stagnationponderale;
    }

    public function setStagnationponderale(string $stagnationponderale): self
    {
        $this->stagnationponderale = $stagnationponderale;

        return $this;
    }

    public function getSyncope(): ?string
    {
        return $this->syncope;
    }

    public function setSyncope(string $syncope): self
    {
        $this->syncope = $syncope;

        return $this;
    }

    public function getPalpitation(): ?string
    {
        return $this->palpitation;
    }

    public function setPalpitation(string $palpitation): self
    {
        $this->palpitation = $palpitation;

        return $this;
    }

    public function getSignesrespiratoires(): ?string
    {
        return $this->signesrespiratoires;
    }

    public function setSignesrespiratoires(string $signesrespiratoires): self
    {
        $this->signesrespiratoires = $signesrespiratoires;

        return $this;
    }

    public function getAutres(): ?string
    {
        return $this->autres;
    }

    public function setAutres(?string $autres): self
    {
        $this->autres = $autres;

        return $this;
    }

    public function getPoids(): ?float
    {
        return $this->poids;
    }

    public function setPoids(float $poids): self
    {
        $this->poids = $poids;

        return $this;
    }

    public function getTaille(): ?float
    {
        return $this->taille;
    }

    public function setTaille(float $taille): self
    {
        $this->taille = $taille;

        return $this;
    }

    public function getPc(): ?float
    {
        return $this->pc;
    }

    public function setPc(float $pc): self
    {
        $this->pc = $pc;

        return $this;
    }

    public function getTemperature(): ?float
    {
        return $this->temperature;
    }

    public function setTemperature(float $temperature): self
    {
        $this->temperature = $temperature;

        return $this;
    }

    public function getTa(): ?float
    {
        return $this->ta;
    }

    public function setTa(float $ta): self
    {
        $this->ta = $ta;

        return $this;
    }

    public function getFr(): ?float
    {
        return $this->fr;
    }

    public function setFr(float $fr): self
    {
        $this->fr = $fr;

        return $this;
    }

    public function getFc(): ?float
    {
        return $this->fc;
    }

    public function setFc(float $fc): self
    {
        $this->fc = $fc;

        return $this;
    }

    public function getAlaireambiante(): ?float
    {
        return $this->alaireambiante;
    }

    public function setAlaireambiante(float $alaireambiante): self
    {
        $this->alaireambiante = $alaireambiante;

        return $this;
    }

    public function getSouso2(): ?float
    {
        return $this->souso2;
    }

    public function setSouso2(float $souso2): self
    {
        $this->souso2 = $souso2;

        return $this;
    }

    public function getDysmorphie(): ?string
    {
        return $this->dysmorphie;
    }

    public function setDysmorphie(string $dysmorphie): self
    {
        $this->dysmorphie = $dysmorphie;

        return $this;
    }

    public function getOptionDysmorphie(): ?string
    {
        return $this->optionDysmorphie;
    }

    public function setOptionDysmorphie(?string $optionDysmorphie): self
    {
        $this->optionDysmorphie = $optionDysmorphie;

        return $this;
    }

    public function getSouffle(): ?string
    {
        return $this->souffle;
    }

    public function setSouffle(string $souffle): self
    {
        $this->souffle = $souffle;

        return $this;
    }

    public function getPoulsPeripheriquePercues(): ?string
    {
        return $this->pouls_peripherique_percues;
    }

    public function setPoulsPeripheriquePercues(string $pouls_peripherique_percues): self
    {
        $this->pouls_peripherique_percues = $pouls_peripherique_percues;

        return $this;
    }

    public function getOptionPPP(): ?string
    {
        return $this->optionPPP;
    }

    public function setOptionPPP(?string $optionPPP): self
    {
        $this->optionPPP = $optionPPP;

        return $this;
    }

    public function getEclatB2(): ?string
    {
        return $this->eclat_B2;
    }

    public function setEclatB2(string $eclat_B2): self
    {
        $this->eclat_B2 = $eclat_B2;

        return $this;
    }

    public function getBruitGalop(): ?string
    {
        return $this->bruit_galop;
    }

    public function setBruitGalop(string $bruit_galop): self
    {
        $this->bruit_galop = $bruit_galop;

        return $this;
    }

    public function getOptionBruit(): ?string
    {
        return $this->optionBruit;
    }

    public function setOptionBruit(?string $optionBruit): self
    {
        $this->optionBruit = $optionBruit;

        return $this;
    }

    public function getHippocratismeDigital(): ?string
    {
        return $this->hippocratisme_digital;
    }

    public function setHippocratismeDigital(string $hippocratisme_digital): self
    {
        $this->hippocratisme_digital = $hippocratisme_digital;

        return $this;
    }

    public function getDeformationThoracique(): ?string
    {
        return $this->deformation_thoracique;
    }

    public function setDeformationThoracique(string $deformation_thoracique): self
    {
        $this->deformation_thoracique = $deformation_thoracique;

        return $this;
    }

    public function getResteexamenclinique(): ?string
    {
        return $this->resteexamenclinique;
    }

    public function setResteexamenclinique(string $resteexamenclinique): self
    {
        $this->resteexamenclinique = $resteexamenclinique;

        return $this;
    }

    public function getOptionREC(): ?string
    {
        return $this->optionREC;
    }

    public function setOptionREC(?string $optionREC): self
    {
        $this->optionREC = $optionREC;

        return $this;
    }

    public function getECG(): ?string
    {
        return $this->ECG;
    }

    public function setECG(string $ECG): self
    {
        $this->ECG = $ECG;

        return $this;
    }

    public function getRadioThoracique(): ?string
    {
        return $this->RadioThoracique;
    }

    public function setRadioThoracique(string $RadioThoracique): self
    {
        $this->RadioThoracique = $RadioThoracique;

        return $this;
    }

    public function getEchographieCardiaque(): ?string
    {
        return $this->EchographieCardiaque;
    }

    public function setEchographieCardiaque(string $EchographieCardiaque): self
    {
        $this->EchographieCardiaque = $EchographieCardiaque;

        return $this;
    }

    public function getCAT(): ?string
    {
        return $this->CAT;
    }

    public function setCAT(string $CAT): self
    {
        $this->CAT = $CAT;

        return $this;
    }

    public function getSInsufCard(): array
    {
        return $this->sInsufCard;
    }

    public function setSInsufCard(?array $sInsufCard): self
    {
        $this->sInsufCard = $sInsufCard;

        return $this;
    }

    public function getPatient(): ?patient
    {
        return $this->patient;
    }

    public function setPatient(?patient $patient): self
    {
        $this->patient = $patient;

        return $this;
    }
}

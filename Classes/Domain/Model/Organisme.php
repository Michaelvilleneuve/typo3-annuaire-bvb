<?php
namespace BVB\AnnuaireBvb\Domain\Model;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2017 Bettini Emile <emile.bettini@etu.u-bordeaux.fr>, BVB Corp.
 *           Villeneuve Michael <michael.villeneuve@etu.u-bordeaux.fr>, BVB Corp.
 *           Brones Alexis <alexis.brones@etu.u-bordeaux.fr>, BVB Corp.
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Organisme
 */
class Organisme extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * Raison sociale
     *
     * @var string
     * @validate NotEmpty
     */
    protected $raisonSociale = '';
    
    /**
     * Adresse
     *
     * @var string
     * @validate NotEmpty
     */
    protected $adresse = '';
    
    /**
     * Code postale
     *
     * @var string
     * @validate NotEmpty
     */
    protected $codePostal = '';
    
    /**
     * Ville
     *
     * @var string
     * @validate NotEmpty
     */
    protected $ville = '';
    
    /**
     * Téléphone
     *
     * @var string
     */
    protected $tel = '';
    
    /**
     * Fax
     *
     * @var string
     */
    protected $fax = '';
    
    /**
     * E-mail
     *
     * @var string
     */
    protected $email = '';
    
    /**
     * Description
     *
     * @var string
     */
    protected $description = '';
    
    /**
     * Siret
     *
     * @var int
     * @validate NotEmpty
     */
    protected $siret = 0;
    
    /**
     * Logo
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    protected $logo = null;
    
    /**
     * Horaires
     *
     * @var string
     */
    protected $horaires = '';
    
    /**
     * Returns the raisonSociale
     *
     * @return string $raisonSociale
     */
    public function getRaisonSociale()
    {
        return $this->raisonSociale;
    }
    
    /**
     * Sets the raisonSociale
     *
     * @param string $raisonSociale
     * @return void
     */
    public function setRaisonSociale($raisonSociale)
    {
        $this->raisonSociale = $raisonSociale;
    }
    
    /**
     * Returns the adresse
     *
     * @return string $adresse
     */
    public function getAdresse()
    {
        return $this->adresse;
    }
    
    /**
     * Sets the adresse
     *
     * @param string $adresse
     * @return void
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }
    
    /**
     * Returns the codePostal
     *
     * @return string $codePostal
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }
    
    /**
     * Sets the codePostal
     *
     * @param string $codePostal
     * @return void
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;
    }
    
    /**
     * Returns the ville
     *
     * @return string $ville
     */
    public function getVille()
    {
        return $this->ville;
    }
    
    /**
     * Sets the ville
     *
     * @param string $ville
     * @return void
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }
    
    /**
     * Returns the tel
     *
     * @return string $tel
     */
    public function getTel()
    {
        return $this->tel;
    }
    
    /**
     * Sets the tel
     *
     * @param string $tel
     * @return void
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }
    
    /**
     * Returns the fax
     *
     * @return string $fax
     */
    public function getFax()
    {
        return $this->fax;
    }
    
    /**
     * Sets the fax
     *
     * @param string $fax
     * @return void
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
    }
    
    /**
     * Returns the email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }
    
    /**
     * Sets the email
     *
     * @param string $email
     * @return void
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
    
    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
    
    /**
     * Returns the siret
     *
     * @return int $siret
     */
    public function getSiret()
    {
        return $this->siret;
    }
    
    /**
     * Sets the siret
     *
     * @param int $siret
     * @return void
     */
    public function setSiret($siret)
    {
        $this->siret = $siret;
    }
    
    /**
     * Returns the logo
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $logo
     */
    public function getLogo()
    {
        return $this->logo;
    }
    
    /**
     * Sets the logo
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $logo
     * @return void
     */
    public function setLogo(\TYPO3\CMS\Extbase\Domain\Model\FileReference $logo)
    {
        $this->logo = $logo;
    }
    
    /**
     * Returns the horaires
     *
     * @return string $horaires
     */
    public function getHoraires()
    {
        return $this->horaires;
    }
    
    /**
     * Sets the horaires
     *
     * @param string $horaires
     * @return void
     */
    public function setHoraires($horaires)
    {
        $this->horaires = $horaires;
    }

}
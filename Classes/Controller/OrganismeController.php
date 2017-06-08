<?php
namespace BVB\AnnuaireBvb\Controller;

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
 * OrganismeController
 */
class OrganismeController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * organismeRepository
     *
     * @var \BVB\AnnuaireBvb\Domain\Repository\OrganismeRepository
     * @inject
     */
    protected $organismeRepository = NULL;
    
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $organismes = $this->organismeRepository->findAll();
        $this->view->assign('organismes', $organismes);
    }
    
    /**
     * action show
     *
     * @param \BVB\AnnuaireBvb\Domain\Model\Organisme $organisme
     * @return void
     */
    public function showAction(\BVB\AnnuaireBvb\Domain\Model\Organisme $organisme)
    {
        $this->view->assign('organisme', $organisme);
    }
    
    /**
     * action contactList
     *
     * @return void
     */
    public function contactListAction()
    {
        
    }
    
    /**
     * action serviceList
     *
     * @return void
     */
    public function serviceListAction()
    {
        
    }
    
    /**
     * action serviceShow
     *
     * @return void
     */
    public function serviceShowAction()
    {
        
    }

}
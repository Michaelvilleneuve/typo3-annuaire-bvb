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
 * ContactController
 */
class ContactController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * contactRepository
     *
     * @var \BVB\AnnuaireBvb\Domain\Repository\ContactRepository
     * @inject
     */
    protected $contactRepository = NULL;
    
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $contacts = $_POST['tx_annuairebvb_pi1']['search'] ? $this->contactRepository->search($_POST['tx_annuairebvb_pi1']['search']['terms']) : $this->contactRepository->findAll();
        $this->view->assign('contacts', $contacts);
    }
    
    /**
     * action show
     *
     * @param \BVB\AnnuaireBvb\Domain\Model\Contact $contact
     * @return void
     */
    public function showAction(\BVB\AnnuaireBvb\Domain\Model\Contact $contact)
    {
        $this->view->assign('contact', $contact);
    }
    
    /**
     * action search
     *
     * @return void
     */
    public function searchAction()
    {
        
    }

}
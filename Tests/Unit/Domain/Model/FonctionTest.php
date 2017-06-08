<?php

namespace BVB\AnnuaireBvb\Tests\Unit\Domain\Model;

/***************************************************************
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
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class \BVB\AnnuaireBvb\Domain\Model\Fonction.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Bettini Emile <emile.bettini@etu.u-bordeaux.fr>
 * @author Villeneuve Michael <michael.villeneuve@etu.u-bordeaux.fr>
 * @author Brones Alexis <alexis.brones@etu.u-bordeaux.fr>
 */
class FonctionTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
	/**
	 * @var \BVB\AnnuaireBvb\Domain\Model\Fonction
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = new \BVB\AnnuaireBvb\Domain\Model\Fonction();
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getLibelleReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getLibelle()
		);
	}

	/**
	 * @test
	 */
	public function setLibelleForStringSetsLibelle()
	{
		$this->subject->setLibelle('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'libelle',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getResponsableReturnsInitialValueForBool()
	{
		$this->assertSame(
			FALSE,
			$this->subject->getResponsable()
		);
	}

	/**
	 * @test
	 */
	public function setResponsableForBoolSetsResponsable()
	{
		$this->subject->setResponsable(TRUE);

		$this->assertAttributeEquals(
			TRUE,
			'responsable',
			$this->subject
		);
	}
}

<?php

namespace Mobger\Positioner\Tests;
/***************************************************************
 * Urheber 	Dr. Dieter Porth
 *			Quakenbrück - 2014
 *			Positioner - Extension für TYPO3 
 *			
 *			alle Rechte vorbehalten / all rights reserved   
 ***************************************************************
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
 * Test case for class \Mobger\Positioner\Domain\Model\Positioner.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage Positioner
 *
 * @author Dieter Porth <info@mobger.de>
 */
class PositionerTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \Mobger\Positioner\Domain\Model\Positioner
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \Mobger\Positioner\Domain\Model\Positioner();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getTxPositionerWidthReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getTxPositionerWidth()
		);
	}

	/**
	 * @test
	 */
	public function setTxPositionerWidthForIntegerSetsTxPositionerWidth() { 
		$this->fixture->setTxPositionerWidth(12);

		$this->assertSame(
			12,
			$this->fixture->getTxPositionerWidth()
		);
	}
	
	/**
	 * @test
	 */
	public function getTxPositionerRightReturnsInitialValueForOolean() { }

	/**
	 * @test
	 */
	public function setTxPositionerRightForOoleanSetsTxPositionerRight() { }
	
	/**
	 * @test
	 */
	public function getTxPositionerHeightReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getTxPositionerHeight()
		);
	}

	/**
	 * @test
	 */
	public function setTxPositionerHeightForIntegerSetsTxPositionerHeight() { 
		$this->fixture->setTxPositionerHeight(12);

		$this->assertSame(
			12,
			$this->fixture->getTxPositionerHeight()
		);
	}
	
	/**
	 * @test
	 */
	public function getTxPositionerBottomReturnsInitialValueForOolean() { }

	/**
	 * @test
	 */
	public function setTxPositionerBottomForOoleanSetsTxPositionerBottom() { }
	
}
?>
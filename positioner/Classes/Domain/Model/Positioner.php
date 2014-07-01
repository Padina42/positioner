<?php
namespace Mobger\Positioner\Domain\Model;

/***************************************************************
 * Urheber 	Dr. Dieter Porth
 *			Quakenbrück - 2014
 *			Positioner - Extension für TYPO3
 *			
 ***************************************************************
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
 ***************************************************************
 */

/**
 *
 *
 * @package positioner
 *
 */
class Positioner extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * distance to the border in pixels in the direction of width/X
	 *
	 * @var \integer
	 * @validate NotEmpty
	 */
	protected $txPositionerWidth;

	/**
	 * if true, the txPositionWidth is relative to the right border
	 *
	 * @var boolean
	 */
	protected $txPositionerRight = FALSE;

	/**
	 * distance to the border in pixels in the direction of height/Y
	 *
	 * @var \integer
	 */
	protected $txPositionerHeight;

	/**
	 * if true, the txPositionHeight is relative to the bottom border
	 *
	 * @var boolean
	 */
	protected $txPositionerBottom = FALSE;

    /**
     * z-index of an object
     *
     * @var \integer
     * @validate NotEmpty
     */
    protected $txPositionerContentZIndex;

    /**
     * overlap of speech-bubble in direction of top
     *
     * @var \integer
     * @validate NotEmpty
     */
    protected $txPositionerPaddingTop;

    /**
     * overlap of speech-bubble in direction of right
     *
     * @var \integer
     * @validate NotEmpty
     */
    protected $txPositionerPaddingRight;

    /**
     * overlap of speech-bubble in direction of bottom
     *
     * @var \integer
     * @validate NotEmpty
     */
    protected $txPositionerPaddingBottom;

    /**
     * overlap of speech-bubble in direction of left
     *
     * @var \integer
     * @validate NotEmpty
     */
    protected $txPositionerPaddingLeft;

    /**
     * color to change (source)
     *
     * @var \string
     */
    protected $txPositionerFromColor;

    /**
     * color to change (destination)
     *
     * @var \string
     */
    protected $txPositionerToColor;

    /**
     * color to mask the transparenz
     *
     * @var \string
     */
    protected $txPositionerDummyColor;

    /**
     * overlap of speech-bubble in direction of left
     *
     * @var \integer
     * @validate NotEmpty
     */
    protected $txPositionerToOpacity;
    
    /**
	 * Returns the txPositionerWidth
	 *
	 * @return \integer txPositionerWidth
	 */
	public function getTxPositionerWidth() {
		return $this->txPositionerWidth;
	}

	/**
	 * Sets the txPositionerWidth
	 *
	 * @param \integer $txPositionerWidth
	 * @return \integer txPositionerWidth
	 */
	public function setTxPositionerWidth($txPositionerWidth) {
		$this->txPositionerWidth = $txPositionerWidth;
	}

	/**
	 * Returns the txPositionerRight
	 *
	 * @return boolean txPositionerRight
	 */
	public function getTxPositionerRight() {
		return $this->txPositionerRight;
	}

	/**
	 * Sets the txPositionerRight
	 *
	 * @param boolean $txPositionerRight
	 * @return boolean txPositionerRight
	 */
	public function setTxPositionerRight($txPositionerRight) {
		$this->txPositionerRight = $txPositionerRight;
	}

	/**
	 * Returns the boolean state of txPositionerRight
	 *
	 * @return boolean txPositionerRight
	 */
	public function isTxPositionerRight() {
		return $this->txPositionerRight;
	}

	/**
	 * Returns the txPositionerHeight
	 *
	 * @return \integer txPositionerHeight
	 */
	public function getTxPositionerHeight() {
		return $this->txPositionerHeight;
	}

	/**
	 * Sets the txPositionerHeight
	 *
	 * @param \integer $txPositionerHeight
	 * @return \integer txPositionerHeight
	 */
	public function setTxPositionerHeight($txPositionerHeight) {
		$this->txPositionerHeight = $txPositionerHeight;
	}

	/**
	 * Returns the txPositionerBottom
	 *
	 * @return boolean txPositionerBottom
	 */
	public function getTxPositionerBottom() {
		return $this->txPositionerBottom;
	}

	/**
	 * Sets the txPositionerBottom
	 *
	 * @param boolean $txPositionerBottom
	 * @return boolean txPositionerBottom
	 */
	public function setTxPositionerBottom($txPositionerBottom) {
		$this->txPositionerBottom = $txPositionerBottom;
	}

    /**
     * Returns the txPositionerContentZIndex
     *
     * @return \integer txPositionerContentZIndex
     */
    public function getTxPositionerContentZIndex() {
        return $this->txPositionerContentZIndex;
    }

    /**
     * Sets the txPositionerContentZIndex
     *
     * @param \integer $txPositionerContentZIndex
     * @return \integer txPositionerContentZIndex
     */
    public function setTxPositionerContentZIndex($txPositionerContentZIndex) {
        $this->txPositionerContentZIndex = $txPositionerContentZIndex;
    }

    /**
     * Returns the txPositionerPaddingTop
     *
     * @return \integer txPositionerPaddingTop
     */
    public function getTxPositionerPaddingTop() {
        return $this->txPositionerPaddingTop;
    }

    /**
     * Sets the txPositionerPaddingTop
     *
     * @param \integer $txPositionerPaddingTop
     * @return \integer txPositionerPaddingTop
     */
    public function setTxPositionerPaddingTop($txPositionerPaddingTop) {
        $this->txPositionerPaddingTop = $txPositionerPaddingTop;
    }

    /**
     * Returns the txPositionerPaddingRight
     *
     * @return \integer txPositionerPaddingRight
     */
    public function getTxPositionerPaddingRight() {
        return $this->txPositionerPaddingRight;
    }

    /**
     * Sets the txPositionerPaddingRight
     *
     * @param \integer $txPositionerPaddingRight
     * @return \integer txPositionerPaddingRight
     */
    public function setTxPositionerPaddingRight($txPositionerPaddingRight) {
        $this->txPositionerPaddingRight = $txPositionerPaddingRight;
    }


    /**
     * Returns the txPositionerPaddingBottom
     *
     * @return \integer txPositionerPaddingBottom
     */
    public function getTxPositionerPaddingBottom() {
        return $this->txPositionerPaddingBottom;
    }

    /**
     * Sets the txPositionerPaddingBottom
     *
     * @param \integer $txPositionerPaddingBottom
     * @return \integer txPositionerPaddingBottom
     */
    public function setTxPositionerPaddingBottom($txPositionerPaddingBottom) {
        $this->txPositionerPaddingBottom = $txPositionerPaddingBottom;
    }

    /**
     * Returns the txPositionerPaddingLeft
     *
     * @return \integer txPositionerPaddingLeft
     */
    public function getTxPositionerPaddingLeft() {
        return $this->txPositionerPaddingLeft;
    }

    /**
     * Sets the txPositionerPaddingLeft
     *
     * @param \integer $txPositionerPaddingLeft
     * @return \integer txPositionerPaddingLeft
     */
    public function setTxPositionerPaddingLeft($txPositionerPaddingLeft) {
        $this->txPositionerPaddingLeft = $txPositionerPaddingLeft;
    }

    /**
     * Returns the txPositionerFromColor
     *
     * @return \string txPositionerFromColor
     */
    public function getTxPositionerFromColor() {
        return $this->txPositionerFromColor;
    }

    /**
     * Sets the txPositionerFromColor
     *
     * @param \string $txPositionerFromColor
     * @return \string txPositionerFromColor
     */
    public function setTxPositionerFromColor($txPositionerFromColor) {
        $this->txPositionerFromColor = $txPositionerFromColor;
    }

    /**
     * Returns the txPositionerToColor
     *
     * @return \string txPositionerToColor
     */
    public function getTxPositionerToColor() {
        return $this->txPositionerToColor;
    }

    /**
     * Sets the txPositionerToColor
     *
     * @param \string $txPositionerToColor
     * @return \string txPositionerToColor
     */
    public function setTxPositionerToColor($txPositionerToColor) {
        $this->txPositionerToColor = $txPositionerToColor;
    }

    /**
     * Returns the txPositionerDummyColor
     *
     * @return \string txPositionerDummyColor
     */
    public function getTxPositionerDummyColor() {
        return $this->txPositionerDummyColor;
    }

    /**
     * Sets the txPositionerDummyColor
     *
     * @param \string $txPositionerDummyColor
     * @return \string txPositionerDummyColor
     */
    public function setTxPositionerDummyColor($txPositionerDummyColor) {
        $this->txPositionerDummyColor = $txPositionerDummyColor;
    }

    /**
     * Returns the txPositionerToOpacity
     *
     * @return \integer txPositionerToOpacity
     */
    public function getTxPositionerToOpacity() {
        return $this->txPositionerToOpacity;
    }

    /**
     * Sets the txPositionerToOpacity
     *
     * @param \integer $txPositionerToOpacity
     * @return \integer txPositionerToOpacity
     */
    public function setTxPositionerToOpacity($txPositionerToOpacity) {
        $this->txPositionerToOpacity = $txPositionerToOpacity;
    }

}
?>
<?php
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

if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$fullExtensionPath = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY);
$relativeExtensionPath = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY);

/* ===========================================================================
	Add TSConstants und TSconfig
=========================================================================== */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptConstants('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/Configuration/TypoScript/constants.t3c">');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/Configuration/TypoScript/setup.t3s">');

$tempTsconfigDefinition = '
		TCEFORM.tt_content.section_frame.addItems.67 = LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang.xlf:tx_positioner_domain_model_positioner.tx_section_frame
		TCEFORM.tt_content.section_frame.addItems.68 = LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang.xlf:tx_positioner_domain_model_positioner.tx_section_frame_abs
		TCEFORM.tt_content.layout.addItems.67 = LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang.xlf:tx_positioner_domain_model_positioner.tx_layout

    mod.wizards.newContentElement.wizardItems.special.elements.speechBubble {
        icon = '.$relativeExtensionPath.'Resources/Public/Images/positioner_speech_bubble.gif
        title = LLL:EXT:positioner/Resources/Private/Language/locallang.xlf:tx_positioner_domain_model_positioner.tx_speechBubble_type
        description = LLL:EXT:positioner/Resources/Private/Language/locallang.xlf:tx_positioner_domain_model_positioner.tx_speechBubble_desc
        tt_content_defValues {
            CType = speechBubble
                section_frame = 67
                layout = 67
            }
        }
        mod.wizards.newContentElement.wizardItems.special.show := addToList(speechBubble)

        mod.wizards.newContentElement.wizardItems.special.elements.positioner {
            icon = '.$relativeExtensionPath.'Resources/Public/Images/positioner_frame.gif
            title = LLL:EXT:positioner/Resources/Private/Language/locallang.xlf:tx_positioner_domain_model_positioner.tx_content_type
            description = LLL:EXT:positioner/Resources/Private/Language/locallang.xlf:tx_positioner_domain_model_positioner.tx_content_desc
            tt_content_defValues {
                CType = positioner
                section_frame = 67
            }
        }
        mod.wizards.newContentElement.wizardItems.special.show := addToList(positioner)

        ';
// mod.wizards.newContentElement.wizardItems.special.show = positionerFrame
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig( $tempTsconfigDefinition );

?>
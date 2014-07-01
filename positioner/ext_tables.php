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

    if (!defined('TYPO3_MODE')) {
        die ('Access denied.');
    }

    $fullExtensionPath = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY);
    $relativeExtensionPath = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY);

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Positioner');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tt_content', 'EXT:positioner/Resources/Private/Language/locallang_csh_tt_content.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tt_content');

    $temporaryTtContentColumn = array(
        'tx_positioner_width' => array (
            'exclude' => 0,
            'label' => 'LLL:EXT:positioner/Resources/Private/Language/locallang_db.xlf:tx_positioner_domain_model_positioner.tx_positioner_width',
            'config' => array(
                'type' => 'input',
                'size' => '5',
                'max' => '6',
                'eval' => 'trim,int',
            ),
        ),
        'tx_positioner_right' => array (
            'exclude' => 0,
            'label' => 'LLL:EXT:positioner/Resources/Private/Language/locallang_db.xlf:tx_positioner_domain_model_positioner.tx_positioner_right',
            'config' => array(
                'type' => 'check',
            ),
        ),
        'tx_positioner_height' => array (
            'exclude' => 0,
            'label' => 'LLL:EXT:positioner/Resources/Private/Language/locallang_db.xlf:tx_positioner_domain_model_positioner.tx_positioner_height',
            'config' => array(
                'type' => 'input',
                'size' => '5',
                'max' => '6',
                'eval' => 'trim,int',
            ),
        ),
        'tx_positioner_bottom' => array (
            'exclude' => 0,
            'label' => 'LLL:EXT:positioner/Resources/Private/Language/locallang_db.xlf:tx_positioner_domain_model_positioner.tx_positioner_bottom',
            'config' => array(
                'type' => 'check',
            ),
        ),
        'tx_positioner_content_z_index' => array (
            'exclude' => 0,
            'label' => 'LLL:EXT:positioner/Resources/Private/Language/locallang_db.xlf:tx_positioner_domain_model_positioner.tx_positioner_content_z_index',
            'config' => array(
                'type' => 'input',
                'size' => '5',
                'max' => '4',
                'eval' => 'trim,int,range',
                'range' => array(
                    'lower' => -9999,
                    'upper' => 9999,
                ),
            ),
        ),
        'tx_positioner_padding_top' => array (
            'exclude' => 0,
            'label' => 'LLL:EXT:positioner/Resources/Private/Language/locallang_db.xlf:tx_positioner_domain_model_positioner.tx_positioner_padding_top',
            'config' => array(
                'type' => 'input',
                'size' => '5',
                'max' => '6',
                'eval' => 'trim,int,range',
                'range' => array(
                    'lower' => 0,
                ),
            ),
        ),
        'tx_positioner_padding_right' => array (
            'exclude' => 0,
            'label' => 'LLL:EXT:positioner/Resources/Private/Language/locallang_db.xlf:tx_positioner_domain_model_positioner.tx_positioner_padding_right',
            'config' => array(
                'type' => 'input',
                'size' => '5',
                'max' => '6',
                'eval' => 'trim,int,range',
                'range' => array(
                    'lower' => 0,
                ),
            ),
        ),
        'tx_positioner_padding_bottom' => array (
            'exclude' => 0,
            'label' => 'LLL:EXT:positioner/Resources/Private/Language/locallang_db.xlf:tx_positioner_domain_model_positioner.tx_positioner_padding_bottom',
            'config' => array(
                'type' => 'input',
                'size' => '5',
                'max' => '6',
                'eval' => 'trim,int,range',
                'range' => array(
                    'lower' => 0,
                ),
            ),
        ),
        'tx_positioner_padding_left' => array (
            'exclude' => 0,
            'label' => 'LLL:EXT:positioner/Resources/Private/Language/locallang_db.xlf:tx_positioner_domain_model_positioner.tx_positioner_padding_left',
            'config' => array(
                'type' => 'input',
                'size' => '5',
                'max' => '6',
                'eval' => 'trim,int,range',
                'range' => array(
                    'lower' => 0,
                ),
            ),
        ),
        'tx_positioner_from_color' => array (
            'exclude' => 0,
            'label' => 'LLL:EXT:positioner/Resources/Private/Language/locallang_db.xlf:tx_positioner_domain_model_positioner.tx_positioner_from_color',
            'config' => array(
                'type' => 'input',
                'size' => '6',
                'max' => '6',
                'eval' => 'trim,is_in',
                'is_in' => '0123456789abcdefABCDEF',
            ),
        ),
        'tx_positioner_dummy_color' => array (
            'exclude' => 0,
            'label' => 'LLL:EXT:positioner/Resources/Private/Language/locallang_db.xlf:tx_positioner_domain_model_positioner.tx_positioner_dummy_color',
            'config' => array(
                'type' => 'input',
                'size' => '6',
                'max' => '6',
                'eval' => 'trim,is_in',
                'is_in' => '0123456789abcdefABCDEF',
            ),
        ),
        'tx_positioner_to_color' => array (
            'exclude' => 0,
            'label' => 'LLL:EXT:positioner/Resources/Private/Language/locallang_db.xlf:tx_positioner_domain_model_positioner.tx_positioner_to_color',
            'config' => array(
                'type' => 'input',
                'size' => '6',
                'max' => '6',
                'eval' => 'trim,is_in',
                'is_in' => '0123456789abcdefABCDEF',
            ),
        ),
        'tx_positioner_to_opacity' => array (
            'exclude' => 0,
            'label' => 'LLL:EXT:positioner/Resources/Private/Language/locallang_db.xlf:tx_positioner_domain_model_positioner.tx_positioner_to_opacity',
            'config' => array(
                'type' => 'input',
                'size' => '3',
                'max' => '3',
                'eval' => 'trim,int,range',
                'range' => array(
                    'lower' => 0,
                    'upper' => 100
                ),
            ),
        ),
    );
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $temporaryTtContentColumn, 1);

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette('tt_content', 'frames', '
            --linebreak--,tx_positioner_width, tx_positioner_right,
                tx_positioner_height,tx_positioner_bottom,
                tx_positioner_content_z_index', 'after:frames');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette('tt_content', 'frames', '
            --linebreak--, tx_positioner_padding_top, tx_positioner_padding_right,
                tx_positioner_padding_bottom, tx_positioner_padding_left', 'after:frames');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette('tt_content', 'frames', '
            --linebreak--, tx_positioner_from_color, tx_positioner_to_color, tx_positioner_dummy_color', 'after:frames');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette('tt_content', 'frames', '
                --linebreak--, tx_positioner_to_opacity', 'after:frames');

    $TCA['tt_content']['columns']['CType']['config']['items'][] = array('LLL:EXT:positioner/Resources/Private/Language/locallang.xlf:tx_positioner_domain_model_positioner', 'positioner', $relativeExtensionPath.'/Resources/Public/Images/positioner_frame_small.png' );

// Icon of new doktype positioner
    \TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon('tt_content', 'positioner', $relativeExtensionPath.'/Resources/Public/Images/positioner_frame_small.png');
    $TCA['tt_content']['types']['positioner'] = array( 'showitem' =>  '
            --palette--;LLL:EXT:cms/ locallang_ttc.xml:palette.general;general,
            --palette--;LLL:EXT:cms/ locallang_ttc.xml:palette.header;header,
        --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.appearance,
            --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.frames;frames,
            --palette--;LLL:EXT:positioner/Resources/Private/Language/locallang.xlf:tx_positioner_domain_model_positioner.dimensions;image_settings,
         --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,
            --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.visibility;visibility,
            --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.access;access,
         --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.extended'
    );

// Icon of new doktype speech-bubble
    $TCA['tt_content']['columns']['CType']['config']['items'][] = array('LLL:EXT:positioner/Resources/Private/Language/locallang.xlf:tx_positioner_domain_model_speechBubble', 'speechBubble', $relativeExtensionPath.'/Resources/Public/Images/positioner_speech_bubble_small.png' );
    \TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon('tt_content', 'speechBubble', $relativeExtensionPath.'/Resources/Public/Images/positioner_speech_bubble_small.png');
    $TCA['tt_content']['types']['speechBubble'] = array( 'showitem' => '
            --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.general;general,
            --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.header;header,
            bodytext;Text;;richtext:rte_transform[flag=rte_enabled|mode=ts_css],
            rte_enabled;LLL:EXT:cms/locallang_ttc.xlf:rte_enabled_formlabel,
        --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.images,
            image,
        --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.appearance,
            --palette--;LLL:EXT:positioner/Resources/Private/Language/locallang.xlf:tx_positioner_domain_model_positioner.dimensions;image_settings,
            --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.frames;frames,
        --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,
            --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.visibility;visibility,
            --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.access;access,
        --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.extended
    ');

?>
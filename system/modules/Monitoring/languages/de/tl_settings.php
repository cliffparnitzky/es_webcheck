<?php

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2019 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Cliff Parnitzky 2014-2019
 * @author     Cliff Parnitzky
 * @package    Monitoring
 * @license    LGPL
 */

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_settings']['monitoringMailingActive']         = array('Mailing aktivieren', 'Wählen Sie ob Mailing aktiviert sein soll.');
$GLOBALS['TL_LANG']['tl_settings']['monitoringAdminEmail']            = array('Monitoring Admin E-Mail', 'Die E-Mail Adresse des Monitoring Admin.');
$GLOBALS['TL_LANG']['tl_settings']['monitoringErrorNotification']     = array('Fehler Benachrichtigung', 'Bitte wählen Sie die Benachrichtigung, die versendet werden soll, wenn eine Prüfung fehl schlägt.');
$GLOBALS['TL_LANG']['tl_settings']['monitoringAgainOkayNotification'] = array('Wieder Okay Benachrichtigung', 'Bitte wählen Sie die Benachrichtigung, die versendet werden soll, wenn eine fehlerhafte Prüfung wieder Okay ist.');
$GLOBALS['TL_LANG']['tl_settings']['monitoringTestCirculation']       = array('Test Zirkulation', 'Wählen Sie wie oft ein Test wiederholt werden soll, wenn er fehl schlägt.');
$GLOBALS['TL_LANG']['tl_settings']['monitoringTestCirculationDelay']  = array('Test Zirkulation Verzögerung', 'Wählen Sie wie viele Sekunden zwischen den Test Zyklen vergehen soll.');
$GLOBALS['TL_LANG']['tl_settings']['monitoringDebugMode']             = array('Debugmodus aktivieren', 'Wenn der Debugmodus aktiviert ist, werden zusätzliche Informationen im System-Log protokolliert.');
$GLOBALS['TL_LANG']['tl_settings']['monitoringColorStatusOkay']       = array('Farbe für Status <i>Okay</i>', 'Legen Sie die Farbe fest, welche zur Darstellung des Status <i>Okay</i> verwendet werden soll.');
$GLOBALS['TL_LANG']['tl_settings']['monitoringColorStatusIncomplete'] = array('Farbe für Status <i>Unvollständig</i>', 'Legen Sie die Farbe fest, welche zur Darstellung des Status <i>Unvollständig</i> verwendet werden soll.');
$GLOBALS['TL_LANG']['tl_settings']['monitoringColorStatusError']      = array('Farbe für Status <i>Fehler</i>', 'Legen Sie die Farbe fest, welche zur Darstellung des Status <i>Fehler</i> verwendet werden soll.');

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_settings']['monitoring_legend'] = 'Monitoring';

?>
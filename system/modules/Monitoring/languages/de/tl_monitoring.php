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
 * @filesource [eS_Webcheck] by Patrick Froch
 */

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_monitoring']['customer']                        = array('Kunde', 'Der Kunde der zu monitorenden Webseite.');
$GLOBALS['TL_LANG']['tl_monitoring']['website']                         = array('Webseite', 'Die zu monitorenden Webseite.');
$GLOBALS['TL_LANG']['tl_monitoring']['system']                          = array('System', 'Das System der zu monitorenden Webseite.');
$GLOBALS['TL_LANG']['tl_monitoring']['added']                           = array('Erstellt am', 'Das Erstellungsdatum des Monitoring Eintrags.');
$GLOBALS['TL_LANG']['tl_monitoring']['url']                             = array('URL', 'Die Adresse der zu testenden Seite. Eingabe <u>mit</u> Protokoll (z.B. http:// oder https://)!');
$GLOBALS['TL_LANG']['tl_monitoring']['test_string']                     = array('Teststring', 'Der Text, der auf der zu testenden Seite gesucht werden soll (HTML-Tags werden entfernt).');
$GLOBALS['TL_LANG']['tl_monitoring']['last_test_date']                  = array('Letzter Test', 'Das Datum des letzten Tests.');
$GLOBALS['TL_LANG']['tl_monitoring']['last_test_status']                = array('Letzter Status', 'Der Status des letzten Tests.');
$GLOBALS['TL_LANG']['tl_monitoring']['last_test_response_time']         = array('Letzte Antwortzeit', 'Die Dauer bis zum Erhalt des Antwortstring (in Sekunden) des letzten Tests.');
$GLOBALS['TL_LANG']['tl_monitoring']['disableMailing']                  = array('Mailing deaktivieren', 'Keine E-Mails senden, wenn sich der Status für diesen Monitoring Eintrag ändert.');
$GLOBALS['TL_LANG']['tl_monitoring']['monitoringErrorNotification']     = array('Fehler Benachrichtigung', 'Bitte wählen Sie die Benachrichtigung, abweichend von der Systemeinstellung, die versendet werden soll, wenn eine Prüfung fehl schlägt.');
$GLOBALS['TL_LANG']['tl_monitoring']['monitoringAgainOkayNotification'] = array('Wieder Okay Benachrichtigung', 'Bitte wählen Sie die Benachrichtigung, abweichend von der Systemeinstellung, die versendet werden soll, wenn eine fehlerhafte Prüfung wieder Okay ist.');
$GLOBALS['TL_LANG']['tl_monitoring']['disable']                         = array('Deaktivieren', 'Den Monitoring Eintrag vorübergehend deaktivieren.');

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_monitoring']['website_legend']   = 'Webseite';
$GLOBALS['TL_LANG']['tl_monitoring']['test_legend']      = 'Testen';
$GLOBALS['TL_LANG']['tl_monitoring']['last_test_legend'] = 'Letztes Testergebnis';
$GLOBALS['TL_LANG']['tl_monitoring']['mailing_legend']   = 'Mailing';
$GLOBALS['TL_LANG']['tl_monitoring']['disable_legend']   = 'Deaktivierung';

/**
 * References
 */
$GLOBALS['TL_LANG']['tl_monitoring']['statusTypes'][Monitoring::STATUS_OKAY]       = array('Okay', 'Der Webserver ist erreichbar und der Teststring wurde erfolgreich geprüft.');
$GLOBALS['TL_LANG']['tl_monitoring']['statusTypes'][Monitoring::STATUS_INCOMPLETE] = array('Unvollständig', 'Der Webserver ist erreichbar aber der Teststring konnte erfolgreich geprüft werden.');
$GLOBALS['TL_LANG']['tl_monitoring']['statusTypes'][Monitoring::STATUS_ERROR]      = array('Fehler', 'Der Webserver ist nicht erreichbar.');
$GLOBALS['TL_LANG']['tl_monitoring']['statusTypes'][Monitoring::STATUS_UNTESTED]   = array('Ungetestet', 'Der Webserver wurde noch nicht getestet.');

/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_monitoring']['new']      = array('Neuer Monitoring Eintrag', 'Eine neuen Monitoring Eintrag erstellen.');
$GLOBALS['TL_LANG']['tl_monitoring']['edit']     = array('Monitoring Eintrag bearbeiten', 'Monitoring Eintrag mit der ID %s bearbeiten.');
$GLOBALS['TL_LANG']['tl_monitoring']['tests']    = array('Monitoring Tests anzeigen', 'Tests für Monitoring Eintrag mit der ID %s anzeigen.');
$GLOBALS['TL_LANG']['tl_monitoring']['copy']     = array('Monitoring Eintrag kopieren', 'Monitoring Eintrag mit der ID %s  kopieren.');
$GLOBALS['TL_LANG']['tl_monitoring']['delete']   = array('Monitoring Eintrag löschen', 'Monitoring Eintrag mit der ID %s löschen.');
$GLOBALS['TL_LANG']['tl_monitoring']['toggle']   = array('Monitoring Eintrag aktivieren/deaktivieren', 'Monitoring Eintrag ID %s aktivieren/deaktivieren');
$GLOBALS['TL_LANG']['tl_monitoring']['show']     = array('Monitoring Eintrag anzeigen', 'Monitoring Eintrag mit der ID %s anzeigen.');
$GLOBALS['TL_LANG']['tl_monitoring']['showPage'] = array('Testseite anzeigen', 'Die Testseite für den Monitoring Eintrag mit der ID %s anzeigen.');
$GLOBALS['TL_LANG']['tl_monitoring']['checkOne'] = array('Erreichbarkeit prüfen', 'Erreichbarkeit für den Monitoring Eintrag mit der ID %s prüfen.');
$GLOBALS['TL_LANG']['tl_monitoring']['checkAll'] = array('Alle Einträge prüfen', 'Prüft die Erreichbarkeit aller <u>aktiven</u> Monitoring Einträge.');

?>
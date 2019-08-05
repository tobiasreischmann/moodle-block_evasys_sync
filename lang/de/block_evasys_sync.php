<?php
// This file is part of the Moodle plugin block_evasys_sync
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

$string['pluginname'] = 'EvaSys-Export-Block';
$string['evasys_sync'] = 'EvaSys-Export';
$string['evasys_sync:addinstance'] = 'EvaSys-Export-Block hinzufügen';
$string['invitestudents'] = 'Evaluation beauftragen';
$string['checkstatus'] = 'Status der Evaluationen anzeigen';
$string['countparticipants'] = 'Anzahl Teilnehmer: ';
$string['surveystatus'] = 'Evaluationsstatus:';
$string['finishedforms'] = 'Ausgefüllt:';
$string['evacourseid'] = 'EvaSys-Kurs-ID:';
$string['evacoursename'] = 'Veranstaltungsname:';
$string['surveys'] = 'Evaluationen: ';
$string['nocourse'] = 'Kurs konnte zur Zeit nicht gefunden werden, bitte versuchen Sie es später erneut.';
$string['nosurveys'] = 'Zur Zeit sind keine Evaluationen verfügbar.';
$string['syncnotpossible'] = 'Auf Grund technischer Schwierigkeiten konnte die Teilnehmerliste nicht zu EvaSys exportiert werden. Bitte wenden Sie sich an den Support.';
$string['syncsucessful'] = 'Sync zu EvaSys war erfolgreich.';
$string['syncalreadyuptodate'] = 'Teilnehmerliste war bereits auf dem aktuellen Stand.';
$string['taskname'] = 'Evasys Umfragen öffnen und schließen';
$string['begin'] = 'Beginn';
$string['end'] = 'Ende';

$string['change_mapping'] = "Zugeordnete Veranstaltungen auswählen";
$string['semester'] = "Semester";

// Multi allocation strings.

$string['selection_success'] = "Auswahl erfolgreich übermittelt";
$string['add_course_header'] = "Wählen Sie die Veranstaltungen, die über diesen Learnweb-Kurs evaluiert werden sollen";
$string['coursename'] = "Kursname";
$string['associated'] = "zugeordnet";

// Direct invite strings.

$string['direct_invite'] = "Teilnehmer direkt einladen";
$string['content_confirm'] = "Eine Umfrage soll heute beginnen, diese Funktion versendet daher JETZT Einladungen!<br />" .
                             "Sind Sie sicher, dass Sie jetzt an alle Teilnehmer Evaluationseinladungen/-erinnerungen versenden wollen?";
$string['title_send_success'] = "Evaluation erfolgreich gestartet";
$string['content_send_success'] = 'Es wurden {$a->sent} von {$a->total} Einladungsmails versendet. <br />' .
                                  '{$a->queued} Evaluationsperioden wurden festgelegt.';
$string['title_send_failure'] = "Fehler beim Versand";
$string['send_error'] = "Es gab einen Fehler beim automatischen Versenden, bitte kontaktieren Sie Ihren Support, oder benutzen Sie den manuellen Versand von EvaSys";
$string['not_enough_dates'] = "Bitte geben Sie Daten für ALLE Umfragen an!";
$string['direct_already'] = "Sie haben die Evaluation bereits gestartet. <br />" .
    "Es wurden keine neuen Einladungen versendet";
$string['direct_title_info'] = "Einladungen bereits versandt";
$string['title_send_rejected'] = "Unzulässiges Datum";
$string['content_send_rejected'] = "Ein Datum wurde in die Vergangenheit geändert. <br />" .
    "Dies ist nicht zulässig! Es können einzelne Evaluationsperioden geändert worden sein.<br />";
$string['title_send_invalid'] = "Fehlerhafter Zeitraum";
$string['content_send_invalid'] = "Eine Evaluationsperiode beginnt nachdem Sie endet! <br />" .
    "Alle anderen Evaluationsperioden wurden wie gewohnt geändert.";

// Form strings.

$string['startplaceholder'] = "Startdatum für die Evaluation";
$string['endplaceholder'] = "Enddatum für die Evaluation";

// Information box strings.

$string['title_success']  = "Evaluation erfolgreich beauftragt";
$string['title_uptodate'] = "Evaluation bereits beauftragt";
$string['title_failure']  = "Evaluation nicht beauftragt";

$string['content_success'] = "Sie haben die Evaluation erfolgreich beantragt.<br />" .
                             "!!!DIE EVALUATION HAT NOCH NICHT BEGONNEN!!!<br />" .
                             "Sie müssen nichts weiter tun, ".
                             "Ihr Evaluationsbeauftragter wird nach den Richtlinien Ihres Fachbereichs weiter verfahren.";

$string['content_uptodate'] = "Ihr Evaluationsbeauftragter hat bereist einen Auftrag zum Durchführen der Evaluation von Ihnen erhalten.<br />" .
                              "Für Fragen zum Status Ihrer Evaluation kontaktieren Sie bitte Ihren Evaluationsbeauftragten.";

$string['content_failure'] = "Leider konnte die Evaluation nicht beauftragt werden.<br />" .
                             "Bitte wenden Sie sich an den Support.";

$string['confirm_box'] = "Verstanden";

// Survey status.
$string['surveystatusopen'] = 'offen';
$string['surveystatusclosed'] = 'geschlossen';

// Capabilities.
$string['evasys_sync:mayevaluate'] = 'An Kursevaluation teilnehmen';
$string['evasys_sync:synchronize'] = 'Teilnehmer zu EvaSys synchronisieren';

// Settings.
$string['settings'] = 'EvaSys Sync Block Einstellungen';
$string['settings_username'] = 'EvaSys-API-Nutzername';
$string['settings_password'] = 'EvaSys-API-Password';
$string['settings_soap_url'] = 'EvaSys SOAP URL';
$string['settings_wsdl_url'] = 'EvaSys WSDL URL';
$string['settings_moodleuser'] = 'Standard Nutzer-ID des Benachrichtigungsempfängers nach Sync';
$string['settings_mode'] = 'Standardmodus für Kategorien';
$string['settings_moodleuser_select'] = 'Kurskategorien';
$string['settings_cc_select'] = 'Kurskategorie auswählen';
$string['settings_cc_user'] = 'Nutzer-ID des Empfängers für die gewählte Kurskategorie';
$string['submit'] = 'Speichern';
$string['hd_user_cat'] = 'Benutzer-Kategorie Zuweisung';
$string['addcat'] = 'Kategorie hinzufügen';
$string['delete_confirm'] = 'Sind Sie sicher, dass der Nutzer für diese Kurskategorie gelöscht werden soll?';
$string['cc_mode'] = 'evasys_cc_mode';
$string['auto_mode'] = 'Automatischer modus';


// Settings - category table.
$string['category_name'] = 'Kurskategorie';
$string['responsible_user'] = 'Moodle-Benutzer ID';
$string['tablecaption'] = 'Benutzerdefinierter Mail-Empfänger nach Synchronisation';
$string['default'] = 'Standard';
$string['delete_category_user'] = 'Eintrag löschen';
$string['delete'] = 'Löschen';

// Persistance class.
$string['invalidcoursecat'] = 'Ungültige Kurskategorie';
$string['invalidmode'] = "Ungültiger Modus";
$string['invalidcourse'] = 'Ungültiger Kurs';
$string['invalidsurvey'] = "Ungültige Umfrage";
$string['invaliddate'] = "Ungültiges Datum";
$string['invalidstate'] = "Ungültiger Statuscode";

// Privacy API.
$string['privacy:metadata'] = 'Lade Studierende ein, an Erhebungen zur Qualität der Lehre mit EvaSys-Umfragen teilzunehmen.';
$string['privacy:metadata:username'] = 'Benutzernamen von Studierenden, welche in einem Kurs eingeschrieben sind (as E-Mail-Adresse dargestellt, um EvaSys-Erfordernisse zu erfüllen).';

// Events.
$string['eventevaluationperiod_set'] = 'Evaluationszeitraum wurde festgelegt';

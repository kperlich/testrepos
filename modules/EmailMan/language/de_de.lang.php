<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * Deutsche Sprachdatei für SugarCRM 6.5 (C) iscon group kft. Robert Laussegger
 * Die Weitergabe oder Vervielfältigung dieser Datei ist ausdrücklich verboten
 * Lizensiert für: xxtobereplacedxx--------------------------------------
 * 
 ********************************************************************************/

$mod_strings = array (
	'LBL_SEND_DATE_TIME'						=> 'Sendedatum',
	'LBL_IN_QUEUE'								=> 'In Arbeit',
	'LBL_IN_QUEUE_DATE'							=> 'Warteschlange Datum',

	'ERR_INT_ONLY_EMAIL_PER_RUN'				=> 'Nur Ganzzahlwerte zulässig für Anzahl E-Mails pro Stapel.',

	'LBL_ATTACHMENT_AUDIT'						=> ' wurde gesendet. Es wurde nicht lokal dupliziert um Speicher zu sparen.',
	'LBL_CONFIGURE_SETTINGS'					=> 'E-Mail Einstellungen konfigurieren',
	'LBL_CUSTOM_LOCATION'						=> 'Benutzerdefiniert',
	'LBL_DEFAULT_LOCATION'						=> 'Standard',
	
	'LBL_DISCLOSURE_TITLE'						=> 'Vertraulichkeitshinweis an jede E-Mail anhängen',
	'LBL_DISCLOSURE_TEXT_TITLE'					=> 'Inhalt Vertraulichkeitshinweis',
	'LBL_DISCLOSURE_TEXT_SAMPLE'				=> 'Dieses E-Mail sowie angehängte Anlagen sind vertraulich und nur für die benannte Person oder Firma bestimmt. Sollten Sie dieses E-Mail irrtümlicherweise erhalten haben, benachrichtigen Sie bitte den Absender und entfernen Sie das E-Mail nebst Anlagen von Ihrem System. Vielen Dank.',
	
	'LBL_EMAIL_DEFAULT_CHARSET'					=> 'E-Mail Nachrichten mit diesem Zeichensatz erstellen',
	'LBL_EMAIL_DEFAULT_EDITOR'					=> 'E-Mail Nachrichten mit diesem Client erstellen',
	'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS'		=> 'Verknüpfte Notizen und Anhänge mit den E-Mails löschen',
	'LBL_EMAIL_GMAIL_DEFAULTS'					=> 'Mit GMail Standardwerten füllen',
	'LBL_EMAIL_PER_RUN_REQ'						=> 'Anzahl Mails gesendet pro Stapel:',
	'LBL_EMAIL_SMTP_SSL'						=> 'SMTP über SSL aktivieren?',
	'LBL_EMAIL_USER_TITLE'						=> 'Benutzer E-Mail Standard',
	'LBL_EMAIL_OUTBOUND_CONFIGURATION'			=> 'Ausgehende E-Mail Einstellungen',
	'LBL_EMAILS_PER_RUN'						=> 'Anzahl Mails gesendet pro Stapel:',
	'LBL_ID'									=> 'ID',
	'LBL_LIST_CAMPAIGN'							=> 'Kampagne',
	'LBL_LIST_FORM_PROCESSED_TITLE'				=> 'Verarbeitet',
	'LBL_LIST_FORM_TITLE'						=> 'Warteschlange',
	'LBL_LIST_FROM_EMAIL'						=> 'Von E-Mail',
	'LBL_LIST_FROM_NAME'						=> 'Von Name',
	'LBL_LIST_IN_QUEUE'							=> 'In Arbeit',
	'LBL_LIST_MESSAGE_NAME'						=> 'Marketing Nachricht',
	'LBL_LIST_RECIPIENT_EMAIL'					=> 'Empfänger E-Mail',
	'LBL_LIST_RECIPIENT_NAME'					=> 'Empfänger Name',
	'LBL_LIST_SEND_ATTEMPTS'					=> 'Sendeversuche',
	'LBL_LIST_SEND_DATE_TIME'					=> 'Senden Ein',
	'LBL_LIST_USER_NAME'						=> 'Benutzername',
	'LBL_LOCATION_ONLY'							=> 'Ort',
	'LBL_LOCATION_TRACK'						=> 'Speicherort der Kampagnentracking Dateien (z.B. campaign_tracker.php)',
    'LBL_CAMP_MESSAGE_COPY'                     => 'Kopien der Kampagnen Nachrichten behalten:',
    'LBL_CAMP_MESSAGE_COPY_DESC'                     => 'Wollen Sie den kompletten Text <bold>JEDER</bold> gesendeten E-Mail für alle Kampagnen speichern? <bold>Wir empfehlen dies nicht zu tun (ist Standard)</bold>. Auf diese Art wird nur die Vorlage und die notwendigen Parameter gespeichert, um die individuelle Nachricht wiederherstellen zu können.',
	'LBL_MAIL_SENDTYPE'							=> 'E-Mail Transfer Agent:',
	'LBL_MAIL_SMTPAUTH_REQ'						=> 'SMTP Authentifizierung verwenden:',
	'LBL_MAIL_SMTPPASS'							=> 'Passwort:',
	'LBL_MAIL_SMTPPORT'							=> 'SMTP Port:',
	'LBL_MAIL_SMTPSERVER'						=> 'SMTP Mail Server:',
	'LBL_MAIL_SMTPUSER'							=> 'Benutzername:',
	'LBL_CHOOSE_EMAIL_PROVIDER'        => 'Wählen Sie Ihren E-Mail Provider',
	'LBL_YAHOOMAIL_SMTPPASS'					=> 'Yahoo! Mail Passwort:',
	'LBL_YAHOOMAIL_SMTPUSER'					=> 'Yahoo! Mail ID',
	'LBL_GMAIL_SMTPPASS'					=> 'Gmail Passwort',
	'LBL_GMAIL_SMTPUSER'					=> 'Gmail E-Mail Adresse',
	'LBL_EXCHANGE_SMTPPASS'					=> 'Exchange Passwort',
	'LBL_EXCHANGE_SMTPUSER'					=> 'Exchange Benutzername',
	'LBL_EXCHANGE_SMTPPORT'					=> 'Exchange Server Port',
	'LBL_EXCHANGE_SMTPSERVER'				=> 'Exchange Server',
	'LBL_EMAIL_LINK_TYPE'				=> 'E-Mail Client',
    'LBL_EMAIL_LINK_TYPE_HELP'			=> '<b>Sugar E-Mail Client:</b> E-Mails mit der Sugar eigenen E-Mail Applikation versenden.<br><b>Externer E-Mail Client:</b> E-Mails mit einem externen E-Mail Client versenden (z.B. Outlook). Konkret: Was soll passieren wenn eine E-Mail Adresse in Sugar geklickt wird.',
	'LBL_MARKETING_ID'							=> 'Marketing ID',
    'LBL_MODULE_ID'                             => 'EmailMan',
	'LBL_MODULE_NAME'							=> 'E-Mail Einstellungen',
	'LBL_CONFIGURE_CAMPAIGN_EMAIL_SETTINGS'    => 'Kampagnen E-Mail Einstellungen konfigurieren',
	'LBL_MODULE_TITLE'							=> 'Ausgehende E-Mail Warteschlange Verwaltung',
	'LBL_NOTIFICATION_ON_DESC' 					=> 'Wenn aktiviert wird wird eine E-Mail versendet, wenn Einträge Benutzern zugewiesen werden.',
	'LBL_NOTIFY_FROMADDRESS' 					=> '"Von" Adresse:',
	'LBL_NOTIFY_FROMNAME' 						=> '"Von" Name:',
	'LBL_NOTIFY_ON'								=> 'Benachrichtigung über Zuweisung',
	'LBL_NOTIFY_SEND_BY_DEFAULT'				=> 'Benachrichtigung für neue Benutzer senden',
	'LBL_NOTIFY_TITLE'							=> 'E-Mail Optionen',
	'LBL_OLD_ID'								=> 'Alte ID',
	'LBL_OUTBOUND_EMAIL_TITLE'					=> 'Ausgehende E-Mail Optionen',
	'LBL_RELATED_ID'							=> 'Verknüpfte ID',
	'LBL_RELATED_TYPE'							=> 'Verknüpfter Typ',
	'LBL_SAVE_OUTBOUND_RAW'						=> 'Ausgehende E-Mails als Quelltext speichern',
	'LBL_SEARCH_FORM_PROCESSED_TITLE'			=> 'Verarbeitet Suche',
	'LBL_SEARCH_FORM_TITLE'						=> 'Suche Warteschlange',
	'LBL_VIEW_PROCESSED_EMAILS'					=> 'Verarbeitete E-Mails anzeigen',
	'LBL_VIEW_QUEUED_EMAILS'					=> 'E-Mail Warteschlange anzeigen',
	'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE'	=> 'Wert von site_url in config.php',
	'TXT_REMOVE_ME_ALT'							=> 'Zum Abmelden von dieser E-Mail Liste gehen Sie zu',
	'TXT_REMOVE_ME_CLICK'						=> 'hier klicken',
	'TXT_REMOVE_ME'								=> 'Um sich von der E-Mail Liste abzumelden ',
	'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER'		=> 'Benachrichtigung von der E-Mail Adresse des zuweisenden Benutzers?',

	'LBL_SECURITY_TITLE'						=> 'E-Mail Sicherheitseinstellungen',
	'LBL_SECURITY_DESC'							=> 'Wählen Sie was bei eingehenden E-Mails NICHT erlaubt sein soll bzw. im E-Mail Modul angezeigt werden soll.',
	'LBL_SECURITY_APPLET'						=> 'Applet Tag',
	'LBL_SECURITY_BASE'							=> 'Base Tag',
	'LBL_SECURITY_EMBED'						=> 'Embed Tag',
	'LBL_SECURITY_FORM'							=> 'Form Tag',
	'LBL_SECURITY_FRAME'						=> 'Frame Tag',
	'LBL_SECURITY_FRAMESET'						=> 'Frameset Tag',
	'LBL_SECURITY_IFRAME'						=> 'iFrame Tag',
	'LBL_SECURITY_IMPORT'						=> 'Import Tag',
	'LBL_SECURITY_LAYER'						=> 'Layer Tag',
	'LBL_SECURITY_LINK'							=> 'Link Tag',
	'LBL_SECURITY_OBJECT'						=> 'Object Tag',
	'LBL_SECURITY_OUTLOOK_DEFAULTS'				=> 'Wählen Sie Outlook Standard Minimum Sicherheitsmaßnahmen.',
	'LBL_SECURITY_SCRIPT'						=> 'Script Tag',
	'LBL_SECURITY_STYLE'						=> 'Style Tag',
	'LBL_SECURITY_TOGGLE_ALL'					=> 'Alle Optionen umschalten',
	'LBL_SECURITY_XMP'							=> 'mp Tag',
    'LBL_YES'                                   => 'Ja',
    'LBL_NO'                                    => 'Nein',
    'LBL_PREPEND_TEST'                          => '[Test]: ',
	'LBL_SEND_ATTEMPTS'							=> 'Sendeversuche',
	'LBL_OUTGOING_SECTION_HELP'                 => 'Konfigurieren Sie den Standard Mail Server (SMTP) zum Senden von E-Mail und/oder Workflow Benachrichtigungen.',
    'LBL_ALLOW_DEFAULT_SELECTION'               => 'Benutzern erlauben, dieses Konto für ausgehende E-Mails zu verwenden:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP'          => 'Wenn diese Option gewählt wurde, können alle Benutzer E-Mails über dieses <br> Konto senden, das für Systembenachrichtigungen eingerichtet wurde. Wenn nicht ausgewählt,<br> können Benutzer trotzdem E-Mails über ihre selbst konfigurierten Mail Server versenden.',
    'LBL_FROM_ADDRESS_HELP'                     => 'Wenn aktiviert, wird der Name und die E-Mail Adresse des zuweisenden Benutzers im Von Feld der E-Mail angezeigt. Allerdings kann es sein, dass diese Einstellung keine Wirkung hat wenn der SMTP Server keine Von Adressen zulässt die unterschiedlich von der Server Adresse sind.',
	'LBL_GMAIL_LOGO' => 'Gmail' /*for 508 compliance fix*/,
	'LBL_YAHOO_MAIL_LOGO' => 'Yahoo Mail' /*for 508 compliance fix*/,
	'LBL_EXCHANGE_LOGO' => 'Exchange' /*for 508 compliance fix*/,
	'LBL_HELP' => 'Hilfe' /*for 508 compliance fix*/,
);

?>
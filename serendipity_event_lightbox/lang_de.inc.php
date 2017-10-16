<?php

/**
 *  @version
 *  @author Translator Name <yourmail@example.com>
 *  DE-Revision: Revision of lang_de.inc.php
 */

@define('PLUGIN_EVENT_LIGHTBOX_NAME', 'Lightbox f�r Blog Eintr�ge mit Bildern');
@define('PLUGIN_EVENT_LIGHTBOX_DESC', 'Das Lightbox Plugin ist eine einfaches unauff�lliges Skript, das Bilder auf der Seite �berlagern kann, wenn die gro�e Version angeklickt wurde. Es f�gt sich selbstst�ndig in die Seite ein und funktioniert mit jedem modernen Browser. Alle Leuchtk�sten versch�nern Bilder-Popups. Dieses Plugin durchsucht ihre Eintr�ge und ersetzt jeden auf ein Bild verweisenden \'a href="XXX"\' Link so, dass die interne Darstellung benutzt wird. Wenn Sie also ein Thumbnail Bild mit einem Popup der gro�en Version haben wollen, so f�gen Sie das Thumbnail in ihren Eintrag ein und verlinken dieses mit der gro�en Version. Um auch versteckte Bilder mit display:none anzuzeigen, nutzen Sie das Lightbox2 Script. Diese Leuchtkasten Scripte sind alle jQuery basiert. Sie unterst�tzen nicht allein nur Bildtypen, sondern �berwiegend auch anderes, wie Ajax, Videos, Flash, YouTube, iFrame, Inline oder modale Felder. Dieses Plugin nutzt sie nur f�r Fotografie Leuchtk�sten, aber Sie k�nnen leicht andere Typen ihren Blog-Eintr�gen manuell hinzuf�gen und eine lightbox entsprechend f�r diesen Zweck initiieren, so wie es den jeweiligen Online-Dokumentationen beschrieben wird.');
@define('PLUGIN_EVENT_LIGHTBOX_TYPE', 'W�hlen Sie das Skript aus, das ihre Bilder/Links formatieren soll');
@define('PLUGIN_EVENT_LIGHTBOX_PATH', 'Pfad zu den Skripten');
@define('PLUGIN_EVENT_LIGHTBOX_PATH_DESC', 'Geben Sie hier den kompletten HTTP Pfad ein (alles nach ihrem Domain Namen), der das Verzeichnis des Plugins angibt.');

@define('PLUGIN_EVENT_LIGHTBOX_OPTIMIZATION', 'JavaScript Ladeoptimierung');
@define('PLUGIN_EVENT_LIGHTBOX_OPTIMIZATION_DESC', 'Grunds�tzlich werden Skripte und CSS Dateien von Lightbox immer geladen. Setzen Sie diese Option auf "Ja", wenn Lightbox nur geladen werden soll, wenn sich auch wirklich Bilder auf der aktuellen Seite befinden. Dies kann die Ladezeit von Seiten ohne Bilder sp�rbar verk�rzen.');
@define('PLUGIN_EVENT_LIGHTBOX_GALLERY', 'Galerie-Erzeugung');
@define('PLUGIN_EVENT_LIGHTBOX_GALLERY_NONE', 'Nur einzelnes Bild');
@define('PLUGIN_EVENT_LIGHTBOX_GALLERY_ENTRY', 'nur Fotos eines Artikels');
@define('PLUGIN_EVENT_LIGHTBOX_GALLERY_PAGE', 'alle Fotos der Seite');

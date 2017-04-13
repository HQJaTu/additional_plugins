<?php

/**
 *  @author Vladim�r Ajgl <vlada@ajgl.cz>
 *  @translated 2009/06/21
 *  @author Vladim�r Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2009/11/21
 */

@define('PLUGIN_EVENT_PICASA_NAME',                 'Picasa');
@define('PLUGIN_EVENT_PICASA_DESC',                 'Zobrazuje fotoalba z Picasy exportovan� do XML form�tu');
@define('PLUGIN_EVENT_PICASA_PROP_PATH',            'Cesta');
@define('PLUGIN_EVENT_PICASA_PROP_PATH_DESC',       'Cesta k adres��i, kde jsou ulo�ena fotoalba Picasa na webserveru.');
@define('PLUGIN_EVENT_PICASA_PROP_JSWINDOW',        'Otev��t okno pomoc� JavaScriptu');
@define('PLUGIN_EVENT_PICASA_PROP_JSWINDOW_DESC',   'Ka�d� z obr�zk� se m��e zobrazovat ve v�t�� velikosti v nov�m okn�. Pomoc� JavaScriptu m��e b�t velikost tohoto okna automaticky p�izp�sobena velikosti obr�zku.');
@define('PLUGIN_EVENT_PICASA_PROP_SHOWTITLE',       'Zobrazovat nadpis fotoalb');
@define('PLUGIN_EVENT_PICASA_PROP_SHOWTITLE_DESC',  'M� se v p��sp�vku zobrazovat n�zev fotoalba? Bude pou�ito pouze pokud se vzhled negeneruje pomoc� Smarty-�ablony.');
@define('PLUGIN_EVENT_PICASA_PROP_SMARTY',          'Smarty-�ablona');
@define('PLUGIN_EVENT_PICASA_PROP_SMARTY_DESC',     'Kter� �ablona Smarty se m� pou��t k vykreslen� v�sledku?');
@define('PLUGIN_EVENT_PICASA_PROP_SMARTY_NONE',     'Nepou��vat Smarty');
@define('PLUGIN_EVENT_PICASA_ERR_INDEXNOTFOUND',    '<i>Plugin Picasa: V�choz� soubor fotoalba nebyl nalezen</i>');

// Next lines were translated on 2009/11/21
@define('PLUGIN_EVENT_PICASA_PROP_UPLOAD_SIZE',     'Velikost nahran�ch obr�zk�');
@define('PLUGIN_EVENT_PICASA_PROP_UPLOAD_SIZE_DESC','Pokud jsou obr�zky nahr�v�ny p��mo z picasy, jejich velikot bude');
@define('PLUGIN_EVENT_PICASA_PROP_CREATE_ENTRY_AFTER_UPLOAD','Vytvo�it nov� p��sp�vek pro nahran� album');
@define('PLUGIN_EVENT_PICASA_PROP_CREATE_ENTRY_AFTER_UPLOAD_DESC','Pot�, co je album nahr�no, m� b�t vytvo�en nov� p��sp�vek (jako koncept), kter� bude obsahovat obr�zky nov�ho alba?');
@define('PLUGIN_EVENT_PICASA_ERR_MISSING_RSS',      'Omlouv�me se, ��dn� obr�zky nebyly p�ijaty. Tento URL odkaz pracuje spr�vn� pouze p�i nahr�v�n� obr�zk� pomoc� tla��tka Picasa.');
@define('PLUGIN_EVENT_PICASA_ERR_UPLOAD_DIR_ALREADY_EXISTS','Adres�� pro stahov�n� obr�zk� ji� existuje');
@define('PLUGIN_EVENT_PICASA_ERR_DIR_CREATION_FAILED','Nepoda�ilo se vytvo�it adres�� pro nahr�n� obr�zk�');
@define('PLUGIN_EVENT_PICASA_UPLOAD_HEADER',        'Nahr�n� obr�zk� z Google Picasa do Serendipity blogu na');
@define('PLUGIN_EVENT_PICASA_UPLOAD_USERNAME',      'U�ivatelsk� jm�no');
@define('PLUGIN_EVENT_PICASA_UPLOAD_PASSWORD',      'Heslo');
@define('PLUGIN_EVENT_PICASA_UPLOAD_REMEMBER_LOGIN','Pamatovat p�ihla�ovac� �daje?');
@define('PLUGIN_EVENT_PICASA_UPLOAD_LOGIN',         'P�ihl�sit');
@define('PLUGIN_EVENT_PICASA_UPLOAD_DISCARD',       'Zru�it');
@define('PLUGIN_EVENT_PICASA_UPLOAD_ALBUMNAME',     'Jm�no alba');
@define('PLUGIN_EVENT_PICASA_UPLOAD_DESCRIPTION',   'Popis');
@define('PLUGIN_EVENT_PICASA_UPLOAD_PARENTDIR',     'Rodi�ovsk� adres��');
@define('PLUGIN_EVENT_PICASA_UPLOAD_PARENTDIR_BASEDIR','Z�kladn� adres��');
@define('PLUGIN_EVENT_PICASA_UPLOAD_UPLOAD',        'Nahr�t');
@define('PLUGIN_EVENT_PICASA_UPLOAD_SUCCESS',       '�sp�n� nahr�no!');
@define('PLUGIN_EVENT_PICASA_EXAMPLE_HEADER',       'Pokyny pro p�id�n� tla��tka "Nahr�t" na Google Picasa');
@define('PLUGIN_EVENT_PICASA_EXAMPLE_STEP1',        'St�hn�te n�sleduj�c� soubor: ');
@define('PLUGIN_EVENT_PICASA_EXAMPLE_STEP2',        'P�ejmenujte soubor na p��ponu .zip.');
@define('PLUGIN_EVENT_PICASA_EXAMPLE_STEP3',        'Vybalte soubor .pbf ze .zip archivu.');
@define('PLUGIN_EVENT_PICASA_EXAMPLE_STEP4',        'Otev�ete jej v textov�m editoru. Jedn� se o xml soubor. Nahra�te v�echny v�skyty "mysite.com" jm�nem str�nky s Va��m blogem. D�le nahra�te  "mysite.com/serendipity/index.php" platnou cestou k souboru index.php na Va�em serendipity blogu.');
@define('PLUGIN_EVENT_PICASA_EXAMPLE_STEP5',        'Vra�te .pbf soubor zp�t do .zip archivu.');
@define('PLUGIN_EVENT_PICASA_EXAMPLE_STEP6',        'P�ejmenujte .zip archiv na .pbz.');
@define('PLUGIN_EVENT_PICASA_EXAMPLE_STEP7',        'Vlo�te soubor .pbz do adres��e s tla��tky va�� picasy, co� je typicky  "C:\Program Files\Google\Picasa\buttons".');
@define('PLUGIN_EVENT_PICASA_EXAMPLE_STEP8',        'Spus�te picasu, tla��tko by se v n� m�lo objevit. Pokud ne, m�li byste ho naj�t v Tools >> Configure Buttons (N�stroje >> Nastaven� tla��tek)...');
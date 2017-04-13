<?php

/**
 *  @author Vladim�r Ajgl <vlada@ajgl.cz>
 *  @translated 2009/05/25
 *  @author Vladim�r Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2013/06/22
 */

@define('PLUGIN_EVENT_FCKEDITOR_NAME',     'Pou�it� FCKeditoru jako WYSIWYG editoru');
/* temporary diabled as changed in <en> lang file. Sorry Vladi!
@define('PLUGIN_EVENT_FCKEDITOR_DESC',     'Pou��v� FCKeditor jako WYSIWYG editor. Vy�aduje Serendipity 0.9 nebo vy���. Po instalaci si p�e�t�te instala�n�ho pr�vodce na str�nce s nastaven�m pluginu.');
@define('PLUGIN_EVENT_FCKEDITOR_INSTALL', '<br /><br /><strong>Instala�n� pr�vodce:</strong><br />
<ul>
<li>St�hn�te FCKeditor v2.6.10+ nebo vy��� z http://sourceforge.net/projects/fckeditor/</li>
<li>Rozbalte do podadres��e "FCKeditor" v adres��i ' . dirname(__FILE__) . '</li>
<li>Zadejte zde do nastaven� pluginu relativn� cestuk adres��i "FCKeditor".</li>
<li>V�t�inou je tato cesta "plugins/serendipity_event_fckeditor/fckeditor/"</li>
<li>Ujist�te se, �e jste v Nastaven� Serendipity povolili pou�it� WYSIWYG editoru.</li>
</ul>');
@define('PLUGIN_EVENT_FCKEDITOR_CONFIG', '<br /><br /><strong>Pr�vodce nastaven�m pluginu:</strong><br />
<ul>
<li>Pokud po�adujete od editoru v�ce funkc�, jako je nap��klad spr�vce soubor� nebo operace s tabulkami, p�epi�te konfigura�n� soubor fckconfig.js file v adres��i fckeditor n�kter�m p�ilo�en�m.</li>
<ul>
	<li>pak jd�te na serendipity_event_fckeditor/fckeditor/editor/filemanager/browser/default/connectors/php/config.php</li>
	<li>a zm��te nastaven� n�sledovn� $Config["Enabled"] = true; a $Config["UserFilesPath"] = "/uploads/";</li>
	<li>pak nalezn�te serendipity_event_fckeditor/fckeditor/editor/filemanager/upload/php/config.php</li>
	<li>a zopakujte zm�nu parametr� nastaven�</li>
</ul>
<li>V FCKeditoru jsou 3 r�zn� �ablony vzhledu - v�choz�, office2003 a silver. Ty se daj� nastavit v souboru fckconfig.js.</li>
	<ul><li>Jednodu�e p�epi�te prom�nnou FCKConfig.SkinPath = FCKConfig.BasePath + "skins/default/" ;. nahra�te office2003 nebo silver</li></ul>

</ul>');
*/

// Next lines were translated on 2013/06/22
@define('PLUGIN_EVENT_FCKEDITOR_DESC',     'Pou��v� FCKeditor jako WYSIWYG editor. Vy�aduje Serendipity 0.9 nebo vy���. Po instalaci si p�e�t�te instala�n�ho pr�vodce na str�nce s nastaven�m pluginu.');
@define('PLUGIN_EVENT_FCKEDITOR_UPDATE',     '<h2>N�vod na aktualizaci:</h2>
<ul style="line-height: 1.6">
<li>Pro aktualizaci tohoto pluginu z verze men�� ne� v.0.8 a n�kter�ch FCKeditor� verze 2.x mezi verzemi v.2.6 a 2.10, z�lohujte svoje nastaven� (pokud jste si n�jak� p�izp�sobovali) a sma�te obsah star�ho adres��e <em style="color: #777">fckeditor/</em>. Pak n�sledujte instrukce z  "Instala�n�ho pr�vodce".</li>
</ul>');
@define('PLUGIN_EVENT_FCKEDITOR_INSTALL',     '<br /><br /><strong>Instala�n� pr�vodce:</strong><br />
<ul>
<li>St�hn�te FCKeditor v2.1 nebo vy��� z http://www.fckeditor.net/</li>
<li>Rozbalte do podadres��e "FCKeditor" v adres��i ' . dirname(__FILE__) . '</li>
<li>Zadejte zde do nastaven� pluginu relativn� cestuk adres��i "FCKeditor".</li>
<li>V�t�inou je tato cesta "plugins/serendipity_event_fckeditor/fckeditor/"</li>
<li>Ujist�te se, �e jste v Nastaven� Serendipity povolili pou�it� WYSIWYG editoru.</li>
</ul>');
@define('PLUGIN_EVENT_FCKEDITOR_CONFIG',     '<br /><br /><strong>Pr�vodce nastaven�m pluginu:</strong><br />
<ul>
<li>Pokud po�adujete od editoru v�ce funkc�, jako je nap��klad spr�vce soubor� nebo operace s tabulkami, p�epi�te konfigura�n� soubor fckconfig.js file v adres��i fckeditor n�kter�m p�ilo�en�m.</li>
<ul>
	<li>pak jd�te na serendipity_event_fckeditor/fckeditor/editor/filemanager/browser/default/connectors/php/config.php</li>
	<li>a zm��te nastaven� n�sledovn� $Config["Enabled"] = true; a $Config["UserFilesPath"] = "/uploads/";</li>
	<li>pak nalezn�te serendipity_event_fckeditor/fckeditor/editor/filemanager/upload/php/config.php</li>
	<li>a zopakujte zm�nu parametr� nastaven�</li>
</ul>
<li>V FCKeditoru jsou 3 r�zn� �ablony vzhledu - v�choz�, office2003 a silver. Ty se daj� nastavit v souboru fckconfig.js.</li>
	<ul><li>Jednodu�e p�epi�te prom�nnou FCKConfig.SkinPath = FCKConfig.BasePath + "skins/default/" ;. nahra�te office2003 nebo silver</li></ul>

</ul>');
<?php

/**
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  @translated 2009/05/25
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2013/06/22
 */

@define('PLUGIN_EVENT_FCKEDITOR_NAME',     'Použití FCKeditoru jako WYSIWYG editoru');
/* temporary diabled as changed in <en> lang file. Sorry Vladi!
@define('PLUGIN_EVENT_FCKEDITOR_DESC',     'Používá FCKeditor jako WYSIWYG editor. Vyžaduje Serendipity 0.9 nebo vyšší. Po instalaci si přečtěte instalačního průvodce na stránce s nastavením pluginu.');
@define('PLUGIN_EVENT_FCKEDITOR_INSTALL', '<br /><br /><strong>Instalační průvodce:</strong><br />
<ul>
<li>Stáhněte FCKeditor v2.6.10+ nebo vyšší z http://sourceforge.net/projects/fckeditor/</li>
<li>Rozbalte do podadresáře "FCKeditor" v adresáři ' . dirname(__FILE__) . '</li>
<li>Zadejte zde do nastavení pluginu relativní cestuk adresáři "FCKeditor".</li>
<li>Většinou je tato cesta "plugins/serendipity_event_fckeditor/fckeditor/"</li>
<li>Ujistěte se, že jste v Nastavení Serendipity povolili použití WYSIWYG editoru.</li>
</ul>');
@define('PLUGIN_EVENT_FCKEDITOR_CONFIG', '<br /><br /><strong>Průvodce nastavením pluginu:</strong><br />
<ul>
<li>Pokud požadujete od editoru více funkcí, jako je například správce souborů nebo operace s tabulkami, přepište konfigurační soubor fckconfig.js file v adresáři fckeditor některým přiloženým.</li>
<ul>
	<li>pak jděte na serendipity_event_fckeditor/fckeditor/editor/filemanager/browser/default/connectors/php/config.php</li>
	<li>a změňte nastavení následovně $Config["Enabled"] = true; a $Config["UserFilesPath"] = "/uploads/";</li>
	<li>pak nalezněte serendipity_event_fckeditor/fckeditor/editor/filemanager/upload/php/config.php</li>
	<li>a zopakujte změnu parametrů nastavení</li>
</ul>
<li>V FCKeditoru jsou 3 různé šablony vzhledu - výchozí, office2003 a silver. Ty se dají nastavit v souboru fckconfig.js.</li>
	<ul><li>Jednoduše přepište proměnnou FCKConfig.SkinPath = FCKConfig.BasePath + "skins/default/" ;. nahraďte office2003 nebo silver</li></ul>

</ul>');
*/

// Next lines were translated on 2013/06/22
@define('PLUGIN_EVENT_FCKEDITOR_DESC',     'Používá FCKeditor jako WYSIWYG editor. Vyžaduje Serendipity 0.9 nebo vyšší. Po instalaci si přečtěte instalačního průvodce na stránce s nastavením pluginu.');
@define('PLUGIN_EVENT_FCKEDITOR_UPDATE',     '<h2>Návod na aktualizaci:</h2>
<ul style="line-height: 1.6">
<li>Pro aktualizaci tohoto pluginu z verze menší než v.0.8 a některých FCKeditorů verze 2.x mezi verzemi v.2.6 a 2.10, zálohujte svoje nastavení (pokud jste si nějaké přizpůsobovali) a smažte obsah starého adresáře <em style="color: #777">fckeditor/</em>. Pak následujte instrukce z  "Instalačního průvodce".</li>
</ul>');
@define('PLUGIN_EVENT_FCKEDITOR_INSTALL',     '<br /><br /><strong>Instalační průvodce:</strong><br />
<ul>
<li>Stáhněte FCKeditor v2.1 nebo vyšší z http://www.fckeditor.net/</li>
<li>Rozbalte do podadresáře "FCKeditor" v adresáři ' . dirname(__FILE__) . '</li>
<li>Zadejte zde do nastavení pluginu relativní cestuk adresáři "FCKeditor".</li>
<li>Většinou je tato cesta "plugins/serendipity_event_fckeditor/fckeditor/"</li>
<li>Ujistěte se, že jste v Nastavení Serendipity povolili použití WYSIWYG editoru.</li>
</ul>');
@define('PLUGIN_EVENT_FCKEDITOR_CONFIG',     '<br /><br /><strong>Průvodce nastavením pluginu:</strong><br />
<ul>
<li>Pokud požadujete od editoru více funkcí, jako je například správce souborů nebo operace s tabulkami, přepište konfigurační soubor fckconfig.js file v adresáři fckeditor některým přiloženým.</li>
<ul>
	<li>pak jděte na serendipity_event_fckeditor/fckeditor/editor/filemanager/browser/default/connectors/php/config.php</li>
	<li>a změňte nastavení následovně $Config["Enabled"] = true; a $Config["UserFilesPath"] = "/uploads/";</li>
	<li>pak nalezněte serendipity_event_fckeditor/fckeditor/editor/filemanager/upload/php/config.php</li>
	<li>a zopakujte změnu parametrů nastavení</li>
</ul>
<li>V FCKeditoru jsou 3 různé šablony vzhledu - výchozí, office2003 a silver. Ty se dají nastavit v souboru fckconfig.js.</li>
	<ul><li>Jednoduše přepište proměnnou FCKConfig.SkinPath = FCKConfig.BasePath + "skins/default/" ;. nahraďte office2003 nebo silver</li></ul>

</ul>');
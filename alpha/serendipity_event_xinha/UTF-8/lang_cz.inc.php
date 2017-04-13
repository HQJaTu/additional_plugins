<?php

/**
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  @translated 2009/05/22
 */

@define('PLUGIN_EVENT_XINHA_NAME',     'Použít XINHA jako WYSIWYG editor');
@define('PLUGIN_EVENT_XINHA_DESC',     'Pozor! Xinha je experimentální! Používá XINHA WYSIWYG editor. Vyžaduje Serendipity 0.9 nebo vyšší. Po nainstalování pluginu si přečtěte průvodce instalací na konfigurační stránce pluginu.');
@define('PLUGIN_EVENT_XINHA_INSTALL', '<br /><br /><strong>Průvodce instalací:</strong><br />
<ul>
<li>Stáhněte editor XINHA z http://trac.xinha.org/wiki/DownloadsPage</li>
<li>Rozbalte editor "xinha-nightly" v adresáři ' . dirname(__FILE__) . '</li>
<li>Zadejte v konfigurační stránce tohoto pluginu relativní HTTP cestu k adresáři, do kterého uložíte editor "xinha-nightly".</li>
<li>Relativní cesta může být např. "plugins/serendipity_event_xinha/xinha-nightly/"</li>
<li>Ujistěte se, že jste v nastavení Serendipity zaškrtli používání WYSIWYG editorů.</li>
</ul>');

?>

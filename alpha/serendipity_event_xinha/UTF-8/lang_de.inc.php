<?php # lang_de.inc.php 1.0 2009-08-20 10:17:17 VladaAjgl $

/**
 *  @version 1.0
 *  @author Konrad Bauckmeier <kontakt@dd4kids.de>
 *  @translated 2009/08/20
 */

@define('PLUGIN_EVENT_XINHA_NAME',     'Benutze XINHA als WYSIWYG editor ');
@define('PLUGIN_EVENT_XINHA_DESC',     'Warung: XINGHA ist experimentell! Es wird mindestens Serendipity Version 0.9 benätigt. Nach der Installation sollte die Installationsanleitung im Konfigurationsfenster dieses Plugins gelesen werden. Ab Version 1.4 ist XINHA standardmäßig in S9Y enthalten. Dieses Plugin wird dafür nicht mehr benötigt.');
@define('PLUGIN_EVENT_XINHA_INSTALL', '<br /><br /><strong>Installationsanleitung:</strong><br />
<ul>
<li>Laden Sie XINHA von http://trac.xinha.org/wiki/DownloadsPage</li>
<li>Entpacke Sie es in ein a "xinha-nightly" Verzeichnis unterhalb von ' . dirname(__FILE__) . '</li>
<li>Geben Sie den relativen HTTP Pfad zu diesem "xinha-nightly" Verzeichnise in diese Plugin Konfiguration ein.</li>
<li>Für die meisten Installationen ist der relative Pfad "plugins/serendipity_event_xinha/xinha-nightly/"</li>
<li>Überprüfem Sie, dass WYSIWYG in den "Eigenen Einstellungen" eingeschaltet ist.</li>
</ul>');
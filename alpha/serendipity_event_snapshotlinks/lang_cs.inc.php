<?php

/**
 *  @author Vladim�r Ajgl <vlada@ajgl.cz>
 *  @translated 2009/05/31
 */@define('PLUGIN_SNAPSHOTLINKS_NAME',                'Odkazy s n�hledy pomoc� slu�by www.snap.com');
@define('PLUGIN_SNAPSHOTLINKS_DESC',                'Tento plugin zobrazuje n�hledy odkaz� v p��sp�vc�ch, kdy� na n� n�v�t�vn�k najede my��. N�hledy jsou generov�ny slu�bou SnapShot (www.snap.com). Je t�eba zaregistrovat si tam ��et, pak obdr��te kl�� pro p��stup ke slu�b� SnapShot.\nSnap.com je zadarmo, ale m�li byste v�d�t, �e *m��e* shroma��ovat informace o odkazech na Va�ich str�nk�ch, a�koliv ve sv�ch obchodn�ch podm�nk�ch slibuj�, �e to d�lat nebudou.');
@define('PLUGIN_SNAPSHOTLINKS_DESC_DUMMY',          'Tento plugin zobrazuje n�hledy odkaz� v p��sp�vc�ch, kdy� na n� n�v�t�vn�k najede my��. N�hledy jsou generov�ny slu�bou SnapShot (www.snap.com). \nSnap.com je zadarmo, ale m�li byste v�d�t, �e *m��e* shroma��ovat informace o odkazech na Va�ich str�nk�ch, a�koliv ve sv�ch obchodn�ch podm�nk�ch slibuj�, �e to d�lat nebudou.');

@define('PLUGIN_SNAPSHOTLINKS_URL_NAME',            'Registrovan� dom�na');
@define('PLUGIN_SNAPSHOTLINKS_URL_DESC',            'Dom�na, kterou jste zaregistrovali na snap.com');
@define('PLUGIN_SNAPSHOTLINKS_KEY_NAME',            'SnapShot kl��');
@define('PLUGIN_SNAPSHOTLINKS_KEY_DESC',            'Pot�, co zaregistrujete dom�nu a kontaktn� email, obdr��te skript pro generov�n� n�hled�. Mezi "key=" a "&" uvid�te V� unik�tn� u�ivatelsk� kl��, kter� zkop�rujte a vlo�te sem (bez toho ukon�uj�c�ho "&").');

@define('PLUGIN_SNAPSHOTLINKS_THEME_NAME',          'Barevn� sch�ma');
@define('PLUGIN_SNAPSHOTLINKS_THEME_DESC',          'Vyberte barevn� sch�ma pro n�hledy odkaz�');

@define('PLUGIN_SNAPSHOTLINKS_THEME_ASPHALT',       'Asfalt');
@define('PLUGIN_SNAPSHOTLINKS_THEME_GREEN',         'Zelen�');
@define('PLUGIN_SNAPSHOTLINKS_THEME_ICE',           'Sv�tle modr�');
@define('PLUGIN_SNAPSHOTLINKS_THEME_LINEN',         'Pl�tno');
@define('PLUGIN_SNAPSHOTLINKS_THEME_ORANGE',        'Pomeran�');
@define('PLUGIN_SNAPSHOTLINKS_THEME_PINK',          'R��ov�');
@define('PLUGIN_SNAPSHOTLINKS_THEME_PURPLE',        'Nachov�');
@define('PLUGIN_SNAPSHOTLINKS_THEME_SILVER',        'St��brn�');

@define('PLUGIN_SNAPSHOTLINKS_PREVIEWSIZE_NAME',    'Velikost n�hledu');
@define('PLUGIN_SNAPSHOTLINKS_PREVIEWSIZE_DESC',    'Pamatujte, �e velk� velikost n�hledu znamen� velkou velikost obr�zku s n�hledem a m��e prodlou�it �as nahr�v�n� str�nky.');
@define('PLUGIN_SNAPSHOTLINKS_PREVIEWSIZE_SMALL',   'mal�');
@define('PLUGIN_SNAPSHOTLINKS_PREVIEWSIZE_LARGE',   'velk�');

@define('PLUGIN_SNAPSHOTLINKS_PREVIEWTRIGGER_NAME', 'Sp�na� pro zobrazen� n�hledu');
@define('PLUGIN_SNAPSHOTLINKS_PREVIEWTRIGGER_DESC', 'N�hled je zobrazen, pokud my� najede nad odkaz a/nebo na ikonku vedle n�j.');
@define('PLUGIN_SNAPSHOTLINKS_PREVIEWTRIGGER_LINK', 'kurzor nad odkazem');
@define('PLUGIN_SNAPSHOTLINKS_PREVIEWTRIGGER_ICON', 'kurzor nad ikonou');
@define('PLUGIN_SNAPSHOTLINKS_PREVIEWTRIGGER_BOTH', 'jak nad odkazem, tak i nad ikonou');

@define('PLUGIN_SNAPSHOTLINKS_LINKICON_NAME',       'Zobrazovat ikonu odkazu');
@define('PLUGIN_SNAPSHOTLINKS_LINKICON_DESC',       'M� se vedle ka�d�ho odkazu zobrazovat ikonka?');

@define('PLUGIN_SNAPSHOTLINKS_USERPREVIEW_NAME',    'Natahovat n�hledy');
@define('PLUGIN_SNAPSHOTLINKS_USERPREVIEW_DESC',    'Nahr�v� n�hledy odkaz� p�edt�m, ne� nat�hne str�nku. Doporu�uje se vypnout, jinak se nahr�v�n� str�nek velmi zpomal�!');
@define('PLUGIN_SNAPSHOTLINKS_CUSTOMLOGO_NAME',     'Vlastn� logo');
@define('PLUGIN_SNAPSHOTLINKS_CUSTOMLOGO_DESC',     'Pro zobrazen� vlastn�ho loga v n�hledech odkaz� ho mus�te nahr�t na server slu�by snap.com.');

// "Advanced options"
@define('PLUGIN_SNAPSHOTLINKS_SEARCHBOX_NAME',      'Vyhled�vac� okno');
@define('PLUGIN_SNAPSHOTLINKS_SEARCHBOX_DESC',      'Zobrazit vyhled�vac� okno k prohled�n� webu pomoc� snap.com');
@define('PLUGIN_SNAPSHOTLINKS_ALLLINKS_NAME',       'N�hled pro odkazy mimo blog');
@define('PLUGIN_SNAPSHOTLINKS_ALLLINKS_DESC',       'Chcete zobrazovat n�hledy odkaz� vedouc�ch mimo V� blog?');
@define('PLUGIN_SNAPSHOTLINKS_LOCALLINKS_NAME',     'N�hled pro intern� odkazy');
@define('PLUGIN_SNAPSHOTLINKS_LOCALLINKS_DESC',     'Chcete zobrazovat n�hledy na jinou str�nku Va�eho vlastn�ho blogu?');
@define('PLUGIN_SNAPSHOTLINKS_PREVIEWSHOTS_NAME',   'V�dy zobrazovat obr�zky n�hled�');
@define('PLUGIN_SNAPSHOTLINKS_PREVIEWSHOTS_DESC',   'Zobrazovat n�hledy v�dy jako obr�zky. Pokud je vypnuto, jsou nata�eny pouze textov� n�hledy (pomoc� RSS kan�lu). Vypnut� zm�n�� objem dat p�en�en�ch po s�ti.');

// Wikipedia options:
@define('PLUGIN_SNAPSHOTLINKS_WIKIFY_NAME',         'Zobrazovat n�hledy z Wikipedie');
@define('PLUGIN_SNAPSHOTLINKS_WIKIFY_DESC',         'Jednotliv� slova mohou b�t n�sledovana ikonkou a otev�rat str�nku na Wikipedii, kter� popisuje odkazovan� heslo. Chce pou��vat tuto funkci?');
@define('PLUGIN_SNAPSHOTLINKS_WIKIFY_LANG_NAME',    'Jazyk wikipedie');
@define('PLUGIN_SNAPSHOTLINKS_WIKIFY_LANG_DESC',    'Kter� jazykov� verze m� b�t pou�ita pro otv�r�n� wikipedie. Pro �eskou verzi zde napi�te "cs".');
@define('PLUGIN_SNAPSHOTLINKS_WIKIFY_TYPE_NAME',    'Zna�kov�n� (markup) wikipedia');
@define('PLUGIN_SNAPSHOTLINKS_WIKIFY_TYPE_DESC',    'Jak chcete zv�raz�ovat v nata�en� str�nce wikipedie odkazovan� hesla?');
@define('PLUGIN_SNAPSHOTLINKS_WIKIFY_TYPE_BOLD',    'Tu�n�');
@define('PLUGIN_SNAPSHOTLINKS_WIKIFY_TYPE_ITALIC',  'Kurz�va');
@define('PLUGIN_SNAPSHOTLINKS_WIKIFY_TYPE_SUBLINED','Podtr�en�');
@define('PLUGIN_SNAPSHOTLINKS_WIKIFY_REMOVE_TYPE_NAME',     'Odstranit ozna�ov�n� slov ve wikipedii?');
@define('PLUGIN_SNAPSHOTLINKS_WIKIFY_REMOVE_TYPE_DESC',     'Chcete nahradit zv�raz�ov�n� pomoc� nov�ho SnapShot k�du, nebo chcete nechat zv�raz�ov�n� p�i zobrazen� �l�nku?');

?>
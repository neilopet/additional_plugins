<?php # $Id: lang_cs.inc.php,v 1.2 2007/12/03 11:30:04 garvinhicking Exp $

/**
 *  @version $Revision: 1.2 $
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  EN-Revision: Revision of lang_en.inc.php
 *  Translated on 2007/11/30
 */

@define('PLUGIN_MYMOOD_TITLE',                  'Moje nálada');
@define('PLUGIN_MYMOOD_DESC',                   'Umožňuje vám přidávat vaší momentální náladu nebo nálady k příspvěkům.');
@define('PLUGIN_MYMOOD_MOOD_MISSINGDATA',       'Chybí uživatelský vstup');
@define('PLUGIN_MYMOOD_MOOD_LIST',              'Toto je seznam přístupných nálad.');
@define('PLUGIN_MYMOOD_MOOD_NAME',              'Jméno nálady');
@define('PLUGIN_MYMOOD_MOOD_IMG',               'Obrázek nálady.  (Relativní adresa vzheldem k základnímu adresáři serendipity nebo plná absolutní URL adresa)');
@define('PLUGIN_MYMOOD_MOOD_ASCII',             'Textová repreznetace smajlíka nálady');
@define('PLUGIN_MYMOOD_MOOD_DELETE',            'Samzat');
@define('PLUGIN_MYMOOD_CONFIRM_RESET_BUTTON',   'Obnovit původní nálady');
@define('PLUGIN_MYMOOD_CONFIRM_RESET',          'Opravdu chcete obnovit původní nálady? Tento příkaz smaže všechny Vaše nastavené nálady a nastaví místo nich přednastavené.  \n\nVAROVÁNÍ: Smazání Vámi nastavených nálad může vést k zobrazování špatných nálad u starých příspěvků!');

@define('PLUGIN_MYMOOD_INTRO',                  'Intro');
@define('PLUGIN_MYMOOD_INTRO_DESC',             'Intro je text, který uvozuje seznam Vaší nálady. Například "Moje nálada:"');
@define('PLUGIN_MYMOOD_OUTRO',                  'Outro');
@define('PLUGIN_MYMOOD_OUTRO_DESC',             'Podobně jako intro text');
@define('PLUGIN_MYMOOD_TODAY_I_FEEL',           'Moje nálada:');
@define('PLUGIN_MYMOOD_PLACE_FIELD',            'Umístít blízko');
@define('PLUGIN_MYMOOD_PLACE_FIELD_DESC',       'Poblíž které části příspěvku se má nálada zobrazit?');
@define('PLUGIN_MYMOOD_PLACE_FIELD_BODY',       'Tělo příspěveku');
@define('PLUGIN_MYMOOD_PLACE_FIELD_AUTHOR',     'Autor');
@define('PLUGIN_MYMOOD_PLACE_FIELD_TITLE',      'Nadpis');
@define('PLUGIN_MYMOOD_PLACE_FIELD_FOOTER',     'Záhlaví');
@define('PLUGIN_MYMOOD_PLACE_BEFORE',           'Umístit před');
@define('PLUGIN_MYMOOD_PLACE_BEFORE_DESC',      'Umístit náladu před vybrané pole? Pokud je vybráno NE, umístí se za pole.');
@define('PLUGIN_MYMOOD_DISPLAY_FORMAT',         'Formát zobrazení');
@define('PLUGIN_MYMOOD_DISPLAY_FORMAT_DESC',    'Formát zobrazení nálady. Můžete oužít pole {name}, {img} a {ascii} v jakémkoliv pořadí a množství k zobrazení nálad podle Vašich přání. Toto nebude mít vliv na umístění nálady v nadpisu. Můžete zadávat i hteml. (Standardně: {img} {name})');
@define('PLUGIN_MYMOOD_MORE_NEW_MOODS',         'Další nové nálady');
@define('PLUGIN_MYMOOD_NEW_MOOD',               'Nová nálada (název)');
@define('PLUGIN_MYMOOD_NEW_ASCII',              'Text - smajlík');
@define('PLUGIN_MYMOOD_NEW_IMAGE',              'Obrázek (cesta)');

@define('PLUGIN_MYMOOD_ACCOMPLISHED'    , 'dokonalý      ');
@define('PLUGIN_MYMOOD_AGGRAVATED'      , 'přitěžující   ');
@define('PLUGIN_MYMOOD_AMUSED'          , 'pobavený      ');
@define('PLUGIN_MYMOOD_ANGRY'           , 'zuřivý        ');
@define('PLUGIN_MYMOOD_ANNOYED'         , 'rozmrzelý     ');
@define('PLUGIN_MYMOOD_ANXIOUS'         , 'úzkostlivý    ');
@define('PLUGIN_MYMOOD_APATHETIC'       , 'otupělý       '); 
@define('PLUGIN_MYMOOD_ARTISTIC'        , 'múzou políbený'); 
@define('PLUGIN_MYMOOD_AWAKE'           , 'bdící         '); 
@define('PLUGIN_MYMOOD_BITCHY'          , 'hanebný       '); 
@define('PLUGIN_MYMOOD_BLAH'            , 'kecy          '); 
@define('PLUGIN_MYMOOD_BLANK'           , 'prázdno       '); 
@define('PLUGIN_MYMOOD_BORED'           , 'znuděný       '); 
@define('PLUGIN_MYMOOD_BOUNCY'          , 'živý          '); 
@define('PLUGIN_MYMOOD_BUSY'            , 'zaneprázdněný '); 
@define('PLUGIN_MYMOOD_CALM'            , 'tichý         '); 
@define('PLUGIN_MYMOOD_CHEERFUL'        , 'veselý        '); 
@define('PLUGIN_MYMOOD_CHIPPER'         , 'nastrouhaný   '); 
@define('PLUGIN_MYMOOD_COLD'            , 'chladný       ');
@define('PLUGIN_MYMOOD_COMPLACENT'      , 'uspokojený    ');
@define('PLUGIN_MYMOOD_CONFUSED'        , 'zmatený       ');
@define('PLUGIN_MYMOOD_CONTEMPLATIVE'   , 'zahloubaný    ');
@define('PLUGIN_MYMOOD_CONTENT'         , 'spokojený     ');
@define('PLUGIN_MYMOOD_CRANKY'          , 'potrhlý       ');
@define('PLUGIN_MYMOOD_CRAPPY'          , 'posraný       ');
@define('PLUGIN_MYMOOD_CRAZY'           , 'bláznivý      ');
@define('PLUGIN_MYMOOD_CREATIVE'        , 'nápaditý      ');
@define('PLUGIN_MYMOOD_CRUSHED'         , 'zdrcený       ');
@define('PLUGIN_MYMOOD_CURIOUS'         , 'zvědavý       ');
@define('PLUGIN_MYMOOD_CYNICAL'         , 'cynický       ');
@define('PLUGIN_MYMOOD_DEPRESSED'       , 'depka         ');
@define('PLUGIN_MYMOOD_DETERMINED'      , 'odhodlaný     ');
@define('PLUGIN_MYMOOD_DEVIOUS'         , 'odolný        ');
@define('PLUGIN_MYMOOD_DIRTY'           , 'špinavý       ');
@define('PLUGIN_MYMOOD_DISAPPOINTED'    , 'znechucený    ');
@define('PLUGIN_MYMOOD_DISCONTENT'      , 'nespokojený   ');
@define('PLUGIN_MYMOOD_DISTRESSED'      , 'zoufalý       ');
@define('PLUGIN_MYMOOD_DITZY'           , 'šílený        ');
@define('PLUGIN_MYMOOD_DORKY'           , 'vymaštěný     ');
@define('PLUGIN_MYMOOD_DRAINED'         , 'vyčerpaný     ');
@define('PLUGIN_MYMOOD_DRUNK'           , 'opilý         ');
@define('PLUGIN_MYMOOD_ECSTATIC'        , 'nadšený       ');
@define('PLUGIN_MYMOOD_EMBARRASSED'     , 'rozpačitý     ');
@define('PLUGIN_MYMOOD_ENERGETIC'       , 'rázný         ');
@define('PLUGIN_MYMOOD_ENRAGED'         , 'vztelký       ');
@define('PLUGIN_MYMOOD_ENTHRALLED'      , 'fascinovaný   ');
@define('PLUGIN_MYMOOD_ENVIOUS'         , 'závistivý     ');
@define('PLUGIN_MYMOOD_EXANIMATE'       , 'bezduchý      ');
@define('PLUGIN_MYMOOD_EXCITED'         , 'vzrušený      ');
@define('PLUGIN_MYMOOD_EXHAUSTED'       , 'uštvaný       ');
@define('PLUGIN_MYMOOD_FLIRTY'          , 'flirtující    ');
@define('PLUGIN_MYMOOD_FRUSTRATED'      , 'frustrovaný   ');
@define('PLUGIN_MYMOOD_FULL'            , 'naplněný      ');
@define('PLUGIN_MYMOOD_GEEKY'           , 'klaunský      ');
@define('PLUGIN_MYMOOD_GIDDY'           , 'splašený      ');
@define('PLUGIN_MYMOOD_GIGGLY'          , 'hihňám se     ');
@define('PLUGIN_MYMOOD_GLOOMY'          , 'skleslý       ');
@define('PLUGIN_MYMOOD_GOOD'            , 'dobrý         ');
@define('PLUGIN_MYMOOD_GRATEFUL'        , 'příjemný      ');
@define('PLUGIN_MYMOOD_GROGGY'          , 'grogy         ');
@define('PLUGIN_MYMOOD_GRUMPY'          , 'mrzutý        ');
@define('PLUGIN_MYMOOD_GUILTY'          , 'provinilý     ');
@define('PLUGIN_MYMOOD_HAPPY'           , 'šťastný       ');
@define('PLUGIN_MYMOOD_HIGH'            , 'vysoký        ');
@define('PLUGIN_MYMOOD_HOPEFUL'         , 'slibný        ');
@define('PLUGIN_MYMOOD_HORNY'           , 'nadržený      ');
@define('PLUGIN_MYMOOD_HOT'             , 'žhavý         ');
@define('PLUGIN_MYMOOD_HUNGRY'          , 'hladový       ');
@define('PLUGIN_MYMOOD_HYPER'           , 'hyper         ');
@define('PLUGIN_MYMOOD_IMPRESSED'       , 'ohromený      ');
@define('PLUGIN_MYMOOD_INDESCRIBABLE'   , 'nepopsatelný  ');
@define('PLUGIN_MYMOOD_INDIFFERENT'     , 'neutrální     ');
@define('PLUGIN_MYMOOD_INFURIATED'      , 'rozvzteklený  ');
@define('PLUGIN_MYMOOD_INTIMIDATED'     , 'vystrašený    ');
@define('PLUGIN_MYMOOD_IRATE'           , 'rozzlobený    ');
@define('PLUGIN_MYMOOD_IRRITATED'       , 'podrážděný    ');
@define('PLUGIN_MYMOOD_JEALOUS'         , 'žárlivý       ');
@define('PLUGIN_MYMOOD_JUBILANT'        , 'vítězoslavný  ');
@define('PLUGIN_MYMOOD_LAZY'            , 'líný          ');
@define('PLUGIN_MYMOOD_LETHARGIC'       , 'letargie      ');
@define('PLUGIN_MYMOOD_LISTLESS'        , 'mdlý          ');
@define('PLUGIN_MYMOOD_LONELY'          , 'osamělý       ');
@define('PLUGIN_MYMOOD_LOVED'           , 'milovaný      ');
@define('PLUGIN_MYMOOD_MELANCHOLY'      , 'zádumčivý     ');
@define('PLUGIN_MYMOOD_MELLOW'          , 'zralý         ');
@define('PLUGIN_MYMOOD_MISCHIEVOUS'     , 'uličnický     ');
@define('PLUGIN_MYMOOD_MOODY'           , 'náladový      ');
@define('PLUGIN_MYMOOD_MOROSE'          , 'nevrlý        ');
@define('PLUGIN_MYMOOD_NAUGHTY'         , 'sprostý       ');
@define('PLUGIN_MYMOOD_NAUSEATED'       , 'hnusný        ');
@define('PLUGIN_MYMOOD_NERDY'           , 'blbý          ');
@define('PLUGIN_MYMOOD_NERVOUS'         , 'nervózní      ');
@define('PLUGIN_MYMOOD_NOSTALGIC'       , 'nostalgický   ');
@define('PLUGIN_MYMOOD_NUMB'            , 'prokřehlý     ');
@define('PLUGIN_MYMOOD_OKAY'            , 'oukej         ');
@define('PLUGIN_MYMOOD_OPTIMISTIC'      , 'optimistický  ');
@define('PLUGIN_MYMOOD_PEACEFUL'        , 'poklidný      ');
@define('PLUGIN_MYMOOD_PENSIVE'         , 'zamyšlený     ');
@define('PLUGIN_MYMOOD_PESSIMISTIC'     , 'pesimistický  ');
@define('PLUGIN_MYMOOD_PISSED_OFF'      , 'obtěžovaný    ');
@define('PLUGIN_MYMOOD_PLEASED'         , 'potěšený      ');
@define('PLUGIN_MYMOOD_PREDATORY'       , 'krutý         ');
@define('PLUGIN_MYMOOD_PRETTY'          , 'krásný        ');
@define('PLUGIN_MYMOOD_PRODUCTIVE'      , 'výkonný       ');
@define('PLUGIN_MYMOOD_QUIXOTIC'        , 'donkichotský  ');
@define('PLUGIN_MYMOOD_RECUMBENT'       , 'odpočívající  ');
@define('PLUGIN_MYMOOD_REFRESHED'       , 'občerstvený   ');
@define('PLUGIN_MYMOOD_REJECTED'        , 'odmítnutý     ');
@define('PLUGIN_MYMOOD_REJUVENATED'     , 'omlazený      ');
@define('PLUGIN_MYMOOD_RELAXED'         , 'odpočatý      ');
@define('PLUGIN_MYMOOD_RELIEVED'        , 'uvolněný      ');
@define('PLUGIN_MYMOOD_RESTLESS'        , 'neklidný      ');
@define('PLUGIN_MYMOOD_RUSHED'          , 'uhnaný        ');
@define('PLUGIN_MYMOOD_SAD'             , 'smutný        ');
@define('PLUGIN_MYMOOD_SATISFIED'       , 'spokojený     ');
@define('PLUGIN_MYMOOD_SCARED'          , 'vylekaný      ');
@define('PLUGIN_MYMOOD_SHOCKED'         , 'šokovaný      ');
@define('PLUGIN_MYMOOD_SICK'            , 'nemocný       ');
@define('PLUGIN_MYMOOD_SILLY'           , 'bláznivý      ');
@define('PLUGIN_MYMOOD_SLEEPY'          , 'ospalý        ');
@define('PLUGIN_MYMOOD_SORE'            , 'bolístka      ');
@define('PLUGIN_MYMOOD_STRESSED'        , 'přetížený     ');
@define('PLUGIN_MYMOOD_SURPRISED'       , 'překvapený    ');
@define('PLUGIN_MYMOOD_SYMPATHETIC'     , 'chápavý       ');
@define('PLUGIN_MYMOOD_THANKFUL'        , 'vděčný        ');
@define('PLUGIN_MYMOOD_THIRSTY'         , 'žíznivý       ');
@define('PLUGIN_MYMOOD_THOUGHTFUL'      , 'pečlivý       ');
@define('PLUGIN_MYMOOD_TIRED'           , 'unavený       ');
@define('PLUGIN_MYMOOD_TOUCHED'         , 'uražený       ');
@define('PLUGIN_MYMOOD_UNCOMFORTABLE'   , 'nepohodlný    ');
@define('PLUGIN_MYMOOD_WEIRD'           , 'tajuplný      ');
@define('PLUGIN_MYMOOD_WORKING'         , 'pracující     ');
@define('PLUGIN_MYMOOD_WORRIED'         , 'ustaraný      ');

?>

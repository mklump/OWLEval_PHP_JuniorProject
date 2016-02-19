<?php
/* $Id: slovak-iso-8859-2.inc.php,v 2.39 2004/08/07 10:57:45 lem9 Exp $ */

/* By: lubos klokner <erkac@vault-tec.sk> */

$charset = 'iso-8859-2';
$text_dir = 'ltr';
$left_font_family = '"verdana ce", "arial ce", verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'tahoma, "verdana ce", "arial ce", helvetica, arial, geneva, sans-serif';
$number_thousands_separator = ' ';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bajtov', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Ne', 'Po', '�t', 'St', '�t', 'Pi', 'So');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'M�j', 'J�n', 'J�l', 'Aug', 'Sep', 'Okt', 'Nov', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d.%B, %Y - %H:%M';
$timespanfmt = '%s dn�, %s hod�n, %s min�t a %s sek�nd';

$strAPrimaryKey = 'Bol pridan� prim�rny k��� pre %s';
$strAbortedClients = 'Preru�en�';
$strAbsolutePathToDocSqlDir = 'Pros�m zadajte absol�tnu cestu k adres�ru docSQL na serveri.';
$strAccessDenied = 'Pr�stup zamietnut�';
$strAccessDeniedExplanation = 'phpMyAdmin sa pok�sil pripoji� k MySQL serveru ale ten spojenie odmietol. Skontrolujte pros�m meno serveru, pou��vate�sk� meno a heslo v s�bore config.inc.php a s t�m, ktor� ste dostali o administr�tora MySQL servera.';
$strAction = 'Akcia';
$strAddAutoIncrement = 'Prida� hodnotu AUTO_INCREMENT';
$strAddConstraints = 'Prida� obmedzenia';
$strAddDeleteColumn = 'Prida�/Odobra� polia st�pcov';
$strAddDeleteRow = 'Prida�/Odobra� krit�ria riadku';
$strAddDropDatabase = 'Prida� DROP DATABASE';
$strAddHeaderComment = 'Prida� vlastn� koment�r do hlavi�ky (\\n odde�uje riadky)';
$strAddIfNotExists = 'Prida� IF NOT EXISTS';
$strAddIntoComments = 'Prida� do koment�rov';
$strAddNewField = 'Prida� nov� pole';
$strAddPrivilegesOnDb = 'Prida� opr�vnenia pre nasleduj�cu datab�zu';
$strAddPrivilegesOnTbl = 'Prida� opr�vnenia pre nasleduj�cu tabu�ku';
$strAddSearchConditions = 'Prida� vyh�ad�vacie parametre (obsah dotazu po "where" pr�kaze):';
$strAddToIndex = 'Prida� do indexu &nbsp;%s&nbsp;st�pec';
$strAddUser = 'Prida� nov�ho pou��vate�a';
$strAddUserMessage = 'Pou��vate� bol pridan�.';
$strAddedColumnComment = 'Pridan� koment�r k st�pcu';
$strAddedColumnRelation = 'Pridan� vz�ah pre st�pec';
$strAdministration = 'Administr�cia';
$strAffectedRows = ' Ovplyvnen� riadky: ';
$strAfter = 'Po %s';
$strAfterInsertBack = 'Sp�';
$strAfterInsertNewInsert = 'Vlo�i� nov� z�znam';
$strAfterInsertSame = 'Sp� na t�to str�nku';
$strAll = 'V�etko';
$strAllTableSameWidth = 'zobrazi� v�etky tabu�ky s rovnakou ��rkou?';
$strAlterOrderBy = 'Zmeni� poradie tabu�ky pod�a';
$strAnIndex = 'Bol pridan� index pre %s';
$strAnalyzeTable = 'Analyzova� tabu�ku';
$strAnd = 'a';
$strAny = 'Ak�ko�vek';
$strAnyHost = 'Ak�ko�vek hostite�';
$strAnyUser = 'Ak�ko�vek pou��vate�';
$strArabic = 'Arab�tina';
$strArmenian = 'Arm�n�tina';
$strAscending = 'Vzostupne';
$strAtBeginningOfTable = 'Na za�iatku tabu�ky';
$strAtEndOfTable = 'Na konci tabu�ky';
$strAttr = 'Atrib�ty';
$strAutodetect = 'Automaticky zisti�';
$strAutomaticLayout = 'Automatick� rozvrhnutie';

$strBack = 'Sp�';
$strBaltic = 'Baltick�';
$strBeginCut = 'ZA�IATOK V�SEKU';
$strBeginRaw = 'ZA�IATOK TOKU';
$strBinary = 'Bin�rny';
$strBinaryDoNotEdit = 'Bin�rny - neupravujte ';
$strBookmarkAllUsers = 'Dovoli� pou��va� t�to polo�ku v�etk�m pou��vate�om';
$strBookmarkDeleted = 'Z�znam z ob��ben�ch bol zmazan�.';
$strBookmarkLabel = 'N�zov';
$strBookmarkOptions = 'Vlastnosti ob��ben�ch';
$strBookmarkQuery = 'Ob��ben� SQL dotaz';
$strBookmarkThis = 'Prida� tento SQL dotaz do ob��ben�ch';
$strBookmarkView = 'Iba prezrie�';
$strBrowse = 'Prech�dza�';
$strBrowseForeignValues = 'Prejs� hodnoty cudz�ch k���ov';
$strBulgarian = 'Bulharsky';
$strBzError = 'nepodarilo sa skomprimova� v�stup z d�vodu chybn�ho roz��renia pre kompresiu Bz2 v tejto verzii php. Doporu�uje sa nastavi� <code>$cfg[\'BZipDump\']</code> v konfigur�cii phpMyAdmin na <code>FALSE</code>. Ak si �el�te pou��va� kompresiu Bz2 mali by ste nain�talova� nov�iu verziu php. Viac inform�ci� z�skate z popisu chyby: %s.';
$strBzip = '"bzipped"';

$strCSVOptions = 'CSV nastavenia';
$strCalendar = 'Kalend�r';
$strCannotLogin = 'Ned� sa prihl�si� k MySQL serveru';
$strCantLoad = 'ned� sa nahra� roz��renie %s,<br />pros�m skontrolujte konfigur�ciu PHP';
$strCantLoadRecodeIconv = 'Nie je mo�n� nahra� roz��renie iconv alebo recode potrebn� pre prevod znakov�ch sad. Upravte nastavenie php tak aby umo��ovalo pou�i� tieto roz��renia alebo vypnite t�to vlastnos� v konfigur�cii phpMyAdmina.';
$strCantRenameIdxToPrimary = 'Nie je mo�n� premenova� index na PRIMARY!';
$strCantUseRecodeIconv = 'Nie je mo�n� pou�i� funkcie iconv,libiconv a recode_string aj napriek tomu, �e roz��renia s� nahran�. Skontrolujte pros�m nastavenie PHP.';
$strCardinality = 'Mohutnos�';
$strCarriage = 'N�vrat voz�ku (Carriage return): \\r';
$strCaseInsensitive = 'nerozli�ova� ve�k� a mal� p�smen�';
$strCaseSensitive = 'rozli�ova� ve�k� a mal� p�smen�';
$strCentralEuropean = 'Stredn� Eur�pa';
$strChange = 'Zmeni�';
$strChangeCopyMode = 'Vytvori� pou��vate�a s rovnak�mi pr�vami a...';
$strChangeCopyModeCopy = '... zachova� p�vodn�ho pou��vate�a.';
$strChangeCopyModeDeleteAndReload = ' ... zmaza� p�vodn�ho pou��vate�a z tabuliek pou��vate�ov a potom znovuna��ta� opr�vnenia.';
$strChangeCopyModeJustDelete = ' ... zmaza� p�vodn�ho pou��vate�a z tabuliek pou��vate�ov.';
$strChangeCopyModeRevoke = ' ... odobra� v�etky opr�vnenia p�vodn�mu pou��vate�ovi a n�sledne ho zmaza�.';
$strChangeCopyUser = 'Zmeni� inform�cie o pou��vate�ovi / Kop�rova� pou��vate�a';
$strChangeDisplay = 'Zvolte, ktor� pole zobrazi�';
$strChangePassword = 'Zmeni� heslo';
$strCharset = 'Znakov� sada';
$strCharsetOfFile = 'Znakov� sada s�boru:';
$strCharsets = 'Znakov� sady';
$strCharsetsAndCollations = 'Znakov� sady a porovn�vanie';
$strCheckAll = 'Ozna�i� v�etko';
$strCheckOverhead = 'Zvoli� neoptim�lne';
$strCheckPrivs = 'Skontrolova� opr�vnenia';
$strCheckPrivsLong = 'Skontrolova� opr�vnenia pre datab�zu &quot;%s&quot;.';
$strCheckTable = 'Skontrolova� tabu�ku';
$strChoosePage = 'Pros�m zvolte si Str�nku, ktor� chcete upravi�';
$strColComFeat = 'Zobrazova� koment�re st�pcov';
$strCollation = 'Porovn�vanie';
$strColumnNames = 'N�zvy st�pcov';
$strColumnPrivileges = 'Opr�vnenia pre jednotliv� st�pce';
$strCommand = 'Pr�kaz';
$strComments = 'Koment�re';
$strCommentsForTable = 'KOMENT�RE PRE TABU�KU';
$strCompleteInserts = '�pln� vlo�enie';
$strCompression = 'Kompresia';
$strConfigFileError = 'phpMyAdmin was unable to read your configuration file!<br />This might happen if php finds a parse error in it or php cannot find the file.<br />Please call the configuration file directly using the link below and read the php error message(s) that you recieve. In most cases a quote or a semicolon is missing somewhere.<br />If you recieve a blank page, everything is fine.';
$strConfigureTableCoord = 'Pros�m skonfigurujte koordin�ty pre tabu�ku %s';
$strConnectionError = 'Nepodarilo sa pripoji�: chybn� nastavenia.';
$strConnections = 'Spojenia';
$strConstraintsForDumped = 'Obmedzenie pre exportovan� tabu�ky';
$strConstraintsForTable = 'Obmedzenie pre tabu�ku';
$strCookiesRequired = 'Cookies musia by� povolen�, pokia� chcete pokra�ova�.';
$strCopyTable = 'Skop�rova� tabu�ku do (datab�za<b>.</b>tabu�ka):';
$strCopyTableOK = 'Tabu�ka %s bola skor�rovan� do %s.';
$strCopyTableSameNames = 'Ned� sa skop�rova� tabu�ka sama do seba!';
$strCouldNotKill = 'Neporadilo za zabi� vl�kno %s. Jeho beh bol pravdepodobne u� ukon�en�.';
$strCreate = 'Vytvori�';
$strCreateIndex = 'Vytvori� index na&nbsp;%s&nbsp;st�pcoch';
$strCreateIndexTopic = 'Vytvori� nov� index';
$strCreateNewDatabase = 'Vytvori� nov� datab�zu';
$strCreateNewTable = 'Vytvori� nov� tabu�ku v datab�ze %s';
$strCreatePage = 'Vytvori� nov� Str�nku';
$strCreatePdfFeat = 'Vytv�ranie PDF';
$strCreationDates = 'D�tum vytvorenia, poslednej zmeny a kontroly';
$strCriteria = 'Krit�ria';
$strCroatian = 'Chorv�tsky';
$strCyrillic = 'Cyrilika';
$strCzech = '�esky';
$strCzechSlovak = '�e�tina/Sloven�ina';

$strDBComment = 'Koment�r k datab�ze: ';
$strDBGContext = 'Kontext';
$strDBGContextID = 'Kontext ID';
$strDBGHits = 'Z�sahov';
$strDBGLine = 'Riadok';
$strDBGMaxTimeMs = 'Max. �as, ms';
$strDBGMinTimeMs = 'Min �as, ms';
$strDBGModule = 'Modul';
$strDBGTimePerHitMs = '�as/Z�sah, ms';
$strDBGTotalTimeMs = 'Celkov� �as, ms';
$strDBRename = 'Premenova� datab�zu na';
$strDanish = 'D�nsky';
$strData = 'D�ta';
$strDataDict = 'D�tov� slovn�k';
$strDataOnly = 'Iba d�ta';
$strDatabase = 'Datab�za';
$strDatabaseEmpty = 'Meno datab�zy je pr�zdne!';
$strDatabaseExportOptions = 'Nastavenia exportu datab�z';
$strDatabaseHasBeenDropped = 'Datab�za %s bola zmazan�.';
$strDatabaseNoTable = 'T�to datab�za neobsahuje �iadne tabu�ky!';
$strDatabases = 'datab�z(y)';
$strDatabasesDropped = '�spe�ne zru�en�ch datab�z: %s.';
$strDatabasesStats = '�tatistiky datab�zy';
$strDatabasesStatsDisable = 'Skry� �tatistiky';
$strDatabasesStatsEnable = 'Zobrazi� �tatistiky';
$strDatabasesStatsHeavyTraffic = 'Pozn�mka: Aktivovanie �tatist�k datab�zy m��e sp�sobi� zna�n� zv��enie sie�ovej prev�dzky medzi datab�zou a web serverom.';
$strDbPrivileges = 'Opr�vnenia pre jednotliv� datab�zy';
$strDbSpecific = 'z�visl� na datab�ze';
$strDefault = 'Predvolen�';
$strDefaultValueHelp = 'Pre predvolen� hodnoty, pros�m zadajte iba jednu hodnotu bez �vodzoviek alebo uv�dzac�ch znakov, napr.: a';
$strDefragment = 'Defragmentova� tabu�ku';
$strDelOld = 'Aktu�lna str�nka sa odkazuje na tabu�ky, ktor� u� neexistuj�, �el�te si odstr�ni� tieto odkazy?';
$strDelayedInserts = 'Pou�i� oneskoren� vlo�enia';
$strDelete = 'Zmaza�';
$strDeleteAndFlush = 'Odstr�ni� pou��vate�ov a znovuna��ta� pr�va.';
$strDeleteAndFlushDescr = 'Toto je naj�istej�ie rie�enie, ale znovuna��tanie pr�v m��e chv��u trva�.';
$strDeleted = 'Riadok bol zmazan�';
$strDeletedRows = 'Zmazan� riadky:';
$strDeleting = 'Odstra�uje sa %s';
$strDescending = 'Zostupne';
$strDescription = 'Popis';
$strDictionary = 'slovn�k';
$strDisableForeignChecks = 'Vypn�� kontrolu cudz�ch k���ov';
$strDisabled = 'Vypnut�';
$strDisplayFeat = 'Zobrazi� vlastnosti';
$strDisplayOrder = 'Zobrazi� zoraden�:';
$strDisplayPDF = 'Zobrazi� sch�mu PDF';
$strDoAQuery = 'Vykona� "dotaz pod�a pr�kladu" (nahradzuj�ci znak: "%")';
$strDoYouReally = 'Skuto�ne chcete vykona� pr�kaz ';
$strDocu = 'Dokument�cia';
$strDrop = 'Odstr�ni�';
$strDropDatabaseStrongWarning = 'Chyst�te sa ZRU�I� cel� datab�zu!';
$strDropSelectedDatabases = 'Zru�i� vybran� datab�zy';
$strDropUsersDb = 'Odstr�ni� datab�zy s rovnak�m menom ako maj� pou��vatelia.';
$strDumpSaved = 'Dump (sch�ma) bol ulo�en� do s�boru %s.';
$strDumpXRows = 'Zobrazi� %s riadkov od riadku %s.';
$strDumpingData = 'S�ahujem d�ta pre tabu�ku';
$strDynamic = 'dynamick�';

$strEdit = 'Upravi�';
$strEditPDFPages = 'Upravi� PDF Str�nky';
$strEditPrivileges = 'Upravi� opr�vnenia';
$strEffective = 'Efekt�vny';
$strEmpty = 'Vypr�zdni�';
$strEmptyResultSet = 'MySQL vr�til pr�zdny v�sledok (tj. nulov� po�et riadkov).';
$strEnabled = 'Zapnut�';
$strEncloseInTransaction = 'Uzatvori� pr�kazy v transakcii';
$strEnd = 'Koniec';
$strEndCut = 'KONIEC V�SEKU';
$strEndRaw = 'KONIEC TOKU';
$strEnglish = 'Anglicky';
$strEnglishPrivileges = ' Pozn�mka: n�zvy MySQL opr�vnen� s� uv�dzan� v angli�tine. ';
$strError = 'Chyba';
$strEstonian = 'Est�nsky';
$strExcelEdition = 'Verzia Excelu';
$strExcelOptions = 'Nastavenie exportu do Excelu';
$strExecuteBookmarked = 'Spusti� ob��ben� dotaz';
$strExplain = 'Vysvetli� SQL';
$strExport = 'Exportova�';
$strExtendedInserts = 'Roz��ren� vkladanie';
$strExtra = 'Extra';

$strFailedAttempts = 'Nepodaren�ch pokusov';
$strField = 'Pole';
$strFieldHasBeenDropped = 'Pole %s bolo odstr�nen�';
$strFields = 'Polia';
$strFieldsEmpty = ' Po�et pol� je pr�zdny! ';
$strFieldsEnclosedBy = 'Polia uzatvoren�';
$strFieldsEscapedBy = 'Polia uveden� pomocou';
$strFieldsTerminatedBy = 'Polia ukon�en�';
$strFileAlreadyExists = 'S�bor %s u� existuje na servery, zmente n�zov s�boru alebo zvolte prep�sanie s�boru.';
$strFileCouldNotBeRead = 'S�bor sa ned� pre��ta�';
$strFileNameTemplate = 'Vzor pre n�zov s�boru';
$strFileNameTemplateHelp = 'Pou�ite __DB__ ako n�zov datab�zy, __TABLE__ ako n�zov tabu�ky a ak�ko�vek parametre pre %sfunkciu strftime%s pre vlo�enie d�t. Pr�pona s�boru bude pridan� automaticky pod�a typu. Ak�ko�vek in� text zostane zachovan�.';
$strFileNameTemplateRemember = 'zapam�ta� si vzor';
$strFixed = 'pevn�';
$strFlushPrivilegesNote = 'Pozn�mka: phpMyAdmin z�skava pr�va pou��vate�ov priamo z tabuliek MySQL. Obsah t�chto tabuliek sa m��e l��i� od pr�v, ktor� pou��va server, ak boli tieto tabu�ky ru�ne upraven�. V tomto pr�pade sa odpor��a vykona� %sznovuna��tanie pr�v%s predt�m ako budete pokra�ova�.';
$strFlushTable = 'Vypr�zdni� tabu�ku ("FLUSH")';
$strFormEmpty = 'Ch�baj�ca polo�ka vo formul�ri !';
$strFormat = 'Form�t';
$strFullText = 'Pln� texty';
$strFunction = 'Funkcia';

$strGenBy = 'Vygenerovan�';
$strGenTime = 'Vygenerovan�:';
$strGeneralRelationFeat = 'Mo�nosti v�eobecn�ch vz�ahov';
$strGeorgian = 'Gruz�n�ina';
$strGerman = 'Nemecky';
$strGlobal = 'glob�lny';
$strGlobalPrivileges = 'Glob�lne pr�va';
$strGlobalValue = 'Glob�lna hodnota';
$strGo = 'Vykonaj';
$strGrantOption = 'Prideli�';
$strGreek = 'Gr��tina';
$strGzip = '"gzip-ovan�"';

$strHasBeenAltered = 'bola zmenen�.';
$strHasBeenCreated = 'bola vytvoren�.';
$strHaveToShow = 'Zvolte pros�m aspo� jeden st�pec, ktor� chcete zobrazi�';
$strHebrew = 'Hebrejsky';
$strHexForBinary = 'Bin�rne pole vypisova� v �estn�stkovej s�stave';
$strHome = 'Domov';
$strHomepageOfficial = 'Ofici�lne str�nky phpMyAdmin-a';
$strHost = 'Hostite�';
$strHostEmpty = 'N�zov hostite�a je pr�zdny!';
$strHungarian = 'Ma�arsky';

$strIcelandic = 'Island�ina';
$strId = 'ID';
$strIdxFulltext = 'Cel� text';
$strIfYouWish = 'Ak si �el�te nahra� iba ur�it� st�pce tabu�ky, �pecifikujte ich ako zoznam pol� oddelen� �iarkou.';
$strIgnore = 'Ignorova�';
$strIgnoreInserts = 'Pou�i� IGNORE';
$strIgnoringFile = 'Ignorujem s�bor %s';
$strImportDocSQL = 'Importova� s�bory docSQL';
$strImportFiles = 'Importova� s�bory';
$strImportFinished = 'Importovanie ukon�en�';
$strInUse = 'pr�ve sa pou��va';
$strIndex = 'Index';
$strIndexHasBeenDropped = 'Index pre %s bol odstr�nen�';
$strIndexName = 'Meno indexu&nbsp;:';
$strIndexType = 'Typ indexu&nbsp;:';
$strIndexes = 'Indexy';
$strInnodbStat = 'Stav InnoDB';
$strInsecureMySQL = 'Konfigura�n� s�bor obsahuje nastavenia (root bez hesla), ktor� zodpovedaj� predvolen�mu privilegovan�mu MySQL ��tu. Ak MySQL server be�� s t�mto nastaven�m, nie je zabezpe�en� proti napadnutiu, t�to bezpe�nostn� chyba by mala by� ur�chlene odstr�nen�.';
$strInsert = 'Vlo�i�';
$strInsertAsNewRow = 'Vlo�i� ako nov� riadok';
$strInsertNewRow = 'Vlo�i� nov� riadok';
$strInsertTextfiles = 'Vlo�i� textov� s�bory do tabu�ky';
$strInsertedRowId = 'Id vlo�en�ho riadku:';
$strInsertedRows = 'Vlo�en� riadky:';
$strInstructions = 'In�trukcie';
$strInternalNotNecessary = '* Vn�torn� vz�ah nie je nutn� ak u� vz�ah existuje v InnoDB.';
$strInternalRelations = 'Intern� vz�ahy';

$strJapanese = 'Japon�ina';
$strJumpToDB = 'Na datab�zu &quot;%s&quot;.';
$strJustDelete = 'Iba odstr�ni� pou��vate�lov z tabuliek pr�v.';
$strJustDeleteDescr = '&quot;Odstr�nen�&quot; pou��vatelia bud� ma� k serveru ako predt�m a� do znovuna��tania pr�v.';

$strKeepPass = 'Nezmeni� heslo';
$strKeyname = 'K���ov� n�zov';
$strKill = 'Zabi�';
$strKorean = 'K�rej�ina';

$strLaTeX = 'LaTeX';
$strLaTeXOptions = 'Nastavenia LaTeX';
$strLandscape = 'Na ��rku';
$strLatexCaption = 'Nadpis tabu�ky';
$strLatexContent = 'Obsah tabu�ky __TABLE__';
$strLatexContinued = '(pokra�ovanie)';
$strLatexContinuedCaption = 'Nadpis pokra�ovania tabu�ky';
$strLatexIncludeCaption = 'Zahrn�� nadpis tabu�ky';
$strLatexLabel = 'N�vestie';
$strLatexStructure = '�trukt�ra tabu�ky __TABLE__';
$strLatvian = 'Loty�stina';
$strLengthSet = 'D�ka/Nastavi�*';
$strLimitNumRows = 'z�znamov na str�nku';
$strLineFeed = 'Ukon�enie riadku (Linefeed): \\n';
$strLinesTerminatedBy = 'Riadky ukon�en�';
$strLinkNotFound = 'Linka nebola n�jden�';
$strLinksTo = 'Linkova� na';
$strLithuanian = 'Litovsky';
$strLoadExplanation = 'Automaticky s� nastaven� najlep�ie hodnoty, ak toto nastavenie nebude fungova�, m��ete sk�si� druh� mo�nos�.';
$strLoadMethod = 'Parametre pre pr�kaz LOAD';
$strLocalhost = 'Lok�lny';
$strLocationTextfile = 'Lok�cia textov�ho s�boru';
$strLogPassword = 'Heslo:';
$strLogServer = 'Server';
$strLogUsername = 'Pou��vate�:';
$strLogin = 'Login';
$strLoginInformation = 'Prihl�senie';
$strLogout = 'Odhl�si� sa';

$strMIMETypesForTable = 'MIME TYPY PRE TABU�KU';
$strMIME_MIMEtype = 'MIME typ';
$strMIME_available_mime = 'Dostupn� MIME typy';
$strMIME_available_transform = 'Dostupn� transform�cie';
$strMIME_description = 'Popis';
$strMIME_nodescription = 'Nie je dostupn� �iadny popis pre t�to transform�ciu.<br />Kontaktujte autora, ktor� %s vyt�ra.';
$strMIME_transformation = 'Transform�cia pri prehliadan�';
$strMIME_transformation_note = 'Pre zoznam dostupn�ch parametrov a ich MIME typov kliknite na %spopisy transform�ci�';
$strMIME_transformation_options = 'Parametre transform�cie';
$strMIME_transformation_options_note = 'Pros�m zadajte hodnoty pre parametre transform�cie v nasleduj�com tvare: \'a\',\'b\',\'c\'...<br />Ak potrebujete pou�i� sp�tn� lom�tko ("\") alebo jednoduch� �vodzovky ("\'") medzi t�mito hodnotami, vlo�te pred nich sp�tn� lom�tko (napr. \'\\\\xyz\' alebo \'a\\\'b\').';
$strMIME_without = 'MIME typy zobrazen� kurz�vou nemaj� vlastn� transforma�n� funkciu';
$strMaximumSize = 'Maxim�lna ve�kos�: %s%s';
$strModifications = 'Zmeny boli ulo�en�';
$strModify = 'Zmeni�';
$strModifyIndexTopic = 'Modifikova� index';
$strMoreStatusVars = '�al�ie inform�cie o stave';
$strMoveTable = 'Presun�� tabu�ku do (datab�za<b>.</b>tabu�ka):';
$strMoveTableOK = 'Tabu�ka %s bola presunut� do %s.';
$strMoveTableSameNames = 'Ned� sa presun�� tabu�ka sama do seba!';
$strMultilingual = 'mnohojazy�n�';
$strMustSelectFile = 'Zvolte pros�m s�bor, ktor� si �el�te vlo�i�.';
$strMySQLCharset = 'Znakov� sada v MySQL';
$strMySQLConnectionCollation = 'Overenie MySQL spojenia';
$strMySQLReloaded = 'MySQL znovu-na��tan�.';
$strMySQLSaid = 'MySQL hl�si: ';
$strMySQLServerProcess = 'MySQL %pma_s1% be�� na %pma_s2% ako %pma_s3%';
$strMySQLShowProcess = 'Zobrazi� procesy';
$strMySQLShowStatus = 'Zobrazi� MySQL inform�cie o behu';
$strMySQLShowVars = 'Zobrazi� MySQL syst�mov� premenn�';

$strName = 'N�zov';
$strNeedPrimaryKey = 'Pre t�to tabu�ku by ste mali definova� prim�rny k���.';
$strNext = '�al��';
$strNo = 'Nie';
$strNoDatabases = '�iadne datab�zy';
$strNoDatabasesSelected = 'Neboli vybran� �iadne datab�zy.';
$strNoDescription = 'bez Popisu';
$strNoDropDatabases = 'Mo�nos� "DROP DATABASE" vypnut�.';
$strNoExplain = 'Presko�i� vysvetlenie SQL';
$strNoFrames = 'phpMyAdmin funguje lep�ie s prehliada�mi podporuj�cimi <b>r�my</b>.';
$strNoIndex = 'Nebol definovan� �iadny index!';
$strNoIndexPartsDefined = '�asti indexu neboli definovan�!';
$strNoModification = '�iadna zmena';
$strNoOptions = 'Tento form�t nem� �iadne nastavenia';
$strNoPassword = '�iadne heslo';
$strNoPermission = 'Web server nem� opr�venia na ulo�enie do s�boru %s.';
$strNoPhp = 'bez PHP k�du';
$strNoPrivileges = '�iadne opr�vnenia';
$strNoQuery = '�iadny SQL dotaz!';
$strNoRights = 'Nem�te dostato�n� pr�va na vykonanie tejto akcie!';
$strNoRowsSelected = 'Nebol vybran� �iadny riadok';
$strNoSpace = 'Nedostatok miesta pre ulo�enie s�boru %s.';
$strNoTablesFound = 'Neboli n�jden� �iadne tabu�ky v tejto dat�baze.';
$strNoUsersFound = 'Nebol n�jden� �iadny pou��vate�.';
$strNoValidateSQL = 'Presko�i� potvrdenie platnosti SQL';
$strNone = '�iadny';
$strNotNumber = 'Toto nie je ��slo!';
$strNotOK = 'chyba';
$strNotSet = 'Tabu�ka <b>%s</b> nebola n�jden� alebo nie je nastaven� v %s';
$strNotValidNumber = ' nie je platn� ��slo riadku!';
$strNull = 'Nulov�';
$strNumSearchResultsInTable = '%s v�skyt(ov)v tabu�ke <i>%s</i>';
$strNumSearchResultsTotal = '<b>Celkovo:</b> <i>%s</i> v�skyt(ov)';
$strNumTables = 'Tabu�ky';

$strOK = 'OK';
$strOftenQuotation = '�asto uvodzuj�ce znaky. Volite�ne znamen�, �e iba polia typu char a varchar s� uzatvoren� do "uzatv�rac�ch" znakov.';
$strOperations = 'Oper�cie';
$strOperator = 'Oper�tor';
$strOptimizeTable = 'Optimalizova� tabu�ku';
$strOptionalControls = 'Volite�n�. Ur�uje ako zapisova� alebo ��ta� �peci�lne znaky.';
$strOptionally = 'Volite�ne';
$strOr = 'alebo';
$strOverhead = 'Naviac';
$strOverwriteExisting = 'Prep�sa� existuj�ci s�bor(y)';

$strPHP40203 = 'Pou��vate PHP 4.2.3, ktor� ma v�nu chybu pri pr�ci s viac bajtov�mi znakmi (mbstring). V PHP je t�to chyba zdokumentovan� pod ��slom 19404. Nedoporu�uje sa pou��va� t�to verziu PHP s phpMyAdminom.';
$strPHPVersion = 'Verzia PHP';
$strPageNumber = '��slo str�nky:';
$strPaperSize = 'Ve�kos� str�nky';
$strPartialText = '�iasto�n� texty';
$strPassword = 'Heslo';
$strPasswordChanged = 'Heslo pre %s bolo �spe�ne zmenen�.';
$strPasswordEmpty = 'Heslo je pr�zdne!';
$strPasswordNotSame = 'Hesl� sa nezhoduj�!';
$strPdfDbSchema = 'Sch�ma datab�zy "%s"  - Strana %s';
$strPdfInvalidTblName = 'Tabu�ka "%s" neexistuje!';
$strPdfNoTables = '�iadne tabu�ky';
$strPerHour = 'za hodinu';
$strPerMinute = 'za min�tu';
$strPerSecond = 'za sekundu';
$strPhoneBook = 'adres�r';
$strPhp = 'Vytvori� PHP k�d';
$strPmaDocumentation = 'phpMyAdmin Dokument�cia';
$strPmaUriError = 'Direkt�va <tt>$cfg[\'PmaAbsoluteUri\']</tt> v konfigura�nom s�bore MUS� by� nastaven�!';
$strPolish = 'Po��tina';
$strPortrait = 'Na v��ku';
$strPos1 = 'Za�iatok';
$strPrevious = 'Predch�dzaj�ci';
$strPrimary = 'Prim�rny';
$strPrimaryKeyHasBeenDropped = 'Prim�rny k��� bol zru�en�';
$strPrimaryKeyName = 'N�zov prim�rneho k���a mus� by�... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>mus�</b> by� <b>iba</b> meno prim�rneho k���a!)';
$strPrint = 'Vytla�i�';
$strPrintView = 'N�h�ad k tla�i';
$strPrintViewFull = 'N�h�ad tla�e (s kompletn�mi textami)';
$strPrivDescAllPrivileges = 'V�etky opr�vnenia okrem GRANT.';
$strPrivDescAlter = 'Povol� meni� �trukt�ru existuj�cich tabuliek.';
$strPrivDescCreateDb = 'Povol� vytv�ranie nov�ch datab�z a tabuliek.';
$strPrivDescCreateTbl = 'Povol� vytv�ranie nov�ch tabuliek.';
$strPrivDescCreateTmpTable = 'Povol� vytv�ranie do�asn�ch tabuliek.';
$strPrivDescDelete = 'Povol� mazanie d�t.';
$strPrivDescDropDb = 'Povol� odstra�ovanie datab�z a tabuliek.';
$strPrivDescDropTbl = 'Povol� odstra�ovanie tabuliek.';
$strPrivDescExecute = 'Povol� sp���anie ulo�en�ch proced�r. Nefunguje v tejto verzii MySQL.';
$strPrivDescFile = 'Povol� importovanie a exportovanie d�t zo/do s�borov na serveri.';
$strPrivDescGrant = 'Povol� prid�vanie u�ivatelov a pr�v bez znovuna��tania tabuliek pr�v.';
$strPrivDescIndex = 'Povol� vytv�ranie a mazanie indexov.';
$strPrivDescInsert = 'Povol� vkladanie a nahradzovanie d�t.';
$strPrivDescLockTables = 'Povol� zmaknutie tabuliek pre aktu�lne vl�kno.';
$strPrivDescMaxConnections = 'Obmedz� po�et nov�ch spojen�, ktor� m��e pou��vate� vytvori� za hodinu.';
$strPrivDescMaxQuestions = 'Obmedz� po�et dotazov, ktor� m��e pou��vate� odosla� za hodinu.';
$strPrivDescMaxUpdates = 'Obmedz� po�et pr�kazov meniacich tabu�ku alebo datab�zu, ktor� m��e pou��vate� odosla� za hodinu.';
$strPrivDescProcess3 = 'Povol� zab�janie procesov in�m pou��vate�lom.';
$strPrivDescProcess4 = 'Povol� prezeranie kompletn�ch dotazov v zozname procesov.';
$strPrivDescReferences = 'Nefunguje v tejto verzii MySQL.';
$strPrivDescReload = 'Povol� znovuna��tanie nastaven� a vypr�zd�ovanie vyrovn�vac�ch pam�t� serveru.';
$strPrivDescReplClient = 'Povol� pou��vate�ovi zisti� kde je hlavn� / pomocn� server.';
$strPrivDescReplSlave = 'Potrebn� pre replik�ciu pomocn�ch serverov.';
$strPrivDescSelect = 'Povol� ��tanie d�t.';
$strPrivDescShowDb = 'Povol� pr�stup ku kompletn�mu zoznamu datab�z.';
$strPrivDescShutdown = 'Povol� vypnutie serveru.';
$strPrivDescSuper = 'Povol� spojenie aj v pr�pade, �e bol dosiahnut� maxim�lny po�et spojen�. Potrebn� pre v��inu oper�ci� pri spr�ve serveru ako nastavovanie glob�lny premenn�ch alebo zab�janie procesov in�ch pou��vate�ov.';
$strPrivDescUpdate = 'Povol� menenie d�t.';
$strPrivDescUsage = '�iadne pr�va.';
$strPrivileges = 'Opr�vnenia';
$strPrivilegesReloaded = 'Pr�va boli �spe�ne znovuna��tan�.';
$strProcesslist = 'Zoznam procesov';
$strProperties = 'Vlastnosti';
$strPutColNames = 'Prida� n�zvy pol� na prv� riadok';

$strQBE = 'Dotaz pod�a pr�kladu';
$strQBEDel = 'Zmaza�';
$strQBEIns = 'Vlo�i�';
$strQueryFrame = 'SQL okno';
$strQueryOnDb = ' SQL dotaz v datab�ze <b>%s</b>:';
$strQuerySQLHistory = 'SQL hist�ria';
$strQueryStatistics = '<b>Query statistics</b>: Since its startup, %s queries have been sent to the server.';
$strQueryTime = 'Dotaz zabral %01.4f sek.';
$strQueryType = 'Typ dotazu';
$strQueryWindowLock = 'Neprepisova� tento dotaz z hlavn�ho okna';

$strReType = 'Potvrdi�';
$strReceived = 'Prijat�';
$strRecords = 'Z�znamov';
$strReferentialIntegrity = 'Skontrolova� referen�n� integritu:';
$strRefresh = 'Obnovi�';
$strRelationNotWorking = 'Pr�davn� vlastnosti pre pr�cu s prepojen�mi tabu�kami boli deaktivovan�. Ak chcete zisti� pre�o, kliknite %ssem%s.';
$strRelationView = 'Zobrazi� spojitosti';
$strRelationalSchema = 'Rela�n� sch�ma';
$strRelations = 'Prepojenia';
$strRelationsForTable = 'VZ�AHY PRE TABU�KU';
$strReloadFailed = 'Znovu-na��tanie MySQL bolo ne�spe�n�.';
$strReloadMySQL = 'Znovu-na��ta� MySQL';
$strReloadingThePrivileges = 'Znovuna��tanie pr�v';
$strRemoveSelectedUsers = 'Odstr�ni� vybran�ch pou��vate�ov';
$strRenameDatabaseOK = 'Datab�za %s bola premenovan� na %s';
$strRenameTable = 'Premenova� tabu�ku na';
$strRenameTableOK = 'Tabu�ka %s bola premenovan� na %s';
$strRepairTable = 'Opravi� tabu�ku';
$strReplace = 'Nahradi�';
$strReplaceNULLBy = 'Nahradi� NULL hodnoty';
$strReplaceTable = 'Nahradi� d�ta v tabu�ke s�borom';
$strReset = 'P�vodn� (Reset)';
$strResourceLimits = 'Obmedzenie zdrojov';
$strRevoke = 'Zru�i�';
$strRevokeAndDelete = 'Odobranie v�etk�ch akt�vnych pr�v pou��vate�om a ich n�sledn� odstr�nenie.';
$strRevokeAndDeleteDescr = 'U��vatelia bud� ma� st�le pr�vo USAGE (pou��vanie) a� do znovuna��tania pr�v.';
$strRevokeMessage = 'Boli zru�en� opr�vnenia pre %s';
$strRomanian = 'Rumun�tina';
$strRowLength = 'D�ka riadku';
$strRowSize = ' Ve�kos� riadku ';
$strRows = 'Riadkov';
$strRowsFrom = 'riadky za��naj� od';
$strRowsModeFlippedHorizontal = 'vodorovnom (oto�en� hlavi�ky)';
$strRowsModeHorizontal = 'horizont�lnom';
$strRowsModeOptions = 'v(o) %s m�de a opakova� hlavi�ky po ka�d�ch %s bunk�ch';
$strRowsModeVertical = 'vertik�lnom';
$strRowsStatistic = '�tatistika riadku';
$strRunQuery = 'Odo�li dotaz';
$strRunSQLQuery = 'Spusti� SQL dotaz/dotazy na datab�zu %s';
$strRunning = 'be�� na %s';
$strRussian = 'Ru�tina';

$strSQL = 'SQL';
$strSQLExportType = 'Typ vytvoren�ch dotazov';
$strSQLOptions = 'SQL nastavenia';
$strSQLParserBugMessage = 'Je mo�n�, �e ste na�li chybu v SQL syntaktickom analyz�tore. Presk�majte podrobne SQL dotaz, predov�etk�m spr�vnos� umiestnenia �vodzoviek. �al�ia mo�nos� je, �e nahr�vate s�bor s bin�rnymi d�tami nezap�san�mi v �vodzovk�ch. M��ete tie� vysk��a� pou�i� pr�kazov� riadok MySQL na odstr�nenie probl�mu. Pokial st�le m�te probl�my alebo syntaktick� analyz�tor SQL st�le hl�si chybu v dotaze, ktor� v pr�kazovom riadku funguje, pros�m pok�ste sa zredukova� dotaz na �o najmen��, v ktorom sa probl�m e�te vyskytuje a ohl�ste chybu na str�nke phpMyAdmina spolu so sekciou V�PIS uveden� ni��ie:';
$strSQLParserUserError = 'Vyskytla sa chyba v SQL dotaze. Ni��ie uveden� MySQL v�stup (ak je nejak�) V�m m��e pom�c� odstr�ni� probl�m';
$strSQLQuery = 'SQL dotaz';
$strSQLResult = 'v�sledok SQL';
$strSQPBugInvalidIdentifer = 'Neplatn� identifik�tor';
$strSQPBugUnclosedQuote = 'Neuzatvoren� �vodzovky';
$strSQPBugUnknownPunctuation = 'Nezn�my interpunk�n� re�azec';
$strSave = 'Ulo�i�';
$strSaveOnServer = 'Ulo�i� na server do adres�ra %s';
$strScaleFactorSmall = 'Mierka je pr�li� mala na roztiahnutie sch�my na str�nku';
$strSearch = 'H�ada�';
$strSearchFormTitle = 'H�ada� v datab�ze';
$strSearchInTables = 'V tabu�ke(�ch):';
$strSearchNeedle = 'Slovo(�) alebo hodnotu(y), ktor� chcete vyh�ada� (nahradzuj�ci znak: "%"):';
$strSearchOption1 = 'najmenej jedno zo slov';
$strSearchOption2 = 'v�etky slov�';
$strSearchOption3 = 'presn� v�raz';
$strSearchOption4 = 'ako regul�rny v�raz';
$strSearchResultsFor = 'Preh�ada� v�sledky na "<i>%s</i>" %s:';
$strSearchType = 'N�jdi:';
$strSecretRequired = 'Nastavte pros�m k��� pre �ifrovanie cookies v konfigura�nom s�bore (blowfish_secret).';
$strSelectADb = 'Pros�m vyberte si datab�zu';
$strSelectAll = 'Ozna�i� v�etko';
$strSelectFields = 'Zvoli� pole (najmenej jedno):';
$strSelectNumRows = 'v dotaze';
$strSelectTables = 'Vybra� Tabu�ky';
$strSend = 'Po�li';
$strSent = 'Odoslan�';
$strServer = 'Server';
$strServerChoice = 'Vo�ba serveru';
$strServerNotResponding = 'Server neodpoved�';
$strServerStatus = 'Stav serveru';
$strServerStatusUptime = 'Tento server be�� %s. Bol spusten� %s.';
$strServerTabProcesslist = 'Procesy';
$strServerTabVariables = 'Premenn�';
$strServerTrafficNotes = '<b>Server traffic</b>: These tables show the network traffic statistics of this MySQL server since its startup.';
$strServerVars = 'Premenn� a nastavenia serveru';
$strServerVersion = 'Verzia serveru';
$strSessionValue = 'Hodnota sedenia';
$strSetEnumVal = 'Ak je pole typu "enum" alebo "set", pros�m zad�vajte hodnoty v tvare: \'a\',\'b\',\'c\'...<br />Ak dokonca potrebujete zada� sp�tn� lom�tko ("\") alebo apostrof ("\'") pri t�chto hodnot�ch, zadajte ich napr�klad takto \'\\\\xyz\' alebo \'a\\\'b\'.';
$strShow = 'Uk�za�';
$strShowAll = 'Zobrazi� v�etko';
$strShowColor = 'Zobrazi� farbu';
$strShowDatadictAs = 'Form�t d�tov�ho slovn�ka';
$strShowFullQueries = 'Zobrazi� kompletn� dotazy';
$strShowGrid = 'Zobrazi� mrie�ku';
$strShowPHPInfo = 'Zobrazi� inform�cie o PHP';
$strShowTableDimension = 'Zobrazi� rozmery tabuliek';
$strShowTables = 'Zobrazi� tabu�ky';
$strShowThisQuery = ' Zobrazi� tento dotaz znovu ';
$strShowingRecords = 'Uk�za� z�znamy ';
$strSimplifiedChinese = 'Zjednodu�en� ��n�tina';
$strSingly = '(po jednom)';
$strSize = 'Ve�kos�';
$strSlovak = 'Sloven�ina';
$strSlovenian = 'Slovin�ina';
$strSort = 'Triedi�';
$strSortByKey = 'Zoradi� pod�a k���a';
$strSpaceUsage = 'Zabran� miesto';
$strSpanish = '�panielsky';
$strSplitWordsWithSpace = 'Slov� s� rozdelen� medzerou (" ").';
$strStatCheckTime = 'Posledn� kontrola';
$strStatCreateTime = 'Vytvorenie';
$strStatUpdateTime = 'Posledn� zmena';
$strStatement = '�daj';
$strStatus = 'Stav';
$strStrucCSV = 'CSV d�ta';
$strStrucData = '�trukt�ru a d�ta';
$strStrucDrop = 'Pridaj \'vyma� tabu�ku\'';
$strStrucExcelCSV = 'CSV pre Ms Excel d�ta';
$strStrucNativeExcel = 'Nat�vne d�ta MS Excel';
$strStrucOnly = 'Iba �trukt�ru';
$strStructPropose = 'Navrhn�� �trukt�ru tabu�ky';
$strStructure = '�trukt�ra';
$strSubmit = 'Odo�li';
$strSuccess = 'SQL dotaz bol �spe�ne vykonan�';
$strSum = 'Celkom';
$strSwedish = '�v�dsky';
$strSwitchToTable = 'Prepn�� na skop�rovan� tabu�ku';

$strTable = 'Tabu�ka';
$strTableComments = 'Koment�r k tabu�ke';
$strTableEmpty = 'Tabu�ka je pr�zdna!';
$strTableHasBeenDropped = 'Tabu�ka %s bola odstr�nen�';
$strTableHasBeenEmptied = 'Tabu�ka %s bola vypr�zden�';
$strTableHasBeenFlushed = 'Tabu�ka %s bola vypr�zdnen�';
$strTableMaintenance = '�dr�ba tabu�ky';
$strTableOfContents = 'Obsah';
$strTableOptions = 'Parametre tabu�ky';
$strTableStructure = '�trukt�ra tabu�ky pre tabu�ku';
$strTableType = 'Typ tabu�ky';
$strTables = '%s tabu�ka(y)';
$strTakeIt = 'zvoli�';
$strTblPrivileges = 'Opr�vnenia pre jednotliv� tabu�ky';
$strTextAreaLength = ' Toto mo�no nep�jde upravi�,<br /> kv�li svojej d�ke ';
$strThai = 'Thaj�ina';
$strTheContent = 'Obsah V�ho s�boru bol vlo�en�.';
$strTheContents = 'Obsah s�boru prep��e obsah vybranej tabu�ky v riadkoch s identick�m prim�rnym alebo unik�tnym k���om.';
$strTheTerminator = 'Ukon�enie pol�.';
$strTheme = 'Vzh�ad';
$strThisHost = 'Tento po��ta�';
$strThisNotDirectory = 'Nebol zadan� adres�r';
$strThreadSuccessfullyKilled = 'Vl�kno %s bol �spe�ne zabit�.';
$strTime = '�as';
$strToggleScratchboard = 'zobrazi� grafick� n�vrh';
$strTotal = 'celkovo';
$strTotalUC = 'Celkom';
$strTraditionalChinese = 'Tradi�n� ��n�tina';
$strTraditionalSpanish = 'Tradi�n� �paniel�ina';
$strTraffic = 'Prev�dzka';
$strTransformation_application_octetstream__download = 'Zobraz� odkaz na stiahnutie d�t. Prv� parameter je meno s�boru, druh� je meno st�pca v tabu�ke obsahuj�ci meno s�boru. Ak zad�te druh� parameter, prv� mus� by� pr�zdny.';
$strTransformation_image_jpeg__inline = 'Zobraz� n�h�ad obr�zku s odkazom na obr�zok; parametre ��rka a v��ka v bodoch (pomer str�n obr�zku zostane zachovan�)';
$strTransformation_image_jpeg__link = 'Zobraz� odkaz na obr�zok (napr. stiahnutie po�a blob).';
$strTransformation_image_png__inline = 'Zobraz� image/jpeg: inline';
$strTransformation_text_plain__dateformat = 'Zobraz� d�tum alebo �as (TIME, TIMESTAMP alebo DATETIME) pod�a miestneho nastavenia. Prv� parameter je posun (v hodin�ch), ktor� bude pridan� k zadan�mu �asu (predvolen� je 0). Druh� parameter je form�tovac� re�azec pre php funkciu strftime().';
$strTransformation_text_plain__external = 'PLAT� IBA PRE LINUX: Spust� extern� aplik�ciu, na jej �tandardn� vstup po�le pole a zobraz� v�stup programu. Predvolen� program je Tidy, ktor� pekne sform�tuje HTML. Z bezpe�nostn�ch d�vodov mus�te ru�ne upravi� obsah s�boru libraries/transformations/text_plain__external.inc.php a prida� do neho povolen� aplik�cie. Prv� parameter je ��slo aplik�cie, ktor� chcete pou�i� a druh� parametre s� parametre tejto aplik�cie. Ak je tret� parameter nastaven� na 1, v�stup bude skonvertovan� funkciou htmlspecialchars() (predvolen� je 1). �tvrt� parameter v pr�pade, �e je nastaven� na 1 prid� k v�stupn�mu textu parameter NOWRAP, ��m zabezpe�� zachovanie form�tovania (predvolen� je 1)';
$strTransformation_text_plain__formatted = 'Zachov� p�vodn� form�tovanie po�a tak ako je ulo�en� v datab�ze.';
$strTransformation_text_plain__imagelink = 'Zobraz� obr�zok a odkaz z po�a obsahuj�ceho odkaz na obr�zok. Prv� parameter je prefix URL (napr. "http://domena.sk/"), druh� a tret� parameter ur�uj� ��rku a v��ku obr�zku.';
$strTransformation_text_plain__link = 'Zobraz� odkaz z po�a obsahuj�ceho odkaz. Prv� parameter je prefix URL (napr. "http://domena.sk/"), druh� parameter je text odkazu.';
$strTransformation_text_plain__substr = 'Zobraz� iba �as� re�azca. Prv� parameter je posun od za�iatku (predvolen� je 0) a druh� ur�uje d�ku textu, ktor� sa ma zobrazi�, ak nie je zadan� bude zobrazen� zvy�ok textu. Tret� parameter ur�uje znaky, ktor� bud� pridan� na koniec skr�ten�ho textu (predvolen� je ...).';
$strTransformation_text_plain__unformatted = 'Zobraz� HTML k�d pomocou HMTL ent�t. Pr�padn� HTML k�d sa zobraz� v p�vodnom stave.';
$strTruncateQueries = 'Zobrazi� skr�tene dotazy';
$strTurkish = 'Turecky';
$strType = 'Typ';

$strUkrainian = 'Ukrajinsky';
$strUncheckAll = 'Odzna�i� v�etko';
$strUnicode = 'Unicode';
$strUnique = 'Unik�tny';
$strUnknown = 'nezn�my';
$strUnselectAll = 'Odzna�i� v�etko';
$strUpdComTab = 'Pros�m pre��tajte si dokument�ciu ako aktualizova� tabu�ku s inform�ciami o st�pcoch (Column_comments Table)';
$strUpdatePrivMessage = 'Boli aktualizovan� opr�vnenia pre %s.';
$strUpdateProfileMessage = 'Profil bol aktualizovan�.';
$strUpdateQuery = 'Aktualizova� dotaz';
$strUpgrade = 'Mali by ste aktualizova� %s na verziu %s alebo vy��iu.';
$strUsage = 'Vyu�itie';
$strUseBackquotes = ' Pou�i� opa�n� apostrof pri n�zvoch tabuliek a pol� ';
$strUseHostTable = 'Pou�i� tabu�ku s hostite�mi';
$strUseTables = 'Pou�i� tabu�ky';
$strUseTextField = 'Po�i� textov� pole';
$strUseThisValue = 'Pou�i� t�to hodnotu';
$strUser = 'Pou��vate�';
$strUserAlreadyExists = 'Pou��vate� %s u� existuje!';
$strUserEmpty = 'Meno pou��vate�a je pr�zdne!';
$strUserName = 'Meno pou��vate�a';
$strUserNotFound = 'Zvolen� pou��vate� nebol n�jden� v tabu�ke pr�v.';
$strUserOverview = 'Preh�ad u��vatelov';
$strUsersDeleted = 'Vybran� u��vatelia bol �spe�ne odstr�nen�.';
$strUsersHavingAccessToDb = 'Pou��vatelia maj�ci pr�stup k &quot;%s&quot;';

$strValidateSQL = 'Potvrdi� platnos� SQL';
$strValidatorError = 'SQL validator nemohol by� inicializovan�. Pros�m skontrolujte, �i s� nain�talovan� v�etky potrebn� roz��renia php, tak ako s� pop�san� v %sdocumentation%s.';
$strValue = 'Hodnota';
$strVar = 'Premenn�';
$strViewDump = 'Zobrazi� dump (sch�mu) tabu�ky';
$strViewDumpDB = 'Zobrazi� dump (sch�mu) datab�zy';
$strViewDumpDatabases = 'Export datab�z';

$strWebServerUploadDirectory = 'upload adres�r web serveru';
$strWebServerUploadDirectoryError = 'Adres�r ur�en� pre upload s�borov sa ned� otvori�';
$strWelcome = 'Vitajte v %s';
$strWestEuropean = 'Z�padn� Eur�pa';
$strWildcard = 'nahradzuj�ci znak';
$strWindowNotFound = 'Cie�ov� okno prehliada�a nemohlo by� aktualizovan�. Mo�no ste zatvorili rodi�ovsk� okno, alebo prehliada� blokuje oper�cie medzi oknami z d�vodu bezpe�nostn�ch nastaven�';
$strWithChecked = 'V�ber:';
$strWritingCommentNotPossible = 'Koment�r sa ned� zap�sa�';
$strWritingRelationNotPossible = 'Vz�ah sa ned� zap�sa�';
$strWrongUser = 'Zl� pou��vate�sk� meno alebo heslo. Pr�stup zamietnut�.';

$strXML = 'XML';

$strYes = '�no';

$strZeroRemovesTheLimit = 'Pozn�mka: Nastavenie t�chto parametrov na 0 (nulu) odstr�ni obmedzenia.';
$strZip = '"zo zipovan�"';

?>

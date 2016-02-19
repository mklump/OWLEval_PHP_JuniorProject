<?php
/* $Id: bosnian-utf-8.inc.php,v 2.34 2004/07/17 22:58:28 rabus Exp $ */

/**
 *     Translated by:
 *     Samir Kobiljak <kobiljak@aon.at>
 *     http://www.kobiljak.com
 */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('bajta', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Ned', 'Pon', 'Uto', 'Sri', 'Čet', 'Pet', 'Sub');
$month = array('jan', 'feb', 'mar', 'apr', 'maj', 'jun', 'jul', 'aug', 'sep', 'okt', 'nov', 'dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d. %B %Y. u %H:%M';
$timespanfmt = '%s dana, %s sati, %s minuta i %s sekundi';

$strAPrimaryKey = 'Osnovni ključ je upravo dodan %s';
$strAbortedClients = 'Prekinuto';
$strAbsolutePathToDocSqlDir = 'Unesite kompletnu putanju do direkcije docSQL na veb serveru';
$strAccessDenied = 'Ulaz nije dozvoljen';
$strAccessDeniedExplanation = 'phpMyAdmin je pokušao da se poveže na MySQL server, ali je server odbio povezivanje. Provjerite naziv hosta, korisničko ime i lozinku u config.inc.php i uvjerite se da odgovaraju podacima koje ste dobili od administratora MySQL servera.';
$strAction = 'Akcija';
$strAddAutoIncrement = 'Dodaj AUTO_INCREMENT vrijednost';
$strAddDeleteColumn = 'Dodaj/obriši kolonu';
$strAddDeleteRow = 'Dodaj/obriši polje za kriterij';
$strAddDropDatabase = 'Dodaj DROP DATABASE';
$strAddIntoComments = 'Dodaj u komentare';
$strAddNewField = 'Dodaj novo polje';
$strAddPrivilegesOnDb = 'Dodaj privilegije na slijedećoj bazi';
$strAddPrivilegesOnTbl = 'Dodaj privilegije na slijedećoj tabeli';
$strAddSearchConditions = 'Dodaj uslove pretraživanja (dio "WHERE" upita):';
$strAddToIndex = 'Dodaj u ključ &nbsp;%s&nbsp;kolona(e)';
$strAddUser = 'Dodaj novog korisnika';
$strAddUserMessage = 'Dodali ste novog korisnika.';
$strAddedColumnComment = 'Dodan je komentar koloni';
$strAddedColumnRelation = 'Dodana je relacija koloni';
$strAdministration = 'Administracija';
$strAffectedRows = 'Obuhvaćeno redova:';
$strAfter = 'Poslije %s';
$strAfterInsertBack = 'Nazad na prethodnu stranu';
$strAfterInsertNewInsert = 'Dodaj još jedan novi red';
$strAll = 'Sve';
$strAllTableSameWidth = 'prikaz svih tabela iste širine?';
$strAlterOrderBy = 'Promijeni redoslijed u tabeli';
$strAnIndex = 'Ključ je upravo dodan %s';
$strAnalyzeTable = 'Analiziraj tabelu';
$strAnd = 'i';
$strAny = 'Bilo koji';
$strAnyHost = 'Bilo koji host';
$strAnyUser = 'Bilo koji korisnik';
$strArabic = 'Arapski';
$strArmenian = 'Jermenski';
$strAscending = 'Rastući';
$strAtBeginningOfTable = 'Na početku tabele';
$strAtEndOfTable = 'Na kraju tabele';
$strAttr = 'Atributi';
$strAutodetect = 'automatski';
$strAutomaticLayout = 'Automatski raspored';

$strBack = 'Nazad';
$strBaltic = 'Baltički';
$strBeginCut = 'POČETAK REZ';
$strBeginRaw = 'POČETAK SIROVO';
$strBinary = 'Binarni';
$strBinaryDoNotEdit = 'Binarni - ne mijenjaj';
$strBookmarkDeleted = 'Obilježivač je upravo obrisan.';
$strBookmarkLabel = 'Naziv';
$strBookmarkQuery = 'Obilježen SQL-upit';
$strBookmarkThis = 'Obilježi SQL-upit';
$strBookmarkView = 'Vidi samo';
$strBrowse = 'Pregled';
$strBrowseForeignValues = 'Pregledaj strane vrijednosti';
$strBulgarian = 'Bugarski';
$strBzError = 'phpMyAdmin nije mogao da kompresuje sadržaj baze zbog neispravne BZ2 ekstenzije u ovoj verziji PHP-a. Preporučuje se da podesite <code>$cfg[\'BZipDump\']</code> direktivu u vašem phpMyAdmin konfiguracionom fajlu na <code>FALSE</code>. Ako želite da koristite mogućnosti BZ2 kompresije, trebalo bi da pređete na noviju verziju PHP-a. Vidite PHP izveštaj o greškama %s za detalje.';
$strBzip = '"bzip-ovano"';

$strCSVOptions = 'CSV opcije';
$strCannotLogin = 'Ne mogu da se prijavim na MySQL server';
$strCantLoad = 'ne mogu da učitam ekstenziju %s,<br />molim provjerite PHP konfiguraciju';
$strCantLoadRecodeIconv = 'Ne mogu da učitam iconv ili recode ekstenzije potrebne za konverziju skupova znakova, podesite PHP da dozvoli korišćenje ovih ekstenzija ili onemogućite konverziju skupova znakova u phpMyAdmin-u.';
$strCantRenameIdxToPrimary = 'Ne mogu da promenim ključ u PRIMARY (primarni) !';
$strCantUseRecodeIconv = 'Ne mogu da koristim iconv ili libiconv ili recode_string funkcije iako ekstenzija prijavljuje da je učitana. Proverite vašu PHP konfiguraciju.';
$strCardinality = 'Kardinalnost';
$strCarriage = 'Novi red (carriage return): \\r';
$strCaseInsensitive = 'Ne razlikuje mala i velika slova';
$strCaseSensitive = 'Razlikuje mala i velika slova';
$strCentralEuropean = 'Centralnoevropski';
$strChange = 'Promijeni';
$strChangeCopyMode = 'Napravi novog korisnika sa istim privilegijama i ...';
$strChangeCopyModeCopy = '... sačuvaj stare.';
$strChangeCopyModeDeleteAndReload = ' ... obriši starog iz tabele korisnika i zatim ponovo učitaj privilegije.';
$strChangeCopyModeJustDelete = ' ... obriši stare iz tabela korisnika.';
$strChangeCopyModeRevoke = ' ... obustavi sve privilegije starog korisnika i zatim ga obriši.';
$strChangeCopyUser = 'Promeni informacije o prijavi / Kopiraj korisnika';
$strChangeDisplay = 'Izaberi polja za prikaz';
$strChangePassword = 'Promeni lozinku';
$strCharset = 'Karakter set';
$strCharsetOfFile = 'Karakter set datoteke:';
$strCharsets = 'Kodne strane';
$strCharsetsAndCollations = 'Karakter setovi i sortiranje';
$strCheckAll = 'Označi sve';
$strCheckPrivs = 'Provjeri privilegije';
$strCheckPrivsLong = 'Provjeri privilegije za bazu &quot;%s&quot;.';
$strCheckTable = 'Provjeri tabelu';
$strChoosePage = 'Izaberite stranu koju menjate';
$strColComFeat = 'Prikazujem komentare kolone';
$strCollation = 'Sortiranje';
$strColumnNames = 'Imena kolona';
$strColumnPrivileges = 'Privilegije vezane za kolone';
$strCommand = 'Naredba';
$strComments = 'Komentari';
$strCompleteInserts = 'Kompletan INSERT (sa imenima polja)';
$strCompression = 'Kompresija';
$strConfigFileError = 'phpMyAdmin nije mogao da pročita vaš konfiguracioni fajl!<br />Ovo se može destiti ako PHP nađe grešku u procesiranju ili ne može da pronađe fajl.<br />Pozovite konfiguracioni fajl direktno koristeći donji link u pročitajte poruke o grešci koje dobijate. U većini slučajeve negde nedostaje navodnik ili tačka-zarez.<br />Ako dobijete praznu stranu, sve je u redu.';
$strConfigureTableCoord = 'Podesite koordinate za tabelu %s';
$strConnections = 'Konekcije';
$strCookiesRequired = 'Kolačići (Cookies) moraju u ovom slučaju biti aktivirani.';
$strCopyTable = 'Kopiraj tabelu u (baza<b>.</b>tabela):';
$strCopyTableOK = 'Tabela %s je kopirana u %s.';
$strCopyTableSameNames = 'Ne mogu da kopiram tabelu u samu sebe!';
$strCouldNotKill = 'phpMyAdmin nije mogao da prekine proces %s. Vjerovatno je već zatvoren.';
$strCreate = 'Napravi';
$strCreateIndex = 'Napravi ključ na&nbsp;%s&nbsp;kolona';
$strCreateIndexTopic = 'Napravi novi ključ';
$strCreateNewDatabase = 'Napravi novu bazu podataka';
$strCreateNewTable = 'Napravi novu tabelu u bazi %s';
$strCreatePage = 'Napravi novu stranu';
$strCreatePdfFeat = 'Pravljenje PDF-ova';
$strCriteria = 'Kriterijum';
$strCroatian = 'Hrvatski';
$strCyrillic = 'Ćirilični';
$strCzech = 'Češki';

$strDBComment = 'Komentar baze:';
$strDBGContext = 'Kontekst';
$strDBGContextID = 'Kontekst ID';
$strDBGHits = 'Pogodaka';
$strDBGLine = 'Linija';
$strDBGMaxTimeMs = 'Max vrijeme, ms';
$strDBGMinTimeMs = 'Min vrijeme, ms';
$strDBGModule = 'Modul';
$strDBGTimePerHitMs = 'Vrijeme/pogodak, ms';
$strDBGTotalTimeMs = 'Ukupno vrijeme, ms';
$strDanish = 'Danski';
$strData = 'Podaci';
$strDataDict = 'Rečnik podataka';
$strDataOnly = 'Samo podaci';
$strDatabase = 'Baza podataka';
$strDatabaseExportOptions = 'Opcije za izvoz baze';
$strDatabaseHasBeenDropped = 'Baza %s je odbačena.';
$strDatabaseNoTable = 'Baza ne sadrži tabele!';
$strDatabases = 'Baze';
$strDatabasesDropped = '%s baza je uspješno odbačena.';
$strDatabasesStats = 'Statistika baze';
$strDatabasesStatsDisable = 'Isključi statistike';
$strDatabasesStatsEnable = 'Uključi statistike';
$strDatabasesStatsHeavyTraffic = 'Napomena: uključivanje statistika može prouzrokovati veliki protok podataka između web i MySQL servera.';
$strDbPrivileges = 'Privilegije vezane za bazu';
$strDbSpecific = 'Specifično za bazu';
$strDefault = 'Podrazumjevano';
$strDefaultValueHelp = 'Za podrazumjevanu vrijednost, unesite samo jednu vrijednost, bez kosih crta ili navodnika u ovom obliku: a';
$strDelOld = 'Trenutna strana ima reference na tabele koje više ne postoje. Želite li da obrišete te reference?';
$strDelete = 'Obriši';
$strDeleteAndFlush = 'Obriši korisnike i ponovo učitaj privilegije.';
$strDeleteAndFlushDescr = 'Ovo je najčistiji način, ali ponovno učitavanje privilegina može da potraje.';
$strDeleted = 'Red je obrisan';
$strDeletedRows = 'Obrisani redovi:';
$strDeleting = 'Brišem %s';
$strDescending = 'Opadajući';
$strDescription = 'Opis';
$strDictionary = 'riječnik';
$strDisabled = 'Onemogućeno';
$strDisplayFeat = 'Prikaži osobine';
$strDisplayOrder = 'Redosled prikaza:';
$strDisplayPDF = 'Prikaži PDF shemu';
$strDoAQuery = 'Napravi "upit po primjeru" (džoker: "%")';
$strDoYouReally = 'Da li stvarno hoćete da ';
$strDocu = 'Dokumentacija';
$strDrop = 'Odbaci';
$strDropSelectedDatabases = 'Odbaci izabrane baze';
$strDropUsersDb = 'Odbaci baze koje se zovu isto kao korisnici.';
$strDumpSaved = 'Sadržaj baze je sačuvan u fajl %s.';
$strDumpXRows = 'Prikaži %s redova počevši od reda %s.';
$strDumpingData = 'Prikaz podataka tabele';
$strDynamic = 'dinamički';

$strEdit = 'Promeni';
$strEditPDFPages = 'Izmena PDF strana';
$strEditPrivileges = 'Promijeni privilegije';
$strEffective = 'Efektivne';
$strEmpty = 'Isprazni';
$strEmptyResultSet = 'MySQL je vratio prazan rezultat (nula redova).';
$strEnabled = 'Omogućeno';
$strEnd = 'Kraj';
$strEndCut = 'KRAJ REZ';
$strEndRaw = 'KRAJ SIROVO';
$strEnglish = 'Engleski';
$strEnglishPrivileges = ' Napomena: MySQL imena privilegija moraju da budu na engleskom ';
$strError = 'Greška';
$strEstonian = 'Estonski';
$strExcelOptions = 'Excel opcije';
$strExecuteBookmarked = 'Izvrši upamćen upit';
$strExplain = 'Objasni SQL';
$strExport = 'Izvoz';
$strExtendedInserts = 'Prošireni INSERT';
$strExtra = 'Dodatno';

$strFailedAttempts = 'Neuspelih pokušaja';
$strField = 'Polje';
$strFieldHasBeenDropped = 'Polje %s je obrisano';
$strFields = 'Polja';
$strFieldsEmpty = ' Broj polja je nula! ';
$strFieldsEnclosedBy = 'Polja ograničena sa';
$strFieldsEscapedBy = 'Escape karakter &nbsp; &nbsp; &nbsp;';
$strFieldsTerminatedBy = 'Polja razdvojena sa';
$strFileAlreadyExists = 'Datoteka %s već postoji na serveru, promijenite ime datoteke ili uključite opciju prepisivanja.';
$strFileCouldNotBeRead = 'Datoteku nije moguće pročitati';
$strFileNameTemplate = 'Šablon imena datoteke';
$strFileNameTemplateHelp = 'Koristi __DB__ za ime baze, __TABLE__ za ime tabele  i %sbilo koju strftime%s opciju za specifikaciju vremena, i ekstenzija će automatski biti dodata. Sav ostali tekst biće sačuvan.';
$strFileNameTemplateRemember = 'zapamti šablon';
$strFixed = 'urađeno';
$strFlushPrivilegesNote = 'Napomena: phpMyAdmin uzima privilegije korisnika direktno iz MySQL tabela privilegija. Sadržaj ove tabele može se razlikovati od privilegija koje server koristi ako su izvršene ručne izmjene. U tom slučaju %sponovo učitajte privilegije%s pre nego što nastavite.';
$strFlushTable = 'Osvježi tabelu ("FLUSH")';
$strFormEmpty = 'Nedostaje vrijednost u obrascu!';
$strFormat = 'Format';
$strFullText = 'Pun tekst';
$strFunction = 'Funkcija';

$strGenBy = 'Generirao';
$strGenTime = 'Vrijeme kreiranja';
$strGeneralRelationFeat = 'Opšte osobine relacija';
$strGerman = 'Njemački';
$strGlobal = 'globalno';
$strGlobalPrivileges = 'Globalne privilegije';
$strGlobalValue = 'Globalna vrednost';
$strGo = 'Kreni';
$strGrantOption = 'Omogući';
$strGreek = 'Grčki';
$strGzip = '"gzip-ovano"';

$strHasBeenAltered = 'je promijenjen(a).';
$strHasBeenCreated = 'je kreiran(a).';
$strHaveToShow = 'Morate izabrati bar jednu kolonu za prikaz';
$strHebrew = 'Jevrejski';
$strHome = 'Početna strana';
$strHomepageOfficial = 'phpMyAdmin veb sajt';
$strHost = 'Host';
$strHostEmpty = 'Ime hosta je prazno!';
$strHungarian = 'Mađarski';

$strId = 'ID';
$strIdxFulltext = 'Tekst ključ';
$strIfYouWish = 'Ako želite da izlistate samo neke kolone u tabeli, navedite ih razdvojene zarezom';
$strIgnore = 'Ignoriši';
$strIgnoringFile = 'Ignorišem fajl %s';
$strImportDocSQL = 'Uvoz docSQL fajlova';
$strImportFiles = 'Uvoz fajlova';
$strImportFinished = 'Uvoz završen';
$strInUse = 'se koristi';
$strIndex = 'Ključ';
$strIndexHasBeenDropped = 'Ključ %s je obrisan';
$strIndexName = 'Ime ključa :';
$strIndexType = 'Tip ključa :';
$strIndexes = 'Ključevi';
$strInnodbStat = 'InnoDB status';
$strInsecureMySQL = 'Vaš konfiguracioni fajl sadrži podešavanja (root bez lozinke) koja odgovaraju standardnom MySQL privilegovanom nalogu. Vaš MySQL server radi sa ovim podešavanjima, otvoren je za hakovanje, i zaista treba da ispravite ovaj sigurnosni rizik.';
$strInsert = 'Novi zapis';
$strInsertAsNewRow = 'Unesi kao novi red';
$strInsertNewRow = 'Unesi novi red';
$strInsertTextfiles = 'Uvezi podatke iz tekstualne datoteke';
$strInsertedRowId = 'ID umetnutih redova:';
$strInsertedRows = 'Uneseno redova:';
$strInstructions = 'Uputstva';

$strJapanese = 'Japanski';
$strJumpToDB = 'Pređi na bazu &quot;%s&quot;.';
$strJustDelete = 'Samo obriši korisnike iz tabele privilegija.';
$strJustDeleteDescr = '&quot;Obrisani&quot; korisnici će i dalje imati pristup serveru dok privilegije ne budu ponovo učitane.';

$strKeepPass = 'Nemoj da mijenjaš lozinku';
$strKeyname = 'Ime ključa';
$strKill = 'Obustavi';
$strKorean = 'Korejski';

$strLaTeX = 'LaTeX';
$strLaTeXOptions = 'LaTeX opcije';
$strLandscape = 'Položeno';
$strLengthSet = 'Dužina/Vrijednost*';
$strLimitNumRows = 'Broj redova po strani';
$strLineFeed = 'Oznaka za kraj linije: \\n';
$strLinesTerminatedBy = 'Linije se završavaju sa';
$strLinkNotFound = 'Veza nije pronađena';
$strLinksTo = 'Veze ka';
$strLithuanian = 'Litvanski';
$strLoadExplanation = 'Najbolji metod je već izabran, ali ga možete promijeniti ako ne radi.';
$strLoadMethod = 'LOAD metod';
$strLocalhost = 'Lokalni';
$strLocationTextfile = 'Lokacija tekstualne datoteke';
$strLogPassword = 'Lozinka:';
$strLogUsername = 'Korisničko ime:';
$strLogin = 'Prijavljivanje';
$strLoginInformation = 'Podatci o prijavi';
$strLogout = 'Odjavljivanje';

$strMIME_MIMEtype = 'MIME-tipovi';
$strMIME_available_mime = 'Dostupni MIME-tipovi';
$strMIME_available_transform = 'Dostupne transformacije';
$strMIME_description = 'Opis';
$strMIME_nodescription = 'Nema opisa za ovu transformaciju.<br />Molimo pitajte autora šta %s radi.';
$strMIME_transformation = 'Tranformacije čitača';
$strMIME_transformation_note = 'Za listu dostupnih opcija transformacije i njihove transformacije MIME-tipova, kliknite na %sopise transformacija%s';
$strMIME_transformation_options = 'Opcije transformacije';
$strMIME_transformation_options_note = 'Molimo unesite vrijednosti za opcije transformacije koristeći ovaj oblik: \'a\',\'b\',\'c\'...<br />Ako treba da unesete obrnutu kosu crtu ("\\") ili apostrof ("\'") u te vrijednosti, stavite obrnutu kosu crtu ispred njih (na primjer \'\\\\xyz\' ili \'a\\\'b\').';
$strMIME_without = 'MIME-tipovi prikazani u kursivu nemaju odvojene funkcije transformacije.';
$strModifications = 'Izmjene su sačuvane';
$strModify = 'Promijeni';
$strModifyIndexTopic = 'Izmijeni ključ';
$strMoreStatusVars = 'Još statusnih promjenljivih';
$strMoveTable = 'Pomjeri tabelu u (baza<b>.</b>tabela):';
$strMoveTableOK = 'Tabela %s je pomjerena u %s.';
$strMoveTableSameNames = 'Ne mogu da premjestim tabelu u samu sebe!';
$strMultilingual = 'višejezički';
$strMustSelectFile = 'Morate izabrati datoteku koju želite da umetnete.';
$strMySQLCharset = 'MySQL set karaktera';
$strMySQLReloaded = 'MySQL ponovo pokrenut.';
$strMySQLSaid = 'MySQL kaže: ';
$strMySQLServerProcess = 'MySQL %pma_s1% pokrenut na %pma_s2%, prijavljen kao %pma_s3%';
$strMySQLShowProcess = 'Prikaži listu procesa';
$strMySQLShowStatus = 'Prikaži MySQL informacije o toku rada';
$strMySQLShowVars = 'Prikaži MySQL sistemske promenljive';

$strName = 'Ime';
$strNext = 'Slijedeći';
$strNo = 'Ne';
$strNoDatabases = 'Baza ne postoji';
$strNoDatabasesSelected = 'Nije izabrana ni jedna baza.';
$strNoDescription = 'nema opisa';
$strNoDropDatabases = '"DROP DATABASE" komanda je onemogućena.';
$strNoExplain = 'Preskoči objašnjavanje SQL-a';
$strNoFrames = 'phpMyAdmin preferira čitače koji podržavaju okvire.';
$strNoIndex = 'Ključ nije definisan!';
$strNoIndexPartsDefined = 'Dijelovi ključa nisu definisani!';
$strNoModification = 'Nema izmjena';
$strNoOptions = 'Ne postoje opcije za ovaj format';
$strNoPassword = 'Nema lozinke';
$strNoPermission = 'Veb serveru nije dozvoljeno da sačuva datoteku %s.';
$strNoPhp = 'bez PHP koda';
$strNoPrivileges = 'Nema privilegija';
$strNoQuery = 'Nema SQL upita!';
$strNoRights = 'Nije Vam dozvoljeno da budete ovdje!';
$strNoSpace = 'Nedovoljno prostora za snimanje datoteke %s.';
$strNoTablesFound = 'Tabele nisu pronađene u bazi.';
$strNoUsersFound = 'Korisnik nije nađen.';
$strNoValidateSQL = 'Preskoči provjeru SQL-a';
$strNone = 'nema';
$strNotNumber = 'Ovo nije broj!';
$strNotOK = 'nije u redu';
$strNotSet = '<b>%s</b> tabela nije pronađena ili nije postavljena u %s';
$strNotValidNumber = 'nije odgovarajući broj kolone!';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s pogodaka unutar tabele <i>%s</i>';
$strNumSearchResultsTotal = '<b>Ukupno:</b> <i>%s</i> pogodaka';
$strNumTables = 'Tabele';

$strOK = 'U redu';
$strOftenQuotation = 'Navodnici koji se koriste. OPCIONO se misli da neka polja mogu, ali ne moraju da budu pod znacima navoda.';
$strOperations = 'Operacije';
$strOptimizeTable = 'Optimiziraj tabelu';
$strOptionalControls = 'Opciono. Znak koji prethodi specijalnim znacima.';
$strOptionally = 'OPCIONO';
$strOr = 'ili';
$strOverhead = 'Prekoračenje';
$strOverwriteExisting = 'Prepiši postojeće fajlove';

$strPHP40203 = 'Koristite PHP 4.2.3, koji ima ozbiljnu gresku sa višebajtnim stringovima (mbstring). Pogledajte izvještaj o grešci br. 19404. Ova verzija PHP-a se ne preporučuje za korišćenje sa phpMyAdmin.';
$strPHPVersion = 'verzija PHP-a';
$strPageNumber = 'Broj strane:';
$strPaperSize = 'Dimenzije papira';
$strPartialText = 'Dio teksta';
$strPassword = 'Lozinka';
$strPasswordChanged = 'Lozinka za %s je uspješno promjenjena.';
$strPasswordEmpty = 'Lozinka je prazna!';
$strPasswordNotSame = 'Lozinke nisu identične!';
$strPdfDbSchema = 'Shema baze "%s" - Strana %s';
$strPdfInvalidTblName = 'Tabela "%s" ne postoji!';
$strPdfNoTables = 'Nema tabela';
$strPerHour = 'na sat';
$strPerMinute = 'u minuti';
$strPerSecond = 'u sekundi';
$strPhoneBook = 'telefonski imenik';
$strPhp = 'Napravi PHP kod';
$strPmaDocumentation = 'phpMyAdmin dokumentacija';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> direktiva MORA biti podješena u konfiguracionoj datoteci!';
$strPortrait = 'Uspravno';
$strPos1 = 'Početak';
$strPrevious = 'Prethodna';
$strPrimary = 'Primarni';
$strPrimaryKeyHasBeenDropped = 'Primarni ključ je obrisan';
$strPrimaryKeyName = 'Ime primarnog ključa mora da bude... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>mora</b> biti ime <b>samo</b> primarnog ključa!)';
$strPrint = 'Štampaj';
$strPrintView = 'Za štampu';
$strPrivDescAllPrivileges = 'Uključuje sve privilegije osim GRANT.';
$strPrivDescAlter = 'Dozvoljava izmjenu struktura postojećih tabela.';
$strPrivDescCreateDb = 'Dozvoljava kreiranje novih baza i tabela.';
$strPrivDescCreateTbl = 'Dozvoljava kreiranje novih tabela.';
$strPrivDescCreateTmpTable = 'Dozvoljava kreiranje privremenih tabela..';
$strPrivDescDelete = 'Dozvoljava brisanje podataka.';
$strPrivDescDropDb = 'Dozvoljava odbacivanje baza i tabela.';
$strPrivDescDropTbl = 'Dozvoljava odbacivanje tabela.';
$strPrivDescExecute = 'Dozvoljava pokretanje sačuvanih procedura. Nema efekta u ovoj verziji MySQL-a.';
$strPrivDescFile = 'Dozvoljava uvoz podataka i njihov izvoz u datoteke.';
$strPrivDescGrant = 'Dozvoljava dodavanje korisnika i privilegija bez ponovnog učitavanja tabela privilegija.';
$strPrivDescIndex = 'Dozvoljava kreiranje i brisanje ključeva.';
$strPrivDescInsert = 'Dozvoljava umetanje i zamjenu podataka.';
$strPrivDescLockTables = 'Dozvoljava zaključavanje tabela tekućim procesima.';
$strPrivDescMaxConnections = 'Ograničava broj novih konekcija koje korisnik može ta otvori na sat.';
$strPrivDescMaxQuestions = 'Ograničava broj upita koje korisnik može da uputi serveru za sat.';
$strPrivDescMaxUpdates = 'Ograničava broj komandi koje menjaju tabele ili baze koje korisnik može da izvrši na sat.';
$strPrivDescProcess3 = 'Dozvoljava prekidanje procesa drugih korisnika.';
$strPrivDescProcess4 = 'Dozvoljava pregled kompletnih upita u listi procesa.';
$strPrivDescReferences = 'Nema efekta u ovoj verziji MySQL-a.';
$strPrivDescReload = 'Dozvoljava ponovno učitavanje podešavanja servera i pražnjenje keša servera.';
$strPrivDescReplClient = 'Daje pravo korisniku da pita gde su glavni/pomoćni serveri.';
$strPrivDescReplSlave = 'Potrebno zbog pomoćnih servera za replikaciju.';
$strPrivDescSelect = 'Dozvoljava čitanje podataka.';
$strPrivDescShowDb = 'Daje pristup kompletnoj listi baza.';
$strPrivDescShutdown = 'Dozvoljava gašenje servera.';
$strPrivDescSuper = ' Dozvoljava povezivanje iako je dostignut maksimalan broj dozvoljenih veza; Neophodno za većinu administrativnih opcija kao što su podešavanje globalnih promenljivih ili prekidanje procesa ostalih korisnika.';
$strPrivDescUpdate = 'Dozvoljava izmenu podataka.';
$strPrivDescUsage = 'Nema privilegija.';
$strPrivileges = 'Privilegije';
$strPrivilegesReloaded = 'Privilegije su uspešno ponovo učitane.';
$strProcesslist = 'Lista procesa';
$strProperties = 'Svojstva';
$strPutColNames = 'Stavi imena polja u prvi red';

$strQBE = 'Upit po primeru';
$strQBEDel = 'Del';
$strQBEIns = 'Ins';
$strQueryFrame = 'Prozor za upite';
$strQueryOnDb = 'SQL upit na bazi <b>%s</b>:';
$strQuerySQLHistory = 'SQL istorijat';
$strQueryStatistics = '<b>Statistike upita</b>: %s upita je postavljeno serveru od njegovog pokretanja.';
$strQueryTime = 'Upit je trajao %01.4f sekundi';
$strQueryType = 'Vrsta upita';
$strQueryWindowLock = 'Ne prepisuj ovaj upit izvan prozora';

$strReType = 'Ponovite unos';
$strReceived = 'Primljeno';
$strRecords = 'Zapisi';
$strReferentialIntegrity = 'Proveri referencijalni integritet:';
$strRelationNotWorking = 'Dodatne mogućnosti za rad sa povezanim tabelama su isključene. Da biste saznali zašto, kliknite %sovde%s.';
$strRelationView = 'Relacioni pogled';
$strRelationalSchema = 'Relaciona shema';
$strRelations = 'Relacije';
$strReloadFailed = 'Ponovno pokretanje MySQL-a nije uspelo.';
$strReloadMySQL = 'Ponovo pokreni MySQL';
$strReloadingThePrivileges = 'Ponovo učitavam privilegije';
$strRemoveSelectedUsers = 'Ukloni izabrane korisnike';
$strRenameTable = 'Promjeni ime tabele u ';
$strRenameTableOK = 'Tabeli %s promjenjeno ime u %s';
$strRepairTable = 'Popravi tabelu';
$strReplace = 'Zamijeni';
$strReplaceNULLBy = 'Zamijeni NULL sa';
$strReplaceTable = 'Zamijeni podatke u tabeli sa podatcima iz datoteke';
$strReset = 'Resetuj';
$strResourceLimits = 'Ograničenja resursa';
$strRevoke = 'Zabrani';
$strRevokeAndDelete = 'Obustavi sve aktivne privilegije korisnika i zatim ih obriši.';
$strRevokeAndDeleteDescr = 'Korisnici će i dalje imati USAGE privilegije dok se privilegije ponovo ne učitaju.';
$strRevokeMessage = 'Zabranili ste privilegije za %s';
$strRowLength = 'Dužina reda';
$strRowSize = 'Veličina reda';
$strRows = 'Redova';
$strRowsFrom = ' redova počev od reda';
$strRowsModeFlippedHorizontal = 'horizontalnom (rotirana zaglavlja)';
$strRowsModeHorizontal = 'horizontalnom';
$strRowsModeOptions = 'u %s modu i ponovi zaglavlje posle svakog %s reda';
$strRowsModeVertical = 'vertikalnom';
$strRowsStatistic = 'Statistike reda';
$strRunQuery = 'Izvrši SQL upit';
$strRunSQLQuery = 'Izvrši SQL upit(e) na bazi %s';
$strRunning = 'na serveru %s';
$strRussian = 'Ruski';

$strSQL = 'SQL';
$strSQLOptions = 'SQL opcije';
$strSQLParserBugMessage = 'Postoji mogućnost da ste pronašli gresku u SQL parseru. Molimo ispitajte svoj upit pažljivo, i provjerite da su navodnici ispravni i da ne nedostaju. Ostali mogući razlozi greške mogu biti da ste poslali binarni fajl van oblasti za običan tekst. Možete probati svoj upit u MySQL interfejsu komandne linije. Donja poruka o grešci MySQL servera, ako je ima, može vam pomoći u otkrivanju problema. Ako i dalje imate probleme ili ako parser ne uspjeva tamo gde uspeva interfejs komandne linije, svedite svoj SQL upit na jedan jedini upit koji stvara probleme i pošaljite nam izvještaj o grešci sa delom koda u donjoj REZ sekciji:';
$strSQLParserUserError = 'Izgleda da postoji greška u vašem SQL upitu. Ovde je poruka o greški MySQL servera, koja vam može pomoći u otkrivanju problema';
$strSQLQuery = 'SQL upit';
$strSQLResult = 'SQL rezultat';
$strSQPBugInvalidIdentifer = 'Neispravan identifikator';
$strSQPBugUnclosedQuote = 'Navodnik nije zatvoren';
$strSQPBugUnknownPunctuation = 'Nepoznat string interpunkcije';
$strSave = 'Sačuvaj';
$strSaveOnServer = 'Sačuvaj na server u direktorijum %s';
$strScaleFactorSmall = 'Faktor umanjenja je premali da bi shema stala na jednu stranu';
$strSearch = 'Pretraživanje';
$strSearchFormTitle = 'Pretraživanje baze';
$strSearchInTables = 'Unutar tabela:';
$strSearchNeedle = 'Riječi ili vrednosti koje se traže (džoker: "%"):';
$strSearchOption1 = 'bar jednu od riječi';
$strSearchOption2 = 'sve riječi';
$strSearchOption3 = 'tačan izraz';
$strSearchOption4 = 'kao regularni izraz';
$strSearchResultsFor = 'Rezultati pretrage za "<i>%s</i>" %s:';
$strSearchType = 'Traži:';
$strSecretRequired = 'Konfiguraciona datoteka zahtjeva tajnu lozinku (blowfish_secret).';
$strSelectADb = 'Izaberite bazu';
$strSelectAll = 'Izaberi sve';
$strSelectFields = 'Izaberi polja (najmanje jedno)';
$strSelectNumRows = 'u upitu';
$strSelectTables = 'Izaberi tabele';
$strSend = 'Sačuvaj kao datoteku';
$strSent = 'Poslato';
$strServer = 'Server';
$strServerChoice = 'Izbor servera';
$strServerStatus = 'Informacije o toku rada';
$strServerStatusUptime = 'Ovaj MySQL server radi već %s. Pokrenut je %s.';
$strServerTabProcesslist = 'Procesi';
$strServerTabVariables = 'Promjenljive';
$strServerTrafficNotes = '<b>Saobraćaj servera</b>: Tabele pokazuju statistike mrežnog saobraćaja na ovom MySQL serveru od njegovog pokretanja.';
$strServerVars = 'Serverske promenljive i podešavanja';
$strServerVersion = 'Verzija servera';
$strSessionValue = 'Vrijednost sesije';
$strSetEnumVal = 'Ako je polje "enum" ili "set", unesite vrijednosti u formatu: \'a\',\'b\',\'c\'...<br />Ako vam treba obrnuta kosa crta ("\\") ili apostrof ("\'") koristite ih u "izbjegnutom" (escaped) obliku (na primer \'\\\\xyz\' ili \'a\\\'b\').';
$strShow = 'Prikaži';
$strShowAll = 'Prikaži sve';
$strShowColor = 'Prikaži boju';
$strShowDatadictAs = 'Format riječnika podataka';
$strShowFullQueries = 'Prikaži kompletne upite';
$strShowGrid = 'Prikaži mrežu';
$strShowPHPInfo = 'Prikaži informacije o PHP-u';
$strShowTableDimension = 'Prikaži dimenzije tabele';
$strShowTables = 'Prikaži tabele';
$strShowThisQuery = 'Prikaži ponovo ovaj upit';
$strShowingRecords = 'Prikaz zapisa';
$strSimplifiedChinese = 'Pojednostavljeni kineski';
$strSingly = '(po jednom polju)';
$strSize = 'Veličina';
$strSort = 'Sortiranje';
$strSpaceUsage = 'Zauzeće';
$strSplitWordsWithSpace = 'Riječi se odvajaju razmakom (" ").';
$strStatCheckTime = 'Posljednja provjera';
$strStatCreateTime = 'Napravljeno';
$strStatUpdateTime = 'Posljednja izmjena';
$strStatement = 'Ime';
$strStatus = 'Status';
$strStrucCSV = 'CSV format';
$strStrucData = 'Struktura i podatci';
$strStrucDrop = 'Dodaj \'DROP TABLE\'';
$strStrucExcelCSV = 'CSV za MS Excel';
$strStrucOnly = 'Samo struktura';
$strStructPropose = 'Predloži strukturu tabele';
$strStructure = 'Struktura';
$strSubmit = 'Pošalji';
$strSuccess = 'Vaš SQL upit je uspešno izvršen';
$strSum = 'Ukupno';
$strSwedish = 'Švedski';
$strSwitchToTable = 'Pređi na kopiranu tabelu';

$strTable = 'Tabela';
$strTableComments = 'Komentari tabele';
$strTableEmpty = 'Ima tabele je prazno!';
$strTableHasBeenDropped = 'Tabela %s je odbačena';
$strTableHasBeenEmptied = 'Tabela %s je ispražnjena';
$strTableHasBeenFlushed = 'Tabela %s je osvežena';
$strTableMaintenance = 'Radnje na tabeli';
$strTableOfContents = 'Sadržaj';
$strTableOptions = 'Opcije tabele';
$strTableStructure = 'Struktura tabele';
$strTableType = 'Tip tabele';
$strTables = '%s tabela';
$strTblPrivileges = 'Privilegije vezane za tabele';
$strTextAreaLength = 'Zbog njehove veličine, polje<br />možda nećete moći da izmenite';
$strThai = 'Tajlandski ';
$strTheContent = 'Sadržaj datoteke je dodat u bazu.';
$strTheContents = 'Podatke sadržane u tabeli zameni sa podacima iz datoteke koji imaju identične primarne i jedinstvene (unique) ključeve.';
$strTheTerminator = 'Separator polja u datoteci.';
$strThisHost = 'Ovaj server';
$strThisNotDirectory = 'Ovo nije direktorijum';
$strThreadSuccessfullyKilled = 'Proces %s je uspješno prekinut.';
$strTime = 'Vrijeme';
$strToggleScratchboard = 'Uključuje/isključuje scratchboard';
$strTotal = 'ukupno';
$strTotalUC = 'Ukupno';
$strTraditionalChinese = 'Tradicionalni kineski';
$strTraffic = 'Saobraćaj';
$strTransformation_image_jpeg__inline = 'Prikazuje umanjenu sliku na koju je moguće kliknuti; opcije: širina, visina u pikselima (čuva originalni odnos)';
$strTransformation_image_jpeg__link = 'Prikazuje link ka ovoj slici (npr. direktno preuzimanje iz BLOB-a).';
$strTransformation_image_png__inline = 'Prikaži JPEG slike na strani';
$strTransformation_text_plain__dateformat = 'Uzima TIME, TIMESTAMP ili DATETIME polje i formatira ga koristeći lokalni oblik prikazivanja datuma. Prva opcija je ofset (u satima) koji se dodaje vremenskoj oznaci (podrazumevano: 0). Druga opcija je različit format datuma prema parametrima koji su dostupni za PHP-ov strftime().';
$strTransformation_text_plain__external = 'SAMO LINUX: Pokreće eksternu aplikaciju i popunjava podatke u poljima preko standardnog ulaza. Vraća standardni izlaz aplikacije. Podrazumevano je Tidy, za lepši prikaz HTML koda. Zbog sigurnosnih razloga, morate ručno izmeniti datoteku libraries/transformations/text_plain__external.inc.php i dodati alate koje želite da koristite. Prva opcija je broj programa koje želite da koristite, a druga su parametri programa. Ako se treći parametar postavi na 1 izlaz će biti konvertovan koristeći htmlspecialchars() (podrazumevano je 1). Ako je četvrti parametar postavljen na 1, NOWRAP će biti dodato ćeliji sa sadržajem tako da će izlaz biti prikazan bez izmena. (podrazumevano 1)';
$strTransformation_text_plain__formatted = 'Čuva originalno formatiranje polja. Escaping se ne vrši.';
$strTransformation_text_plain__imagelink = 'Prikazuje sliku i link, polje sadrži naziv datoteke; prva opcija je prefiks kao "http://domain.com/", druga opcija je širina u pikselima, treća je visina.';
$strTransformation_text_plain__link = 'Prikazuje link, polje sadrži naziv datoteke; prva opcija je prefiks kao "http://domain.com/", druga opcija je naslov za link.';
$strTransformation_text_plain__substr = 'Pokazuje samo deo stringa. Prva opcija je ofset koji definiše gde počinje izlaz vašeg teksta (podrazumevano 0). Druga opcija je ofset koji pokazuje koliko će teksta biti prikazano. Ako je nema, sav preostali tekst će biti prikazan. Treća opcija određuje koji će znaci biti dodati izlazu kada se prikaže podstring (podrazumevano: ...) .';
$strTransformation_text_plain__unformatted = 'Prikazuje HTML kod kao HTML entitete. HTML formatiranje se ne prikazuje.';
$strTruncateQueries = 'Prikaži skraćene upite';
$strTurkish = 'Turski';
$strType = 'Tip';

$strUkrainian = 'Ukrajinski';
$strUncheckAll = 'nijedno';
$strUnicode = 'Unikod';
$strUnique = 'Jedinstveni';
$strUnknown = 'nepoznat';
$strUnselectAll = 'ništa';
$strUpdComTab = 'Molimo pogledajte u dokumentaciji kako se ažurira tabela Column_comments';
$strUpdatePrivMessage = 'Ažurirali ste privilegije za %s.';
$strUpdateProfileMessage = 'Profil je promjenjen.';
$strUpdateQuery = 'Ažuriraj upit';
$strUsage = 'Zauzeće';
$strUseBackquotes = 'Koristi \' za ograničavanje imena polja';
$strUseHostTable = 'Koristi tabelu hosta';
$strUseTables = 'Koristi tabele';
$strUseTextField = 'Koristi tekst polje';
$strUseThisValue = 'Koristi ovu vrijednost';
$strUser = 'Korisnik';
$strUserAlreadyExists = 'Korisnik %s već postoji!';
$strUserEmpty = 'Ime korisnika nije unijeto!';
$strUserName = 'Ime korisnika';
$strUserNotFound = 'Izabrani korisnik nije pronađen u tabeli privilegija.';
$strUserOverview = 'Pregled korisnika';
$strUsersDeleted = 'Izabrani korisnici su uspješno obrisani.';
$strUsersHavingAccessToDb = 'Korisnici koji imaju pristup &quot;%s&quot;';

$strValidateSQL = 'Provjeri SQL';
$strValidatorError = 'SQL validator nije mogao da bude pokrenut. Proverite da li su instalirane neophodne PHP ekstenzije opisane u  %sdokumentaciji%s.';
$strValue = 'Vrijednost';
$strVar = 'Promjenljiva';
$strViewDump = 'Prikaži sadržaj (shemu) tabele';
$strViewDumpDB = 'Prikaži sadržaj (shemu) baze';
$strViewDumpDatabases = 'Prikaži sadržaj (shemu) baze';

$strWebServerUploadDirectory = 'direkcija za slanje web servera ';
$strWebServerUploadDirectoryError = 'Direkcija koju ste izabrali za slanje nije dostupna';
$strWelcome = 'Dobrodošli na %s';
$strWestEuropean = 'Zapadnoevropski';
$strWildcard = 'Džoker';
$strWindowNotFound = 'Odredišnji prozor pretraživača nije mogao da bude ažuriran. Možda ste zatvorili matični prozor, ili vaš preraživač onemogućava ažuriranje među prozorima zbog sigurnosnih podešavanja';
$strWithChecked = 'Označeno:';
$strWritingCommentNotPossible = 'Pisanje komentara nije moguće';
$strWritingRelationNotPossible = 'Upisivanje relacije nije moguće';
$strWrongUser = 'Pogrešno korisničko ime/lozinka. Ulaz nije dozvoljen.';

$strXML = 'XML';

$strYes = 'Da';

$strZeroRemovesTheLimit = 'Napomena: Postavljanje ovih opcija na 0 (nulu) uklanja limite.';
$strZip = '"zipovano"';

$strBookmarkAllUsers = 'Let every user access this bookmark';  //to translate
$strBookmarkOptions = 'Bookmark options';  //to translate

$strCheckOverhead = 'Check overheaded';  //to translate
$strConstraintsForDumped = 'Constraints for dumped tables';  //to translate
$strConstraintsForTable = 'Constraints for table';  //to translate
$strCreationDates = 'Creation/Update/Check dates';  //to translate

$strInternalNotNecessary = '* An internal relation is not necessary when it exists also in InnoDB.';  //to translate
$strInternalRelations = 'Internal relations';  //to translate

$strLatexCaption = 'Table caption';  //to translate
$strLatexContent = 'Content of table __TABLE__';  //to translate
$strLatexContinued = '(continued)';  //to translate
$strLatexContinuedCaption = 'Continued table caption';  //to translate
$strLatexIncludeCaption = 'Include table caption';  //to translate
$strLatexLabel = 'Label key';  //to translate
$strLatexStructure = 'Structure of table __TABLE__';  //to translate
$strLogServer = 'Server';  //to translate

$strPrintViewFull = 'Print view (with full texts)';  //to translate

$strSortByKey = 'Sort by key';  //to translate

$strUpgrade = 'You should upgrade to %s %s or later.';  //to translate

$strExcelEdition = 'Excel edition';  //to translate
$strDelayedInserts = 'Use delayed inserts';  //to translate
$strSQLExportType = 'Export type';  //to translate
$strAddConstraints = 'Add constraints';  //to translate
$strGeorgian = 'Georgian';  //to translate
$strCzechSlovak = 'Czech-Slovak';  //to translate
$strTransformation_application_octetstream__download = 'Display a link to download the binary data of a field. First option is the filename of the binary file. Second option is a possible fieldname of a table row containing the filename. If you provide a second option you need to have the first option set to an empty string';  //to translate
$strMaximumSize = 'Maximum size: %s%s';  //to translate
$strConnectionError = 'Cannot connect: invalid settings.';  //to translate
$strDropDatabaseStrongWarning = 'You are about to DESTROY a complete database!';  //to translate
$strAddHeaderComment = 'Add custom comment into header (\\n splits lines)';  //to translate
$strNeedPrimaryKey = 'You should define a primary key for this table.';  //to translate
$strIgnoreInserts = 'Use ignore inserts';  //to translate
$strAddIfNotExists = 'Add IF NOT EXISTS';  //to translate
$strCommentsForTable = 'COMMENTS FOR TABLE';  //to translate
$strMIMETypesForTable = 'MIME TYPES FOR TABLE';  //to translate
$strRelationsForTable = 'RELATIONS FOR TABLE';  //to translate
$strAfterInsertSame = 'Go back to this page';  //to translate
$strRenameDatabaseOK = 'Database %s has been renamed to %s';  //to translate
$strDatabaseEmpty = 'The database name is empty!';  //to translate
$strDBRename = 'Rename database to';  //to translate
$strOperator = 'Operator';  //to translate
$strEncloseInTransaction = 'Enclose export in a transaction';  //to translate
$strCalendar = 'Calendar';  //to translate
$strRefresh = 'Refresh';  //to translate
$strDefragment = 'Defragment table';  //to translate
$strNoRowsSelected = 'No rows selected';  //to translate
$strSpanish = 'Spanish';  //to translate
$strStrucNativeExcel = 'Native MS Excel data';  //to translate
$strDisableForeignChecks = 'Disable foreign key checks';  //to translate
$strServerNotResponding = 'The server is not responding';  //to translate
$strTheme = 'Theme / Style';  //to translate
$strTakeIt = 'take it';  //to translate
$strHexForBinary = 'Use hexadecimal for binary fields';  //to translate
$strIcelandic = 'Icelandic';  //to translate
$strLatvian = 'Latvian';  //to translate
$strPolish = 'Polish';  //to translate
$strRomanian = 'Romanian';  //to translate
$strSlovenian = 'Slovenian';  //to translate
$strTraditionalSpanish = 'Traditional Spanish';  //to translate
$strSlovak = 'Slovak';  //to translate
$strMySQLConnectionCollation = 'MySQL connection collation';  //to translate
?>

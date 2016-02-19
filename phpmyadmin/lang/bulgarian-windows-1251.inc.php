<?php
/* $Id: bulgarian-windows-1251.inc.php,v 2.36 2004/07/17 22:58:28 rabus Exp $ */

/**
 * Translated by Stanislav Yordanov <stanprog at stanprog.com>
 * Based on translation made by Georgi Georgiev <chutz at chubaka.homeip.net>
 */

$charset = 'windows-1251';
$text_dir = 'ltr';
$left_font_family = 'sans-serif';
$right_font_family = 'sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('�����', '��', '��', '��', '��', '��', '��');

$day_of_week = array('��', '��', '��', '��', '��', '��', '��');
$month = array('������', '��������', '����', '�����', '���', '���', '���', '������', '���������', '�������', '�������', '��������');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%e %B %Y � %H:%M';

$timespanfmt = '%s ����, %s ����, %s ������ � %s �������';

$strAPrimaryKey = '�e�e ������� �������� ���� ��� ';
$strAbortedClients = '����������';
$strAbsolutePathToDocSqlDir = '���� �������� ���������� ��� �� ��� ������� �� docSQL ������������';
$strAccessDenied = '������� ������';
$strAccessDeniedExplanation = 'phpMyAdmin �� ����� �� �� ������ ��� MySQL �������, �� ������� �������� ����������. ������ �� ��������� �����, ��������������� ��� � �������� � config.inc.php ����� � �� �� �������, �� �� ��������� �� ������������ ������������ �� �������������� �� MySQL �������.';
$strAction = '��������';
$strAddAutoIncrement = '�������� �� AUTO_INCREMENT';
$strAddConstraints = '�������� �� �����������';
$strAddDeleteColumn = '������/������ ������ �� ��������';
$strAddDeleteRow = '������/������ ��� �� ��������';
$strAddDropDatabase = '�������� �� DROP DATABASE';
$strAddHeaderComment = '�������� �� �������� � ������ (\\n ��� ���)';
$strAddIfNotExists = '�������� �� IF NOT EXISTS'; 
$strAddIntoComments = '������ � �����������';
$strAddNewField = '�������� �� ���� ����';
$strAddPrivilegesOnDb = '������ ���������� ��� �������� ���� �����';
$strAddPrivilegesOnTbl = '������ ���������� ��� �������� �������';
$strAddSearchConditions = '�������� ������� �� ������� (���� �� "where" �������):';
$strAddToIndex = ' &nbsp;%s&nbsp;������(�) ����(���)�������� ��� ������� ';
$strAddUser = '�������� �� ��� ����������.';
$strAddUserMessage = '��� ��������� ��� ����������.';
$strAddedColumnComment = '������� �������� ��� ������';
$strAddedColumnRelation = '�������� ������� ��� ������';
$strAdministration = '�������������';
$strAffectedRows = '��������� ������:';
$strAfter = '���� %s';
$strAfterInsertBack = '�� �����';
$strAfterInsertNewInsert = '������ ��� �����';
$strAfterInsertSame = '����� ��� ���� ��������';
$strAll = '������';
$strAllTableSameWidth = '��������� �� ������ ������� � ���� � ���� ������?';
$strAlterOrderBy = '���������� �� ��������� ��';
$strAnIndex = '���� ������� ������ �� %s';
$strAnalyzeTable = '����������� �� ���������';
$strAnd = '�';
$strAny = '�����';
$strAnyHost = '����� ����';
$strAnyUser = '����� ����������';
$strArabic = '�������';
$strArmenian = '��������';
$strAscending = '���������';
$strAtBeginningOfTable = '� �������� �� ���������';
$strAtEndOfTable = '� ���� �� ���������';
$strAttr = '��������';
$strAutodetect = '����������� ���������';
$strAutomaticLayout = '����������� ������';

$strBack = '�����';
$strBaltic = '���������';
$strBeginCut = 'BEGIN CUT';
$strBeginRaw = 'BEGIN RAW';
$strBinary = ' ������� ';
$strBinaryDoNotEdit = ' ������� - �� �� ��������� ';
$strBookmarkAllUsers = '���� ����� ���������� ��� ������ �� ���� bookmark';
$strBookmarkDeleted = 'Bookmark ���� ������.';
$strBookmarkLabel = '������';
$strBookmarkOptions = 'Bookmark �����';
$strBookmarkQuery = '��������� �� SQL-���������';
$strBookmarkThis = '������ ���� SQL-���������';
$strBookmarkView = '���� ���������';
$strBrowse = '�����������';
$strBrowseForeignValues = '����������� �� ��������(foreign) ���������';
$strBulgarian = '���������';
$strBzError = 'phpMyAdmin �� ���� �� ���������� �������(dump) ������ ������ � Bz2 ������������ � ���� ������ �� PHP. ������ �� ���������� �� ���������� ���������� �� <code>$cfg[\'BZipDump\']</code> ����������� � ���������������� ���� �� ����� phpMyAdmin �� <code>FALSE</code>. ��� ������ �� �� ���������� ������������� �� Bz2 �����������, �� ������ �� ����������� �� ��-���� ������ �� PHP. ����� ��������� %s �� ������ ����������.';
$strBzip = '"bzip-����"';

$strCSVOptions = 'CSV �����';
$strCalendar = '��������'; 
$strCannotLogin = '�� ���� �� �� ����� ��� MySQL �������';
$strCantLoad = '�� ���� �� ������ ������������ %s,<br />���� ��������� �������������� �� PHP';
$strCantLoadRecodeIconv = '�� ���� �� �� ������� iconv ��� recode ������������ ���������� �� ������������ �� ������ �� �������(charset), �������������� PHP ����, �� �� ��������� ���������� �� ���� ���������� ��� �������� �������������� �� ������ �� �������(charset) � phpMyAdmin.';
$strCantRenameIdxToPrimary = '�� ���� �� ����������� ������� �� PRIMARY!';
$strCantUseRecodeIconv = '�� ���� �� �� �������� ���� iconv ���� libiconv ���� recode_string ��������� ������ ������������ �� ������������ �� ��������. ��������� �������������� �� PHP.';
$strCardinality = '����������';
$strCarriage = '������ �� ���� �� ���: \\r';
$strCaseInsensitive = '�������������� ��� ���������';
$strCaseSensitive = '������������ ��� ���������';
$strCentralEuropean = '��������� ����������';
$strChange = '���������';
$strChangeCopyMode = '������ ��� ���������� ��� ������ ���������� � ...';
$strChangeCopyModeCopy = '... ������ ������.';
$strChangeCopyModeDeleteAndReload = ' ... ������ ������ �� ��������� �� ������������ � ���� ���� ��������� ������������.';
$strChangeCopyModeJustDelete = ' ... ������ ������ �� ��������� �� �������������.';
$strChangeCopyModeRevoke = ' ... ������ ������ ������� ���������� �� ������ � ���� ���� �� ������.';
$strChangeCopyUser = '������� �� ����� ������������ / �������� �� ����������';
$strChangeDisplay = '�������� ������ �� ���������';
$strChangePassword = '����� �� ��������';
$strCharset = '����� �� �������';
$strCharsetOfFile = '����� �� �������(Charset) �� �����:';
$strCharsets = '������ �� �������';
$strCharsetsAndCollations = '������ �� ������� � �������';
$strCheckAll = '�������� ������';
$strCheckPrivs = '�������� �� ������������';
$strCheckPrivsLong = '������� ������������ �� ���� ����� &quot;%s&quot;.';
$strCheckTable = '�������� �� ���������';
$strChoosePage = '���� �������� �������� �� �����������';
$strColComFeat = '��������� �� ��������� ��� ��������';
$strCollation = '�������';
$strColumnNames = '��� �� ������';
$strColumnPrivileges = '���������� ���������� �� ��������';
$strCommand = '�������';
$strComments = '���������';
$strCommentsForTable = '��������� �� �������';
$strCompleteInserts = '����� INSERT-�';
$strCompression = '���������';
$strConfigFileError = 'phpMyAdmin �� ���� �� ������� ����������������� �� ����!<br />���� ���� �� �� ����� ��� PHP ������ ����������� ������ � ���� ��� �� ���� �� ������ �����.<br />���� ��������� ���������������� ���� �������� ���� ���������� ����� ��-���� � ��������� ����������� �� ������ ����� PHP �����. � ��-������ ���� �� ��������, ������ ������� ������� ��� ����� � �������.<br />��� �� ������ ������ ��������, ������ � �����.';
$strConfigureTableCoord = '���� �������������� ������������ �� ������� %s';
$strConnectionError = '�������� �� ���� �� ���� �����������: ��������� ���������.';
$strConnections = '��������';
$strConstraintsForDumped = '����������� �� �������� �������';
$strConstraintsForTable = '����������� �� �������';
$strCookiesRequired = '����� ������� �� ���������� "Cookies".';
$strCopyTable = '�������� �� ������� (���� �� �����<b>.</b>�������):';
$strCopyTableOK = '������� %s ���� �������� � %s.';
$strCopyTableSameNames = '�� ���� �� �� ������ ��������� ��� ���� ��!';
$strCouldNotKill = 'phpMyAdmin �� ���� �� �������� ������� %s. �������� ���� � ���� ���������.';
$strCreate = '������';
$strCreateIndex = '��������� �� ������ ����� &nbsp;%s&nbsp;������';
$strCreateIndexTopic = '������ ��� ������';
$strCreateNewDatabase = '��������� �� ���� ��';
$strCreateNewTable = '������ ���� ������� � �� %s';
$strCreatePage = '������ ���� ��������';
$strCreatePdfFeat = '��������� �� PDF-�';
$strCreationDates = '���������/����������/�������� �� ����';
$strCriteria = '��������';
$strCroatian = '���������';
$strCyrillic = '��������';
$strCzech = '�����';
$strCzechSlovak = '������������';

$strDBComment = '�������� ��� ������ �� �����: ';
$strDBGContext = '��������';
$strDBGContextID = '���������� ID';
$strDBGHits = '���������';
$strDBGLine = '�����';
$strDBGMaxTimeMs = '����. �����, ms';
$strDBGMinTimeMs = '���. �����, ms';
$strDBGModule = '�����';
$strDBGTimePerHitMs = '�����/���������, ms';
$strDBGTotalTimeMs = '���� �����, ms';
$strDBRename = '������������ �� ������ ����� ��'; 
$strDanish = '������';
$strData = '�����';
$strDataDict = '������ �� �������';
$strDataOnly = '���� �����';
$strDatabase = '��';
$strDatabaseEmpty = '����� �� ������ ����� � ������!';
$strDatabaseExportOptions = '����� �� ������������ �� ���� �����';
$strDatabaseHasBeenDropped = '������ ����� %s ���� �������.';
$strDatabaseNoTable = '������ ����� �� ������� �������!';
$strDatabases = '���� �� �����';
$strDatabasesDropped = '%s ���� ����� ���� ������� �������.';
$strDatabasesStats = ' ���������� �� ������ �����';
$strDatabasesStatsDisable = '������� ����������';
$strDatabasesStatsEnable = '������� ����������';
$strDatabasesStatsHeavyTraffic = '���������: ������������� �� ���������� �� ������ ����� ���� �� ������ ����� ����� ������ ����� ��� ������� � MySQL �������.';
$strDbPrivileges = '���������� ���������� �� ������ �����';
$strDbSpecific = '���������� �� ������ �����';
$strDefault = '�� ������������';
$strDefaultValueHelp = '�� ����������� �� ������������, ���� �������� ���� ���� ��������, ��� ������� ����� ��� ��������, ����������� ������� ������: a';
$strDefragment = '��������������� �� �������';
$strDelOld = '�������� �������� ��� ���������� ��� ������� ����� ���� �� �����������. ������� �� �� �������� ���� ����������?';
$strDelayedInserts = '���������� �� �������� ���������';
$strDelete = '������';
$strDeleteAndFlush = '��������� �� ������������� � ���� ���� ������������ �� ������������.';
$strDeleteAndFlushDescr = '���� � ���-������ �����, �� �������������� �� ������������ ���� �� ������ �������� �����.';
$strDeleted = '����� ���� ������';
$strDeletedRows = '������� ������:';
$strDeleting = '��������� �� %s';
$strDescending = '���������';
$strDescription = '��������';
$strDictionary = '������';
$strDisableForeignChecks = '����������� �� ���������� �� ������ ���� (foreign key)';
$strDisabled = '���������';
$strDisplayFeat = '������ �������������';
$strDisplayOrder = '��������� ���������:';
$strDisplayPDF = '������ PDF �����';
$strDoAQuery = '������� "��������� �� ������" (������ ��  ����������: "%")';
$strDoYouReally = '������������ �� ������� �� ��������� ��������';
$strDocu = '������������';
$strDrop = '�����������';
$strDropDatabaseStrongWarning = '��� �� ��������� ������ ���� �����!';
$strDropSelectedDatabases = '������ ��������� ���� �����';
$strDropUsersDb = '��������� �� ������� ����� ����� ���� ����� ���� ���� �� �������������.';
$strDumpSaved = '�������(����) ���� �������� ��� ���� %s.';
$strDumpXRows = '����-�� %s ���� ���� �������� �� %s.';
$strDumpingData = '���� (�����) �� ������� � ���������';
$strDynamic = '���������';

$strEdit = '�����������';
$strEditPDFPages = '����������� �� PDF ��������';
$strEditPrivileges = '����������� �� ������������';
$strEffective = '���������';
$strEmpty = '����������';
$strEmptyResultSet = 'MySQL ����� ������ �������� (�.�. ���� ������).';
$strEnabled = '���������';
$strEncloseInTransaction = '��������� �� �������� � ����������';
$strEnd = '����';
$strEndCut = 'END CUT';
$strEndRaw = 'END RAW';
$strEnglish = '���������';
$strEnglishPrivileges = ' ���������: ������� �� ������������ �� MySQL �� �������� �� ���������. ';
$strError = '������';
$strEstonian = '��������';
$strExcelEdition = 'Excel-��� ��������';
$strExcelOptions = '����� �� Excel';
$strExecuteBookmarked = '���������� �� �������� SQL-������';
$strExplain = 'Explain SQL';
$strExport = '������������';
$strExtendedInserts = '��������� INSERT-�';
$strExtra = '������������';

$strFailedAttempts = '��������� �� �����';
$strField = '����';
$strFieldHasBeenDropped = '������ %s ���� �������';
$strFields = '������';
$strFieldsEmpty = ' ������ �� �������� � ������! ';
$strFieldsEnclosedBy = '�������� �� �������� ���';
$strFieldsEscapedBy = '���������� �� ����������� �������';
$strFieldsTerminatedBy = '�������� ��������� ���';
$strFileAlreadyExists = '������ %s ���� ���������� �� �������, ������� ����� �� ����� ��� �������� ������� �� ������������.';
$strFileCouldNotBeRead = '������ �� ���� �� ���� ��������';
$strFileNameTemplate = '������ �� ��������� ���';
$strFileNameTemplateHelp = '����������� __DB__ �� ��� �� ������ �����, __TABLE__ �� ��� �� ��������� � ������� �� %sstrftime%s �� �������� �� ������� �� �������, ���� ����������� �� ���� �������� �����������. ����� ���� ����� �� ���� �������.';
$strFileNameTemplateRemember = '��������� �� �������';
$strFixed = '��������';
$strFlushPrivilegesNote = '���������: phpMyAdmin ����� ��������������� ���������� �������� �� ��������� �� ������������ �� MySQL. ������������ �� ���� ������� ���� �� �� ��������� �� ������������ ����� �������� ������� ��� ��� ���� �� ��������� ������� �� ����. � ���� ������, ������ �� %s����������� ������������%s ����� �� ����������.';
$strFlushTable = '�������� ���� �� ��������� ("FLUSH")';
$strFormEmpty = '������ �������� ��� ������ �� �������!';
$strFormat = '������';
$strFullText = '����� ��������';
$strFunction = '�������';

$strGenBy = '���������� ��';
$strGenTime = '����� �� ����������';
$strGeneralRelationFeat = '���� ����������� �� ���������';
$strGeorgian = '���������';
$strGerman = '������';
$strGlobal = '��������';
$strGlobalPrivileges = '�������� ����������';
$strGlobalValue = '�������� ��������';
$strGo = '����������';
$strGrantOption = '������';
$strGreek = '������';
$strGzip = '"gzip-����"';

$strHasBeenAltered = '���� ���������.';
$strHasBeenCreated = '���� ���������.';
$strHaveToShow = '������ �� �������� ���� ���� ������ �� ���������';
$strHebrew = '�����';
$strHome = '������';
$strHomepageOfficial = '����������� ��� �������� �� phpMyAdmin ';
$strHost = '����';
$strHostEmpty = '����� �� ����� � ������!';
$strHungarian = '��������';

$strId = 'ID';
$strIdxFulltext = '�������������';
$strIfYouWish = '��� ������� �� �������� ���� ����� ������ �� ���������, ������� ������ �� �������� ��������� ��� �������.';
$strIgnore = '���������';
$strIgnoringFile = '���������� �� ���� %s';
$strImportDocSQL = '���������� docSQL ���������';
$strImportFiles = '����������� �� �������';
$strImportFinished = '������������� �������';
$strInUse = '�����';
$strIndex = '������';
$strIndexHasBeenDropped = '������� %s ���� ������';
$strIndexName = '��� �� �������&nbsp;:';
$strIndexType = '��� �� �������&nbsp;:';
$strIndexes = '�������';
$strInnodbStat = 'InnoDB ���������';
$strInsecureMySQL = '������ ��������������� ���� ������� ��������� (root ��� ������), ����� ������������ �� ���������������� ������ �� MySQL �� ������������. ������ MySQL ������ � ��������� � ���� �� ������������ � ���� �� ���� ����� ������. T����� �� �������� ���� ����� � �����������.';
$strInsert = '��������';
$strInsertAsNewRow = '������ ���� ��� ���';
$strInsertNewRow = '������ ��� ���';
$strInsertTextfiles = '�������� �� �������� ������� � ���������';
$strInsertedRowId = '�������� ID �� ����:';
$strInsertedRows = '�������� ����:';
$strInstructions = '����������';
$strInternalNotNecessary = '* ���������� ������� �� � ���������� ������ ���������� ���� � InnoDB.';
$strInternalRelations = '�������� �������';

$strJapanese = '�������';
$strJumpToDB = '����� ��� ���� ����� &quot;%s&quot;.';
$strJustDelete = '���������� �� ������������� �� ��������� � ������������.';
$strJustDeleteDescr = '&quot;���������&quot; ����������� �� ���� ������ �� ������� ����� ����������, ������ �� �� ���������� ������������.';

$strKeepPass = '�� �� �� ����� ��������';
$strKeyname = '��� �� �����';
$strKill = '����';
$strKorean = '��������';

$strLaTeX = 'LaTeX';
$strLaTeXOptions = 'LaTeX �����';
$strLandscape = '��������';
$strLatexCaption = '�������� �� ���������';
$strLatexContent = '���������� �� ������� __TABLE__';
$strLatexContinued = '(�����������)';
$strLatexContinuedCaption = '����������� �� ���������� �� ���������';
$strLatexIncludeCaption = '��������� �� �������� �� ���������';
$strLatexLabel = '������ �� �����';
$strLatexStructure = '��������� �� ������� __TABLE__';
$strLengthSet = '�������/��������*';
$strLimitNumRows = '���� �� ��������';
$strLineFeed = '������ �� ���� �� ���: \\n';
$strLinesTerminatedBy = '�������� ��������� �';
$strLinkNotFound = '�������� �� �� ��������';
$strLinksTo = '���� ���';
$strLithuanian = '��������';
$strLoadExplanation = '���� ����� � ������ �� ������������, �� ������ �� �� ��������� ��� �� ������ ��������.';
$strLoadMethod = 'LOAD �����';
$strLocalhost = '�������';
$strLocationTextfile = '�������������� �� ��������� ����';
$strLogPassword = '������:';
$strLogServer = '������';
$strLogUsername = '���:';
$strLogin = '����';
$strLoginInformation = '���������� �� �������';
$strLogout = '����� �� ���������';

$strMIMETypesForTable = 'MIME ������ �� �������';
$strMIME_MIMEtype = 'MIME-���';
$strMIME_available_mime = '�������� MIME-������';
$strMIME_available_transform = '�������� �������������';
$strMIME_description = '��������';
$strMIME_nodescription = '���� �������� �� ���� �������������.<br />���� �������� �� ��� ������ ������� ���� ����� ����� %s.';
$strMIME_transformation = '��������� �������������';
$strMIME_transformation_note = '�� ������� �� ���������� ����� �� ��������������� � ������� MIME-type ������������� �������� �� %s�������� �� ���������������%s';
$strMIME_transformation_options = '����� �� ���������������';
$strMIME_transformation_options_note = '���� �������� ����������� �� ������� �� ��������������� ���� ���������� ������� ������: \'a\',\'b\',\'c\'...<br />��� ������ �� ��������� ������� ��������� ����� ("\") ��� �������� ������� ("\'") ����� ���� ���������, ��������� ���� ��� ������������ ������� ��������� ����� (�������� \'\\\\xyz\' ��� \'a\\\'b\').';
$strMIME_without = 'MIME-types �������� � �������� ����� �� ���������� ������� ������� �� �������������';
$strMaximumSize = '���������� ������: %s%s';
$strModifications = '��������� ���� ���������';
$strModify = '�������';
$strModifyIndexTopic = '������� �� ������';
$strMoreStatusVars = '����� ���������� �� �����������';
$strMoveTable = '����������� �� ������� ��� (���� �� �����<b>.</b>�������):';
$strMoveTableOK = '��������� %s ���� ���������� ��� %s.';
$strMoveTableSameNames = '�� ���� �� �� �������� ��������� ��� ���� ��!';
$strMultilingual = '�����������';
$strMustSelectFile = '������ �� �������� ���� �� ��������.';
$strMySQLCharset = 'MySQL ����� �� �������';
$strMySQLReloaded = 'MySQL � ����������.';
$strMySQLSaid = 'MySQL ��������: ';
$strMySQLServerProcess = 'MySQL %pma_s1% � ��������� �� %pma_s2% ���� %pma_s3%';
$strMySQLShowProcess = 'MySQL �������';
$strMySQLShowStatus = '���������� �� ����������� �� MySQL �������';
$strMySQLShowVars = '�������� ���������� �� MySQL';

$strName = '���';
$strNeedPrimaryKey = '������ �� ���������� �������� ����(primary key) �� ���� �������.';
$strNext = '�������';
$strNo = '��';
$strNoDatabases = '���� ���� �� �����';
$strNoDatabasesSelected = '���� ������� ���� �����.';
$strNoDescription = '���� ��������';
$strNoDropDatabases = '"DROP DATABASE" ������� � ���������.';
$strNoExplain = '�������� Explain SQL';
$strNoFrames = 'phpMyAdmin � �� ���������� ��� ���������� �������, ����� �������� <b>frames</b>.';
$strNoIndex = '�� � ��������� ������!';
$strNoIndexPartsDefined = '�� �� ���������� ����� �� ������!';
$strNoModification = '���� �������';
$strNoOptions = '���� ������ ���� �����';
$strNoPassword = '���� ������';
$strNoPermission = '��� ������� ���� ����� �� ����� �� ����� %s.';
$strNoPhp = '��� PHP ���';
$strNoPrivileges = '���� ����������';
$strNoQuery = '���� SQL ������!';
$strNoRights = '� ������� �� ����������� � ���������� ����� �� �� �� �������� ���!';
$strNoRowsSelected = '���� ������� ������';
$strNoSpace = '������������ �������� ������������ �� ��������� �� ����� %s.';
$strNoTablesFound = '� ������ ����� ���� �������.';
$strNoUsersFound = '���� ����������(�).';
$strNoValidateSQL = '�������� Validate SQL';
$strNone = '����';
$strNotNumber = '���� �� � �����!';
$strNotOK = '�� � OK';
$strNotSet = '�������  <b>%s</b> �� � �������� ��� �� � ���������� � %s';
$strNotValidNumber = ' �� � ������� ����� �� ���!';
$strNull = '������';
$strNumSearchResultsInTable = '%s ����������(�) � ������� <i>%s</i>';
$strNumSearchResultsTotal = '<b>����:</b> <i>%s</i> ����������(�)';
$strNumTables = '�������';

$strOK = 'OK';
$strOftenQuotation = '���������� �������. �� ����� ��������, �� ���� ������ char � varchar �� ��������� � �������.';
$strOperations = '��������';
$strOperator = '��������';
$strOptimizeTable = '������������ �� ���������';
$strOptionalControls = '�� �����. ���������� ��� �� �� ����� ��� ����� ��������� �������.';
$strOptionally = '�� �����';
$strOr = '���';
$strOverhead = '�������� �����';
$strOverwriteExisting = '������������ �� �������������� �������';

$strPHP40203 = '��� ���������� PHP 4.2.3, ����� ��� �������� ��� � �����-������� ��������� (mbstring). ����� ���������� �� PHP ���� 19404. �� � �������������� �� ���������� ���� ������ �� PHP � phpMyAdmin.';
$strPHPVersion = '������ �� PHP';
$strPageNumber = '����� �� ����������:';
$strPaperSize = '������ �� ��������';
$strPartialText = '�������� ��������';
$strPassword = '������';
$strPasswordChanged = '�������� �� %s ���� ��������� �������.';
$strPasswordEmpty = '�������� � ������!';
$strPasswordNotSame = '�������� �� � ������!';
$strPdfDbSchema = '������� �� ���� ����� "%s" - �������� %s';
$strPdfInvalidTblName = '������� "%s" �� ����������!';
$strPdfNoTables = '���� �������';
$strPerHour = '�� ���';
$strPerMinute = '�� ������';
$strPerSecond = '�� �������';
$strPhoneBook = '��������� ��������';
$strPhp = '������ PHP ���';
$strPmaDocumentation = 'phpMyAdmin ������������';
$strPmaUriError = '�� <tt>$cfg[\'PmaAbsoluteUri\']</tt> ������ �� �� ������ �������� � ���������������� ����!';
$strPortrait = '���������';
$strPos1 = '������';
$strPrevious = '��������';
$strPrimary = 'PRIMARY';
$strPrimaryKeyHasBeenDropped = ' ������� ���� ���� ������.';
$strPrimaryKeyName = '����� �� ������� ���� ������ �� �... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>������</b> �� � ����� �� <b>� ���������� ��</b> ������� ����!)';
$strPrint = '���������';
$strPrintView = '������ �� �����';
$strPrintViewFull = '������� �� ����� (� ������� ��������)';
$strPrivDescAllPrivileges = '������� ������ ���������� ����� GRANT.';
$strPrivDescAlter = '��������� ��������� �� ����������� �� ������������ �������.';
$strPrivDescCreateDb = '��������� ��������� �� ���� ���� ����� � �������.';
$strPrivDescCreateTbl = '��������� ��������� �� ���� �������.';
$strPrivDescCreateTmpTable = '��������� ����������� �� �������� �������.';
$strPrivDescDelete = '��������� ��������� �� �����.';
$strPrivDescDropDb = '��������� ��������� �� ���� ����� � �������.';
$strPrivDescDropTbl = '��������� ��������� �� �������.';
$strPrivDescExecute = '��������� ������������ �� ��������� ���������; ���� ����� � ���� ������ �� MySQL.';
$strPrivDescFile = '��������� ����������� �� ����� �� � ������������ �� ����� ��� �������.';
$strPrivDescGrant = '��������� �������� �� ����������� � ���������� ��� ������������ �� ��������� � ������������.';
$strPrivDescIndex = '��������� ��������� � ���������� �� �������.';
$strPrivDescInsert = '��������� �������� � �������� �� �����.';
$strPrivDescLockTables = '��������� ���������� �� ������� �� �������� �����.';
$strPrivDescMaxConnections = '���������� ���� �� ������ ��������, ����� ����������� ���� �� ������ �� ���.';
$strPrivDescMaxQuestions = '���������� ���� �� ��������, ����� ����������� ���� �� ������� ��� ������� �� ���.';
$strPrivDescMaxUpdates = '���������� ���� �� ���������, ����� �������� ����� ������� ��� ���� �����, ����� ����� ���������� ���� �� �������� �� ���.';
$strPrivDescProcess3 = '��������� ��������� �� ������� �� ����� �����������.';
$strPrivDescProcess4 = '��������� ������� �� ������ ������ � ������� � ���������.';
$strPrivDescReferences = '���� ����� � ���� ������ �� MySQL.';
$strPrivDescReload = '��������� ������������ �� ���������� ��������� � ����������(flashing) �� ���� �� �������.';
$strPrivDescReplClient = '���� ������� �� ���������� �� ���� ���� �� slaves / masters.';
$strPrivDescReplSlave = '����� �� replication slaves.';
$strPrivDescSelect = '��������� ������ �� �����.';
$strPrivDescShowDb = '���� ������ �� ������ ������ �� ������ �����.';
$strPrivDescShutdown = '��������� ������� �� �������.';
$strPrivDescSuper = '��������� ���������, ���� ��� � ��������� ����������� ���� �� ����������; ������� �� �� �������� ��������������� ��������, ���� ������������ �� �������� ���������� ��� ������� �� ����� �� ����� �����������.';
$strPrivDescUpdate = '��������� ������� �� �����.';
$strPrivDescUsage = '���� ����������.';
$strPrivileges = '����������';
$strPrivilegesReloaded = '������������ ���� ����������� �������.';
$strProcesslist = '������ �� ���������';
$strProperties = '��������';
$strPutColNames = '������� ������� �� �������� �� ������ ���';

$strQBE = '��������� �� ������';
$strQBEDel = '������';
$strQBEIns = '������';
$strQueryFrame = '�������� �� ������';
$strQueryOnDb = 'SQL-������ ��� ������ �� ����� <b>%s</b>:';
$strQuerySQLHistory = 'SQL-����������';
$strQueryStatistics = '<b>���������� �� ��������</b>: �� ����� � ���������, %s ������ �� ��������� ��� �������.';
$strQueryTime = '�������� ���� %01.4f �������';
$strQueryType = '��� �� ��������';
$strQueryWindowLock = '�� ������������� ���� ������ ����� ���� ��������';

$strReType = '������';
$strReceived = '��������';
$strRecords = '������';
$strReferentialIntegrity = '�������� �� ����������� �� ��������';
$strRefresh = '������������';
$strRelationNotWorking = '�������������� ����������� �� ������ ��� �������� (linked) ������� �� ������������. �� �� ��������� ���� �������� %s���%s.';
$strRelationView = '������ �� ���������';
$strRelationalSchema = '���������� �����';
$strRelations = '�������';
$strRelationsForTable = '������� �� �������';
$strReloadFailed = '��������� ���� �� ������������ �� MySQL.';
$strReloadMySQL = '������������ �� MySQL';
$strReloadingThePrivileges = '������������ �� ������������';
$strRemoveSelectedUsers = '������������ �� ��������� �����������';
$strRenameDatabaseOK = '������ ����� %s ���� ������������ �� %s';
$strRenameTable = '������������ �� ��������� ��';
$strRenameTableOK = '������� %s ���� ������������ �� %s';
$strRepairTable = '��������� �� ���������';
$strReplace = '�������';
$strReplaceNULLBy = '������� NULL �';
$strReplaceTable = '������� ������� �� ��������� � ������� �� �����';
$strReset = '�������';
$strResourceLimits = '�������� �����������';
$strRevoke = '������';
$strRevokeAndDelete = '������ �� ������� ������� ���������� �� ������������� � ���� ���� ���������.';
$strRevokeAndDeleteDescr = '������������� ��� ��� �� ���� USAGE ���������� ������ �� �� ���������� ������������.';
$strRevokeMessage = '��� ��������� ������������ �� %s';
$strRowLength = '������� �� ����';
$strRowSize = ' ������ �� ��� ';
$strRows = '������';
$strRowsFrom = '���� ���������� ��';
$strRowsModeFlippedHorizontal = '������������ (�������� ������)';
$strRowsModeHorizontal = '������������';
$strRowsModeOptions = '� %s ��� � �������� ������� �� �������� ���� ����� %s<br />';
$strRowsModeVertical = '����������';
$strRowsStatistic = '���������� �� ��������';
$strRunQuery = '������� ��������';
$strRunSQLQuery = '���������� SQL ������/������ ��� ���� �� ����� %s';
$strRunning = '������ �� %s';
$strRussian = '�����';

$strSQL = 'SQL';
$strSQLExportType = '��� �� ��������������';
$strSQLOptions = 'SQL �����';
$strSQLParserBugMessage = '��� �������� ���������� �� ��� �������� ��� � SQL �������. ���� �������� ��-�����, � ��������� ������������ �� ���������. ����� �������� ������� �� �������� ���� �� ����, �� ���������� ���� � �������� ��� ����� �������� ��������� � �������. ������ ���� ���� �� �� ������� �� ��������� �������� ���� ����������� �� �������� ��� �� MySQL. �������� ���������� �� MySQL ������� ��-����, ��� ��� ������, ���� ���� �� �� ������� ��� ����������� �� ��������. ��� ��� ��� ����� �������� ��� ������� ���� ������ ��� ������ ���������� �� ��������� ��� �� ����� ������, ���� ���������� ������ SQL ������ ���� �� ����������� ������, � ��������� ��������� �� ��� � ������� �� ������� � CUT �������� ��-����:';
$strSQLParserUserError = '�������, �� ��� ������ � SQL �������� ��. �������� ������� �� MySQL ������� �� ����, ��� ��� ������, �� ������ �� �� ������� � ��������������� �� ��������';
$strSQLQuery = 'SQL-���������';
$strSQLResult = 'SQL ��������';
$strSQPBugInvalidIdentifer = '��������� �������������';
$strSQPBugUnclosedQuote = '����������� �������';
$strSQPBugUnknownPunctuation = '��������� ���������� �� ������';
$strSave = '������';
$strSaveOnServer = '��������� �� ������� � ���������� %s';
$strScaleFactorSmall = '������ � ������ ����� �� �� �� ������ ������� �� ���� ��������';
$strSearch = '�������';
$strSearchFormTitle = '������� � ������ �����';
$strSearchInTables = '� ���������:';
$strSearchNeedle = '���� ��� ��������� �� ������� (������ �� ����������: "%"):';
$strSearchOption1 = '���� ���� �� ������';
$strSearchOption2 = '������ ����';
$strSearchOption3 = '������� �����';
$strSearchOption4 = '���� ��������� �����';
$strSearchResultsFor = '��������� �� ��������� �� "<i>%s</i>" %s:';
$strSearchType = '������:';
$strSecretRequired = '���������������� ���� ��� ����� �� ����� ������ (blowfish_secret).';
$strSelectADb = '���� �������� ���� �� �����';
$strSelectAll = '���������� ������';
$strSelectFields = '�������� ���� (������� ����):';
$strSelectNumRows = '� �����������';
$strSelectTables = '������ �������';
$strSend = '���������';
$strSent = '���������';
$strServer = '������';
$strServerChoice = '����� �� ������';
$strServerNotResponding = '���� ������� �� �������';
$strServerStatus = '���������� �� ����������� �� MySQL �������';
$strServerStatusUptime = '���� MySQL ������ ������ �� %s. ��������� � �� %s.';
$strServerTabProcesslist = '�������';
$strServerTabVariables = '����������';
$strServerTrafficNotes = '<b>������ �� �������</b>: ���� ������� �������� ���������� �� �������� ������ �� MySQL ������� �� ����� � ���������.';
$strServerVars = '�������� ���������� � ���������';
$strServerVersion = '������ �� �������';
$strSessionValue = '�������� �� �������';
$strSetEnumVal = '��� ���� �� ������ � "enum" ��� "set", ���� �������� ����������� ����������� ���� ������: \'a\',\'b\',\'c\'...<br />��� � ���������� �� ������� ������� ����� ("\") ��� �������� ("\'") ����� ���� ���������, ������� ������� ����� ���� ��� (��������:  \'\\\\xyz\' ��� \'a\\\'b\').';
$strShow = '������';
$strShowAll = '������ ������';
$strShowColor = '������ ����';
$strShowDatadictAs = '������ �� ������� �� �������';
$strShowFullQueries = '��������� �� ������� ������';
$strShowGrid = '������ �����';
$strShowPHPInfo = '���������� �� PHP ';
$strShowTableDimension = '������ ������������ �� ���������';
$strShowTables = '������ ���������';
$strShowThisQuery = ' ��������� �� �������� ������';
$strShowingRecords = '������� ������ ';
$strSimplifiedChinese = '�������� ��������';
$strSingly = '(����������)';
$strSize = '������';
$strSort = '���������';
$strSortByKey = '��������� �� ����';
$strSpaceUsage = '���������� �����';
$strSpanish = '��������';
$strSplitWordsWithSpace = '������ ������ �� �� �������� � �������� (" ").';
$strStatCheckTime = '�������� ��������';
$strStatCreateTime = '���������';
$strStatUpdateTime = '�������� ����������';
$strStatement = '���������';
$strStatus = '��������';
$strStrucCSV = 'CSV �����';
$strStrucData = '����������� � �������';
$strStrucDrop = '�������� �� \'������ ���������\'';
$strStrucExcelCSV = 'CSV �� Ms Excel �����';
$strStrucOnly = '���� �����������';
$strStructPropose = '�������� ��������� �� ���������';
$strStructure = '���������';
$strSubmit = '����������';
$strSuccess = '������ SQL-��������� ���� ��������� �������';
$strSum = '����';
$strSwedish = '�������';
$strSwitchToTable = '������������ ��� ���������� �������';

$strTable = '������� ';
$strTableComments = '��������� ��� ���������';
$strTableEmpty = '����� �� ��������� � ������!';
$strTableHasBeenDropped = '��������� %s ���� �������';
$strTableHasBeenEmptied = '��������� %s ���� ����������';
$strTableHasBeenFlushed = '���� �� ������� %s ���� ���������';
$strTableMaintenance = '��������� �� ���������';
$strTableOfContents = '����������';
$strTableOptions = '����� �� ���������';
$strTableStructure = '��������� �� �������';
$strTableType = '��� �� ���������';
$strTables = '%s �������(�)';
$strTblPrivileges = '���������� �� ��������� ����������';
$strTextAreaLength = ' ������ ��������� ��,<br /> ���� ���� ���� �� �� � ������������ ';
$strThai = '����������';
$strTheContent = '������������ �� ����� ���� �����������.';
$strTheContents = '������������ �� ����� �������� ������������ �� ��������� �� ������ � ��������� �������� ��� �������� �������.';
$strTheTerminator = '������ �� ���� �� ����.';
$strThisHost = '���� ����';
$strThisNotDirectory = '���� �� ���� ����������';
$strThreadSuccessfullyKilled = '����� %s ���� ������� ����������.';
$strTime = '�����';
$strTotal = '����';
$strTotalUC = '����';
$strTraditionalChinese = '����������� ��������';
$strTraffic = '������';
$strTransformation_application_octetstream__download = '������� ������ �� ������� �� ��������� ����� � �������. ������� ����� � ��������� ��� �� �������� ����. ������� ����� � ���������� ��� �� ������ �� ���� �� ��������� ��������� ��������� ���. ��� �������� ����� �����, ������ ������� �� ����� �� � ���������� �� ������ ���.';
$strTransformation_image_jpeg__inline = '������� thumbnail; �����: ������, �������� � ������� (������� ������������ ���������)';
$strTransformation_image_jpeg__link = '������� �������� �� ���� ����������� (�� �������� �������, i.e.).';
$strTransformation_image_png__inline = '��� image/jpeg: inline';
$strTransformation_text_plain__dateformat = '����� ���� TIME, TIMESTAMP ��� DATETIME � �� ��������� ���� �������� �������� ������ �� ����. ������� ����� � ������������ (� ������) ����� �� ���� �������� ��� ������� (�� ������������: 0). ������� ����� ������������ �������� ������ �� ������ � ���������� �� ����������� �� ��������� �� PHP - strftime().';
$strTransformation_text_plain__external = '���� �� ������: �������� �������� ���������� � ������� ������� � �������� ���� ����������� ����. ����� ����������� ����� �� ������������. �� ������������ � Tidy, �� �� ������ HTML ����. �� ����������� �� ���������, ������ ����� �� ����������� ����� libraries/transformations/text_plain__external.inc.php � �� �������� ���������� �� ����� ��� ����������� �� ����� ����������. ������� ����� ������ � ������ �� ���������� ����� ����� ������ �� ���������� � ������� ����� �� ����������� �� ����������. ��� ������� ���������� � ��������� � 1, �� ���������� ������ ����������� htmlspecialchars() (�� ������������ � 1). ��� ���������� ��������� � ��������� � 1, �� ������� NOWRAP �� �������� �� ������������, ���� �� ����� ����� �� ���� ������� ��� �������������� (�� ������������ � 1)';
$strTransformation_text_plain__formatted = '������� ������������ ����������� �� ������.';
$strTransformation_text_plain__imagelink = '������� ����������� � ������ �� ������ ��������� ������� ���; ������� ����� � ������� ���� "http://domain.com/", ������� ����� � �������� � �������, ������� � ����������.';
$strTransformation_text_plain__link = '������� �������� �� ������ ��������� ������� ���; ������� ����� � ������� ���� "http://domain.com/", ������� ����� � ���������� �� ��������.';
$strTransformation_text_plain__substr = '������� ���� �� ���. ������� ����� � ������������ �� ����� �� �� �������� ������ ����� (�� ������������ � 0). ������� ����� ������ ����� ����� �� �� ������. ��� � ������, �� ����� ����� ������� �����. ������� ����� ������ ��� ������� �� ����� �������� (�� ������������: ...) .';
$strTransformation_text_plain__unformatted = '������� HTML ���� ���� HTML �������. ��� HTML �����������.';
$strTruncateQueries = '����������� �� ���������� ������';
$strTurkish = '������';
$strType = '���';

$strUkrainian = '���������';
$strUncheckAll = '����������� ������';
$strUnicode = 'Unicode';
$strUnique = '��������';
$strUnknown = '��������';
$strUnselectAll = '������������ ������';
$strUpdComTab = '���� ����������� ������������ � �������������� ������� ���� ��� �� �������� ������ Column_comments �������';
$strUpdatePrivMessage = '��� ���������� ������������ �� %s.';
$strUpdateProfileMessage = '������� ���� �������.';
$strUpdateQuery = '������� �����������';
$strUpgrade = '������ �� ����������� ��� %s %s ��� ��-�����.';
$strUsage = '����������';
$strUseBackquotes = '���������� �� ������� ������� ����� ����� �� ������� � ������';
$strUseHostTable = '��������� ������� Host';
$strUseTables = '��������� ���������';
$strUseTextField = '��������� ���������� ����';
$strUseThisValue = '����������� ���� ��������';
$strUser = '����������';
$strUserAlreadyExists = '���������� %s ���� ����������!';
$strUserEmpty = '��������������� ��� � ������!';
$strUserName = '������������� ���';
$strUserNotFound = '�������� ���������� �� ���� ������ � ��������� � ������������.';
$strUserOverview = '������� �� �������������';
$strUsersDeleted = '��������� ����������� ���� ������� �������.';
$strUsersHavingAccessToDb = '����������� ����� ���� ������ �� &quot;%s&quot;';

$strValidateSQL = '��������� SQL-�';
$strValidatorError = 'SQL ���������� �� ���� �� ���� �������������. ���� ��������� ���� ��� ����������� ������������ PHP ����������, ���� ����� � ������� � %s��������������%s.';
$strValue = '��������';
$strVar = '����������';
$strViewDump = '���� (�����) �� ���������';
$strViewDumpDB = '���� (�����) �� ��';
$strViewDumpDatabases = '������� �� ���� (�����) �� ���� �����';

$strWebServerUploadDirectory = '������������ �� upload �� ��� �������';
$strWebServerUploadDirectoryError = '������������ ����� ��� ������� �� upload �� ���� �� ���� ����������';
$strWelcome = '����� ����� � %s';
$strWestEuropean = '������� ����������';
$strWildcard = '������ �� ����������';
$strWindowNotFound = '��������� �� �������� �� ���� �� ���� �������. ���� �� ��� ��������� ���������� �� �������� ��� ��������� �� � �������� ���������� �� ����� �� ���� �������� � ���� �� ����������� �� ���������';
$strWithChecked = '������ ��� �������:';
$strWritingCommentNotPossible = '������ �� �������� �� � ��������';
$strWritingRelationNotPossible = '������ �� ��������� �� � ��������';
$strWrongUser = '������ ���/������. ������ �������.';

$strXML = 'XML';

$strYes = '��';

$strZeroRemovesTheLimit = '���������: �������������� �� ���� ����� � 0 (����) �������� �������������.';
$strZip = '"zip-����"';

// To translate:

$strCheckOverhead = 'Check overheaded';  //to translate

$strIgnoreInserts = 'Use ignore inserts';  //to translate

$strStrucNativeExcel = 'Native MS Excel data';  //to translate

$strTakeIt = 'take it';  //to translate
$strTheme = 'Theme / Style';  //to translate
$strToggleScratchboard = 'toggle scratchboard';  //to translate

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

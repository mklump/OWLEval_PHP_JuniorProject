<?php
/* $Id: chinese_simplified-utf-8.inc.php,v 2.0 2004/07/30 19:19:28 rabus Exp $ */

/**
 * Last translation by: Funda Wang <fundawang@en2china.com>
 */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$left_font_family = 'simsun, 宋体';
$right_font_family = 'simsun';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('字节', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('周日', '周一', '周二', '周三', '周四', '周五', '周六');
$month = array('一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%Y 年 %m 月 %d 日 %H:%M';

$timespanfmt = '%s 天 %s 小时，%s 分 %s 秒';

$strAPrimaryKey = '主键已经添加到 %s';
$strAbortedClients = '中止';
$strAbsolutePathToDocSqlDir = '请输入 docSQL 目录在 Web 服务器的绝对路径';
$strAccessDenied = '访问被拒绝';
$strAccessDeniedExplanation = 'phpMyAdmin 试图连接到 MySQL 服务器，但服务器拒绝连接。您应该检查 config.inc.php 中的主机、用户名和密码，并且确定这些信息与 MySQL 服务器的管理员所给出的信息一致。';
$strAction = '操作';
$strAddAutoIncrement = '添加 AUTO_INCREMENT 值';
$strAddDeleteColumn = '添加/删除字段列';
$strAddDeleteRow = '添加/删除条件行';
$strAddDropDatabase = '添加 DROP DATABASE';
$strAddIntoComments = '添加进注释';
$strAddNewField = '添加新字段';
$strAddPrivilegesOnDb = '在下列数据库添加权限';
$strAddPrivilegesOnTbl = '在下列表添加权限';
$strAddSearchConditions = '添加搜索条件(“where”语句的主体)：';
$strAddToIndex = '添加到 &nbsp;%s&nbsp; 列';
$strAddUser = '添加新用户';
$strAddUserMessage = '您已添加了一个新用户。';
$strAddedColumnComment = '已添加列注释';
$strAddedColumnRelation = '已添加列关系';
$strAdministration = '管理';
$strAffectedRows = '影响列数:';
$strAfter = '于 %s 之后';
$strAfterInsertBack = '后退到上一页';
$strAfterInsertNewInsert = '插入新的一行';
$strAll = '全部';
$strAllTableSameWidth = '以相同宽度显示所有表吗?';
$strAlterOrderBy = '更改表顺序，依据';
$strAnIndex = '索引已经添加到 %s';
$strAnalyzeTable = '分析表';
$strAnd = '与';
$strAny = '任意';
$strAnyHost = '任意主机';
$strAnyUser = '任意用户';
$strArabic = '阿拉伯语';
$strArmenian = '亚美尼亚语';
$strAscending = '递增';
$strAtBeginningOfTable = '于表开头';
$strAtEndOfTable = '于表结尾';
$strAttr = '属性';
$strAutodetect = '自动检测';
$strAutomaticLayout = '自动套用格式';

$strBack = '返回';
$strBaltic = '巴拉克语';
$strBeginCut = '开始剪切';
$strBeginRaw = '开始原文';
$strBinary = '二进制';
$strBinaryDoNotEdit = '二进制 - 无法编辑';
$strBookmarkDeleted = '书签已经删除。';
$strBookmarkLabel = '标签';
$strBookmarkQuery = '已加书签的 SQL 查询';
$strBookmarkThis = '将此 SQL 查询加为书签';
$strBookmarkView = '只查看';
$strBrowse = '浏览';
$strBulgarian = '保加利亚语';
$strBzError = 'phpMyAdmin 无法压缩转存，原因是此版本 php 中的 Bz2 模块损坏。强烈将 phpMyAdmin 配置文件中的 <code>$cfg[\'BZipDump\']</code> 设置为 <code>FALSE</code>。如果您想使用 Bz2 压缩功能，请更新 php 的版本。详情请参看 php 错误报告 %s。';
$strBzip = '"bzipped"';

$strCSVOptions = 'CSV 选项';
$strCannotLogin = '无法登入 MySQL 服务器';
$strCantLoad = '无法装入 %s 扩展，<br />请检查 PHP 配置';
$strCantLoadRecodeIconv = '无法装入 iconv 或者进行字符集转换所需的重编码扩展程序，请配置 php 允许使用这些扩展或者在 phpMyAdmin 中禁用字符集转换功能。';
$strCantRenameIdxToPrimary = '无法将索引更名为 PRIMARY!';
$strCantUseRecodeIconv = '装入扩展报告时 iconv, libiconv 和 recode_string 都无法使用。请检查您的 php 配置。';
$strCardinality = '基数';
$strCarriage = '回车: \\r';
$strCaseInsensitive = '不区分大小写';
$strCaseSensitive = '区分大小写';
$strCentralEuropean = '中欧';
$strChange = '更改';
$strChangeCopyMode = '创建带有相同权限的新用户并 ...';
$strChangeCopyModeCopy = '... 保留旧用户。';
$strChangeCopyModeDeleteAndReload = ' ... 从用户表中删除旧用户，然后重新装入权限。';
$strChangeCopyModeJustDelete = ' ... 从用户表中删除旧用户。';
$strChangeCopyModeRevoke = ' ... 收回旧用户的所有激活权限，然后删除旧用户。';
$strChangeCopyUser = '更改登录信息/复制用户';
$strChangeDisplay = '选择要显示的字段';
$strChangePassword = '更改密码';
$strCharset = '字符集';
$strCharsetOfFile = '文件的字符集:';
$strCharsets = '字符集';
$strCharsetsAndCollations = '字符集和整理';
$strCheckAll = '全选';
$strCheckPrivs = '检查权限';
$strCheckPrivsLong = '检查数据库“%s”的权限。';
$strCheckTable = '检查表';
$strChoosePage = '请选择需要编辑的页号';
$strColComFeat = '显示列注解';
$strCollation = '整理';
$strColumnNames = '列名';
$strColumnPrivileges = '按列指定权限';
$strCommand = '命令';
$strComments = '注释';
$strCompleteInserts = '完整插入';
$strCompression = '压缩';
$strConfigFileError = 'phpMyAdmin 无法读取您的配置文件!<br />这可能是因为 php 发现了语法错误或 php 未能找到文档。<br />请直接使用下面的链接调用配置文件，然后读取您收到的 php 错误提示。通常的错误都是因为某处漏了引号或分号。<br />如果您看到的是一个空白页，则代表没有任何问题。';
$strConfigureTableCoord = '请配置表 %s 的坐标';
$strConnections = '连接';
$strCookiesRequired = 'Cookies 必须启用才能登入。';
$strCopyTable = '将表复制到(数据库名<b>.</b>表名):';
$strCopyTableOK = '表 %s 已经成功复制为 %s。';
$strCopyTableSameNames = '无法将表复制为相同名称!';
$strCouldNotKill = 'phpMyAdmin 无法杀死线程 %s。可能该线程已经关闭。';
$strCreate = '创建';
$strCreateIndex = '在第 &nbsp;%s&nbsp; 列创建索引';
$strCreateIndexTopic = '创建新索引';
$strCreateNewDatabase = '创建一个新的数据库';
$strCreateNewTable = '在数据库 %s 中创建一个新表';
$strCreatePage = '创建新页';
$strCreatePdfFeat = '创建 PDF';
$strCriteria = '条件';
$strCroatian = '克罗地亚语';
$strCyrillic = '西里尔语';
$strCzech = '捷克语';

$strDBComment = '数据库注释: ';
$strDBGContext = '上下文';
$strDBGContextID = '上下文 ID';
$strDBGHits = '次数';
$strDBGLine = '行';
$strDBGMaxTimeMs = '最大时间，毫秒';
$strDBGMinTimeMs = '最小时间，毫秒';
$strDBGModule = '模块';
$strDBGTimePerHitMs = '时间/次，毫秒';
$strDBGTotalTimeMs = '总计时间，毫秒';
$strDanish = '丹麦语';
$strData = '数据';
$strDataDict = '数据字典';
$strDataOnly = '只有数据';
$strDatabase = '数据库';
$strDatabaseExportOptions = '数据库导出选项';
$strDatabaseHasBeenDropped = '数据库 %s 已被删除。';
$strDatabaseNoTable = '此数据库中没有表!';
$strDatabases = '数据库';
$strDatabasesDropped = '已经成功删除了 %s 个数据库。';
$strDatabasesStats = '数据库统计';
$strDatabasesStatsDisable = '禁用统计';
$strDatabasesStatsEnable = '启用统计';
$strDatabasesStatsHeavyTraffic = '注意：在此启用数据库统计可能导致 Web 服务器和 MySQL 服务器之间的流量骤增。';
$strDbPrivileges = '按数据库指定权限';
$strDbSpecific = '按数据库指定';
$strDefault = '默认';
$strDefaultValueHelp = '对于默认值，请只输入单个值，不要加反斜线或引号，请用此格式: a';
$strDelOld = '当前页所引用的表不存在了。您是否想要删除这些引用?';
$strDelete = '删除';
$strDeleteAndFlush = '删除用户并重新读取权限。';
$strDeleteAndFlushDescr = '这是一个最清洁的做法，但重新读取权限需一段时间。';
$strDeleted = '该行已经被删除。';
$strDeletedRows = '已删除行数:';
$strDeleting = '正在删除 %s';
$strDescending = '递减';
$strDescription = '描述';
$strDictionary = '字典';
$strDisabled = '已禁用';
$strDisplayFeat = '显示特性';
$strDisplayOrder = '显示顺序';
$strDisplayPDF = '显示 PDF 大纲';
$strDoAQuery = '执行“按例查询”(通配符:“%”)';
$strDoYouReally = '您真的要';
$strDocu = '文档';
$strDrop = '删除';
$strDropSelectedDatabases = '删除选中数据库';
$strDropUsersDb = '删除与用户名称相同的数据库。';
$strDumpSaved = '转存已经保存到文件 %s 中了。';
$strDumpXRows = '转存 %s 行，从记录 #%s 开始。';
$strDumpingData = '导出表中的数据';
$strDynamic = '动态';

$strEdit = '编辑';
$strEditPDFPages = '编辑 PDF 页';
$strEditPrivileges = '编辑权限';
$strEffective = '有效';
$strEmpty = '清空';
$strEmptyResultSet = 'MySQL 返回的查询结果为空(即零行)。';
$strEnabled = '已启用';
$strEnd = '结束';
$strEndCut = '结束剪切';
$strEndRaw = '结束原文';
$strEnglish = '英语';
$strEnglishPrivileges = ' 注意：MySQL 权限名称会以英文显示 ';
$strError = '错误';
$strEstonian = '爱沙尼亚语';
$strExcelOptions = 'Excel 选项';
$strExecuteBookmarked = '执行书签中的查询';
$strExplain = '解释 SQL';
$strExport = '导出';
$strExtendedInserts = '扩展插入';
$strExtra = '额外';

$strFailedAttempts = '尝试失败';
$strField = '字段';
$strFieldHasBeenDropped = '字段 %s 已被删除';
$strFields = '字段数';
$strFieldsEmpty = ' 字段总数是空的! ';
$strFieldsEnclosedBy = '包裹字段的字符';
$strFieldsEscapedBy = '转义字段的字符';
$strFieldsTerminatedBy = '分隔字段的字符';
$strFileAlreadyExists = '文件 %s 已经存在于服务器上，请更改文件名或者选中覆盖选项。';
$strFileCouldNotBeRead = '文件无法读取';
$strFileNameTemplate = '文件名模板';
$strFileNameTemplateHelp = '使用 __DB__ 代表数据库名，__TABLE__ 代表表名，使用%s任何 strftime%s 选项指定时间，扩展名会自动添加。任何其它文本都会被保留。';
$strFileNameTemplateRemember = '记住模板';
$strFixed = '固定';
$strFlushPrivilegesNote = '注意：phpMyAdmin 直接由 MySQL 权限表取得用户权限。如果用户手动更改表，表内容将可能与服务器使用的用户权限有异。在这种情况下，您应在继续前%s重新载入权限%s。';
$strFlushTable = '强迫更新资料表("FLUSH")';
$strFormEmpty = '表单内缺少值!';
$strFormat = '格式';
$strFullText = '完整文字';
$strFunction = '函数';

$strGenBy = '生成者';
$strGenTime = '生成日期';
$strGeneralRelationFeat = '一般关系特性';
$strGerman = '德语';
$strGlobal = '全局';
$strGlobalPrivileges = '全局权限';
$strGlobalValue = '全局值';
$strGo = '执行';
$strGrantOption = '授权';
$strGreek = '希腊语';
$strGzip = '"gzipped"';

$strHasBeenAltered = '已经被修改。';
$strHasBeenCreated = '已经建立。';
$strHaveToShow = '您需要最少选择显示一列';
$strHebrew = '希伯来语';
$strHome = '主目录';
$strHomepageOfficial = 'phpMyAdmin 官方网站';
$strHost = '主机';
$strHostEmpty = '主机名称是空的!';
$strHungarian = '匈牙利语';

$strId = 'ID'; // use eng
$strIdxFulltext = '全文搜索';
$strIfYouWish = '如果您仅仅要装入表中的几列，请给出用逗号分隔的字段列表。';
$strIgnore = '忽略';
$strIgnoringFile = '忽略文件 %s';
$strImportDocSQL = '导入 docSQL 文档';
$strImportFiles = '导入文件';
$strImportFinished = '导入完成';
$strInUse = '使用中';
$strIndex = '索引';
$strIndexHasBeenDropped = '索引 %s 已被删除';
$strIndexName = '索引名称&nbsp;:';
$strIndexType = '索引类型&nbsp;:';
$strIndexes = '索引';
$strInnodbStat = 'InnoDB 状态';
$strInsecureMySQL = '您配置文件中的设定与 MySQL 默认权限账户对应(没有密码的 root)。您的 MySQL 服务器使用默认值运行当然没有问题，不过这样的话，被入侵的可能性会很大，您真的应该先补上这个安全漏洞。';
$strInsert = '插入';
$strInsertAsNewRow = '以新行插入';
$strInsertNewRow = '插入新行';
$strInsertTextfiles = '从文本文件中提取数据，插入到表';
$strInsertedRowId = '插入行 id:';
$strInsertedRows = '插入的行数:';
$strInstructions = '指示';

$strJapanese = '日语';
$strJumpToDB = '跳到数据库“%s”。';
$strJustDelete = '只从权限数据库删除用户。';
$strJustDeleteDescr = '“删除”的用户仍然能像往常一样登入数据库，直至重新载入权限。';

$strKeepPass = '请不要更改密码';
$strKeyname = '键名';
$strKill = 'Kill'; //should expressed in English
$strKorean = '朝鲜语';

$strLaTeX = 'LaTeX';  // use eng
$strLaTeXOptions = 'LaTeX 选项';
$strLandscape = '横向';
$strLengthSet = '长度/值*';
$strLimitNumRows = '每页行数';
$strLineFeed = '换行: \\n';
$strLinesTerminatedBy = '行终止的字符';
$strLinkNotFound = '找不到链接';
$strLinksTo = '链接到';
$strLithuanian = '立陶宛语';
$strLoadExplanation = '默认情况下选中的是最好的模式，但是如果失败的话，您也可以进行更改。';
$strLoadMethod = 'LOAD 模式';
$strLocalhost = '本地';
$strLocationTextfile = '文本文件的位置';
$strLogPassword = '密码:';
$strLogUsername = '登入名称:';
$strLogin = '登入';
$strLoginInformation = '登入信息';
$strLogout = '登出';

$strMIME_MIMEtype = 'MIME 类型';
$strMIME_available_mime = '可用的 MIME 类型';
$strMIME_available_transform = '可用的变换';
$strMIME_description = '描述';
$strMIME_nodescription = '此变换无可用的描述。<br />详细功能请询问 %s 的作者。';
$strMIME_transformation = '浏览器变换';
$strMIME_transformation_note = '要获得可用变换选项的清单及对应的 MIME 类型变换，请单击%s变换描述%s';
$strMIME_transformation_options = '变换选项';
$strMIME_transformation_options_note = '请使用此格式输入变换选项的值: \'a\',\'b\',\'c\'...<br />如果您需要在值中输入反斜线(“\”)或者单引号(“\'”)，请在前面加上反斜线(如 \'\\\\xyz\' 或 \'a\\\'b\')。';
$strMIME_without = '以斜体打印的 MIME 类型没有单独的变换函数';
$strModifications = '修改已经保存。';
$strModify = '修改';
$strModifyIndexTopic = '修改索引';
$strMoreStatusVars = '更多状态变量';
$strMoveTable = '将表移动到(数据库名<b>.</b>表名):';
$strMoveTableOK = '表 %s 已经移动到 %s。';
$strMoveTableSameNames = '无法将表移动为相同名称!';
$strMultilingual = '多语言';
$strMustSelectFile = '您应该选择您想要插入的文件。';
$strMySQLCharset = 'MySQL 字符集';
$strMySQLReloaded = 'MySQL 重新启动完成。';
$strMySQLSaid = 'MySQL 返回:';
$strMySQLServerProcess = 'MySQL %pma_s1% 在 %pma_s2% 以 %pma_s3% 的身份执行';
$strMySQLShowProcess = '显示进程';
$strMySQLShowStatus = '显示 MySQL 的运行信息';
$strMySQLShowVars = '显示 MySQL 的系统变量';

$strName = '名字';
$strNext = '下一个';
$strNo = '否';
$strNoDatabases = '无数据库';
$strNoDatabasesSelected = '没有选中数据库。';
$strNoDescription = '无描述';
$strNoDropDatabases = '已经禁用“DROP DATABASE”语句。';
$strNoExplain = '略过解释 SQL';
$strNoFrames = 'phpMyAdmin 更适合在支持<b>框架</b>的浏览器中使用。';
$strNoIndex = '没有已定义的索引!';
$strNoIndexPartsDefined = '没有定义的索引部分!';
$strNoModification = '无更改';
$strNoOptions = '这种格式并无选项';
$strNoPassword = '无密码';
$strNoPermission = 'Web 服务器不允许保存文件 %s。';
$strNoPhp = '无 PHP 代码';
$strNoPrivileges = '无权限';
$strNoQuery = '无 SQL 查询!';
$strNoRights = '您现在没有足够的权限在此出现!';
$strNoSpace = '没有足够的空间保存文件 %s。';
$strNoTablesFound = '数据库中没有表。';
$strNoUsersFound = '找不到用户。';
$strNoValidateSQL = '略过校验 SQL';
$strNone = '无';
$strNotNumber = '这不是一个数字!';
$strNotOK = '不好';
$strNotSet = '<b>%s</b> 表找不到或还未在 %s 设定';
$strNotValidNumber = ' 不是有效的行数!';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s 个匹配项 - 于表 <i>%s</i> 中';
$strNumSearchResultsTotal = '<b>总计:</b> <i>%s</i> 个匹配项';
$strNumTables = '个表';

$strOK = '确定';
$strOftenQuotation = '通常为引号。可选意味着只有 char 和 varchar 类型的字段才需要用此字符包裹起来。';
$strOperations = '操作';
$strOptimizeTable = '优化表';
$strOptionalControls = '可选。控制如何读写特殊字符。';
$strOptionally = '可选';
$strOr = '或';
$strOverhead = '多余';
$strOverwriteExisting = '覆盖已有文件';

$strPHP40203 = '您正使用 PHP 版本 4.2.3，该版本有一个双字节字符(mbstring)的严重错误。请参阅 PHP 臭虫报告 19404。phpMyAdmin 并不建议使用这个版本的 PHP。';
$strPHPVersion = 'PHP 版本';
$strPageNumber = '页号:';
$strPaperSize = '纸张大小';
$strPartialText = '部分文字';
$strPassword = '密码';
$strPasswordChanged = '%s 的密码已成功更改。';
$strPasswordEmpty = '密码是空的!';
$strPasswordNotSame = '密码并非相同!';
$strPdfDbSchema = '“%s”数据库大纲 - 第 %s 页';
$strPdfInvalidTblName = '表“%s”不存在!';
$strPdfNoTables = '没有表';
$strPerHour = '每小时';
$strPerMinute = '每分钟';
$strPerSecond = '每秒';
$strPhoneBook = '电话本';
$strPhp = '创建 PHP 代码';
$strPmaDocumentation = 'phpMyAdmin 文档';
$strPmaUriError = '必须在您的配置文件中设定 <tt>$cfg[\'PmaAbsoluteUri\']</tt> 指令!';
$strPortrait = '纵向';
$strPos1 = '开始';
$strPrevious = '前一个';
$strPrimary = '主键';
$strPrimaryKeyHasBeenDropped = '主键已被删除';
$strPrimaryKeyName = '主键的名称必须称为 PRIMARY!';
$strPrimaryKeyWarning = '(“PRIMARY”<b>必须</b>是主键的名称，并且主键必须<b>唯一</b>!)';
$strPrint = '打印';
$strPrintView = '打印预览';
$strPrivDescAllPrivileges = '包括所有权限除了授权 (GRNANT)。';
$strPrivDescAlter = '允许修改现有表的结构。';
$strPrivDescCreateDb = '允许创建新数据库和表。';
$strPrivDescCreateTbl = '允许创建新表。';
$strPrivDescCreateTmpTable = '允许创建暂时表。';
$strPrivDescDelete = '允许删除数据。';
$strPrivDescDropDb = '允许删除数据库和表。';
$strPrivDescDropTbl = '允许删除表。';
$strPrivDescExecute = '允许运行存储过程；在此版本的 MySQL 中无效。';
$strPrivDescFile = '允许从文件中导入数据以及将数据导出至文件。';
$strPrivDescGrant = '允许添加用户和权限，而不允许重新装入权限表。';
$strPrivDescIndex = '允许创建和删除索引。';
$strPrivDescInsert = '允许插入和替换数据。';
$strPrivDescLockTables = '允许锁住当前线索的表。';
$strPrivDescMaxConnections = '限制用户每小时打开的新连接数。';
$strPrivDescMaxQuestions = '限制用户每小时可发送的查询数。';
$strPrivDescMaxUpdates = '限制用户每小时可执行的将会更改任何表或数据库的命令数。';
$strPrivDescProcess3 = '允许杀死其它用户的进程。';
$strPrivDescProcess4 = '允许查看进程列表中的完整查询。';
$strPrivDescReferences = '在此版本的 MySQL 中无效。';
$strPrivDescReload = '允许重新装入服务器设置并倒空服务器的缓存。';
$strPrivDescReplClient = '用户有权询问仆人/主人在哪里。';
$strPrivDescReplSlave = '回复仆人所需。';
$strPrivDescSelect = '允许读取数据。';
$strPrivDescShowDb = '允许访问完整的数据库列表。';
$strPrivDescShutdown = '允许关闭服务器。';
$strPrivDescSuper = '允许在达到最大允许数目时仍进行连接；大多数像设置全局变量或杀死其它用户线程这样的管理操作必需。';
$strPrivDescUpdate = '允许更改数据。';
$strPrivDescUsage = '无权限。';
$strPrivileges = '权限';
$strPrivilegesReloaded = '权限已经成功装入。';
$strProcesslist = '进程列表';
$strProperties = '属性';
$strPutColNames = '将字段名称放在首行';

$strQBE = '查询';
$strQBEDel = '删除';
$strQBEIns = '添加';
$strQueryFrame = '查询窗口';
$strQueryOnDb = '在数据库 <b>%s</b> 执行 SQL 语句:';
$strQuerySQLHistory = 'SQL 历史';
$strQueryStatistics = '<b>查询统计</b>: 自从启动后，服务器共收到了 %s 次查询。';
$strQueryTime = '查询花费 %01.4f 秒';
$strQueryType = '查询方式';
$strQueryWindowLock = '不从窗口外覆盖此查询';

$strReType = '重新输入';
$strReceived = '已收到';
$strRecords = '记录数';
$strReferentialIntegrity = '检查引用完整性:';
$strRelationNotWorking = '使用链接表的额外特性尚未激活。要查出原因，请单击%s此处%s。';
$strRelationView = '关系查看';
$strRelationalSchema = '关系大纲';
$strRelations = '关系';
$strReloadFailed = 'MySQL 重启失败。';
$strReloadMySQL = '重启 MySQL';
$strReloadingThePrivileges = '重新装入权限';
$strRemoveSelectedUsers = '删除选中用户';
$strRenameTable = '将表改名为';
$strRenameTableOK = '表 %s 名字已经被改成 %s。';
$strRepairTable = '修复表';
$strReplace = '替换';
$strReplaceNULLBy = '将 NULL 替换为';
$strReplaceTable = '将表的数据用此文件替换:';
$strReset = '重置';
$strResourceLimits = '资源限制';
$strRevoke = '收回';
$strRevokeAndDelete = '收回用户的所有激活权限，然后删除用户。';
$strRevokeAndDeleteDescr = '用户仍然拥有 USAGE 权限，直到重新装入权限。';
$strRevokeMessage = '您已收回 %s 的权限';
$strRowLength = '行长度';
$strRowSize = ' 行大小 ';
$strRows = '行数';
$strRowsFrom = '行，开始行数:';
$strRowsModeFlippedHorizontal = '水平(旋转标题)';
$strRowsModeHorizontal = '水平';
$strRowsModeOptions = '以 %s 模式显示，并且在 %s 个单元格后重复标题';
$strRowsModeVertical = '垂直';
$strRowsStatistic = '行统计';
$strRunQuery = '提交查询';
$strRunSQLQuery = '在数据库 %s 运行 SQL 查询';
$strRunning = '运行于 %s';
$strRussian = '俄语';

$strSQL = 'SQL'; // should express in english
$strSQLOptions = 'SQL 选项';
$strSQLParserBugMessage = '有可能您发现了 SQL 分析器的 bug。请仔细检查您的查询，包括引号是否正确及是否匹配。其它可能的失败原因可能由于您上传了超过引用文本区域外的二进制数据。您还可以在 MySQL 命令行界面试一下您的 查询。如果可能的话，以下会列出 MySQL 服务器的错误输出，这可能对您解决问题有一定的帮助作用。如果您仍然有问题，或者命令行界面执行成功而分析器出错，请将您的 SQL 查询缩减到导致问题的某一条语句，然后和下面剪切区中的数据一起提交一个 bug 报告:';
$strSQLParserUserError = '好像您的 SQL 查询有错。如果可能的话，以下会列出 MySQL 服务器的错误输出，这可能对您解决问题有一定的帮助作用';
$strSQLQuery = 'SQL 查询';
$strSQLResult = 'SQL 查询结果';
$strSQPBugInvalidIdentifer = '无效的标识符';
$strSQPBugUnclosedQuote = '引号不配对';
$strSQPBugUnknownPunctuation = '未知的标点符号字符串';
$strSave = '保存';
$strSaveOnServer = '保存于服务器的 %s 目录';
$strScaleFactorSmall = '比例因子太小，无法在一页中显示大纲';
$strSearch = '搜索';
$strSearchFormTitle = '搜索数据库';
$strSearchInTables = '于以下表:';
$strSearchNeedle = '查找的文字或数值(通配符:“%”):';
$strSearchOption1 = '至少一个单词';
$strSearchOption2 = '所有单词';
$strSearchOption3 = '精确短语';
$strSearchOption4 = '按正规表达式';
$strSearchResultsFor = '“<i>%s</i>”的搜索结果 %s:';
$strSearchType = '查找:';
$strSecretRequired = '配置文件现在需要绝密的密码字(blowfish_secret)。';
$strSelectADb = '请选择数据库';
$strSelectAll = '全选';
$strSelectFields = '至少选择一个字段:';
$strSelectNumRows = '查询中';
$strSelectTables = '选择表';
$strSend = '另存为文件';
$strSent = '送出';
$strServer = '服务器';
$strServerChoice = '选择服务器';
$strServerStatus = '运行信息';
$strServerStatusUptime = '此 MySQL 服务器已经运行了 %s，启动时间为 %s。';
$strServerTabProcesslist = '进程';
$strServerTabVariables = '变量';
$strServerTrafficNotes = '<b>服务器流量</b>: 这些表显示了此 MySQL 服务器自启动以来的网络流量统计。';
$strServerVars = '服务器变量和设置';
$strServerVersion = '服务器版本';
$strSessionValue = '会话值';
$strSetEnumVal = '如字段类型是“enum”或“set”，请使用以下的格式输入: \'a\',\'b\',\'c\'...<br />如果您需要在值中输入反斜线(“\”)或者单引号(“\'”)，请在前面加上反斜线(如 \'\\\\xyz\' 或 \'a\\\'b\')。';
$strShow = '显示';
$strShowAll = '全部显示';
$strShowColor = '显示颜色';
$strShowDatadictAs = '数据字典格式';
$strShowFullQueries = '显示完整查询';
$strShowGrid = '显示网格';
$strShowPHPInfo = '显示 PHP 信息';
$strShowTableDimension = '显示表格大小';
$strShowTables = '显示表';
$strShowThisQuery = ' 在此再次显示此查询 ';
$strShowingRecords = '显示行';
$strSimplifiedChinese = '简体中文';
$strSingly = '(逐一)';
$strSize = '大小';
$strSort = '排序';
$strSpaceUsage = '已使用空间';
$strSplitWordsWithSpace = '每个单词以空格 (" ") 分隔。';
$strStatCheckTime = '最后检查时间';
$strStatCreateTime = '创建时间';
$strStatUpdateTime = '最后更新时间';
$strStatement = '语句';
$strStatus = '状态';
$strStrucCSV = 'CSV 数据';
$strStrucData = '结构和数据';
$strStrucDrop = '添加 DROP TABLE';
$strStrucExcelCSV = 'MS Excel 的 CSV 格式';
$strStrucOnly = '只结构';
$strStructPropose = '规划表结构';
$strStructure = '结构';
$strSubmit = '提交';
$strSuccess = '您运行的 SQL 语句已经成功运行了。';
$strSum = '总计';
$strSwedish = '瑞典语';
$strSwitchToTable = '切换到复制的表';

$strTable = '表 ';
$strTableComments = '表注释';
$strTableEmpty = '表名称是空的!';
$strTableHasBeenDropped = '表 %s 已被删除';
$strTableHasBeenEmptied = '表 %s 已被清空';
$strTableHasBeenFlushed = '表 %s 已被强迫更新';
$strTableMaintenance = '表维护';
$strTableOfContents = '目录';
$strTableOptions = '表选项';
$strTableStructure = '表的结构';
$strTableType = '表类型';
$strTables = '%s 个表';
$strTblPrivileges = '按表指定权限';
$strTextAreaLength = ' 由于长度限制<br />此字段可能无法编辑 ';
$strThai = '泰语';
$strTheContent = '文件中的内容已经插入到表中。';
$strTheContents = '文件中的内容将会取代所选定表中具有相同主键或唯一键的记录。';
$strTheTerminator = '字段的结束符。';
$strThisHost = '此主机';
$strThisNotDirectory = '这并不是一个目录';
$strThreadSuccessfullyKilled = '线程 %s 已成功杀死。';
$strTime = '时间';
$strToggleScratchboard = '切换刮板';
$strTotal = '总计';
$strTotalUC = '统计';
$strTraditionalChinese = '繁体中文';
$strTraffic = '流量';
$strTransformation_image_jpeg__inline = '显示可点击的缩略图; 选项: 以像素指定的宽度、高度(保留原有比例)';
$strTransformation_image_jpeg__link = '显示到此图像的链接(即直接二进制下载)。';
$strTransformation_image_png__inline = '查看 image/jpeg: 嵌入';
$strTransformation_text_plain__dateformat = '选择 TIME, TIMESTAMP 或 DATETIME 字段并将其用您的本地日期格式进行格式化。第一个选项是将会加入到时间戳中的偏移量(以小时为单位，默认为 0)。第二个选项是根据 PHP 的 strftime() 函数参数的格式编写的不同日期格式。';
$strTransformation_text_plain__external = '只对 LINUX: 调用外部程序并通过标准输入填充字段数据。返回此应用程序的标准输出。默认为 Tidy，可以很好的打印 HTML 代码。为了安全起见，您需要手动编辑文件 libraries/transformations/text_plain__external.inc.php 然后插入允许您运行的工具。第一个选项是您想要使用的程序编号，而第二个选项是程序的参数。至于第三个参数，如果设为 1 的话将会用 htmlspecialchars() 转换其输出(默认为 1)。第四个参数如果设为 1 的话，将会在内容单元格中输出 NOWRAP，这样全部输出就会不经重新格式化直接输出了(默认为 1)';
$strTransformation_text_plain__formatted = '保留字段的原始格式。不进行转码。';
$strTransformation_text_plain__imagelink = '显示图像和链接，字段内包含文件名；第一个选项是类似“http://domain.com/”这样的前缀，第二个选项是以像素为单位的宽度，第三个参数是高度。';
$strTransformation_text_plain__link = '显示链接，字段内包含文件名；第一个选项是类似“http://domain.com/”这样的前缀，第二个选项是链接的标题(弹出提示)。';
$strTransformation_text_plain__substr = '只显示字符串的一部分。第一个选项定义了文本开始输出的偏移量(默认为 0)。第二个选项是所返回文字数量的偏移量。如果为空的话，将返回剩下的所有文本。第三个选项是将会追加到子字符串之后的输出(默认为: ...) .';
$strTransformation_text_plain__unformatted = '将 HTML 代码显示为 HTML 实体。不显示 HTML 格式化。';
$strTruncateQueries = '截断显示的查询';
$strTurkish = '土耳其语';
$strType = '类型';

$strUkrainian = '乌克兰语';
$strUncheckAll = '全部不选';
$strUnicode = 'Unicode';
$strUnique = '唯一';
$strUnknown = '未知';
$strUnselectAll = '全部不选';
$strUpdComTab = '请参看文档中关于如何更新您的 Column_comments 表的部分';
$strUpdatePrivMessage = '您已经更新了 %s 的权限。';
$strUpdateProfileMessage = '配置文件己更新。';
$strUpdateQuery = '更新查询';
$strUsage = '用法';
$strUseBackquotes = '请在表名及字段名使用引号';
$strUseHostTable = '使用主机表';
$strUseTables = '使用表';
$strUseTextField = '使用文本域';
$strUser = '用户';
$strUserAlreadyExists = '用户 %s 己存在!';
$strUserEmpty = '用户名称是空的!';
$strUserName = '用户名';
$strUserNotFound = '选中的用户在权限表内找不到。';
$strUserOverview = '用户一览';
$strUsersDeleted = '选中的用户已成功删除。';
$strUsersHavingAccessToDb = '用户可访问“%s”';

$strValidateSQL = '校验 SQL';
$strValidatorError = 'SQL 校验程序无法初始化。请检查是否已经安装了%s文档%s内描述的必需 PHP 扩展。';
$strValue = '值';
$strVar = '变量';
$strViewDump = '查看表的转存(大纲)。';
$strViewDumpDB = '查看数据库的转存(大纲)。';
$strViewDumpDatabases = '查看数据库的转存(大纲)';

$strWebServerUploadDirectory = 'Web 服务器上载目录';
$strWebServerUploadDirectoryError = '设定的上载目录错误，未能使用';
$strWelcome = '欢迎使用 %s';
$strWestEuropean = '西欧';
$strWildcard = '通配符';
$strWithChecked = '选中项:';
$strWritingCommentNotPossible = '不能写注释';
$strWritingRelationNotPossible = '不能写关系';
$strWrongUser = '用户名/密码错误，访问被拒绝。';

$strXML = 'XML'; //USE ENG

$strYes = '是';

$strZeroRemovesTheLimit = '注意：将这些选项设为 0 (零)将删除限制。';
$strZip = '"zipped"';

$strUseThisValue = 'Use this value';  //to translate
$strWindowNotFound = 'The target browser window could not be updated. Maybe you have closed the parent window or your browser is blocking cross-window updates of your security settings';  //to translate
$strBrowseForeignValues = 'Browse foreign values';  //to translate
$strInternalRelations = 'Internal relations';  //to translate
$strInternalNotNecessary = '* An internal relation is not necessary when it exists also in InnoDB.';  //to translate
$strUpgrade = 'You should upgrade to %s %s or later.';  //to translate
$strLatexStructure = 'Structure of table __TABLE__';//to translate
$strLatexContinued = '(continued)';//to translate
$strLatexContent = 'Content of table __TABLE__';//to translate
$strLatexIncludeCaption = 'Include table caption';//to translate
$strLatexCaption = 'Table caption';//to translate
$strLatexLabel = 'Label key';//to translate
$strLatexContinuedCaption = 'Continued table caption';//to translate

$strPrintViewFull = 'Print view (with full texts)';  //to translate
$strLogServer = 'Server';  //to translate
$strSortByKey = 'Sort by key';  //to translate
$strBookmarkAllUsers = 'Let every user access this bookmark';  //to translate
$strConstraintsForDumped = 'Constraints for dumped tables';  //to translate
$strConstraintsForTable = 'Constraints for table';  //to translate
$strBookmarkOptions = 'Bookmark options';  //to translate
$strCreationDates = 'Creation/Update/Check dates';  //to translate
$strCheckOverhead = 'Check overheaded';  //to translate
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
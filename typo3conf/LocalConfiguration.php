<?php
return [
    'BE' => [
        'debug' => false,
        'explicitADmode' => 'explicitAllow',
        'installToolPassword' => '$P$CSkPDR8Dp6UfMNs1n0GNX5vQXACorx/',
        'loginSecurityLevel' => 'rsa',
    ],
    'DB' => [
        'database' => 'typo3',
        'host' => 'localhost',
        'password' => 'khatru',
        'socket' => '',
        'username' => 'typo3',
    ],
    'EXT' => [
        'extConf' => [
            'bootstrap_package' => 'a:9:{s:21:"disableLessProcessing";s:1:"0";s:16:"disablePageTsRTE";s:1:"0";s:20:"disablePageTsTCEFORM";s:1:"0";s:20:"disablePageTsTCEMAIN";s:1:"0";s:21:"disablePageTsAdmPanel";s:1:"0";s:27:"disablePageTsBackendLayouts";s:1:"1";s:18:"disableBackendSkin";s:1:"0";s:4:"Logo";s:87:"../typo3conf/ext/bootstrap_package/Resources/Public/Images/Backend/TopBarLogo-v7@2x.png";s:9:"LoginLogo";s:83:"../typo3conf/ext/bootstrap_package/Resources/Public/Images/Backend/LoginLogo-v7.png";}',
            'dyncss' => 'a:2:{s:5:"state";s:0:"";s:15:"enableDebugMode";s:0:"";}',
            'dyncss_less' => 'a:0:{}',
            'gridelements' => 'a:2:{s:20:"additionalStylesheet";s:0:"";s:19:"nestingInListModule";s:1:"1";}',
            'rsaauth' => 'a:1:{s:18:"temporaryDirectory";s:0:"";}',
            'rtehtmlarea' => 'a:8:{s:21:"noSpellCheckLanguages";s:23:"ja,km,ko,lo,th,zh,b5,gb";s:15:"AspellDirectory";s:15:"/usr/bin/aspell";s:20:"defaultConfiguration";s:105:"Typical (Most commonly used features are enabled. Select this option if you are unsure which one to use.)";s:12:"enableImages";s:1:"0";s:20:"enableInlineElements";s:1:"1";s:19:"allowStyleAttribute";s:1:"1";s:24:"enableAccessibilityIcons";s:1:"0";s:16:"forceCommandMode";s:1:"0";}',
            'saltedpasswords' => 'a:2:{s:3:"BE.";a:4:{s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\PhpassSalt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}s:3:"FE.";a:5:{s:7:"enabled";i:1;s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\PhpassSalt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}}',
            't3sbootstrap' => 'a:9:{s:14:"default_CTypes";s:1:"1";s:16:"default_BScTypes";s:1:"1";s:12:"default_Flag";s:1:"1";s:10:"rte_config";s:1:"1";s:10:"rte_extend";s:1:"0";s:11:"fontawesome";s:1:"1";s:6:"autoTS";s:1:"0";s:15:"optionalContent";s:1:"0";s:14:"backendLayouts";s:1:"1";}',
        ],
    ],
    'EXTCONF' => [
        'lang' => [
            'availableLanguages' => [
                'de',
            ],
        ],
    ],
    'FE' => [
        'debug' => false,
        'loginSecurityLevel' => 'rsa',
    ],
    'GFX' => [
        'colorspace' => 'sRGB',
        'im' => 1,
        'im_mask_temp_ext_gif' => 1,
        'im_path' => '/usr/bin/',
        'im_path_lzw' => '/usr/bin/',
        'im_v5effects' => 1,
        'im_version_5' => 'im6',
        'image_processing' => 1,
        'jpg_quality' => '80',
    ],
    'INSTALL' => [
        'wizardDone' => [
            'TYPO3\CMS\Install\Updates\AccessRightParametersUpdate' => 1,
            'TYPO3\CMS\Install\Updates\BackendUserStartModuleUpdate' => 1,
            'TYPO3\CMS\Install\Updates\Compatibility6ExtractionUpdate' => 1,
            'TYPO3\CMS\Install\Updates\ContentTypesToTextMediaUpdate' => 1,
            'TYPO3\CMS\Install\Updates\FileListIsStartModuleUpdate' => 1,
            'TYPO3\CMS\Install\Updates\FilesReplacePermissionUpdate' => 1,
            'TYPO3\CMS\Install\Updates\LanguageIsoCodeUpdate' => 1,
            'TYPO3\CMS\Install\Updates\MediaceExtractionUpdate' => 1,
            'TYPO3\CMS\Install\Updates\MigrateMediaToAssetsForTextMediaCe' => 1,
            'TYPO3\CMS\Install\Updates\MigrateShortcutUrlsAgainUpdate' => 1,
            'TYPO3\CMS\Install\Updates\OpenidExtractionUpdate' => 1,
            'TYPO3\CMS\Install\Updates\PageShortcutParentUpdate' => 1,
            'TYPO3\CMS\Install\Updates\ProcessedFileChecksumUpdate' => 1,
            'TYPO3\CMS\Install\Updates\TableFlexFormToTtContentFieldsUpdate' => 1,
            'TYPO3\CMS\Install\Updates\WorkspacesNotificationSettingsUpdate' => 1,
            'TYPO3\CMS\Rtehtmlarea\Hook\Install\DeprecatedRteProperties' => 1,
            'TYPO3\CMS\Rtehtmlarea\Hook\Install\RteAcronymButtonRenamedToAbbreviation' => 1,
        ],
    ],
    'MAIL' => [
        'transport_sendmail_command' => '/usr/sbin/sendmail -t -i ',
    ],
    'SYS' => [
        'caching' => [
            'cacheConfigurations' => [
                'extbase_object' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'frontend' => 'TYPO3\\CMS\\Core\\Cache\\Frontend\\VariableFrontend',
                    'groups' => [
                        'system',
                    ],
                    'options' => [
                        'defaultLifetime' => 0,
                    ],
                ],
            ],
        ],
        'clearCacheSystem' => false,
        'devIPmask' => '',
        'displayErrors' => 0,
        'enableDeprecationLog' => false,
        'encryptionKey' => '4d06e918fdd7bd2f327f16c9b0ebbaf6e6e1340afa0cc15d655894c3aebd5ef0cca618438bd726c7a793d851165f4761',
        'isInitialDatabaseImportDone' => true,
        'isInitialInstallationInProgress' => false,
        'sitename' => 'Blumenbach Online',
        'sqlDebug' => 0,
        'systemLogLevel' => 2,
        't3lib_cs_convMethod' => 'mbstring',
        't3lib_cs_utils' => 'mbstring',
    ],
];

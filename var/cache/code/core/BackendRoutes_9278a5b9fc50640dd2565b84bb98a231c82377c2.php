<?php
return array (
  'ajax_core_requirejs' => 
  array (
    'path' => '/ajax/core/requirejs',
    'access' => 'public',
    'target' => 'TYPO3\\CMS\\Core\\Controller\\RequireJsController::retrieveConfiguration',
    'ajax' => true,
  ),
  'install.backend-user-confirmation' => 
  array (
    'path' => '/install/backend-user-confirmation',
    'target' => 'TYPO3\\CMS\\Install\\Controller\\BackendModuleController::backendUserConfirmationAction',
  ),
  'wizard_element_browser' => 
  array (
    'path' => '/wizard/record/browse',
    'target' => 'TYPO3\\CMS\\Recordlist\\Controller\\ElementBrowserController::mainAction',
  ),
  'record_download' => 
  array (
    'path' => '/record/download',
    'methods' => 
    array (
      0 => 'POST',
    ),
    'target' => 'TYPO3\\CMS\\Recordlist\\Controller\\RecordDownloadController::handleDownloadRequest',
  ),
  'ajax_web_list_clearpagecache' => 
  array (
    'path' => '/ajax/web/list/clearpagecache',
    'target' => 'TYPO3\\CMS\\Recordlist\\Controller\\ClearPageCacheController::mainAction',
    'ajax' => true,
  ),
  'ajax_record_download_settings' => 
  array (
    'path' => '/ajax/record/download/settings',
    'target' => 'TYPO3\\CMS\\Recordlist\\Controller\\RecordDownloadController::downloadSettingsAction',
    'ajax' => true,
  ),
  'login' => 
  array (
    'path' => '/login',
    'access' => 'public',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\LoginController::formAction',
  ),
  'main' => 
  array (
    'path' => '/main',
    'referrer' => 'required,refresh-always',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\BackendController::mainAction',
  ),
  'state-tracker' => 
  array (
    'path' => '/state-tracker',
    'access' => 'public',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\StateTrackerController::mainAction',
  ),
  'logout' => 
  array (
    'path' => '/logout',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\LogoutController::logoutAction',
  ),
  'password_forget' => 
  array (
    'path' => '/login/password-reset/forget',
    'access' => 'public',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\ResetPasswordController::forgetPasswordFormAction',
  ),
  'password_forget_initiate_reset' => 
  array (
    'path' => '/login/password-reset/initiate-reset',
    'access' => 'public',
    'methods' => 
    array (
      0 => 'POST',
    ),
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\ResetPasswordController::initiatePasswordResetAction',
  ),
  'password_reset_validate' => 
  array (
    'path' => '/login/password-reset/validate',
    'access' => 'public',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\ResetPasswordController::passwordResetAction',
  ),
  'password_reset_finish' => 
  array (
    'path' => '/login/password-reset/finish',
    'access' => 'public',
    'methods' => 
    array (
      0 => 'POST',
    ),
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\ResetPasswordController::passwordResetFinishAction',
  ),
  'login_frameset' => 
  array (
    'path' => '/login/frame',
    'access' => 'public',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\LoginController::refreshAction',
  ),
  'auth_mfa' => 
  array (
    'path' => '/auth/mfa',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\MfaController::handleRequest',
  ),
  'setup_mfa' => 
  array (
    'path' => '/setup/mfa',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\MfaSetupController::handleRequest',
  ),
  'mfa' => 
  array (
    'path' => '/mfa',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\MfaConfigurationController::handleRequest',
  ),
  'wizard_add' => 
  array (
    'path' => '/wizard/add',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\Wizard\\AddController::mainAction',
  ),
  'wizard_list' => 
  array (
    'path' => '/wizard/list',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\Wizard\\ListController::mainAction',
  ),
  'wizard_edit' => 
  array (
    'path' => '/wizard/edit',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\Wizard\\EditController::mainAction',
  ),
  'wizard_link' => 
  array (
    'path' => '/wizard/link/browse',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\LinkBrowserController::mainAction',
  ),
  'online_media' => 
  array (
    'path' => '/online-media',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\OnlineMediaController::mainAction',
  ),
  'record_history' => 
  array (
    'path' => '/record/history',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\ContentElement\\ElementHistoryController::mainAction',
  ),
  'db_new' => 
  array (
    'path' => '/record/new',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\NewRecordController::mainAction',
    'redirect' => 
    array (
      'enable' => true,
      'parameters' => 
      array (
        'id' => true,
      ),
    ),
  ),
  'db_new_pages' => 
  array (
    'path' => '/record/new-page',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\NewRecordController::newPageAction',
    'redirect' => 
    array (
      'enable' => true,
      'parameters' => 
      array (
        'id' => true,
      ),
    ),
  ),
  'pages_sort' => 
  array (
    'path' => '/pages/sort',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\Page\\SortSubPagesController::mainAction',
  ),
  'pages_new' => 
  array (
    'path' => '/pages/new',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\Page\\NewMultiplePagesController::mainAction',
    'redirect' => 
    array (
      'enable' => true,
      'parameters' => 
      array (
        'id' => true,
      ),
    ),
  ),
  'new_content_element_wizard' => 
  array (
    'path' => '/record/content/wizard/new',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\ContentElement\\NewContentElementController::handleRequest',
  ),
  'move_element' => 
  array (
    'path' => '/record/move',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\ContentElement\\MoveElementController::mainAction',
  ),
  'show_item' => 
  array (
    'path' => '/record/info',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\ContentElement\\ElementInformationController::mainAction',
  ),
  'dummy' => 
  array (
    'path' => '/empty',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\DummyController::mainAction',
  ),
  'tce_db' => 
  array (
    'path' => '/record/commit',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\SimpleDataHandlerController::mainAction',
  ),
  'tce_file' => 
  array (
    'path' => '/file/commit',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\File\\FileController::mainAction',
  ),
  'record_edit' => 
  array (
    'path' => '/record/edit',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\EditDocumentController::mainAction',
    'redirect' => 
    array (
      'enable' => true,
      'parameters' => 
      array (
        'edit' => true,
      ),
    ),
  ),
  'thumbnails' => 
  array (
    'path' => '/thumbnails',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\File\\ThumbnailController::render',
  ),
  'image_processing' => 
  array (
    'path' => '/image/process',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\File\\ImageProcessController::process',
  ),
  'clipboard_process' => 
  array (
    'path' => '/clipboard/process',
    'methods' => 
    array (
      0 => 'POST',
    ),
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\ClipboardController::processRequest',
  ),
  'help_cshmanual_popup' => 
  array (
    'path' => '/help/cshmanual',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\HelpController::handleDetailPopup',
  ),
  'ajax_file_process' => 
  array (
    'path' => '/ajax/file/process',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\File\\FileController::processAjaxRequest',
    'ajax' => true,
  ),
  'ajax_file_exists' => 
  array (
    'path' => '/ajax/file/exists',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\File\\FileController::fileExistsInFolderAction',
    'ajax' => true,
  ),
  'ajax_record_inline_details' => 
  array (
    'path' => '/ajax/record/inline/details',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\FormInlineAjaxController::detailsAction',
    'ajax' => true,
  ),
  'ajax_record_inline_create' => 
  array (
    'path' => '/ajax/record/inline/create',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\FormInlineAjaxController::createAction',
    'ajax' => true,
  ),
  'ajax_record_inline_synchronizelocalize' => 
  array (
    'path' => '/ajax/record/inline/synchronizelocalize',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\FormInlineAjaxController::synchronizeLocalizeAction',
    'ajax' => true,
  ),
  'ajax_record_inline_expandcollapse' => 
  array (
    'path' => '/ajax/record/inline/expandcollapse',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\FormInlineAjaxController::expandOrCollapseAction',
    'ajax' => true,
  ),
  'ajax_site_configuration_inline_create' => 
  array (
    'path' => '/ajax/siteconfiguration/inline/create',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\SiteInlineAjaxController::newInlineChildAction',
    'ajax' => true,
  ),
  'ajax_record_slug_suggest' => 
  array (
    'path' => '/ajax/record/slug/suggest',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\FormSlugAjaxController::suggestAction',
    'ajax' => true,
  ),
  'ajax_site_configuration_inline_details' => 
  array (
    'path' => '/ajax/siteconfiguration/inline/details',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\SiteInlineAjaxController::openInlineChildAction',
    'ajax' => true,
  ),
  'ajax_record_flex_container_add' => 
  array (
    'path' => '/ajax/record/flex/containeradd',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\FormFlexAjaxController::containerAdd',
    'ajax' => true,
  ),
  'ajax_record_suggest' => 
  array (
    'path' => '/ajax/wizard/suggest/search',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\Wizard\\SuggestWizardController::searchAction',
    'ajax' => true,
  ),
  'ajax_record_tree_data' => 
  array (
    'path' => '/ajax/record/tree/fetchData',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\FormSelectTreeAjaxController::fetchDataAction',
    'ajax' => true,
  ),
  'ajax_page_tree_data' => 
  array (
    'path' => '/ajax/page/tree/fetchData',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\Page\\TreeController::fetchDataAction',
    'ajax' => true,
  ),
  'ajax_page_tree_filter' => 
  array (
    'path' => '/ajax/page/tree/filterData',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\Page\\TreeController::filterDataAction',
    'ajax' => true,
  ),
  'ajax_page_tree_configuration' => 
  array (
    'path' => '/ajax/page/tree/fetchConfiguration',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\Page\\TreeController::fetchConfigurationAction',
    'ajax' => true,
  ),
  'ajax_page_tree_browser_configuration' => 
  array (
    'path' => '/ajax/browser/page/tree/fetchConfiguration',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\Page\\TreeController::fetchReadOnlyConfigurationAction',
    'ajax' => true,
  ),
  'ajax_page_tree_set_temporary_mount_point' => 
  array (
    'path' => '/ajax/page/tree/setTemporaryMountPoint',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\Page\\TreeController::setTemporaryMountPointAction',
    'ajax' => true,
  ),
  'ajax_filestorage_tree_data' => 
  array (
    'path' => '/ajax/filestorage/tree/fetchData',
    'methods' => 
    array (
      0 => 'GET',
    ),
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\FileStorage\\TreeController::fetchDataAction',
    'ajax' => true,
  ),
  'ajax_filestorage_tree_filter' => 
  array (
    'path' => '/ajax/filestorage/tree/filterData',
    'methods' => 
    array (
      0 => 'GET',
    ),
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\FileStorage\\TreeController::filterDataAction',
    'ajax' => true,
  ),
  'ajax_shortcut_editform' => 
  array (
    'path' => '/ajax/shortcut/editform',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\ShortcutController::showEditFormAction',
    'ajax' => true,
  ),
  'ajax_shortcut_saveform' => 
  array (
    'path' => '/ajax/shortcut/saveform',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\ShortcutController::updateAction',
    'ajax' => true,
  ),
  'ajax_shortcut_list' => 
  array (
    'path' => '/ajax/shortcut/list',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\ShortcutController::menuAction',
    'ajax' => true,
  ),
  'ajax_shortcut_remove' => 
  array (
    'path' => '/ajax/shortcut/remove',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\ShortcutController::removeAction',
    'ajax' => true,
  ),
  'ajax_shortcut_create' => 
  array (
    'path' => '/ajax/shortcut/create',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\ShortcutController::addAction',
    'ajax' => true,
  ),
  'ajax_systeminformation_render' => 
  array (
    'path' => '/ajax/system-information/render',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\SystemInformationController::renderMenuAction',
    'parameters' => 
    array (
      'skipSessionUpdate' => 1,
    ),
    'ajax' => true,
  ),
  'ajax_modulemenu' => 
  array (
    'path' => '/ajax/module-menu',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\BackendController::getModuleMenu',
    'ajax' => true,
  ),
  'ajax_topbar' => 
  array (
    'path' => '/ajax/topbar',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\BackendController::getTopbar',
    'ajax' => true,
  ),
  'ajax_login' => 
  array (
    'path' => '/ajax/login',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\AjaxLoginController::loginAction',
    'access' => 'public',
    'ajax' => true,
  ),
  'ajax_logout' => 
  array (
    'path' => '/ajax/logout',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\AjaxLoginController::logoutAction',
    'access' => 'public',
    'ajax' => true,
  ),
  'ajax_login_preflight' => 
  array (
    'path' => '/ajax/login/preflight',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\AjaxLoginController::preflightAction',
    'access' => 'public',
    'ajax' => true,
  ),
  'ajax_login_refresh' => 
  array (
    'path' => '/ajax/login/refresh',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\AjaxLoginController::refreshAction',
    'ajax' => true,
  ),
  'ajax_login_timedout' => 
  array (
    'path' => '/ajax/login/timedout',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\AjaxLoginController::isTimedOutAction',
    'access' => 'public',
    'parameters' => 
    array (
      'skipSessionUpdate' => 1,
    ),
    'ajax' => true,
  ),
  'ajax_switch_user' => 
  array (
    'path' => '/ajax/switch/user',
    'methods' => 
    array (
      0 => 'POST',
    ),
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\SwitchUserController::switchUserAction',
    'ajax' => true,
  ),
  'ajax_switch_user_exit' => 
  array (
    'path' => '/ajax/switch/user/exit',
    'methods' => 
    array (
      0 => 'POST',
    ),
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\SwitchUserController::exitSwitchUserAction',
    'ajax' => true,
  ),
  'ajax_mfa' => 
  array (
    'path' => '/ajax/mfa',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\MfaAjaxController::handleRequest',
    'ajax' => true,
  ),
  'ajax_flashmessages_render' => 
  array (
    'path' => '/ajax/flashmessages/render',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\FlashMessageController::getQueuedFlashMessagesAction',
    'ajax' => true,
  ),
  'ajax_contextmenu' => 
  array (
    'path' => '/ajax/context-menu',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\ContextMenuController::getContextMenuAction',
    'ajax' => true,
  ),
  'ajax_contextmenu_clipboard' => 
  array (
    'path' => '/ajax/context-menu/clipboard',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\ContextMenuController::clipboardAction',
    'ajax' => true,
  ),
  'ajax_record_process' => 
  array (
    'path' => '/ajax/record/process',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\SimpleDataHandlerController::processAjaxRequest',
    'ajax' => true,
  ),
  'ajax_usersettings_process' => 
  array (
    'path' => '/ajax/usersettings/process',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\UserSettingsController::processAjaxRequest',
    'ajax' => true,
  ),
  'ajax_wizard_image_manipulation' => 
  array (
    'path' => '/ajax/wizard/image-manipulation',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\Wizard\\ImageManipulationController::getWizardContent',
    'ajax' => true,
  ),
  'ajax_livesearch' => 
  array (
    'path' => '/ajax/livesearch',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\LiveSearchController::liveSearchAction',
    'ajax' => true,
  ),
  'ajax_online_media_create' => 
  array (
    'path' => '/ajax/online-media/create',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\OnlineMediaController::createAction',
    'ajax' => true,
  ),
  'ajax_icons' => 
  array (
    'path' => '/ajax/icons',
    'target' => 'TYPO3\\CMS\\Core\\Controller\\IconController::getIcon',
    'ajax' => true,
  ),
  'ajax_icons_cache' => 
  array (
    'path' => '/ajax/icons/cache',
    'target' => 'TYPO3\\CMS\\Core\\Controller\\IconController::getCacheIdentifier',
    'ajax' => true,
  ),
  'ajax_link_browser_encodetypolink' => 
  array (
    'path' => '/ajax/link-browser/encode-typolink',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\LinkBrowserController::encodeTypoLink',
    'ajax' => true,
  ),
  'ajax_page_languages' => 
  array (
    'path' => '/ajax/records/localize/get-languages',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\Page\\LocalizationController::getUsedLanguagesInPage',
    'ajax' => true,
  ),
  'ajax_records_localize_summary' => 
  array (
    'path' => '/ajax/records/localize/summary',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\Page\\LocalizationController::getRecordLocalizeSummary',
    'ajax' => true,
  ),
  'ajax_records_localize' => 
  array (
    'path' => '/ajax/records/localize',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\Page\\LocalizationController::localizeRecords',
    'ajax' => true,
  ),
  'ajax_context_help' => 
  array (
    'path' => '/ajax/context-help',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\ContextHelpAjaxController::getHelpAction',
    'ajax' => true,
  ),
  'ajax_show_columns' => 
  array (
    'path' => '/ajax/show/columns',
    'methods' => 
    array (
      0 => 'POST',
    ),
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\ColumnSelectorController::updateVisibleColumnsAction',
    'ajax' => true,
  ),
  'ajax_show_columns_selector' => 
  array (
    'path' => '/ajax/show/columns/selector',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\ColumnSelectorController::showColumnsSelectorAction',
    'ajax' => true,
  ),
  'dashboard' => 
  array (
    'path' => '/dashboard',
    'target' => 'TYPO3\\CMS\\Dashboard\\Controller\\DashboardController::handleRequest',
  ),
  'ajax_dashboard_get_widget_content' => 
  array (
    'path' => '/ajax/dashboard/widget/content',
    'target' => 'TYPO3\\CMS\\Dashboard\\Controller\\WidgetAjaxController::getContent',
    'ajax' => true,
  ),
  'ajax_dashboard_save_widget_positions' => 
  array (
    'path' => '/ajax/dashboard/widget/positions/save',
    'target' => 'TYPO3\\CMS\\Dashboard\\Controller\\WidgetAjaxController::savePositions',
    'ajax' => true,
  ),
  'file_edit' => 
  array (
    'path' => '/file/editcontent',
    'target' => 'TYPO3\\CMS\\Filelist\\Controller\\File\\EditFileController::mainAction',
  ),
  'file_newfolder' => 
  array (
    'path' => '/file/new',
    'target' => 'TYPO3\\CMS\\Filelist\\Controller\\File\\CreateFolderController::mainAction',
  ),
  'file_rename' => 
  array (
    'path' => '/file/rename',
    'target' => 'TYPO3\\CMS\\Filelist\\Controller\\File\\RenameFileController::mainAction',
  ),
  'file_replace' => 
  array (
    'path' => '/file/replace',
    'target' => 'TYPO3\\CMS\\Filelist\\Controller\\File\\ReplaceFileController::mainAction',
  ),
  'file_upload' => 
  array (
    'path' => '/file/upload',
    'target' => 'TYPO3\\CMS\\Filelist\\Controller\\File\\FileUploadController::mainAction',
  ),
  'file_download' => 
  array (
    'path' => '/file/download',
    'methods' => 
    array (
      0 => 'POST',
    ),
    'target' => 'TYPO3\\CMS\\Filelist\\Controller\\FileDownloadController::handleRequest',
  ),
  'tx_impexp_export' => 
  array (
    'path' => '/record/importexport/export',
    'target' => 'TYPO3\\CMS\\Impexp\\Controller\\ExportController::mainAction',
  ),
  'tx_impexp_import' => 
  array (
    'path' => '/record/importexport/import',
    'target' => 'TYPO3\\CMS\\Impexp\\Controller\\ImportController::mainAction',
  ),
  'rteckeditor_wizard_browse_links' => 
  array (
    'path' => '/rte/wizard/browselinks',
    'target' => 'TYPO3\\CMS\\RteCKEditor\\Controller\\BrowseLinksController::mainAction',
  ),
  'ajax_user_access_permissions' => 
  array (
    'path' => '/ajax/users/access/permissions',
    'target' => 'TYPO3\\CMS\\Beuser\\Controller\\PermissionController::handleAjaxRequest',
    'ajax' => true,
  ),
  'ajax_t3editor_tsref' => 
  array (
    'path' => '/ajax/t3editor/tsref',
    'target' => 'TYPO3\\CMS\\T3editor\\Controller\\TypoScriptReferenceController::loadReference',
    'ajax' => true,
  ),
  'ajax_t3editor_codecompletion_loadtemplates' => 
  array (
    'path' => '/ajax/t3editor/codecompletion/load-templates',
    'target' => 'TYPO3\\CMS\\T3editor\\Controller\\CodeCompletionController::loadCompletions',
    'ajax' => true,
  ),
  'ajax_mask_check_field_key' => 
  array (
    'path' => '/ajax/mask/checkFieldKey',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::checkFieldKey',
    'ajax' => true,
  ),
  'ajax_mask_check_element_key' => 
  array (
    'path' => '/ajax/mask/checkElementKey',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::checkElementKey',
    'ajax' => true,
  ),
  'ajax_mask_fieldtypes' => 
  array (
    'path' => '/ajax/mask/fieldTypes',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::fieldTypes',
    'ajax' => true,
  ),
  'ajax_mask_icons' => 
  array (
    'path' => '/ajax/mask/icons',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::icons',
    'ajax' => true,
  ),
  'ajax_mask_existing_tca' => 
  array (
    'path' => '/ajax/mask/existingTca',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::existingTca',
    'ajax' => true,
  ),
  'ajax_mask_tca_fields' => 
  array (
    'path' => '/ajax/mask/tcaFields',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::tcaFields',
    'ajax' => true,
  ),
  'ajax_mask_tabs' => 
  array (
    'path' => '/ajax/mask/tabs',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::tabs',
    'ajax' => true,
  ),
  'ajax_mask_language' => 
  array (
    'path' => '/ajax/mask/language',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::language',
    'ajax' => true,
  ),
  'ajax_mask_richtext_configuration' => 
  array (
    'path' => '/ajax/mask/richtextConfiguration',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::richtextConfiguration',
    'ajax' => true,
  ),
  'ajax_mask_link_handler' => 
  array (
    'path' => '/ajax/mask/linkHandler',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::linkHandler',
    'ajax' => true,
  ),
  'ajax_mask_online_media' => 
  array (
    'path' => '/ajax/mask/onlineMedia',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::availableOnlineMedia',
    'ajax' => true,
  ),
  'ajax_mask_ctypes' => 
  array (
    'path' => '/ajax/mask/ctypes',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::cTypes',
    'ajax' => true,
  ),
  'ajax_mask_elements' => 
  array (
    'path' => '/ajax/mask/elements',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::elements',
    'ajax' => true,
  ),
  'ajax_mask_load_element' => 
  array (
    'path' => '/ajax/mask/loadElement',
    'target' => 'MASK\\Mask\\Controller\\FieldsController::loadElement',
    'ajax' => true,
  ),
  'ajax_mask_load_field' => 
  array (
    'path' => '/ajax/mask/loadField',
    'target' => 'MASK\\Mask\\Controller\\FieldsController::loadField',
    'ajax' => true,
  ),
  'ajax_mask_save' => 
  array (
    'path' => '/ajax/mask/save',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::save',
    'ajax' => true,
  ),
  'ajax_mask_multiuse' => 
  array (
    'path' => '/ajax/mask/multiuse',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::multiuse',
    'ajax' => true,
  ),
  'ajax_mask_all_multiuse' => 
  array (
    'path' => '/ajax/mask/allMultiuse',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::loadAllMultiUse',
    'ajax' => true,
  ),
  'ajax_mask_missing' => 
  array (
    'path' => '/ajax/mask/missing',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::missingFilesOrFolders',
    'ajax' => true,
  ),
  'ajax_mask_fix_missing' => 
  array (
    'path' => '/ajax/mask/fixmissing',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::fixMissingFilesOrFolders',
    'ajax' => true,
  ),
  'ajax_mask_delete' => 
  array (
    'path' => '/ajax/mask/delete',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::delete',
    'ajax' => true,
  ),
  'ajax_mask_toggle_visibility' => 
  array (
    'path' => '/ajax/mask/toggle',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::toggleVisibility',
    'ajax' => true,
  ),
  'ajax_mask_html' => 
  array (
    'path' => '/ajax/mask/html',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::showHtmlAction',
    'ajax' => true,
  ),
  'ajax_mask_backend_layouts' => 
  array (
    'path' => '/ajax/mask/backendlayouts',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::backendLayouts',
    'ajax' => true,
  ),
  'ajax_mask_field_groups' => 
  array (
    'path' => '/ajax/mask/fieldGroups',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::fieldGroups',
    'ajax' => true,
  ),
  'ajax_mask_versions' => 
  array (
    'path' => '/ajax/mask/versions',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::versions',
    'ajax' => true,
  ),
  'ajax_mask_optional_extension_status' => 
  array (
    'path' => '/ajax/mask/extensions',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::optionalExtensionStatus',
    'ajax' => true,
  ),
  'ajax_mask_setup_complete' => 
  array (
    'path' => '/ajax/mask/setupComplete',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::setupComplete',
    'ajax' => true,
  ),
  'ajax_mask_setup_autoconfigure' => 
  array (
    'path' => '/ajax/mask/autoConfigure',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::autoConfigureSetup',
    'ajax' => true,
  ),
  'ajax_mask_tables' => 
  array (
    'path' => '/ajax/mask/tables',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::tables',
    'ajax' => true,
  ),
  'ajax_mask_migrations_done' => 
  array (
    'path' => '/ajax/mask/migrationsDone',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::migrationsDone',
    'ajax' => true,
  ),
  'ajax_mask_persist_definition' => 
  array (
    'path' => '/ajax/mask/persistDefinition',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::persistMaskDefinition',
    'ajax' => true,
  ),
);
#
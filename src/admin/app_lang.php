<?php

/**
 * ------------------------------------------------------------------------
 * CiSkeleton Admin Language File
 * ------------------------------------------------------------------------
 * This file contains all language lines used in the CSK admin dashboard.
 * Each section is separated by comments for easier navigation and maintenance.
 */

/**
 * ------------------------------------------------------------------------
 * Core Dashboard Section
 * ------------------------------------------------------------------------
 * General terms and messages used across the admin dashboard.
 */
$lang['admin_components'] = '컴포넌트';
$lang['admin_content'] = '콘텐츠';
$lang['admin_database_backup'] = '데이터베이스 백업';
$lang['admin_extensions'] = '확장 기능';
$lang['admin_firewall'] = '방화벽';
$lang['admin_help'] = '도움말';
$lang['admin_languages'] = '언어';
$lang['admin_logs'] = '시스템 로그';
$lang['admin_media'] = '미디어 라이브러리';
$lang['admin_modules'] = '모듈';
$lang['admin_plugins'] = '플러그인';
$lang['admin_reports'] = '활동 로그';
$lang['admin_settings'] = '시스템 설정';
$lang['admin_sysinfo'] = '시스템 정보';
$lang['admin_system'] = '시스템';
$lang['admin_system_firewall'] = '시스템 방화벽';
$lang['admin_themes'] = '테마';
$lang['admin_updates'] = '시스템 업데이트';
$lang['admin_users'] = '사용자';
$lang['admin_view_site'] = '사이트 보기';
$lang['per_page'] = '페이지당 항목 수';

// Generic Messages
$lang['admin_footer_thankyou'] = '<a href="%s" target="_blank">%s</a>로 제작된 사이트입니다.';
$lang['admin_items_active_count'] = '=0{활성화된 항목이 없습니다.} other{총 <b>%s</b>개 중 <b>#</b>개가 활성화되어 있습니다.}';

/**
 * ---------------------------------------------------------------
 * Extension Install Section
 * ---------------------------------------------------------------
 * Language lines for the extension installation section.
 */
$lang['admin_install'] = '설치';
$lang['admin_install_error'] = '패키지를 설치하지 못했습니다.';
$lang['admin_install_error_com'] = '설치 실패: %s';
$lang['admin_install_location_app'] = '이 애플리케이션만';
$lang['admin_install_location_core'] = '모든 애플리케이션';
$lang['admin_install_location_select'] = '&#151; 위치 선택 &#151;';
$lang['admin_install_success'] = '패키지가 성공적으로 설치되었습니다.';
$lang['admin_install_upload'] = '업로드';
$lang['admin_install_upload_error'] = '패키지를 업로드하지 못했습니다.';
$lang['admin_install_upload_success'] = '패키지가 성공적으로 업로드되었습니다.';
$lang['admin_install_upload_tip'] = '여기에 <b>.zip</b> 파일을 업로드하여 패키지를 설치하십시오.';

/**
 * ---------------------------------------------------------------
 * Database & Backup Section
 * ---------------------------------------------------------------
 * Language lines for the database management section.
 */
$lang['admin_database_backup_clean_error'] = '오래된 백업 파일을 정리할 수 없습니다.';
$lang['admin_database_backup_clean_success'] = '%d개의 백업 파일이 삭제되었습니다. %d의 디스크 공간이 확보되었습니다.';
$lang['admin_database_backup_create'] = '백업 생성';
$lang['admin_database_backup_create_confirm'] = '지금 백업을 생성하시겠습니까?';
$lang['admin_database_backup_create_error'] = '백업 파일을 생성할 수 없습니다. <b>%s</b> 폴더에 쓰기 권한이 있는지 확인하세요.';
$lang['admin_database_backup_create_success'] = '데이터베이스 백업 파일 <b>%s</b>이(가) 성공적으로 생성되었습니다.';
$lang['admin_database_backup_delete_confirm'] = '선택한 백업 파일을 삭제하시겠습니까?';
$lang['admin_database_backup_delete_error'] = '선택한 백업 파일을 삭제할 수 없습니다.';
$lang['admin_database_backup_delete_success'] = '백업 파일이 성공적으로 삭제되었습니다.';
$lang['admin_database_backup_download_error'] = '선택한 백업 파일을 다운로드할 수 없습니다.';
$lang['admin_database_backup_download_success'] = '백업 파일이 성공적으로 다운로드되었습니다.';
$lang['admin_database_backup_lock_confirm'] = '이 백업 파일들을 잠그시겠습니까?';
$lang['admin_database_backup_lock_error'] = '선택한 백업 파일을 잠글 수 없습니다.';
$lang['admin_database_backup_lock_success'] = '백업 파일이 성공적으로 잠겼습니다.';
$lang['admin_database_backup_locked_error'] = '잠긴 백업 파일은 삭제할 수 없습니다.';
$lang['admin_database_backup_missing_error'] = '백업 파일을 찾을 수 없습니다.';
$lang['admin_database_backup_unlock_confirm'] = '이 백업 파일들의 잠금을 해제하시겠습니까?';
$lang['admin_database_backup_unlock_error'] = '선택한 백업 파일의 잠금을 해제할 수 없습니다.';
$lang['admin_database_backup_unlock_success'] = '백업 파일의 잠금이 성공적으로 해제되었습니다.';
$lang['admin_database_prune'] = '정리';
$lang['admin_database_prune_confirm'] = '데이터베이스를 정리하시겠습니까? 실행 전에 백업이 생성됩니다.';
$lang['admin_database_prune_error'] = '데이터베이스를 정리할 수 없습니다.';
$lang['admin_database_prune_next'] = '다음 정리 예정: <b>%s</b>';
$lang['admin_database_prune_success'] = '데이터베이스가 성공적으로 정리되었습니다.';

/**
 * ---------------------------------------------------------------
 * System Logs Section
 * ---------------------------------------------------------------
 * Language lines for the system logs section.
 */
$lang['admin_logs_delete'] = '로그 삭제';
$lang['admin_logs_delete_confirm'] = '선택한 로그 파일을 삭제하시겠습니까?';
$lang['admin_logs_delete_error'] = '로그 파일을 삭제할 수 없습니다.';
$lang['admin_logs_delete_success'] = '로그 파일이 성공적으로 삭제되었습니다.';
$lang['admin_logs_error_disabled'] = '현재 로깅이 비활성화되어 있습니다.';
$lang['admin_logs_error_empty'] = '로그가 없습니다.';
$lang['admin_logs_error_missing'] = '로그 파일을 찾을 수 없거나 비어 있습니다.';
$lang['admin_logs_tip'] = '로그는 빠르게 매우 큰 파일을 생성할 수 있습니다. 라이브 사이트에서는 오래된 로그를 정기적으로 삭제하세요.';

/**
 * ---------------------------------------------------------------
 * Emails Section
 * ---------------------------------------------------------------
 * Language lines for the mail queue section.
 */
$lang['admin_emails_delete_confirm'] = '선택한 이메일을 삭제하시겠습니까?';
$lang['admin_emails_delete_error'] = '선택한 이메일을 삭제할 수 없습니다.';
$lang['admin_emails_delete_success'] = '선택한 이메일이 성공적으로 삭제되었습니다.';
$lang['admin_emails_email_from'] = '받는 사람';
$lang['admin_emails_mail_queue'] = '메일 대기열';
$lang['admin_emails_mailer'] = '대량 메일';
$lang['admin_emails_search'] = '제목 또는 내용으로 이메일 검색…';
$lang['admin_emails_send_error'] = '이메일을 대기열에 추가하지 못했습니다. 다시 시도하세요.';
$lang['admin_emails_send_none'] = '선택한 기준에 해당하는 사용자가 없습니다.';
$lang['admin_emails_send_success'] = '이메일이 대기열에 추가되었으며 곧 전송됩니다.';
$lang['admin_emails_send_to_banned'] = '차단된 사용자에게 전송';
$lang['admin_emails_send_to_deleted'] = '삭제된 사용자에게 전송';
$lang['admin_emails_send_to_disabled'] = '비활성화된 사용자에게 전송';

/**
 * ---------------------------------------------------------------
 * Users Section
 * ---------------------------------------------------------------
 * Language lines for the users management section.
 */
$lang['admin_users_add'] = '사용자 추가';
$lang['admin_users_all_users'] = '모든 사용자';
$lang['admin_users_ban_confirm'] = '선택한 사용자를 차단하시겠습니까?';
$lang['admin_users_ban_error'] = '선택한 사용자를 차단할 수 없습니다.';
$lang['admin_users_ban_success'] = '선택한 사용자가 성공적으로 차단되었습니다.';
$lang['admin_users_delete_confirm'] = '선택한 사용자를 삭제하시겠습니까?';
$lang['admin_users_delete_error'] = '선택한 사용자를 삭제할 수 없습니다.';
$lang['admin_users_delete_success'] = '선택한 사용자가 성공적으로 삭제되었습니다.';
$lang['admin_users_disable_confirm'] = '선택한 사용자를 비활성화하시겠습니까?';
$lang['admin_users_disable_error'] = '선택한 사용자를 비활성화할 수 없습니다.';
$lang['admin_users_disable_success'] = '선택한 사용자가 성공적으로 비활성화되었습니다.';
$lang['admin_users_edit'] = '사용자 편집';
$lang['admin_users_edit_error'] = '사용자 정보를 업데이트할 수 없습니다.';
$lang['admin_users_edit_success'] = '사용자 정보가 성공적으로 업데이트되었습니다.';
$lang['admin_users_enable_confirm'] = '선택한 사용자를 활성화하시겠습니까?';
$lang['admin_users_enable_error'] = '선택한 사용자를 활성화할 수 없습니다.';
$lang['admin_users_enable_success'] = '선택한 사용자가 성공적으로 활성화되었습니다.';
$lang['admin_users_groups'] = '그룹';
$lang['admin_users_lock_confirm'] = '선택한 사용자를 잠그시겠습니까?';
$lang['admin_users_lock_error'] = '선택한 사용자를 잠글 수 없습니다.';
$lang['admin_users_lock_success'] = '선택한 사용자가 성공적으로 잠겼습니다.';
$lang['admin_users_logged'] = '로그인한 사용자';
$lang['admin_users_manage'] = '사용자 관리';
$lang['admin_users_remove_confirm'] = '선택한 사용자와 모든 데이터를 영구적으로 삭제하시겠습니까?';
$lang['admin_users_remove_error'] = '선택한 사용자와 모든 데이터를 영구적으로 삭제할 수 없습니다.';
$lang['admin_users_remove_success'] = '선택한 사용자와 모든 데이터가 성공적으로 삭제되었습니다.';
$lang['admin_users_restore_confirm'] = '선택한 사용자를 복원하시겠습니까?';
$lang['admin_users_restore_error'] = '선택한 사용자를 복원할 수 없습니다.';
$lang['admin_users_restore_success'] = '선택한 사용자가 성공적으로 복원되었습니다.';
$lang['admin_users_search'] = '이름이나 이메일로 검색…';
$lang['admin_users_unban_confirm'] = '선택한 사용자의 차단을 해제하시겠습니까?';
$lang['admin_users_unban_error'] = '선택한 사용자의 차단을 해제할 수 없습니다.';
$lang['admin_users_unban_success'] = '선택한 사용자의 차단이 성공적으로 해제되었습니다.';
$lang['admin_users_unlock_confirm'] = '선택한 사용자의 잠금을 해제하시겠습니까?';
$lang['admin_users_unlock_error'] = '선택한 사용자의 잠금을 해제할 수 없습니다.';
$lang['admin_users_unlock_success'] = '선택한 사용자의 잠금이 성공적으로 해제되었습니다.';

/**
 * ---------------------------------------------------------------
 * Reports Section
 * ---------------------------------------------------------------
 * Language lines for the activity log section.
 */
$lang['admin_reports_clear'] = '로그 지우기';
$lang['admin_reports_clear_confirm'] = '액션 로그를 지우시겠습니까?';
$lang['admin_reports_clear_error'] = '액션 로그를 지울 수 없습니다.';
$lang['admin_reports_clear_success'] = '액션 로그가 성공적으로 지워졌습니다.';
$lang['admin_reports_latest_actions'] = '최근 액션';

/**
 * ---------------------------------------------------------------
 * Media Library Section
 * ---------------------------------------------------------------
 * Language lines for the media library section.
 */
$lang['admin_media_delete_confirm'] = '선택한 파일을 삭제하시겠습니까?';
$lang['admin_media_delete_error'] = '파일을 삭제할 수 없습니다.';
$lang['admin_media_delete_success'] = '파일이 성공적으로 삭제되었습니다.';
$lang['admin_media_file_delete_error'] = '파일을 삭제할 수 없습니다.';
$lang['admin_media_file_delete_success'] = '파일이 성공적으로 삭제되었습니다.';
$lang['admin_media_file_update_error'] = '파일을 업데이트할 수 없습니다.';
$lang['admin_media_file_update_success'] = '파일이 성공적으로 업데이트되었습니다.';
$lang['admin_media_search'] = '이름, 설명 또는 파일 이름으로 검색…';

/**
 * ---------------------------------------------------------------
 * Modules Section
 * ---------------------------------------------------------------
 * Language lines for the modules management section.
 */
$lang['admin_modules_active_count'] = '=0{활성화된 모듈이 없습니다.} other{총 <b>%s</b>개 중 <b>#</b>개가 활성화되어 있습니다.}';
$lang['admin_modules_add'] = '모듈 추가';
$lang['admin_modules_delete_confirm'] = '<b>%s</b> 모듈을 삭제하시겠습니까?';
$lang['admin_modules_delete_error'] = '모듈을 삭제할 수 없습니다.';
$lang['admin_modules_delete_success'] = '모듈이 성공적으로 삭제되었습니다.';
$lang['admin_modules_disable_all_confirm'] = '모든 모듈을 비활성화하시겠습니까?';
$lang['admin_modules_disable_all_error'] = '모든 모듈을 비활성화할 수 없습니다.';
$lang['admin_modules_disable_all_success'] = '모든 모듈이 성공적으로 비활성화되었습니다.';
$lang['admin_modules_disable_confirm'] = '<b>%s</b> 모듈을 비활성화하시겠습니까?';
$lang['admin_modules_disable_error'] = '모듈을 비활성화할 수 없습니다.';
$lang['admin_modules_disable_success'] = '모듈이 성공적으로 비활성화되었습니다.';
$lang['admin_modules_enable_all_confirm'] = '모든 모듈을 활성화하시겠습니까?';
$lang['admin_modules_enable_all_error'] = '모든 모듈을 활성화할 수 없습니다.';
$lang['admin_modules_enable_all_success'] = '모든 모듈이 성공적으로 활성화되었습니다.';
$lang['admin_modules_enable_confirm'] = '<b>%s</b> 모듈을 활성화하시겠습니까?';
$lang['admin_modules_enable_error'] = '모듈을 활성화할 수 없습니다.';
$lang['admin_modules_enable_success'] = '모듈이 성공적으로 활성화되었습니다.';
$lang['admin_modules_install_confirm'] = '이 모듈을 설치하시겠습니까?';
$lang['admin_modules_install_error'] = '모듈 설치에 실패했습니다.';
$lang['admin_modules_install_success'] = '모듈이 성공적으로 설치되었습니다.';
$lang['admin_modules_install_tip'] = '모듈은 사이트에 새로운 기능을 추가합니다. <a href="%s" target="_blank" rel="noopener">모듈 디렉터리</a>에서 모듈을 찾아보거나 <b>.zip</b> 파일을 업로드하세요.';

/**
 * ---------------------------------------------------------------
 * Plugins Section
 * ---------------------------------------------------------------
 * Language lines for the plugins management section.
 */
$lang['admin_plugins_active_count'] = '=0{활성화된 플러그인이 없습니다.} other{총 <b>%s</b>개 중 <b>#</b>개가 활성화되어 있습니다.}';
$lang['admin_plugins_add'] = '플러그인 추가';
$lang['admin_plugins_delete_confirm'] = '플러그인을 삭제하시겠습니까: <b>%s</b>?';
$lang['admin_plugins_delete_error'] = '플러그인을 삭제할 수 없습니다.';
$lang['admin_plugins_delete_success'] = '플러그인이 성공적으로 삭제되었습니다.';
$lang['admin_plugins_disable_all_confirm'] = '모든 플러그인을 비활성화하시겠습니까?';
$lang['admin_plugins_disable_all_error'] = '모든 플러그인을 비활성화할 수 없습니다.';
$lang['admin_plugins_disable_all_success'] = '모든 플러그인이 성공적으로 비활성화되었습니다.';
$lang['admin_plugins_disable_confirm'] = '플러그인을 비활성화하시겠습니까: <b>%s</b>?';
$lang['admin_plugins_disable_error'] = '플러그인을 비활성화할 수 없습니다.';
$lang['admin_plugins_disable_success'] = '플러그인이 성공적으로 비활성화되었습니다.';
$lang['admin_plugins_enable_all_confirm'] = '모든 플러그인을 활성화하시겠습니까?';
$lang['admin_plugins_enable_all_error'] = '모든 플러그인을 활성화할 수 없습니다.';
$lang['admin_plugins_enable_all_success'] = '모든 플러그인이 성공적으로 활성화되었습니다.';
$lang['admin_plugins_enable_confirm'] = '플러그인을 활성화하시겠습니까: <b>%s</b>?';
$lang['admin_plugins_enable_error'] = '플러그인을 활성화할 수 없습니다.';
$lang['admin_plugins_enable_success'] = '플러그인이 성공적으로 활성화되었습니다.';
$lang['admin_plugins_install_confirm'] = '이 플러그인을 설치하시겠습니까?';
$lang['admin_plugins_install_error'] = '플러그인 설치에 실패했습니다.';
$lang['admin_plugins_install_success'] = '플러그인이 성공적으로 설치되었습니다.';
$lang['admin_plugins_install_tip'] = '플러그인은 기존 기능을 추가 옵션이나 통합으로 확장합니다. <a href="%s" target="_blank" rel="noopener">플러그인 디렉터리</a>에서 설치하거나 <b>.zip</b> 파일을 업로드하세요.';

/**
 * ---------------------------------------------------------------
 * Themes Section
 * ---------------------------------------------------------------
 * Language lines for the themes management section.
 */
$lang['admin_themes_add'] = '테마 추가';
$lang['admin_themes_delete_confirm'] = '<b>%s</b> 테마를 삭제하시겠습니까?';
$lang['admin_themes_delete_error'] = '테마를 삭제할 수 없습니다.';
$lang['admin_themes_delete_error_active'] = '현재 활성화된 테마는 삭제할 수 없습니다.';
$lang['admin_themes_delete_success'] = '테마가 성공적으로 삭제되었습니다.';
$lang['admin_themes_disable_confirm'] = '<b>%s</b> 테마를 비활성화하시겠습니까?';
$lang['admin_themes_disable_error'] = '테마를 비활성화할 수 없습니다.';
$lang['admin_themes_disable_success'] = '테마가 성공적으로 비활성화되었습니다.';
$lang['admin_themes_enable_confirm'] = '<b>%s</b> 테마를 활성화하시겠습니까?';
$lang['admin_themes_enable_error'] = '테마를 활성화할 수 없습니다.';
$lang['admin_themes_enable_success'] = '테마가 성공적으로 활성화되었습니다.';
$lang['admin_themes_install_confirm'] = '이 테마를 설치하시겠습니까?';
$lang['admin_themes_install_error'] = '테마 설치에 실패했습니다.';
$lang['admin_themes_install_success'] = '테마가 성공적으로 설치되었습니다.';
$lang['admin_themes_install_tip'] = '테마는 사이트의 디자인과 레이아웃을 변경합니다. <a href="%s" target="_blank" rel="noopener">테마 라이브러리</a>에서 선택하거나 <b>.zip</b> 파일을 업로드해 설치하세요.';
$lang['admin_themes_none_tip'] = '이 애플리케이션은 테마 없이 실행되고 있습니다. 공개 인터페이스를 사용자 지정하려면 테마를 설치하세요.';

/**
 * ---------------------------------------------------------------
 * Menus Section
 * ---------------------------------------------------------------
 * Language lines for the menu locations section.
 */
$lang['admin_menus'] = '메뉴';
$lang['admin_menus_assign_error'] = '메뉴 위치를 업데이트할 수 없습니다.';
$lang['admin_menus_assign_success'] = '메뉴 위치가 성공적으로 업데이트되었습니다.';
$lang['admin_menus_header'] = '사용 가능한 메뉴 위치는 <b>%s</b> 개입니다.';
$lang['admin_menus_location'] = '위치';
$lang['admin_menus_locations'] = '메뉴 위치';
$lang['admin_menus_manage'] = '메뉴 관리';
$lang['admin_menus_menu'] = '할당된 메뉴';
$lang['admin_menus_none'] = '&#151; 없음 &#151;';

/**
 * ---------------------------------------------------------------
 * Languages Section
 * ---------------------------------------------------------------
 * Language lines for the languages management section.
 */
$lang['admin_languages_add'] = '언어 추가';
$lang['admin_languages_default_confirm'] = '이 언어를 사이트의 기본 언어로 설정하시겠습니까?';
$lang['admin_languages_default_error'] = '기본 언어를 변경할 수 없습니다.';
$lang['admin_languages_default_error_nochange'] = '이 언어는 이미 기본 언어입니다.';
$lang['admin_languages_default_success'] = '기본 언어가 성공적으로 변경되었습니다.';
$lang['admin_languages_disable_all_confirm'] = '모든 언어를 비활성화하시겠습니까?';
$lang['admin_languages_disable_all_error'] = '모든 언어를 비활성화할 수 없습니다.';
$lang['admin_languages_disable_all_success'] = '모든 언어가 성공적으로 비활성화되었습니다.';
$lang['admin_languages_disable_confirm'] = '<b>%s</b> 언어를 비활성화하시겠습니까?';
$lang['admin_languages_disable_error'] = '언어를 비활성화할 수 없습니다.';
$lang['admin_languages_disable_error_default'] = '기본 언어는 비활성화할 수 없습니다.';
$lang['admin_languages_disable_error_nochange'] = '이 언어는 이미 비활성화되어 있습니다.';
$lang['admin_languages_disable_success'] = '언어가 성공적으로 비활성화되었습니다.';
$lang['admin_languages_enable_all_confirm'] = '모든 언어를 활성화하시겠습니까?';
$lang['admin_languages_enable_all_error'] = '모든 언어를 활성화할 수 없습니다.';
$lang['admin_languages_enable_all_success'] = '모든 언어가 성공적으로 활성화되었습니다.';
$lang['admin_languages_enable_confirm'] = '<b>%s</b> 언어를 활성화하시겠습니까?';
$lang['admin_languages_enable_error'] = '언어를 활성화할 수 없습니다.';
$lang['admin_languages_enable_error_nochange'] = '이 언어는 이미 활성화되어 있습니다.';
$lang['admin_languages_enable_success'] = '언어가 성공적으로 활성화되었습니다.';
$lang['admin_languages_install_confirm'] = '이 언어를 설치하시겠습니까?';
$lang['admin_languages_install_error'] = '언어 설치에 실패했습니다.';
$lang['admin_languages_install_success'] = '언어가 성공적으로 설치되었습니다.';
$lang['admin_languages_install_tip'] = '언어는 사이트의 인터페이스와 콘텐츠에 번역을 추가합니다. <a href="%s" target="_blank" rel="noopener">언어 디렉터리</a>에서 사용 가능한 언어를 찾아보거나, <b>.zip</b> 패키지를 업로드하여 자체 언어를 설치하십시오.';
$lang['admin_languages_tip'] = '사이트의 기본 언어를 설정하고 활성화/비활성화하세요. 활성화된 언어는 방문자에게 표시됩니다.';

/**
 * ---------------------------------------------------------------
 * Package Driver & Installation Messages
 * ---------------------------------------------------------------
 * Language lines for package installation, download, backup, and validation.
 */
$lang['package_already_exists'] = '패키지가 이미 존재합니다.';
$lang['package_archive_download_failed'] = '패키지 아카이브를 다운로드하지 못했습니다.';
$lang['package_backup_create_error'] = '패키지 백업을 생성하지 못했습니다.';
$lang['package_backup_dir_failed'] = '백업 디렉터리를 생성하지 못했습니다: %s';
$lang['package_backup_missing'] = '백업 파일이 존재하지 않습니다.';
$lang['package_backup_path_error'] = '백업 파일 경로를 확인할 수 없습니다.';
$lang['package_backup_request_invalid'] = '잘못된 백업 요청입니다.';
$lang['package_backup_restore_error'] = '패키지 백업을 복원하지 못했습니다.';
$lang['package_catalog_type_unknown'] = '알 수 없는 카탈로그 유형입니다.';
$lang['package_checksum_error'] = '패키지 체크섬 검증에 실패했습니다.';
$lang['package_copy_files_error'] = '대상 위치로 패키지 파일을 복사하지 못했습니다.';
$lang['package_copy_updates_error'] = '대상 위치로 업데이트 파일을 복사하지 못했습니다.';
$lang['package_dest_dir_failed'] = '대상 디렉터리를 생성하지 못했습니다: %s';
$lang['package_destination_error'] = '패키지 대상 경로를 확인할 수 없습니다.';
$lang['package_download_dir_failed'] = '다운로드 디렉터리를 생성하지 못했습니다: %s';
$lang['package_download_empty'] = '패키지 다운로드가 빈 응답을 반환했습니다.';
$lang['package_download_request_invalid'] = '잘못된 패키지 다운로드 요청입니다.';
$lang['package_extract_failed'] = 'ZIP %s을(를) 압축 해제하지 못했습니다.';
$lang['package_invalid_lang_files'] = '잘못된 언어 — 필수 애플리케이션 언어 파일이 누락되었습니다.';
$lang['package_invalid_lang_structure'] = '잘못된 언어 — admin 및/또는 ci3 디렉터리가 누락되었습니다.';
$lang['package_invalid_missing_info'] = '잘못된 %s: "info.php"가 누락되었습니다.';
$lang['package_invalid_module_structure'] = '잘못된 모듈 — 필수 config 및/또는 controllers 디렉터리가 누락되었습니다.';
$lang['package_invalid_plugin_boot'] = '잘못된 플러그인 — "boot.php"가 누락되었습니다.';
$lang['package_invalid_plugin_contents'] = '잘못된 플러그인 — 플러그인에는 컨트롤러나 뷰(views)가 포함될 수 없습니다.';
$lang['package_invalid_theme_boot'] = '잘못된 테마 — "boot.php"가 누락되었습니다.';
$lang['package_invalid_theme_views'] = '잘못된 테마 — views 디렉터리가 누락되었습니다.';
$lang['package_no_root_dir'] = '패키지에 루트 디렉터리가 없습니다.';
$lang['package_not_downloadable'] = '이 패키지는 공개적으로 다운로드할 수 없습니다.';
$lang['package_not_in_registry'] = '공개 레지스트리에서 패키지를 사용할 수 없습니다.';
$lang['package_request_invalid'] = '잘못된 패키지 요청입니다.';
$lang['package_rollback_request_invalid'] = '잘못된 롤백 요청입니다.';
$lang['package_root_mismatch'] = '패키지 아카이브 루트가 %s와(과) 일치하지 않습니다.';
$lang['package_single_root_required'] = '패키지에는 정확히 하나의 루트 디렉터리가 포함되어야 합니다.';
$lang['package_source_error'] = '패키지 소스를 확인할 수 없습니다.';
$lang['package_system_core_restricted'] = '시스템 구성 요소는 패키지로 설치할 수 없습니다.';
$lang['package_temp_dir_failed'] = '임시 디렉터리를 생성하지 못했습니다: %s';
$lang['package_type_unknown'] = '알 수 없는 패키지 유형입니다.';
$lang['package_update_request_invalid'] = '잘못된 패키지 업데이트 요청입니다.';
$lang['package_update_root_mismatch'] = '업데이트 아카이브 루트가 %s와(과) 일치하지 않습니다.';
$lang['package_upload_dir_failed'] = '업로드 디렉터리를 생성하지 못했습니다: %s';
$lang['package_url_invalid'] = '잘못된 패키지 배포 URL입니다.';
$lang['package_write_failed'] = '패키지를 %s에 기록하지 못했습니다.';
$lang['package_zip_not_found'] = '패키지 ZIP 파일이 존재하지 않습니다: %s';

/**
 * ---------------------------------------------------------------
 * Updates Section
 * ---------------------------------------------------------------
 * Language lines for updates section.
 */
$lang['update_available'] = '새로운 업데이트가 있습니다!';
$lang['update_backup_error'] = '기존 패키지의 백업을 생성할 수 없습니다. 업데이트가 중단되었습니다.';
$lang['update_check_disabled'] = '자동 업데이트 확인이 비활성화되어 있습니다. 업데이트를 보려면 활성화하세요.';
$lang['update_check_error'] = '현재 업데이트 확인을 실행할 수 없습니다.';
$lang['update_check_success'] = '업데이트 확인이 성공적으로 완료되었습니다.';
$lang['update_install_error'] = '패키지를 설치할 수 없습니다. 이전 버전이 유지되었습니다.';
$lang['update_install_success'] = '패키지가 최신 버전으로 성공적으로 업데이트되었습니다.';
$lang['update_interval_3days'] = '3일마다';
$lang['update_interval_biweekly'] = '2주마다';
$lang['update_interval_daily'] = '매일';
$lang['update_interval_monthly'] = '한 달에 한 번';
$lang['update_interval_weekly'] = '일주일에 한 번';
$lang['update_not_available'] = '웹사이트가 최신 상태입니다.';
$lang['update_rollback_error'] = '이전 버전을 복원할 수 없습니다. 수동 개입이 필요할 수 있습니다.';
$lang['update_rollback_success'] = '이전 버전이 성공적으로 복원되었습니다.';
$lang['updates_available'] = '사용 가능한 업데이트';
$lang['updates_check_now'] = '지금 확인';
$lang['updates_check_now_confirm'] = '지금 업데이트를 확인하시겠습니까?';
$lang['updates_current_version'] = '현재 버전';
$lang['updates_enable'] = '업데이트 활성화';
$lang['updates_last_check'] = '마지막 확인: %s';
$lang['updates_latest_version'] = '최신 버전';
$lang['updates_next_check'] = '다음 예정된 확인: %s';
$lang['updates_previous_version'] = '이전 버전';
$lang['updates_recent'] = '최근 업데이트됨';

/**
 * ---------------------------------------------------------------
 * Firewall Section
 * ---------------------------------------------------------------
 * Language lines for the system firewall section.
 */
$lang['admin_firewall_ban_error'] = '지정된 IP 주소 차단에 실패했습니다.';
$lang['admin_firewall_ban_success'] = 'IP 주소가 성공적으로 차단되었습니다.';
$lang['admin_firewall_block_ip'] = 'IP 주소 차단';
$lang['admin_firewall_delete_confirm'] = '선택한 IP 주소의 차단을 해제하시겠습니까?';
$lang['admin_firewall_delete_error'] = '선택한 IP 주소 차단 해제에 실패했습니다.';
$lang['admin_firewall_delete_success'] = '선택한 IP 주소가 성공적으로 차단 해제되었습니다.';
$lang['admin_firewall_duration'] = '차단 기간';
$lang['admin_firewall_permanent'] = '영구';
$lang['admin_firewall_reason'] = '차단 사유';
$lang['admin_firewall_tip'] = '반복되는 위반 또는 의심스러운 활동으로 인해 방화벽에 의해 차단된 IP 주소를 확인하고 관리합니다.';

// Settings
$lang['404_ban_duration'] = '404 차단 기간';
$lang['404_threshold'] = '404 스트라이크 제한';
$lang['uri_ban_duration'] = 'URI 차단 기간';
$lang['uri_strike_threshold'] = 'URI 스트라이크 제한';

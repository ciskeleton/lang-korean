<?php

/**
 * System emails language lines.
 *
 * @package     CiSkeleton\Core
 * @subpackage  Language
 * @category    Core
 *
 * @author      Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright   2018-present, Kader Bouyakoub
 * @license     MIT
 * @link        https://opensource.org/license/mit
 *
 * SPDX-License-Identifier: MIT
 */

// ====================================================================
// SYSTEM NOTIFICATIONS
// ====================================================================

// ----------------------------------------------------------------
// Update Available
// ----------------------------------------------------------------

$lang['emails_updates_available_subject'] = '시스템 업데이트가 있습니다';
$lang['emails_updates_available_message'] = <<<EOT
안녕하세요,

{site_anchor}에 대한 새로운 시스템 업데이트가 감지되었습니다.

이 업데이트에는 보안 수정 사항, 성능 개선 사항 또는 새로운 기능이 포함될 수 있습니다.
가능한 한 빨리 검토하시기 바랍니다.

사용 가능한 업데이트는 관리자 대시보드에서 확인 및 관리하실 수 있습니다:
{link}

이미 업데이트를 확인하거나 적용하신 경우 추가 조치가 필요하지 않습니다.

본 메일은 {site_name}에서 발송된 자동 시스템 메시지입니다.
이 메일에 답장하지 마십시오.

-- {site_name}
EOT;

// ====================================================================
// USER ACCOUNTS
// ====================================================================

// ----------------------------------------------------------------
// Account Activation Request
// ----------------------------------------------------------------

$lang['emails_account_activation_request_subject'] = '계정 활성화';
$lang['emails_account_activation_request_message'] = <<<EOT
안녕하세요, {name}님.

{site_anchor}에 가입해 주셔서 감사합니다. 회원님의 계정은 생성되었으며, 사용하시기 전에 활성화가 필요합니다.

계정을 활성화하려면 아래 링크를 클릭하거나 브라우저에 복사하여 붙여넣어 주세요:
{link}

감사합니다.
-- {site_name} 팀.
EOT;

// ----------------------------------------------------------------
// Resend Account Activation Link
// ----------------------------------------------------------------

$lang['emails_account_activation_resend_subject'] = '새 활성화 링크';
$lang['emails_account_activation_resend_message'] = <<<EOT
안녕하세요, {name}님.

회원님의 계정이 아직 활성화되지 않아 {site_anchor}에서 새 활성화 링크를 요청하셨습니다.
계정을 활성화하려면 아래 링크를 클릭하거나 브라우저에 복사하여 붙여넣어 주세요:
{link}

이 요청을 본인이 하지 않으셨다면 별도로 조치하실 필요는 없습니다.

이 요청은 다음 IP 주소에서 발생했습니다: {ip_link}

감사합니다.
-- {site_name} 팀.
EOT;

// ----------------------------------------------------------------
// Account Activation Successful
// ----------------------------------------------------------------

$lang['emails_account_activation_success_subject'] = '계정이 활성화되었습니다';
$lang['emails_account_activation_success_message'] = <<<EOT
안녕하세요, {name}님.

{site_anchor}에서 귀하의 계정이 성공적으로 활성화되었습니다. 이제 언제든지 <a href="{login_url}" target="_blank" rel="noopener">로그인</a> 하실 수 있습니다.

저희와 함께하는 동안 즐거운 시간 되시기를 바라며, 진심으로 감사드립니다.

감사합니다.
-- {site_name} 팀.
EOT;

// ----------------------------------------------------------------
// Pending Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_pending_subject'] = '계정 승인 대기 중';
$lang['emails_account_approval_pending_message'] = <<<EOT
안녕하세요, {name}님.

{site_anchor}에 가입해 주셔서 감사합니다. 회원님의 계정은 생성되었지만, 활성화되기 위해서는 사이트 관리자 승인이 필요합니다.
이 중요한 절차에 대해 불편을 드려 진심으로 사과드리며, 보안을 위한 조치임을 양해 부탁드립니다.

계정이 승인되면 확인 이메일을 보내드릴 예정입니다.

즐거운 시간 보내시길 바라며, 진심을 담아 인사드립니다.

-- {site_name} 팀.
EOT;

// ----------------------------------------------------------------
// Successful Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_success_subject'] = '계정이 승인되었습니다';
$lang['emails_account_approval_success_message'] = <<<EOT
{name}님 안녕하세요,

좋은 소식입니다! {site_anchor}에서 회원님의 계정이 승인되었습니다.

이제 로그인하여 바로 계정을 사용할 수 있습니다:
{link}

함께하게 되어 기쁩니다.

-- {site_name} 팀
EOT;

// ----------------------------------------------------------------
// Account Restoration
// ----------------------------------------------------------------

$lang['emails_account_restored_subject'] = '계정이 복원되었습니다';
$lang['emails_account_restored_message'] = <<<EOT
안녕하세요, {name}님.

이 이메일은 {site_anchor}에서 회원님의 계정이 성공적으로 복구되었음을 알려드립니다.

다시 돌아오신 것을 환영합니다. 이번에는 더욱 즐거운 시간을 보내시길 바랍니다.

감사합니다.
-- {site_name} 팀.
EOT;

// ----------------------------------------------------------------
// Welcome Message
// ----------------------------------------------------------------

$lang['emails_account_welcome_subject'] = '{site_name}에 오신 것을 환영합니다';
$lang['emails_account_welcome_message'] = <<<EOT
안녕하세요, {name}님.

대부분의 사이트는 회원 가입 후 긴 환영 이메일 시리즈를 보냅니다.

하지만 저희는 다릅니다.
{site_anchor}에 가입해 주셔서 진심으로 감사드리며, 따뜻하게 환영합니다.

즐거운 시간 보내시길 바라며, 진심을 담아 인사드립니다.

-- {site_name} 팀.
EOT;

// ----------------------------------------------------------------
// Email Change Request
// ----------------------------------------------------------------

$lang['emails_email_change_request_subject'] = '이메일 변경 요청';
$lang['emails_email_change_request_message'] = <<<EOT
안녕하세요, {name}님.

회원님의 {site_anchor} 계정에 대한 이메일 변경 요청을 받았기 때문에 이 메일을 보내드립니다.

계속 진행하려면 아래 링크를 클릭하거나 브라우저에 복사하여 붙여넣어 주세요:
{link}

이메일 변경을 요청하지 않으셨다면 이 메일은 무시하셔도 됩니다.

이 요청은 다음 IP 주소에서 발생했습니다: {ip_link}

감사합니다.
-- {site_name} 팀.
EOT;

// ----------------------------------------------------------------
// Successful Email Change
// ----------------------------------------------------------------

$lang['emails_email_change_success_subject'] = '이메일 주소가 변경되었습니다';
$lang['emails_email_change_success_message'] = <<<EOT
안녕하세요, {name}님.

이 이메일은 {site_anchor}에서 사용된 이메일 주소가 성공적으로 변경되었음을 확인해드립니다.

만약 본인이 수행하지 않은 작업이라면 가능한 빨리 저희에게 연락하여 문제를 해결해 주세요.

이 작업은 다음 IP 주소에서 수행되었습니다: {ip_link}

감사합니다.
-- {site_name} 팀.
EOT;

// ----------------------------------------------------------------
// Login Alert: Failure
// ----------------------------------------------------------------

$lang['emails_login_alert_failure_subject'] = '로그인 실패 알림';
$lang['emails_login_alert_failure_message'] = <<<EOT
안녕하세요, {name}님.

최근 누군가가 {site_name} 계정에 잘못된 비밀번호로 로그인하려고 시도했습니다.

서버 날짜: {date}
기기: {browser}, {platform}
IP 주소: {ip_link}

본인이 아닌 경우 걱정하지 않으셔도 됩니다. 로그인 시도는 실패했습니다.

만약 본인이시고 비밀번호가 기억나지 않는다면, 아래 링크를 클릭하여 비밀번호를 재설정해 주세요:
{reset_link}

로그인에 문제가 있다면, 저희 팀에 문의하거나 원클릭 로그인 링크를 요청하실 수 있습니다.

-- {site_name} 팀.
EOT;

// ----------------------------------------------------------------
// Login Alert: Success
// ----------------------------------------------------------------

$lang['emails_login_alert_success_subject'] = '로그인 성공 알림';
$lang['emails_login_alert_success_message'] = <<<EOT
안녕하세요, {name}님.

회원님의 {site_name} 계정에 성공적으로 로그인한 기록이 있어 이 메일을 보내드립니다.

서버 날짜: {date}
기기: {browser}, {platform}
IP 주소: {ip_link}

로그인한 사람이 본인이라면 이 메일은 무시하셔도 됩니다.

본인이 아닌 경우, 계정 보안을 위해 즉시 비밀번호를 변경해 주세요.

도움이 필요하시면 고객 지원팀에 문의해 주세요.

-- {site_name} 팀.
EOT;

// ----------------------------------------------------------------
// One-Click Login Link
// ----------------------------------------------------------------

$lang['emails_login_magic_link_subject'] = '빠른 로그인 링크';
$lang['emails_login_magic_link_message'] = <<<EOT
안녕하세요 {name}님,

{site_anchor} 계정에 대한 원클릭 로그인 요청을 하셨습니다.

아래 링크를 클릭하거나 브라우저에 복사하여 붙여넣으면 즉시 로그인됩니다:
{link}

이 링크는 15분 후에 만료됩니다. 요청하지 않으셨다면 이 이메일을 무시해주세요.

이 요청은 다음 IP 주소에서 발생했습니다: {ip_link}

감사합니다.
-- {site_name} 팀.
EOT;

// ----------------------------------------------------------------
// Login: Two-Factor Authentication Code
// ----------------------------------------------------------------

$lang['emails_login_two_factor_code_subject'] = '2단계 인증';
$lang['emails_login_two_factor_code_message'] = <<<EOT
안녕하세요, {name}님.

당신의 이중 인증 코드: <strong>{code}</strong>

언제든지 계정 설정에서 이중 인증을 비활성화할 수 있습니다.

이 작업은 다음 IP 주소에서 수행되었습니다: {ip_link}.

감사합니다.
-- {site_name} 팀.
EOT;

// ----------------------------------------------------------------
// Password Change Request
// ----------------------------------------------------------------

$lang['emails_password_change_request_subject'] = '비밀번호 재설정 요청';
$lang['emails_password_change_request_message'] = <<<EOT
안녕하세요, {name}님.

회원님의 {site_anchor} 계정에 대해 비밀번호 재설정 요청이 접수되어 이 이메일을 보내드립니다.

계속 진행하려면 아래 링크를 클릭하거나 브라우저에 복사하여 붙여넣어 주세요:
{link}

비밀번호 재설정을 요청하지 않으셨다면 이 메일은 무시하셔도 됩니다.

이 요청은 다음 IP 주소에서 발생했습니다: {ip_link}

감사합니다.
-- {site_name} 팀.
EOT;

// ----------------------------------------------------------------
// Password Change Successful
// ----------------------------------------------------------------

$lang['emails_password_change_success_subject'] = '비밀번호가 성공적으로 변경되었습니다';
$lang['emails_password_change_success_message'] = <<<EOT
안녕하세요, {name}님.

이 이메일은 {site_anchor}에서 비밀번호가 성공적으로 변경되었음을 확인합니다. 이제 새로운 비밀번호로 <a href="{login_url}" target="_blank" rel="noopener">로그인</a>하실 수 있습니다.

이 작업을 본인이 수행하지 않았다면, 문제를 해결할 수 있도록 가능한 빨리 저희에게 연락해 주세요.

이 작업은 다음 IP 주소에서 수행되었습니다: {ip_link}.

감사합니다.
-- {site_name} 팀.
EOT;

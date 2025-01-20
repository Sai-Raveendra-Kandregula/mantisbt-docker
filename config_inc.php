<?php

$g_db_type                  = 'mysqli';

$g_hostname                 = getenv('MYSQL_HOST') !== false ? getenv('MYSQL_HOST') : 'db';
$g_database_name            = getenv('MYSQL_DATABASE') !== false ? getenv('MYSQL_DATABASE') : 'bugtracker';
$g_db_username              = getenv('MYSQL_USER') !== false ? getenv('MYSQL_USER') : 'mantis';
$g_db_password              = getenv('MYSQL_PASSWORD') !== false ? getenv('MYSQL_PASSWORD') : 'mantis';


$g_crypto_master_salt       = getenv('MASTER_SALT');

# Configure email
$g_phpMailer_method         = PHPMAILER_METHOD_SMTP;                                                           # or PHPMAILER_METHOD_MAIL, PHPMAILER_METHOD_SENDMAIL
$g_smtp_host                = getenv('SMTP_HOST') !== false ? getenv('SMTP_HOST') : 'localhost';               # used with PHPMAILER_METHOD_SMTP
$g_smtp_port                = getenv('SMTP_PORT') !== false ? getenv('SMTP_PORT') : 25;           
$g_smtp_connection_mode     = getenv('SMTP_CONNECTION_MODE') !== false ? getenv('SMTP_CONNECTION_MODE') : '';  # used with PHPMAILER_METHOD_SMTP
$g_smtp_username            = getenv('SMTP_USERNAME') !== false ? getenv('SMTP_USERNAME') : '';                # used with PHPMAILER_METHOD_SMTP
$g_smtp_password            = getenv('SMTP_PASSWORD') !== false ? getenv('SMTP_PASSWORD') : '';
$g_webmaster_email          = getenv('EMAIL_WEBMASTER') !== false ? getenv('EMAIL_WEBMASTER') : null;
$g_from_email               = getenv('EMAIL_FROM') !== false ? getenv('EMAIL_FROM') : null;
$g_return_path_email        = getenv('EMAIL_RETURN_PATH') !== false ? getenv('EMAIL_RETURN_PATH') : null;

# Instance Settings
$g_path                             = getenv('MANTIS_URL') !== false ? getenv('MANTIS_URL') : null;
$g_short_path                       = getenv('MANTIS_URL_SHORT') !== false ? getenv('MANTIS_URL_SHORT') : null;
$g_custom_headers                   = getenv('MANTIS_CUSTOM_HEADERS') !== false ? getenv('MANTIS_CUSTOM_HEADERS') : null;
$g_antispam_max_event_count         = getenv('MANTIS_ANTISPAM_EV_COUNT') !== false ? getenv('MANTIS_ANTISPAM_EV_COUNT') : 10;
$g_antispam_time_window_in_seconds  = getenv('MANTIS_ANTISPAM_DURATION') !== false ? getenv('MANTIS_ANTISPAM_DURATION') : 3600;

$g_login_method                       = getenv('MANTIS_LOGIN_METHOD') !== false ? constant(getenv('MANTIS_LOGIN_METHOD')) : null;

# ldap settings
$g_ldap_server                      = getenv('MANTIS_LDAP_SERVER') !== false ? getenv('MANTIS_LDAP_SERVER') : null;
$g_ldap_use_starttls                = getenv('MANTIS_LDAP_STARTTLS') !== false ? (getenv('MANTIS_LDAP_STARTTLS') === 'ON' ? 1 : 0) : null;
$g_ldap_tls_protocol_min            = getenv('MANTIS_LDAP_TLS_PROTOCOL_MIN') !== false ? getenv('MANTIS_LDAP_TLS_PROTOCOL_MIN') : null;
$g_ldap_root_dn                     = getenv('MANTIS_LDAP_ROOTDN') !== false ? getenv('MANTIS_LDAP_ROOTDN') : null;
$g_ldap_organization                = getenv('MANTIS_LDAP_ORGANIZATION') !== false ? getenv('MANTIS_LDAP_ORGANIZATION') : null;
$g_ldap_protocol_version            = getenv('MANTIS_LDAP_PROTOCOL_VERSION') !== false ? getenv('MANTIS_LDAP_PROTOCOL_VERSION') : null;
$g_ldap_network_timeout             = getenv('MANTIS_LDAP_NETWORK_TIMEOUT') !== false ? getenv('MANTIS_LDAP_NETWORK_TIMEOUT') : null;
$g_ldap_follow_referrals            = getenv('MANTIS_LDAP_FOLLOW_REFERRALS') !== false ? getenv('MANTIS_LDAP_FOLLOW_REFERRALS') : null;
$g_ldap_bind_dn                     = getenv('MANTIS_LDAP_BIND_DN') !== false ? getenv('MANTIS_LDAP_BIND_DN') : null;
$g_ldap_bind_passwd                 = getenv('MANTIS_LDAP_BIND_PASSWD') !== false ? getenv('MANTIS_LDAP_BIND_PASSWD') : null;
$g_ldap_uid_field                   = getenv('MANTIS_LDAP_UID_FIELD') !== false ? getenv('MANTIS_LDAP_UID_FIELD') : null;
$g_ldap_email_field                 = getenv('MANTIS_LDAP_EMAIL_FIELD') !== false ? getenv('MANTIS_LDAP_EMAIL_FIELD') : null;
$g_ldap_realname_field              = getenv('MANTIS_LDAP_REALNAME_FIELD') !== false ? getenv('MANTIS_LDAP_REALNAME_FIELD') : null;
$g_use_ldap_realname                = getenv('MANTIS_LDAP_USE_REALNAME') !== false ? (getenv('MANTIS_LDAP_USE_REALNAME') === 'ON' ? 1 : 0) : null;
$g_use_ldap_email                   = getenv('MANTIS_LDAP_USE_EMAIL') !== false ? (getenv('MANTIS_LDAP_USE_EMAIL') === 'ON' ? 1 : 0) : null;

$g_log_level = getenv('MANTIS_LOG_LEVEL') !== false ? constant(getenv('MANTIS_LOG_LEVEL')) : null;

// include 'config_inc_addon.php';
<?php 
/**
*
* @author A. Smythy C Costa 
* <smythy.costa@gmail.com>
*
*/	

// ====================  [charset e production] ====================
header("Content-type: text/html; charset=utf-8");//headerr charset
ini_set('default_charset','UTF-8');              //charset ini_set
ini_set('error_reporting', E_ALL);               //error_reporting
ini_set('display_errors', 1);                    //em produção => 0; em desenvolvimento => 1
date_default_timezone_set('America/Recife');     //set timezone


// ====================  [DATABASES]  ====================
define('HOST', '127.0.0.1');
define('USER', 'root');
define('PASS', '');
define('BD', 'database');


// ====================  [PATHs]   ====================
define('PATH', 'http://localhost/php_history-HTML5');
define('PATH_STATIC', ''.PATH.'/assets');
define('PATH_ADMIN', ''.PATH.'/admin');


// ====================  [SMTP SERVER]   ====================
define('HOST_SMTP', 'smtp.gmail.com');
define('SECURE_SMTP', 'tls');                           //ssl //tls
define('PORT_SMTP', 587);                               //587  //465
define('AUTH_SMTP', true);
define('USERNAME_SMTP', 'user-test@gmail.com'); //email
define('PASSWORD_SMTP', 'secret');              //secret password
define('SUBJECT_SMTP', 'SUBJECT');              //SUBJECT


// ====================  [EMAIL OF CONTACT]   ====================
define('EMAIL_CONTATO', 'smythy.costa@gmail.com');


// ====================  [ARRAY OF ERRS]   ====================
$reg_errors = array();


// ====================  [SESSION]   ====================
ob_start();
session_start();
define('SESSION_TIME', 60);  //tempo em minutos
$time_expire = 3600;         //tempo em minutos

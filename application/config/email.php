<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Profiler Sections
| -------------------------------------------------------------------------
| This file lets you determine whether or not various sections of Email
| data are displayed when the Profiler is enabled.
| Please see the user guide for info:
|
|	https://codeigniter.com/user_guide/general/email.html
|
*/

/*
|--------------------------------------------------------------------------
| SMTP configuration
|--------------------------------------------------------------------------
| In this example, i'm using a default Zoho Mail configuration
*/
$config['protocol'] = 'smtp';
$config['smtp_host'] = "smtp.sendgrid.com";
$config['smtp_port'] = 587;
$config['smtp_user'] = "sanjeeta1.kumari@gmail.com";
$config['smtp_pass'] = 'harshsurya1990';
$config['charset'] = "iso-8859-1";

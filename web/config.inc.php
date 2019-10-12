<?php // -*-mode: PHP; coding:utf-8;-*-
namespace MRBS;

/**************************************************************************
 *   MRBS Configuration File
 *   Configure this file for your site.
 *   You shouldn't have to modify anything outside this file.
 *
 *   This file has already been populated with the minimum set of configuration
 *   variables that you will need to change to get your system up and running.
 *   If you want to change any of the other settings in systemdefaults.inc.php
 *   or areadefaults.inc.php, then copy the relevant lines into this file
 *   and edit them here.   This file will override the default settings and
 *   when you upgrade to a new version of MRBS the config file is preserved.
 *
 *   NOTE: if you include or require other files from this file, for example
 *   to store your database details in a separate location, then you should
 *   use an absolute and not a relative pathname.
 **************************************************************************/

/**********
 * Timezone
 **********/
 
// The timezone your meeting rooms run in. It is especially important
// to set this if you're using PHP 5 on Linux. In this configuration
// if you don't, meetings in a different DST than you are currently
// in are offset by the DST offset incorrectly.
//
// Note that timezones can be set on a per-area basis, so strictly speaking this
// setting should be in areadefaults.inc.php, but as it is so important to set
// the right timezone it is included here.
//
// When upgrading an existing installation, this should be set to the
// timezone the web server runs in.  See the INSTALL document for more information.
//
// A list of valid timezones can be found at http://php.net/manual/timezones.php
// The following line must be uncommented by removing the '//' at the beginning
$timezone = "Asia/Kuala_Lumpur";


/*******************
 * Database settings
 ******************/
// Which database system: "pgsql"=PostgreSQL, "mysql"=MySQL
$dbsys = "mysql";
// Hostname of database server. For pgsql, can use "" instead of localhost
// to use Unix Domain Sockets instead of TCP/IP. For mysql "localhost"
// tells the system to use Unix Domain Sockets, and $db_port will be ignored;
// if you want to force TCP connection you can use "127.0.0.1".
$db_host = "localhost";
// If you need to use a non standard port for the database connection you
// can uncomment the following line and specify the port number
// $db_port = 1234;
// Database name:
$db_database = "mrbs";
// Schema name.  This only applies to PostgreSQL and is only necessary if you have more
// than one schema in your database and also you are using the same MRBS table names in
// multiple schemas.
//$db_schema = "public";
// Database login user name:
$db_login = "root";
// Database login password:
$db_password = '';
// Prefix for table names.  This will allow multiple installations where only
// one database is available
$db_tbl_prefix = "mrbs_";
// Set $db_persist to TRUE to use PHP persistent (pooled) database connections.  Note
// that persistent connections are not recommended unless your system suffers significant
// performance problems without them.   They can cause problems with transactions and
// locks (see http://php.net/manual/en/features.persistent-connections.php) and although
// MRBS tries to avoid those problems, it is generally better not to use persistent
// connections if you can.
$db_persist = FALSE;


/* Add lines from systemdefaults.inc.php and areadefaults.inc.php below here
   to change the default configuration. Do _NOT_ modify systemdefaults.inc.php
   or areadefaults.inc.php.  */
$mrbs_admin = "";
$mrbs_admin_email = "";

$mrbs_company = "";

// Start of week: 0 for Sunday, 1 for Monday, etc.
$weekstarts = 1;

// Time format in pages. FALSE to show dates in 12 hour format, TRUE to show them
// in 24 hour format
$twentyfourhour_format = FALSE;

// Define default starting view (month, week or day)
// Default is day
// $default_view = "month";

// 'auth_config' user database
// Format: $auth["user"]["name"] = "password";
unset($auth["user"]);              // Include this when copying to config.inc.php

// $enable_periods is settable on a per-area basis.
$enable_periods = TRUE;  // Default value for new areas

// The beginning of the first slot of the day (DEFAULT VALUES FOR NEW AREAS)
$morningstarts         = 9;   // must be integer in range 0-23
$morningstarts_minutes = 0;   // must be integer in range 0-59

// The beginning of the last slot of the day (DEFAULT VALUES FOR NEW AREAS)
$eveningends           = 07;  // must be integer in range 0-23
$eveningends_minutes   = 0;   // must be integer in range 0-59

unset($periods);    // Include this line when copying to config.inc.php
$periods[] = "09:00 - 10:00";
$periods[] = "10:00 - 11:00";
$periods[] = "11:00 - 12:00";
$periods[] = "12:00 - 01:00";
$periods[] = "01:00 - 02:00";
$periods[] = "02:00 - 03:00";
$periods[] = "03:00 - 04:00";
$periods[] = "04:00 - 05:00";
$periods[] = "05:00 - 06:00";
$periods[] = "06:00 - 07:00";

// If you prefer dates as "10 Jul" instead of "Jul 10" ($dateformat = true in
// MRBS 1.4.5 and earlier) then use
$strftime_format['daymonth']     = "%d %b";

// Formats used for dates and times.   For formatting options
// see http://php.net/manual/function.strftime.php
$strftime_format['date']         = "%d %B %Y (%A)";  // Used in Day view


// To display the mini caldandars at the bottom of the day week and month views
// set this value to true
$display_calendar_bottom = FALSE; 

// Below is a basic default array which ensures there are at least some types defined.
// The proper type definitions should be made in config.inc.php.
//
// Each type has a color which is defined in the array $color_types in the styling.inc
// file in the Themes directory

unset($booking_types);    // Include this line when copying to config.inc.php
// $booking_types[] = "E";
$booking_types[] = "I";

// If you don't want to use types then uncomment the following line.  (The booking will
// still have a type associated with it in the database, which will be the default type.)
// unset($booking_types);

// Default type for new bookings
// (Note that the default type does not apply if the type field is mandatory)
$default_type = "I";

// If you don't want ordinary users to be able to see the other users'
// details then set this to true.  (Only relevant when using 'db' authentication]
$auth['only_admin_can_see_other_users'] = true;

// Use the $custom_css_url to override the standard MRBS CSS.
$custom_css_url = 'css/custom.css';

// Configuration parameters for 'cookie' session scheme

// The encryption secret key for the session tokens. You are strongly
// advised to change this if you use this session scheme
// $auth["session_cookie"]["secret"] = "This isn't a very good secret!";
// The expiry time of a session, in seconds. Set to 0 to use session cookies
// $auth["session_cookie"]["session_expire_time"] = (60*5); // 5 minutes


// The expiry time of a session cookie, in seconds
// N.B. Long session expiry times rely on PHP not retiring the session
// on the server too early. If you only want session cookies to be used,
// set this to 0.

$auth["session"] = "php"; 
// $auth["session_php"]["session_expire_time"] = (60*10); // 10 minutes
$auth["session_php"]["inactivity_expire_time"] = (60*10); // 10 minutes
$refresh_rate = 600;

// Set this to the expiry time for a session after a period of inactivity
// in seconds.   Setting to zero means that the sesion will not expire after
// a period of activity - but note that it will expire if the session cookie
// happens to expire (see above).  Note that if you have $refresh_rate set and
// your system is not capable of doing Ajax refreshes but instead uses a <meta>
// tag to do the refresh, then these refreshes will count as activity - this
// be the case if you have JavaScript disabled on the client.
// $auth["session_php"]["inactivity_expire_time"] = 0; // seconds

// Set to FALSE if you don't want users to be able to send reminders
// to admins when bookings are still awaiting approval.
$reminders_enabled = FALSE;

// Trailer type.   false gives a trailer complete with links to days, weeks and months before
// and after the current date.    true gives a simpler trailer that just has links to the
// current day, week and month.
$simple_trailer = TRUE;

// To display the mini caldandars at the bottom of the day week and month views
// set this value to true
$display_calendar_bottom = true; 

// $area_list_format = "select";

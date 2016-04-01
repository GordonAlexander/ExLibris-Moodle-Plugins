<?php

/**
 * Version details
 *
 * @copyright &copy; 2014 oMbiel
 * @author oMbiel
 * @package oMbiel_webservices
 * @version 1.0
 */
global $CFG;

$string['pluginname'] = empty($CFG->ombielalertsname)?'oMbiel alerts':$CFG->ombielalertsname;

$string['ombielalertsname'] = 'Alerts name';
$string['configombielalertsname'] = 'The name of your alerts, for example "My Uni alerts" (this will not take effect until the cache is purged)';
$string['ombielalertsserverendpoint'] = 'Alert server endpoint';
$string['configombielalertsserverendpoint'] = 'URL of the oMbiel alerts server for example ';
$string['ombielalertsserverusername'] = 'Server username';
$string['configombielalertsserverusername'] = 'Username to log on to the alert server.';
$string['ombielalertsserverpassword'] = 'Server password';
$string['configombielalertsserverpassword'] = 'Password to log on to the alert server.';
$string['ombielalertsorgcode'] = 'Organisation code';
$string['configombielalertsorgcode'] = 'The code for your organisation.';
$string['ombielalertsorgpassword'] = 'Organisation password';
$string['configombielalertsorgpassword'] = 'The password that goes with your organisation code.';
$string['ombielalertsaekmenuid'] = 'AEK Menu ID';
$string['configombielalertsaekmenuid'] = 'The menu id for the Moodle AEK screen in campusm. Will be in the format: AEKnnnn';
$string['ombielalertsaekserviceid'] = 'AEK Service ID';
$string['configombielalertsaekserviceid'] = 'the service id for the Moodle AEK screen in campusm.';
$string['replytomessage'] = 'Reply to message';

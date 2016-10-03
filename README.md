# Moodle Plugins for integrating with ExLibris campusM

### ExLibris campusM - [http://campusm.com](hrrp://campusm.com)

### Moodle - [http://moodle.org](http://moodle.org)

Tested with versions 2.9 through 3.1 of Moodle.

## There are two plugins, Web Services and Alerts

### Web Services

This is required for the campusM - Moodle integration to work.

#### Installation

Unzip the plugin and put it in the local folder. If the plugin is in the correct place the version.php file will be at [Moodle document root]/local/ombiel_webservices/version.php.

##### Install and Configure the plugin


1. Log in to Moodle as admin.
2. Go to Site administration > Notifications and install the plugin.
3. Complete the plugin settings form as follows:
  1. Token timeout - defaults to session timeout.
  2. Allow token login - set to yes to allow users to seamlessly log into native Moodle website from the app.
  3. campusM LDAP end point - if your instance of Moodle uses internal authentication or SSO that checks the password from within Moodle this should be empty. However, if you use SSO that requires redirection to an identity provider (e.g. Shibboleth) set this to the CampusM LDAP Service as specified in the App Manager.
  4. campusM LDAP username - if 3.3 is set, this must be the username for the service.
  5. campusM LDAP password - if 3.3 is set, this must be the password for the service.
  6. campusM LDAP method - if 3.3 is set, this must be the login method of the service.

N.B. If these settings need changing they can be found at Site administration > Plugins > Local > oMbiel Webservices.

##### Enable Web Services
1. Go to the web service overview page (Site administration > Plugins > Web services > Overview).
2. Follow the 'Enable web services' link.
3. Tick the  'Enable web services' box and save changes.
4. Go to the web service overview page (Site administration > Plugins > Web services > Overview).
5. Follow the 'Enable protocols' link.
6. Enable SOAP protocol and save changes.

##### Check and Set the User Permissions
1. Go to Site administration > Users > Define Roles.
2. Edit 'Authenticated User'.
3. Check that both 'oMbiel Webservices' permissions are 'Allow'
4. Set 'Web service: SOAP protocol' to 'Allow'

##### Testing the Web Service

1. Token. Tokens are generated by visiting the link below replacing <username> and <password> https://www.yourmoodle.com/local/ombiel_webservices/token.php?username=<username>&password=<password>&service=campusm If the entered credentials are correct this should return a token.

2. Connecting to the Web Service. The web service can be connected to using the following url, replace <token> with the token you generated in 1. https://www.yourmoodle.com/webservice/soap/server.php?wsdl=1&wstoken=<token>. If everything is working correctly this will generate a WSDL (XML) document, check this WSDL contains a reference to ombiel_get_user_courses

### Alerts

This plugin allows Moodle to push messages as campusM alerts.

#### Installation


Unzip the plugin and put it in the local folder. If the plugin is in the correct place the version.php file will be at [Moodle document root]/local/ombiel_webservices/version.php.

##### Install and Configure the Plugin
1. Log in to Moodle as admin.
2. Go to Site administration > Notifications and install the plugin.
3. Complete the plugin settings form. The correct settings can be obtained from ExLibris.
4. Go to Site administration > Development > Purge all caches and click on the Purge all caches button.
5. Go to Site administration > Plugins > Message outputs > Default message outputs and review the default settings.

N.B. If these settings need changing they can be found at Site administration > Plugins > Message outputs.

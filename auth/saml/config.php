<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * config.php - config file for auth/saml based SAML 2.0 login
 *
 * make sure that you define both the SimpleSAMLphp lib directory and config
 * directory for the associated SP and also specify the IdP that it will talk to
 *
 * @originalauthor Martin Dougiamas
 * @author Erlend Strømsvik - Ny Media AS
 * @author Piers Harding - made quite a number of changes
 * @version 1.0
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License
 * @package auth/saml
 */


$SIMPLESAMLPHP_LIB = '/var/simplesamlphp';
$SIMPLESAMLPHP_CONFIG = '/var/simplesamlphp/config';
$SIMPLESAMLPHP_SP = 'default-sp';
// $SIMPLESAMLPHP_RETURN_TO = 'http://some.other.target'; // for when you need to override RelayState.
$SIMPLESAMLPHP_RETURN_TO = null;
// $SIMPLESAMLPHP_ERROR_URL = 'http://some.other.target'; // for when you need to override login error target.
$SIMPLESAMLPHP_ERROR_URL = null;

// Change this to something specific if you don't want users to be sent to
// Moodle $CFG->wwwroot when logout is completed.
$SIMPLESAMLPHP_LOGOUT_LINK = "";

// The alternative to the normal redirect for logout from the logout hook.
// $SIMPLESAMLPHP_LOGOUT_HOOK = 'https://some.moodle.x/auth/saml/index.php?logout=1';
$SIMPLESAMLPHP_LOGOUT_HOOK = '';


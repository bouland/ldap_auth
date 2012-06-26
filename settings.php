<?php
/**
 * Elgg LDAP settings
 * @filesource settings.php
 * @package Elgg.ldap_auth
 * @author Simon Bouland <simon.bouland@inria.fr>
 */

/**
 *  Parameters for LdapServer construct.
 *	Mail server
 *
 * @return array Options ('host', 'port', 'version', 'basedn')
 */
function ldap_auth_settings_mail(){
	return array(	'host' => 'ldaps://ldap.exemple.com',
 					'port' => 636,
 					'version' => 3,
 					'basedn' => 'ou=mail,dc=exemple,dc=com' );
}

/**
 *  Parameters for LdapServer construct.
 *	Annuaire server
 * 
 * @return array Options ('host', 'port', 'version', 'basedn')
 */
function ldap_auth_settings_info(){
	return array(	'host' => 'ldap2.exemple.com',
 					'port' => 9009,
					'version' => 3,
 					'basedn' => 'dc=annu,dc=exemple,dc=com' );
}

/**
 *  Parameters for LdapServer construct.
 *  Authenticate server
 *
 * @return array Options ('host', 'port', 'version', 'basedn')
 */
function ldap_auth_settings_auth(){
	return array(	'host' => 'ldaps://ldap.exemple.fr',
 					'port' => 636,
					'version' => 3,
 					'basedn' => 'ou=people,dc=exemple,dc=com' );
}

/**
 *  matching between LDAP fields and Elgg ones.
 *  Annuaire server
 *
 * @return array Options ('host', 'port', 'version', 'basedn')
 */
function ldap_auth_settings_info_fields()
{
	return array(	'cn' => 'name',
					'l' => 'location',
					'roomNumber' => 'room',
					'telephoneNumber' => 'phone');
}

/**
 *  matching between LDAP fields and Elgg ones.
 *  Authenticate server
 *
 * @return array Options ('host', 'port', 'version', 'basedn')
 */
function ldap_auth_settings_auth_fields()
{
	return array(	'cn' => 'name',
					'ou' => 'location');
}

<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['mongo_db']['active'] = 'default';

$config['mongo_db']['default']['no_auth'] = TRUE;
$config['mongo_db']['default']['hostname'] = '2.2.2.2';
$config['mongo_db']['default']['port'] = '27017';
$config['mongo_db']['default']['username'] = '';
$config['mongo_db']['default']['password'] = '';
$config['mongo_db']['default']['database'] = 'eshop';
$config['mongo_db']['default']['db_debug'] = FALSE;
$config['mongo_db']['default']['return_as'] = 'array';
$config['mongo_db']['default']['write_concerns'] = (int)1;
$config['mongo_db']['default']['journal'] = TRUE;
$config['mongo_db']['default']['read_preference'] = NULL;
$config['mongo_db']['default']['read_preference_tags'] = NULL;

$config['mongo_db']['test']['no_auth'] = FALSE;
$config['mongo_db']['test']['hostname'] = 'localhost';
$config['mongo_db']['test']['port'] = '27017';
$config['mongo_db']['test']['username'] = 'username';
$config['mongo_db']['test']['password'] = 'password';
$config['mongo_db']['test']['database'] = 'database';
$config['mongo_db']['test']['db_debug'] = TRUE;
$config['mongo_db']['test']['return_as'] = 'array';
$config['mongo_db']['test']['write_concerns'] = (int)1;
$config['mongo_db']['test']['journal'] = TRUE;
$config['mongo_db']['test']['read_preference'] = NULL;
$config['mongo_db']['test']['read_preference_tags'] = NULL;

/* End of file database.php */
/* Location: ./application/config/database.php */

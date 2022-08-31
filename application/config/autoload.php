<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$autoload['packages'] = array();
$autoload['libraries'] = array('encryption','email','database');
$autoload['drivers'] = array();
$autoload['helper'] = array('url','file','form','cookie');
$autoload['config'] = array();
$autoload['language'] = array();
$autoload['model'] = array('M_auth','M_chat');

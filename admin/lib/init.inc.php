<?php
// $Id$

if (get_magic_quotes_gpc()) {
    function stripslashes_deep($value)
    {
        $value = is_array($value) ?
                    array_map('stripslashes_deep', $value) :
                    stripslashes($value);

        return $value;
    }

    $_POST = array_map('stripslashes_deep', $_POST);
    $_GET = array_map('stripslashes_deep', $_GET);
    $_COOKIE = array_map('stripslashes_deep', $_COOKIE);
    $_REQUEST = array_map('stripslashes_deep', $_REQUEST);
}

include('../lib/magirc/version.inc.php');
require('../lib/pear/MDB2.php');
require('../lib/smarty/Smarty.class.php');
require('../lib/magirc/DB.class.php');
require('../lib/magirc/Config.class.php');
require('../lib/magirc/denora/Denora.class.php');

// database configuration
class Magirc_DB extends DB {
	function Magirc_DB() {
		if (file_exists('../conf/magirc.cfg.php')) {
			include('../conf/magirc.cfg.php');
		} else {
			die ('magirc.cfg.php configuration file missing');
		}
		$dsn = sprintf("mysqli://%s:%s@%s/%s", $db['username'], $db['password'], $db['hostname'], $db['database']);
		$this->connect($dsn) || die('Error opening Magirc database<br />'.$this->error);
	}
}

class Denora_DB extends DB {
	function Denora_DB() {
		if (file_exists('../conf/denora.cfg.php')) {
			include('../conf/denora.cfg.php');
		} else {
			die ('denora.cfg.php configuration file missing');
		}
		$dsn = sprintf("mysqli://%s:%s@%s/%s", $db['username'], $db['password'], $db['hostname'], $db['database']);
		$this->connect($dsn) || die('Error opening Denora database<br />'.$this->error);
	}
}

// smarty configuration
class Admin_Smarty extends Smarty {
	function Admin_Smarty() {
		$this->template_dir = 'tpl';
		$this->compile_dir = 'tmp';
		$this->config_dir = '../conf';
		$this->cache_dir = 'tmp';
	}
}

?>
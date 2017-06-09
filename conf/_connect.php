<?php
// conf BDD
define('BDD_DRIVER', 'mysql');
define('BDD_SERVER', 'localhost');
define('BDD_USER', 'root');
define('BDD_MDP', '');
define('BDD', 'ateliermvc');

//conf Timezone
date_default_timezone_set('UTC');
setlocale(LC_TIME, 'fr_FR.UTF8');

// définition chemins absolus
define('MODEL', ROOT.DS.'model');
define('VIEWS', ROOT.DS.'views');
define('CLASSDIR', ROOT.DS.'class');
define('LOGS_DIR', ROOT.DS.'logs');

define('SMARTY_TEMPLATES_DIR', ROOT.DS.'templates'.DS);
define('SMARTY_COMPILE_DIR', ROOT.DS.'temp'.DS.'templates_c'.DS);
define('SMARTY_CACHE_DIR', ROOT.DS.'temp'.DS.'cache'.DS);

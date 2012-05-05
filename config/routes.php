<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2011, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

use lithium\net\http\Router;

Router::connect('/install/{:action}.{:type}/{:args}', array(
'controller' => 'Install', 'library' => 'li3_install', 'type' => 'html'
));

Router::connect('/install/{:action}/{:args}', array(
'controller' => 'Install', 'library' => 'li3_install'
));

?>
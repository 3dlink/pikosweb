<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 */

/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	//Router::connect('/', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'login'));
Router::connect('/',  array('controller' => 'start'));
//Router::connect('/login',  array('controller' => 'start'));
/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
	Router::connect('/contacto', array('controller' => 'start', 'action' => 'contacto'));
	Router::connect('/carrito', array('controller' => 'start', 'action' => 'carrito'));
	Router::connect('/carrito/*', array('controller' => 'start', 'action' => 'carrito'));
	Router::connect('/carrito/*/*', array('controller' => 'start', 'action' => 'carrito'));
	Router::connect('/perfil', array('controller' => 'start', 'action' => 'perfil'));
	Router::connect('/comoComprar', array('controller' => 'start', 'action' => 'comoComprar'));

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';

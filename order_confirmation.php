<?php 

$useSSL = true;

$root_dir = str_replace('modules/veritransbca', '', dirname($_SERVER['SCRIPT_FILENAME']));

include_once($root_dir.'/config/config.inc.php');

$controller = new FrontController();

if (Tools::usingSecureMode())
  $useSSL = $controller->ssl = true;

$controller->init();

include_once($root_dir.'/modules/veritransbca/veritransbca.php');

// if (!$cookie->isLogged(true))
//   Tools::redirect('authentication.php?back=order.php');
// elseif (!Customer::getAddressesTotalById((int)($cookie->id_customer)))
//   Tools::redirect('address.php?back=order.php?step=1');

$cart = new Cart(Tools::getValue('order_id'));
$customer = new Customer((int)$cart->id_customer);
$veritransBca = new VeritransBca();

Tools::redirectLink(__PS_BASE_URI__.'order-confirmation.php?id_cart='.Tools::getValue('order_id').'&id_module='.$veritransBca->id.'&id_order='.Tools::getValue('order_id').'&key='.$customer->secure_key);

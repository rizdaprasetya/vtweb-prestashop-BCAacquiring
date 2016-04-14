<?php

session_start();

class VeritransBcaConfirmationModuleFrontController extends ModuleFrontController
{
	public $ssl = true;

	/**
	 * @see FrontController::initContent()
	 */
	public function initContent()
	{
		$cart = new Cart(Tools::getValue('order_id'));
		$customer = new Customer((int)$cart->id_customer);
		$veritransBca = new VeritransBca();

		Tools::redirectLink(__PS_BASE_URI__.'order-confirmation.php?id_cart='.Tools::getValue('order_id').'&id_module='.$veritransBca->id.'&id_order='.Tools::getValue('order_id').'&key='.$customer->secure_key);
	}

}



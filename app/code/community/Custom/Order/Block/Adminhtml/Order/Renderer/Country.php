<?php 
class Custom_Order_Block_Adminhtml_Order_Renderer_Country extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract{
	public function render(Varien_Object $row)
    {  $orderId=$row->getId();
		$order = Mage::getModel("sales/order")->load($orderId); //load order by order id 
		$billingAddress=$order->getBillingAddress();
		$country_code=$billingAddress->getCountry();
		$country_name=Mage::app()->getLocale()->getCountryTranslation($country_code);
		return $country_name;
	}
}
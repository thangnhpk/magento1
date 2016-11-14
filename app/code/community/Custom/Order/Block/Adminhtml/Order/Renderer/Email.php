<?php 
class Custom_Order_Block_Adminhtml_Order_Renderer_Email extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract{
	public function render(Varien_Object $row)
    {  $orderId=$row->getId();
		$order = Mage::getModel("sales/order")->load($orderId); //load order by order id 
		$email=$order->getCustomerEmail();
		return $email;
	}
}
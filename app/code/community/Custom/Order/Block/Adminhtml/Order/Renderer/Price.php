<?php 
class Custom_Order_Block_Adminhtml_Order_Renderer_Price extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract{
	public function render(Varien_Object $row)
    {  
    	$orderId=$row->getId();
    	$order = Mage::getModel("sales/order")->load($orderId);
    	$price=$order->getGrandTotal();
		return $price;
    }
}
?>

<?php 
class Custom_Order_Block_Adminhtml_Order_Renderer_Product extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract{
	public function render(Varien_Object $row)
    {  $orderId=$row->getId();
    	$product="";
    	$count=0;
    	$cu=1;
      	//Get the order details based on the order id ($orderId)
	   $order = Mage::getModel('sales/order')->load($orderId);
	    foreach($order->getAllVisibleItems() as $value) {
	    	$count++;
		}
		foreach($order->getAllVisibleItems() as $value) {
	    	$product.=$value->getName();
	    	if($cu<$count){
	    		$product.=", ";
	    	}
	    	$cu++;
		}
		return $product;
    }
}
?>

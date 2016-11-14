<?php
class Custom_Order_Helper_Adminhtml_Dashboard_Data extends Mage_Core_Helper_Data
{
    protected $_locale = null;
    protected $_stores = null;

    /**
     * Retrieve stores configured in system.
     *
     * @return array
     */
    public function getStores()
    {
        if(!$this->_stores) {
            $this->_stores = Mage::app()->getStore()->getResourceCollection()->load();
        }

        return $this->_stores;
    }

    /**
     * Retrieve number of loaded stores
     *
     * @return int
     */
    public function countStores()
    {
        return sizeof($this->_stores->getItems());
    }

    /**
     * Prepare array with periods for dashboard graphs
     *
     * @return array
     */
    public function getDatePeriods()
    {
        return array(
            '24h' => $this->__('Last 24 Hours'),
            '7d'  => $this->__('Last 7 Days'),
            '1m'  => $this->__('Current Month'),
            '2m'  => $this->__('2 Month'),
            '3m'  => $this->__('3 Month'),
            '4m'  => $this->__('4 Month'),
            '5m'  => $this->__('5 Month'),
            '6m'  => $this->__('6 Month'),
            '7m'  => $this->__('7 Month'),
            '8m'  => $this->__('8 Month'),
            '9m'  => $this->__('9 Month'),
            '10m'  => $this->__('10 Month'),
            '11m'  => $this->__('11 Month'),
            '1y'  => $this->__('YTD'),
            '2y'  => $this->__('2YTD')
        );
    }
    /**
     * Create data hash to ensure that we got valid
     * data and it is not changed by some one else.
     *
     * @param string $data
     * @return string
     */
    public function getChartDataHash($data)
    {
        $secret = (string)Mage::getConfig()->getNode(Mage_Core_Model_App::XML_PATH_INSTALL_DATE);
        return md5($data . $secret);
    }
}

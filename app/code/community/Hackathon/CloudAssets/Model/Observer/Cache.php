<?php
/**
 * Created by IntelliJ IDEA.
 * User: Richard.Vogel
 * Date: 01.06.13
 * Time: 13:45
 * To change this template use File | Settings | File Templates.
 */

class Hackathon_CloudAssets_Model_Observer_Cache
{
    public function cleanCache(Varien_Event_Observer $observer)
    {
        Mage::app()
        ->cleanCache();
    }
}
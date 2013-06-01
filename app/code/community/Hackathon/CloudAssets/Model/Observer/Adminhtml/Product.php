<?php
/**
 * Created by IntelliJ IDEA.
 * User: Richard.Vogel
 * Date: 01.06.13
 * Time: 13:45
 * To change this template use File | Settings | File Templates.
 */

class Hackathon_CloudAssets_Model_Observer_Adminhtml_Product
{
    public function resizeOnUpload(Varien_Event_Observer $observer)
    {
        /*
         * Possibility to do some fancy stuff like resizing.
         */
        return $this;
    }

    public function onProductMediaSave(Varien_Event_Observer $observer){

        return $this;
    }
}
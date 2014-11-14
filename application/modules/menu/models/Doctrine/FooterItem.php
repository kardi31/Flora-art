<?php

/**
 * Menu_Model_Doctrine_FooterItem
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    Admi
 * @subpackage Menu
 * @author     Michał Folga <michalfolga@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Menu_Model_Doctrine_FooterItem extends Menu_Model_Doctrine_BaseFooterItem
{
    public static $footerPhotoDimensions = array(
        '126x126' => 'Photo in admin panel', // admin
        '446x306' => 'Photo',
    );
    
    public function setId($id) {
        $this->_set('id', $id);
    }
    
    public function getId() {
        return $this->_get('id');
    }
    
    public function setMenuId($footerId) {
        $this->_set('menu_Id', $footerId);
    }
    
    public function getRoute() {
        return $this->_get('route');
    }
    
    public function setRoute($route) {
        $this->_set('route', $route);
    }
    
    public function getMenuId() {
        return $this->_get('menu_id');
    }
    
    public function setCustomUrl($customUrl) {
        $this->_set('custom_url', $customUrl);
    }
    
    public function getCustomUrl() {
        return $this->_get('custom_url');
    }
    
    public function setCssClass($cssClass) {
        $this->_set('css_class', $cssClass);
    }
    
    public function getCssClass() {
        return $this->_get('css_class');
    }
    
    public function setTitle($title) {
        $this->_set('title', $title);
    }
    
    public function getTitle() {
        return $this->_get('title');
    }
    
    public function setTitleAttr($titleAttr) {
        $this->_set('title_attr', $titleAttr);
    }
    
    public function getTitleAttr() {
        return $this->_get('title_attr');
    }
    
    public function setTargetType($targetType) {
        $this->_set('target_type', $targetType);
    }
    
    public function getTargetType() {
        return $this->_get('target_type');
    }

    public function setTargetId($targetId) {
        $this->_set('target_id', $targetId);
    }
    
    public function getTargetId() {
        return $this->_get('target_id');
    }
    
    public static function getMenuPhotoDimensions() {
        return self::$footerPhotoDimensions;
    }

    public function getParents($parentList = array(), $withRoot = false) {
        if($this->getNode()->hasParent()) {
            if(false == $withRoot && $this->getNode()->hasParent() && $this->getNode()->getParent()->getNode()->isRoot())
                return $parentList;
            
            $parentList[] = $this->getNode()->getParent();
            $parentList = $this->getNode()->getParent()->getParents($parentList);
        }
        return $parentList;
    }
    
    public function isDescendantOf($footerItem) {
        foreach($this->getNode()->getAncestors() as $ancestor) {
            if($ancestor->getId() == $footerItem->getId()) {
                return true;
                break;
            }
        }
        return false;
    }
    
    public function setUp() {
        parent::setUp();
        $this->hasOne('Page_Model_Doctrine_Page as Page', array(
            'local' => 'target_id',
            'foreign' => 'id'
        ));
        
         $this->hasOne('Media_Model_Doctrine_Photo as PhotoRoot', array(
            'local' => 'photo_root_id',
            'foreign' => 'id'
        ));
         
    }
}
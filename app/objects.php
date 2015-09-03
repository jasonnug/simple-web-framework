<?php
/**********************
*      File: app/objects.php
*      Description: Application object definitions.
*      Date: 1/2/2013
*      Author: Jason Nugent
*/

class Object {
    // generic object class
}

class BasicObjectFromXML {
    public function BasicObjectFromXML($xmldata) {
        foreach($xmldata as $key => $item) {
            if(is_array($item)) {
                $this->item['name'] = returnArraysFromXMLData($item);
            } else if ($key != 'name') {
                $this->$key = $item;
            }
        }
    }
}

class Page {
    public $Services = array();
    
    public function Page($pageXML) {
        foreach($pageXML as $key => $item) {
            if(is_array($item)) {
                $this->$item['name'] = returnArraysFromXMLData($item);
            } else if ($key != 'name') {
                $this->$key = $item;
            }
        }
        if($this->services) {
            global $services;
            foreach($this->services as $pageServiceName) {
                foreach($services as $serviceName => $service) {
                    if($pageServiceName == $serviceName) {
                        $this->Services[] = $service;
                    }
                }
            }
        }
        
    }
}

class Menu {
    public $menuItems = array();
    
    public function Menu($menusXML) {
        foreach($menusXML as $key => $item) {
            if(is_array($item)) {
                $this->$item['name'] = returnArraysFromXMLData($item);
            } else if ($key != 'name') {
                $this->$key = $item;
            }
        }
    }
}

class MenuItem {
    public $menuItemName = "";
    public $title = "";
    public $active = "false";
    public $url = "";
    
    public function MenuItem($page) {
        $this->menuItemName = $page->pageName;
        $this->title = $page->title;
        $this->url = $page->url;
    }
}

function updateBundles() {
    global $app;
    
    foreach($app['bundles'] as $bundlename => $bundle) {
        if($bundle['includedServices']) {
            $bundle['IncludedServices'] = array();
            foreach($bundle['includedServices'] as $serviceName => $includedFree) {
                $incService = $app['services'][$serviceName];
                $bundle['IncludedServices'][$serviceName] = $incService;
            }
        }

        if($bundle->featureSets) {
            $bundle->FeatureSets = array();
            foreach($bundle->featureSets as $featureSet) {
                global $featureSets;
                foreach($featureSets as $gFeatureSet) {
                    if($gFeatureSet->setName == $featureSet) {
                        $bundle->FeatureSets[$gFeatureSet->setName] = $gFeatureSet;
                    }
                }
            }
        }
        if($bundle->promo) {
            unset($bundle->promo);
        }
        if($bundle->discountedPrice) {
            unset($bundle->discountedPrice);
        }        
    }

    return $bundle;

}

/*                    '.       
   .-""-._     \ \.--|    
 /       "-..__) .-'   
ಠ_______ಠ      /     
 \'-.__,   .__.,'       
  `'----'._\--'  
* Whale whale whale, what have we here?
*/

?>
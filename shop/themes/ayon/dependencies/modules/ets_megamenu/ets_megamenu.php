<?php
/**
 * 2007-2018 ETS-Soft
 *
 * NOTICE OF LICENSE
 *
 * This file is not open source! Each license that you purchased is only available for 1 wesite only.
 * If you want to use this file on more websites (or projects), you need to purchase additional licenses. 
 * You are not allowed to redistribute, resell, lease, license, sub-license or offer our resources to any third party.
 * 
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please contact us for extra customization service at an affordable price
 *
 *  @author ETS-Soft <etssoft.jsc@gmail.com>
 *  @copyright  2007-2018 ETS-Soft
 *  @license    Valid for 1 website (or project) for each purchase of license
 *  International Registered Trademark & Property of ETS-Soft
 */

if (!defined('_PS_VERSION_'))
	exit;
require_once(dirname(__FILE__).'/classes/MM_Obj.php');
require_once(dirname(__FILE__).'/classes/MM_Menu.php');
require_once(dirname(__FILE__).'/classes/MM_Column.php');
require_once(dirname(__FILE__).'/classes/MM_Block.php');
require_once(dirname(__FILE__).'/classes/MM_Config.php');
require_once(dirname(__FILE__).'/classes/MM_Cache.php');
require_once(dirname(__FILE__).'/classes/MM_Tab.php');
class Ets_megamenu extends Module
{    
    private $_html;   
    public $alerts;
    public static $menus; 
    public static $columns;
    public static $blocks;
    public static $trans;    
    public static $configs;
    public static $tab_class;
    public $is17 = false;
    public $multiLayout = false;
    public $googlefonts = array();
    public function __construct()
	{
		$this->name = 'ets_megamenu';
		$this->tab = 'front_office_features';
		$this->version = '2.0.2';
		$this->author = 'ETS-Soft';
        $this->module_key = 'be9f54484806a4f886bf7e45aefed605';
        $this->author_address = '0xd81C21A85a637315C623D9c1F9D4f5Bb3144A617';
		$this->need_instance = 0;
		$this->secure_key = Tools::encrypt($this->name);        
		$this->bootstrap = true;
		parent::__construct();
        $this->displayName = $this->l('Mega Menu PRO');
		$this->description = $this->l('Visual drag and drop mega menu builder');
		$this->ps_versions_compliancy = array('min' => '1.6.0.0', 'max' => _PS_VERSION_);
        $this->translates();
        $this->multiLayout = $this->multiLayoutExist();
        if(version_compare(_PS_VERSION_, '1.7', '>='))
            $this->is17 = true; 
        $this->googlefonts = Tools::jsonDecode(Tools::file_get_contents(dirname(__FILE__).'/data/google-fonts.json'),true);
        if(!$this->googlefonts)
        {
            $this->googlefonts = array(
                array(
                    'id_option' => 'inherit',
                    'name' => $this->l('THEME DEFAULT FONT'),
                ),
                array(
                    'id_option' => 'Arial',
                    'name' => 'Arial',
                ),
                array(
                    'id_option' => 'Times new roman',
                    'name' => 'Times new roman',
                ),
            );
        }     
        self::$menus = array(
            'form' => array(
				'legend' => array(
					'title' => (int)Tools::getValue('itemId') ? $this->l('Edit menu') : $this->l('Add menu'),				
				),
				'input' => array(),
                'submit' => array(
					'title' => $this->l('Save'),
				),
                'name' => 'menu',
                'connect_to' => 'column',
                'connect_to2' => 'tab',
            ),
            'configs' => array( 
                'enabled_vertical'=>array(
                    'type'=>'select',
                    'label'=>$this->l('Direction'),
                    'options' => array(
            			 'query' => array( 
                                array(
                                    'id_option' => '0', 
                                    'name' => $this->l('Horizontal')
                                ),
                                array(
                                    'id_option' => '1', 
                                    'name' => $this->l('Vertical')
                                ),                                                      
                            ),                             
                         'id' => 'id_option',
            			 'name' => 'name'  
                    ),
                ),
                'menu_ver_text_color' => array(
                    'label' => $this->l('Vertical menu text color'),
                    'type' => 'color',   
                    'default' => '#ffffff',
                    'validate' => 'isColor',
                    'class'=>'color mColorPickerInput'                                                    
                ),               
                'menu_ver_background_color' => array(
                    'label' => $this->l('Vertical menu background color'),
                    'type' => 'color',  
                    'default' => '#666666',
                    'validate' => 'isColor', 
                    'class'=>'color mColorPickerInput'                                                   
                ), 
                'menu_ver_hidden_border' => array(
                    'label' => $this->l('Remove border'),
                    'type' => 'switch',                
                    'default' => 0, 
                    'values' => array(
                        array(
                            'label' => $this->l('Yes'),
                            'id' => 'menu_ver_hidden_border1',
                            'value' => 1,
                        ),
                        array(
                            'label' => $this->l('No'),
                            'id' => 'menu_ver_hidden_border0',
                            'value' => 0,
                        )
                    ),                  
                ),
                'menu_item_width'=>array(
                    'label'=> $this->l('Menu item width'),
                    'type'=>'text',
                    'default'=>'230px',
                    'desc' => $this->l('Use "px" or "%" or "vw". Eg: "20%" or "230px" or "80vw"'), 
                ),
                'tab_item_width'=>array(
                    'label'=> $this->l('Tab item width'),
                    'type'=>'text',
                    'default'=>'230px',
                    'desc' => $this->l('Use "px" or "%" or "vw". Eg: "20%" or "230px" or "80vw"'), 
                ),             
                'link_type' => array(
					'type' => 'select',
					'label' => $this->l('Menu link type'),
					'name' => 'menu_type',                   
                    'class' => 'ybc_menu_type',
					'options' => array(
            			 'query' => array( 
                                array(
                                    'id_option' => 'CUSTOM', 
                                    'name' => $this->l('Custom link')
                                ),
                                array(
                                    'id_option' => 'CMS', 
                                    'name' => $this->l('CMS page')
                                ),
                                array(
                                    'id_option' => 'CONTACT', 
                                    'name' => $this->l('Contact')
                                ),                               
                                array(
                                    'id_option' => 'CATEGORY', 
                                    'name' => $this->l('Category')
                                ),
                                array(
                                    'id_option' => 'MNFT', 
                                    'name' => $this->l('Manufacturer')
                                ),
                                array(
                                    'id_option' => 'MNSP', 
                                    'name' => $this->l('Supplier')
                                ),
                                array(
                                    'id_option' => 'HOME', 
                                    'name' => $this->l('Home')
                                )                                    
                            ),                             
                         'id' => 'id_option',
            			 'name' => 'name'  
                    ),
                    'default' => 'CUSTOM',                
				),
                'title' => array(
                    'label' => $this->l('Title'),
                    'type' => 'text',                    
                    'required' => true,      
                    'lang' => true,                   
                ),                         
                'link' => array(
                    'label' => $this->l('Custom link'),
                    'type' => 'text',     
                    'lang' => true,     
                    'showRequired' => true,     
                ), 
                'id_manufacturer' => array(
                    'label' => $this->l('Manufacturer'),
                    'type' => 'radio',
                    'values' => $this->getManufacturers(),
                    'showRequired' => true,
                ),  
                'id_supplier' => array(
                    'label' => $this->l('Supplier'),
                    'type' => 'radio',
                    'values' => $this->getSuppliers(),
                    'showRequired' => true,
                ),
                'id_category' => array(
					'type'  => 'categories',                    
					'label' => $this->l('Category'),
					'name'  => 'id_parent',                        
					'tree'  => array(
						'id'      => 'categories-tree',
						'selected_categories' => array(),
						//'disabled_categories' => $this->getDisabledCategories(),                            
                        'use_search' => true,
					),                  
                    'showRequired' => true,
				),   
                'id_cms' => array(
                    'label' => $this->l('CMS page'),
                    'type' => 'radio',
                    'values' => $this->getCMSs(),
                    'showRequired' => true,
                ),   
                'menu_icon' => array(
                    'label' => $this->l('Menu icon font'),
                    'type' => 'text',
                    'desc' => $this->l('Use font awesome class. Eg: fa-bars, fa-plus, ...'),                                  
                ),
                'menu_img_link' => array(
                    'label' => $this->l('Menu icon image'),
                    'type' => 'file',   
                    'desc' => $this->l('Recommended size:20 x 20'),                        
                ),  
                'sub_menu_type' => array(
					'type' => 'select',
					'label' => $this->l('Submenu alignment').($this->multiLayout ? ' '.$this->l('(LTR layout)') : ''),
					'name' => 'menu_type',                   
                    'class' => 'ybc_menu_type',
					'options' => array(
            			 'query' => array( 
                                array(
                                    'id_option' => 'FULL', 
                                    'name' => $this->l('Auto')
                                ),
                                array(
                                    'id_option' => 'LEFT', 
                                    'name' => $this->l('Left')
                                ),
                                array(
                                    'id_option' => 'RIGHT', 
                                    'name' => $this->l('Right')
                                ),                                    
                            ),                             
                         'id' => 'id_option',
            			 'name' => 'name'  
                    ),
                    'default' => 'FULL',
                    'desc' => $this->multiLayout ? $this->l('Submenu alignment is reversed on RTL layout automatically') : '',                
				),     
                'display_tabs_in_full_width' => array(
                    'label' => $this->l('Display tabs in full width'),
                    'type' => 'switch',  
                    'default' => 0,
                    'values' => array(
                        array(
                            'label' => $this->l('Yes'),
                            'id' => 'display_tabs_in_full_width_1',
                            'value' => 1,
                        ),
                        array(
                            'label' => $this->l('No'),
                            'id' => 'display_tabs_in_full_width_0',
                            'value' => 0,
                        )
                    ),                           
                ),          
                'sub_menu_max_width' => array(
                    'label' => $this->l('Sub menu width'),
                    'type' => 'text', 
                    'required' => true,   
                    'default' => '100%',             
                    'desc' => $this->l('Use "px" or "%" or "vw". Eg: "100%" or "100px" or "80vw"'),                    
                ),  
                'custom_class' => array(
                    'label' => $this->l('Custom class'),
                    'type' => 'text',                                                       
                ), 
                'bubble_text' => array(
                    'label' => $this->l('Bubble alert text'),
                    'type' => 'text', 
                    'lang' => true,              
                    'desc' => $this->l('New, Sale, Hot... Leave blank if you do not want to have a bubble alert for this menu')                                        
                ), 
                'bubble_text_color' => array(
                    'label' => $this->l('Bubble alert text color'),
                    'type' => 'color',   
                    'default' => '#ffffff',
                    'validate' => 'isColor',  
                    'class'=>'color mColorPickerInput'                                                  
                ),               
                'bubble_background_color' => array(
                    'label' => $this->l('Bubble alert background color'),
                    'type' => 'color',  
                    'default' => '#FC4444',
                    'validate' => 'isColor',
                    'class'=>'color mColorPickerInput'                                                    
                ),
                'background_image' => array(
                    'label' => $this->l('Background image'),
                    'type' => 'file',                           
                ), 
                'position_background' => array(
                    'label' => $this->l('Position background'),
                    'type' => 'select', 
                    'options' => array(
            			 'query' => array( 
                                array(
                                    'id_option' => 'center', 
                                    'name' => $this->l('Center')
                                ),
                                array(
                                    'id_option' => 'top', 
                                    'name' => $this->l('Top')
                                ),
                                array(
                                    'id_option' => 'top right', 
                                    'name' => $this->l('Top right')
                                ),
                                array(
                                    'id_option' => 'top left', 
                                    'name' => $this->l('Top left')
                                ),
                                array(
                                    'id_option' => 'left', 
                                    'name' => $this->l('Left')
                                ), 
                                array(
                                    'id_option' => 'bottom', 
                                    'name' => $this->l('Bottom')
                                ),
                                array(
                                    'id_option' => 'bottom left', 
                                    'name' => $this->l('Bottom left')
                                ),
                                array(
                                    'id_option' => 'bottom right', 
                                    'name' => $this->l('Bottom right')
                                ),
                                array(
                                    'id_option' => 'right', 
                                    'name' => $this->l('Right')
                                ),                                                     
                            ),                             
                         'id' => 'id_option',
            			 'name' => 'name'  
                    ),                       
                ), 
                'menu_open_new_tab' => array(
                    'label' => $this->l('Open link in new tab'),
                    'type' => 'switch',                
                    'default' => 0, 
                    'values' => array(
                        array(
                            'label' => $this->l('Yes'),
                            'id' => 'menu_open_new_tab1',
                            'value' => 1,
                        ),
                        array(
                            'label' => $this->l('No'),
                            'id' => 'menu_open_new_tab0',
                            'value' => 0,
                        )
                    ),                  
                ),
                'sort_order' => array(
                    'label' => $this->l('Sort order'),
                    'type' => 'sort_order', 
                    'required' => true,   
                    'default' => 1,     
                    'order_group' => false,                          
                ), 
                'enabled' => array(
                    'label' => $this->l('Enabled'),
                    'type' => 'switch',                
                    'default' => 1, 
                    'values' => array(
                        array(
                            'label' => $this->l('Yes'),
                            'id' => 'menu_enabled_1',
                            'value' => 1,
                        ),
                        array(
                            'label' => $this->l('No'),
                            'id' => 'menu_enabled_0',
                            'value' => 0,
                        )
                    ),                  
                ),     
            ),            
        ); 
        self::$tab_class = array(
            'form' => array(
				'legend' => array(
					'title' => (int)Tools::getValue('itemId') ? $this->l('Edit tab') : $this->l('Add tab'),				
				),
				'input' => array(),
                'submit' => array(
					'title' => $this->l('Save'),
				),
                'name' => 'tab',
                'connect_to' => 'column',
                'parent' => 'menu',
            ),
            'configs' => array(
                'title' => array(
                    'label' => $this->l('Title'),
                    'type' => 'text',                    
                    'required' => true,      
                    'lang' => true,                   
                ), 
                'url'=> array(
                    'label'=> 'Custom link',
                    'type'=>'text',
                    'lang'=>true,
                ),
                'tab_icon' => array(
                    'label' => $this->l('Tab icon font'),
                    'type' => 'text',
                    'desc' => $this->l('Use font awesome class. Ex: fa-bars, fa-plus, ...'),                                  
                ),
                'tab_img_link' => array(
                    'label' => $this->l('Tab icon image'),
                    'type' => 'file',   
                    'desc' => $this->l('Recommended size:20 x 20'),                        
                ),   
                'tab_sub_width' => array(
                    'label' => $this->l('Tab content width'),
                    'type' => 'text',  
                    'desc' => $this->l('Use "px" or "%" or "vw". Eg: "20%" or "230px" or "80vw"'),                             
                ),
                'tab_sub_content_pos' => array(
                    'label' => $this->l('Display tab content from top'),
                    'type' => 'switch',  
                    'default' => 1,
                    'values' => array(
                        array(
                            'label' => $this->l('Yes'),
                            'id' => 'tab_sub_content_pos_1',
                            'value' => 1,
                        ),
                        array(
                            'label' => $this->l('No'),
                            'id' => 'tab_sub_content_pos_0',
                            'value' => 0,
                        )
                    ),                           
                ),
                'bubble_text' => array(
                    'label' => $this->l('Bubble alert text'),
                    'type' => 'text', 
                    'lang' => true,              
                    'desc' => $this->l('New, Sale, Hot... Leave blank if you do not want to have a bubble alert for this menu')                                        
                ), 
                'bubble_text_color' => array(
                    'label' => $this->l('Bubble alert text color'),
                    'type' => 'color',   
                    'default' => '#ffffff',
                    'validate' => 'isColor', 
                    'class'=>'color mColorPickerInput'                                                   
                ),               
                'bubble_background_color' => array(
                    'label' => $this->l('Bubble alert background color'),
                    'type' => 'color',  
                    'default' => '#FC4444',
                    'validate' => 'isColor',  
                    'class'=>'color mColorPickerInput'                                                  
                ), 
                'background_image' => array(
                    'label' => $this->l('Background image'),
                    'type' => 'file',                           
                ), 
                'position_background' => array(
                    'label' => $this->l('Position background'),
                    'type' => 'select', 
                    'options' => array(
            			 'query' => array( 
                                array(
                                    'id_option' => 'center', 
                                    'name' => $this->l('Center')
                                ),
                                array(
                                    'id_option' => 'top', 
                                    'name' => $this->l('Top')
                                ),
                                array(
                                    'id_option' => 'top right', 
                                    'name' => $this->l('Top right')
                                ),
                                array(
                                    'id_option' => 'top left', 
                                    'name' => $this->l('Top left')
                                ),
                                array(
                                    'id_option' => 'left', 
                                    'name' => $this->l('Left')
                                ), 
                                array(
                                    'id_option' => 'bottom', 
                                    'name' => $this->l('Bottom')
                                ),
                                array(
                                    'id_option' => 'bottom left', 
                                    'name' => $this->l('Bottom left')
                                ),
                                array(
                                    'id_option' => 'bottom right', 
                                    'name' => $this->l('Bottom right')
                                ),
                                array(
                                    'id_option' => 'right', 
                                    'name' => $this->l('Right')
                                ),                                                     
                            ),                             
                         'id' => 'id_option',
            			 'name' => 'name'  
                    ),                       
                ),                  
                'id_menu' => array(
                    'label' => $this->l('Menu'),
                    'type' => 'hidden',     
                    'default' => ($id_menu = (int)Tools::isSubmit('id_menu')) ? $id_menu : 0,
                    'required' => true,   
                ),                
                'sort_order' => array(
                    'label' => $this->l('Sort order'),
                    'type' => 'sort_order', 
                    'required' => true,   
                    'default' => 1,   
                    'order_group' => array(
                        'menu'=>'id_menu',
                    ),                              
                ),      
            ),            
        );
        self::$columns = array(
            'form' => array(
				'legend' => array(
					'title' => (int)Tools::getValue('itemId') ? $this->l('Edit column') : $this->l('Add column'),				
				),
				'input' => array(),
                'submit' => array(
					'title' => $this->l('Save'),
				),
                'name' => 'column',
                'connect_to' => 'block',
                'parent' => 'menu',
                'parent2'=>'tab'
            ),
            'configs' => array(
                'column_size' => array(
					'type' => 'select',
					'label' => $this->l('Column width size'),
					'name' => 'menu_type',  
					'options' => array(
            			 'query' => $this->getColumnSizes(),                             
                         'id' => 'id_option',
            			 'name' => 'name'  
                    ),
                    'default' => '3',                
				),    
                'is_breaker' => array(
                    'label' => $this->l('Break'),
                    'type' => 'switch',                
                    'default' => 0, 
                    'values' => array(
                        array(
                            'label' => $this->l('Yes'),
                            'id' => 'menu_enabled_1',
                            'value' => 1,
                        ),
                        array(
                            'label' => $this->l('No'),
                            'id' => 'menu_enabled_0',
                            'value' => 0,
                        )
                    ),  
                    'desc' => $this->l('Break from this column to new line'),                
                ),                         
                'id_menu' => array(
                    'label' => $this->l('Menu'),
                    'type' => 'hidden',     
                    'default' => ($id_menu = (int)Tools::isSubmit('id_menu')) ? $id_menu : 0,
                    'required' => true,   
                ),
                'id_tab' => array(
                    'label' => $this->l('Tab'),
                    'type' => 'hidden',     
                    'default' => ($id_tab = (int)Tools::isSubmit('id_tab')) ? $id_tab : 0,
                    'required' => true,   
                ),                 
                'sort_order' => array(
                    'label' => $this->l('Sort order'),
                    'type' => 'sort_order', 
                    'required' => true,   
                    'default' => 1,   
                    'order_group' => array(
                        'menu'=>'id_menu',
                        'tab'=>'id_tab',
                    ),                              
                ),      
            ),            
        ); 
        self::$blocks = array(
            'form' => array(
				'legend' => array(
					'title' => (int)Tools::getValue('itemId') ? $this->l('Edit block') : $this->l('Add block'),				
				),
				'input' => array(),
                'submit' => array(
					'title' => $this->l('Save'),
				),
                'name' => 'block',
                'parent' => 'column',
            ),
            'configs' => array(
                'block_type' => array(
					'type' => 'select',
					'label' => $this->l('Block type'),					
					'options' => array(
            			 'query' => array( 
                                array(
                                    'id_option' => 'HTML', 
                                    'name' => $this->l('Text/Html')
                                ),
                                array(
                                    'id_option' => 'IMAGE', 
                                    'name' => $this->l('Image')
                                ),
                                array(
                                    'id_option' => 'CATEGORY', 
                                    'name' => $this->l('Category')
                                ),
                                array(
                                    'id_option' => 'CMS', 
                                    'name' => $this->l('CMS page')
                                ),
                                array(
                                    'id_option' => 'MNFT', 
                                    'name' => $this->l('Manufacturer')
                                ), 
                                array(
                                    'id_option' => 'MNSP', 
                                    'name' => $this->l('Supplier')
                                ), 
                                array(
                                    'id_option' => 'PRODUCT', 
                                    'name' => $this->l('Products')
                                ),                                                                 
                            ),                             
                         'id' => 'id_option',
            			 'name' => 'name'  
                    ),
                    'default' => 'HTML',                
				),
                'title' => array(
                    'label' => $this->l('Title'),
                    'type' => 'text',                    
                    'required' => true,      
                    'lang' => true,                   
                ),
                'id_column' => array(
                    'label' => $this->l('Column'),
                    'type' => 'hidden',     
                    'default' => ($id_column = (int)Tools::isSubmit('id_column')) ? $id_column : 0,
                    'required' => true,   
                ),
                'title_link' => array(
                    'label' => $this->l('Title link'),
                    'type' => 'text',     
                    'lang' => true,   
                    'desc' => $this->l('Leave blank if you do not want to add a link to block title'),       
                ),                   
                'id_manufacturers' => array(
                    'label' => $this->l('Manufacturers'),
                    'type' => 'checkbox',
                    'values' => array(
                         'query' => $this->getManufacturers(), 
                         'id' => 'id',
			             'name' => 'label'                                                               
                    ), 
                    'showRequired' => true,                  
                ), 
                'order_by_manufacturers' => array(
					'type' => 'select',
					'label' => $this->l('Order by'),					
					'options' => array(
            			 'query' => array( 
                                array(
                                    'id_option' => 'name ASC,m.id_manufacturer ASC', 
                                    'name' => $this->l('Name A-Z')
                                ),
                                array(
                                    'id_option' => 'name DESC,m.id_manufacturer ASC', 
                                    'name' => $this->l('Name Z-A')
                                ),
                                array(
                                    'id_option' => 'm.id_manufacturer DESC', 
                                    'name' => $this->l('Newest manufacturer first')
                                ),                                                                
                            ),                             
                         'id' => 'id_option',
            			 'name' => 'name'  
                    ),
                    'default' => 'nam ASC,m.id_manufacturer ASC',                
				),
                'display_mnu_img' => array(
                    'label' => $this->l('Display manufacturers image'),
                    'type' => 'switch',                
                    'default' => 0, 
                    'values' => array(
                        array(
                            'label' => $this->l('Yes'),
                            'id' => 'menu_mnu_img_1',
                            'value' => 1,
                        ),
                        array(
                            'label' => $this->l('No'),
                            'id' => 'menu_mnu_img_0',
                            'value' => 0,
                        )
                    ),                  
                ),
                'display_mnu_name' => array(
                    'label' => $this->l('Display manufacturers name'),
                    'type' => 'switch',                
                    'default' => 1, 
                    'values' => array(
                        array(
                            'label' => $this->l('Yes'),
                            'id' => 'menu_mnu_name_1',
                            'value' => 1,
                        ),
                        array(
                            'label' => $this->l('No'),
                            'id' => 'menu_mnu_name_0',
                            'value' => 0,
                        )
                    ),                  
                ),
                'display_mnu_inline' => array(
                    'label' => $this->l('Manufacturers per row'),
                    'type' => 'select',     
                    'options' => array(
            			 'query' => array( 
                                array(
                                    'id_option' => '1', 
                                    'name' => $this->l('1')
                                ),
                                array(
                                    'id_option' => '2', 
                                    'name' => $this->l('2')
                                ),
                                array(
                                    'id_option' => '3', 
                                    'name' => $this->l('3')
                                ),
                                array(
                                    'id_option' => '4', 
                                    'name' => $this->l('4')
                                ),
                                array(
                                    'id_option' => '5', 
                                    'name' => $this->l('5')
                                ),
                                array(
                                    'id_option' => '6', 
                                    'name' => $this->l('6')
                                ),
                                array(
                                    'id_option' => '7', 
                                    'name' => $this->l('7')
                                ),
                                array(
                                    'id_option' => '8', 
                                    'name' => $this->l('8')
                                ),
                                array(
                                    'id_option' => '9', 
                                    'name' => $this->l('9')
                                ),     array(
                                    'id_option' => '10', 
                                    'name' => $this->l('10')
                                ),
                                array(
                                    'id_option' => '11', 
                                    'name' => $this->l('11')
                                ),
                                array(
                                    'id_option' => '12', 
                                    'name' => $this->l('12')
                                ),                                                              
                            ),                             
                         'id' => 'id_option',
            			 'name' => 'name'  
                    ),     
                ), 
                'id_suppliers' => array(
                    'label' => $this->l('Suppliers'),
                    'type' => 'checkbox',
                    'values' => array(
                         'query' => $this->getSuppliers(), 
                         'id' => 'id',
			             'name' => 'label'                                                               
                    ), 
                    'showRequired' => true,                  
                ),   
                'order_by_suppliers' => array(
					'type' => 'select',
					'label' => $this->l('Order by'),					
					'options' => array(
            			 'query' => array( 
                                array(
                                    'id_option' => 'name ASC,s.id_supplier ASC', 
                                    'name' => $this->l('Name A-Z')
                                ),
                                array(
                                    'id_option' => 'name DESC,s.id_supplier ASC', 
                                    'name' => $this->l('Name Z-A')
                                ),
                                array(
                                    'id_option' => 's.id_supplier DESC', 
                                    'name' => $this->l('Newest supplier first')
                                ),                                                                
                            ),                             
                         'id' => 'id_option',
            			 'name' => 'name'  
                    ),
                    'default' => 'nam ASC,s.id_supplier ASC',                
				),
                'display_suppliers_img' => array(
                    'label' => $this->l('Display suppliers image'),
                    'type' => 'switch',                
                    'default' => 0, 
                    'values' => array(
                        array(
                            'label' => $this->l('Yes'),
                            'id' => 'menu_suppliers_img_1',
                            'value' => 1,
                        ),
                        array(
                            'label' => $this->l('No'),
                            'id' => 'menu_suppliers_img_0',
                            'value' => 0,
                        )
                    ),                  
                ),
                'display_suppliers_name' => array(
                    'label' => $this->l('Display suppliers name'),
                    'type' => 'switch',                
                    'default' => 1, 
                    'values' => array(
                        array(
                            'label' => $this->l('Yes'),
                            'id' => 'menu_suppliers_name_1',
                            'value' => 1,
                        ),
                        array(
                            'label' => $this->l('No'),
                            'id' => 'menu_suppliers_name_0',
                            'value' => 0,
                        )
                    ),                  
                ),
                'display_suppliers_inline' => array(
                    'label' => $this->l('Suppliers per row'),
                    'type' => 'select',     
                    'options' => array(
            			 'query' => array( 
                                array(
                                    'id_option' => '1', 
                                    'name' => $this->l('1')
                                ),
                                array(
                                    'id_option' => '2', 
                                    'name' => $this->l('2')
                                ),
                                array(
                                    'id_option' => '3', 
                                    'name' => $this->l('3')
                                ),
                                array(
                                    'id_option' => '4', 
                                    'name' => $this->l('4')
                                ),
                                array(
                                    'id_option' => '5', 
                                    'name' => $this->l('5')
                                ),
                                array(
                                    'id_option' => '6', 
                                    'name' => $this->l('6')
                                ),
                                array(
                                    'id_option' => '7', 
                                    'name' => $this->l('7')
                                ),
                                array(
                                    'id_option' => '8', 
                                    'name' => $this->l('8')
                                ),
                                array(
                                    'id_option' => '9', 
                                    'name' => $this->l('9')
                                ),     array(
                                    'id_option' => '10', 
                                    'name' => $this->l('10')
                                ),
                                array(
                                    'id_option' => '11', 
                                    'name' => $this->l('11')
                                ),
                                array(
                                    'id_option' => '12', 
                                    'name' => $this->l('12')
                                ),                                                              
                            ),                             
                         'id' => 'id_option',
            			 'name' => 'name'  
                    ),     
                ),
                'id_categories' => array(
					'type'  => 'categories',                    
					'label' => $this->l('Categories'),
					'name'  => 'id_parent',                        
					'tree'  => array(
						'id'      => 'categories-tree',
						'selected_categories' => array(),
						//'disabled_categories' => $this->getDisabledCategories(),
                        'use_checkbox' => true,                           
                        'use_search' => true,
					), 
                    'showRequired' => true,                   
				),  
                'order_by_category' => array(
					'type' => 'select',
					'label' => $this->l('Order by'),					
					'options' => array(
            			 'query' => array( 
                                array(
                                    'id_option' => 'cl.name ASC,c.id_category ASC', 
                                    'name' => $this->l('Name A-Z')
                                ),
                                array(
                                    'id_option' => 'cl.name DESC,c.id_category ASC', 
                                    'name' => $this->l('Name Z-A')
                                ),
                                array(
                                    'id_option' => 'c.position ASC,c.id_category ASC', 
                                    'name' => $this->l('Default order ')
                                ),
                                array(
                                    'id_option' => 'c.id_category DESC', 
                                    'name' => $this->l('Newest category first')
                                ),                                                                
                            ),                             
                         'id' => 'id_option',
            			 'name' => 'name'  
                    ),
                    'default' => 'cl.nam ASC,c.id_category ASC',                
				), 
                'id_cmss' => array(
                    'label' => $this->l('CMS pages'),
                    'type' => 'checkbox',
                    'values' => array(
                         'query' => $this->getCMSs(), 
                         'id' => 'id',
			             'name' => 'label'                                                               
                    ),
                    'showRequired' => true,  
                ), 
                'content' => array(
                    'label' => $this->l('HTML/Text content'),
                    'type' => 'textarea', 
                    'lang' => true,   
//                    'autoload_rte' => true,
                    'showRequired' => true,                
                ),  
                'image' => array(
                    'label' => $this->l('Image'),
                    'type' => 'file',  
                    'hide_delete' => true,
                    'showRequired' => true,
                ),    
                'image_link' => array(
                    'label' => $this->l('Image link'),
                    'type' => 'text',     
                    'lang' => true,   
                    'desc' => $this->l('Leave blank if you do not want to add a link to image'),       
                ),  
                'id_products' => array(
                    'label' => $this->l('Products'),
                    'type' => 'text', 
                    'desc' => $this->l('Enter product IDs separated by a comma (,)'), 
                    'showRequired' => true,      
                ),       
                'sort_order' => array(
                    'label' => $this->l('Sort order'),
                    'type' => 'sort_order', 
                    'required' => true,   
                    'default' => 1,   
                    'order_group' => array(
                        'column'=>'id_column',
                    ),                             
                ), 
                'display_title' => array(
                    'label' => $this->l('Display title'),
                    'type' => 'switch',                
                    'default' => 1, 
                    'values' => array(
                        array(
                            'label' => $this->l('Yes'),
                            'id' => 'menu_enabled_1',
                            'value' => 1,
                        ),
                        array(
                            'label' => $this->l('No'),
                            'id' => 'menu_enabled_0',
                            'value' => 0,
                        )
                    ),                  
                ),   
                'show_description' => array(
                    'label' => $this->l('Enable product description'),
                    'type' => 'switch',                
                    'default' => 0, 
                    'values' => array(
                        array(
                            'label' => $this->l('Yes'),
                            'id' => 'show_description_1',
                            'value' => 1,
                        ),
                        array(
                            'label' => $this->l('No'),
                            'id' => 'show_description_0',
                            'value' => 0,
                        )
                    ),                  
                ),
                'show_clock' => array(
                    'label' => $this->l('Enable count down clock'),
                    'type' => 'switch',                
                    'default' => 0, 
                    'values' => array(
                        array(
                            'label' => $this->l('Yes'),
                            'id' => 'show_clock_1',
                            'value' => 1,
                        ),
                        array(
                            'label' => $this->l('No'),
                            'id' => 'show_clock_0',
                            'value' => 0,
                        )
                    ),                  
                ), 
                'enabled' => array(
                    'label' => $this->l('Enabled'),
                    'type' => 'switch',                
                    'default' => 1, 
                    'values' => array(
                        array(
                            'label' => $this->l('Yes'),
                            'id' => 'menu_enabled_1',
                            'value' => 1,
                        ),
                        array(
                            'label' => $this->l('No'),
                            'id' => 'menu_enabled_0',
                            'value' => 0,
                        )
                    ),                  
                ),     
            ),            
        );
        self::$configs = array(
            'form' => array(
				'legend' => array(
					'title' => $this->l('Configuration'),
                    'icon' => 'icon-AdminAdmin'				
				),
				'input' => array(),
                'submit' => array(
					'title' => $this->l('Save'),
				),
                'name' => 'config'
            ),
            'configs' => array( 
                'ETS_MM_HOOK_TO' => array(
					'type' => 'select',
					'label' => $this->l('Hook to'),						                                               
					'options' => array(
            			 'query' => array( 
                                array(
                                    'id_option' => 'default', 
                                    'name' => $this->l('Default hook')
                                ),
                                array(
                                    'id_option' => 'customhook', 
                                    'name' => $this->l('Custom hook')
                                ),                                   
                            ),                             
                         'id' => 'id_option',
            			 'name' => 'name',                             
                    ),
                    'default' => 'default', 
                    'desc' => $this->l('Put {hook h=\'displayMegaMenu\'} on tpl file where you want to display the megamenu'),                 
				),
                'ETS_MM_TRANSITION_EFFECT' => array(
					'type' => 'select',
					'label' => $this->l('Submenu transition effect'),						                                      
					'options' => array(
            			 'query' => array( 
                                array(
                                    'id_option' => 'fade', 
                                    'name' => $this->l('Default')
                                ),
                                array(
                                    'id_option' => 'slide', 
                                    'name' => $this->l('Slide down')
                                ),
                                array(
                                    'id_option' => 'scale_down', 
                                    'name' => $this->l('Scale down')
                                ),
                                array(
                                    'id_option' => 'fadeInUp', 
                                    'name' => $this->l('Fade in up')
                                ),
                                array(
                                    'id_option' => 'zoom', 
                                    'name' => $this->l('Zoom In')
                                )                                    
                            ),                             
                         'id' => 'id_option',
            			 'name' => 'name'  
                    ),
                    'default' => 'fade',          
				),
                'ETS_MM_DIR' => array(
					'type' => 'select',
					'label' => $this->l('Direction mode'),					                                           
					'options' => array(
            			 'query' => array( 
                                array(
                                    'id_option' => 'auto', 
                                    'name' => $this->l('Auto detect LTR or RTL')
                                ),
                                array(
                                    'id_option' => 'ltr', 
                                    'name' => $this->l('LTR')
                                ),
                                array(
                                    'id_option' => 'rtl', 
                                    'name' => $this->l('RTL')
                                ),                                    
                            ),                             
                         'id' => 'id_option',
            			 'name' => 'name'  
                    ),
                    'default' => 'auto',                     
				),
                'ETS_MOBILE_MM_TYPE' => array(
					'type' => 'select',
					'label' => $this->l('Mobile menu type'),					                                      
					'options' => array(
            			 'query' => array(                                     
                                array(
                                    'id_option' => 'floating', 
                                    'name' => $this->l('Floating')
                                ),
                                array(
                                    'id_option' => 'default', 
                                    'name' => $this->l('Bottom')
                                ),
                                array(
                                    'id_option' => 'full', 
                                    'name' => $this->l('Full screen')
                                ),                                    
                            ),                             
                         'id' => 'id_option',
            			 'name' => 'name'  
                    ),
                    'default' => 'floating',                
				),
                'ETS_MM_INCLUDE_SUB_CATEGORIES' => array(
					'type' => 'switch',
					'label' => $this->l('Include sub-categories'),						
                    'is_bool' => true,
					'values' => array(
						array(
							'id' => 'active_on',
							'value' => 1,
							'label' => $this->l('Yes')
						),
						array(
							'id' => 'active_off',
							'value' => 0,
							'label' => $this->l('No')
						)
					),
                    'default' => 1,					
				), 
                'ETS_MM_STICKY_ENABLED' => array(
					'type' => 'switch',
					'label' => $this->l('Enable Sticky menu'),						
                    'is_bool' => true,
					'values' => array(
						array(
							'id' => 'active_on',
							'value' => 1,
							'label' => $this->l('Yes')
						),
						array(
							'id' => 'active_off',
							'value' => 0,
							'label' => $this->l('No')
						)
					),
                    'default' => 1,					
				),
                'ETS_MM_SHOW_ICON_VERTICAL' => array(
					'type' => 'switch',
					'label' => $this->l('Show vertical menu icon on mobile'),					
                    'is_bool' => true,
					'values' => array(
						array(
							'id' => 'active_on',
							'value' => 1,
							'label' => $this->l('Yes')
						),
						array(
							'id' => 'active_off',
							'value' => 0,
							'label' => $this->l('No')
						)
					),
                    'default' => 1,					
				),
                'ETS_MM_ACTIVE_ENABLED' => array(
					'type' => 'switch',
					'label' => $this->l('Display active menu item'),					
                    'is_bool' => true,
					'values' => array(
						array(
							'id' => 'active_on',
							'value' => 1,
							'label' => $this->l('Yes')
						),
						array(
							'id' => 'active_off',
							'value' => 0,
							'label' => $this->l('No')
						)
					),
                    'default' => 0,					
				),  
                'ETS_MM_CACHE_ENABLED' => array(
					'type' => 'switch',
					'label' => $this->l('Enable cache'),					
                    'is_bool' => true,
					'values' => array(
						array(
							'id' => 'active_on',
							'value' => 1,
							'label' => $this->l('Yes')
						),
						array(
							'id' => 'active_off',
							'value' => 0,
							'label' => $this->l('No')
						)
					),
                    'default' => 0,					
				),  
                'ETS_MM_CACHE_LIFE_TIME' => array(
					'type' => 'text',
					'label' => $this->l('Cache lifetime'),
                    'default' => 24,
                    'suffix' => $this->l('Hours'),
                    'validate' => 'isUnsignedInt',					                      
				),                   
                'ETS_MM_LAYOUT' => array(
					'type' => 'select',
					'label' => $this->l('Layout type'),						                                               
					'options' => array(
            			 'query' => array( 
                                array(
                                    'id_option' => 'layout1', 
                                    'name' => $this->l('Layout 1')
                                ),
                                array(
                                    'id_option' => 'layout2', 
                                    'name' => $this->l('Layout 2')
                                ),
                                array(
                                    'id_option' => 'layout3', 
                                    'name' => $this->l('Layout 3')
                                ),
                                array(
                                    'id_option' => 'layout4', 
                                    'name' => $this->l('Layout 4')
                                ),
                                array(
                                    'id_option' => 'layout5', 
                                    'name' => $this->l('Layout 5')
                                ),                                    
                            ),                             
                         'id' => 'id_option',
            			 'name' => 'name'  
                    ),
                    'default' => 'layout1',                
				),
                'ETS_MM_HEADING_FONT' => array(
                    'label' => $this->l('Heading font'),
                    'type' => 'select', 
					'options' => array(
            			 'query' => $this->googlefonts,                             
                         'id' => 'id_option',
            			 'name' => 'name'  
                    ),   
                    'desc' => $this->l('Use default font of your theme or select a Google font from the list'),
                    'default' => 'inherit',                                                 
                ),
                'ETS_MM_HEADING_FONT_SIZE' => array(
                    'label' => $this->l('Heading font size'),
                    'type' => 'text',   
                    'default' => '16',
                    'suffix'=>'px',  
                    'class'=>'col-lg-3',
                    'validate'=>'isUnsignedInt'                                                 
                ),  
                'ETS_MM_TEXT_FONT' => array(
                    'label' => $this->l('General text font'),
                    'type' => 'select', 
					'options' => array(
            			 'query' => $this->googlefonts,                             
                         'id' => 'id_option',
            			 'name' => 'name'  
                    ),   
                    'desc' => $this->l('Use default font of your theme or select a Google font from the list'),
                    'default' => 'inherit',                                                  
                ),
                'ETS_MM_TEXTTITLE_FONT_SIZE' => array(
                    'label' => $this->l('Title submenu font size'),
                    'type' => 'text',    
                    'default' => '16',
                    'suffix'=>'px', 
                    'class'=>'col-lg-3',  
                    'validate'=>'isUnsignedInt'                                              
                ),
                'ETS_MM_TEXT_FONT_SIZE' => array(
                    'label' => $this->l('General text font size'),
                    'type' => 'text',    
                    'default' => '14',
                    'suffix'=>'px', 
                    'class'=>'col-lg-3',  
                    'validate'=>'isUnsignedInt'                                              
                ), 
                'ETS_MM_COLOR1' => array(
                	'type' => 'color',
                	'label' => $this->l('Menu background'),
                    'validate' => 'isColor',
                    'default' =>  '',
                    'form_group_class'=>'custom_color layout1'						                       
                ),
                'ETS_MM_COLOR2' => array(
                	'type' => 'color',
                	'label' => $this->l('Menu text color'),	
                    'validate' => 'isColor',
                    'default' =>  '#484848',
                    'form_group_class'=>'custom_color layout1'					                      
                ),
                'ETS_MM_COLOR3' => array(
                	'type' => 'color',
                	'label' => $this->l('Menu text hover'),	
                    'validate' => 'isColor',
                    'default' =>  '#ec4249',
                    'form_group_class'=>'custom_color layout1'					                      
                ),
                'ETS_MM_COLOR4' => array(
                	'type' => 'color',
                	'label' => $this->l('Menu background hover'),
                    'validate' => 'isColor',
                    'default' =>  '#ffffff',
                    'form_group_class'=>'custom_color layout1'					                   
                ),
                'ETS_MM_COLOR5' => array(
                	'type' => 'color',
                	'label' => $this->l('Sub-menu background'),
                    'validate' => 'isColor',
                    'default' =>  '#ffffff',
                    'form_group_class'=>'custom_color layout1'						                       
                ),
                'ETS_MM_COLOR_36' => array(
                	'type' => 'color',
                	'label' => $this->l('Sub-menu title'),
                    'validate' => 'isColor',
                    'default' =>  '#414141',
                    'form_group_class'=>'custom_color layout1'						                       
                ),
                'ETS_MM_COLOR6' => array(
                	'type' => 'color',
                	'label' => $this->l('Sub-menu text color'),
                    'validate' => 'isColor',
                    'default' =>  '#414141',
                    'form_group_class'=>'custom_color layout1'						                       
                ),   
                'ETS_MM_COLOR7' => array(
                	'type' => 'color',
                	'label' => $this->l('Sub-menu link hover'),
                    'validate' => 'isColor',
                    'default' =>  '#ec4249',
                    'form_group_class'=>'custom_color layout1'						                       
                ),
                
                'ETS_MM_COLOR8' => array(
                	'type' => 'color',
                	'label' => $this->l('Menu background'),
                    'validate' => 'isColor',
                    'default' =>  '#3cabdb',
                    'form_group_class'=>'custom_color layout2'						                       
                ),
                'ETS_MM_COLOR9' => array(
                	'type' => 'color',
                	'label' => $this->l('Menu text color'),	
                    'validate' => 'isColor',
                    'default' =>  '#ffffff',
                    'form_group_class'=>'custom_color layout2'					                      
                ),
                'ETS_MM_COLOR_10' => array(
                	'type' => 'color',
                	'label' => $this->l('Menu text hover'),	
                    'validate' => 'isColor',
                    'default' =>  '#ffffff',
                    'form_group_class'=>'custom_color layout2'					                      
                ),
                'ETS_MM_COLOR_11' => array(
                	'type' => 'color',
                	'label' => $this->l('Menu background hover'),
                    'validate' => 'isColor',
                    'default' =>  '#50b4df',
                    'form_group_class'=>'custom_color layout2'					                   
                ),
                'ETS_MM_COLOR_12' => array(
                	'type' => 'color',
                	'label' => $this->l('Sub-menu background'),
                    'validate' => 'isColor',
                    'default' =>  '#ffffff',
                    'form_group_class'=>'custom_color layout2'						                       
                ),
                'ETS_MM_COLOR_37' => array(
                	'type' => 'color',
                	'label' => $this->l('Sub-menu title'),
                    'validate' => 'isColor',
                    'default' =>  '#414141',
                    'form_group_class'=>'custom_color layout2'						                       
                ),
                'ETS_MM_COLOR_13' => array(
                	'type' => 'color',
                	'label' => $this->l('Sub-menu text color'),
                    'validate' => 'isColor',
                    'default' =>  '#666666',
                    'form_group_class'=>'custom_color layout2'						                       
                ),   
                'ETS_MM_COLOR_14' => array(
                	'type' => 'color',
                	'label' => $this->l('Sub-menu link hover'),
                    'validate' => 'isColor',
                    'default' =>  '#fc4444',
                    'form_group_class'=>'custom_color layout2'						                       
                ),
                
                'ETS_MM_COLOR_15' => array(
                	'type' => 'color',
                	'label' => $this->l('Menu background'),
                    'validate' => 'isColor',
                    'default' =>  '#333333',
                    'form_group_class'=>'custom_color layout3'						                       
                ),
                'ETS_MM_COLOR_16' => array(
                	'type' => 'color',
                	'label' => $this->l('Menu text color'),	
                    'validate' => 'isColor',
                    'default' =>  '#ffffff',
                    'form_group_class'=>'custom_color layout3'					                      
                ),
                'ETS_MM_COLOR_17' => array(
                	'type' => 'color',
                	'label' => $this->l('Menu text hover'),	
                    'validate' => 'isColor',
                    'default' =>  '#ffffff',
                    'form_group_class'=>'custom_color layout3'					                      
                ),
                'ETS_MM_COLOR_18' => array(
                	'type' => 'color',
                	'label' => $this->l('Menu background hover'),
                    'validate' => 'isColor',
                    'default' =>  '#000000',
                    'form_group_class'=>'custom_color layout3'					                   
                ),
                'ETS_MM_COLOR_19' => array(
                	'type' => 'color',
                	'label' => $this->l('Sub-menu background'),
                    'validate' => 'isColor',
                    'default' =>  '#000000',
                    'form_group_class'=>'custom_color layout3'						                       
                ),
                'ETS_MM_COLOR_38' => array(
                	'type' => 'color',
                	'label' => $this->l('Sub-menu title'),
                    'validate' => 'isColor',
                    'default' =>  '#ec4249',
                    'form_group_class'=>'custom_color layout3'						                       
                ),
                'ETS_MM_COLOR_20' => array(
                	'type' => 'color',
                	'label' => $this->l('Sub-menu text color'),
                    'validate' => 'isColor',
                    'default' =>  '#dcdcdc',
                    'form_group_class'=>'custom_color layout3'						                       
                ),   
                'ETS_MM_COLOR_21' => array(
                	'type' => 'color',
                	'label' => $this->l('Sub-menu link hover'),
                    'validate' => 'isColor',
                    'default' =>  '#fc4444',
                    'form_group_class'=>'custom_color layout3'						                       
                ),
                
                'ETS_MM_COLOR_22' => array(
                	'type' => 'color',
                	'label' => $this->l('Menu background'),
                    'validate' => 'isColor',
                    'default' =>  '#ffffff',
                    'form_group_class'=>'custom_color layout4'						                       
                ),
                'ETS_MM_COLOR_23' => array(
                	'type' => 'color',
                	'label' => $this->l('Menu text color'),	
                    'validate' => 'isColor',
                    'default' =>  '#333333',
                    'form_group_class'=>'custom_color layout4'					                      
                ),
                'ETS_MM_COLOR_24' => array(
                	'type' => 'color',
                	'label' => $this->l('Menu text hover'),	
                    'validate' => 'isColor',
                    'default' =>  '#ffffff',
                    'form_group_class'=>'custom_color layout4'					                      
                ),
                'ETS_MM_COLOR_25' => array(
                	'type' => 'color',
                	'label' => $this->l('Menu background hover'),
                    'validate' => 'isColor',
                    'default' =>  '#ec4249',
                    'form_group_class'=>'custom_color layout4'					                   
                ),
                'ETS_MM_COLOR_26' => array(
                	'type' => 'color',
                	'label' => $this->l('Sub-menu background'),
                    'validate' => 'isColor',
                    'default' =>  '#ffffff',
                    'form_group_class'=>'custom_color layout4'						                       
                ),
                'ETS_MM_COLOR_39' => array(
                	'type' => 'color',
                	'label' => $this->l('Sub-menu title'),
                    'validate' => 'isColor',
                    'default' =>  '#414141',
                    'form_group_class'=>'custom_color layout4'						                       
                ),
                'ETS_MM_COLOR_27' => array(
                	'type' => 'color',
                	'label' => $this->l('Sub-menu text color'),
                    'validate' => 'isColor',
                    'default' =>  '#666666',
                    'form_group_class'=>'custom_color layout4'						                       
                ),   
                'ETS_MM_COLOR_28' => array(
                	'type' => 'color',
                	'label' => $this->l('Sub-menu link hover'),
                    'validate' => 'isColor',
                    'default' =>  '#ec4249',
                    'form_group_class'=>'custom_color layout4'						                       
                ),
                
                'ETS_MM_COLOR_29' => array(
                	'type' => 'color',
                	'label' => $this->l('Menu background'),
                    'validate' => 'isColor',
                    'default' =>  '#f6f6f6',
                    'form_group_class'=>'custom_color layout5'						                       
                ),
                'ETS_MM_COLOR_30' => array(
                	'type' => 'color',
                	'label' => $this->l('Menu text color'),	
                    'validate' => 'isColor',
                    'default' =>  '#333333',
                    'form_group_class'=>'custom_color layout5'					                      
                ),
                'ETS_MM_COLOR_31' => array(
                	'type' => 'color',
                	'label' => $this->l('Menu text hover'),	
                    'validate' => 'isColor',
                    'default' =>  '#ec4249',
                    'form_group_class'=>'custom_color layout5'					                      
                ),
                'ETS_MM_COLOR_32' => array(
                	'type' => 'color',
                	'label' => $this->l('Menu background hover'),
                    'validate' => 'isColor',
                    'default' =>  '',
                    'form_group_class'=>'custom_color layout5'					                   
                ),
                'ETS_MM_COLOR_33' => array(
                	'type' => 'color',
                	'label' => $this->l('Sub-menu background'),
                    'validate' => 'isColor',
                    'default' =>  '#ffffff',
                    'form_group_class'=>'custom_color layout5'						                       
                ),
                'ETS_MM_COLOR_40' => array(
                	'type' => 'color',
                	'label' => $this->l('Sub-menu title'),
                    'validate' => 'isColor',
                    'default' =>  '#414141',
                    'form_group_class'=>'custom_color layout5'						                       
                ),
                'ETS_MM_COLOR_34' => array(
                	'type' => 'color',
                	'label' => $this->l('Sub-menu text color'),
                    'validate' => 'isColor',
                    'default' =>  '#333333',
                    'form_group_class'=>'custom_color layout5'						                       
                ),   
                'ETS_MM_COLOR_35' => array(
                	'type' => 'color',
                	'label' => $this->l('Sub-menu link hover'),
                    'validate' => 'isColor',
                    'default' =>  '#ec4249',
                    'form_group_class'=>'custom_color layout5'						                       
                ),
                'ETS_MM_MOBILE_BG_BAR' => array(
                	'type' => 'color',
                	'label' => $this->l('Background menu bar on mobile'),
                    'validate' => 'isColor',
                    'default' =>  '#666666',					                       
                ),
                'ETS_MM_MOBILE_COLOR_BAR' => array(
                	'type' => 'color',
                	'label' => $this->l('Color menu bar on mobile'),
                    'validate' => 'isColor',
                    'default' =>  '#ffffff',					                       
                ),
                'ETS_MM_CUSTOM_CLASS' => array(
					'type' => 'text',
					'label' => $this->l('Custom class'),					                      
				),
                'ETS_MM_DISPLAY_SHOPPING_CART'=>array(
                    'type'=>'switch',
                    'label' => $this->l('Display shopping cart'),					
                    'is_bool' => true,
					'values' => array(
						array(
							'id' => 'active_on',
							'value' => 1,
							'label' => $this->l('Yes')
						),
						array(
							'id' => 'active_off',
							'value' => 0,
							'label' => $this->l('No')
						)
					),
                    'desc'=> $this->l('Not recommended! For advanced users only. Menu can be broken when this option is enabled (especially on custom theme), You are required to have HTML/CSS knowledge to refine the issues. Please understand this is out of free support as it depends on your theme'),
                    'default' => 0,
                ),
                'ETS_MM_DISPLAY_SEARCH'=>array(
                    'type'=>'switch',
                    'label' => $this->l('Display search'),					
                    'is_bool' => true,
					'values' => array(
						array(
							'id' => 'active_on',
							'value' => 1,
							'label' => $this->l('Yes')
						),
						array(
							'id' => 'active_off',
							'value' => 0,
							'label' => $this->l('No')
						)
					),
                    'desc'=> $this->l('Not recommended! For default search module and advanced users only. Menu can be broken when this option is enabled (especially on custom theme), You are required to have HTML/CSS knowledge to refine the issues. Please understand this is out of free support as it depends on your theme'),
                    'default' => 0,
                ),
                'ETS_MM_SEARCH_DISPLAY_DEFAULT'=>array(
                    'type'=>'switch',
                    'label' => $this->l('Open searchbox by default'),					
                    'is_bool' => true,
					'values' => array(
						array(
							'id' => 'active_on',
							'value' => 1,
							'label' => $this->l('Yes')
						),
						array(
							'id' => 'active_off',
							'value' => 0,
							'label' => $this->l('No')
						)
					),
                    'default' => 0,
                    'form_group_class'=>'mm_form_display_search'
                ),
                'ETS_MM_DISPLAY_CUSTOMER_INFO'=>array(
                    'type'=>'switch',
                    'label' => $this->l('Display user info links'),					
                    'is_bool' => true,
					'values' => array(
						array(
							'id' => 'active_on',
							'value' => 1,
							'label' => $this->l('Yes')
						),
						array(
							'id' => 'active_off',
							'value' => 0,
							'label' => $this->l('No')
						)
					),
                    'desc'=> $this->l('Not recommended! For advanced users only. Menu can be broken when this option is enabled (especially on custom theme), You are required to have HTML/CSS knowledge to refine the issues. Please understand this is out of free support as it depends on your theme'),
                    'default' => 0,
                ),
                'ETS_MM_CUSTOM_HTML_TEXT'=>array(
                    'type'=>'textarea',
                    'label' => $this->l('Custom HTML text'),
                    'default' => '',
                    'lang'=>true,
                )
                
            )
        ); 
        if($this->is17)
        {
            if(!Module::getInstanceByName('ps_shoppingcart')|| !Module::isEnabled('ps_shoppingcart'))
                unset(self::$configs['configs']['ETS_MM_DISPLAY_SHOPPING_CART']); 
            if(!Module::getInstanceByName('ps_searchbar')|| !Module::isEnabled('ps_searchbar'))
            {
                unset(self::$configs['configs']['ETS_MM_DISPLAY_SEARCH']);
                unset(self::$configs['configs']['ETS_MM_SEARCH_DISPLAY_DEFAULT']);
            } 
            if(!Module::getInstanceByName('ps_customersignin')|| !Module::isEnabled('ps_customersignin'))
                unset(self::$configs['configs']['ETS_MM_DISPLAY_CUSTOMER_INFO']);  
        }
        else
        {
            if(!Module::getInstanceByName('blockcart')|| !Module::isEnabled('blockcart'))
                unset(self::$configs['configs']['ETS_MM_DISPLAY_SHOPPING_CART']); 
            if(!Module::getInstanceByName('blocksearch')|| !Module::isEnabled('blocksearch'))
            {
                unset(self::$configs['configs']['ETS_MM_DISPLAY_SEARCH']);
                unset(self::$configs['configs']['ETS_MM_SEARCH_DISPLAY_DEFAULT']);
            } 
            if(!Module::getInstanceByName('blockuserinfo')|| !Module::isEnabled('blockuserinfo'))
                unset(self::$configs['configs']['ETS_MM_DISPLAY_CUSTOMER_INFO']);
        }
        $this->context->smarty->assign(
            array(
                'link' => $this->context->link,
                'MODULE_DIR'=>_MODULE_DIR_,
            )
        );                     
    }
    /**
	 * @see Module::install()
	 */
    public function install()
	{
	    $config = new MM_Config();
        $config->installConfigs();
        self::clearAllCache();
        self::clearUploadedImages();
        if($this->is17 && Module::isInstalled('ps_mainmenu'))
            Module::disableByName('ps_mainmenu');
        elseif(!$this->is17 && Module::isInstalled('blocktopmenu'))
            Module::disableByName('blocktopmenu');
        Configuration::updateValue('PS_ALLOW_HTML_IFRAME',1);
        return parent::install()        
        && $this->registerHook('displayHeader')        
        && $this->registerHook('displayTop')
        && $this->registerHook('displayBlock')
        && $this->registerHook('displayBackOfficeHeader')
        && $this->registerHook('displayMMItemMenu')
        && $this->registerHook('displayMMItemColumn')
        && $this->registerHook('displayMegaMenu')
        && $this->registerHook('displayMMItemBlock')
        && $this->registerHook('displayMMItemTab')
        && $this->registerHook('displayCustomMenu')
        && $this->registerHook('displayCustomerInforTop')
        && $this->registerHook('displaySearch')
        && $this->registerHook('displayCartTop')
        && $this->installDb();
        
    }
    /**
	 * @see Module::uninstall()
	 */
	public function uninstall()
	{
        self::clearAllCache();
        self::clearUploadedImages();
        $config = new MM_Config();
        $config->unInstallConfigs();
        return parent::uninstall() && $this->uninstallDb() && $this->activeModuleExtra();
    }
    public function getContent()
	{
	   if(!$this->active)
            return;
	   $this->proccessPost();
       $this->requestForm();
       $this->context->controller->addJqueryUI('ui.sortable');   
       $this->_html .= $this->displayAdminJs();	      
       $this->_html .= $this->renderForm(); 
       return $this->_html;
    }
    public function renderForm()
    {
        //return ;
        $menu = new MM_Menu(); 
        $tab= new MM_Tab();
        $column = new MM_Column();
        $block = new MM_Block();
        $config = new MM_Config();
        $this->smarty->assign(array(
            'menuForm' => $menu->renderForm(),
            'columnForm' => $column->renderForm(),
            'tabForm' => $tab->renderForm(),
            'blockForm' => $block->renderForm(),
            'configForm' => $config->renderForm(),
            'menus' => $this->getMenus(false),
            'mmBaseAdminUrl' => $this->context->link->getAdminLink('AdminModules', true).'&configure='.$this->name,          
            'layoutDirection' => $this->layoutDirection(),
            'multiLayout' => $this->multiLayout,
            'mm_img_dir' => $this->_path.'views/img/',
            'mm_backend_layout' => $this->context->language->is_rtl ? 'rtl' : 'ltr',
        ));
        return $this->display(__FILE__,'admin-form.tpl');
    } 
    public function baseAdminUrl()
    {
        return $this->context->link->getAdminLink('AdminModules', true).'&configure='.$this->name;
    }
    public function getColumnSizes()
    {
         $sizes = array();
         for($i = 1; $i<=12; $i++)
         {
            $sizes[] = array(
                'id_option' => $i,
                'name' => $i != 12 ? $i.'/12' : $this->l('12/12 (Full)'),
            );
         }
         return $sizes;
    }
    public function getMenus($activeOnly = true,$id_lang = false,$id_menu = false)
    {
        $menus = Db::getInstance()->executeS("
            SELECT m.*,ml.title,ml.link,ml.bubble_text
            FROM "._DB_PREFIX_."ets_mm_menu m
            INNER JOIN "._DB_PREFIX_."ets_mm_menu_shop ms ON (m.id_menu =ms.id_menu AND ms.id_shop='".(int)$this->context->shop->id."')            
            LEFT JOIN "._DB_PREFIX_."ets_mm_menu_lang ml
            ON m.id_menu=ml.id_menu AND ml.id_lang=".((int)$id_lang ? (int)$id_lang : (int)$this->context->language->id)."
            WHERE 1 ".($activeOnly ? " AND m.enabled=1" : "").($id_menu ? " AND m.id_menu=".(int)$id_menu : "")." 
            GROUP BY m.id_menu
            ORDER BY m.sort_order asc,ml.title asc
        ");
        if($menus)
            foreach($menus as &$menu)
            {
                $menu['columns'] = $this->getColumns($menu['id_menu']);
                if($menu['enabled_vertical'])
                {
                    $menu['tabs'] = $this->getTabs($menu['id_menu']);
                }
                $menu['menu_link'] = $this->getMenuLink($menu);
                if($menu['menu_img_link'])
                    $menu['menu_img_link']=$this->context->link->getMediaLink(_MODULE_DIR_.$this->name.'/views/img/upload/'.$menu['menu_img_link'])  ;
                if($menu['background_image'])
                    $menu['background_image']=$this->context->link->getMediaLink(_MODULE_DIR_.$this->name.'/views/img/upload/'.$menu['background_image']);
                if($this->context->language->is_rtl)
                {
                    
                    $menu['position_background'] = str_replace(array('right'),array('_right'),$menu['position_background']);
                    $menu['position_background'] = str_replace(array('left'),array('_left'),$menu['position_background']);
                    $menu['position_background'] = str_replace(array('_left'),array('right'),$menu['position_background']);
                    $menu['position_background'] = str_replace(array('_right'),array('left'),$menu['position_background']);
                }
            }      
        return $id_menu && $menus ? $menus[0] : $menus;
    }
    public function getTabs($id_menu = false, $id_tab = false, $id_lang = false)
    {
        $tabs = Db::getInstance()->executeS("
            SELECT *
            FROM "._DB_PREFIX_."ets_mm_tab t
            LEFT JOIN "._DB_PREFIX_."ets_mm_tab_lang tl on (t.id_tab=tl.id_tab AND tl.id_lang=".($id_lang ? (int)$id_lang :(int)$this->context->language->id).")
            WHERE 1 ".($id_menu ? " AND id_menu=".(int)$id_menu : "").($id_tab ? " AND t.id_tab=".(int)$id_tab : "")."
            ORDER BY sort_order asc
        ");
        if($tabs)
            foreach($tabs as &$tab)
            {
                $tab['columns'] = $this->getColumnsByTab($tab['id_tab'],false,$id_lang);
                if($tab['tab_img_link'])
                    $tab['tab_img_link']=$this->context->link->getMediaLink(_MODULE_DIR_.$this->name.'/views/img/upload/'.$tab['tab_img_link'])  ;
                if($tab['background_image'])
                    $tab['background_image']=$this->context->link->getMediaLink(_MODULE_DIR_.$this->name.'/views/img/upload/'.$tab['background_image']) ;
                if($this->context->language->is_rtl)
                {
                    $tab['position_background'] = str_replace(array('right'),array('_right'),$tab['position_background']);
                    $tab['position_background'] = str_replace(array('left'),array('_left'),$tab['position_background']);
                    $tab['position_background'] = str_replace(array('_left'),array('right'),$tab['position_background']);
                    $tab['position_background'] = str_replace(array('_right'),array('left'),$tab['position_background']);
                }
            }
                
        return $id_tab && $tabs ? $tabs[0] : $tabs;
    }
    public function getColumnsByTab($id_tab = false, $id_column = false, $id_lang = false)
    {
        $columns = Db::getInstance()->executeS("
            SELECT *
            FROM "._DB_PREFIX_."ets_mm_column
            WHERE 1 ".($id_tab ? " AND id_tab=".(int)$id_tab : "").($id_column ? " AND id_column=".(int)$id_column : "")."
            ORDER BY sort_order asc
        ");
        if($columns)
            foreach($columns as &$column)
                $column['blocks'] = $this->getBlocks($column['id_column'],false,$id_lang);
        return $id_column && $columns ? $columns[0] : $columns;
    }
    public function getColumns($id_menu = false, $id_column = false, $id_lang = false)
    {
        $columns = Db::getInstance()->executeS("
            SELECT *
            FROM "._DB_PREFIX_."ets_mm_column
            WHERE 1 ".($id_menu ? " AND id_menu=".(int)$id_menu : "").($id_column ? " AND id_column=".(int)$id_column : "")."
            ORDER BY sort_order asc
        ");
        if($columns)
            foreach($columns as &$column)
                $column['blocks'] = $this->getBlocks($column['id_column'],false,$id_lang);
        return $id_column && $columns ? $columns[0] : $columns;
    }
    public function getBlocks($id_column = false,$activeOnly = true, $id_block = false,$id_lang = false)
    {
        $blocks = Db::getInstance()->executeS("
            SELECT b.*,bl.title,bl.title_link,bl.content,bl.image_link
            FROM "._DB_PREFIX_."ets_mm_block b
            LEFT JOIN "._DB_PREFIX_."ets_mm_block_lang bl
            ON b.id_block=bl.id_block AND bl.id_lang=".($id_lang ? (int)$id_lang : (int)$this->context->language->id)."
            WHERE 1 ".($activeOnly ? "AND b.enabled=1 " : "").($id_column ? " AND b.id_column=".(int)$id_column." " : "").($id_block ? " AND b.id_block=".(int)$id_block : "")."
            ORDER BY b.sort_order asc,bl.title asc
        ");
        return $id_block && $blocks ? $blocks[0] : $blocks;
    }
    public function getBlockById($id_block)
    {
        return Db::getInstance()->getRow("
            SELECT b.*,bl.title,bl.title_link,bl.content,bl.image_link
            FROM "._DB_PREFIX_."ets_mm_block b
            LEFT JOIN "._DB_PREFIX_."ets_mm_block_lang bl
            ON b.id_block=bl.id_block AND bl.id_lang=".(int)$this->context->language->id."
            WHERE b.id_block=".(int)$id_block."
        ");
    }
    public function getManufacturers($orderBy = 'name asc', $addWhere = false)
    {
        return Db::getInstance()->executeS("
            SELECT m.id_manufacturer as value,CONCAT('mm_manufacturer_',m.id_manufacturer) as id, name as label
            FROM "._DB_PREFIX_."manufacturer m
            INNER JOIN "._DB_PREFIX_."manufacturer_shop ms ON (m.id_manufacturer=ms.id_manufacturer AND ms.id_shop=".(int)$this->context->shop->id.")            
            WHERE active=1 ".($addWhere ? pSQL($addWhere) : "")."
            ORDER BY ".($orderBy ? $orderBy : 'name asc')."
        ");
    }
    public function getSuppliers($orderBy = 'name asc', $addWhere = false)
    {
        return Db::getInstance()->executeS("
            SELECT s.id_supplier as value,CONCAT('mm_supplier_',s.id_supplier) as id, name as label
            FROM "._DB_PREFIX_."supplier s
            INNER JOIN "._DB_PREFIX_."supplier_shop ss ON (s.id_supplier=ss.id_supplier AND ss.id_shop=".(int)$this->context->shop->id.")            
            WHERE active=1 ".($addWhere ? pSQL($addWhere) : "")."
            ORDER BY ".($orderBy ? $orderBy : 'name asc')."
        ");
    }
    public function getCMSs($orderBy = 'cl.meta_title asc', $addWhere = false)
    {
        return Db::getInstance()->executeS("
            SELECT c.id_cms as value,CONCAT('mm_cms_',c.id_cms) as id, cl.meta_title as label            
            FROM "._DB_PREFIX_."cms c
            INNER JOIN "._DB_PREFIX_."cms_shop cs ON (c.id_cms= cs.id_cms AND cs.id_shop=".(int)$this->context->shop->id.")
            LEFT JOIN "._DB_PREFIX_."cms_lang cl ON c.id_cms=cl.id_cms AND cl.id_lang=".(int)$this->context->language->id."
            WHERE c.active=1 ".($addWhere ? pSQL($addWhere) : "")."
            GROUP BY c.id_cms ORDER BY ".($orderBy ? $orderBy : 'cl.meta_title asc')."
        ");
    }
    public function proccessPost()
    {
        $this->alerts = array();
        $time = time();
        if(Tools::isSubmit('mm_form_submitted') && ($mmObj = Tools::getValue('mm_object')) && in_array($mmObj,array('MM_Menu','MM_Column','MM_Block','MM_Tab')))
        {
            $obj = ($itemId = (int)Tools::getValue('itemId')) && $itemId > 0 ? new $mmObj($itemId) : new $mmObj();
            $this->alerts = $obj->saveData(); 
            $vals = $obj->getFieldVals(); 
            //'MM_Menu','MM_Column','MM_Block','MM_Tab'
            $params =array();
            switch ($mmObj) {
                case 'MM_Menu':
                    $params['menu']= $this->getMenus(false,false,$obj->id);
                    $vals['html_content']=$this->hookDisplayMMItemMenu($params);
                    break;
                case 'MM_Tab':
                    $params['tab']=$this->getTabs(false,$obj->id);
                    $vals['html_content']=$this->hookDisplayMMItemTab($params);
                    break;
                case 'MM_Column':
                    $params['column']= $this->getColumns(false,$obj->id);
                    $vals['html_content']=$this->hookDisplayMMItemColumn($params);
                    break;
                case 'MM_Block':
                    $params['block']= $this->getBlocks(false,$obj->id);
                    $vals['html_content']=$this->hookDisplayMMItemColumn($params);
                    break;
            }     
            if($obj->id && $mmObj == 'MM_Block')
                $vals['blockHtml'] = $this->hookDisplayBlock(array('block' => $this->getBlockById($obj->id)));   
            die(Tools::jsonEncode(array(
                'alert' => $this->displayAlerts($time),
                'itemId' => (int)$obj->id,
                'title' => property_exists($obj,'title') && isset($obj->title[(int)$this->context->language->id]) ? $obj->title[(int)$this->context->language->id] : false,
                'images' => $obj->id && property_exists($obj,'image') && $obj->image ? array(array(
                    'name' => 'image',
                    'url' => $this->_path.'views/img/upload/'.$obj->image,
                    //'delete_url' => $this->context->link->getAdminLink('AdminModules', true).'&configure='.$this->name.'&deleteimage=image&itemId='.$obj->id.'&mm_object='.$mmObj,
                )) : false,
                'img_dir' => $this->_path.'views/img/upload/',
                'menu_icon' => $obj->id && property_exists($obj,'menu_icon') && $obj->menu_icon ? $obj->menu_icon:'',
                'itemKey' => 'id_'.$obj->fields['form']['name'],
                'time' => $time,
                'id_menu' => ($id_menu = (int)Tools::getValue('id_menu')) ? $id_menu : false,
                'mm_object' => $mmObj, 
                'vals' => $vals,
                'success' => isset($this->alerts['success']) && $this->alerts['success'],
            )));      
        }
        
        if((Tools::getValue('deleteimage')) && ($mmObj = Tools::getValue('mm_object')) && in_array($mmObj,array('MM_Menu','MM_Column','MM_Block','MM_Tab')))
        {
            if(($itemId = (int)Tools::getValue('itemId')) && $itemId > 0)
            {
                $obj = new $mmObj($itemId);
                $this->alerts = $obj->clearImage(Tools::getValue('deleteimage'));
                die(Tools::jsonEncode(array(
                    'alert' => $this->displayAlerts($time), 
                    'itemId' => (int)$obj->id,  
                    'itemKey' => 'image',              
                    'time' => $time,
                    'success' => isset($this->alerts['success']) && $this->alerts['success'],
                ))); 
            }
            else
            die(Tools::jsonEncode(array(
            'alert' => true, 
            'itemId' => 0,  
            'itemKey' => 'image',              
            'time' => true,
            'success' => true,
        )));
        }
        elseif((Tools::getValue('deleteimage')) && $mmObj=='MM_Config')
        {
            if(file_exists($this->_path.'views/img/upload'.Configuration::get(Tools::getValue('deleteimage'))))
                @unlink($this->_path.'views/img/upload'.Configuration::get(Tools::getValue('deleteimage')));
            Configuration::updateValue(Tools::getValue('deleteimage'),'');
            $this->alerts= array(
            'errors' => false,
            'success' => array
                (
                    $this->l('Delete image successfull')
                ),
            ); 
            die(Tools::jsonEncode(array(
                'alert' => $this->displayAlerts($time),
                'itemId' => 1 , 
                'itemKey' => 'image',              
                'time' => $time,
                'success' => isset($this->alerts['success']) && $this->alerts['success'],
            ))); 
        }
        if((Tools::getValue('deleteobject')) && ($mmObj = Tools::getValue('mm_object')) && in_array($mmObj,array('MM_Menu','MM_Column','MM_Block','MM_Tab')) && ($itemId = (int)Tools::getValue('itemId')) && $itemId > 0)
        {
            $obj = new $mmObj($itemId);
            $this->alerts = $obj->deleteObj();
            die(Tools::jsonEncode(array(
                'alert' => $this->displayAlerts($time),                           
                'time' => $time,
                'itemId' => $itemId,
                'success' => isset($this->alerts['success']) && $this->alerts['success'],
                'successMsg' => isset($this->alerts['success']) && $this->alerts['success'] ? $this->l('Item deleted') : false,
            ))); 
        }
        if((Tools::getValue('duplicateItem')) && ($mmObj = 'MM_'.Tools::ucfirst(Tools::strtolower(Tools::getValue('mm_object')))) && in_array($mmObj,array('MM_Menu','MM_Column','MM_Block','MM_Tab')) && ($itemId = (int)Tools::getValue('itemId')) && $itemId > 0)
        {
            $obj = new $mmObj($itemId);  
            if($newObj = $obj->duplicateItem())
            {
                switch($mmObj)
                {
                    case 'MM_Menu':
                        $menu = $this->getMenus(false,false,$newObj->id);
                        $html = $this->hookDisplayMMItemMenu(array('menu' => $menu,'have_li'=>true));
                        break;
                    case 'MM_Tab':
                        $tab= $this->getTabs(false,$newObj->id);
                        $html= $this->hookDisplayMMItemTab(array('tab' => $tab,'have_li'=>true));
                        break;
                    case 'MM_Column':
                        $column = $this->getColumns(false,$newObj->id);
                        $html = $this->hookDisplayMMItemColumn(array('column' => $column,'have_li'=>true));
                        break;
                    case 'MM_Block':
                        $block = $this->getBlocks(false,false,$newObj->id);
                        $html = $this->hookDisplayMMItemBlock(array('block' => $block,'have_li'=>true));
                        break;
                    default:
                        break;
                }
            }         
            die(Tools::jsonEncode(array(
                'alerts' => $newObj ? array('success' => $this->l('Item duplicated')) : array('errors' => $this->l('Can not duplcate item. An unknown problem happened')),                           
                'time' => $time,
                'itemId' => $itemId,
                'newItemId' => $newObj->id,
                'mm_object' => Tools::getValue('mm_object'),
                'html' => isset($html) ? $html : '',
            ))); 
        }
        if(Tools::isSubmit('mm_config_submitted'))
        {
            $config = new MM_Config();
            $this->alerts = $config->saveData();
            if($this->is17)
            {
                $ps_customersignin =Module::getInstanceByName('ps_customersignin');
                if(Configuration::get('ETS_MM_DISPLAY_CUSTOMER_INFO') && $ps_customersignin)
                {
                    $id_hook = Hook::getIdByName('displayNav2');
                    Configuration::updateValue('ETS_MM_POSITION_USERINFOR',$ps_customersignin->getPosition($id_hook));
                    $ps_customersignin->unregisterHook('displayNav2');
                    $ps_customersignin->registerHook('displayCustomerInforTop');
                }
                elseif($ps_customersignin)
                {
                    $ps_customersignin->registerHook('displayNav2');
                    $id_hook = Hook::getIdByName('displayNav2');
                    if($position=(int)Configuration::get('ETS_MM_POSITION_USERINFOR'))
                        $ps_customersignin->updatePosition($id_hook,false,$position);
                    $ps_customersignin->unregisterHook('displayCustomerInforTop');
                }
                $ps_searchbar= Module::getInstanceByName('ps_searchbar');
                if(Configuration::get('ETS_MM_DISPLAY_SEARCH')&&$ps_searchbar)
                {
                    $id_hook = Hook::getIdByName('top');
                    Configuration::updateValue('ETS_MM_POSITION_BLOCK_SEARCH',$ps_searchbar->getPosition($id_hook));
                    $ps_searchbar->unregisterHook('top');
                }
                elseif($ps_searchbar)
                {
                    $ps_searchbar->registerHook('top');
                    $id_hook = Hook::getIdByName('top');
                    if($position = (int)Configuration::get('ETS_MM_POSITION_BLOCK_SEARCH'))
                        $ps_searchbar->updatePosition($id_hook,false,$position);
                }
                $ps_shoppingcart= Module::getInstanceByName('ps_shoppingcart');
                if($ps_shoppingcart && Configuration::get('ETS_MM_DISPLAY_SHOPPING_CART'))
                {
                    $id_hook = Hook::getIdByName('displayNav2');
                    Configuration::updateValue('ETS_MM_POSITION_BLOCKCART',$ps_shoppingcart->getPosition($id_hook));    
                    $ps_shoppingcart->unregisterHook('displayNav2');
                    $ps_shoppingcart->registerHook('displayCartTop');
                }elseif($ps_shoppingcart)
                {
                    $ps_shoppingcart->registerHook('displayNav2');
                    $id_hook=Hook::getIdByName('displayNav2');
                    if($position=Configuration::get('ETS_MM_POSITION_BLOCKCART'))
                        $ps_shoppingcart->updatePosition($id_hook,false,$position);
                    $ps_shoppingcart->unregisterHook('displayCartTop');
                }
            }
            else
            {
                $blockcart= Module::getInstanceByName('blockcart');
                if(Configuration::get('ETS_MM_DISPLAY_SHOPPING_CART') && $blockcart)
                {
                    if($blockcart->isRegisteredInHook('top'))
                    {
                        Configuration::updateValue('ETS_MM_HOOK_BLOCKCART','top');
                        $id_hook= Hook::getIdByName('top');
                        Configuration::updateValue('ETS_MM_POSITION_BLOCKCART',$blockcart->getPosition($id_hook));
                        $blockcart->unregisterHook('top');
                    }
                    elseif($blockcart->isRegisteredInHook('displayNav'))
                    {
                        Configuration::updateValue('ETS_MM_HOOK_BLOCKCART','displayNav');
                        $id_hook= Hook::getIdByName('displayNav');
                        Configuration::updateValue('ETS_MM_POSITION_BLOCKCART',$blockcart->getPosition($id_hook));
                        $blockcart->unregisterHook('displayNav');
                    }
                    
                }
                elseif($blockcart)
                {
                    $hook = Configuration::get('ETS_MM_HOOK_BLOCKCART')? Configuration::get('ETS_MM_HOOK_BLOCKCART'):'top';
                    $blockcart->registerHook($hook);
                    $id_hook = Hook::getIdByName($hook);
                    if($position=(int)Configuration::get('ETS_MM_POSITION_BLOCKCART'))
                        $blockcart->updatePosition($id_hook,false,$position);
                }
                $blocksearch= Module::getInstanceByName('blocksearch');
                if(Configuration::get('ETS_MM_DISPLAY_SEARCH') && $blocksearch)
                {
                    if($blocksearch->isRegisteredInHook('top'))
                    {
                        Configuration::updateValue('ETS_MM_HOOK_BLOCK_SEARCH','top');
                        $id_hook=Hook::getIdByName('top');
                        Configuration::updateValue('ETS_MM_POSITION_BLOCK_SEARCH',$blocksearch->getPosition($id_hook));
                        $blocksearch->unregisterHook('Top');
                    }
                    elseif($blocksearch->isRegisteredInHook('displayNav'))
                    {
                        Configuration::updateValue('ETS_MM_HOOK_BLOCK_SEARCH','displayNav');
                        $id_hook=Hook::getIdByName('displayNav');
                        Configuration::updateValue('ETS_MM_POSITION_BLOCK_SEARCH',$blocksearch->getPosition($id_hook));
                        $blocksearch->unregisterHook('displayNav');
                    }
                    
                }
                elseif($blocksearch)
                {
                    $hook = Configuration::get('ETS_MM_HOOK_BLOCK_SEARCH')? Configuration::get('ETS_MM_HOOK_BLOCK_SEARCH'):'top';
                    $id_hook= Hook::getIdByName($hook);
                    $blocksearch->registerHook($hook);
                    if($position= (int)Configuration::get('ETS_MM_POSITION_BLOCK_SEARCH'))
                        $blocksearch->updatePosition($id_hook,false,$position);
                }
                $blockuserinfo= Module::getInstanceByName('blockuserinfo');
                if(Configuration::get('ETS_MM_DISPLAY_CUSTOMER_INFO') && $blockuserinfo)
                {
                    if($blockuserinfo->isRegisteredInHook('displayNav'))
                    {
                        Configuration::updateValue('ETS_MM_HOOK_USERINFOR','displayNav');
                        $id_hook = Hook::getIdByName('displayNav');
                        Configuration::updateValue('ETS_MM_POSITION_USERINFOR',$blockuserinfo->getPosition($id_hook));
                        $blockuserinfo->unregisterHook('displayNav');
                    }
                    elseif($blockuserinfo->isRegisteredInHook('displayTop'))
                    {
                        Configuration::updateValue('ETS_MM_HOOK_USERINFOR','displayTop');
                        $id_hook = Hook::getIdByName('displayTop');
                        Configuration::updateValue('ETS_MM_POSITION_USERINFOR',$blockuserinfo->getPosition($id_hook));
                        $blockuserinfo->unregisterHook('displayTop');
                    }
                    
                }
                elseif($blockuserinfo)
                {
                    $hook = Configuration::get('ETS_MM_HOOK_USERINFOR')?Configuration::get('ETS_MM_HOOK_USERINFOR'):'displayNav';
                    $id_hook=Hook::getIdByName($hook);
                    $blockuserinfo->registerHook($hook);
                    if($position=(int)Configuration::get('ETS_MM_POSITION_USERINFOR'))
                        $blockuserinfo->updatePosition($id_hook,false,$position);
                }
            }
           
            die(Tools::jsonEncode(array(
                'alert' => $this->displayAlerts($time),                           
                'time' => $time, 
                'layout_direction' => $this->layoutDirection(),               
                'success' => isset($this->alerts['success']) && $this->alerts['success'],
            ))); 
        }
        if(Tools::isSubmit('updateOrder'))
        {
            $itemId = (int)Tools::getValue('itemId');
            $objName = 'MM_'.Tools::ucfirst(Tools::strtolower(trim(Tools::getValue('obj'))));
            $parentId = (int)Tools::getValue('parentId') > 0 ? (int)Tools::getValue('parentId') : 0;
            $previousId = (int)Tools::getValue('previousId');
            $parentObj=Tools::getValue('parentObj');
            $result = false;
            if(in_array($objName,array('MM_Menu','MM_Column','MM_Block','MM_Tab')) && $itemId > 0)
            {
                $obj = new $objName($itemId);
                $result = $obj->updateOrder($previousId,$parentId,$parentObj);
            }
            die(Tools::jsonEncode(array(
                'success' => $result
            )));
        }
        if(Tools::isSubmit('clearMenuCache'))
        {
            $this->clearAllCache();
            die(Tools::jsonEncode(array(
                'success' => $this->l('Cache cleared'),
            )));                    
        }
        if(Tools::isSubmit('exportMenu'))
        {
            $this->generateArchive();
        }
        if(Tools::getValue('importMenu'))
        {
            $errors = $this->processImport();   
            die(Tools::jsonEncode(array(
                'success' => !$errors ? $this->l('Menu was successfully imported. This page will be reloaded in 3 seconds') : false, 
                'error' => $errors ? implode('; ',$errors) : false,
            )));         
        }
        if(Tools::isSubmit('reset_config'))
        {
            $configuration = new MM_Config();
            $configuration->installConfigs();
            die(Tools::jsonEncode(array(
                'success' => $this->l('Configuration was successfully reset. This page will be reloaded in 3 seconds'),
            )));
        }
    }
    public function requestForm()
    {
        if(Tools::isSubmit('request_form') && ($mmObj = Tools::getValue('mm_object')) && in_array($mmObj,array('MM_Menu','MM_Column','MM_Block','MM_Tab')))
        {
            $obj = ($itemId = (int)Tools::getValue('itemId')) && $itemId > 0 ? new $mmObj($itemId) : new $mmObj();
            die(Tools::jsonEncode(array(
                'form' => $obj->renderForm(),
                'itemId' => $itemId,
            )));
        }
    }
    public function displayAdminJs()
    {
        $this->smarty->assign(array(
            'js_dir_path' => $this->_path.'views/js/',
        ));
        return $this->display(__FILE__,'admin-js.tpl');
    }
    public function displayAlerts($time)
    {
        $this->smarty->assign(array(
            'alerts' => $this->alerts,
            'time' => $time,
        ));
        return $this->display(__FILE__,'admin-alerts.tpl');
    }
    public function hookDisplayBlock($params)
    {        
        if(isset($params['block']) && $params['block'])
        {
            $this->smarty->assign(array(
                'block' => $this->convertBlockProperties($params['block']),                
            ));
            return $this->display(__FILE__,'block.tpl');
        }
    }
    public function convertBlockProperties($block)
    {
        if(isset($block['id_manufacturers']) && $block['id_manufacturers'] && ($ids = $this->strToIds($block['id_manufacturers'])))
        {
            if($manufacturers = $this->getManufacturers($block['order_by_manufacturers'],' AND m.id_manufacturer IN('.implode(',',$ids).')'))
            {
                foreach($manufacturers as &$manufacturer)
                {
                    if ((int)Configuration::get('PS_REWRITING_SETTINGS'))
						$link_rewrite = Tools::link_rewrite($manufacturer['label']);
					else
						$link_rewrite = 0;
                    $manufacturer['link'] = $this->context->link->getManufacturerLink((int)$manufacturer['value'], $link_rewrite);                     
                    if(file_exists(_PS_MANU_IMG_DIR_.$manufacturer['value'].'.jpg'))
                        $manufacturer['image'] = trim($this->getBaseLink(),'/').'/img/m/'.$manufacturer['value'].'.jpg';
                    else
                        $manufacturer['image'] = $this->_path.'views/img/2.jpg';
                    
                }
                $block['manufacturers'] = $manufacturers;
            }            
        }
        if(isset($block['id_suppliers']) && $block['id_suppliers'] && ($ids = $this->strToIds($block['id_suppliers'])))
        {
            if($suppliers = $this->getSuppliers($block['order_by_suppliers'],' AND s.id_supplier IN('.implode(',',$ids).')'))
            {
                foreach($suppliers as &$supplier)
                {
                    $supplier['link'] = $this->context->link->getSupplierLink((int)$supplier['value']); 
                    if(file_exists(_PS_SUPP_IMG_DIR_.$supplier['value'].'.jpg'))
                        $supplier['image'] =trim($this->getBaseLink(),'/').'/img/su/'.$supplier['value'].'.jpg';
                    else
                        $supplier['image'] = $this->_path.'views/img/2.jpg';                    
                }
                $block['suppliers'] = $suppliers;
            }            
        }
        if(isset($block['id_cmss']) && $block['id_cmss'] && ($ids = $this->strToIds($block['id_cmss'])))
        {
            if($cmss = $this->getCMSs(false,' AND c.id_cms IN('.implode(',',$ids).')'))
            {               
                foreach($cmss as &$c)
                {                    
                    $c['link'] = $this->context->link->getCMSLink((int)$c['value']);                     
                }
                $block['cmss'] = $cmss;                
            }                        
        }
        if(isset($block['id_categories']) && $block['id_categories'] && ($ids = $this->strToIds($block['id_categories'])))
        {
            $block['categoriesHtml'] = $this->displayCategories($this->getCategoryById($ids,$block['order_by_category']));                      
        }
        if(isset($block['image']) && $block['image'])
        {
            $block['image'] = $this->_path.'views/img/upload/'.$block['image'];
        }
        if(isset($block['id_products']) && $block['id_products'])
        {
            $block['productsHtml'] = $this->displayProducts($block['id_products'],$block);
        }
        return $block;
    }
    public function getMenuLink($menu)
    {
        if(isset($menu['link_type']))
        {
            switch($menu['link_type'])
            {
                case 'CUSTOM':
                    return $menu['link'];
                case 'CMS':
                    return $this->context->link->getCMSLink((int)$menu['id_cms']);    
                case 'CUSTOM':
                    return $menu['link'];
                case 'CATEGORY':
                    return $this->context->link->getCategoryLink((int)$menu['id_category']);
                case 'MNFT':
                    $manufacturer = new Manufacturer((int)$menu['id_manufacturer'], (int)$this->context->language->id);
                    if(!is_null($manufacturer->id))
                    {
                        if ((int)Configuration::get('PS_REWRITING_SETTINGS'))
    						$manufacturer->link_rewrite = Tools::link_rewrite($manufacturer->name);
    					else
    						$manufacturer->link_rewrite = 0;
                        return $this->context->link->getManufacturerLink((int)$menu['id_manufacturer'], $manufacturer->link_rewrite);
                    }
                    return '#';   
                case 'MNSP':   
                    $supplier= new Supplier((int)$menu['id_supplier'],(int)$this->context->language->id);
                    if(!is_null($supplier->id))
                    {
                        return $this->context->link->getSupplierLink($supplier->id);
                    } 
                    return '#';                
                case 'HOME':
                    return $this->context->link->getPageLink('index', true); 
                case 'CONTACT':
                    return $this->context->link->getPageLink('contact', true);       
            }
        }
        return '#';
    }
    public function getProducts($ids, $order_by = false)
    {
        if(!preg_match('/^[0-9]+(,[0-9]+)*$/', $ids))
            return false;
        $nb_days_new_product = Configuration::get('PS_NB_DAYS_NEW_PRODUCT');
        $id_lang = (int)$this->context->language->id;
        if (!Validate::isUnsignedInt($nb_days_new_product)) {
            $nb_days_new_product = 20;
        }        
        if($order_by && !in_array($order_by, array('orderprice asc','rand()','orderprice desc','pl.name asc','pl.name desc','cp.position asc','p.id_product desc','rand')))
            $order_by = $this->renderOrderString($ids);
        if(!$order_by)
            $order_by = $this->renderOrderString($ids);
        $active = true;
        $front = true;
        $sql = 'SELECT p.*, product_shop.*, stock.out_of_stock, IFNULL(stock.quantity, 0) AS quantity'.(Combination::isFeatureActive() ? ', IFNULL(product_attribute_shop.id_product_attribute, 0) AS id_product_attribute,
					product_attribute_shop.minimal_quantity AS product_attribute_minimal_quantity' : '').', pl.`description`, pl.`description_short`, pl.`available_now`,
					pl.`available_later`, pl.`link_rewrite`, pl.`meta_description`, pl.`meta_keywords`, pl.`meta_title`, pl.`name`, image_shop.`id_image` id_image,
					il.`legend` as legend, m.`name` AS manufacturer_name, cl.`name` AS category_default,
					DATEDIFF(product_shop.`date_add`, DATE_SUB("'.date('Y-m-d').' 00:00:00",
					INTERVAL '.(int)$nb_days_new_product.' DAY)) > 0 AS new, product_shop.price AS orderprice
				FROM `'._DB_PREFIX_.'category_product` cp
				LEFT JOIN `'._DB_PREFIX_.'product` p
					ON p.`id_product` = cp.`id_product`
				'.Shop::addSqlAssociation('product', 'p').
                (Combination::isFeatureActive() ? ' LEFT JOIN `'._DB_PREFIX_.'product_attribute_shop` product_attribute_shop
				ON (p.`id_product` = product_attribute_shop.`id_product` AND product_attribute_shop.`default_on` = 1 AND product_attribute_shop.id_shop='.(int)$this->context->shop->id.')':'').'
				'.Product::sqlStock('p', 0).'
				LEFT JOIN `'._DB_PREFIX_.'category_lang` cl
					ON (product_shop.`id_category_default` = cl.`id_category`
					AND cl.`id_lang` = '.(int)$id_lang.Shop::addSqlRestrictionOnLang('cl').')
				LEFT JOIN `'._DB_PREFIX_.'product_lang` pl
					ON (p.`id_product` = pl.`id_product`
					AND pl.`id_lang` = '.(int)$id_lang.Shop::addSqlRestrictionOnLang('pl').')
				LEFT JOIN `'._DB_PREFIX_.'image_shop` image_shop
					ON (image_shop.`id_product` = p.`id_product` AND image_shop.cover=1 AND image_shop.id_shop='.(int)$this->context->shop->id.')
				LEFT JOIN `'._DB_PREFIX_.'image_lang` il
					ON (image_shop.`id_image` = il.`id_image`
					AND il.`id_lang` = '.(int)$id_lang.')
				LEFT JOIN `'._DB_PREFIX_.'manufacturer` m
					ON m.`id_manufacturer` = p.`id_manufacturer`                
				WHERE product_shop.`id_shop` = '.(int)$this->context->shop->id.'
					AND p.id_product IN('.pSQL($ids).') '
                    .($active ? ' AND product_shop.`active` = 1' : '')
                    .($front ? ' AND product_shop.`visibility` IN ("both", "catalog")' : '')
                    .' GROUP BY p.id_product '
                    .($order_by ? 'ORDER BY '.$order_by : '').' 
			     ';
        //die($sql);
        $result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql, true, false);
        if (!$result) {
            return array();
        }

        if ($order_by == 'orderprice') {
            $order_way ='asc';
            Tools::orderbyPrice($result, $order_way);
        }            
        /** Modify SQL result */
        $products = Product::getProductsProperties($id_lang, $result);
        if($products)
        {
            foreach($products as &$product)
            {
                if(isset($product['specific_prices']) && $product['specific_prices'] && $product['specific_prices']['to']!='0000-00-00 00:00:00')
                {
                    $product['specific_prices_to'] = $product['specific_prices']['to'];
                }
            }
        }
        if($this->is17 && Tools::getValue('configure')!='ets_megamenu' && $products)
        {
            $assembler = new ProductAssembler($this->context);

            $presenterFactory = new ProductPresenterFactory($this->context);
            $presentationSettings = $presenterFactory->getPresentationSettings();
            $presenter = new PrestaShop\PrestaShop\Core\Product\ProductListingPresenter(
                new PrestaShop\PrestaShop\Adapter\Image\ImageRetriever(
                    $this->context->link
                ),
                $this->context->link,
                new PrestaShop\PrestaShop\Adapter\Product\PriceFormatter(),
                new PrestaShop\PrestaShop\Adapter\Product\ProductColorsRetriever(),
                $this->context->getTranslator()
            );
    
            $products_for_template = array();
            
            foreach ($products as $rawProduct) {
                $products_for_template[] = $presenter->present(
                    $presentationSettings,
                    $assembler->assembleProduct($rawProduct),
                    $this->context->language
                );
            }                
            return $products_for_template;
        }
        return $products;
    }
    private function renderOrderString($ids)
    {
        $argIds = explode(',',$ids);
        $str = '';
        if($argIds)
        {            
            foreach($argIds as $id)
            {                
                $str .= ' p.id_product='.(int)$id.' DESC,';
            }
        }
        return trim($str,',');
    }
    public function displayProducts($ids,$block)
    {
        $compared_products = array();
        if (Configuration::get('PS_COMPARATOR_MAX_ITEM') && isset($this->context->cookie->id_compare)) {
            $compared_products = CompareProduct::getCompareProducts($this->context->cookie->id_compare);
        }        
        $this->smarty->assign(array(
            'products' => $this->getProducts($ids),
            'PS_CATALOG_MODE'     => (bool)Configuration::get('PS_CATALOG_MODE') || (Group::isFeatureActive() && !(bool)Group::getCurrent()->show_prices),
            'comparator_max_item' => (int)Configuration::get('PS_COMPARATOR_MAX_ITEM'),
            'compared_products'   => is_array($compared_products) ? $compared_products : array(),
            'protocol_link' => (Configuration::get('PS_SSL_ENABLED') ) ? 'https://' : 'http://', 
            'link' => new Link(), 
            'block'=>$block         
        ));      
        return $this->display(__FILE__,'product-list'.(Tools::getValue('configure')=='ets_megamenu' ? '-mini' : ($this->is17 ? '-17':'')).'.tpl');
    } 
    public function hookDisplayBackOfficeHeader()
    {
        if(trim(Tools::strtolower(Tools::getValue('configure')))=='ets_megamenu'){
            $this->context->controller->addCSS($this->_path.'views/css/font-awesome.css');
            $this->context->controller->addCSS($this->_path.'views/css/megamenu-admin.css');
        }
            
    }
    public function hookDisplayHeader()
    {
        $this->addGoogleFonts();
        $this->context->controller->addCSS($this->_path.'views/css/font-awesome.css');
        if($this->is17)
        {
            $this->addCss17('megamenu','main');
            $this->addCss17('fix17','fix17');    
        }
        else
        {
            $this->context->controller->addCSS($this->_path.'views/css/megamenu.css');
            $this->context->controller->addCSS($this->_path.'views/css/fix16.css');
        }
        $this->context->controller->addCSS($this->_path.'views/css/animate.css');           
        $this->context->controller->addJS($this->_path.'views/js/megamenu.js');
        $this->context->controller->addJS($this->_path.'views/js/jquery.countdown.min.js');
        $this->context->controller->addJS($this->_path.'views/js/clock.js');
        $config = new MM_Config();
        $this->context->smarty->assign(array(
            'mm_config' => $config->getConfig(),
        ));
        if(Configuration::get('ETS_MM_CACHE_ENABLED'))
        {
            if(@file_exists(dirname(__FILE__).'/views/css/cache.css') || !@file_exists(dirname(__FILE__).'/views/css/cache.css') && @file_put_contents(dirname(__FILE__).'/views/css/cache.css',$this->getCSS()))                
            {
                if($this->is17)
                    $this->addCss17('cache','cache');
                else
                    $this->context->controller->addCSS($this->_path.'views/css/cache.css');
            }
            else
                return $this->displayDynamicCss();
        }
        else
            return $this->displayDynamicCss();
    }
    public function addGoogleFonts($frontend = false)
    {
        $font1 = Configuration::get('ETS_MM_HEADING_FONT');
        $font2 = Configuration::get('ETS_MM_TEXT_FONT');
        if($font1!='Times new roman' && $font1!='Arial' && $font1!='inherit')
        {
            if($this->is17)
            {
                $this->addCss17('https://fonts.googleapis.com/css?family='.urlencode($font1),'mm_gfont_1','remote');
            }   
            else
                $this->context->controller->addCSS('https://fonts.googleapis.com/css?family='.urlencode($font1));   
        }
        if($font2 != $font1 && $font2!='Times new roman' && $font2!='Arial' && $font2!='inherit') 
        {
            if($this->is17)
            {
                $this->addCss17('https://fonts.googleapis.com/css?family='.urlencode($font2),'mm_gfont_2','remote');
            }   
            else
                $this->context->controller->addCSS('https://fonts.googleapis.com/css?family='.urlencode($font2)); 
        } 
        unset($frontend);
    }
    public function addCss17($cssFile,$id = false,$server='local')
    {
        $this->context->controller->registerStylesheet('modules-ets_megamenu'.($id ? '_'.$id : ''), $server=='remote' ? $cssFile : 'modules/'.$this->name.'/views/css/'.$cssFile.'.css', array('media' => 'all', 'priority' => 150,'server' => $server));
    }
    public function displayDynamicCss()
    {
        $this->smarty->assign(array(
            'mm_css' => $this->getCss(),
        ));
        return $this->display(__FILE__,'header.tpl');
    }
    public function getCSS()
    {   
        $colors = array(
            Configuration::get('ETS_MM_TEXT_FONT_SIZE'),
            Configuration::get('ETS_MM_COLOR1'),
            Configuration::get('ETS_MM_COLOR2'),
            Configuration::get('ETS_MM_COLOR3'),
            Configuration::get('ETS_MM_COLOR4'),
            Configuration::get('ETS_MM_COLOR5'),
            Configuration::get('ETS_MM_COLOR6'),
            Configuration::get('ETS_MM_COLOR7'),
            Configuration::get('ETS_MM_COLOR8'),
            Configuration::get('ETS_MM_COLOR9'),
            Configuration::get('ETS_MM_COLOR_10'),
            Configuration::get('ETS_MM_COLOR_11'),
            Configuration::get('ETS_MM_COLOR_12'),
            Configuration::get('ETS_MM_COLOR_13'),
            Configuration::get('ETS_MM_COLOR_14'),
            Configuration::get('ETS_MM_COLOR_15'),
            Configuration::get('ETS_MM_COLOR_16'),
            Configuration::get('ETS_MM_COLOR_17'),
            Configuration::get('ETS_MM_COLOR_18'),
            Configuration::get('ETS_MM_COLOR_19'),
            Configuration::get('ETS_MM_COLOR_20'),
            Configuration::get('ETS_MM_COLOR_21'),
            Configuration::get('ETS_MM_COLOR_22'),
            Configuration::get('ETS_MM_COLOR_23'),
            Configuration::get('ETS_MM_COLOR_24'),
            Configuration::get('ETS_MM_COLOR_25'),
            Configuration::get('ETS_MM_COLOR_26'),
            Configuration::get('ETS_MM_COLOR_27'),
            Configuration::get('ETS_MM_COLOR_28'),
            Configuration::get('ETS_MM_COLOR_29'),
            Configuration::get('ETS_MM_COLOR_30'),
            Configuration::get('ETS_MM_COLOR_31'),
            Configuration::get('ETS_MM_COLOR_32'),
            Configuration::get('ETS_MM_COLOR_33'),
            Configuration::get('ETS_MM_COLOR_34'),
            Configuration::get('ETS_MM_COLOR_35'),
            Configuration::get('ETS_MM_COLOR_36'),
            Configuration::get('ETS_MM_COLOR_37'),
            Configuration::get('ETS_MM_COLOR_38'),
            Configuration::get('ETS_MM_COLOR_39'),
            Configuration::get('ETS_MM_COLOR_40'),
            Configuration::get('ETS_MM_MOBILE_BG_BAR'),
            Configuration::get('ETS_MM_MOBILE_COLOR_BAR'),
        );
        //$text_font_size = ;
        $colors[] = Configuration::get('ETS_MM_HEADING_FONT')!='inherit' ? "'".Configuration::get('ETS_MM_HEADING_FONT')."'" : 'inherit';
        $colors[] = Configuration::get('ETS_MM_TEXT_FONT') !='inherit' ? "'".Configuration::get('ETS_MM_TEXT_FONT')."'" : 'inherit';
        $dynamicCSS = @file_exists(dirname(__FILE__).'/views/css/dynamic.css') && @is_readable(dirname(__FILE__).'/views/css/dynamic.css') ? Tools::file_get_contents(dirname(__FILE__).'/views/css/dynamic.css') : '';        
        //$customCSS = trim(Configuration::get('ETS_MM_CUSTOM_CSS'));
        $css =  ($dynamicCSS) ? str_replace(array('text_fontsize','l1_color1','l1_color2','l1_color3','l1_color4','l1_color5','l1_color6','l1_color7','l2_color1','l2_color2','l2_color3','l2_color4','l2_color5','l2_color6','l2_color7', 'l3_color1','l3_color2','l3_color3','l3_color4','l3_color5','l3_color6','l3_color7', 'l4_color1','l4_color2','l4_color3','l4_color4','l4_color5','l4_color6','l4_color7', 'l5_color1','l5_color2','l5_color3','l5_color4','l5_color5','l5_color6','l5_color7','l1_color8','l2_color8','l3_color8','l4_color8','l5_color8','m_bar_bg','m_bar_color','font1','font2'),$colors,$dynamicCSS."\n") : '';
        return $css;
    }
    public function strToIds($str)
    {
        $ids = array();
        if($str && ($arg = explode(',',$str)))
        {
            foreach($arg as $id)
                if(!in_array((int)$id, $ids))
                    $ids[] = (int)$id;
        }
        return $ids;
    }    
    public function displayCategories($categories)
    {
        if($categories)
        {            
            if(Configuration::get('ETS_MM_INCLUDE_SUB_CATEGORIES'))
                foreach($categories as &$category)
                    $category['sub'] = ($subcategories = $this->getChildCategories((int)$category['id_category'])) ? $this->displayCategories($subcategories) : false;
            $this->smarty->assign(array(
                'categories' => $categories,
                'link' => $this->context->link,                
            ));
            return $this->display(__FILE__,'categories-tree.tpl');
        }
    }
    public function getCategoryById($id_category,$order_by='cl.name ASC')
    {
        $sql = "
            SELECT c.*, cl.name,cl.link_rewrite
            FROM "._DB_PREFIX_."category c
            INNER JOIN "._DB_PREFIX_."category_shop cs ON (c.id_category=cs.id_category AND cs.id_shop=".(int)$this->context->shop->id.")
            LEFT JOIN "._DB_PREFIX_."category_lang cl ON c.id_category=cl.id_category AND cl.id_lang=".(int)$this->context->language->id."
            WHERE c.active=1 AND  c.id_category ".(is_array($id_category) ? "IN(".implode(',',array_map('intval',$id_category)).")" : "=".(int)$id_category)."
            GROUP BY c.id_category ".($order_by? "ORDER BY ".pSQL($order_by):"")." 
        ";
        $categories = $id_category ? (is_array($id_category) ? Db::getInstance()->executeS($sql) : Db::getInstance()->getRow($sql)) : false;           
        return $categories;
    }
    public function getChildCategories($id_parent)
    {
        return Db::getInstance()->executeS("
            SELECT c.*, cl.name,cl.link_rewrite
            FROM "._DB_PREFIX_."category c
            INNER JOIN "._DB_PREFIX_."category_shop cs ON (c.id_category =cs.id_category AND cs.id_shop=".(int)$this->context->shop->id.")
            LEFT JOIN "._DB_PREFIX_."category_lang cl ON c.id_category=cl.id_category AND cl.id_lang=".(int)$this->context->language->id."
            WHERE c.active=1 AND  c.id_parent=".(int)$id_parent." AND c.id_category!=".(int)$id_parent."
            GROUP BY c.id_category ORDER BY cl.name ASC
        ");
    }
    public static function clearAllCache()
    {
        if(@file_exists(dirname(__FILE__).'/views/css/cache.css'))
            @unlink(dirname(__FILE__).'/views/css/cache.css');
        if($files = glob(dirname(__FILE__).'/cache/*'))
        {
            foreach($files as $file)
                if(@file_exists($file) && strpos($file,'index.php')===false)
                    @unlink($file);
        }
    }   
    public static function clearUploadedImages()
    {
        if(@file_exists(dirname(__FILE__).'/views/img/upload/') && ($files = glob(dirname(__FILE__).'/views/img/upload/*')))
        {
            foreach($files as $file)
                if(@file_exists($file) && strpos($file,'index.php')===false)
                    @unlink($file);
        }
    }
    public function multiLayoutExist()
    {
        return Db::getInstance()->getRow("SELECT id_lang FROM "._DB_PREFIX_."lang WHERE is_rtl=0 AND active=1") && Db::getInstance()->getRow("SELECT id_lang FROM "._DB_PREFIX_."lang WHERE is_rtl=1 AND active=1");
    } 
    public function translates()
    {
        self::$trans = array(
            'required_text' => $this->l('is required'),
            'data_saved' => $this->l('Saved'),
            'unkown_error' => $this->l('Unknown error happens'),
            'object_empty' => $this->l('Object is empty'),
            'field_not_valid' => $this->l('Field is not valid'),  
            'file_too_large' => $this->l('Upload file cannot be large than 100MB'),   
            'file_existed' => $this->l('File name already exists. Try to rename the file and upload again'),
            'can_not_upload' => $this->l('Cannot upload file'), 
            'upload_error_occurred' => $this->l('An error occurred during the image upload process.'),   
            'image_deleted' => $this->l('Image deleted'),     
            'item_deleted' => $this->l('Item deleted'),
            'cannot_delete' => $this->l('Cannot delete the item due to an unknown technical problem'),
            'invalid_text' => $this->l('is invalid'),
            'bubble_text_is_too_long' => $this->l('Bubble text cannot be longer than 50 characters'),
            'bubble_text_color_is_required' => $this->l('Bubble alert text color is required'),
            'bubble_background_color_is_required' => $this->l('Bubble alert background color is required'),
            
            'custom_link_required_text' => $this->l('Custom link is required'),  
            'category_required_text' => $this->l('Please select a category'),
            'manufacturer_required_text' => $this->l('Please select a manufacturer'),
            'supplier_required_text' => $this->l('Please select a supplier'),
            'cms_required_text' => $this->l('CMS page is required'),
            'link_type_not_valid_text' => $this->l('Link type is not valid'),
            'sub_menu_width_invalid' => $this->l('Sub menu width must be between 10 and 100'),
            
            'content_required_text' => $this->l('HTML/Text is required'),
            'cmss_required_text' => $this->l('CMS pages is required'),
            'categories_required_text' => $this->l('Categories is required'),
            'manufacturers_required_text' => $this->l('Manufacturers is required'),
            'suppliers_required_text' => $this->l('Suppliers is required'),
            'image_required_text' => $this->l('Image is required'),
            'block_type_not_valid_text' => $this->l('Block type is not valid'),
            'products_required_text' => $this->l('Please enter product ids'),
            'products_not_valid_text' => $this->l('Product Ids is not valid. Please enter product IDs separated by a comma (,)'),
        );
    }    
    public function modulePath()
    {
        return $this->_path;
    }
    public function layoutDirection()
    {
        if(Configuration::get('ETS_MM_DIR')=='auto')
            return $this->context->language->is_rtl ? 'ets-dir-rtl' : 'ets-dir-ltr';  
        else
           return  'ets-dir-'.(Configuration::get('ETS_MM_DIR') == 'rtl' ? 'rtl' : 'ltr');    
    }
    public function displayMenuFrontend()
    {
        $menuHtml = false;
        if(Configuration::get('ETS_MM_CACHE_ENABLED'))
        {
            $cache = new MM_Cache();
            if(!($menuHtml = $cache->get('menu_'.$this->context->language->iso_code.'_'.$this->context->shop->id)))            
            {
                $menuHtml = $this->displayMegaMenu();                
                $cache->set('menu_'.$this->context->language->iso_code.'_'.$this->context->shop->id,$menuHtml);
            }
        }
        else
            $menuHtml = $this->displayMegaMenu();
        $this->smarty->assign(array(
            'menusHTML' => $menuHtml,
            'mm_layout_direction' => $this->layoutDirection(), 
            'mm_multiLayout' => $this->multiLayout,    
        ));
        return $this->display(__FILE__,'megamenu.tpl');
    }
    public function hookDisplayTop(){
        if(Configuration::get('ETS_MM_HOOK_TO')!='customhook')
            return $this->displayMenuFrontend();
    }    
    public function hookDisplayMegaMenu()
    {
        if(Configuration::get('ETS_MM_HOOK_TO')=='customhook')
            return $this->displayMenuFrontend();
    }
    public function displayMegaMenu($id_lang = false)
    {              
        $this->smarty->assign(array(
            'menus' => $id_lang ? $this->getMenus(true,$id_lang) : $this->getMenus(true),      
            'mm_img_dir' => $this->_path.'views/img/',      
        ));
        return $this->display(__FILE__,'menu-html.tpl');
    }
    public function hookDisplayMMItemMenu($params)
    {
        $this->smarty->assign(array(
            'menu' => isset($params['menu']) ? $params['menu'] : false,
            'have_li' => isset($params['have_li']) ? $params['have_li'] : false,
        ));
        return $this->display(__FILE__,'item-menu.tpl');
    }
    public function hookDisplayMMItemColumn($params)
    {
        $this->smarty->assign(array(
            'column' => isset($params['column']) ? $params['column'] : false,
            'have_li' => isset($params['have_li']) ? $params['have_li'] : false,
        ));
        return $this->display(__FILE__,'item-column.tpl');
    }
    public function hookDisplayMMItemTab($params)
    {
        $this->smarty->assign(array(
            'tab' => isset($params['tab']) ? $params['tab'] : false,
            'have_li' => isset($params['have_li']) ? $params['have_li'] : false,
        ));
        return $this->display(__FILE__,'item-tab.tpl');
    }
    public function hookDisplayMMItemBlock($params)
    {
        $this->smarty->assign(array(
            'block' => isset($params['block']) ? $params['block'] : false,
            'have_li' => isset($params['have_li']) ? $params['have_li'] : false,
        ));
        return $this->display(__FILE__,'item-block.tpl');
    }
    //Database
    public function installDb()
    {
        return 
            Db::getInstance()->execute("
                CREATE TABLE IF NOT EXISTS `"._DB_PREFIX_."ets_mm_block` (
                  `id_block` int(10) unsigned NOT NULL AUTO_INCREMENT,
                  `id_column` int(11) DEFAULT NULL,
                  `block_type` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT 'HTML',
                  `image` varchar(500) NOT NULL,
                  `sort_order` int(11) NOT NULL DEFAULT '1',
                  `enabled` tinyint(1) NOT NULL DEFAULT '1',
                  `id_categories` varchar(500) DEFAULT NULL,
                  `order_by_category` varchar(500) DEFAULT NULL,
                  `id_manufacturers` varchar(500) DEFAULT NULL,
                  `order_by_manufacturers` varchar(500) DEFAULT NULL,
                  `display_mnu_img` tinyint(1) NOT NULL DEFAULT '1',
                  `display_mnu_name` tinyint(1) NOT NULL DEFAULT '1',
                  `display_mnu_inline` varchar(500) DEFAULT NULL,
                  `id_suppliers` varchar(500) DEFAULT NULL,
                  `order_by_suppliers` varchar(500) DEFAULT NULL,
                  `display_suppliers_img` tinyint(1) NOT NULL DEFAULT '1',
                  `display_suppliers_name` tinyint(1) NOT NULL DEFAULT '1',
                  `display_suppliers_inline` varchar(500) DEFAULT NULL,
                  `id_products` varchar(500) NOT NULL,
                  `id_cmss` varchar(500) DEFAULT NULL,
                  `display_title` tinyint(1) NOT NULL DEFAULT '1',
                  `show_description` tinyint(1) NOT NULL DEFAULT '0',
                  `show_clock` tinyint(1) NOT NULL DEFAULT '0',
                  PRIMARY KEY (`id_block`)
                )
            ")
            &&Db::getInstance()->execute("
                CREATE TABLE IF NOT EXISTS `"._DB_PREFIX_."ets_mm_block_lang` (
                  `id_block` int(11) NOT NULL,
                  `id_lang` int(11) NOT NULL,
                  `title` varchar(500) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
                  `content` text CHARACTER SET utf8 COLLATE utf8_bin,
                  `title_link` varchar(500) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
                  `image_link` varchar(500) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL
                )
            ")
            &&Db::getInstance()->execute("
                CREATE TABLE IF NOT EXISTS `"._DB_PREFIX_."ets_mm_column` (
                  `id_column` int(10) unsigned NOT NULL AUTO_INCREMENT,
                  `id_menu` int(11) DEFAULT NULL,
                  `id_tab` int(11) DEFAULT NULL,
                  `is_breaker` tinyint(1) NOT NULL DEFAULT '0',
                  `column_size` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
                  `sort_order` int(11) NOT NULL DEFAULT '1',
                  PRIMARY KEY (`id_column`)
                )
            ")            
            &&Db::getInstance()->execute("
                CREATE TABLE IF NOT EXISTS `"._DB_PREFIX_."ets_mm_menu_shop` (
                  `id_menu` int(10) unsigned NOT NULL,
                  `id_shop` int(11) DEFAULT NULL
                )
            ")
            &&Db::getInstance()->execute("
                CREATE TABLE IF NOT EXISTS `"._DB_PREFIX_."ets_mm_menu` (
                  `id_menu` int(10) unsigned NOT NULL AUTO_INCREMENT,
                  `sort_order` int(11) NOT NULL DEFAULT '1',
                  `enabled` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
                  `enabled_vertical` int(1) NOT NULL DEFAULT '1',
                  `menu_open_new_tab` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
                  `id_cms` int(11) DEFAULT NULL,
                  `id_manufacturer` int(11) DEFAULT NULL,
                  `id_supplier` int(11) DEFAULT NULL,
                  `id_category` int(11) DEFAULT NULL,
                  `link_type` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT 'FULL',
                  `sub_menu_type` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT 'FULL',
                  `sub_menu_max_width` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
                  `custom_class` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
                  `menu_icon` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
                  `menu_img_link` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
                  `bubble_text_color` varchar(50) DEFAULT NULL,
                  `menu_item_width` varchar(50)  DEFAULT NULL,
                  `tab_item_width` varchar(50)  DEFAULT NULL,
                  `bubble_background_color` varchar(50) DEFAULT NULL,
                  `menu_ver_text_color` varchar(50) DEFAULT NULL,
                  `menu_ver_background_color` varchar(50) DEFAULT NULL,
                  `background_image` varchar(200) DEFAULT NULL,
                  `position_background` varchar(50) DEFAULT NULL,
                  `menu_ver_hidden_border` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
                  `display_tabs_in_full_width` INT(1) NOT NULL,
                  PRIMARY KEY (`id_menu`)
                )
            ")
            &&Db::getInstance()->execute("
                CREATE TABLE IF NOT EXISTS `"._DB_PREFIX_."ets_mm_menu_lang` (
                  `id_menu` int(10) UNSIGNED NOT NULL,
                  `id_lang` int(10) UNSIGNED NOT NULL,
                  `title` varchar(500) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
                  `link` varchar(500) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
                  `bubble_text` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL
                )
            ")&&Db::getInstance()->execute("
                CREATE TABLE IF NOT EXISTS `"._DB_PREFIX_."ets_mm_tab` (
                  `id_tab` int(10) unsigned NOT NULL AUTO_INCREMENT,
                  `id_menu` INT(11) NOT NULL,
                  `enabled` INT(11) NOT NULL,
                  `tab_img_link` text,
                  `tab_sub_width` text,
                  `tab_sub_content_pos` INT(11) NOT NULL,
                  `tab_icon` varchar(22),
                  `bubble_text_color` varchar(50) DEFAULT NULL,
                  `bubble_background_color` varchar(50) DEFAULT NULL,
                  `sort_order` int(11) DEFAULT NULL,
                  `background_image` varchar(200) DEFAULT NULL,
                  `position_background` varchar(50) DEFAULT NULL,
                  PRIMARY KEY (`id_tab`)
                )
            ")&&Db::getInstance()->execute("
                CREATE TABLE IF NOT EXISTS `"._DB_PREFIX_."ets_mm_tab_lang` (
                  `id_tab` int(10) UNSIGNED NOT NULL,
                  `id_lang` int(10) UNSIGNED NOT NULL,
                  `title` varchar(500) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
                  `url` text,
                  `bubble_text` varchar(500) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
                )
            ");
    }
    public function uninstallDb()
    {
        return
            Db::getInstance()->execute("DROP TABLE IF EXISTS "._DB_PREFIX_."ets_mm_block_lang")
            &&Db::getInstance()->execute("DROP TABLE IF EXISTS "._DB_PREFIX_."ets_mm_block")
            && Db::getInstance()->execute("DROP TABLE IF EXISTS "._DB_PREFIX_."ets_mm_column")
            && Db::getInstance()->execute("DROP TABLE IF EXISTS "._DB_PREFIX_."ets_mm_menu_lang")
            && Db::getInstance()->execute("DROP TABLE IF EXISTS "._DB_PREFIX_."ets_mm_menu")
            && Db::getInstance()->execute("DROP TABLE IF EXISTS "._DB_PREFIX_."ets_mm_menu_shop")
            && Db::getInstance()->execute("DROP TABLE IF EXISTS "._DB_PREFIX_."ets_mm_tab")
            && Db::getInstance()->execute("DROP TABLE IF EXISTS "._DB_PREFIX_."ets_mm_tab_lang");            
    }
    
    //Import/Export functions
    private function processImport($zipfile = false)
    {
        $errors = array();
        if(!$zipfile)
        {
            $savePath = dirname(__FILE__).'/cache/';
            if(@file_exists($savePath.'megamenu.data.zip'))
                @unlink($savePath.'megamenu.data.zip');
            $uploader = new Uploader('sliderdata');
            $uploader->setCheckFileSize(false);
            $uploader->setAcceptTypes(array('zip'));        
            $uploader->setSavePath($savePath);
            $file = $uploader->process('megamenu.data.zip'); 
            if ($file[0]['error'] === 0) {
                if (!Tools::ZipTest($savePath.'megamenu.data.zip')) 
                    $errors[] = $this->l('Zip file seems to be broken');
            } else {
                $errors[] = $file[0]['error'];
            }
            $extractUrl = $savePath.'megamenu.data.zip';
        }
        else      
            $extractUrl = $zipfile;
        if(!@file_exists($extractUrl))
            $errors[] = $this->l('Zip file doesn\'t exist'); 
        if(!$errors)
        {
            $zip = new ZipArchive();
            if($zip->open($extractUrl) === true)
            {
                if ($zip->locateName('Menu-Info.xml') === false)
                {
                    $errors[] = $this->l('Menu-Info.xml doesn\'t exist');
                    if($extractUrl && !$zipfile)
                        @unlink($extractUrl);
                }
            }
            else
                $errors[] = $this->l('Cannot open zip file. It might be broken or damaged');
        }        
        if(!$errors && Tools::isSubmit('importoverride') && $zip->locateName('Data.xml') !== false)              
        {
            Db::getInstance()->execute("DELETE FROM "._DB_PREFIX_."ets_mm_menu WHERE id_menu IN (SELECT id_menu FROM "._DB_PREFIX_."ets_mm_menu_shop WHERE id_shop=".(int)$this->context->shop->id.")");
            Db::getInstance()->execute("DELETE FROM "._DB_PREFIX_."ets_mm_column WHERE id_menu NOT IN (SELECT id_menu FROM "._DB_PREFIX_."ets_mm_menu)");
            Db::getInstance()->execute("DELETE FROM "._DB_PREFIX_."ets_mm_menu_lang WHERE id_menu NOT IN (SELECT id_menu FROM "._DB_PREFIX_."ets_mm_menu)");
            Db::getInstance()->execute("DELETE FROM "._DB_PREFIX_."ets_mm_block WHERE id_column NOT IN (SELECT id_column FROM "._DB_PREFIX_."ets_mm_column)");
            Db::getInstance()->execute("DELETE FROM "._DB_PREFIX_."ets_mm_block_lang WHERE id_block NOT IN (SELECT id_block FROM "._DB_PREFIX_."ets_mm_block)");
            if(!Db::getInstance()->executeS('SELECT * FROM '._DB_PREFIX_.'ets_mm_menu'))
                self::clearUploadedImages();
        }    
        if(!$errors)
        {            
            if(!Tools::ZipExtract($extractUrl, dirname(__FILE__).'/views/'))
                $errors[] = $this->l('Cannot extract zip data');
            if(!@file_exists(dirname(__FILE__).'/views/Data.xml') && !@file_exists(dirname(__FILE__).'/views/Config.xml'))
                $errors[] = $this->l('Neither Data.xml nor Config.xml exists');            
        }        
        if(!$errors)
        {            
            if(@file_exists(dirname(__FILE__).'/views/Data.xml'))
            {
                $this->importXmlTbl(@simplexml_load_file(dirname(__FILE__).'/views/Data.xml'));
                @unlink(dirname(__FILE__).'/views/Data.xml');
            } 
            if(@file_exists(dirname(__FILE__).'/views/Config.xml'))
            {
                $this->importXmlConfig(@simplexml_load_file(dirname(__FILE__).'/views/Config.xml'));
                @unlink(dirname(__FILE__).'/views/Config.xml');
            }
            if(@file_exists(dirname(__FILE__).'/views/Menu-Info.xml'))
            {
                @unlink(dirname(__FILE__).'/views/Menu-Info.xml');
            }
            if($extractUrl && !$zipfile)
                @unlink($extractUrl);                
        }
        return $errors;        
    }
    private function importXmlConfig($xml)
    {
        if(!$xml)
            return false;
        $languages = Language::getLanguages(false);          
        foreach(self::$configs['configs'] as $key => $config)
        {
            if(property_exists($xml,$key))
            {
                if(isset($config['lang']) && $config['lang'])
                {
                    $temp = array();
                    foreach($languages as $lang)
                    {
                        $node = $xml->$key;
                        $temp[$lang['id_lang']] = isset($node['configValue']) ? (string)$node['configValue'] : (isset($config['default']) ? $config['default'] : '');
                    }
                    Configuration::updateValue($key,$temp);
                }
                else
                {
                    $node = $xml->$key;
                    Configuration::updateValue($key,isset($node['configValue']) ? (string)$node['configValue'] : (isset($config['default']) ? $config['default'] : ''));
                }                   
            }
        }
    }
    private function importXmlTbl($xml)
    {       
        
        if(!$xml)
            return false;
        if(isset($xml->ets_mm_menu)&& $xml->ets_mm_menu)
        {
            foreach($xml->ets_mm_menu as $menu_data)
            {
                $id_menu = $this->addObj('menu',$menu_data);
                if((int)$menu_data['enabled_vertical'])
                {
                    if($id_menu && isset($menu_data->ets_mm_tab)&& $menu_data->ets_mm_tab)
                    {
                        foreach($menu_data->ets_mm_tab as $tab_data)
                        {
                            $foreign_key_tab = array(
                                'id_menu'=>$id_menu
                            );
                            $id_tab= $this->addObj('tab',$tab_data,$foreign_key_tab);
                            if($id_tab && isset($tab_data->ets_mm_column)&& $tab_data->ets_mm_column)
                            {
                                foreach($tab_data->ets_mm_column as $column_data)
                                {
                                    $foreign_key_column = array(
                                        'id_menu'=>$id_menu,
                                        'id_tab'=>$id_tab,
                                    );
                                    $id_column= $this->addObj('column',$column_data,$foreign_key_column);
                                    if($id_column && isset($column_data->ets_mm_block) && $column_data->ets_mm_block)
                                    {
                                        foreach($column_data->ets_mm_block as $block_data)
                                        {
                                            $foreign_key_block= array(
                                                'id_column'=>$id_column,
                                            );
                                            $this->addObj('block',$block_data,$foreign_key_block);
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
                else
                {
                    if($id_menu && isset($menu_data->ets_mm_column)&& $menu_data->ets_mm_column)
                    {
                        foreach($menu_data->ets_mm_column as $column_data)
                        {
                            $foreign_key_column = array(
                                'id_menu'=>$id_menu
                            );
                            $id_column= $this->addObj('column',$column_data,$foreign_key_column);
                            if($id_column && isset($column_data->ets_mm_block) && $column_data->ets_mm_block)
                            {
                                foreach($column_data->ets_mm_block as $block_data)
                                {
                                    $foreign_key_block= array(
                                        'id_column'=>$id_column,
                                    );
                                    $this->addObj('block',$block_data,$foreign_key_block);
                                }
                            }
                        }
                    }
                }
                
            }
        }
    }    
    private function addObj($obj, $data,$foreign_key=array())
    {
        $realOjbect = ($obj == 'menu' ? new MM_Menu() : ($obj=='column' ? new MM_Column() : ($obj=='tab'? new MM_Tab :new MM_Block())));
        $languages = Language::getLanguages(false);
        $attrs = ($obj == 'menu' ? self::$menus : ($obj=='column' ? self::$columns : ($obj=='tab'? self::$tab_class : self::$blocks)));        
        foreach($attrs['configs'] as $key => $val)
        {
            if(!isset($val['lang']) || !$val['lang'])
            {
                if(isset($data[$key])&& $data[$key])
                    $realOjbect->$key = (string)$data[$key];
                elseif(isset($val['default']))
                    $realOjbect->$key = $val['default'];
                else
                    $realOjbect->$key = '';
            }
        }
        if(isset($data->datalanguage) && $data->datalanguage)
        {
            $language_xml_default=null;
            foreach($data->datalanguage as $language_xml)
            {
                if(isset($language_xml['default']) && (int)$language_xml['default'])
                {
                    $language_xml_default=$language_xml;
                    break;
                }
            }
            $list_language_xml=array();
            
            foreach($data->datalanguage as $language_xml)
            {
                $iso_code = (string)$language_xml['iso_code'];
                $id_lang = Language::getIdByIso($iso_code);
                $list_language_xml[]=$id_lang;
                
                if($id_lang)
                {
                    
                    foreach($attrs['configs'] as $key => $val)
                    {
                        if(isset($val['lang']) && $val['lang'])
                        {
                            $temp = $realOjbect->$key;
                            $temp[$id_lang] = (string)$language_xml->$key;
                            
                            if(!$temp[$id_lang])
                            {
                                if(isset($language_xml_default) && $language_xml_default && isset($language_xml_default->$key)&& $language_xml_default->$key)
                                {
                                    $temp[$id_lang]=(string)$language_xml_default->$key;
                                }
                            }  
                            $realOjbect->$key =$temp;
                        }
                    }
                }
            }
            foreach($languages as $language)
            {
                if(!in_array($language['id_lang'],$list_language_xml))
                {
                    foreach($attrs['configs'] as $key => $val)
                    {
                        if(isset($val['lang']) && $val['lang'])
                        {
                            $temp = $realOjbect->$key;
                            if(isset($language_xml_default) && $language_xml_default && isset($language_xml_default->$key) && $language_xml_default->$key)
                            {
                                $temp[$language['id_lang']]=$language_xml_default->$key;
                            }  
                            $realOjbect->$key =$temp;
                        }
                    }
                }
            }
        }
        if($foreign_key)
        {
            foreach($foreign_key as $key=>$val)
            {
                $realOjbect->$key = $val;
            }
        }
        if($realOjbect->add())
            return $realOjbect->id;                        
        return false;
    }
    private function archiveThisFile($obj, $file, $server_path, $archive_path)
    {
        if (is_dir($server_path.$file)) {
            $dir = scandir($server_path.$file);
            foreach ($dir as $row) {
                if ($row[0] != '.') {
                    $this->archiveThisFile($obj, $row, $server_path.$file.'/', $archive_path.$file.'/');
                }
            }
        } else $obj->addFile($server_path.$file, $archive_path.$file);
    }    
    public function renderConfigXml()
    {        
        $xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><!-- Copyright ETS-Soft --><config></config>');            
        if($configs = $this->getConfigs(true))
        {
            foreach($configs as $key => $val)
            {
                $config = $xml->addChild($key);
                $config->addAttribute('configValue',Configuration::get($key, isset($val['lang']) && $val['lang'] ? (int)Configuration::get('PS_LANG_DEFAULT') : null));   
            }            
        }
        return $xml->asXML();
    }
    public function renderInfoXml()
    {        
        $xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><!-- Copyright ETS-Soft --><info></info>'); 
        $xml->addAttribute('export_time',date('l jS \of F Y h:i:s A'));
        $xml->addAttribute('export_source',$this->context->link->getPageLink('index', Configuration::get('PS_SSL_ENABLED')));
        $xml->addAttribute('module_version',$this->version);        
        return $xml->asXML();
    }
    public function renderMenuDataXml()
    {
        $xml_output = '<?xml version="1.0" encoding="UTF-8"?>'."\n";
        $xml_output .= '<entity_profile>'."\n";
        $sql="SELECT m.*,ms.id_shop FROM "._DB_PREFIX_.'ets_mm_menu m
        INNER JOIN '._DB_PREFIX_.'ets_mm_menu_shop ms ON (m.id_menu= ms.id_menu AND ms.id_shop="'.(int)$this->context->shop->id.'")';
        $menus= Db::getInstance()->executeS($sql);
        if($menus)
        {   	
            foreach($menus as &$menu)
            {
                $xml_output .='<ets_mm_menu ';
                    foreach($menu as $key=>$value)
                    {
                        if(strpos($value,'"')===false)
                                $xml_output.=$key.'="'.str_replace('&','and',$value).'" ';
                            else
                                $xml_output.=$key."='".str_replace('&','and',$value)."' ";
                    }
                    $xml_output .=' >'."\n";
                    $menu['datalanguages'] = Db::getInstance()->executeS('SELECT ml.*,l.iso_code FROM '._DB_PREFIX_.'ets_mm_menu_lang ml,'._DB_PREFIX_.'lang l WHERE ml.id_lang=l.id_lang AND ml.id_menu='.(int)$menu['id_menu']);
                    if(isset($menu['datalanguages']) && $menu['datalanguages'])
                    {
                        foreach($menu['datalanguages'] as $datalanguage)
                        {
                            $xml_output .= '<datalanguage iso_code="'.$datalanguage['iso_code'].'"'.($datalanguage['id_lang']==Configuration::get('PS_LANG_DEFAULT') ? ' default="1"':'').' >'."\n";
                            foreach($datalanguage as $key=>$value)
                                if($key!='id_menu' && $key!='id_lang'&& $key!='iso_code')
                                    $xml_output.='<'.$key.'><![CDATA['.$value.']]></'.$key.'>'."\n";   
                            $xml_output .='</datalanguage>'."\n";
                        }
                    }
                    if($menu['enabled_vertical'])
                    {
                        $menu['tabs']=Db::getInstance()->executeS('SELECT * FROM '._DB_PREFIX_.'ets_mm_tab c WHERE c.id_menu='.(int)$menu['id_menu']);
                        if($menu['tabs'])
                        {
                            foreach($menu['tabs'] as &$tab)
                            {
                                $xml_output .='<ets_mm_tab ';
                                    foreach($tab as $key=>$value)
                                    {
                                        if(strpos($value,'"')===false)
                                                $xml_output.=$key.'="'.str_replace('&','and',$value).'" ';
                                            else
                                                $xml_output.=$key."='".str_replace('&','and',$value)."' ";
                                    }
                                $xml_output .=' >'."\n"; 
                                $tab['datalanguages'] = Db::getInstance()->executeS('SELECT tl.*,l.iso_code FROM '._DB_PREFIX_.'ets_mm_tab_lang tl,'._DB_PREFIX_.'lang l WHERE tl.id_lang=l.id_lang AND tl.id_tab='.(int)$tab['id_tab']);
                                if(isset($tab['datalanguages']) && $tab['datalanguages'])
                                {
                                    foreach($tab['datalanguages'] as $datalanguage)
                                    {
                                        $xml_output .= '<datalanguage iso_code="'.$datalanguage['iso_code'].'"'.($datalanguage['id_lang']==Configuration::get('PS_LANG_DEFAULT') ? ' default="1"':'').' >'."\n";
                                        foreach($datalanguage as $key=>$value)
                                            if($key!='id_menu' && $key!='id_lang'&& $key!='iso_code')
                                                $xml_output.='<'.$key.'><![CDATA['.$value.']]></'.$key.'>'."\n";   
                                        $xml_output .='</datalanguage>'."\n";
                                    }
                                }
                                $tab['columns'] = Db::getInstance()->executeS('SELECT * FROM '._DB_PREFIX_.'ets_mm_column c WHERE c.id_tab='.(int)$tab['id_tab']);
                                if($tab['columns'])
                                {
                                    foreach($tab['columns'] as &$column)
                                    { 
                                        $xml_output .='<ets_mm_column ';
                                            foreach($column as $key=>$value)
                                            {
                                                if(strpos($value,'"')===false)
                                                        $xml_output.=$key.'="'.str_replace('&','and',$value).'" ';
                                                    else
                                                        $xml_output.=$key."='".str_replace('&','and',$value)."' ";
                                            }
                                        $xml_output .=' >'."\n"; 
                                            $column['blocks'] = Db::getInstance()->executeS('SELECT * FROM '._DB_PREFIX_.'ets_mm_block b WHERE b.id_column='.(int)$column['id_column']);
                                            if($column['blocks'])
                                            {
                                                foreach($column['blocks'] as &$block)
                                                {
                                                    $xml_output .='<ets_mm_block ';
                                                        foreach($block as $key=>$value)
                                                        {
                                                            if(strpos($value,'"')===false)
                                                                    $xml_output.=$key.'="'.str_replace('&','and',$value).'" ';
                                                                else
                                                                    $xml_output.=$key."='".str_replace('&','and',$value)."' ";
                                                        }
                                                    $xml_output .=' >'."\n";
                                                    $block['datalanguages'] = Db::getInstance()->executeS('SELECT bl.*,l.iso_code FROM '._DB_PREFIX_.'ets_mm_block_lang bl,'._DB_PREFIX_.'lang l WHERE bl.id_lang=l.id_lang AND bl.id_block='.(int)$block['id_block']);
                                                    if(isset($block['datalanguages']) && $block['datalanguages'])
                                                    {
                                                        foreach($block['datalanguages'] as $datalanguage)
                                                        {
                                                            $xml_output .= '<datalanguage iso_code="'.$datalanguage['iso_code'].'"'.($datalanguage['id_lang']==Configuration::get('PS_LANG_DEFAULT') ? ' default="1"':'').' >'."\n";
                                                            foreach($datalanguage as $key=>$value)
                                                                if($key!='id_block' && $key!='id_lang'&& $key!='iso_code')
                                                                    $xml_output.='<'.$key.'><![CDATA['.$value.']]></'.$key.'>'."\n";   
                                                            $xml_output .='</datalanguage>'."\n";
                                                        }
                                                    }
                                                    $xml_output .='</ets_mm_block>'."\n";
                                                }
                                            }
                                        $xml_output .='</ets_mm_column>'."\n";
                                    }
                                }
                                $xml_output .='</ets_mm_tab>'."\n";
                            }
                        }
                    }
                    else
                    {
                        $menu['columns'] = Db::getInstance()->executeS('SELECT * FROM '._DB_PREFIX_.'ets_mm_column c WHERE c.id_menu='.(int)$menu['id_menu']);
                        if($menu['columns'])
                        {
                            foreach($menu['columns'] as &$column)
                            { 
                                $xml_output .='<ets_mm_column ';
                                    foreach($column as $key=>$value)
                                    {
                                        if(strpos($value,'"')===false)
                                                $xml_output.=$key.'="'.str_replace('&','and',$value).'" ';
                                            else
                                                $xml_output.=$key."='".str_replace('&','and',$value)."' ";
                                    }
                                $xml_output .=' >'."\n"; 
                                    $column['blocks'] = Db::getInstance()->executeS('SELECT * FROM '._DB_PREFIX_.'ets_mm_block b WHERE b.id_column='.(int)$column['id_column']);
                                    if($column['blocks'])
                                    {
                                        foreach($column['blocks'] as &$block)
                                        {
                                            $xml_output .='<ets_mm_block ';
                                                foreach($block as $key=>$value)
                                                {
                                                    if(strpos($value,'"')===false)
                                                            $xml_output.=$key.'="'.str_replace('&','and',$value).'" ';
                                                        else
                                                            $xml_output.=$key."='".str_replace('&','and',$value)."' ";
                                                }
                                            $xml_output .=' >'."\n";
                                            $block['datalanguages'] = Db::getInstance()->executeS('SELECT bl.*,l.iso_code FROM '._DB_PREFIX_.'ets_mm_block_lang bl,'._DB_PREFIX_.'lang l WHERE bl.id_lang=l.id_lang AND bl.id_block='.(int)$block['id_block']);
                                            if(isset($block['datalanguages']) && $block['datalanguages'])
                                            {
                                                foreach($block['datalanguages'] as $datalanguage)
                                                {
                                                    $xml_output .= '<datalanguage iso_code="'.$datalanguage['iso_code'].'"'.($datalanguage['id_lang']==Configuration::get('PS_LANG_DEFAULT') ? ' default="1"':'').' >'."\n";
                                                    foreach($datalanguage as $key=>$value)
                                                        if($key!='id_block' && $key!='id_lang'&& $key!='iso_code')
                                                            $xml_output.='<'.$key.'><![CDATA['.$value.']]></'.$key.'>'."\n";   
                                                    $xml_output .='</datalanguage>'."\n";
                                                }
                                            }
                                            $xml_output .='</ets_mm_block>'."\n";
                                        }
                                    }
                                $xml_output .='</ets_mm_column>'."\n";
                            }
                        }
                    }
                    
                    
                $xml_output .='</ets_mm_menu>'."\n";
            }
            
        }
        $xml_output .= '</entity_profile>'."\n";
		return $xml_output;
    }
    private function generateArchive()
    {
        $zip = new ZipArchive();
        $cacheDir = dirname(__FILE__).'/cache/';
        $zip_file_name = 'megamenu_'.date('dmYHis').'.zip';
        if ($zip->open($cacheDir.$zip_file_name, ZipArchive::OVERWRITE | ZipArchive::CREATE) === true) {
            if (!$zip->addFromString('Config.xml', $this->renderConfigXml())) {
                $this->errors[] = $this->l('Cannot create config xml file.');
            }
            if (!$zip->addFromString('Data.xml', $this->renderMenuDataXml())) {
                $this->errors[] = $this->l('Cannot create data xml file.');
            }
            if (!$zip->addFromString('Menu-Info.xml', $this->renderInfoXml())) {
                $this->errors[] = $this->l('Cannot create Menu-Info.xml');
            }
            $this->archiveThisFile($zip,'upload', dirname(__FILE__).'/views/img/', 'img/');
            $zip->close();

            if (!is_file($cacheDir.$zip_file_name)) {
                $this->errors[] = $this->l(sprintf('Could not create %1s', $cacheDir.$zip_file_name));
            }

            if (!$this->errors) {
                if (ob_get_length() > 0) {
                    ob_end_clean();
                }

                ob_start();
                header('Pragma: public');
                header('Expires: 0');
                header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
                header('Cache-Control: public');
                header('Content-Description: File Transfer');
                header('Content-type: application/octet-stream');
                header('Content-Disposition: attachment; filename="'.$zip_file_name.'"');
                header('Content-Transfer-Encoding: binary');
                ob_end_flush();
                readfile($cacheDir.$zip_file_name);
                @unlink($cacheDir.$zip_file_name);
                exit;
            }
        }
        {
            echo $this->l('An error occurred during the archive generation');
            die;
        }
    }
    public function getConfigs($id_lang = false)
    {
        $configs = array();
        foreach(self::$configs['configs'] as $key => $val)
        {
            $configs[$key] = Tools::strtolower(Configuration::get($key,isset($val['lang']) && $val['lang'] ? ($id_lang ? $id_lang : (int)$this->context->language->id) : null));
        }
        return $configs;
    }
    protected function getDisabledCategories()
    {
        return ($result = Db::getInstance(_PS_USE_SQL_SLAVE_)->getValue('
            SELECT GROUP_CONCAT(c.id_category SEPARATOR ",") as `disable_categories`
            FROM `' . _DB_PREFIX_ . 'category` c
            ' . Shop::addSqlAssociation('category', 'c') . '
            WHERE c.active = 0')) ? explode(',', $result) : false;
    }
    public function hookDisplayCustomMenu()
    {
        $this->context->smarty->assign(
            array(
                'ETS_MM_DISPLAY_SHOPPING_CART' => (int)Configuration::get('ETS_MM_DISPLAY_SHOPPING_CART'),
                'ETS_MM_DISPLAY_SEARCH'=> (int)Configuration::get('ETS_MM_DISPLAY_SEARCH'),
                'ETS_MM_DISPLAY_CUSTOMER_INFO'=> (int)Configuration::get('ETS_MM_DISPLAY_CUSTOMER_INFO'),
                'ETS_MM_CUSTOM_HTML_TEXT'=> Configuration::get('ETS_MM_CUSTOM_HTML_TEXT',$this->context->language->id),
                'ETS_MM_SEARCH_DISPLAY_DEFAULT' =>(int)Configuration::get('ETS_MM_SEARCH_DISPLAY_DEFAULT'),
            )
        );
        return $this->display(__FILE__,'custom_menu.tpl');
    }
    public function hookDisplaySearch()
    {
        if($this->is17)
            return '';
        $blocksearch= Module::getInstanceByName('blocksearch');
        if($blocksearch && Module::isEnabled('blocksearch'))
        {
            $blocksearch->unregisterHook('displaySearch');
            return $blocksearch->hookTop(array());
        }
        return '';
    }
    public function hookDisplayCartTop()
    {
        if($this->is17)
            return '';
        $blockcart= Module::getInstanceByName('blockcart');
        if($blockcart && Module::isEnabled('blockcart'))
        {
            $params=array(
                'cart'=>$this->context->cart,
            );
            return $blockcart->hookTop($params);
        }
        return '';
    }
    public function hookDisplayCustomerInforTop()
    {
        if($this->is17)
            return '';
        $blockuserinfo = Module::getInstanceByName('blockuserinfo');
        if($blockuserinfo && Module::isEnabled('blockuserinfo'))
        {
            return $blockuserinfo->hookDisplayNav(array());
        }
        return '';
    }
    static public function imageExits($image,$id)
    {
        if(Configuration::get('PS_MULTISHOP_FEATURE_ACTIVE'))
        {
            $res = Db::getInstance()->getRow('SELECT * FROM '._DB_PREFIX_.'ets_mm_tab WHERE (tab_img_link="'.pSQL($image).'" OR background_image="'.pSQL($image).'") AND id_tab!="'.(int)$id.'"') || Db::getInstance()->getRow('SELECT * FROM '._DB_PREFIX_.'ets_mm_block WHERE image ="'.pSQL($image).'" AND id_block!="'.(int)$id.'"')|| Db::getInstance()->getRow('SELECT * FROM '._DB_PREFIX_.'ets_mm_menu WHERE (background_image="'.pSQL($image).'" OR menu_img_link="'.pSQL($image).'") AND id_menu!="'.(int)$id.'"');
            return $res;
        }
        return false;
    }
    public function getBaseLink()
    {
        return (Configuration::get('PS_SSL_ENABLED_EVERYWHERE')?'https://':'http://').$this->context->shop->domain.$this->context->shop->getBaseURI();
    }
    public function activeModuleExtra()
    {
        if($this->is17)
        {
            $ps_customersignin =Module::getInstanceByName('ps_customersignin');
            if($ps_customersignin && !$ps_customersignin->isRegisteredInHook('displayNav2') && Configuration::get('ETS_MM_POSITION_USERINFOR'))
            {
                $ps_customersignin->registerHook('displayNav2');
                $id_hook = Hook::getIdByName('displayNav2');
                if($position=(int)Configuration::get('ETS_MM_POSITION_USERINFOR'))
                    $ps_customersignin->updatePosition($id_hook,false,$position);
                $ps_customersignin->unregisterHook('displayCustomerInforTop');
            }
            $ps_searchbar= Module::getInstanceByName('ps_searchbar');
            if($ps_searchbar && !$ps_searchbar->isRegisteredInHook('top') && Configuration::get('ETS_MM_POSITION_BLOCK_SEARCH'))
            {
                $ps_searchbar->registerHook('top');
                $id_hook = Hook::getIdByName('top');
                if($position = (int)Configuration::get('ETS_MM_POSITION_BLOCK_SEARCH'))
                    $ps_searchbar->updatePosition($id_hook,false,$position);
            }
            $ps_shoppingcart= Module::getInstanceByName('ps_shoppingcart');
            if($ps_shoppingcart && !$ps_shoppingcart->isRegisteredInHook('displayNav2') && Configuration::get('ETS_MM_POSITION_BLOCKCART'))
            {
                $ps_shoppingcart->registerHook('displayNav2');
                $id_hook=Hook::getIdByName('displayNav2');
                if($position=Configuration::get('ETS_MM_POSITION_BLOCKCART'))
                    $ps_shoppingcart->updatePosition($id_hook,false,$position);
                $ps_shoppingcart->unregisterHook('displayCartTop');
            }
        }
        else
        {
            $blockcart= Module::getInstanceByName('blockcart');
            $hook = Configuration::get('ETS_MM_HOOK_BLOCKCART');
            if($blockcart && $hook && !$blockcart->isRegisteredInHook($hook))
            {
                $blockcart->registerHook($hook);
                $id_hook = Hook::getIdByName($hook);
                if($position=(int)Configuration::get('ETS_MM_POSITION_BLOCKCART'))
                    $blockcart->updatePosition($id_hook,false,$position);
            }
            $blocksearch= Module::getInstanceByName('blocksearch');
            $hook = Configuration::get('ETS_MM_HOOK_BLOCK_SEARCH');
            if($blocksearch && $hook && !$blocksearch->isRegisteredInHook($hook))
            {
                $id_hook= Hook::getIdByName($hook);
                $blocksearch->registerHook($hook);
                if($position= (int)Configuration::get('ETS_MM_POSITION_BLOCK_SEARCH'))
                    $blocksearch->updatePosition($id_hook,false,$position);
            }
            $blockuserinfo= Module::getInstanceByName('blockuserinfo');
            $hook = Configuration::get('ETS_MM_HOOK_USERINFOR');
            if($blockuserinfo && $hook && !$blockuserinfo->isRegisteredInHook($hook))
            {
                $id_hook=Hook::getIdByName($hook);
                $blockuserinfo->registerHook($hook);
                if($position=(int)Configuration::get('ETS_MM_POSITION_USERINFOR'))
                    $blockuserinfo->updatePosition($id_hook,false,$position);
            }
        }
        return true;
    }
}
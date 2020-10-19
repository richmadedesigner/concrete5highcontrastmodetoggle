<?php
namespace Concrete\Package\RmHighcontrast\Block\RmHighcontrast;

use Concrete\Core\Block\BlockController;
use Concrete\Core\Asset\AssetList;
use Concrete\Core\Asset\Asset;
use Concrete\Core\Package\Package;

defined('C5_EXECUTE') or die("Access Denied.");

class Controller extends BlockController
{
    protected $cID;
    protected $btInterfaceWidth = "900";
    protected $btInterfaceHeight = "300";
    protected $btTable = 'btRmHighContrast';
    protected $btDefaultSet = 'other';

    public function getBlockTypeDescription()
    {
        return t("RM High Contrast toggle Button");
    }

    public function getBlockTypeName()
    {
        return t("RM High Contrast toggle Button");
    }
	
	
public function registerViewAssets($outputContent = '') 
    {
	 $this->requireAsset('javascript', 'jquery');
	$this->requireAsset('css', 'font-awesome');
	$this->requireAsset('css', 'bootstrap');
 $this->requireAsset('css', 'rm/highcontrastcss');
$this->requireAsset('javascript', 'rm/highcontrastjs');
    }

	
	
    public function on_start()
    {
 $al = AssetList::getInstance();
 $pkg = Package::getByHandle('rm_highcontrast');
		
		
		  $al->register(
            'javascript',
            'rm/highcontrastjs',
            'blocks/rm_highcontrast/assets/rmcontrast.js',
            array(
                'version' => '2.5.0',
                'position' => Asset::ASSET_POSITION_HEADER,
                'minify' => false,
                'combine' => true
            ),
            $pkg
        );
		
		
		
		
	        $al->register(
            'css',
            'rm/highcontrastcss',
            'blocks/rm_highcontrast/assets/rmcontrast.css',
            array(
                'version' => '3.1.28',
                'position' => Asset::ASSET_POSITION_HEADER,
                'minify' => false,
                'combine' => true
            ),
            $pkg
        );
    }

   
}


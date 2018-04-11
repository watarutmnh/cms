<?php
/**
 * @link https://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license https://craftcms.github.io/license/
 */

namespace craft\web\assets\pluginstore;

use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;
use craft\web\assets\vue\VueAsset;

/**
 * Asset bundle for the Plugin Store page
 */
class PluginStoreAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = __DIR__.'/dist';

        $this->depends = [
            CpAsset::class,
            VueAsset::class,
        ];

        $this->css = [
            'css/main.css',
        ];
        $this->js = [
            'js/main.js',
        ];

        parent::init();
    }

    /**
     * @inheritdoc
     */
    public function registerAssetFiles($view)
    {
        parent::registerAssetFiles($view);

        if ($view instanceof View) {
            $view->registerTranslations('app', [
                'Active installs',
                'Active Trials',
                'Add to cart',
                'Added to cart',
                'Ascending',
                'Billing',
                'Buy later',
                'Buy now',
                'Buy {price}',
                'Cart',
                'Categories',
                'Changelog',
                'Cloud Storage Integration',
                'Community Support (Slack, Stack Exchange)',
                'Compatibility',
                'Connect to your Craft ID',
                'Contact',
                'Content Modeling',
                'Continue as guest',
                'Continue',
                'Coupon Code',
                'Descending',
                'Description',
                'Developer Support',
                'Documentation',
                'Features',
                'For when you’re building a website for yourself or a friend.',
                'For when you’re building something professionally for a client or team.',
                'Free',
                'Install',
                'Installed',
                'Item',
                'Items in your cart',
                'Last update',
                'Last Update',
                'License',
                'Loading Plugin Store…',
                'Manage plugins',
                'Multi-site Multi-lingual',
                'Name',
                'Page not found.',
                'Pay',
                'Payment Method',
                'Plugin Name',
                'Plugin Store',
                'Popularity',
                'Price',
                'Pro Rate Discount',
                'Process My Order',
                'Reactivate',
                'Renewal price',
                'Screenshots',
                'Search plugins',
                'Security & Bug Fixes',
                'See all',
                'Staff Picks',
                'Subtotal',
                'Support',
                'System Branding',
                'Thank You!',
                'The Plugin Store is not available, please try again later.',
                'Total',
                'Try for free',
                'Try',
                'Upgrade Craft CMS',
                'Use your Craft ID',
                'User Accounts',
                'Version',
                'Website',
                'Your order has been processed successfully.',
                '{price} plus {renewalPrice}/year for updates',
                '{price}/year',
            ]);
        }
    }
}

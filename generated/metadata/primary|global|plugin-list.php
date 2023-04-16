<?php return array (
  0 => 
  array (
    'Magento\\Framework\\DB\\Adapter\\AdapterInterface' => 
    array (
      'execute_commit_callbacks' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\Model\\ExecuteCommitCallbacks',
      ),
    ),
    'Magento\\Framework\\App\\Response\\Http' => 
    array (
      'genericHeaderPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Response\\HeaderManager',
      ),
    ),
    'Magento\\Framework\\App\\ActionInterface' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Framework\\Url\\SecurityInfo' => 
    array (
      'storeUrlSecurityInfo' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\Url\\Plugin\\SecurityInfo',
      ),
    ),
    'Magento\\Framework\\Url\\RouteParamsResolver' => 
    array (
      'storeUrlRouteParamsResolver' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\Url\\Plugin\\RouteParamsResolver',
      ),
    ),
    'Magento\\Store\\Model\\Store' => 
    array (
      'themeDesignConfigGridIndexerStore' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Indexer\\Design\\Config\\Plugin\\Store',
      ),
    ),
    'Magento\\Framework\\Session\\SidResolver' => 
    array (
      'pagebuilder_preview_sid_resolving' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageBuilder\\Plugin\\Framework\\Session\\SidResolver',
      ),
    ),
    'Magento\\Framework\\App\\Config\\Initial\\Converter' => 
    array (
      'cron_system_config_initial_converter_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Cron\\Model\\System\\Config\\Initial\\Converter',
      ),
    ),
    'Magento\\Framework\\App\\FrontController' => 
    array (
      'install' => 
      array (
        'sortOrder' => 40,
        'instance' => 'Magento\\Framework\\Module\\Plugin\\DbStatusValidator',
      ),
      'storeCookieValidate' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\Model\\Plugin\\StoreCookie',
      ),
    ),
    'Magento\\Cms\\Model\\Wysiwyg\\Images\\Storage' => 
    array (
      'media_gallery_image_remove_metadata_after_wysiwyg' => 
      array (
        'sortOrder' => 10,
        'disabled' => false,
        'instance' => 'Magento\\MediaGallery\\Plugin\\Wysiwyg\\Images\\Storage',
      ),
    ),
    'Magento\\AdvancedPricingImportExport\\Model\\Import\\AdvancedPricing' => 
    array (
      'invalidateAdvancedPriceIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdvancedPricingImportExport\\Model\\Indexer\\Product\\Price\\Plugin\\Import',
      ),
    ),
    'Magento\\Framework\\Url\\ScopeInterface' => 
    array (
      'urlSignature' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Url\\Plugin\\Signature',
      ),
    ),
    'Magento\\Theme\\Model\\DesignConfigRepository' => 
    array (
      'save_design_settings_event_dispatching' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Design\\Config\\Plugin',
      ),
    ),
    'Magento\\Store\\Model\\Website' => 
    array (
      'themeDesignConfigGridIndexerWebsite' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Indexer\\Design\\Config\\Plugin\\Website',
      ),
    ),
    'Magento\\Store\\Model\\Group' => 
    array (
      'themeDesignConfigGridIndexerStoreGroup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Indexer\\Design\\Config\\Plugin\\StoreGroup',
      ),
    ),
    'Magento\\Config\\App\\Config\\Source\\DumpConfigSourceAggregated' => 
    array (
      'designConfigTheme' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Theme\\Model\\Design\\Config\\Plugin\\Dump',
      ),
    ),
    'Magento\\Framework\\Data\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\Framework\\MessageQueue\\Consumer\\Config\\CompositeReader' => 
    array (
      'queueConfigPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\MessageQueue\\Config\\Consumer\\ConfigReaderPlugin',
      ),
    ),
    'Magento\\Framework\\MessageQueue\\Publisher\\Config\\CompositeReader' => 
    array (
      'queueConfigPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\MessageQueue\\Config\\Publisher\\ConfigReaderPlugin',
      ),
    ),
    'Magento\\Framework\\MessageQueue\\Topology\\Config\\CompositeReader' => 
    array (
      'queueConfigPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\MessageQueue\\Config\\Topology\\ConfigReaderPlugin',
      ),
    ),
    'Magento\\Framework\\App\\Config\\Value' => 
    array (
      'admin_system_config_media_gallery_renditions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryRenditions\\Plugin\\UpdateRenditionsOnConfigChange',
      ),
      'admin_system_config_adobe_stock_save_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGallerySynchronization\\Plugin\\MediaGallerySyncTrigger',
      ),
      'webapiResourceSecurityCacheInvalidate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiSecurity\\Model\\Plugin\\CacheInvalidator',
      ),
    ),
    'Magento\\Backend\\Model\\Auth\\Session' => 
    array (
      'admin_adobe_ims_backend_auth_session' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\BackendAuthSessionPlugin',
      ),
    ),
    'Magento\\Authorization\\Model\\Role' => 
    array (
      'updateRoleUsersAcl' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\User\\Model\\Plugin\\AuthorizationRole',
      ),
    ),
    'Magento\\Eav\\Model\\ResourceModel\\Entity\\Attribute' => 
    array (
      'storeLabelCaching' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Eav\\Plugin\\Model\\ResourceModel\\Entity\\Attribute',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\AbstractEntity' => 
    array (
      'clean_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Cache\\FlushCacheByTags',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Customer' => 
    array (
      'recollect_quote_on_customer_group_change' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Checkout\\Model\\Plugin\\RecollectQuoteOnCustomerGroupChange',
      ),
    ),
    'Magento\\Customer\\Api\\CustomerRepositoryInterface' => 
    array (
      'transactionWrapper' => 
      array (
        'sortOrder' => -1,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerRepository\\TransactionWrapper',
      ),
      'login_as_customer_customer_repository_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerAssistance\\Plugin\\CustomerPlugin',
      ),
      'update_newsletter_subscription_on_customer_update' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Newsletter\\Model\\Plugin\\CustomerPlugin',
      ),
    ),
    'Magento\\PageCache\\Observer\\FlushFormKey' => 
    array (
      'customerFlushFormKey' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerFlushFormKey',
      ),
    ),
    'Magento\\Customer\\Model\\AccountManagement' => 
    array (
      'security_check_customer_password_reset_attempt' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Security\\Model\\Plugin\\AccountManagement',
      ),
    ),
    'Magento\\Customer\\Api\\GroupRepositoryInterface' => 
    array (
      'saveCustomerGroupExcludedWebsite' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\SaveCustomerGroupExcludedWebsite',
      ),
      'deleteCustomerGroupExcludedWebsite' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\DeleteCustomerGroupExcludedWebsite',
      ),
      'getByIdCustomerGroupExcludedWebsite' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\GetByIdCustomerGroupExcludedWebsite',
      ),
      'getListCustomerGroupExcludedWebsite' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\GetListCustomerGroupExcludedWebsite',
      ),
      'invalidatePriceIndexerOnCustomerGroup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Price\\Plugin\\CustomerGroup',
      ),
    ),
    'Magento\\Indexer\\Model\\Config\\Data' => 
    array (
      'indexerCategoryFlatConfigGet' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Flat\\Plugin\\IndexerConfigData',
      ),
      'indexerProductFlatConfigGet' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Flat\\Plugin\\IndexerConfigData',
      ),
    ),
    'Magento\\Indexer\\Model\\Processor' => 
    array (
      'page-cache-indexer-reindex-clean-cache' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Indexer\\Model\\Processor\\CleanCache',
      ),
    ),
    'Magento\\Framework\\Indexer\\ActionInterface' => 
    array (
      'cache_cleaner_after_reindex' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Indexer\\Model\\Indexer\\CacheCleaner',
      ),
    ),
    'Magento\\Framework\\Indexer\\CacheContext' => 
    array (
      'defer_cache_cleaning' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Indexer\\Model\\Indexer\\DeferCacheCleaning',
      ),
    ),
    'Magento\\CatalogImportExport\\Model\\StockItemImporterInterface' => 
    array (
      'update_bundle_products_stock_item_status' => 
      array (
        'sortOrder' => 200,
        'instance' => 'Magento\\BundleImportExport\\Plugin\\Import\\Product\\UpdateBundleProductsStockItemStatusPlugin',
      ),
      'update_grouped_product_stock_status_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedImportExport\\Plugin\\CatalogImportExport\\Model\\StockItemImporter\\UpdateGroupedProductStockStatusPlugin',
      ),
      'update_configurable_products_stock_item_status' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\ConfigurableImportExport\\Plugin\\Import\\Product\\UpdateConfigurableProductsStockItemStatusPlugin',
      ),
      'importStockItemDataForSourceItem' => 
      array (
        'sortOrder' => 0,
        'disabled' => true,
      ),
      'importStockItemDataForSourceItemUpdate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Firebear\\ImportExport\\Plugin\\Import\\SourceItemImporter',
      ),
    ),
    'Magento\\Catalog\\Model\\Product' => 
    array (
      'cms' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Cms\\Model\\Plugin\\Product',
      ),
      'catalogInventoryAfterLoad' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\Plugin\\AfterProductLoad',
      ),
      'add_bundle_parent_identities' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Bundle\\Model\\Plugin\\ProductIdentitiesExtender',
      ),
      'product_identities_extender' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Plugin\\ProductIdentitiesExtender',
      ),
      'exclude_swatch_attribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\Product',
      ),
    ),
    'Magento\\Cms\\Model\\PageRepository\\ValidationComposite' => 
    array (
      'cms_validate_url_plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CmsUrlRewrite\\Plugin\\Cms\\Model\\PageRepository\\ValidationCompositePlugin',
      ),
    ),
    'Magento\\ImportExport\\Model\\Import' => 
    array (
      'catalogProductFlatIndexerImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Product\\Flat\\Plugin\\Import',
      ),
      'invalidatePriceIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Product\\Price\\Plugin\\Import',
      ),
      'invalidateStockIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Stock\\Plugin\\Import',
      ),
      'invalidateEavIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Product\\Eav\\Plugin\\Import',
      ),
      'invalidateProductCategoryIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Product\\Category\\Plugin\\Import',
      ),
      'invalidateCategoryProductIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Category\\Product\\Plugin\\Import',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Visitor' => 
    array (
      'catalogLog' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Plugin\\Log',
      ),
      'reportLog' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Reports\\Model\\Plugin\\Log',
      ),
    ),
    'Magento\\Catalog\\Model\\Category\\DataProvider' => 
    array (
      'set_page_layout_default_value' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Plugin\\SetPageLayoutDefaultValue',
      ),
    ),
    'Magento\\Theme\\Block\\Html\\Topmenu' => 
    array (
      'catalogTopmenu' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Block\\Topmenu',
      ),
    ),
    'Magento\\Framework\\Mview\\View\\StateInterface' => 
    array (
      'setStatusForMview' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Plugin\\MviewState',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Website' => 
    array (
      'invalidatePriceIndexerOnWebsite' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Price\\Plugin\\Website',
      ),
      'categoryProductWebsiteAfterDelete' => 
      array (
        'sortOrder' => 0,
        'instance' => '\\Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Plugin\\Website',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Store' => 
    array (
      'storeViewResourceAroundSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Flat\\Plugin\\StoreView',
      ),
      'catalogProductFlatIndexerStore' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Flat\\Plugin\\Store',
      ),
      'categoryStoreAroundSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Plugin\\StoreView',
      ),
      'productAttributesStoreViewSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Eav\\Plugin\\StoreView',
      ),
      'catalogsearchFulltextIndexerStoreView' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Store\\View',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Group' => 
    array (
      'storeGroupResourceAroundSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Flat\\Plugin\\StoreGroup',
      ),
      'catalogProductFlatIndexerStoreGroup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Flat\\Plugin\\StoreGroup',
      ),
      'categoryStoreGroupAroundSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Plugin\\StoreGroup',
      ),
      'storeGroupResourceAroundBeforeSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\Indexer\\Stock\\Plugin\\StoreGroup',
      ),
      'catalogsearchFulltextIndexerStoreGroup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Store\\Group',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\Attribute\\Set' => 
    array (
      'invalidateEavIndexerOnAttributeSetSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Eav\\Plugin\\AttributeSet',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\TypeTransitionManager' => 
    array (
      'downloadable_product_transition' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Downloadable\\Model\\Product\\TypeTransitionManager\\Plugin\\Downloadable',
      ),
      'configurable_product_transition' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Product\\TypeTransitionManager\\Plugin\\Configurable',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Config\\Backend\\ShowOutOfStock' => 
    array (
      'showOutOfStockValueChanged' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Plugin\\ShowOutOfStockConfig',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Config' => 
    array (
      'productListingAttributesCaching' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\ResourceModel\\Config',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\Attribute\\Backend\\AbstractBackend' => 
    array (
      'attributeValidation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\Attribute\\Backend\\AttributeValidation',
      ),
      'ConfigurableProduct::skipValidation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Model\\Attribute\\Backend\\AttributeValidation',
      ),
    ),
    'Magento\\Sales\\Api\\OrderItemRepositoryInterface' => 
    array (
      'get_gift_message' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Plugin\\OrderItemGet',
      ),
    ),
    'Magento\\Eav\\Model\\ResourceModel\\ReadSnapshot' => 
    array (
      'catalogReadSnapshot' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\ResourceModel\\ReadSnapshotPlugin',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Item\\ToOrderItem' => 
    array (
      'copy_quote_files_to_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Plugin\\QuoteItemProductOption',
      ),
      'append_bundle_data_to_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Bundle\\Model\\Plugin\\QuoteItem',
      ),
      'gift_message_quote_item_conversion' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Plugin\\QuoteItem',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\Helper' => 
    array (
      'weeeAttributeOptionsProcess' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Plugin\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\Helper\\ProcessTaxAttribute',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductRepositoryInterface' => 
    array (
      'remove_images_from_gallery_after_removing_product' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\RemoveImagesFromGalleryAfterRemovingProduct',
      ),
      'configurableProductSaveOptions' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Plugin\\ProductRepositorySave',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Repository' => 
    array (
      'filterCustomAttribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\Plugin\\FilterCustomAttribute',
      ),
      'process_extension_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageBuilder\\Plugin\\Catalog\\Model\\Product\\Attribute\\RepositoryPlugin',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\View' => 
    array (
      'quantityValidators' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Block\\Plugin\\ProductView',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Action' => 
    array (
      'ReindexUpdatedProducts' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\Plugin\\ReindexUpdatedProducts',
      ),
      'catalogsearchFulltextMassAction' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Product\\Action',
      ),
      'update_url_rewrites_after_websites_update_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Plugin\\Catalog\\Model\\Product\\UpdateProductWebsiteUrlRewrites',
      ),
      'quoteProductMassChange' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Model\\Product\\Plugin\\MarkQuotesRecollectMassDisabled',
      ),
      'fb_update_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Firebear\\ImportExport\\Plugin\\Import\\Action',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save' => 
    array (
      'massAction' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Plugin\\MassUpdateProductAttribute',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product' => 
    array (
      'catalogsearchFulltextProduct' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Product',
      ),
      'clean_quote_items_after_product_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Model\\Product\\Plugin\\RemoveQuoteItems',
      ),
      'update_quote_items_after_product_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Model\\Product\\Plugin\\UpdateQuoteItems',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Category' => 
    array (
      'catalogsearchFulltextCategory' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Category',
      ),
      'category_move_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Category\\Move',
      ),
      'category_delete_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Category\\Remove',
      ),
      'update_url_path_for_different_stores' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Category\\UpdateUrlPath',
      ),
    ),
    'Magento\\Catalog\\Model\\Indexer\\Product\\Category\\Action\\Rows' => 
    array (
      'catalogsearchFulltextCategoryAssignment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Product\\Category\\Action\\Rows',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Attribute' => 
    array (
      'catalogsearchFulltextIndexerAttribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Attribute',
      ),
      'catalogsearchAttributeSearchWeightCache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Attribute\\SearchWeight',
      ),
      'updateElasticsearchIndexerMapping' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Elasticsearch\\Model\\Indexer\\Fulltext\\Plugin\\Category\\Product\\Attribute',
      ),
    ),
    'Magento\\Framework\\Search\\Request\\Config\\FilesystemReader' => 
    array (
      'catalogSearchDynamicFields' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Search\\ReaderPlugin',
      ),
      'productAttributesDynamicFields' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogGraphQl\\Plugin\\Search\\Request\\ConfigReader',
      ),
    ),
    'Magento\\Catalog\\Model\\Layer\\Search\\CollectionFilter' => 
    array (
      'searchQuery' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Layer\\Search\\Plugin\\CollectionFilter',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Action\\DataProvider' => 
    array (
      'stockedProductsFilterPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Plugin\\StockedProductsFilterPlugin',
      ),
    ),
    'Magento\\UrlRewrite\\Model\\StorageInterface' => 
    array (
      'storage_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Storage',
      ),
    ),
    'Magento\\CatalogUrlRewrite\\Model\\Storage\\DbStorage' => 
    array (
      'dynamic_storage_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Plugin\\DynamicCategoryRewrites',
      ),
    ),
    'Magento\\Framework\\View\\Asset\\MergeService' => 
    array (
      'cleanMergedJsCss' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaStorage\\Model\\Asset\\Plugin\\CleanMergedJsCss',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteRepository' => 
    array (
      'multishipping_quote_repository' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Multishipping\\Plugin\\MultishippingQuoteRepository',
      ),
    ),
    'Magento\\Catalog\\Api\\TierPriceStorageInterface' => 
    array (
      'update_quote_items_after_tier_prices_update' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Model\\Product\\Plugin\\UpdateQuote',
      ),
    ),
    'Magento\\MediaGallerySynchronizationApi\\Model\\ImportFilesComposite' => 
    array (
      'createMediaGalleryThumbnails' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryUi\\Plugin\\CreateThumbnails',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Page' => 
    array (
      'cms_url_rewrite_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CmsUrlRewrite\\Plugin\\Cms\\Model\\ResourceModel\\Page',
      ),
    ),
    'Magento\\Integration\\Api\\IntegrationServiceInterface' => 
    array (
      'webapiIntegrationService' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Integration\\Model\\Plugin\\Integration',
      ),
    ),
    'Magento\\User\\Model\\User' => 
    array (
      'revokeTokensFromInactiveAdmins' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Integration\\Plugin\\Model\\AdminUser',
      ),
    ),
    'Magento\\Customer\\Model\\Customer' => 
    array (
      'revokeTokensFromInactiveCustomers' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Integration\\Plugin\\Model\\CustomerUser',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Creditmemo' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\History' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Invoice' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintAction' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintCreditmemo' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintInvoice' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintShipment' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Reorder' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Shipment' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\View' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Handler\\Address' => 
    array (
      'addressUpdate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Model\\Order\\Invoice\\Plugin\\AddressUpdate',
      ),
    ),
    'Magento\\Config\\Model\\Config\\Structure\\Converter' => 
    array (
      'cron_backend_config_structure_converter_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Cron\\Model\\Backend\\Config\\Structure\\Converter',
      ),
    ),
    'Magento\\Framework\\View\\Model\\Layout\\Merge' => 
    array (
      'widget-layout-update-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Widget\\Model\\ResourceModel\\Layout\\Plugin',
      ),
    ),
    'Magento\\Config\\Model\\Config\\Backend\\Baseurl' => 
    array (
      'updateAnalyticsSubscription' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Analytics\\Model\\Plugin\\BaseUrlConfigPlugin',
      ),
    ),
    'Magento\\Integration\\Model\\Validator\\BearerTokenValidator' => 
    array (
      'allow_bearer_token' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Analytics\\Plugin\\BearerTokenValidatorPlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\CartConfiguration' => 
    array (
      'Downloadable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Downloadable\\Model\\Product\\CartConfiguration\\Plugin\\Downloadable',
      ),
      'isProductConfigured' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Model\\Product\\Cart\\Configuration\\Plugin\\Grouped',
      ),
      'configurable_product' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Product\\CartConfiguration\\Plugin\\Configurable',
      ),
    ),
    'Magento\\Framework\\App\\FrontControllerInterface' => 
    array (
      'configHash' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Deploy\\Model\\Plugin\\ConfigChangeDetector',
      ),
    ),
    'Magento\\Checkout\\Block\\Cart\\LayoutProcessor' => 
    array (
      'checkout_cart_shipping_dhl' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Dhl\\Model\\Plugin\\Checkout\\Block\\Cart\\Shipping',
      ),
      'checkout_cart_shipping_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\OfflineShipping\\Model\\Plugin\\Checkout\\Block\\Cart\\Shipping',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Backend\\Price' => 
    array (
      'bundle' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Bundle\\Model\\Plugin\\PriceBackend',
      ),
      'configurable' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Plugin\\PriceBackend',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Item' => 
    array (
      'bundle' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Bundle\\Model\\Sales\\Order\\Plugin\\Item',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteManagement' => 
    array (
      'update_bundle_quote_item_options' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Bundle\\Plugin\\Quote\\UpdateBundleQuoteItemOptions',
      ),
      'validate_purchase_order_number' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\OfflinePayments\\Plugin\\ValidatePurchaseOrderNumber',
      ),
      'coupon_uses_increment_plugin' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\SalesRule\\Plugin\\CouponUsagesIncrement',
      ),
    ),
    'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Action\\Rows' => 
    array (
      'catalogsearchFulltextProductAssignment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Elasticsearch\\Model\\Indexer\\Fulltext\\Plugin\\Category\\Product\\Action\\Rows',
      ),
    ),
    'Magento\\Elasticsearch\\SearchAdapter\\DocumentFactory' => 
    array (
      'Klevu_Search_Plugin_Elasticsearch_SearchAdapter' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Klevu\\Search\\Plugin\\Elasticsearch\\SearchAdapter\\DocumentFactory',
      ),
    ),
    'Magento\\Framework\\Indexer\\Config\\DependencyInfoProvider' => 
    array (
      'indexerDependencyUpdaterPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Elasticsearch\\Model\\Indexer\\Plugin\\DependencyUpdaterPlugin',
      ),
    ),
    'Magento\\Search\\Model\\ResourceModel\\SynonymGroup' => 
    array (
      'synonymReaderPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Elasticsearch\\Model\\Indexer\\Fulltext\\Plugin\\Search\\Model\\SynonymReaderPlugin',
      ),
    ),
    'Magento\\Framework\\Mail\\TransportInterface' => 
    array (
      'WindowsSmtpConfig' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Email\\Model\\Plugin\\WindowsSmtpConfig',
      ),
      'EmailDisable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Email\\Model\\Mail\\TransportInterfacePlugin',
      ),
    ),
    'Magento\\Email\\Model\\AbstractTemplate' => 
    array (
      'EmailTemplateLinkUrl' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Email\\Model\\Plugin\\GetUrl',
      ),
    ),
    'Magento\\Shipping\\Block\\DataProviders\\Tracking\\DeliveryDateTitle' => 
    array (
      'update_delivery_date_title' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Fedex\\Plugin\\Block\\DataProviders\\Tracking\\ChangeTitle',
      ),
      'ups_update_delivery_date_title' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Ups\\Plugin\\Block\\DataProviders\\Tracking\\ChangeTitle',
      ),
    ),
    'Magento\\Shipping\\Block\\Tracking\\Popup' => 
    array (
      'update_delivery_date_value' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Fedex\\Plugin\\Block\\Tracking\\PopupDeliveryDate',
      ),
    ),
    'Magento\\Sales\\Api\\OrderRepositoryInterface' => 
    array (
      'save_gift_message' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Plugin\\OrderSave',
      ),
      'get_gift_message' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Plugin\\OrderGet',
      ),
      'save_order_tax' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\Plugin\\OrderSave',
      ),
      'candela_load_ordercomment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Candela\\OrderComment\\Plugin\\Model\\Order\\LoadOrderComment',
      ),
    ),
    'Magento\\Framework\\App\\PageCache\\Identifier' => 
    array (
      'core-app-area-design-exception-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\PageCache\\Model\\App\\CacheIdentifierPlugin',
      ),
    ),
    'Magento\\Framework\\App\\PageCache\\Cache' => 
    array (
      'fpc-type-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Model\\App\\PageCachePlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Type' => 
    array (
      'grouped_output' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Model\\Product\\Type\\Plugin',
      ),
      'configurable_output' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Product\\Type\\Plugin',
      ),
    ),
    'Magento\\Catalog\\Helper\\Product\\Configuration' => 
    array (
      'grouped_options' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Helper\\Product\\Configuration\\Plugin\\Grouped',
      ),
      'configurable_product' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Helper\\Product\\Configuration\\Plugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Initialization\\Helper\\ProductLinks' => 
    array (
      'GroupedProduct' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Model\\Product\\Initialization\\Helper\\ProductLinks\\Plugin\\Grouped',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Link' => 
    array (
      'groupedProductLinkProcessor' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Model\\ResourceModel\\Product\\Link\\RelationPersister',
      ),
    ),
    'Magento\\GroupedProduct\\Model\\Product\\Type\\Grouped' => 
    array (
      'outOfStockFilter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedCatalogInventory\\Plugin\\OutOfStockFilter',
      ),
      'grouped_product_minimum_advertised_price' => 
      array (
        'sortOrder' => 0,
        'instance' => '\\Magento\\MsrpGroupedProduct\\Plugin\\Model\\Product\\Type\\Grouped',
      ),
    ),
    'Magento\\Customer\\Controller\\Ajax\\Login' => 
    array (
      'captcha_validation' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Captcha\\Model\\Customer\\Plugin\\AjaxLogin',
      ),
    ),
    'Magento\\Checkout\\Block\\Cart\\Sidebar' => 
    array (
      'login_captcha' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Captcha\\Model\\Cart\\ConfigPlugin',
      ),
      'addAgreementsToMinicartConfig' => 
      array (
        'sortOrder' => 0,
        'instance' => 'PayPal\\Braintree\\Plugin\\AddAgreementsToMinicartConfig',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Quote\\Item\\QuantityValidator\\Initializer\\Option' => 
    array (
      'configurable_product' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Quote\\Item\\QuantityValidator\\Initializer\\Option\\Plugin\\ConfigurableProduct',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Admin\\Item' => 
    array (
      'configurable_product' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Order\\Admin\\Item\\Plugin\\Configurable',
      ),
    ),
    'Magento\\Catalog\\Model\\Entity\\Product\\Attribute\\Group\\AttributeMapperInterface' => 
    array (
      'configurable_product' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Entity\\Product\\Attribute\\Group\\AttributeMapper\\Plugin',
      ),
    ),
    'Magento\\ProductVideo\\Block\\Product\\View\\Gallery' => 
    array (
      'product_video_gallery' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Block\\Plugin\\Product\\Media\\Gallery',
      ),
    ),
    'Magento\\ConfigurableProduct\\Model\\Product\\Type\\Configurable' => 
    array (
      'add_swatch_attributes_to_configurable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\Configurable',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Pricing\\Renderer\\SalableResolver' => 
    array (
      'configurable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Catalog\\Model\\Product\\Pricing\\Renderer\\SalableResolver',
      ),
    ),
    'Magento\\SalesRule\\Model\\Rule\\Condition\\Product' => 
    array (
      'apply_rule_on_configurable_children' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\SalesRule\\Model\\Rule\\Condition\\Product',
      ),
    ),
    'Magento\\Tax\\Model\\Sales\\Total\\Quote\\CommonTaxCollector' => 
    array (
      'apply_tax_class_id' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Tax\\Model\\Sales\\Total\\Quote\\CommonTaxCollector',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\Stock\\Item' => 
    array (
      'updateStockChangedAuto' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Plugin\\UpdateStockChangedAuto',
      ),
    ),
    'Magento\\Quote\\Model\\Cart\\CartTotalRepository' => 
    array (
      'multishipping_shipping_addresses' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Multishipping\\Model\\Cart\\CartTotalRepositoryPlugin',
      ),
      'coupon_label_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesRule\\Plugin\\CartTotalRepository',
      ),
    ),
    'Magento\\Integration\\Model\\ConfigBasedIntegrationManager' => 
    array (
      'webapiSetup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Webapi\\Model\\Plugin\\Manager',
      ),
    ),
    'Magento\\Backend\\Model\\Auth' => 
    array (
      'login_as_customer_admin_logout' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomer\\Plugin\\AdminLogoutPlugin',
      ),
      'disable_admin_login_auth' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\DisableAdminLoginAuthPlugin',
      ),
    ),
    'Magento\\Framework\\Api\\DataObjectHelper' => 
    array (
      'add_allow_remote_shopping_assistance_to_customer' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerGraphQl\\Plugin\\DataObjectHelperPlugin',
      ),
    ),
    'Magento\\LoginAsCustomerApi\\Api\\AuthenticateCustomerBySecretInterface' => 
    array (
      'process_shopping_cart' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerQuote\\Plugin\\LoginAsCustomerApi\\ProcessShoppingCartPlugin',
      ),
    ),
    'Magento\\MediaGalleryApi\\Api\\DeleteAssetsByPathsInterface' => 
    array (
      'remove_media_content_after_asset_is_removed_by_path' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaContent\\Plugin\\MediaGalleryAssetDeleteByPath',
      ),
      'delete_renditions_on_assets_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryRenditions\\Plugin\\RemoveRenditions',
      ),
    ),
    'Magento\\MediaGalleryApi\\Api\\DeleteDirectoriesByPathsInterface' => 
    array (
      'remove_media_content_after_asset_is_removed_by_directory_path' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaContent\\Plugin\\MediaGalleryAssetDeleteByDirectoryPath',
      ),
    ),
    'Magento\\MediaGallerySynchronization\\Model\\Consume' => 
    array (
      'synchronize_media_content' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaContentSynchronization\\Plugin\\SynchronizeMediaContent',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Gallery\\Processor' => 
    array (
      'media_gallery_image_remove_metadata' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryCatalog\\Plugin\\Product\\Gallery\\RemoveAssetAfterRemoveImage',
      ),
    ),
    'Magento\\Cms\\Model\\Wysiwyg\\Images\\GetInsertImageContent' => 
    array (
      'set_rendition_path' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryRenditions\\Plugin\\SetRenditionPath',
      ),
    ),
    'Magento\\MediaGallerySynchronizationApi\\Model\\CreateAssetFromFileInterface' => 
    array (
      'addMetadataToAssetCreatedFromFile' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGallerySynchronizationMetadata\\Plugin\\CreateAssetFromFileMetadata',
      ),
    ),
    'Magento\\Framework\\App\\MaintenanceMode' => 
    array (
      'amqp_maintenance_mode' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MessageQueue\\Model\\Plugin\\ResourceModel\\Lock',
      ),
    ),
    'Magento\\Framework\\App\\Http' => 
    array (
      'framework-http-newrelic' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NewRelicReporting\\Plugin\\HttpPlugin',
      ),
    ),
    'Magento\\Framework\\App\\State' => 
    array (
      'framework-state-newrelic' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NewRelicReporting\\Plugin\\StatePlugin',
      ),
    ),
    'Symfony\\Component\\Console\\Command\\Command' => 
    array (
      'newrelic-describe-commands' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NewRelicReporting\\Plugin\\CommandPlugin',
      ),
    ),
    'Magento\\Framework\\Profiler\\Driver\\Standard\\Stat' => 
    array (
      'newrelic-describe-cronjobs' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NewRelicReporting\\Plugin\\StatPlugin',
      ),
    ),
    'Magento\\Newsletter\\Model\\Subscriber' => 
    array (
      'remove_subscriber_from_queue_after_unsubscribe' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Newsletter\\Model\\Plugin\\RemoveSubscriberFromQueue',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Config' => 
    array (
      'append_sales_rule_keys_to_quote' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesRule\\Model\\Plugin\\QuoteConfigProductAttributes',
      ),
    ),
    'Magento\\Sales\\Model\\Service\\OrderService' => 
    array (
      'coupon_uses_decrement_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesRule\\Plugin\\CouponUsagesDecrement',
      ),
    ),
    'Magento\\CatalogWidget\\Block\\Product\\ProductsList' => 
    array (
      'pagebuilder_product_list' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageBuilder\\Plugin\\Catalog\\Block\\Product\\ProductsListPlugin',
      ),
    ),
    'Magento\\Sales\\Api\\Data\\OrderPaymentInterface' => 
    array (
      'PaymentVaultExtensionAttributeOperations' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Vault\\Plugin\\PaymentVaultAttributesLoad',
      ),
    ),
    'Magento\\Checkout\\Api\\PaymentInformationManagementInterface' => 
    array (
      'ProcessPaymentVaultInformationManagement' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Vault\\Plugin\\PaymentVaultInformationManagement',
      ),
      'validate-agreements' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CheckoutAgreements\\Model\\Checkout\\Plugin\\Validation',
      ),
    ),
    'Magento\\Payment\\Model\\Checks\\Composite' => 
    array (
      'paypal_specification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Model\\Method\\Checks\\SpecificationPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\Order' => 
    array (
      'express_order_invoice' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Plugin\\OrderCanInvoice',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Validation\\CanInvoice' => 
    array (
      'express_order_invoice' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Plugin\\ValidatorCanInvoice',
      ),
    ),
    'Magento\\Framework\\Session\\SessionStartChecker' => 
    array (
      'transparent_session_checker' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Plugin\\TransparentSessionChecker',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Payment' => 
    array (
      'paypal_transparent' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Plugin\\TransparentOrderPayment',
      ),
    ),
    'Magento\\Quote\\Model\\AddressAdditionalDataProcessor' => 
    array (
      'persistent_remember_me_checkbox_processor' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Persistent\\Model\\Checkout\\AddressDataProcessorPlugin',
      ),
    ),
    'Magento\\Customer\\CustomerData\\Customer' => 
    array (
      'section_data' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Persistent\\Model\\Plugin\\CustomerData',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Gallery\\CreateHandler' => 
    array (
      'external_video_media_entry_saver' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ProductVideo\\Model\\Plugin\\Catalog\\Product\\Gallery\\CreateHandler',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Gallery\\ReadHandler' => 
    array (
      'external_video_media_entry_reader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ProductVideo\\Model\\Plugin\\Catalog\\Product\\Gallery\\ReadHandler',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Gallery' => 
    array (
      'external_video_media_resource_backend' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ProductVideo\\Model\\Plugin\\ExternalVideoResourceBackend',
      ),
    ),
    'Magento\\Checkout\\Api\\GuestPaymentInformationManagementInterface' => 
    array (
      'validate-guest-agreements' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CheckoutAgreements\\Model\\Checkout\\Plugin\\GuestValidation',
      ),
    ),
    'Magento\\Framework\\GraphQl\\Query\\ResolverInterface' => 
    array (
      'graphql_recaptcha_validation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ReCaptchaWebapiGraphQl\\Plugin\\GraphQlValidator',
      ),
    ),
    'Magento\\Webapi\\Controller\\Rest\\RequestValidator' => 
    array (
      'rest_webapi_recaptcha_validation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ReCaptchaWebapiRest\\Plugin\\RestValidationPlugin',
      ),
    ),
    'Magento\\Webapi\\Controller\\Soap\\Request\\Handler' => 
    array (
      'soap_webapi_recaptcha_validation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ReCaptchaWebapiRest\\Plugin\\SoapValidationPlugin',
      ),
    ),
    'Magento\\MediaStorage\\Model\\File\\Storage\\SynchronizationFactory' => 
    array (
      'remoteMediaStorageSynchronizationFactory' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\RemoteStorage\\Plugin\\File\\Storage\\SynchronizationFactory',
      ),
    ),
    'Magento\\MediaGalleryMetadata\\Model\\IptcEmbed' => 
    array (
      'remoteIptcEmbed' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\RemoteStorage\\Plugin\\MediaGalleryMetadata\\IptcEmbed',
      ),
    ),
    'Magento\\MediaGalleryMetadata\\Model\\ExifReader' => 
    array (
      'remoteExifReader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\RemoteStorage\\Plugin\\MediaGalleryMetadata\\ExifReader',
      ),
    ),
    'Magento\\MediaGallerySynchronization\\Model\\Filesystem\\GetFileInfo' => 
    array (
      'remoteGetFileInfo' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\RemoteStorage\\Plugin\\Filesystem\\GetFileInfo',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Option\\Type\\File\\ExistingValidate' => 
    array (
      'remoteValidatorInfo' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\RemoteStorage\\Plugin\\ExistingValidate',
      ),
    ),
    'Magento\\Framework\\Image\\Adapter\\AbstractAdapter' => 
    array (
      'remoteImageFile' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\RemoteStorage\\Plugin\\Image',
      ),
    ),
    'Magento\\Framework\\Archive\\Zip' => 
    array (
      'remoteZipArchive' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\RemoteStorage\\Plugin\\Zip',
      ),
    ),
    'Magento\\Review\\Model\\ResourceModel\\Rating\\Option' => 
    array (
      'Klevu_Search::updateRatingAttributesOnAggregate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Klevu\\Search\\Plugin\\Review\\Model\\ResourceModel\\Rating\\Option\\UpdateRatingAttributesOnAggregatePlugin',
      ),
    ),
    'Magento\\ConfigurableProduct\\Model\\ResourceModel\\Product\\Type\\Configurable\\Product\\Collection' => 
    array (
      'catalogRulePriceForConfigurableProduct' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRuleConfigurable\\Plugin\\ConfigurableProduct\\Model\\ResourceModel\\AddCatalogRulePrice',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\CreditmemoDocumentFactory' => 
    array (
      'sales_inventory_creditmemo_item_set_back_to_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesInventory\\Model\\Plugin\\Order\\CreditmemoDocumentFactoryPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Validation\\RefundOrderInterface' => 
    array (
      'refundOrderValidationAfter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesInventory\\Model\\Plugin\\Order\\Validation\\OrderRefundCreationArguments',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Validation\\RefundInvoiceInterface' => 
    array (
      'refundInvoiceValidationAfter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesInventory\\Model\\Plugin\\Order\\Validation\\InvoiceRefundCreationArguments',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Eav\\Attribute' => 
    array (
      'save_swatches_option_params' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\EavAttribute',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\AbstractProduct' => 
    array (
      'add_product_object_to_image_data_array' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\ProductImage',
      ),
    ),
    'Magento\\LayeredNavigation\\Block\\Navigation\\FilterRenderer' => 
    array (
      'swatches_layered_renderer' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\FilterRenderer',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\OptionManagement' => 
    array (
      'swatches_product_attribute_optionmanagement_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Plugin\\Eav\\Model\\Entity\\Attribute\\OptionManagement',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Address\\ToOrder' => 
    array (
      'add_tax_to_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\Quote\\ToOrderConverter',
      ),
    ),
    'Magento\\Quote\\Model\\Cart\\TotalsConverter' => 
    array (
      'add_tax_details' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\Quote\\GrandTotalDetailsPlugin',
      ),
    ),
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\Listing\\DataProvider' => 
    array (
      'taxSettingsProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Plugin\\Ui\\DataProvider\\TaxSettings',
      ),
      'weeeSettingsProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Plugin\\Ui\\DataProvider\\WeeeSettings',
      ),
      'wishlistSettingsDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Wishlist\\Plugin\\Ui\\DataProvider\\WishlistSettings',
      ),
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth\\Forgotpassword' => 
    array (
      'admin_forgot_password_plugin' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\AdminForgotPasswordPlugin',
      ),
    ),
    'Magento\\Captcha\\Observer\\CheckUserLoginBackendObserver' => 
    array (
      'captcha_check_user_login_backend_observer_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\CheckUserLoginBackendObserverPlugin',
      ),
    ),
    'Magento\\Captcha\\Observer\\ResetAttemptForBackendObserver' => 
    array (
      'captcha_reset_attempt_for_backend_observer_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\ResetAttemptForBackendObserverPlugin',
      ),
    ),
    'Magento\\Integration\\Model\\AdminTokenService' => 
    array (
      'admin_adobe_ims_admin_token_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\AdminTokenPlugin',
      ),
    ),
    'Magento\\Webapi\\Model\\ServiceMetadata' => 
    array (
      'webapiServiceMetadataAsync' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiAsync\\Plugin\\ServiceMetadata',
      ),
    ),
    'Magento\\Webapi\\Model\\Cache\\Type\\Webapi' => 
    array (
      'webapiCacheAsync' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiAsync\\Plugin\\Cache\\Webapi',
      ),
    ),
    'Magento\\Webapi\\Controller\\Rest' => 
    array (
      'webapiContorllerRestAsync' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiAsync\\Plugin\\ControllerRest',
      ),
    ),
    'Magento\\AsynchronousOperations\\Model\\MassConsumerEnvelopeCallback' => 
    array (
      'storeIdFieldForAsynchronousOperationsMassConsumerEnvelopeCallback' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiAsync\\Plugin\\AsynchronousOperations\\MassConsumerEnvelopeCallback',
      ),
    ),
    'Magento\\Webapi\\Model\\Config\\Converter' => 
    array (
      'webapiResourceSecurity' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiSecurity\\Model\\Plugin\\AnonymousResourceSecurity',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Attribute\\RemoveProductAttributeData' => 
    array (
      'removeWeeAttributesData' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Plugin\\Catalog\\ResourceModel\\Attribute\\RemoveProductWeeData',
      ),
    ),
    'Magento\\Catalog\\Ui\\Component\\Listing\\Columns' => 
    array (
      'changeWeeColumnConfig' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Plugin\\Catalog\\Ui\\Component\\Listing\\Columns',
      ),
    ),
    'Magento\\Wishlist\\Controller\\AbstractIndex' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Wishlist\\Controller\\Index\\Plugin',
      ),
    ),
    'Magento\\Framework\\View\\TemplateEngine\\Php' => 
    array (
      'Amasty_Base::AddEscaperToPhpRenderer' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Amasty\\Base\\Plugin\\Framework\\View\\TemplateEngine\\Php',
      ),
    ),
    'Magento\\Framework\\Setup\\Declaration\\Schema\\OperationsExecutor' => 
    array (
      'Amasty_Base::execute-patches-before-schema-apply' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amasty\\Base\\Plugin\\Setup\\Model\\DeclarationInstaller\\ApplyPatchesBeforeDeclarativeSchema',
      ),
    ),
    'Magento\\Framework\\Config\\FileResolverByModule' => 
    array (
      'AmBase::FileResolverByModule' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amasty\\Base\\Plugin\\Framework\\Setup\\Declaration\\Schema\\FileSystem\\XmlReader\\RestrictDropOperationsPlugin',
      ),
    ),
    'Magento\\Store\\ViewModel\\SwitcherUrlProvider' => 
    array (
      'Candela_Blog::switch_blog_entity_url_when_store_was_switched' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Candela\\Blog\\Plugin\\Store\\ViewModel\\SwitcherUrlProvider\\ReplaceStoreSwitcherUrlForBlogEntities',
      ),
    ),
    'Magento\\Setup\\Model\\DeclarationInstaller' => 
    array (
      'Candela_Blog::execute-patches-before-schema-apply' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Candela\\Blog\\Plugin\\Setup\\Model\\DeclarationInstaller\\ApplyPatchesBeforeDeclarativeSchema',
      ),
    ),
    'Magento\\Checkout\\Model\\ShippingInformationManagement' => 
    array (
      'candela_save_in_quote' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Candela\\OrderAttributes\\Plugin\\Model\\ShippingInformationManagement',
      ),
    ),
    'Magento\\Sales\\Api\\OrderManagementInterface' => 
    array (
      'save_attributes_to_order' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Candela\\OrderAttributes\\Plugin\\Model\\OrderManagement',
      ),
    ),
    'Magento\\Checkout\\Block\\Checkout\\LayoutProcessor' => 
    array (
      'candela_checkout_layout_processor_add_block' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Candela\\OrderAttributes\\Plugin\\Checkout\\LayoutProcessorPlugin',
      ),
    ),
    'Magento\\ImportExport\\Block\\Adminhtml\\Import\\Edit\\Before' => 
    array (
      'firebear_importexport_block_import_before' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Firebear\\ImportExport\\Plugin\\Block\\Adminhtml\\Import\\Edit\\Before',
      ),
    ),
    'Magento\\BundleImportExport\\Model\\Import\\Product\\Type\\Bundle\\RelationsDataSaver' => 
    array (
      'addBundleRelations' => 
      array (
        'sortOrder' => 0,
        'instance' => '\\Firebear\\ImportExport\\Plugin\\Model\\Import\\Product\\Type\\Bundle\\RelationsDataSaver',
      ),
    ),
    'Magento\\ConfigurableImportExport\\Model\\Export\\RowCustomizer' => 
    array (
      'prepareJobs' => 
      array (
        'sortOrder' => 0,
        'instance' => '\\Firebear\\ImportExport\\Plugin\\Model\\Export\\RowCustomizer',
      ),
    ),
    'Magento\\Catalog\\Block\\Adminhtml\\Category\\Checkboxes\\Tree' => 
    array (
      'firebear_importexport_set_rule_chooser_url' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Firebear\\ImportExport\\Plugin\\Block\\Adminhtml\\Category\\Checkboxes\\Tree',
      ),
    ),
    'Magento\\Cron\\Model\\Config\\Data' => 
    array (
      'getJobs' => 
      array (
        'sortOrder' => 0,
        'instance' => '\\Firebear\\ImportExport\\Plugin\\Config\\Data',
      ),
    ),
    'Firebear\\ImportExport\\Helper\\Data' => 
    array (
      'firebear_importexport_clear_cache_advanced+pricing' => 
      array (
        'sortOrder' => 0,
        'instance' => '\\Firebear\\ImportExport\\Plugin\\Helper\\ClearCacheAdvancedPricing',
      ),
    ),
    'Firebear\\ImportExport\\Model\\Import\\Product\\Validator' => 
    array (
      'firebear_importexport_import_product_validator' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Firebear\\ImportExport\\Plugin\\Model\\Import\\Product\\Validator',
      ),
    ),
    'Magento\\Framework\\View\\Asset\\Minification' => 
    array (
      'excludeFilesFromMinification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Firebear\\ImportExport\\Plugin\\Framework\\View\\Asset\\ExcludeFilesFromMinification',
      ),
      'braintreeExcludeFromMinification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'PayPal\\Braintree\\Plugin\\ExcludeFromMinification',
      ),
    ),
    'Magento\\CatalogImportExport\\Model\\Import\\Product\\ImageTypeProcessor' => 
    array (
      'video_url' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Firebear\\ImportExport\\Plugin\\Model\\Import\\Product\\ImageTypeProcessor',
      ),
    ),
    'Magento\\InventoryCache\\Model\\FlushCacheByProductIds' => 
    array (
      'firebear-import-flush-cache-by-product-ids' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Firebear\\ImportExport\\Plugin\\Model\\Import\\FlushCacheByProductIds',
      ),
    ),
    'Magento\\InventoryCatalog\\Model\\BulkSourceUnassign' => 
    array (
      'fb_update_source_unassign' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Firebear\\ImportExport\\Plugin\\Import\\BulkSource',
      ),
    ),
    'Magento\\InventoryCatalog\\Model\\BulkSourceAssign' => 
    array (
      'fb_update_source_assign' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Firebear\\ImportExport\\Plugin\\Import\\BulkSource',
      ),
    ),
    'Magento\\InventoryCatalog\\Model\\BulkInventoryTransfer' => 
    array (
      'fb_update_source_transfer' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Firebear\\ImportExport\\Plugin\\Import\\BulkSource',
      ),
    ),
    'Magento\\InventoryCatalog\\Model\\IsSingleSourceMode' => 
    array (
      'firebear_importexport_IsSingleSourceMode_cache_process' => 
      array (
        'sortOrder' => 10,
        'instance' => '\\Firebear\\ImportExport\\Plugin\\InventoryCatalogIsSingleSourceMode',
      ),
    ),
    'Magento\\Framework\\Serialize\\Serializer\\Json' => 
    array (
      'Firebear_ImportExport_Plugin_Magento_Framework_Serialize_Serializer_Json' => 
      array (
        'sortOrder' => 10,
        'disabled' => false,
        'instance' => 'Firebear\\ImportExport\\Plugin\\Magento\\Framework\\Serialize\\Serializer\\Json',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\ProductList\\Toolbar' => 
    array (
      'klevu_search_toolbar' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Klevu\\Search\\Plugin\\Catalog\\Block\\Toolbar',
      ),
    ),
    'Magento\\CatalogSearch\\Block\\Result' => 
    array (
      'Klevu_Search::setpersonalization' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Klevu\\Search\\Plugin\\Search\\Block\\Result',
      ),
    ),
    'Magento\\Framework\\Api\\Search\\SearchResult' => 
    array (
      'Klevu_Search_Plugin_Api_Search_SearchResult' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Klevu\\Search\\Plugin\\Api\\Search\\SearchResult',
      ),
    ),
    'Magento\\Cron\\Model\\ConfigInterface' => 
    array (
      'Klevu_Search_SetCustomCronFrequencyPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Klevu\\Search\\Plugin\\Cron\\Model\\Config\\SetCustomCronFrequencyPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\StockRegistryInterface' => 
    array (
      'Klevu_Search::addStockRegistryProductsInQueue' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Klevu\\Search\\Plugin\\Api\\StockUpdatePlugin',
      ),
    ),
    'Magento\\Framework\\Search\\Request\\Cleaner' => 
    array (
      'Klevu_Search::CleanerForProductSearch' => 
      array (
        'sortOrder' => 0,
        'disabled' => false,
        'instance' => 'Klevu\\Search\\Plugin\\Framework\\Search\\Request\\CleanerPlugin',
      ),
      'Klevu_Categorynavigation::CleanerForCatNav' => 
      array (
        'sortOrder' => 0,
        'disabled' => false,
        'instance' => 'Klevu\\Categorynavigation\\Plugin\\Framework\\Search\\Request\\CleanerPluginForCatNav',
      ),
    ),
    'Magento\\Catalog\\Model\\Config' => 
    array (
      'klevu_categorynavigation_config' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Klevu\\Categorynavigation\\Plugin\\Catalog\\Model\\Config',
      ),
    ),
    'Magento\\Checkout\\CustomerData\\AbstractItem' => 
    array (
      'braintreeAddFlagForVirtualProducts' => 
      array (
        'sortOrder' => 0,
        'instance' => 'PayPal\\Braintree\\Plugin\\AddFlagForVirtualProducts',
      ),
    ),
    'Magento\\Quote\\Api\\CartManagementInterface' => 
    array (
      'order_cancellation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'PayPal\\Braintree\\Plugin\\OrderCancellation',
      ),
    ),
    'Magento\\Framework\\Image' => 
    array (
      'Yireo_NextGenImages::convertAfterImageSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Yireo\\NextGenImages\\Plugin\\ConvertAfterImageSave',
      ),
    ),
  ),
  1 => 
  array (
    'Magento\\Framework\\Config\\ReaderInterface' => NULL,
    'Magento\\Framework\\Config\\Reader\\Filesystem' => NULL,
    'Magento\\Framework\\Communication\\Config\\Reader\\XmlReader' => NULL,
    'Magento\\Framework\\Config\\ScopeInterface' => NULL,
    'Magento\\Framework\\Config\\ScopeListInterface' => NULL,
    'Magento\\Framework\\Config\\Scope' => NULL,
    'interceptionConfigScope' => NULL,
    'adminhtmlConfigScope' => NULL,
    'Magento\\Framework\\Data\\Argument\\InterpreterInterface' => NULL,
    'Magento\\Framework\\Data\\Argument\\Interpreter\\Composite' => NULL,
    'layoutArgumentReaderInterpreter' => NULL,
    'layoutArgumentGeneratorInterpreterInternal' => NULL,
    'Magento\\Framework\\View\\Layout\\Argument\\Interpreter\\Decorator\\Updater' => NULL,
    'layoutArgumentGeneratorInterpreter' => NULL,
    'Magento\\Framework\\Data\\Argument\\Interpreter\\ArrayType' => NULL,
    'layoutArrayArgumentReaderInterpreter' => NULL,
    'layoutArrayArgumentGeneratorInterpreter' => NULL,
    'Magento\\Framework\\ObjectManager\\NoninterceptableInterface' => NULL,
    'Magento\\Framework\\Data\\Argument\\InterpreterInterface\\Proxy' => NULL,
    'layoutArrayArgumentReaderInterpreterProxy' => NULL,
    'layoutArrayArgumentGeneratorInterpreterProxy' => NULL,
    'Magento\\Framework\\View\\Layout\\Argument\\Interpreter\\DataObject' => NULL,
    'layoutObjectArgumentInterpreter' => NULL,
    'Magento\\Framework\\View\\Layout\\ReaderInterface' => NULL,
    'Magento\\Framework\\View\\Layout\\ReaderPool' => NULL,
    'containerRenderPool' => NULL,
    'blockRenderPool' => NULL,
    'bodyRenderPool' => NULL,
    'commonRenderPool' => NULL,
    'genericLayoutRenderPool' => NULL,
    'pageConfigRenderPool' => NULL,
    'Magento\\Framework\\View\\Layout\\GeneratorPool' => NULL,
    'pageLayoutGeneratorPool' => NULL,
    'Magento\\Framework\\View\\Asset\\PreProcessor\\AlternativeSourceInterface' => NULL,
    'Magento\\Framework\\View\\Asset\\PreProcessorInterface' => NULL,
    'Magento\\Framework\\View\\Asset\\PreProcessor\\AlternativeSource' => NULL,
    'AlternativeSourceProcessors' => NULL,
    'Magento\\Framework\\App\\View\\Asset\\Publisher' => NULL,
    'developerPublisher' => NULL,
    'Magento\\Framework\\App\\View\\Asset\\MaterializationStrategy\\Factory' => NULL,
    'developerMaterialization' => NULL,
    'Magento\\Framework\\View\\Design\\FileResolution\\Fallback\\ResolverInterface' => NULL,
    'Magento\\Framework\\View\\Design\\FileResolution\\Fallback\\Resolver\\Minification' => NULL,
    'viewFileMinifiedFallbackResolver' => NULL,
    'Magento\\Framework\\View\\Design\\FileResolution\\Fallback\\Resolver\\Simple' => NULL,
    'Magento\\Framework\\View\\Design\\FileResolution\\Fallback\\Resolver\\Alternative' => NULL,
    'viewFileFallbackResolver' => NULL,
    'Magento\\Framework\\View\\File\\CollectorInterface' => NULL,
    'Magento\\Framework\\View\\File\\Collector\\Base' => NULL,
    'layoutFileSourceBase' => NULL,
    'Magento\\Framework\\View\\File\\Collector\\Decorator\\ModuleOutput' => NULL,
    'layoutFileSourceBaseFiltered' => NULL,
    'Magento\\Framework\\View\\File\\Collector\\Decorator\\ModuleDependency' => NULL,
    'layoutFileSourceBaseSorted' => NULL,
    'Magento\\Framework\\View\\File\\Collector\\ThemeModular' => NULL,
    'layoutFileSourceTheme' => NULL,
    'layoutFileSourceThemeFiltered' => NULL,
    'layoutFileSourceThemeSorted' => NULL,
    'Magento\\Framework\\View\\File\\Collector\\Override\\Base' => NULL,
    'layoutFileSourceOverrideBase' => NULL,
    'layoutFileSourceOverrideBaseFiltered' => NULL,
    'layoutFileSourceOverrideBaseSorted' => NULL,
    'Magento\\Framework\\View\\File\\Collector\\Override\\ThemeModular' => NULL,
    'layoutFileSourceOverrideTheme' => NULL,
    'layoutFileSourceOverrideThemeFiltered' => NULL,
    'layoutFileSourceOverrideThemeSorted' => NULL,
    'pageLayoutFileSourceBase' => NULL,
    'pageLayoutFileSourceBaseFiltered' => NULL,
    'pageLayoutFileSourceBaseSorted' => NULL,
    'pageLayoutFileSourceTheme' => NULL,
    'pageLayoutFileSourceThemeFiltered' => NULL,
    'pageLayoutFileSourceThemeSorted' => NULL,
    'pageLayoutFileSourceOverrideBase' => NULL,
    'pageLayoutFileSourceOverrideBaseFiltered' => NULL,
    'pageLayoutFileSourceOverrideBaseSorted' => NULL,
    'pageLayoutFileSourceOverrideTheme' => NULL,
    'pageLayoutFileSourceOverrideThemeFiltered' => NULL,
    'pageLayoutFileSourceOverrideThemeSorted' => NULL,
    'Magento\\Framework\\View\\Layout\\File\\Collector\\Aggregated' => NULL,
    'pageLayoutFileCollectorAggregated' => NULL,
    'pageFileSourceBase' => NULL,
    'pageFileSourceBaseFiltered' => NULL,
    'pageFileSourceBaseSorted' => NULL,
    'pageFileSourceTheme' => NULL,
    'pageFileSourceThemeFiltered' => NULL,
    'pageFileSourceThemeSorted' => NULL,
    'pageFileSourceOverrideBase' => NULL,
    'pageFileSourceOverrideBaseFiltered' => NULL,
    'pageFileSourceOverrideBaseSorted' => NULL,
    'pageFileSourceOverrideTheme' => NULL,
    'pageFileSourceOverrideThemeFiltered' => NULL,
    'pageFileSourceOverrideThemeSorted' => NULL,
    'pageLayoutRenderPool' => NULL,
    'Magento\\Framework\\Config\\DataInterface' => NULL,
    'Magento\\Framework\\Config\\Data' => NULL,
    'Magento\\Framework\\View\\Layout\\PageType\\Config\\Data' => NULL,
    'ArrayAccess' => NULL,
    'Magento\\Framework\\DataObject' => NULL,
    'Magento\\Framework\\Session\\StorageInterface' => NULL,
    'Magento\\Framework\\Session\\Storage' => NULL,
    'Magento\\Framework\\Message\\Session\\Storage' => NULL,
    'Magento\\Framework\\Config\\ValidationStateInterface' => NULL,
    'Magento\\Framework\\Config\\ValidationState\\Configurable' => NULL,
    'Magento\\Framework\\Config\\ValidationState\\Required' => NULL,
    'Magento\\Framework\\Config\\ValidationState\\NotRequired' => NULL,
    'Magento\\Framework\\Config\\SchemaLocatorInterface' => NULL,
    'Magento\\Framework\\Config\\SchemaLocator' => NULL,
    'Magento\\Framework\\Setup\\Declaration\\Schema\\Config\\SchemaLocator' => NULL,
    'Magento\\Framework\\Setup\\Declaration\\Schema\\FileSystem\\XmlReader' => NULL,
    'Magento\\Framework\\Setup\\Patch\\PatchReader' => NULL,
    'Magento\\Framework\\Setup\\Patch\\SchemaPatchReader' => NULL,
    'Magento\\Framework\\Setup\\Patch\\DataPatchReader' => NULL,
    'Magento\\Framework\\MessageQueue\\PublisherInterface' => NULL,
    'Magento\\Framework\\MessageQueue\\BulkPublisherInterface' => NULL,
    'Magento\\Framework\\MessageQueue\\PublisherPool' => NULL,
    'Magento\\Framework\\MessageQueue\\Bulk\\PublisherPool' => NULL,
    'Magento\\Framework\\App\\Request\\ValidatorInterface' => NULL,
    'Magento\\Framework\\App\\Request\\CsrfValidator' => NULL,
    'CsrfRequestValidator' => NULL,
    'Magento\\Framework\\App\\Request\\CompositeValidator' => NULL,
    'RequestValidator' => NULL,
    'Magento\\Framework\\App\\CacheInterface' => NULL,
    'Magento\\Framework\\App\\Cache' => NULL,
    'configured_block_cache' => NULL,
    'Magento\\Framework\\Validator\\HTML\\WYSIWYGValidatorInterface' => NULL,
    'Magento\\Framework\\Validator\\HTML\\ConfigurableWYSIWYGValidator' => NULL,
    'DefaultWYSIWYGValidator' => NULL,
    'Magento\\Framework\\Data\\Collection\\Db\\FetchStrategyInterface' => NULL,
    'Magento\\Framework\\Data\\Collection\\Db\\FetchStrategy\\Cache' => NULL,
    'Magento\\Store\\Model\\ResourceModel\\Group\\Collection\\FetchStrategy' => NULL,
    'Magento\\Store\\Model\\ResourceModel\\Store\\Collection\\FetchStrategy' => NULL,
    'Magento\\Store\\Model\\ResourceModel\\Website\\Collection\\FetchStrategy' => NULL,
    'Magento\\Framework\\App\\Config\\Spi\\PostProcessorInterface' => NULL,
    'Magento\\Framework\\App\\Config\\PostProcessorComposite' => NULL,
    'systemConfigPostProcessorComposite' => NULL,
    'Magento\\Framework\\App\\Config\\ConfigSourceInterface' => NULL,
    'Magento\\Framework\\App\\Config\\ConfigSourceAggregated' => NULL,
    'Magento\\Framework\\App\\Config\\ConfigSourceAggregated\\Proxy' => NULL,
    'scopesConfigSourceAggregatedProxy' => NULL,
    'scopesConfigSourceAggregated' => NULL,
    'Magento\\Store\\App\\Config\\Source\\InitialConfigSource' => NULL,
    'scopesConfigInitialDataProvider' => NULL,
    'Magento\\MediaGallery\\Model\\Directory\\Config\\Reader' => NULL,
    'Magento\\MediaGallery\\Model\\Directory\\Config\\Data' => NULL,
    'Magento\\Framework\\App\\Helper\\AbstractHelper' => NULL,
    'Magento\\Directory\\Helper\\Data' => NULL,
    'Magento\\Directory\\Helper\\Data\\Proxy' => NULL,
    'DirectoryHelperDataProxy' => NULL,
    'Magento\\Theme\\Model\\Layout\\Config\\Data' => NULL,
    'IteratorAggregate' => NULL,
    'Countable' => NULL,
    'Magento\\Framework\\Option\\ArrayInterface' => NULL,
    'Magento\\Framework\\Data\\CollectionDataSourceInterface' => NULL,
    'Traversable' => NULL,
    'Magento\\Framework\\Data\\OptionSourceInterface' => NULL,
    'Magento\\Framework\\View\\Element\\Block\\ArgumentInterface' => NULL,
    'Magento\\Framework\\Data\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\Framework\\Data\\Collection\\AbstractDb' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\Framework\\App\\ResourceConnection\\SourceProviderInterface' => NULL,
    'Magento\\Framework\\Model\\ResourceModel\\Db\\Collection\\AbstractCollection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\Framework\\Api\\Search\\SearchResultInterface' => NULL,
    'Magento\\Framework\\Api\\SearchResultsInterface' => NULL,
    'Magento\\Framework\\View\\Element\\UiComponent\\DataProvider\\SearchResult' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\Theme\\Model\\ResourceModel\\Design\\Config\\Grid\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\Framework\\App\\Scope\\Source' => NULL,
    'Magento\\Theme\\Model\\Scope\\WebsiteSource' => NULL,
    'Magento\\Theme\\Model\\Scope\\GroupSource' => NULL,
    'Magento\\Theme\\Model\\Scope\\StoreSource' => NULL,
    'configured_design_cache' => NULL,
    'Magento\\Framework\\ObjectManager\\ContextInterface' => NULL,
    'Magento\\Framework\\Model\\Context' => NULL,
    'design_context' => NULL,
    'Magento\\Framework\\MessageQueue\\ExchangeFactoryInterface' => NULL,
    'Magento\\Framework\\Amqp\\ExchangeFactory' => NULL,
    'Magento\\Framework\\Amqp\\Bulk\\ExchangeFactory' => NULL,
    'Magento\\Framework\\View\\TemplateEngine\\Xhtml\\CompilerInterface' => NULL,
    'Magento\\Framework\\View\\TemplateEngine\\Xhtml\\Compiler' => NULL,
    'Magento\\Framework\\View\\TemplateEngine\\Xhtml\\ConfigCompiler' => NULL,
    'Magento\\Framework\\Cache\\LockGuardedCacheLoader' => NULL,
    'systemConfigQueryLocker' => NULL,
    'Magento\\Framework\\App\\Config\\ConfigTypeInterface' => NULL,
    'Magento\\Config\\App\\Config\\Type\\System' => NULL,
    'systemSnapshot' => NULL,
    'Magento\\Framework\\App\\Config\\ScopeConfigInterface' => NULL,
    'Magento\\Framework\\App\\Config' => NULL,
    'configSnapshot' => NULL,
    'Magento\\Config\\Model\\PreparedValueFactory' => NULL,
    'snapshotValueFactory' => NULL,
    'Magento\\Framework\\App\\Config\\InitialConfigSource' => NULL,
    'Magento\\Framework\\App\\Config\\InitialConfigSource\\Proxy' => NULL,
    'modulesDataProviderProxy' => NULL,
    'modulesDataProvider' => NULL,
    'Magento\\Framework\\App\\Config\\PostProcessorComposite\\Proxy' => NULL,
    'systemConfigPostProcessorCompositeProxy' => NULL,
    'systemConfigSourceAggregatedProxy' => NULL,
    'systemConfigSourceAggregated' => NULL,
    'systemConfigSnapshotSourceAggregated' => NULL,
    'systemConfigInitialDataProvider' => NULL,
    'Magento\\Config\\App\\Config\\Source\\DumpConfigSourceInterface' => NULL,
    'Magento\\Config\\App\\Config\\Source\\DumpConfigSourceAggregated' => 
    array (
      'designConfigTheme' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Theme\\Model\\Design\\Config\\Plugin\\Dump',
      ),
    ),
    'appDumpSystemSource' => 
    array (
      'designConfigTheme' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Theme\\Model\\Design\\Config\\Plugin\\Dump',
      ),
    ),
    'appDumpConfigSystemSource' => 
    array (
      'designConfigTheme' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Theme\\Model\\Design\\Config\\Plugin\\Dump',
      ),
    ),
    'appDumpEnvSystemSource' => 
    array (
      'designConfigTheme' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Theme\\Model\\Design\\Config\\Plugin\\Dump',
      ),
    ),
    'configShowSourceAggregated' => NULL,
    'Magento\\Config\\Console\\Command\\ConfigSet\\ConfigSetProcessorInterface' => NULL,
    'Magento\\Config\\Console\\Command\\ConfigSet\\LockProcessor' => NULL,
    'Magento\\Config\\Console\\Command\\ConfigSet\\VirtualLockEnvProcessor' => NULL,
    'Magento\\Config\\Console\\Command\\ConfigSet\\VirtualLockConfigProcessor' => NULL,
    'Magento\\Framework\\Config\\Data\\Scoped' => NULL,
    'Magento\\Config\\Model\\Config\\Structure\\Data' => NULL,
    'adminhtmlConfigStructureData' => NULL,
    'Magento\\Config\\Model\\Config\\Structure\\SearchInterface' => NULL,
    'Magento\\Config\\Model\\Config\\Structure' => NULL,
    'adminhtmlConfigStructure' => NULL,
    'Magento\\Backend\\Model\\Auth\\Session\\Storage' => NULL,
    'Magento\\Backend\\Model\\Session\\Storage' => NULL,
    'Magento\\Backend\\Model\\Session\\Quote\\Storage' => NULL,
    'Magento\\Framework\\Api\\SearchCriteria\\CollectionProcessorInterface' => NULL,
    'Magento\\Framework\\Api\\SearchCriteria\\CollectionProcessor' => NULL,
    'Magento\\Eav\\Model\\Api\\SearchCriteria\\CollectionProcessor' => NULL,
    'Magento\\Eav\\Model\\Api\\SearchCriteria\\AttributeCollectionProcessor' => NULL,
    'Magento\\Framework\\Api\\SearchCriteria\\CollectionProcessor\\FilterProcessor' => NULL,
    'Magento\\Eav\\Model\\Api\\SearchCriteria\\CollectionProcessor\\AttributeFilterProcessor' => NULL,
    'Magento\\Framework\\Api\\SearchCriteria\\CollectionProcessor\\SortingProcessor' => NULL,
    'Magento\\Eav\\Model\\Api\\SearchCriteria\\CollectionProcessor\\AttributeSortingProcessor' => NULL,
    'Magento\\Eav\\Model\\Api\\SearchCriteria\\CollectionProcessor\\AttributeSetFilterProcessor' => NULL,
    'Magento\\Eav\\Model\\Api\\SearchCriteria\\AttributeSetCollectionProcessor' => NULL,
    'Magento\\Eav\\Model\\Api\\SearchCriteria\\CollectionProcessor\\AttributeGroupFilterProcessor' => NULL,
    'Magento\\Eav\\Model\\Api\\SearchCriteria\\CollectionProcessor\\AttributeGroupSortingProcessor' => NULL,
    'Magento\\Eav\\Model\\Api\\SearchCriteria\\AttributeGroupCollectionProcessor' => NULL,
    'configured_eav_cache' => NULL,
    'Magento\\Framework\\Session\\ValidatorInterface' => NULL,
    'Magento\\Framework\\Session\\CompositeValidator' => NULL,
    'SessionValidator' => NULL,
    'SectionInvalidationConfigReader' => NULL,
    'SectionInvalidationConfigData' => NULL,
    'Magento\\Framework\\Model\\ResourceModel\\Db\\VersionControl\\Snapshot' => NULL,
    'EavVersionControlSnapshot' => NULL,
    'Magento\\Customer\\Model\\ResourceModel\\Db\\VersionControl\\AddressSnapshot' => NULL,
    'CustomerAddressSnapshot' => NULL,
    'Magento\\Framework\\Model\\ResourceModel\\Db\\VersionControl\\RelationComposite' => NULL,
    'CustomerRelationsComposite' => NULL,
    'CustomerAddressRelationsComposite' => NULL,
    'Magento\\Framework\\Indexer\\HandlerInterface' => NULL,
    'Magento\\Framework\\Indexer\\Handler\\ConcatHandler' => NULL,
    'CustomerNameHandler' => NULL,
    'ShippingAddressHandler' => NULL,
    'BillingAddressHandler' => NULL,
    'Stringable' => NULL,
    'Zend_Db_Expr' => NULL,
    'Magento\\Framework\\DB\\Sql\\ExpressionInterface' => NULL,
    'JsonSerializable' => NULL,
    'Magento\\Framework\\DB\\Sql\\Expression' => NULL,
    'Magento\\Framework\\DB\\Sql\\ConcatExpression' => NULL,
    'CustomerNameExpression' => NULL,
    'ShippingAddressExpression' => NULL,
    'BillingAddressExpression' => NULL,
    'Magento\\Customer\\Model\\Api\\SearchCriteria\\CollectionProcessor\\GroupFilterProcessor' => NULL,
    'Magento\\Customer\\Model\\Api\\SearchCriteria\\CollectionProcessor\\GroupSortingProcessor' => NULL,
    'Magento\\Customer\\Model\\Api\\SearchCriteria\\GroupCollectionProcessor' => NULL,
    'Magento\\Framework\\GraphQl\\Config\\Data' => NULL,
    'Magento\\Framework\\GraphQl\\Config\\SchemaLocator' => NULL,
    'Magento\\Framework\\GraphQlSchemaStitching\\Common\\Reader' => NULL,
    'Magento\\Framework\\GraphQlSchemaStitching\\Reader' => NULL,
    'Magento\\Config\\Model\\Config\\Structure\\Reader' => NULL,
    'Magento\\Variable\\Model\\Config\\Structure\\ReaderVirtual' => NULL,
    'Magento\\Variable\\Model\\Config\\StructureDataVirtual' => NULL,
    'Magento\\Config\\Model\\Config\\StructureLazy' => NULL,
    'Magento\\Variable\\Model\\Config\\StructureVirtual' => NULL,
    'Magento\\Cms\\Model\\Api\\SearchCriteria\\CollectionProcessor\\PageFilterProcessor' => NULL,
    'Magento\\Cms\\Model\\Api\\SearchCriteria\\PageCollectionProcessor' => NULL,
    'Magento\\Cms\\Model\\Api\\SearchCriteria\\CollectionProcessor\\BlockFilterProcessor' => NULL,
    'Magento\\Cms\\Model\\Api\\SearchCriteria\\BlockCollectionProcessor' => NULL,
    'Magento\\Search\\Model\\ResourceModel\\Synonyms\\Grid\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\Catalog\\Model\\Session\\Storage' => NULL,
    'Magento\\Eav\\Model\\Adminhtml\\System\\Config\\Source\\InputtypeFactory' => NULL,
    'Magento\\Catalog\\Model\\System\\Config\\Source\\InputtypeFactory' => NULL,
    'Magento\\Catalog\\Model\\ImageUploader' => NULL,
    'Magento\\Catalog\\CategoryImageUpload' => NULL,
    'Magento\\Catalog\\Model\\Indexer\\Product\\Flat\\FlatTableBuilder' => NULL,
    'rowsFlatTableBuilder' => NULL,
    'Magento\\Catalog\\Model\\Layer\\FilterList' => NULL,
    'categoryFilterList' => NULL,
    'searchFilterList' => NULL,
    'Iterator' => NULL,
    'Magento\\Framework\\Pricing\\Price\\Pool' => NULL,
    'Magento\\Catalog\\Pricing\\Price\\Pool' => NULL,
    'Magento\\Framework\\View\\Element\\BlockInterface' => NULL,
    'Magento\\Framework\\View\\Element\\AbstractBlock' => NULL,
    'Magento\\Framework\\View\\Element\\Template' => NULL,
    'Magento\\Framework\\View\\Element\\Html\\Link' => NULL,
    'Magento\\Widget\\Block\\BlockInterface' => NULL,
    'Magento\\Catalog\\Block\\Widget\\Link' => NULL,
    'Magento\\Catalog\\Block\\Category\\Widget\\Link' => NULL,
    'Magento\\Catalog\\Block\\Product\\Widget\\Link' => NULL,
    'Magento\\Catalog\\Model\\Layer\\ContextInterface' => NULL,
    'Magento\\Catalog\\Model\\Layer\\Context' => NULL,
    'Magento\\Catalog\\Model\\Layer\\Search\\Context' => NULL,
    'Magento\\Catalog\\Model\\Layer\\Category\\Context' => NULL,
    'Magento\\Eav\\Model\\ResourceModel\\Entity\\Attribute\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Attribute\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\Framework\\EntityManager\\MetadataPool' => NULL,
    'Magento\\Catalog\\EntityCreator\\MetadataPool' => NULL,
    'Magento\\Framework\\Model\\Entity\\ScopeResolver' => NULL,
    'Magento\\Catalog\\Model\\Entity\\CreationScopeResolver' => NULL,
    'Magento\\Framework\\EntityManager\\Operation\\AttributeInterface' => NULL,
    'Magento\\Eav\\Model\\ResourceModel\\CreateHandler' => NULL,
    'Magento\\Catalog\\Model\\ResourceModel\\CreateHandler' => NULL,
    'Magento\\Eav\\Model\\ResourceModel\\UpdateHandler' => NULL,
    'Magento\\Catalog\\Model\\ResourceModel\\UpdateHandler' => NULL,
    'Magento\\Eav\\Model\\Api\\SearchCriteria\\CollectionProcessor\\FilterProcessor' => NULL,
    'Magento\\Catalog\\Model\\Api\\SearchCriteria\\CollectionProcessor\\ProductFilterProcessor' => NULL,
    'Magento\\Catalog\\Model\\Api\\SearchCriteria\\ProductCollectionProcessor' => NULL,
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\BaseSelectProcessorInterface' => NULL,
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\CompositeBaseSelectProcessor' => NULL,
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\CompositeWithWebsiteProcessor' => NULL,
    'Magento\\Framework\\Indexer\\BatchSizeManagementInterface' => NULL,
    'Magento\\Framework\\Indexer\\BatchSizeManagement' => NULL,
    'Magento\\Catalog\\Model\\Indexer\\Price\\CompositeProductBatchSizeManagement' => NULL,
    'Magento\\Catalog\\Model\\Indexer\\Price\\BatchSizeManagement' => NULL,
    'Magento\\Catalog\\Model\\Indexer\\CategoryProductBatchSize' => NULL,
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Indexer\\Eav\\DecimalBatchSizeManagement' => NULL,
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Indexer\\Eav\\SourceBatchSizeManagement' => NULL,
    'Magento\\Framework\\Indexer\\DimensionalIndexerInterface' => NULL,
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Indexer\\Price\\SimpleProductPrice' => NULL,
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Indexer\\Price\\VirtualProductPrice' => NULL,
    'Magento\\CatalogInventory\\Model\\Indexer\\Stock\\BatchSizeManagement' => NULL,
    'Magento\\Framework\\Indexer\\IndexTableRowSizeEstimatorInterface' => NULL,
    'Magento\\Framework\\Indexer\\IndexTableRowSizeEstimator' => NULL,
    'Magento\\CatalogInventory\\Model\\ResourceModel\\Indexer\\Stock\\IndexTableRowSizeEstimator' => NULL,
    'catalogRuleSearchResult' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\CatalogRule\\Model\\ResourceModel\\Rule\\AssociatedEntityMap' => NULL,
    'Magento\\Framework\\Api\\SearchCriteria\\CollectionProcessor\\ConditionProcessor\\CustomConditionProviderInterface' => NULL,
    'Magento\\Framework\\Api\\SearchCriteria\\CollectionProcessor\\ConditionProcessor\\CustomConditionProvider' => NULL,
    'CatalogRuleCustomConditionProvider' => NULL,
    'Magento\\Framework\\Api\\SearchCriteria\\CollectionProcessor\\AdvancedFilterProcessor' => NULL,
    'CatalogRuleAdvancedFilterProcessor' => NULL,
    'Magento\\Bundle\\Pricing\\Price\\Pool' => NULL,
    'Magento\\Framework\\Search\\EntityMetadata' => NULL,
    'Magento\\Framework\\Search\\ProductEntityMetadata' => NULL,
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\CollectionFactory' => NULL,
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Fulltext\\CollectionFactory' => NULL,
    'Magento\\Eav\\Model\\Entity\\Collection\\AbstractCollection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Collection\\AbstractCollection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Fulltext\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Fulltext\\SearchCollection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Fulltext\\SearchCollectionFactory' => NULL,
    'Magento\\Catalog\\Model\\Layer\\ItemCollectionProviderInterface' => NULL,
    'Magento\\Catalog\\Model\\Layer\\Search\\ItemCollectionProvider' => NULL,
    'Magento\\CatalogSearch\\Model\\Layer\\Search\\ItemCollectionProvider' => NULL,
    'Magento\\CatalogSearch\\Model\\Advanced\\ItemCollectionProvider' => NULL,
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Advanced\\CollectionFactory' => NULL,
    'Magento\\CatalogSearch\\Model\\Layer\\Category\\Context' => NULL,
    'Magento\\CatalogSearch\\Model\\Layer\\Search\\Context' => NULL,
    'QuoteAddressRelationsComposite' => NULL,
    'QuoteRelationsComposite' => NULL,
    'mediaGallerySearchResult' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\Payment\\Model\\Config\\Data' => NULL,
    'Magento\\Framework\\Config\\GenericSchemaLocator' => NULL,
    'Magento\\Payment\\Gateway\\ErrorMapper\\VirtualSchemaLocator' => NULL,
    'Magento\\Payment\\Gateway\\ErrorMapper\\VirtualConfigReader' => NULL,
    'Monolog\\Handler\\HandlerInterface' => NULL,
    'Monolog\\Handler\\Handler' => NULL,
    'Monolog\\ResettableInterface' => NULL,
    'Monolog\\Handler\\AbstractHandler' => NULL,
    'Monolog\\Handler\\ProcessableHandlerInterface' => NULL,
    'Monolog\\Handler\\FormattableHandlerInterface' => NULL,
    'Monolog\\Handler\\AbstractProcessingHandler' => NULL,
    'Monolog\\Handler\\StreamHandler' => NULL,
    'Magento\\Framework\\Logger\\Handler\\Base' => NULL,
    'Magento\\Payment\\Model\\Method\\VirtualDebug' => NULL,
    'Psr\\Log\\LoggerInterface' => NULL,
    'Monolog\\Logger' => NULL,
    'Magento\\Framework\\Logger\\Monolog' => NULL,
    'Magento\\Payment\\Model\\Method\\VirtualLogger' => NULL,
    'pdfConfigDataStorage' => NULL,
    'Magento\\Framework\\Event\\ObserverInterface' => NULL,
    'Magento\\Sales\\Observer\\GridSyncRemoveObserver' => NULL,
    'SalesOrderIndexGridSyncRemove' => NULL,
    'SalesInvoiceIndexGridSyncRemove' => NULL,
    'SalesShipmentIndexGridSyncRemove' => NULL,
    'SalesCreditmemoIndexGridSyncRemove' => NULL,
    'Magento\\Sales\\Observer\\GridSyncInsertObserver' => NULL,
    'SalesOrderIndexGridSyncInsert' => NULL,
    'SalesInvoiceIndexGridSyncInsert' => NULL,
    'SalesShipmentIndexGridSyncInsert' => NULL,
    'SalesCreditmemoIndexGridSyncInsert' => NULL,
    'Magento\\Sales\\Model\\GridAsyncInsert' => NULL,
    'SalesOrderIndexGridAsyncInsert' => NULL,
    'SalesInvoiceIndexGridAsyncInsert' => NULL,
    'SalesShipmentIndexGridAsyncInsert' => NULL,
    'SalesCreditmemoIndexGridAsyncInsert' => NULL,
    'Magento\\Sales\\Observer\\GridAsyncInsertObserver' => NULL,
    'SalesOrderIndexGridAsyncInsertObserver' => NULL,
    'SalesInvoiceIndexGridAsyncInsertObserver' => NULL,
    'SalesShipmentIndexGridAsyncInsertObserver' => NULL,
    'SalesCreditmemoIndexGridAsyncInsertObserver' => NULL,
    'Magento\\Sales\\Cron\\GridAsyncInsert' => NULL,
    'SalesOrderIndexGridAsyncInsertCron' => NULL,
    'SalesInvoiceIndexGridAsyncInsertCron' => NULL,
    'SalesShipmentIndexGridAsyncInsertCron' => NULL,
    'SalesCreditmemoIndexGridAsyncInsertCron' => NULL,
    'Magento\\Sales\\Model\\EmailSenderHandler' => NULL,
    'SalesOrderSendEmails' => NULL,
    'SalesOrderInvoiceSendEmails' => NULL,
    'SalesOrderShipmentSendEmails' => NULL,
    'SalesOrderCreditmemoSendEmails' => NULL,
    'Magento\\Sales\\Observer\\Virtual\\SendEmails' => NULL,
    'SalesOrderSendEmailsObserver' => NULL,
    'SalesOrderInvoiceSendEmailsObserver' => NULL,
    'SalesOrderShipmentSendEmailsObserver' => NULL,
    'SalesOrderCreditmemoSendEmailsObserver' => NULL,
    'Magento\\Sales\\Cron\\SendEmails' => NULL,
    'SalesOrderSendEmailsCron' => NULL,
    'SalesInvoiceSendEmailsCron' => NULL,
    'SalesShipmentSendEmailsCron' => NULL,
    'SalesCreditmemoSendEmailsCron' => NULL,
    'OrderRelationsComposite' => NULL,
    'InvoiceRelationsComposite' => NULL,
    'ShipmentRelationsComposite' => NULL,
    'CreditmemoRelationsComposite' => NULL,
    'Magento\\Sales\\Model\\ResourceModel\\Provider\\NotSyncedDataProviderInterface' => NULL,
    'Magento\\Sales\\Model\\ResourceModel\\Provider\\NotSyncedDataProvider' => NULL,
    'Magento\\Sales\\Model\\ResourceModel\\Provider\\NotSyncedOrderDataProvider' => NULL,
    'Magento\\Framework\\Model\\ResourceModel\\AbstractResource' => NULL,
    'Magento\\Framework\\Model\\ResourceModel\\Db\\AbstractDb' => NULL,
    'Magento\\Sales\\Model\\ResourceModel\\GridInterface' => NULL,
    'Magento\\Sales\\Model\\ResourceModel\\AbstractGrid' => NULL,
    'Magento\\Sales\\Model\\ResourceModel\\Grid' => NULL,
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Grid' => NULL,
    'ShipmentGridAggregator' => NULL,
    'CreditmemoGridAggregator' => NULL,
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Invoice\\Grid' => NULL,
    'CustomerNameAggregator' => NULL,
    'ShippingNameAggregator' => NULL,
    'BillingNameAggregator' => NULL,
    'ShippingAddressAggregator' => NULL,
    'BillingAddressAggregator' => NULL,
    'Magento\\Framework\\DB\\Sql\\LookupExpression' => NULL,
    'PaymentMethodSubSelect' => NULL,
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Invoice\\Grid\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Metadata' => NULL,
    'orderMetadata' => NULL,
    'orderItemMetadata' => NULL,
    'invoiceMetadata' => NULL,
    'shipmentMetadata' => NULL,
    'creditmemoMetadata' => NULL,
    'transactionMetaData' => NULL,
    'paymentMetaData' => NULL,
    'orderAddressMetadata' => NULL,
    'Magento\\Checkout\\Model\\Session\\Storage' => NULL,
    'Magento\\Cron\\Model\\VirtualLoggerHandler' => NULL,
    'Magento\\Cron\\Model\\VirtualLogger' => NULL,
    'Magento\\Framework\\ShellInterface' => NULL,
    'Magento\\Framework\\Shell' => NULL,
    'shellBackground' => NULL,
    'WidgetValidationState' => NULL,
    'Zend_Validate_Interface' => NULL,
    'Zend_Validate_Abstract' => NULL,
    'Magento\\Framework\\View\\Model\\Layout\\Update\\Validator' => NULL,
    'WidgetXmlValidator' => NULL,
    'Magento\\Framework\\View\\Model\\Layout\\Update\\ValidatorFactory' => NULL,
    'WidgetXmlValidatorFactory' => NULL,
    'Magento\\Framework\\Controller\\ResultInterface' => NULL,
    'Magento\\Framework\\Controller\\AbstractResult' => NULL,
    'Magento\\Framework\\View\\Result\\Layout' => NULL,
    'Magento\\Framework\\View\\Result\\Page' => NULL,
    'robotsResultPage' => NULL,
    'Magento\\Framework\\View\\Result\\PageFactory' => NULL,
    'robotsResultPageFactory' => NULL,
    'Magento\\Analytics\\ReportXml\\Config\\Data' => NULL,
    'Magento\\Analytics\\ReportXml\\Config\\SchemaLocator' => NULL,
    'Magento\\Analytics\\ReportXml\\Config\\Reader\\Xml' => NULL,
    'Magento\\Analytics\\Model\\Config\\Data' => NULL,
    'Magento\\Analytics\\Model\\Config\\SchemaLocator' => NULL,
    'Magento\\Analytics\\Model\\Config\\Reader\\Xml' => NULL,
    'Magento\\Analytics\\Model\\Connector\\Http\\ResponseResolver' => NULL,
    'SignUpResponseResolver' => NULL,
    'UpdateResponseResolver' => NULL,
    'OtpResponseResolver' => NULL,
    'NotifyDataChangedResponseResolver' => NULL,
    'Magento\\Framework\\View\\Element\\Context' => NULL,
    'Magento\\Framework\\View\\Element\\Template\\Context' => NULL,
    'context_for_downloadable' => NULL,
    'Magento\\Downloadable\\Pricing\\Price\\Pool' => NULL,
    'Magento\\Framework\\Pricing\\Price\\Collection' => NULL,
    'Magento\\Downloadable\\Pricing\\Price\\Collection' => NULL,
    'AssetMaterializationStrategyFactoryForSourceThemeDeploy' => NULL,
    'AssetPublisherForSymlink' => NULL,
    'Magento\\Framework\\Css\\PreProcessor\\FileGenerator\\RelatedGenerator' => NULL,
    'Magento\\Developer\\Model\\Css\\PreProcessor\\FileGenerator\\PublicationDecorator' => NULL,
    'FileGeneratorPublicationDecoratorForSourceThemeDeploy' => NULL,
    'Magento\\Framework\\Css\\PreProcessor\\Instruction\\Import' => NULL,
    'PreProcessorInstructionImportForSourceThemeDeploy' => NULL,
    'Magento\\Framework\\View\\Asset\\PreProcessor\\Pool' => NULL,
    'AssetPreProcessorPoolForSourceThemeDeploy' => NULL,
    'Magento\\Framework\\View\\Asset\\Source' => NULL,
    'AssetSourceForSourceThemeDeploy' => NULL,
    'Magento\\Framework\\View\\Asset\\Repository' => NULL,
    'AssetRepositoryForSourceThemeDeploy' => NULL,
    'Magento\\Framework\\Code\\Minifier\\AdapterInterface' => NULL,
    'Magento\\Framework\\Code\\Minifier\\Adapter\\Css\\CSSmin' => NULL,
    'cssMinificationAdapter' => NULL,
    'Magento\\Framework\\Code\\Minifier\\Adapter\\Js\\JShrink' => NULL,
    'jsMinificationAdapter' => NULL,
    'Magento\\Framework\\View\\Asset\\PreProcessor\\Minify' => NULL,
    'cssMinificationProcessor' => NULL,
    'jsMinificationProcessor' => NULL,
    'FileGeneratorPublicationDecoratorForBaseFlow' => NULL,
    'PreProcessorInstructionImportForBaseFlow' => NULL,
    'AssetPreProcessorPool' => NULL,
    'cssSourceBaseFilesSorted' => NULL,
    'cssSourceBaseFilesFiltered' => NULL,
    'cssSourceBaseFiles' => NULL,
    'cssSourceOverriddenBaseFiles' => NULL,
    'Magento\\Framework\\Pricing\\Adjustment\\Collection' => NULL,
    'Magento\\Bundle\\Pricing\\Adjustment\\Collection' => NULL,
    'Magento\\Framework\\Pricing\\PriceInfoInterface' => NULL,
    'Magento\\Framework\\Pricing\\PriceInfo\\Base' => NULL,
    'Magento\\Bundle\\Pricing\\PriceInfo' => NULL,
    'Magento\\Bundle\\Pricing\\Price\\Collection' => NULL,
    'Magento\\Elasticsearch\\Model\\Layer\\Search\\Context' => NULL,
    'Magento\\Elasticsearch\\Model\\Layer\\Category\\Context' => NULL,
    'elasticsearchFulltextSearchCollection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'elasticsearchFulltextSearchCollectionFactory' => NULL,
    'Magento\\Elasticsearch\\Model\\Layer\\Search\\ItemCollectionProvider' => NULL,
    'elasticsearchLayerSearchItemCollectionProvider' => NULL,
    'elasticsearchCategoryCollection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'elasticsearchCategoryCollectionFactory' => NULL,
    'Magento\\Elasticsearch\\Model\\Layer\\Category\\ItemCollectionProvider' => NULL,
    'elasticsearchLayerCategoryItemCollectionProvider' => NULL,
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Advanced\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'elasticsearchAdvancedCollection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'elasticsearchAdvancedCollectionFactory' => NULL,
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Fulltext\\Collection\\SearchCriteriaResolverFactory' => NULL,
    'elasticsearchSearchCriteriaResolverFactory' => NULL,
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Fulltext\\Collection\\SearchResultApplierFactory' => NULL,
    'elasticsearchSearchResultApplier\\Factory' => NULL,
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Fulltext\\Collection\\TotalRecordsResolverFactory' => NULL,
    'elasticsearchTotalRecordsResolver\\Factory' => NULL,
    'Magento\\AdvancedSearch\\Model\\Adapter\\DataMapper\\AdditionalFieldsProviderInterface' => NULL,
    'Magento\\AdvancedSearch\\Model\\Adapter\\DataMapper\\AdditionalFieldsProvider' => NULL,
    'additionalFieldsProviderForElasticsearch' => NULL,
    'Magento\\Elasticsearch\\SearchAdapter\\ProductEntityMetadata' => NULL,
    'Magento\\Elasticsearch\\SearchAdapter\\ConnectionManager' => NULL,
    'Magento\\Elasticsearch\\Elasticsearch5\\SearchAdapter\\ConnectionManager' => NULL,
    'Magento\\AdvancedSearch\\Model\\Client\\ClientFactoryInterface' => NULL,
    'Magento\\AdvancedSearch\\Model\\Client\\ClientFactory' => NULL,
    'Magento\\Elasticsearch\\Elasticsearch5\\Model\\Client\\ElasticsearchFactory' => NULL,
    'Magento\\Elasticsearch\\Model\\Adapter\\Index\\Config\\Reader' => NULL,
    'Magento\\Elasticsearch\\Model\\Adapter\\FieldMapper\\Product\\FieldProvider\\FieldName\\ResolverInterface' => NULL,
    'Magento\\Elasticsearch\\Model\\Adapter\\FieldMapper\\Product\\FieldProvider\\FieldName\\Resolver\\CompositeResolver' => NULL,
    'elasticsearch5FieldNameResolver' => NULL,
    'Magento\\Elasticsearch\\Model\\Adapter\\FieldMapper\\Product\\FieldProvider\\FieldName\\Resolver\\DefaultResolver' => NULL,
    'elasticsearch5FieldNameDefaultResolver' => NULL,
    'Magento\\Elasticsearch\\Model\\Adapter\\FieldMapper\\Product\\FieldProviderInterface' => NULL,
    'Magento\\Elasticsearch\\Model\\Adapter\\FieldMapper\\Product\\CompositeFieldProvider' => NULL,
    'elasticsearch5FieldProvider' => NULL,
    'Magento\\Elasticsearch\\Model\\Adapter\\FieldMapper\\Product\\FieldProvider\\StaticField' => NULL,
    'elasticsearch5StaticFieldProvider' => NULL,
    'Magento\\Elasticsearch\\Model\\Adapter\\FieldMapper\\Product\\FieldProvider\\DynamicField' => NULL,
    'elasticsearch5DynamicFieldProvider' => NULL,
    'Magento\\Elasticsearch\\Model\\Adapter\\FieldMapper\\Product\\FieldProvider\\FieldType\\ResolverInterface' => NULL,
    'Magento\\Elasticsearch\\Model\\Adapter\\FieldMapper\\Product\\FieldProvider\\FieldType\\Resolver\\DateTimeType' => NULL,
    'elasticsearch5FieldTypeDateTimeResolver' => NULL,
    'Magento\\Elasticsearch\\Model\\Adapter\\FieldMapper\\Product\\FieldProvider\\FieldType\\Resolver\\FloatType' => NULL,
    'elasticsearch5FieldTypeFloatResolver' => NULL,
    'Magento\\Elasticsearch\\Model\\Adapter\\FieldMapper\\Product\\FieldProvider\\FieldType\\Resolver\\DefaultResolver' => NULL,
    'elasticsearch5FieldTypeDefaultResolver' => NULL,
    'Magento\\Elasticsearch6\\Model\\Client\\ElasticsearchFactory' => NULL,
    'Magento\\AdvancedSearch\\Model\\SuggestedQueriesInterface' => NULL,
    'Magento\\Elasticsearch\\Model\\DataProvider\\Base\\Suggestions' => NULL,
    'Magento\\Elasticsearch6\\Model\\DataProvider\\Suggestions' => NULL,
    'elasticsearch6FieldNameResolver' => NULL,
    'Magento\\Elasticsearch\\Model\\Adapter\\FieldMapperInterface' => NULL,
    'Magento\\Elasticsearch\\Elasticsearch5\\Model\\Adapter\\FieldMapper\\ProductFieldMapper' => NULL,
    'Magento\\Elasticsearch6\\Model\\Adapter\\FieldMapper\\ProductFieldMapper' => NULL,
    'Magento\\Search\\Setup\\InstallConfigInterface' => NULL,
    'Magento\\Elasticsearch\\Setup\\InstallConfig' => NULL,
    'Magento\\Elasticsearch6\\Setup\\InstallConfig' => NULL,
    'Magento\\Elasticsearch7\\Model\\Client\\ElasticsearchFactory' => NULL,
    'Magento\\Elasticsearch7\\Model\\DataProvider\\Suggestions' => NULL,
    'Magento\\Elasticsearch7\\Model\\Adapter\\FieldMapper\\Product\\FieldProvider\\FieldName\\Resolver\\CompositeResolver' => NULL,
    'Magento\\Elasticsearch7\\Model\\Adapter\\FieldMapper\\ProductFieldMapper' => NULL,
    'Magento\\Elasticsearch7\\Setup\\InstallConfig' => NULL,
    'Magento\\Framework\\View\\TemplateEngine\\Xhtml\\CompilerFactory' => NULL,
    'Magento\\Framework\\View\\TemplateEngine\\Xhtml\\UiCompilerFactory' => NULL,
    'Magento\\Framework\\View\\TemplateEngine\\Xhtml\\UiCompiler' => NULL,
    'Magento\\Framework\\View\\Element\\UiComponent\\Config\\DomMergerInterface' => NULL,
    'Magento\\Framework\\View\\Element\\UiComponent\\Config\\DomMerger' => NULL,
    'uiConfigurationDomMerger' => NULL,
    'Magento\\Ui\\Config\\Definition\\Data' => NULL,
    'Magento\\Ui\\Config\\DefinitionMap\\Data' => NULL,
    'uiTemplateDomMerger' => NULL,
    'uiDefinitionDomMerger' => NULL,
    'Magento\\Framework\\View\\Element\\UiComponent\\Config\\FileCollectorInterface' => NULL,
    'Magento\\Framework\\View\\Element\\UiComponent\\Config\\FileCollector\\AggregatedFileCollector' => NULL,
    'uiDefinitionFileCollector' => NULL,
    'Magento\\Framework\\View\\Element\\UiComponent\\Config\\UiReaderInterface' => NULL,
    'Magento\\Framework\\View\\Element\\UiComponent\\Config\\Reader' => NULL,
    'uiDefinitionReader' => NULL,
    'arrayArgumentInterpreterProxy' => NULL,
    'configurableObjectArgumentInterpreterProxy' => NULL,
    'uiComponentAggregatedCollector' => NULL,
    'uiComponentAggregatedSourceBase' => NULL,
    'uiComponentAggregatedSourceBaseFiltered' => NULL,
    'uiComponentAggregatedSourceBaseSorted' => NULL,
    'uiComponentAggregatedSourceTheme' => NULL,
    'uiComponentAggregatedSourceThemeFiltered' => NULL,
    'uiComponentAggregatedSourceThemeSorted' => NULL,
    'uiComponentAggregatedSourceOverrideBase' => NULL,
    'uiComponentAggregatedSourceOverrideBaseFiltered' => NULL,
    'uiComponentAggregatedSourceOverrideBaseSorted' => NULL,
    'uiComponentAggregatedSourceOverrideTheme' => NULL,
    'uiComponentAggregatedSourceOverrideThemeFiltered' => NULL,
    'uiComponentAggregatedSourceOverrideThemeSorted' => NULL,
    'Magento\\Framework\\Config\\DataInterfaceFactory' => NULL,
    'uiComponentConfigFactory' => NULL,
    'uiComponentMapFactory' => NULL,
    'Magento\\Ui\\Config\\ConverterInterface' => NULL,
    'Magento\\Ui\\Config\\ConverterInterface\\Proxy' => NULL,
    'Magento\\Ui\\Config\\Converter\\Item\\Proxy' => NULL,
    'Magento\\Ui\\Config\\Converter\\Buttons\\Proxy' => NULL,
    'Magento\\Ui\\Config\\Converter\\Actions\\Proxy' => NULL,
    'Magento\\Ui\\Config\\Converter\\StorageConfig\\Proxy' => NULL,
    'Magento\\GroupedProduct\\Pricing\\Price\\Pool' => NULL,
    'Magento\\GroupedProduct\\Pricing\\Price\\Collection' => NULL,
    'Magento\\ConfigurableProduct\\Pricing\\Price\\Pool' => NULL,
    'Magento\\ConfigurableProduct\\Pricing\\Price\\Collection' => NULL,
    'Magento\\ConfigurableProduct\\Pricing\\Price\\PriceResolverInterface' => NULL,
    'Magento\\ConfigurableProduct\\Pricing\\Price\\ConfigurablePriceResolver' => NULL,
    'ConfigurableFinalPriceResolver' => NULL,
    'ConfigurableRegularPriceResolver' => NULL,
    'Magento\\Shipping\\Model\\Carrier\\VirtualDebug' => NULL,
    'Magento\\Shipping\\Model\\Method\\VirtualLogger' => NULL,
    'Magento\\Reports\\Model\\Session\\Storage' => NULL,
    'Magento\\Framework\\Session\\SessionManagerInterface' => NULL,
    'Magento\\Framework\\Session\\SessionManager' => NULL,
    'Magento\\Framework\\Session\\Generic' => NULL,
    'Magento\\Reports\\Model\\Session' => NULL,
    'Magento\\LoginAsCustomerAdminUi\\Ui\\Customer\\Component\\Button\\DataProvider' => NULL,
    'Magento\\LoginAsCustomerAdminUi\\Ui\\Customer\\Component\\Control\\LoginAsCustomerButton\\DataProvider' => NULL,
    'Magento\\LoginAsCustomerAdminUi\\Plugin\\Button\\ToolbarPlugin\\DataProvider' => NULL,
    'Magento\\MediaContent\\Model\\Content\\Config\\Reader' => NULL,
    'Magento\\MediaContent\\Model\\Content\\Config\\Data' => NULL,
    'Magento\\MediaContentApi\\Model\\GetAssetIdsByContentFieldInterface' => NULL,
    'Magento\\MediaContentCatalog\\Model\\ResourceModel\\GetAssetIdsByEavContentField' => NULL,
    'Magento\\MediaContentCatalog\\Model\\ResourceModel\\GetAssetIdsByProductStatus' => NULL,
    'Magento\\MediaContentCatalog\\Model\\ResourceModel\\GetAssetIdsByCategoryStatus' => NULL,
    'Magento\\MediaContentCms\\Model\\ResourceModel\\GetAssetIdsByContentField' => NULL,
    'Magento\\MediaContentCms\\Model\\ResourceModel\\GetAssetIdsByPageStatus' => NULL,
    'Magento\\MediaContentCms\\Model\\ResourceModel\\GetAssetIdsByBlockStatus' => NULL,
    'Magento\\MediaGalleryMetadataApi\\Api\\AddMetadataInterface' => NULL,
    'Magento\\MediaGalleryMetadata\\Model\\File\\AddMetadata' => NULL,
    'Magento\\MediaGalleryMetadata\\Model\\Jpeg\\AddMetadata' => NULL,
    'Magento\\MediaGalleryMetadata\\Model\\Png\\AddMetadata' => NULL,
    'Magento\\MediaGalleryMetadata\\Model\\Gif\\AddMetadata' => NULL,
    'Magento\\MediaGalleryMetadataApi\\Api\\ExtractMetadataInterface' => NULL,
    'Magento\\MediaGalleryMetadata\\Model\\File\\ExtractMetadata' => NULL,
    'Magento\\MediaGalleryMetadata\\Model\\Gif\\ExtractMetadata' => NULL,
    'Magento\\MediaGalleryMetadata\\Model\\Png\\ExtractMetadata' => NULL,
    'Magento\\MediaGalleryMetadata\\Model\\Jpeg\\ExtractMetadata' => NULL,
    'Magento\\Framework\\MessageQueue\\Lock\\ReaderInterface' => NULL,
    'Magento\\Framework\\MessageQueue\\Lock\\WriterInterface' => NULL,
    'Magento\\MessageQueue\\Model\\ResourceModel\\Lock' => NULL,
    'RefreshLock' => NULL,
    'Magento\\MysqlMq\\Model\\Driver\\ExchangeFactory' => NULL,
    'Magento\\MysqlMq\\Model\\Driver\\Bulk\\ExchangeFactory' => NULL,
    'Magento\\Newsletter\\Model\\Session\\Storage' => NULL,
    'Magento\\SalesRule\\Model\\ResourceModel\\Rule\\AssociatedEntityMap' => NULL,
    'Magento\\Framework\\Cache\\FrontendInterface' => NULL,
    'Magento\\Framework\\Cache\\Frontend\\Decorator\\Bare' => NULL,
    'Magento\\Framework\\Cache\\Frontend\\Decorator\\TagScope' => NULL,
    'Magento\\PageBuilder\\Model\\Cache\\Type\\EditorConfig' => NULL,
    'Magento\\PageBuilder\\Model\\View\\File\\Collector\\PageBuilder' => NULL,
    'pageBuilderComponentAggregatedSourceBase' => NULL,
    'pageBuilderComponentAggregatedSourceBaseFiltered' => NULL,
    'pageBuilderComponentAggregatedSourceBaseSorted' => NULL,
    'Magento\\Framework\\View\\Element\\UiComponent\\Control\\ButtonProviderInterface' => NULL,
    'Magento\\PageBuilder\\Block\\Adminhtml\\ContentType\\Edit\\CancelButton' => NULL,
    'Magento\\PageBuilder\\Block\\Adminhtml\\ContentType\\Edit\\ModalCancelButton' => NULL,
    'pageBuilderProductCollectionFactory' => NULL,
    'Magento\\PageBuilder\\Model\\Catalog\\Sorting\\OptionInterface' => NULL,
    'Magento\\PageBuilder\\Model\\Catalog\\Sorting\\SimpleOption' => NULL,
    'Magento\\PageBuilder\\Model\\Catalog\\Sorting\\Date\\NewestTop' => NULL,
    'Magento\\PageBuilder\\Model\\Catalog\\Sorting\\Date\\OldestTop' => NULL,
    'Magento\\PageBuilder\\Model\\Catalog\\Sorting\\Name\\Ascending' => NULL,
    'Magento\\PageBuilder\\Model\\Catalog\\Sorting\\Name\\Descending' => NULL,
    'Magento\\PageBuilder\\Model\\Catalog\\Sorting\\Sku\\Ascending' => NULL,
    'Magento\\PageBuilder\\Model\\Catalog\\Sorting\\Sku\\Descending' => NULL,
    'Magento\\PageBuilder\\Model\\Catalog\\Sorting\\Stock\\Ascending' => NULL,
    'Magento\\PageBuilder\\Model\\Catalog\\Sorting\\Stock\\Descending' => NULL,
    'Magento\\PageBuilder\\Model\\Catalog\\Sorting\\Price\\HighToLow' => NULL,
    'Magento\\PageBuilder\\Model\\Catalog\\Sorting\\Price\\LowToHigh' => NULL,
    'Magento\\PageBuilder\\Model\\Catalog\\Sorting\\Position' => NULL,
    'Magento\\PageBuilder\\Model\\Catalog\\Sorting\\PositionBySku' => NULL,
    'Magento\\PageBuilder\\Model\\Catalog\\Sorting\\Price' => NULL,
    'Magento\\PageBuilder\\Model\\Catalog\\Sorting\\Price\\Descending' => NULL,
    'Magento\\PageBuilder\\Model\\Catalog\\Sorting\\Price\\Ascending' => NULL,
    'Magento\\PageBuilder\\Model\\Catalog\\Sorting\\Category\\Position' => NULL,
    'Magento\\PageBuilder\\Model\\Catalog\\Sorting\\Position\\Ascending' => NULL,
    'Magento\\PageBuilder\\Model\\Dom\\HtmlDocumentFactory' => NULL,
    'pageBuilderHtmlDocumentFactory' => NULL,
    'Magento\\Payment\\Gateway\\Config\\ValueHandlerInterface' => NULL,
    'Magento\\Payment\\Gateway\\Config\\ConfigValueHandler' => NULL,
    'VaultPaymentDefaultValueHandler' => NULL,
    'Magento\\Payment\\Gateway\\Config\\ValueHandlerPoolInterface' => NULL,
    'Magento\\Payment\\Gateway\\Config\\ValueHandlerPool' => NULL,
    'VaultPaymentValueHandlerPool' => NULL,
    'Magento\\Paypal\\Model\\PayflowlinkFactory' => NULL,
    'Magento\\Paypal\\Model\\PayflowadvancedFactory' => NULL,
    'Magento\\Paypal\\Model\\ProFactory' => NULL,
    'Magento\\Paypal\\Model\\Payflow\\ProFactory' => NULL,
    'Magento\\Catalog\\Block\\ShortcutInterface' => NULL,
    'Magento\\Paypal\\Block\\Express\\Shortcut' => NULL,
    'Magento\\Paypal\\Block\\WpsExpress\\Shortcut' => NULL,
    'Magento\\Paypal\\Block\\PayflowExpress\\Shortcut' => NULL,
    'Magento\\Paypal\\Block\\Bml\\Shortcut' => NULL,
    'Magento\\Paypal\\Block\\WpsBml\\Shortcut' => NULL,
    'Magento\\Paypal\\Block\\Payflow\\Bml\\Shortcut' => NULL,
    'Magento\\Payment\\Model\\Method\\ConfigInterfaceFactory' => NULL,
    'payflowproConfigFactory' => NULL,
    'payflowlinkConfigFactory' => NULL,
    'Magento\\Payment\\Gateway\\ConfigInterface' => NULL,
    'Magento\\Payment\\Gateway\\Config\\Config' => NULL,
    'PayflowProVaultPaymentConfig' => NULL,
    'PayflowProVaultPaymentValueHandler' => NULL,
    'PayflowProVaultPaymentValueHandlerPool' => NULL,
    'Magento\\Vault\\Model\\VaultPaymentInterface' => NULL,
    'Magento\\Payment\\Model\\MethodInterface' => NULL,
    'Magento\\Vault\\Model\\Method\\Vault' => NULL,
    'PayflowProCreditCardVaultFacade' => NULL,
    'Magento\\Paypal\\Model\\Payflow\\Service\\Response\\ValidatorInterface' => NULL,
    'Magento\\Paypal\\Model\\Payflow\\Service\\Response\\Validator\\ResponseValidator' => NULL,
    'Magento\\Paypal\\Model\\Payflow\\Service\\Response\\Validator\\ResponseValidatorInController' => NULL,
    'Magento\\Payment\\Gateway\\Command\\CommandPoolInterface' => NULL,
    'Magento\\Payment\\Gateway\\Command\\CommandPool' => NULL,
    'PayflowproCommandPool' => NULL,
    'Magento\\Payment\\Gateway\\Command\\CommandManagerInterface' => NULL,
    'Magento\\Payment\\Gateway\\Command\\CommandManager' => NULL,
    'PayflowproCommandManager' => NULL,
    'Magento\\CheckoutAgreements\\Model\\Api\\SearchCriteria\\CollectionProcessor' => NULL,
    'Magento\\CheckoutAgreements\\Model\\Api\\SearchCriteria\\CollectionProcessor\\FilterProcessor' => NULL,
    'Magento\\ReCaptchaAdminUi\\Model\\OptionSource' => NULL,
    'Magento\\ReCaptchaAdminUi\\Model\\OptionSource\\Type' => NULL,
    'Magento\\ReCaptchaVersion2Checkbox\\Model\\OptionSource\\Size' => NULL,
    'Magento\\ReCaptchaVersion2Checkbox\\Model\\OptionSource\\Theme' => NULL,
    'Magento\\ReCaptchaVersion2Invisible\\Model\\OptionSource\\Position' => NULL,
    'Magento\\ReCaptchaVersion2Invisible\\Model\\OptionSource\\Theme' => NULL,
    'Magento\\ReCaptchaVersion3Invisible\\Model\\OptionSource\\Position' => NULL,
    'Magento\\ReCaptchaVersion3Invisible\\Model\\OptionSource\\Theme' => NULL,
    'Magento\\Ui\\DataProvider\\Modifier\\PoolInterface' => NULL,
    'Magento\\Ui\\DataProvider\\Modifier\\Pool' => NULL,
    'notificationPool' => NULL,
    'Magento\\Framework\\Filesystem\\Directory\\WriteFactory' => NULL,
    'remoteWriteFactory' => NULL,
    'Magento\\Framework\\Filesystem\\Directory\\ReadFactory' => NULL,
    'remoteReadFactory' => NULL,
    'Magento\\Framework\\Filesystem' => NULL,
    'Magento\\RemoteStorage\\FilesystemInterface' => NULL,
    'Magento\\RemoteStorage\\Filesystem' => NULL,
    'customRemoteFilesystem' => NULL,
    'fullRemoteFilesystem' => NULL,
    'stdFilesystem' => NULL,
    'requirejsConfigFileSourceBaseFiltered' => NULL,
    'requirejsConfigFileSourceBaseSorted' => NULL,
    'requirejsFileSourceThemeFiltered' => NULL,
    'requirejsFileSourceThemeSorted' => NULL,
    'Magento\\UrlRewrite\\Ui\\Component\\UrlRewrite\\DataProvider\\SearchResult' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'securitytxtResultPage' => NULL,
    'securitytxtResultPageFactory' => NULL,
    'Magento\\Tax\\Model\\Api\\SearchCriteria\\TaxRateCollectionProcessor' => NULL,
    'Magento\\Tax\\Model\\Api\\SearchCriteria\\CollectionProcessor\\TaxRateFilterProcessor' => NULL,
    'Magento\\Framework\\Api\\SearchCriteria\\CollectionProcessor\\JoinProcessor' => NULL,
    'Magento\\Tax\\Model\\Api\\SearchCriteria\\CollectionProcessor\\TaxRuleJoinProcessor' => NULL,
    'Magento\\Tax\\Model\\Api\\SearchCriteria\\CollectionProcessor\\TaxRuleSortingProcessor' => NULL,
    'Magento\\Tax\\Model\\Api\\SearchCriteria\\CollectionProcessor\\TaxRuleFilterProcessor' => NULL,
    'Magento\\Tax\\Model\\Api\\SearchCriteria\\TaxRuleCollectionProcessor' => NULL,
    'Magento\\Framework\\EntityManager\\MapperInterface' => NULL,
    'Magento\\Framework\\EntityManager\\CompositeMapper' => NULL,
    'bulkSummaryMapper' => NULL,
    'Magento\\Framework\\View\\Element\\UiComponent\\DataProvider\\DataProviderInterface' => NULL,
    'Magento\\Framework\\View\\Element\\UiComponent\\DataProvider\\DataProvider' => NULL,
    'Magento\\AsynchronousOperations\\Ui\\Component\\DataProvider' => NULL,
    'Magento\\AsynchronousOperations\\Model\\VirtualType\\PublisherPool' => NULL,
    'Magento\\Framework\\Bulk\\BulkManagementInterface' => NULL,
    'Magento\\AsynchronousOperations\\Model\\BulkManagement' => NULL,
    'Magento\\AsynchronousOperations\\Model\\VirtualType\\BulkManagement' => NULL,
    'Magento\\Framework\\Phrase\\RendererInterface' => NULL,
    'Magento\\Framework\\Phrase\\Renderer\\Composite' => NULL,
    'dataProviderCompositeRenderer' => NULL,
    'translationConfigInitialDataProvider' => NULL,
    'translationConfigSourceAggregated' => NULL,
    'Magento\\AdminAdobeIms\\Logger\\Handler' => NULL,
    'Magento\\Webapi\\Model\\Rest\\Config' => NULL,
    'Magento\\WebapiAsync\\Model\\VirtualType\\Rest\\Config' => NULL,
    'Magento\\Webapi\\Controller\\Rest\\Router' => NULL,
    'Magento\\WebapiAsync\\Controller\\VirtualType\\Rest\\Router' => NULL,
    'Magento\\Webapi\\Controller\\Rest\\RequestValidator' => 
    array (
      'rest_webapi_recaptcha_validation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ReCaptchaWebapiRest\\Plugin\\RestValidationPlugin',
      ),
    ),
    'Magento\\WebapiAsync\\Controller\\VirtualType\\Rest\\RequestValidator' => 
    array (
      'rest_webapi_recaptcha_validation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ReCaptchaWebapiRest\\Plugin\\RestValidationPlugin',
      ),
    ),
    'Magento\\WebapiAsync\\Controller\\Rest\\Asynchronous\\InputParamsResolver' => NULL,
    'Magento\\WebapiAsync\\Controller\\VirtualType\\InputParamsResolver' => NULL,
    'Magento\\AsynchronousOperations\\Model\\OperationRepositoryInterface' => NULL,
    'Magento\\WebapiAsync\\Model\\OperationRepository' => NULL,
    'Magento\\WebapiAsync\\Model\\Bulk\\OperationRepository' => NULL,
    'Magento\\AsynchronousOperations\\Model\\MassSchedule' => NULL,
    'Magento\\WebapiAsync\\Model\\MassSchedule' => NULL,
    'Magento\\WebapiAsync\\Model\\Bulk\\MassSchedule' => NULL,
    'Magento\\Webapi\\Controller\\Rest\\RequestProcessorInterface' => NULL,
    'Magento\\WebapiAsync\\Controller\\Rest\\AsynchronousRequestProcessor' => NULL,
    'Magento\\WebapiAsync\\Controller\\Rest\\VirtualType\\AsynchronousBulkRequestProcessor' => NULL,
    'Magento\\WebapiAsync\\Controller\\Rest\\AsynchronousSchemaRequestProcessor' => NULL,
    'Magento\\WebapiAsync\\Controller\\Rest\\VirtualType\\AsynchronousBulkSchemaRequestProcessor' => NULL,
    'Magento\\Catalog\\Block\\Product\\Context' => NULL,
    'Magento\\Wishlist\\Block\\Context' => NULL,
    'Magento\\Framework\\Setup\\Patch\\DeclarativeSchemaApplyBeforeReader' => NULL,
    'Magento\\Framework\\Setup\\Patch\\PatchApplier' => NULL,
    'Amasty\\Base\\Setup\\Patch\\PatchApplier' => NULL,
    'Amasty\\Base\\Utils\\Http\\Response\\Entity\\Config' => NULL,
    'Amasty\\Base\\Model\\LicenceService\\Response\\Entity\\Config\\RegisteredInstance' => NULL,
    'Amasty\\Base\\Model\\SysInfo\\Provider\\Collector\\CacheService\\Redis\\RedisTypeConfig' => NULL,
    'Amasty\\Base\\Model\\SysInfo\\Provider\\Collector\\CacheService\\Redis\\RedisTypeDefaultConfig' => NULL,
    'Amasty\\Base\\Model\\SysInfo\\Provider\\Collector\\CacheService\\Redis\\RedisTypePageCacheConfig' => NULL,
    'Amasty\\Base\\Model\\SysInfo\\Provider\\Collector\\CacheService\\Redis\\RedisTypeSessionConfig' => NULL,
    'Candela\\Blog\\Model\\ImageUpload' => NULL,
    'Candela\\Blog\\Model\\Blog\\Config\\Reader' => NULL,
    'Candela\\Blog\\Model\\Blog\\Config' => NULL,
    'Candela\\Blog\\Setup\\Patch\\PatchApplier' => NULL,
    'Candela\\Blog\\Model\\XmlSitemap\\Source\\BlogEntitySource' => NULL,
    'Candela\\Blog\\Model\\XmlSitemap\\Source\\BlogAuthor' => NULL,
    'Candela\\Blog\\Model\\XmlSitemap\\Source\\BlogPost' => NULL,
    'Candela\\Blog\\Model\\XmlSitemap\\Source\\BlogCategory' => NULL,
    'Candela\\Blog\\Model\\XmlSitemap\\Source\\BlogTag' => NULL,
    'JobRelationsComposite' => NULL,
    'Firebear\\ImportExport\\Model\\AbstractSchemaLocator' => NULL,
    'PlatformSchemaLocator' => NULL,
    'Firebear\\ImportExport\\Model\\AbstractReader' => NULL,
    'Firebear\\ImportExport\\Model\\Source\\Config\\PlatformReader' => NULL,
    'PlatformReader' => NULL,
    'TypeFileSchemaLocator' => NULL,
    'Firebear\\ImportExport\\Model\\Source\\Config\\SourceReader' => NULL,
    'TypeFileReader' => NULL,
    'FireMenuSchemaLocator' => NULL,
    'FireMenuReader' => NULL,
    'ImportSchemaLocator' => NULL,
    'ImportReader' => NULL,
    'Klevu\\Logger\\Api\\LogLevelComparatorServiceInterface' => NULL,
    'Klevu\\Logger\\Service\\LogLevelComparatorService' => NULL,
    'Klevu\\Logger\\Service\\LogLevelComparatorService\\Monolog' => NULL,
    'Klevu\\Logger\\Service\\LogLevelComparatorService\\Zend' => NULL,
    'Klevu\\Metadata\\Api\\ProductMetadataProviderInterface' => NULL,
    'Klevu\\Metadata\\Provider\\ProductMetadataProvider\\Base' => NULL,
    'Klevu\\Metadata\\Provider\\ProductMetadataProvider\\Simple' => NULL,
    'Klevu\\Metadata\\Provider\\ProductMetadataProvider\\Grouped' => NULL,
    'Klevu\\Metadata\\Provider\\ProductMetadataProvider\\Bundle' => NULL,
    'Klevu\\Metadata\\Provider\\ProductMetadataProvider\\Virtual' => NULL,
    'Klevu\\Metadata\\Provider\\ProductMetadataProvider\\Downloadable' => NULL,
    'Klevu\\Metadata\\Provider\\ProductMetadataProvider\\Giftcard' => NULL,
    'Klevu\\Metadata\\Provider\\ProductMetadataProvider\\Configurable' => NULL,
    'Klevu\\Metadata\\Provider\\ProductMetadataProvider\\Configurable\\WithoutFirstChild' => NULL,
    'Klevu\\Metadata\\Provider\\ProductMetadataProvider' => NULL,
    'Klevu\\Metadata\\Provider\\ProductMetadataProvider\\ForCategory' => NULL,
    'Klevu\\Metadata\\Api\\ProductPriceDataProviderInterface' => NULL,
    'Klevu\\Metadata\\Provider\\ProductPriceDataProvider\\Base' => NULL,
    'Klevu\\Metadata\\Provider\\ProductPriceDataProvider\\Simple' => NULL,
    'Klevu\\Metadata\\Provider\\ProductPriceDataProvider\\Grouped' => NULL,
    'Klevu\\Metadata\\Provider\\ProductPriceDataProvider\\Bundle' => NULL,
    'Klevu\\Metadata\\Provider\\ProductPriceDataProvider\\Virtual' => NULL,
    'Klevu\\Metadata\\Provider\\ProductPriceDataProvider\\Downloadable' => NULL,
    'Klevu\\Metadata\\Provider\\ProductPriceDataProvider\\Giftcard' => NULL,
    'Klevu\\Logger\\Api\\LogFileNameProviderInterface' => NULL,
    'Klevu\\Logger\\Service\\LogFileNameProvider' => NULL,
    'Klevu\\Search\\Service\\LogFileNameProvider\\Search' => NULL,
    'Klevu\\Logger\\Api\\LoggingEnabledServiceInterface' => NULL,
    'Klevu\\Logger\\Service\\LoggingEnabledService' => NULL,
    'Klevu\\Search\\Service\\LoggingEnabledService\\Search' => NULL,
    'Klevu\\Logger\\Logger\\Handler\\LogIfConfigured' => NULL,
    'Klevu\\Search\\Logger\\Handler\\LogIfConfigured\\Search' => NULL,
    'Klevu\\Logger\\Api\\KlevuLoggerInterface' => NULL,
    'Klevu\\Logger\\Logger\\Logger' => NULL,
    'Klevu\\Search\\Logger\\Logger\\Search' => NULL,
    'Klevu\\Search\\Service\\LogFileNameProvider\\PreserveLayout' => NULL,
    'Klevu\\Search\\Service\\LoggingEnabledService\\PreserveLayout' => NULL,
    'Klevu\\Search\\Logger\\Handler\\LogIfConfigured\\PreserveLayout' => NULL,
    'Klevu\\Search\\Logger\\Logger\\PreserveLayout' => NULL,
    'Klevu\\Search\\Model\\System\\Config\\Source\\Frequency' => NULL,
    'Klevu\\Search\\Model\\System\\Config\\Source\\Frequency\\ProductSync' => NULL,
    'Klevu\\Search\\Model\\System\\Config\\Source\\Frequency\\OrderSync' => NULL,
    'Klevu\\Search\\Api\\Service\\Catalog\\Product\\JoinParentStatusToSelectInterface' => NULL,
    'Klevu\\Search\\Service\\Catalog\\Product\\JoinParentStatusToSelect' => NULL,
    'Klevu\\Search\\Service\\Catalog\\Product\\JoinParentStatusToSelect\\Enabled' => NULL,
    'Klevu\\Search\\Service\\Catalog\\Product\\JoinParentStatusToSelect\\Disabled' => NULL,
    'Magento\\Framework\\HTTP\\PhpEnvironment\\RemoteAddress' => NULL,
    'Klevu\\FrontendJs\\HTTP\\PhpEnvironment\\RemoteAddress' => NULL,
    'Klevu\\FrontendJs\\Api\\InteractiveOptionsProviderInterface' => NULL,
    'Klevu\\Search\\Service\\ThemeV2\\InteractiveOptionsProvider' => NULL,
    'Klevu\\Categorynavigation\\Service\\ThemeV2\\InteractiveOptionsProvider' => NULL,
    'Magento\\Framework\\ForeignKey\\Migration\\TableNameArrayIterator' => NULL,
    'OmsTableNameArrayIterator' => NULL,
    'Magento\\Payment\\Model\\SaleOperationInterface' => NULL,
    'Magento\\Payment\\Model\\Method\\Adapter' => NULL,
    'BraintreeFacade' => NULL,
    'BraintreePayPalFacade' => NULL,
    'BraintreePayPalCreditFacade' => NULL,
    'BraintreePayPalPayLaterFacade' => NULL,
    'BraintreeVaultPaymentConfig' => NULL,
    'BraintreeVaultPaymentValueHandler' => NULL,
    'BraintreeVaultPaymentValueHandlerPool' => NULL,
    'BraintreeCreditCardVaultFacade' => NULL,
    'BraintreePayPalVaultPaymentConfig' => NULL,
    'BraintreePayPalVaultPaymentValueHandler' => NULL,
    'BraintreePayPalVaultPaymentValueHandlerPool' => NULL,
    'BraintreePayPalVaultFacade' => NULL,
    'Magento\\Payment\\Model\\Method\\Logger' => NULL,
    'BraintreeLoggerForTransactionSale' => NULL,
    'BraintreeCommandPool' => NULL,
    'BraintreePayPalCommandPool' => NULL,
    'Magento\\Payment\\Gateway\\CommandInterface' => NULL,
    'PayPal\\Braintree\\Gateway\\Command\\CaptureStrategyCommand' => NULL,
    'BraintreeCaptureStrategyCommand' => NULL,
    'BraintreePayPalCaptureStrategyCommand' => NULL,
    'BraintreeCommandManager' => NULL,
    'BraintreePayPalCommandManager' => NULL,
    'PayPal\\Braintree\\Gateway\\Command\\GatewayCommand' => NULL,
    'BraintreeAuthorizeCommand' => NULL,
    'Magento\\Payment\\Gateway\\Request\\BuilderInterface' => NULL,
    'Magento\\Payment\\Gateway\\Request\\BuilderComposite' => NULL,
    'BraintreeAuthorizeRequest' => NULL,
    'BraintreeSaleCommand' => NULL,
    'BraintreeSaleRequest' => NULL,
    'BraintreeCaptureCommand' => NULL,
    'BraintreePartialCaptureCommand' => NULL,
    'BraintreeCaptureRequest' => NULL,
    'BraintreeVaultAuthorizeCommand' => NULL,
    'BraintreeVaultAuthorizeRequest' => NULL,
    'BraintreeVaultSaleCommand' => NULL,
    'BraintreeVaultSaleRequest' => NULL,
    'BraintreeVaultCaptureCommand' => NULL,
    'BraintreeVaultCaptureRequest' => NULL,
    'BraintreePayPalAuthorizeCommand' => NULL,
    'BraintreePayPalAuthorizeRequest' => NULL,
    'BraintreePayPalSaleCommand' => NULL,
    'BraintreePayPalSaleRequest' => NULL,
    'BraintreePayPalVaultAuthorizeCommand' => NULL,
    'BraintreePayPalVaultAuthorizeRequest' => NULL,
    'BraintreePayPalVaultSaleCommand' => NULL,
    'BraintreePayPalVaultSaleRequest' => NULL,
    'BraintreeValueHandlerPool' => NULL,
    'BraintreeConfigValueHandler' => NULL,
    'Magento\\Payment\\Gateway\\Response\\HandlerInterface' => NULL,
    'Magento\\Payment\\Gateway\\Response\\HandlerChain' => NULL,
    'BraintreeAuthorizationHandler' => NULL,
    'BraintreeVaultResponseHandler' => NULL,
    'BraintreePayPalValueHandlerPool' => NULL,
    'BraintreePayPalConfigValueHandler' => NULL,
    'BraintreePayPalResponseHandler' => NULL,
    'BraintreePayPalVaultResponseHandler' => NULL,
    'BraintreeVoidCommand' => NULL,
    'BraintreeRefundCommand' => NULL,
    'Magento\\Payment\\Gateway\\Validator\\ValidatorInterface' => NULL,
    'Magento\\Payment\\Gateway\\Validator\\AbstractValidator' => NULL,
    'Magento\\Payment\\Gateway\\Validator\\CountryValidator' => NULL,
    'BraintreeCountryValidator' => NULL,
    'Magento\\Payment\\Gateway\\Validator\\ValidatorPoolInterface' => NULL,
    'Magento\\Payment\\Gateway\\Validator\\ValidatorPool' => NULL,
    'BraintreeValidatorPool' => NULL,
    'BraintreePayPalCountryValidator' => NULL,
    'BraintreePayPalValidatorPool' => NULL,
    'Magento\\Payment\\Block\\Info' => NULL,
    'Magento\\Payment\\Block\\ConfigurableInfo' => NULL,
    'PayPal\\Braintree\\Block\\Info' => NULL,
    'BraintreePayPalInfo' => NULL,
    'Magento\\Framework\\View\\Element\\UiComponent\\DataProvider\\CollectionFactory' => NULL,
    'BraintreeTransactionsCollectionFactoryForReporting' => NULL,
    'Magento\\Framework\\Api\\Search\\ReportingInterface' => NULL,
    'Magento\\Framework\\View\\Element\\UiComponent\\DataProvider\\Reporting' => NULL,
    'BraintreeTransactionsReporting' => NULL,
    'BraintreeTransactionsDataProvider' => NULL,
    'BraintreeApplePay' => NULL,
    'BraintreeApplePayValueHandlerPool' => NULL,
    'BraintreeApplePayConfigValueHandler' => NULL,
    'BraintreeApplePayConfig' => NULL,
    'BraintreeApplePayValidatorPool' => NULL,
    'BraintreeApplePayCommandPool' => NULL,
    'BraintreeApplePaySaleCommand' => NULL,
    'BraintreeApplePayAuthorizeCommand' => NULL,
    'BraintreeApplePayAuthorizationHandler' => NULL,
    'BraintreeApplePayAuthorizeRequest' => NULL,
    'BraintreeApplePaySaleRequest' => NULL,
    'BraintreeApplePayCaptureStrategyCommand' => NULL,
    'BraintreeGooglePay' => NULL,
    'BraintreeGooglePayValueHandlerPool' => NULL,
    'BraintreeGooglePayConfigValueHandler' => NULL,
    'BraintreeGooglePayConfig' => NULL,
    'BraintreeGooglePayValidatorPool' => NULL,
    'BraintreeGooglePayCommandPool' => NULL,
    'BraintreeGooglePaySaleCommand' => NULL,
    'BraintreeGooglePayAuthorizeCommand' => NULL,
    'BraintreeGooglePayAuthorizationHandler' => NULL,
    'BraintreeGooglePayAuthorizeRequest' => NULL,
    'BraintreeGooglePaySaleRequest' => NULL,
    'BraintreeGooglePayCaptureStrategyCommand' => NULL,
    'BraintreeVenmo' => NULL,
    'BraintreeVenmoValueHandlerPool' => NULL,
    'BraintreeVenmoConfigValueHandler' => NULL,
    'BraintreeVenmoConfig' => NULL,
    'BraintreeVenmoValidatorPool' => NULL,
    'BraintreeVenmoCommandPool' => NULL,
    'BraintreeVenmoAuthorizeCommand' => NULL,
    'BraintreeVenmoSaleCommand' => NULL,
    'BraintreeVenmoCaptureStrategyCommand' => NULL,
    'BraintreeVenmoAuthorizeRequest' => NULL,
    'BraintreeVenmoAuthorizationHandler' => NULL,
    'BraintreeVenmoSaleRequest' => NULL,
    'BraintreeAch' => NULL,
    'BraintreeAchValueHandlerPool' => NULL,
    'BraintreeAchConfigValueHandler' => NULL,
    'BraintreeAchConfig' => NULL,
    'BraintreeAchValidatorPool' => NULL,
    'BraintreeAchCommandPool' => NULL,
    'BraintreeAchAuthorizeCommand' => NULL,
    'BraintreeAchSaleCommand' => NULL,
    'BraintreeAchCaptureStrategyCommand' => NULL,
    'BraintreeAchAuthorizeRequest' => NULL,
    'BraintreeAchAuthorizationHandler' => NULL,
    'BraintreeAchSaleRequest' => NULL,
    'BraintreeLpm' => NULL,
    'BraintreeLpmValueHandlerPool' => NULL,
    'BraintreeLpmConfigValueHandler' => NULL,
    'BraintreeLpmConfig' => NULL,
    'BraintreeLpmValidatorPool' => NULL,
    'BraintreeLpmCommandPool' => NULL,
    'BraintreeLpmAuthorizeCommand' => NULL,
    'BraintreeLpmSaleCommand' => NULL,
    'BraintreeLpmCaptureStrategyCommand' => NULL,
    'BraintreeLpmAuthorizeRequest' => NULL,
    'BraintreeLpmAuthorizationHandler' => NULL,
    'BraintreeLpmSaleRequest' => NULL,
    'SezzleLogger' => NULL,
    'SezzleVirtualDebugHandler' => NULL,
    'SezzleVirtualLogger' => NULL,
    'SezzleFacade' => NULL,
    'SezzleValueHandlerPool' => NULL,
    'SezzleConfigValueHandler' => NULL,
    'SezzleCountryValidator' => NULL,
    'SezzleValidatorPool' => NULL,
    'SezzleCommandPool' => NULL,
    'Magento\\Payment\\Gateway\\Command\\GatewayCommand' => NULL,
    'Sezzle\\Sezzlepay\\Gateway\\Command\\CaptureCommand' => NULL,
    'SezzleCaptureCommand' => NULL,
    'SezzleRefundCommand' => NULL,
    'SezzleReleaseCommand' => NULL,
    'Magento\\Payment\\Gateway\\Http\\TransferFactoryInterface' => NULL,
    'Sezzle\\Sezzlepay\\Gateway\\Http\\TransferFactory' => NULL,
    'Sezzle\\Sezzlepay\\Gateway\\Http\\CaptureTransferFactory' => NULL,
    'Sezzle\\Sezzlepay\\Gateway\\Http\\RefundTransferFactory' => NULL,
    'Sezzle\\Sezzlepay\\Gateway\\Http\\ReleaseTransferFactory' => NULL,
    'Sezzle\\Sezzlepay\\Gateway\\Http\\OrderTransferFactory' => NULL,
    'Sezzle\\Sezzlepay\\Gateway\\Command\\ValidateOrderCommand' => NULL,
    'Sezzle\\Sezzlepay\\Gateway\\Http\\CustomerOrderTransferFactory' => NULL,
    'Sezzle\\Sezzlepay\\Gateway\\Command\\CustomerOrderCommand' => NULL,
    'Sezzle\\Sezzlepay\\Gateway\\Http\\ReauthorizeOrderTransferFactory' => NULL,
    'Sezzle\\Sezzlepay\\Gateway\\Command\\ReauthorizeOrderCommand' => NULL,
    'SezzleSessionRequest' => NULL,
    'Sezzle\\Sezzlepay\\Gateway\\Http\\V2TransferFactory' => NULL,
    'Yireo\\NextGenImages\\Logger\\CustomLogger' => NULL,
    'Yireo\\NextGenImages\\Logger\\CustomLogHandler' => NULL,
    'Magento\\Backend\\Block\\Template' => NULL,
    'Magento\\Framework\\Data\\Form\\Element\\Renderer\\RendererInterface' => NULL,
    'Magento\\Config\\Block\\System\\Config\\Form\\Field' => NULL,
    'Yireo\\NextGenImages\\Block\\Adminhtml\\System\\Config\\ModuleVersion' => NULL,
    'Yireo\\Webp2\\VirtualType\\Block\\Adminhtml\\System\\Config\\ModuleVersion' => NULL,
    'Magento\\Framework\\DB\\Adapter\\AdapterInterface' => 
    array (
      'execute_commit_callbacks' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\Model\\ExecuteCommitCallbacks',
      ),
    ),
    'Laminas\\Stdlib\\MessageInterface' => NULL,
    'Laminas\\Stdlib\\Message' => NULL,
    'Laminas\\Http\\AbstractMessage' => NULL,
    'Laminas\\Stdlib\\ResponseInterface' => NULL,
    'Laminas\\Http\\Response' => NULL,
    'Laminas\\Http\\PhpEnvironment\\Response' => NULL,
    'Magento\\Framework\\App\\Response\\HttpInterface' => NULL,
    'Magento\\Framework\\App\\ResponseInterface' => NULL,
    'Magento\\Framework\\HTTP\\PhpEnvironment\\Response' => NULL,
    'Magento\\Framework\\App\\Response\\Http' => 
    array (
      'genericHeaderPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Response\\HeaderManager',
      ),
    ),
    'Magento\\Framework\\App\\ActionInterface' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Framework\\Url\\SecurityInfoInterface' => NULL,
    'Magento\\Framework\\Url\\SecurityInfo' => 
    array (
      'storeUrlSecurityInfo' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\Url\\Plugin\\SecurityInfo',
      ),
    ),
    'Magento\\Framework\\Url\\RouteParamsResolverInterface' => NULL,
    'Magento\\Framework\\Url\\RouteParamsResolver' => 
    array (
      'storeUrlRouteParamsResolver' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\Url\\Plugin\\RouteParamsResolver',
      ),
    ),
    'Magento\\Framework\\Model\\AbstractModel' => NULL,
    'Magento\\Framework\\Api\\CustomAttributesDataInterface' => NULL,
    'Magento\\Framework\\Api\\ExtensibleDataInterface' => NULL,
    'Magento\\Framework\\Model\\AbstractExtensibleModel' => NULL,
    'Magento\\Framework\\App\\ScopeInterface' => NULL,
    'Magento\\Framework\\Url\\ScopeInterface' => 
    array (
      'urlSignature' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Url\\Plugin\\Signature',
      ),
    ),
    'Magento\\Framework\\DataObject\\IdentityInterface' => NULL,
    'Magento\\Store\\Api\\Data\\StoreInterface' => NULL,
    'Magento\\Store\\Model\\Store' => 
    array (
      'urlSignature' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Url\\Plugin\\Signature',
      ),
      'themeDesignConfigGridIndexerStore' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Indexer\\Design\\Config\\Plugin\\Store',
      ),
    ),
    'Magento\\Framework\\Session\\SidResolverInterface' => NULL,
    'Magento\\Framework\\Session\\SidResolver' => 
    array (
      'pagebuilder_preview_sid_resolving' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageBuilder\\Plugin\\Framework\\Session\\SidResolver',
      ),
    ),
    'Magento\\Framework\\Config\\ConverterInterface' => NULL,
    'Magento\\Framework\\App\\Config\\Initial\\Converter' => 
    array (
      'cron_system_config_initial_converter_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Cron\\Model\\System\\Config\\Initial\\Converter',
      ),
    ),
    'Magento\\Framework\\App\\FrontControllerInterface' => 
    array (
      'configHash' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Deploy\\Model\\Plugin\\ConfigChangeDetector',
      ),
    ),
    'Magento\\Framework\\App\\FrontController' => 
    array (
      'storeCookieValidate' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\Model\\Plugin\\StoreCookie',
      ),
      'install' => 
      array (
        'sortOrder' => 40,
        'instance' => 'Magento\\Framework\\Module\\Plugin\\DbStatusValidator',
      ),
      'configHash' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Deploy\\Model\\Plugin\\ConfigChangeDetector',
      ),
    ),
    'Magento\\Cms\\Model\\Wysiwyg\\Images\\Storage' => 
    array (
      'media_gallery_image_remove_metadata_after_wysiwyg' => 
      array (
        'sortOrder' => 10,
        'disabled' => false,
        'instance' => 'Magento\\MediaGallery\\Plugin\\Wysiwyg\\Images\\Storage',
      ),
    ),
    'Magento\\ImportExport\\Model\\Import\\Entity\\AbstractEntity' => NULL,
    'Magento\\AdvancedPricingImportExport\\Model\\Import\\AdvancedPricing' => 
    array (
      'invalidateAdvancedPriceIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdvancedPricingImportExport\\Model\\Indexer\\Product\\Price\\Plugin\\Import',
      ),
    ),
    'Magento\\Theme\\Api\\DesignConfigRepositoryInterface' => NULL,
    'Magento\\Theme\\Model\\DesignConfigRepository' => 
    array (
      'save_design_settings_event_dispatching' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Design\\Config\\Plugin',
      ),
    ),
    'Magento\\Store\\Api\\Data\\WebsiteInterface' => NULL,
    'Magento\\Store\\Model\\Website' => 
    array (
      'themeDesignConfigGridIndexerWebsite' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Indexer\\Design\\Config\\Plugin\\Website',
      ),
    ),
    'Magento\\Store\\Api\\Data\\GroupInterface' => NULL,
    'Magento\\Store\\Model\\Group' => 
    array (
      'themeDesignConfigGridIndexerStoreGroup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Indexer\\Design\\Config\\Plugin\\StoreGroup',
      ),
    ),
    'Magento\\Framework\\MessageQueue\\Consumer\\Config\\ReaderInterface' => NULL,
    'Magento\\Framework\\MessageQueue\\Consumer\\Config\\CompositeReader' => 
    array (
      'queueConfigPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\MessageQueue\\Config\\Consumer\\ConfigReaderPlugin',
      ),
    ),
    'Magento\\Framework\\MessageQueue\\Publisher\\Config\\ReaderInterface' => NULL,
    'Magento\\Framework\\MessageQueue\\Publisher\\Config\\CompositeReader' => 
    array (
      'queueConfigPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\MessageQueue\\Config\\Publisher\\ConfigReaderPlugin',
      ),
    ),
    'Magento\\Framework\\MessageQueue\\Topology\\Config\\ReaderInterface' => NULL,
    'Magento\\Framework\\MessageQueue\\Topology\\Config\\CompositeReader' => 
    array (
      'queueConfigPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\MessageQueue\\Config\\Topology\\ConfigReaderPlugin',
      ),
    ),
    'Magento\\Framework\\App\\Config\\ValueInterface' => NULL,
    'Magento\\Framework\\App\\Config\\Value' => 
    array (
      'admin_system_config_media_gallery_renditions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryRenditions\\Plugin\\UpdateRenditionsOnConfigChange',
      ),
      'admin_system_config_adobe_stock_save_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGallerySynchronization\\Plugin\\MediaGallerySyncTrigger',
      ),
      'webapiResourceSecurityCacheInvalidate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiSecurity\\Model\\Plugin\\CacheInvalidator',
      ),
    ),
    'Magento\\Backend\\Model\\Auth\\StorageInterface' => NULL,
    'Magento\\Backend\\Model\\Auth\\Session' => 
    array (
      'admin_adobe_ims_backend_auth_session' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\BackendAuthSessionPlugin',
      ),
    ),
    'Magento\\Authorization\\Model\\Role' => 
    array (
      'updateRoleUsersAcl' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\User\\Model\\Plugin\\AuthorizationRole',
      ),
    ),
    'Magento\\Eav\\Model\\ResourceModel\\Entity\\Attribute' => 
    array (
      'storeLabelCaching' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Eav\\Plugin\\Model\\ResourceModel\\Entity\\Attribute',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\EntityInterface' => NULL,
    'Magento\\Eav\\Model\\ResourceModel\\Attribute\\DefaultEntityAttributes\\ProviderInterface' => NULL,
    'Magento\\Eav\\Model\\Entity\\AbstractEntity' => 
    array (
      'clean_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Cache\\FlushCacheByTags',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\VersionControl\\AbstractEntity' => 
    array (
      'clean_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Cache\\FlushCacheByTags',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Customer' => 
    array (
      'clean_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Cache\\FlushCacheByTags',
      ),
      'recollect_quote_on_customer_group_change' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Checkout\\Model\\Plugin\\RecollectQuoteOnCustomerGroupChange',
      ),
    ),
    'Magento\\Customer\\Api\\CustomerRepositoryInterface' => 
    array (
      'transactionWrapper' => 
      array (
        'sortOrder' => -1,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerRepository\\TransactionWrapper',
      ),
      'login_as_customer_customer_repository_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerAssistance\\Plugin\\CustomerPlugin',
      ),
      'update_newsletter_subscription_on_customer_update' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Newsletter\\Model\\Plugin\\CustomerPlugin',
      ),
    ),
    'Magento\\PageCache\\Observer\\FlushFormKey' => 
    array (
      'customerFlushFormKey' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerFlushFormKey',
      ),
    ),
    'Magento\\Customer\\Api\\AccountManagementInterface' => NULL,
    'Magento\\Customer\\Model\\AccountManagement' => 
    array (
      'security_check_customer_password_reset_attempt' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Security\\Model\\Plugin\\AccountManagement',
      ),
    ),
    'Magento\\Customer\\Api\\GroupRepositoryInterface' => 
    array (
      'saveCustomerGroupExcludedWebsite' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\SaveCustomerGroupExcludedWebsite',
      ),
      'deleteCustomerGroupExcludedWebsite' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\DeleteCustomerGroupExcludedWebsite',
      ),
      'getByIdCustomerGroupExcludedWebsite' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\GetByIdCustomerGroupExcludedWebsite',
      ),
      'getListCustomerGroupExcludedWebsite' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\GetListCustomerGroupExcludedWebsite',
      ),
      'invalidatePriceIndexerOnCustomerGroup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Price\\Plugin\\CustomerGroup',
      ),
    ),
    'Magento\\Indexer\\Model\\Config\\Data' => 
    array (
      'indexerCategoryFlatConfigGet' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Flat\\Plugin\\IndexerConfigData',
      ),
      'indexerProductFlatConfigGet' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Flat\\Plugin\\IndexerConfigData',
      ),
    ),
    'Magento\\Indexer\\Model\\Processor' => 
    array (
      'page-cache-indexer-reindex-clean-cache' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Indexer\\Model\\Processor\\CleanCache',
      ),
    ),
    'Magento\\Framework\\Indexer\\ActionInterface' => 
    array (
      'cache_cleaner_after_reindex' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Indexer\\Model\\Indexer\\CacheCleaner',
      ),
    ),
    'Magento\\Framework\\Indexer\\CacheContext' => 
    array (
      'defer_cache_cleaning' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Indexer\\Model\\Indexer\\DeferCacheCleaning',
      ),
    ),
    'Magento\\CatalogImportExport\\Model\\StockItemImporterInterface' => 
    array (
      'update_grouped_product_stock_status_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedImportExport\\Plugin\\CatalogImportExport\\Model\\StockItemImporter\\UpdateGroupedProductStockStatusPlugin',
      ),
      'importStockItemDataForSourceItemUpdate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Firebear\\ImportExport\\Plugin\\Import\\SourceItemImporter',
      ),
      'update_configurable_products_stock_item_status' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\ConfigurableImportExport\\Plugin\\Import\\Product\\UpdateConfigurableProductsStockItemStatusPlugin',
      ),
      'update_bundle_products_stock_item_status' => 
      array (
        'sortOrder' => 200,
        'instance' => 'Magento\\BundleImportExport\\Plugin\\Import\\Product\\UpdateBundleProductsStockItemStatusPlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\AbstractModel' => NULL,
    'Magento\\Framework\\Pricing\\SaleableInterface' => NULL,
    'Magento\\Catalog\\Api\\Data\\ProductInterface' => NULL,
    'Magento\\Catalog\\Model\\Product' => 
    array (
      'catalogInventoryAfterLoad' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\Plugin\\AfterProductLoad',
      ),
      'product_identities_extender' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Plugin\\ProductIdentitiesExtender',
      ),
      'exclude_swatch_attribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\Product',
      ),
      'cms' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Cms\\Model\\Plugin\\Product',
      ),
      'add_bundle_parent_identities' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Bundle\\Model\\Plugin\\ProductIdentitiesExtender',
      ),
    ),
    'Magento\\Cms\\Api\\PageRepositoryInterface' => NULL,
    'Magento\\Cms\\Model\\PageRepository\\ValidationComposite' => 
    array (
      'cms_validate_url_plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CmsUrlRewrite\\Plugin\\Cms\\Model\\PageRepository\\ValidationCompositePlugin',
      ),
    ),
    'Magento\\ImportExport\\Model\\AbstractModel' => NULL,
    'Magento\\ImportExport\\Model\\Import' => 
    array (
      'catalogProductFlatIndexerImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Product\\Flat\\Plugin\\Import',
      ),
      'invalidatePriceIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Product\\Price\\Plugin\\Import',
      ),
      'invalidateStockIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Stock\\Plugin\\Import',
      ),
      'invalidateEavIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Product\\Eav\\Plugin\\Import',
      ),
      'invalidateProductCategoryIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Product\\Category\\Plugin\\Import',
      ),
      'invalidateCategoryProductIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Category\\Product\\Plugin\\Import',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Visitor' => 
    array (
      'catalogLog' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Plugin\\Log',
      ),
      'reportLog' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Reports\\Model\\Plugin\\Log',
      ),
    ),
    'Magento\\Ui\\DataProvider\\AbstractDataProvider' => NULL,
    'Magento\\Ui\\DataProvider\\ModifierPoolDataProvider' => NULL,
    'Magento\\Catalog\\Model\\Category\\DataProvider' => 
    array (
      'set_page_layout_default_value' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Plugin\\SetPageLayoutDefaultValue',
      ),
    ),
    'Magento\\Theme\\Block\\Html\\Topmenu' => 
    array (
      'catalogTopmenu' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Block\\Topmenu',
      ),
    ),
    'Magento\\Framework\\Mview\\View\\StateInterface' => 
    array (
      'setStatusForMview' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Plugin\\MviewState',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Website' => 
    array (
      'invalidatePriceIndexerOnWebsite' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Price\\Plugin\\Website',
      ),
      'categoryProductWebsiteAfterDelete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Plugin\\Website',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Store' => 
    array (
      'storeViewResourceAroundSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Flat\\Plugin\\StoreView',
      ),
      'catalogProductFlatIndexerStore' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Flat\\Plugin\\Store',
      ),
      'categoryStoreAroundSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Plugin\\StoreView',
      ),
      'productAttributesStoreViewSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Eav\\Plugin\\StoreView',
      ),
      'catalogsearchFulltextIndexerStoreView' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Store\\View',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Group' => 
    array (
      'storeGroupResourceAroundSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Flat\\Plugin\\StoreGroup',
      ),
      'catalogProductFlatIndexerStoreGroup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Flat\\Plugin\\StoreGroup',
      ),
      'categoryStoreGroupAroundSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Plugin\\StoreGroup',
      ),
      'storeGroupResourceAroundBeforeSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\Indexer\\Stock\\Plugin\\StoreGroup',
      ),
      'catalogsearchFulltextIndexerStoreGroup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Store\\Group',
      ),
    ),
    'Magento\\Eav\\Api\\Data\\AttributeSetInterface' => NULL,
    'Magento\\Eav\\Model\\Entity\\Attribute\\Set' => 
    array (
      'invalidateEavIndexerOnAttributeSetSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Eav\\Plugin\\AttributeSet',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\TypeTransitionManager' => 
    array (
      'downloadable_product_transition' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Downloadable\\Model\\Product\\TypeTransitionManager\\Plugin\\Downloadable',
      ),
      'configurable_product_transition' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Product\\TypeTransitionManager\\Plugin\\Configurable',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Config\\Backend\\AbstractValue' => 
    array (
      'admin_system_config_media_gallery_renditions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryRenditions\\Plugin\\UpdateRenditionsOnConfigChange',
      ),
      'admin_system_config_adobe_stock_save_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGallerySynchronization\\Plugin\\MediaGallerySyncTrigger',
      ),
      'webapiResourceSecurityCacheInvalidate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiSecurity\\Model\\Plugin\\CacheInvalidator',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Config\\Backend\\ShowOutOfStock' => 
    array (
      'admin_system_config_media_gallery_renditions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryRenditions\\Plugin\\UpdateRenditionsOnConfigChange',
      ),
      'admin_system_config_adobe_stock_save_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGallerySynchronization\\Plugin\\MediaGallerySyncTrigger',
      ),
      'webapiResourceSecurityCacheInvalidate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiSecurity\\Model\\Plugin\\CacheInvalidator',
      ),
      'showOutOfStockValueChanged' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Plugin\\ShowOutOfStockConfig',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Config' => 
    array (
      'productListingAttributesCaching' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\ResourceModel\\Config',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\Attribute\\Backend\\BackendInterface' => NULL,
    'Magento\\Eav\\Model\\Entity\\Attribute\\Backend\\AbstractBackend' => 
    array (
      'attributeValidation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\Attribute\\Backend\\AttributeValidation',
      ),
      'ConfigurableProduct::skipValidation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Model\\Attribute\\Backend\\AttributeValidation',
      ),
    ),
    'Magento\\Sales\\Api\\OrderItemRepositoryInterface' => 
    array (
      'get_gift_message' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Plugin\\OrderItemGet',
      ),
    ),
    'Magento\\Eav\\Model\\ResourceModel\\ReadHandler' => NULL,
    'Magento\\Eav\\Model\\ResourceModel\\ReadSnapshot' => 
    array (
      'catalogReadSnapshot' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\ResourceModel\\ReadSnapshotPlugin',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Item\\ToOrderItem' => 
    array (
      'copy_quote_files_to_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Plugin\\QuoteItemProductOption',
      ),
      'append_bundle_data_to_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Bundle\\Model\\Plugin\\QuoteItem',
      ),
      'gift_message_quote_item_conversion' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Plugin\\QuoteItem',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\Helper' => 
    array (
      'weeeAttributeOptionsProcess' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Plugin\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\Helper\\ProcessTaxAttribute',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductRepositoryInterface' => 
    array (
      'remove_images_from_gallery_after_removing_product' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\RemoveImagesFromGalleryAfterRemovingProduct',
      ),
      'configurableProductSaveOptions' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Plugin\\ProductRepositorySave',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductAttributeRepositoryInterface' => NULL,
    'Magento\\Framework\\Api\\MetadataServiceInterface' => NULL,
    'Magento\\Catalog\\Model\\Product\\Attribute\\Repository' => 
    array (
      'filterCustomAttribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\Plugin\\FilterCustomAttribute',
      ),
      'process_extension_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageBuilder\\Plugin\\Catalog\\Model\\Product\\Attribute\\RepositoryPlugin',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\AbstractProduct' => 
    array (
      'add_product_object_to_image_data_array' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\ProductImage',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\View' => 
    array (
      'add_product_object_to_image_data_array' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\ProductImage',
      ),
      'quantityValidators' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Block\\Plugin\\ProductView',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Action' => 
    array (
      'ReindexUpdatedProducts' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\Plugin\\ReindexUpdatedProducts',
      ),
      'catalogsearchFulltextMassAction' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Product\\Action',
      ),
      'update_url_rewrites_after_websites_update_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Plugin\\Catalog\\Model\\Product\\UpdateProductWebsiteUrlRewrites',
      ),
      'quoteProductMassChange' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Model\\Product\\Plugin\\MarkQuotesRecollectMassDisabled',
      ),
      'fb_update_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Firebear\\ImportExport\\Plugin\\Import\\Action',
      ),
    ),
    'Magento\\Framework\\App\\Action\\AbstractAction' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Framework\\App\\Action\\Action' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Backend\\App\\AbstractAction' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Backend\\App\\Action' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Framework\\App\\Action\\HttpPostActionInterface' => NULL,
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'massAction' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Plugin\\MassUpdateProductAttribute',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\AbstractResource' => 
    array (
      'clean_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Cache\\FlushCacheByTags',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product' => 
    array (
      'clean_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Cache\\FlushCacheByTags',
      ),
      'catalogsearchFulltextProduct' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Product',
      ),
      'clean_quote_items_after_product_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Model\\Product\\Plugin\\RemoveQuoteItems',
      ),
      'update_quote_items_after_product_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Model\\Product\\Plugin\\UpdateQuoteItems',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Category' => 
    array (
      'clean_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Cache\\FlushCacheByTags',
      ),
      'catalogsearchFulltextCategory' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Category',
      ),
      'category_move_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Category\\Move',
      ),
      'category_delete_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Category\\Remove',
      ),
      'update_url_path_for_different_stores' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Category\\UpdateUrlPath',
      ),
    ),
    'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\AbstractAction' => NULL,
    'Magento\\Catalog\\Model\\Indexer\\Product\\Category\\Action\\Rows' => 
    array (
      'catalogsearchFulltextCategoryAssignment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Product\\Category\\Action\\Rows',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Attribute' => 
    array (
      'storeLabelCaching' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Eav\\Plugin\\Model\\ResourceModel\\Entity\\Attribute',
      ),
      'catalogsearchFulltextIndexerAttribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Attribute',
      ),
      'catalogsearchAttributeSearchWeightCache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Attribute\\SearchWeight',
      ),
      'updateElasticsearchIndexerMapping' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Elasticsearch\\Model\\Indexer\\Fulltext\\Plugin\\Category\\Product\\Attribute',
      ),
    ),
    'Magento\\Framework\\Search\\Request\\Config\\FilesystemReader' => 
    array (
      'catalogSearchDynamicFields' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Search\\ReaderPlugin',
      ),
      'productAttributesDynamicFields' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogGraphQl\\Plugin\\Search\\Request\\ConfigReader',
      ),
    ),
    'Magento\\Catalog\\Model\\Layer\\CollectionFilterInterface' => NULL,
    'Magento\\Catalog\\Model\\Layer\\Search\\CollectionFilter' => 
    array (
      'searchQuery' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Layer\\Search\\Plugin\\CollectionFilter',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Action\\DataProvider' => 
    array (
      'stockedProductsFilterPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Plugin\\StockedProductsFilterPlugin',
      ),
    ),
    'Magento\\UrlRewrite\\Model\\StorageInterface' => 
    array (
      'storage_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Storage',
      ),
    ),
    'Magento\\UrlRewrite\\Model\\UrlPersistInterface' => NULL,
    'Magento\\UrlRewrite\\Model\\UrlFinderInterface' => NULL,
    'Magento\\UrlRewrite\\Model\\Storage\\AbstractStorage' => 
    array (
      'storage_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Storage',
      ),
    ),
    'Magento\\UrlRewrite\\Model\\Storage\\DbStorage' => 
    array (
      'storage_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Storage',
      ),
    ),
    'Magento\\CatalogUrlRewrite\\Model\\Storage\\DbStorage' => 
    array (
      'storage_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Storage',
      ),
      'dynamic_storage_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Plugin\\DynamicCategoryRewrites',
      ),
    ),
    'Magento\\Framework\\View\\Asset\\MergeService' => 
    array (
      'cleanMergedJsCss' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaStorage\\Model\\Asset\\Plugin\\CleanMergedJsCss',
      ),
    ),
    'Magento\\Quote\\Api\\CartRepositoryInterface' => NULL,
    'Magento\\Quote\\Model\\QuoteRepository' => 
    array (
      'multishipping_quote_repository' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Multishipping\\Plugin\\MultishippingQuoteRepository',
      ),
    ),
    'Magento\\Catalog\\Api\\TierPriceStorageInterface' => 
    array (
      'update_quote_items_after_tier_prices_update' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Model\\Product\\Plugin\\UpdateQuote',
      ),
    ),
    'Magento\\MediaGallerySynchronizationApi\\Model\\ImportFilesInterface' => NULL,
    'Magento\\MediaGallerySynchronizationApi\\Model\\ImportFilesComposite' => 
    array (
      'createMediaGalleryThumbnails' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryUi\\Plugin\\CreateThumbnails',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Page' => 
    array (
      'cms_url_rewrite_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CmsUrlRewrite\\Plugin\\Cms\\Model\\ResourceModel\\Page',
      ),
    ),
    'Magento\\Integration\\Api\\IntegrationServiceInterface' => 
    array (
      'webapiIntegrationService' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Integration\\Model\\Plugin\\Integration',
      ),
    ),
    'Magento\\Backend\\Model\\Auth\\Credential\\StorageInterface' => NULL,
    'Magento\\User\\Api\\Data\\UserInterface' => NULL,
    'Magento\\User\\Model\\User' => 
    array (
      'revokeTokensFromInactiveAdmins' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Integration\\Plugin\\Model\\AdminUser',
      ),
    ),
    'Magento\\Customer\\Model\\Customer' => 
    array (
      'revokeTokensFromInactiveCustomers' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Integration\\Plugin\\Model\\CustomerUser',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\View' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Creditmemo' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\OrderInterface' => NULL,
    'Magento\\Framework\\App\\Action\\HttpGetActionInterface' => NULL,
    'Magento\\Framework\\App\\Action\\HttpHeadActionInterface' => NULL,
    'Magento\\Sales\\Controller\\Order\\Creditmemo' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\History' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Invoice' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Invoice' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintAction' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintAction' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintCreditmemo' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintCreditmemo' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintInvoice' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintInvoice' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintShipment' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintShipment' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Reorder' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Reorder' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Shipment' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Shipment' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\View' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Handler\\Address' => 
    array (
      'addressUpdate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Model\\Order\\Invoice\\Plugin\\AddressUpdate',
      ),
    ),
    'Magento\\Config\\Model\\Config\\Structure\\Converter' => 
    array (
      'cron_backend_config_structure_converter_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Cron\\Model\\Backend\\Config\\Structure\\Converter',
      ),
    ),
    'Magento\\Framework\\View\\Layout\\ProcessorInterface' => NULL,
    'Magento\\Framework\\View\\Model\\Layout\\Merge' => 
    array (
      'widget-layout-update-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Widget\\Model\\ResourceModel\\Layout\\Plugin',
      ),
    ),
    'Magento\\Config\\Model\\Config\\Backend\\Baseurl' => 
    array (
      'admin_system_config_media_gallery_renditions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryRenditions\\Plugin\\UpdateRenditionsOnConfigChange',
      ),
      'admin_system_config_adobe_stock_save_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGallerySynchronization\\Plugin\\MediaGallerySyncTrigger',
      ),
      'webapiResourceSecurityCacheInvalidate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiSecurity\\Model\\Plugin\\CacheInvalidator',
      ),
      'updateAnalyticsSubscription' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Analytics\\Model\\Plugin\\BaseUrlConfigPlugin',
      ),
    ),
    'Magento\\Integration\\Model\\Validator\\BearerTokenValidator' => 
    array (
      'allow_bearer_token' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Analytics\\Plugin\\BearerTokenValidatorPlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\CartConfiguration' => 
    array (
      'Downloadable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Downloadable\\Model\\Product\\CartConfiguration\\Plugin\\Downloadable',
      ),
      'isProductConfigured' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Model\\Product\\Cart\\Configuration\\Plugin\\Grouped',
      ),
      'configurable_product' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Product\\CartConfiguration\\Plugin\\Configurable',
      ),
    ),
    'Magento\\Checkout\\Block\\Checkout\\LayoutProcessorInterface' => NULL,
    'Magento\\Checkout\\Block\\Cart\\LayoutProcessor' => 
    array (
      'checkout_cart_shipping_dhl' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Dhl\\Model\\Plugin\\Checkout\\Block\\Cart\\Shipping',
      ),
      'checkout_cart_shipping_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\OfflineShipping\\Model\\Plugin\\Checkout\\Block\\Cart\\Shipping',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Backend\\Price' => 
    array (
      'attributeValidation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\Attribute\\Backend\\AttributeValidation',
      ),
      'ConfigurableProduct::skipValidation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Model\\Attribute\\Backend\\AttributeValidation',
      ),
      'bundle' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Bundle\\Model\\Plugin\\PriceBackend',
      ),
      'configurable' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Plugin\\PriceBackend',
      ),
    ),
    'Magento\\Sales\\Model\\AbstractModel' => NULL,
    'Magento\\Sales\\Api\\Data\\OrderItemInterface' => NULL,
    'Magento\\Sales\\Model\\Order\\Item' => 
    array (
      'bundle' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Bundle\\Model\\Sales\\Order\\Plugin\\Item',
      ),
    ),
    'Magento\\Quote\\Api\\CartManagementInterface' => 
    array (
      'order_cancellation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'PayPal\\Braintree\\Plugin\\OrderCancellation',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteManagement' => 
    array (
      'order_cancellation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'PayPal\\Braintree\\Plugin\\OrderCancellation',
      ),
      'validate_purchase_order_number' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\OfflinePayments\\Plugin\\ValidatePurchaseOrderNumber',
      ),
      'update_bundle_quote_item_options' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Bundle\\Plugin\\Quote\\UpdateBundleQuoteItemOptions',
      ),
      'coupon_uses_increment_plugin' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\SalesRule\\Plugin\\CouponUsagesIncrement',
      ),
    ),
    'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Action\\Rows' => 
    array (
      'catalogsearchFulltextProductAssignment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Elasticsearch\\Model\\Indexer\\Fulltext\\Plugin\\Category\\Product\\Action\\Rows',
      ),
    ),
    'Magento\\Elasticsearch\\SearchAdapter\\DocumentFactory' => 
    array (
      'Klevu_Search_Plugin_Elasticsearch_SearchAdapter' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Klevu\\Search\\Plugin\\Elasticsearch\\SearchAdapter\\DocumentFactory',
      ),
    ),
    'Magento\\Framework\\Indexer\\Config\\DependencyInfoProviderInterface' => NULL,
    'Magento\\Framework\\Indexer\\Config\\DependencyInfoProvider' => 
    array (
      'indexerDependencyUpdaterPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Elasticsearch\\Model\\Indexer\\Plugin\\DependencyUpdaterPlugin',
      ),
    ),
    'Magento\\Search\\Model\\ResourceModel\\SynonymGroup' => 
    array (
      'synonymReaderPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Elasticsearch\\Model\\Indexer\\Fulltext\\Plugin\\Search\\Model\\SynonymReaderPlugin',
      ),
    ),
    'Magento\\Framework\\Mail\\TransportInterface' => 
    array (
      'WindowsSmtpConfig' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Email\\Model\\Plugin\\WindowsSmtpConfig',
      ),
      'EmailDisable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Email\\Model\\Mail\\TransportInterfacePlugin',
      ),
    ),
    'Magento\\Framework\\App\\TemplateTypesInterface' => NULL,
    'Magento\\Email\\Model\\AbstractTemplate' => 
    array (
      'EmailTemplateLinkUrl' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Email\\Model\\Plugin\\GetUrl',
      ),
    ),
    'Magento\\Shipping\\Block\\DataProviders\\Tracking\\DeliveryDateTitle' => 
    array (
      'update_delivery_date_title' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Fedex\\Plugin\\Block\\DataProviders\\Tracking\\ChangeTitle',
      ),
      'ups_update_delivery_date_title' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Ups\\Plugin\\Block\\DataProviders\\Tracking\\ChangeTitle',
      ),
    ),
    'Magento\\Shipping\\Block\\Tracking\\Popup' => 
    array (
      'update_delivery_date_value' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Fedex\\Plugin\\Block\\Tracking\\PopupDeliveryDate',
      ),
    ),
    'Magento\\Sales\\Api\\OrderRepositoryInterface' => 
    array (
      'save_gift_message' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Plugin\\OrderSave',
      ),
      'get_gift_message' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Plugin\\OrderGet',
      ),
      'save_order_tax' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\Plugin\\OrderSave',
      ),
      'candela_load_ordercomment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Candela\\OrderComment\\Plugin\\Model\\Order\\LoadOrderComment',
      ),
    ),
    'Magento\\Framework\\App\\PageCache\\Identifier' => 
    array (
      'core-app-area-design-exception-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\PageCache\\Model\\App\\CacheIdentifierPlugin',
      ),
    ),
    'Magento\\Framework\\App\\PageCache\\Cache' => 
    array (
      'fpc-type-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Model\\App\\PageCachePlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Type' => 
    array (
      'grouped_output' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Model\\Product\\Type\\Plugin',
      ),
      'configurable_output' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Product\\Type\\Plugin',
      ),
    ),
    'Magento\\Catalog\\Helper\\Product\\Configuration\\ConfigurationInterface' => NULL,
    'Magento\\Catalog\\Helper\\Product\\Configuration' => 
    array (
      'grouped_options' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Helper\\Product\\Configuration\\Plugin\\Grouped',
      ),
      'configurable_product' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Helper\\Product\\Configuration\\Plugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Initialization\\Helper\\ProductLinks' => 
    array (
      'GroupedProduct' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Model\\Product\\Initialization\\Helper\\ProductLinks\\Plugin\\Grouped',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Link' => 
    array (
      'groupedProductLinkProcessor' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Model\\ResourceModel\\Product\\Link\\RelationPersister',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Type\\AbstractType' => NULL,
    'Magento\\GroupedProduct\\Model\\Product\\Type\\Grouped' => 
    array (
      'outOfStockFilter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedCatalogInventory\\Plugin\\OutOfStockFilter',
      ),
      'grouped_product_minimum_advertised_price' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MsrpGroupedProduct\\Plugin\\Model\\Product\\Type\\Grouped',
      ),
    ),
    'Magento\\Customer\\Controller\\Ajax\\Login' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'captcha_validation' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Captcha\\Model\\Customer\\Plugin\\AjaxLogin',
      ),
    ),
    'Magento\\Checkout\\Block\\Cart\\AbstractCart' => NULL,
    'Magento\\Checkout\\Block\\Cart\\Sidebar' => 
    array (
      'addAgreementsToMinicartConfig' => 
      array (
        'sortOrder' => 0,
        'instance' => 'PayPal\\Braintree\\Plugin\\AddAgreementsToMinicartConfig',
      ),
      'login_captcha' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Captcha\\Model\\Cart\\ConfigPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Quote\\Item\\QuantityValidator\\Initializer\\Option' => 
    array (
      'configurable_product' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Quote\\Item\\QuantityValidator\\Initializer\\Option\\Plugin\\ConfigurableProduct',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Admin\\Item' => 
    array (
      'configurable_product' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Order\\Admin\\Item\\Plugin\\Configurable',
      ),
    ),
    'Magento\\Catalog\\Model\\Entity\\Product\\Attribute\\Group\\AttributeMapperInterface' => 
    array (
      'configurable_product' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Entity\\Product\\Attribute\\Group\\AttributeMapper\\Plugin',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\View\\AbstractView' => 
    array (
      'add_product_object_to_image_data_array' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\ProductImage',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\View\\Gallery' => 
    array (
      'add_product_object_to_image_data_array' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\ProductImage',
      ),
    ),
    'Magento\\ProductVideo\\Block\\Product\\View\\Gallery' => 
    array (
      'add_product_object_to_image_data_array' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\ProductImage',
      ),
      'product_video_gallery' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Block\\Plugin\\Product\\Media\\Gallery',
      ),
    ),
    'Magento\\ConfigurableProduct\\Model\\Product\\Type\\Configurable' => 
    array (
      'add_swatch_attributes_to_configurable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\Configurable',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Pricing\\Renderer\\SalableResolverInterface' => NULL,
    'Magento\\Catalog\\Model\\Product\\Pricing\\Renderer\\SalableResolver' => 
    array (
      'configurable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Catalog\\Model\\Product\\Pricing\\Renderer\\SalableResolver',
      ),
    ),
    'Magento\\Rule\\Model\\Condition\\ConditionInterface' => NULL,
    'Magento\\Rule\\Model\\Condition\\AbstractCondition' => NULL,
    'Magento\\Rule\\Model\\Condition\\Product\\AbstractProduct' => NULL,
    'Magento\\SalesRule\\Model\\Rule\\Condition\\Product' => 
    array (
      'apply_rule_on_configurable_children' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\SalesRule\\Model\\Rule\\Condition\\Product',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Address\\Total\\CollectorInterface' => NULL,
    'Magento\\Quote\\Model\\Quote\\Address\\Total\\ReaderInterface' => NULL,
    'Magento\\Quote\\Model\\Quote\\Address\\Total\\AbstractTotal' => NULL,
    'Magento\\Tax\\Model\\Sales\\Total\\Quote\\CommonTaxCollector' => 
    array (
      'apply_tax_class_id' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Tax\\Model\\Sales\\Total\\Quote\\CommonTaxCollector',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\Stock\\Item' => 
    array (
      'updateStockChangedAuto' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Plugin\\UpdateStockChangedAuto',
      ),
    ),
    'Magento\\Quote\\Api\\CartTotalRepositoryInterface' => NULL,
    'Magento\\Quote\\Model\\Cart\\CartTotalRepository' => 
    array (
      'multishipping_shipping_addresses' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Multishipping\\Model\\Cart\\CartTotalRepositoryPlugin',
      ),
      'coupon_label_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesRule\\Plugin\\CartTotalRepository',
      ),
    ),
    'Magento\\Integration\\Model\\ConfigBasedIntegrationManager' => 
    array (
      'webapiSetup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Webapi\\Model\\Plugin\\Manager',
      ),
    ),
    'Magento\\Backend\\Model\\Auth' => 
    array (
      'login_as_customer_admin_logout' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomer\\Plugin\\AdminLogoutPlugin',
      ),
      'disable_admin_login_auth' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\DisableAdminLoginAuthPlugin',
      ),
    ),
    'Magento\\Framework\\Api\\DataObjectHelper' => 
    array (
      'add_allow_remote_shopping_assistance_to_customer' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerGraphQl\\Plugin\\DataObjectHelperPlugin',
      ),
    ),
    'Magento\\LoginAsCustomerApi\\Api\\AuthenticateCustomerBySecretInterface' => 
    array (
      'process_shopping_cart' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerQuote\\Plugin\\LoginAsCustomerApi\\ProcessShoppingCartPlugin',
      ),
    ),
    'Magento\\MediaGalleryApi\\Api\\DeleteAssetsByPathsInterface' => 
    array (
      'remove_media_content_after_asset_is_removed_by_path' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaContent\\Plugin\\MediaGalleryAssetDeleteByPath',
      ),
      'delete_renditions_on_assets_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryRenditions\\Plugin\\RemoveRenditions',
      ),
    ),
    'Magento\\MediaGalleryApi\\Api\\DeleteDirectoriesByPathsInterface' => 
    array (
      'remove_media_content_after_asset_is_removed_by_directory_path' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaContent\\Plugin\\MediaGalleryAssetDeleteByDirectoryPath',
      ),
    ),
    'Magento\\MediaGallerySynchronization\\Model\\Consume' => 
    array (
      'synchronize_media_content' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaContentSynchronization\\Plugin\\SynchronizeMediaContent',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Gallery\\Processor' => 
    array (
      'media_gallery_image_remove_metadata' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryCatalog\\Plugin\\Product\\Gallery\\RemoveAssetAfterRemoveImage',
      ),
    ),
    'Magento\\Cms\\Model\\Wysiwyg\\Images\\GetInsertImageContent' => 
    array (
      'set_rendition_path' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryRenditions\\Plugin\\SetRenditionPath',
      ),
    ),
    'Magento\\MediaGallerySynchronizationApi\\Model\\CreateAssetFromFileInterface' => 
    array (
      'addMetadataToAssetCreatedFromFile' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGallerySynchronizationMetadata\\Plugin\\CreateAssetFromFileMetadata',
      ),
    ),
    'Magento\\Framework\\App\\MaintenanceMode' => 
    array (
      'amqp_maintenance_mode' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MessageQueue\\Model\\Plugin\\ResourceModel\\Lock',
      ),
    ),
    'Magento\\Framework\\AppInterface' => NULL,
    'Magento\\Framework\\App\\Http' => 
    array (
      'framework-http-newrelic' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NewRelicReporting\\Plugin\\HttpPlugin',
      ),
    ),
    'Magento\\Framework\\App\\State' => 
    array (
      'framework-state-newrelic' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NewRelicReporting\\Plugin\\StatePlugin',
      ),
    ),
    'Symfony\\Component\\Console\\Command\\Command' => 
    array (
      'newrelic-describe-commands' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NewRelicReporting\\Plugin\\CommandPlugin',
      ),
    ),
    'Magento\\Framework\\Profiler\\Driver\\Standard\\Stat' => 
    array (
      'newrelic-describe-cronjobs' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NewRelicReporting\\Plugin\\StatPlugin',
      ),
    ),
    'Magento\\Newsletter\\Model\\Subscriber' => 
    array (
      'remove_subscriber_from_queue_after_unsubscribe' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Newsletter\\Model\\Plugin\\RemoveSubscriberFromQueue',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Config' => 
    array (
      'append_sales_rule_keys_to_quote' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesRule\\Model\\Plugin\\QuoteConfigProductAttributes',
      ),
    ),
    'Magento\\Sales\\Api\\OrderManagementInterface' => 
    array (
      'save_attributes_to_order' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Candela\\OrderAttributes\\Plugin\\Model\\OrderManagement',
      ),
    ),
    'Magento\\Sales\\Model\\Service\\OrderService' => 
    array (
      'coupon_uses_decrement_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesRule\\Plugin\\CouponUsagesDecrement',
      ),
      'save_attributes_to_order' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Candela\\OrderAttributes\\Plugin\\Model\\OrderManagement',
      ),
    ),
    'Magento\\CatalogWidget\\Block\\Product\\ProductsList' => 
    array (
      'add_product_object_to_image_data_array' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\ProductImage',
      ),
      'pagebuilder_product_list' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageBuilder\\Plugin\\Catalog\\Block\\Product\\ProductsListPlugin',
      ),
    ),
    'Magento\\Sales\\Api\\Data\\OrderPaymentInterface' => 
    array (
      'PaymentVaultExtensionAttributeOperations' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Vault\\Plugin\\PaymentVaultAttributesLoad',
      ),
    ),
    'Magento\\Checkout\\Api\\PaymentInformationManagementInterface' => 
    array (
      'ProcessPaymentVaultInformationManagement' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Vault\\Plugin\\PaymentVaultInformationManagement',
      ),
      'validate-agreements' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CheckoutAgreements\\Model\\Checkout\\Plugin\\Validation',
      ),
    ),
    'Magento\\Payment\\Model\\Checks\\SpecificationInterface' => NULL,
    'Magento\\Payment\\Model\\Checks\\Composite' => 
    array (
      'paypal_specification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Model\\Method\\Checks\\SpecificationPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\EntityInterface' => NULL,
    'Magento\\Sales\\Api\\Data\\OrderInterface' => NULL,
    'Magento\\Sales\\Model\\Order' => 
    array (
      'express_order_invoice' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Plugin\\OrderCanInvoice',
      ),
    ),
    'Magento\\Sales\\Model\\ValidatorInterface' => NULL,
    'Magento\\Sales\\Model\\Order\\Validation\\CanInvoice' => 
    array (
      'express_order_invoice' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Plugin\\ValidatorCanInvoice',
      ),
    ),
    'Magento\\Framework\\Session\\SessionStartChecker' => 
    array (
      'transparent_session_checker' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Plugin\\TransparentSessionChecker',
      ),
    ),
    'Magento\\Payment\\Model\\InfoInterface' => NULL,
    'Magento\\Sales\\Model\\Order\\Payment\\Info' => NULL,
    'Magento\\Sales\\Model\\Order\\Payment' => 
    array (
      'PaymentVaultExtensionAttributeOperations' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Vault\\Plugin\\PaymentVaultAttributesLoad',
      ),
      'paypal_transparent' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Plugin\\TransparentOrderPayment',
      ),
    ),
    'Magento\\Quote\\Model\\AddressAdditionalDataProcessor' => 
    array (
      'persistent_remember_me_checkbox_processor' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Persistent\\Model\\Checkout\\AddressDataProcessorPlugin',
      ),
    ),
    'Magento\\Customer\\CustomerData\\SectionSourceInterface' => NULL,
    'Magento\\Customer\\CustomerData\\Customer' => 
    array (
      'section_data' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Persistent\\Model\\Plugin\\CustomerData',
      ),
    ),
    'Magento\\Framework\\EntityManager\\Operation\\ExtensionInterface' => NULL,
    'Magento\\Catalog\\Model\\Product\\Gallery\\CreateHandler' => 
    array (
      'external_video_media_entry_saver' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ProductVideo\\Model\\Plugin\\Catalog\\Product\\Gallery\\CreateHandler',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Gallery\\ReadHandler' => 
    array (
      'external_video_media_entry_reader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ProductVideo\\Model\\Plugin\\Catalog\\Product\\Gallery\\ReadHandler',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Gallery' => 
    array (
      'external_video_media_resource_backend' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ProductVideo\\Model\\Plugin\\ExternalVideoResourceBackend',
      ),
    ),
    'Magento\\Checkout\\Api\\GuestPaymentInformationManagementInterface' => 
    array (
      'validate-guest-agreements' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CheckoutAgreements\\Model\\Checkout\\Plugin\\GuestValidation',
      ),
    ),
    'Magento\\Framework\\GraphQl\\Query\\ResolverInterface' => 
    array (
      'graphql_recaptcha_validation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ReCaptchaWebapiGraphQl\\Plugin\\GraphQlValidator',
      ),
    ),
    'Magento\\Webapi\\Controller\\Soap\\Request\\Handler' => 
    array (
      'soap_webapi_recaptcha_validation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ReCaptchaWebapiRest\\Plugin\\SoapValidationPlugin',
      ),
    ),
    'Magento\\MediaStorage\\Model\\File\\Storage\\SynchronizationFactory' => 
    array (
      'remoteMediaStorageSynchronizationFactory' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\RemoteStorage\\Plugin\\File\\Storage\\SynchronizationFactory',
      ),
    ),
    'Magento\\MediaGalleryMetadata\\Model\\IptcEmbed' => 
    array (
      'remoteIptcEmbed' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\RemoteStorage\\Plugin\\MediaGalleryMetadata\\IptcEmbed',
      ),
    ),
    'Magento\\MediaGalleryMetadata\\Model\\ExifReader' => 
    array (
      'remoteExifReader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\RemoteStorage\\Plugin\\MediaGalleryMetadata\\ExifReader',
      ),
    ),
    'Magento\\MediaGallerySynchronization\\Model\\Filesystem\\GetFileInfo' => 
    array (
      'remoteGetFileInfo' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\RemoteStorage\\Plugin\\Filesystem\\GetFileInfo',
      ),
    ),
    'Zend_Validate' => NULL,
    'Magento\\Catalog\\Model\\Product\\Option\\Type\\File\\ExistingValidate' => 
    array (
      'remoteValidatorInfo' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\RemoteStorage\\Plugin\\ExistingValidate',
      ),
    ),
    'Magento\\Framework\\Image\\Adapter\\AdapterInterface' => NULL,
    'Magento\\Framework\\Image\\Adapter\\AbstractAdapter' => 
    array (
      'remoteImageFile' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\RemoteStorage\\Plugin\\Image',
      ),
    ),
    'Magento\\Framework\\Archive\\AbstractArchive' => NULL,
    'Magento\\Framework\\Archive\\ArchiveInterface' => NULL,
    'Magento\\Framework\\Archive\\Zip' => 
    array (
      'remoteZipArchive' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\RemoteStorage\\Plugin\\Zip',
      ),
    ),
    'Magento\\Review\\Model\\ResourceModel\\Rating\\Option' => 
    array (
      'Klevu_Search::updateRatingAttributesOnAggregate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Klevu\\Search\\Plugin\\Review\\Model\\ResourceModel\\Rating\\Option\\UpdateRatingAttributesOnAggregatePlugin',
      ),
    ),
    'Magento\\ConfigurableProduct\\Model\\ResourceModel\\Product\\Type\\Configurable\\Product\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'catalogRulePriceForConfigurableProduct' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRuleConfigurable\\Plugin\\ConfigurableProduct\\Model\\ResourceModel\\AddCatalogRulePrice',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\CreditmemoDocumentFactory' => 
    array (
      'sales_inventory_creditmemo_item_set_back_to_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesInventory\\Model\\Plugin\\Order\\CreditmemoDocumentFactoryPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Validation\\RefundOrderInterface' => 
    array (
      'refundOrderValidationAfter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesInventory\\Model\\Plugin\\Order\\Validation\\OrderRefundCreationArguments',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Validation\\RefundInvoiceInterface' => 
    array (
      'refundInvoiceValidationAfter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesInventory\\Model\\Plugin\\Order\\Validation\\InvoiceRefundCreationArguments',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\Attribute\\AttributeInterface' => NULL,
    'Magento\\Eav\\Api\\Data\\AttributeInterface' => NULL,
    'Magento\\Framework\\Api\\MetadataObjectInterface' => NULL,
    'Magento\\Eav\\Model\\Entity\\Attribute\\AbstractAttribute' => NULL,
    'Magento\\Eav\\Model\\Entity\\Attribute' => NULL,
    'Magento\\Catalog\\Api\\Data\\ProductAttributeInterface' => NULL,
    'Magento\\Eav\\Model\\Entity\\Attribute\\ScopedAttributeInterface' => NULL,
    'Magento\\Catalog\\Api\\Data\\EavAttributeInterface' => NULL,
    'Magento\\Catalog\\Model\\ResourceModel\\Eav\\Attribute' => 
    array (
      'save_swatches_option_params' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\EavAttribute',
      ),
    ),
    'Magento\\LayeredNavigation\\Block\\Navigation\\FilterRendererInterface' => NULL,
    'Magento\\LayeredNavigation\\Block\\Navigation\\FilterRenderer' => 
    array (
      'swatches_layered_renderer' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\FilterRenderer',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductAttributeOptionManagementInterface' => NULL,
    'Magento\\Catalog\\Api\\ProductAttributeOptionUpdateInterface' => NULL,
    'Magento\\Catalog\\Model\\Product\\Attribute\\OptionManagement' => 
    array (
      'swatches_product_attribute_optionmanagement_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Plugin\\Eav\\Model\\Entity\\Attribute\\OptionManagement',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Address\\ToOrder' => 
    array (
      'add_tax_to_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\Quote\\ToOrderConverter',
      ),
    ),
    'Magento\\Quote\\Model\\Cart\\TotalsConverter' => 
    array (
      'add_tax_details' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\Quote\\GrandTotalDetailsPlugin',
      ),
    ),
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\Listing\\DataProvider' => 
    array (
      'taxSettingsProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Plugin\\Ui\\DataProvider\\TaxSettings',
      ),
      'weeeSettingsProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Plugin\\Ui\\DataProvider\\WeeeSettings',
      ),
      'wishlistSettingsDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Wishlist\\Plugin\\Ui\\DataProvider\\WishlistSettings',
      ),
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth\\Forgotpassword' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'admin_forgot_password_plugin' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\AdminForgotPasswordPlugin',
      ),
    ),
    'Magento\\Captcha\\Observer\\CheckUserLoginBackendObserver' => 
    array (
      'captcha_check_user_login_backend_observer_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\CheckUserLoginBackendObserverPlugin',
      ),
    ),
    'Magento\\Captcha\\Observer\\ResetAttemptForBackendObserver' => 
    array (
      'captcha_reset_attempt_for_backend_observer_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\ResetAttemptForBackendObserverPlugin',
      ),
    ),
    'Magento\\Integration\\Api\\AdminTokenServiceInterface' => NULL,
    'Magento\\Integration\\Model\\AdminTokenService' => 
    array (
      'admin_adobe_ims_admin_token_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\AdminTokenPlugin',
      ),
    ),
    'Magento\\Webapi\\Model\\ServiceMetadata' => 
    array (
      'webapiServiceMetadataAsync' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiAsync\\Plugin\\ServiceMetadata',
      ),
    ),
    'Magento\\Webapi\\Model\\Cache\\Type\\Webapi' => 
    array (
      'webapiCacheAsync' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiAsync\\Plugin\\Cache\\Webapi',
      ),
    ),
    'Magento\\Webapi\\Controller\\Rest' => 
    array (
      'webapiContorllerRestAsync' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiAsync\\Plugin\\ControllerRest',
      ),
      'configHash' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Deploy\\Model\\Plugin\\ConfigChangeDetector',
      ),
    ),
    'Magento\\AsynchronousOperations\\Model\\MassConsumerEnvelopeCallback' => 
    array (
      'storeIdFieldForAsynchronousOperationsMassConsumerEnvelopeCallback' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiAsync\\Plugin\\AsynchronousOperations\\MassConsumerEnvelopeCallback',
      ),
    ),
    'Magento\\Webapi\\Model\\Config\\Converter' => 
    array (
      'webapiResourceSecurity' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiSecurity\\Model\\Plugin\\AnonymousResourceSecurity',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Attribute\\RemoveProductAttributeData' => 
    array (
      'removeWeeAttributesData' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Plugin\\Catalog\\ResourceModel\\Attribute\\RemoveProductWeeData',
      ),
    ),
    'Magento\\Framework\\View\\Element\\UiComponentInterface' => NULL,
    'Magento\\Ui\\Component\\AbstractComponent' => NULL,
    'Magento\\Ui\\Component\\Listing\\Columns' => NULL,
    'Magento\\Catalog\\Ui\\Component\\Listing\\Columns' => 
    array (
      'changeWeeColumnConfig' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Plugin\\Catalog\\Ui\\Component\\Listing\\Columns',
      ),
    ),
    'Magento\\Wishlist\\Controller\\IndexInterface' => NULL,
    'Magento\\Catalog\\Controller\\Product\\View\\ViewInterface' => NULL,
    'Magento\\Wishlist\\Controller\\AbstractIndex' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Wishlist\\Controller\\Index\\Plugin',
      ),
    ),
    'Magento\\Framework\\View\\TemplateEngineInterface' => NULL,
    'Magento\\Framework\\View\\TemplateEngine\\Php' => 
    array (
      'Amasty_Base::AddEscaperToPhpRenderer' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Amasty\\Base\\Plugin\\Framework\\View\\TemplateEngine\\Php',
      ),
    ),
    'Magento\\Framework\\Setup\\Declaration\\Schema\\OperationsExecutor' => 
    array (
      'Amasty_Base::execute-patches-before-schema-apply' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amasty\\Base\\Plugin\\Setup\\Model\\DeclarationInstaller\\ApplyPatchesBeforeDeclarativeSchema',
      ),
    ),
    'Magento\\Framework\\Config\\FileResolverInterface' => NULL,
    'Magento\\Framework\\App\\Config\\FileResolver' => NULL,
    'Magento\\Framework\\Config\\FileResolverByModule' => 
    array (
      'AmBase::FileResolverByModule' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amasty\\Base\\Plugin\\Framework\\Setup\\Declaration\\Schema\\FileSystem\\XmlReader\\RestrictDropOperationsPlugin',
      ),
    ),
    'Magento\\Store\\ViewModel\\SwitcherUrlProvider' => 
    array (
      'Candela_Blog::switch_blog_entity_url_when_store_was_switched' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Candela\\Blog\\Plugin\\Store\\ViewModel\\SwitcherUrlProvider\\ReplaceStoreSwitcherUrlForBlogEntities',
      ),
    ),
    'Magento\\Setup\\Model\\DeclarationInstaller' => 
    array (
      'Candela_Blog::execute-patches-before-schema-apply' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Candela\\Blog\\Plugin\\Setup\\Model\\DeclarationInstaller\\ApplyPatchesBeforeDeclarativeSchema',
      ),
    ),
    'Magento\\Checkout\\Api\\ShippingInformationManagementInterface' => NULL,
    'Magento\\Checkout\\Model\\ShippingInformationManagement' => 
    array (
      'candela_save_in_quote' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Candela\\OrderAttributes\\Plugin\\Model\\ShippingInformationManagement',
      ),
    ),
    'Magento\\Checkout\\Block\\Checkout\\LayoutProcessor' => 
    array (
      'candela_checkout_layout_processor_add_block' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Candela\\OrderAttributes\\Plugin\\Checkout\\LayoutProcessorPlugin',
      ),
    ),
    'Magento\\ImportExport\\Block\\Adminhtml\\Import\\Edit\\Before' => 
    array (
      'firebear_importexport_block_import_before' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Firebear\\ImportExport\\Plugin\\Block\\Adminhtml\\Import\\Edit\\Before',
      ),
    ),
    'Magento\\BundleImportExport\\Model\\Import\\Product\\Type\\Bundle\\RelationsDataSaver' => 
    array (
      'addBundleRelations' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Firebear\\ImportExport\\Plugin\\Model\\Import\\Product\\Type\\Bundle\\RelationsDataSaver',
      ),
    ),
    'Magento\\CatalogImportExport\\Model\\Export\\RowCustomizerInterface' => NULL,
    'Magento\\ConfigurableImportExport\\Model\\Export\\RowCustomizer' => 
    array (
      'prepareJobs' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Firebear\\ImportExport\\Plugin\\Model\\Export\\RowCustomizer',
      ),
    ),
    'Magento\\Catalog\\Block\\Adminhtml\\Category\\AbstractCategory' => NULL,
    'Magento\\Catalog\\Block\\Adminhtml\\Category\\Tree' => NULL,
    'Magento\\Catalog\\Block\\Adminhtml\\Category\\Checkboxes\\Tree' => 
    array (
      'firebear_importexport_set_rule_chooser_url' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Firebear\\ImportExport\\Plugin\\Block\\Adminhtml\\Category\\Checkboxes\\Tree',
      ),
    ),
    'Magento\\Cron\\Model\\Config\\Data' => 
    array (
      'getJobs' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Firebear\\ImportExport\\Plugin\\Config\\Data',
      ),
    ),
    'Firebear\\ImportExport\\Helper\\Data' => 
    array (
      'firebear_importexport_clear_cache_advanced+pricing' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Firebear\\ImportExport\\Plugin\\Helper\\ClearCacheAdvancedPricing',
      ),
    ),
    'Magento\\Framework\\Validator\\ValidatorInterface' => NULL,
    'Magento\\Framework\\Validator\\AbstractValidator' => NULL,
    'Magento\\CatalogImportExport\\Model\\Import\\Product\\RowValidatorInterface' => NULL,
    'Magento\\CatalogImportExport\\Model\\Import\\Product\\Validator' => NULL,
    'Firebear\\ImportExport\\Model\\Import\\Product\\Validator' => 
    array (
      'firebear_importexport_import_product_validator' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Firebear\\ImportExport\\Plugin\\Model\\Import\\Product\\Validator',
      ),
    ),
    'Magento\\Framework\\View\\Asset\\Minification' => 
    array (
      'excludeFilesFromMinification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Firebear\\ImportExport\\Plugin\\Framework\\View\\Asset\\ExcludeFilesFromMinification',
      ),
      'braintreeExcludeFromMinification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'PayPal\\Braintree\\Plugin\\ExcludeFromMinification',
      ),
    ),
    'Magento\\CatalogImportExport\\Model\\Import\\Product\\ImageTypeProcessor' => 
    array (
      'video_url' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Firebear\\ImportExport\\Plugin\\Model\\Import\\Product\\ImageTypeProcessor',
      ),
    ),
    'Magento\\InventoryCache\\Model\\FlushCacheByProductIds' => 
    array (
      'firebear-import-flush-cache-by-product-ids' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Firebear\\ImportExport\\Plugin\\Model\\Import\\FlushCacheByProductIds',
      ),
    ),
    'Magento\\InventoryCatalogApi\\Api\\BulkSourceUnassignInterface' => NULL,
    'Magento\\InventoryCatalog\\Model\\BulkSourceUnassign' => 
    array (
      'fb_update_source_unassign' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Firebear\\ImportExport\\Plugin\\Import\\BulkSource',
      ),
    ),
    'Magento\\InventoryCatalogApi\\Api\\BulkSourceAssignInterface' => NULL,
    'Magento\\InventoryCatalog\\Model\\BulkSourceAssign' => 
    array (
      'fb_update_source_assign' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Firebear\\ImportExport\\Plugin\\Import\\BulkSource',
      ),
    ),
    'Magento\\InventoryCatalogApi\\Api\\BulkInventoryTransferInterface' => NULL,
    'Magento\\InventoryCatalog\\Model\\BulkInventoryTransfer' => 
    array (
      'fb_update_source_transfer' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Firebear\\ImportExport\\Plugin\\Import\\BulkSource',
      ),
    ),
    'Magento\\InventoryCatalogApi\\Model\\IsSingleSourceModeInterface' => NULL,
    'Magento\\InventoryCatalog\\Model\\IsSingleSourceMode' => 
    array (
      'firebear_importexport_IsSingleSourceMode_cache_process' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Firebear\\ImportExport\\Plugin\\InventoryCatalogIsSingleSourceMode',
      ),
    ),
    'Magento\\Framework\\Serialize\\SerializerInterface' => NULL,
    'Magento\\Framework\\Serialize\\Serializer\\Json' => 
    array (
      'Firebear_ImportExport_Plugin_Magento_Framework_Serialize_Serializer_Json' => 
      array (
        'sortOrder' => 10,
        'disabled' => false,
        'instance' => 'Firebear\\ImportExport\\Plugin\\Magento\\Framework\\Serialize\\Serializer\\Json',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\ProductList\\Toolbar' => 
    array (
      'klevu_search_toolbar' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Klevu\\Search\\Plugin\\Catalog\\Block\\Toolbar',
      ),
    ),
    'Magento\\CatalogSearch\\Block\\Result' => 
    array (
      'Klevu_Search::setpersonalization' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Klevu\\Search\\Plugin\\Search\\Block\\Result',
      ),
    ),
    'Magento\\Framework\\Api\\AbstractSimpleObject' => NULL,
    'Magento\\Framework\\Api\\Search\\SearchResult' => 
    array (
      'Klevu_Search_Plugin_Api_Search_SearchResult' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Klevu\\Search\\Plugin\\Api\\Search\\SearchResult',
      ),
    ),
    'Magento\\Cron\\Model\\ConfigInterface' => 
    array (
      'Klevu_Search_SetCustomCronFrequencyPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Klevu\\Search\\Plugin\\Cron\\Model\\Config\\SetCustomCronFrequencyPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\StockRegistryInterface' => 
    array (
      'Klevu_Search::addStockRegistryProductsInQueue' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Klevu\\Search\\Plugin\\Api\\StockUpdatePlugin',
      ),
    ),
    'Magento\\Framework\\Search\\Request\\Cleaner' => 
    array (
      'Klevu_Search::CleanerForProductSearch' => 
      array (
        'sortOrder' => 0,
        'disabled' => false,
        'instance' => 'Klevu\\Search\\Plugin\\Framework\\Search\\Request\\CleanerPlugin',
      ),
      'Klevu_Categorynavigation::CleanerForCatNav' => 
      array (
        'sortOrder' => 0,
        'disabled' => false,
        'instance' => 'Klevu\\Categorynavigation\\Plugin\\Framework\\Search\\Request\\CleanerPluginForCatNav',
      ),
    ),
    'Magento\\Eav\\Model\\Config' => NULL,
    'Magento\\Catalog\\Model\\Config' => 
    array (
      'klevu_categorynavigation_config' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Klevu\\Categorynavigation\\Plugin\\Catalog\\Model\\Config',
      ),
    ),
    'Magento\\Checkout\\CustomerData\\ItemInterface' => NULL,
    'Magento\\Checkout\\CustomerData\\AbstractItem' => 
    array (
      'braintreeAddFlagForVirtualProducts' => 
      array (
        'sortOrder' => 0,
        'instance' => 'PayPal\\Braintree\\Plugin\\AddFlagForVirtualProducts',
      ),
    ),
    'Magento\\Framework\\Image' => 
    array (
      'Yireo_NextGenImages::convertAfterImageSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Yireo\\NextGenImages\\Plugin\\ConvertAfterImageSave',
      ),
    ),
  ),
  2 => 
  array (
    'Magento\\Framework\\Data\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Framework\\Data\\Collection\\AbstractDb_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Framework\\Model\\ResourceModel\\Db\\Collection\\AbstractCollection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Framework\\View\\Element\\UiComponent\\DataProvider\\SearchResult_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Theme\\Model\\ResourceModel\\Design\\Config\\Grid\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Config\\App\\Config\\Source\\DumpConfigSourceAggregated_get___self' => 
    array (
      4 => 
      array (
        0 => 'designConfigTheme',
      ),
    ),
    'appDumpSystemSource_get___self' => 
    array (
      4 => 
      array (
        0 => 'designConfigTheme',
      ),
    ),
    'appDumpConfigSystemSource_get___self' => 
    array (
      4 => 
      array (
        0 => 'designConfigTheme',
      ),
    ),
    'appDumpEnvSystemSource_get___self' => 
    array (
      4 => 
      array (
        0 => 'designConfigTheme',
      ),
    ),
    'Magento\\Search\\Model\\ResourceModel\\Synonyms\\Grid\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Eav\\Model\\ResourceModel\\Entity\\Attribute\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Attribute\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'catalogRuleSearchResult_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\Collection\\AbstractCollection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Collection\\AbstractCollection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Fulltext\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Fulltext\\SearchCollection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'mediaGallerySearchResult_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Invoice\\Grid\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'elasticsearchFulltextSearchCollection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'elasticsearchCategoryCollection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Advanced\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'elasticsearchAdvancedCollection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\UrlRewrite\\Ui\\Component\\UrlRewrite\\DataProvider\\SearchResult_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Webapi\\Controller\\Rest\\RequestValidator_validate___self' => 
    array (
      2 => 'rest_webapi_recaptcha_validation',
    ),
    'Magento\\WebapiAsync\\Controller\\VirtualType\\Rest\\RequestValidator_validate___self' => 
    array (
      2 => 'rest_webapi_recaptcha_validation',
    ),
    'Magento\\Framework\\DB\\Adapter\\AdapterInterface_commit___self' => 
    array (
      4 => 
      array (
        0 => 'execute_commit_callbacks',
      ),
    ),
    'Magento\\Framework\\DB\\Adapter\\AdapterInterface_rollBack___self' => 
    array (
      4 => 
      array (
        0 => 'execute_commit_callbacks',
      ),
    ),
    'Magento\\Framework\\App\\Response\\Http_sendResponse___self' => 
    array (
      1 => 
      array (
        0 => 'genericHeaderPlugin',
      ),
    ),
    'Magento\\Framework\\App\\ActionInterface_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Framework\\Url\\SecurityInfo_isSecure___self' => 
    array (
      2 => 'storeUrlSecurityInfo',
    ),
    'Magento\\Framework\\Url\\RouteParamsResolver_setRouteParams___self' => 
    array (
      1 => 
      array (
        0 => 'storeUrlRouteParamsResolver',
      ),
    ),
    'Magento\\Framework\\Url\\ScopeInterface_getBaseUrl___self' => 
    array (
      4 => 
      array (
        0 => 'urlSignature',
      ),
    ),
    'Magento\\Store\\Model\\Store_getBaseUrl___self' => 
    array (
      4 => 
      array (
        0 => 'urlSignature',
      ),
    ),
    'Magento\\Store\\Model\\Store_save___self' => 
    array (
      4 => 
      array (
        0 => 'themeDesignConfigGridIndexerStore',
      ),
    ),
    'Magento\\Store\\Model\\Store_delete___self' => 
    array (
      4 => 
      array (
        0 => 'themeDesignConfigGridIndexerStore',
      ),
    ),
    'Magento\\Framework\\Session\\SidResolver_getSid___self' => 
    array (
      4 => 
      array (
        0 => 'pagebuilder_preview_sid_resolving',
      ),
    ),
    'Magento\\Framework\\App\\Config\\Initial\\Converter_convert___self' => 
    array (
      4 => 
      array (
        0 => 'cron_system_config_initial_converter_plugin',
      ),
    ),
    'Magento\\Framework\\App\\FrontControllerInterface_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'configHash',
      ),
    ),
    'Magento\\Framework\\App\\FrontController_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'storeCookieValidate',
        1 => 'install',
        2 => 'configHash',
      ),
    ),
    'Magento\\Cms\\Model\\Wysiwyg\\Images\\Storage_deleteFile___self' => 
    array (
      4 => 
      array (
        0 => 'media_gallery_image_remove_metadata_after_wysiwyg',
      ),
    ),
    'Magento\\Cms\\Model\\Wysiwyg\\Images\\Storage_deleteDirectory___self' => 
    array (
      4 => 
      array (
        0 => 'media_gallery_image_remove_metadata_after_wysiwyg',
      ),
    ),
    'Magento\\AdvancedPricingImportExport\\Model\\Import\\AdvancedPricing_saveAdvancedPricing___self' => 
    array (
      4 => 
      array (
        0 => 'invalidateAdvancedPriceIndexerOnImport',
      ),
    ),
    'Magento\\AdvancedPricingImportExport\\Model\\Import\\AdvancedPricing_deleteAdvancedPricing___self' => 
    array (
      4 => 
      array (
        0 => 'invalidateAdvancedPriceIndexerOnImport',
      ),
    ),
    'Magento\\Theme\\Model\\DesignConfigRepository_save___self' => 
    array (
      4 => 
      array (
        0 => 'save_design_settings_event_dispatching',
      ),
    ),
    'Magento\\Theme\\Model\\DesignConfigRepository_delete___self' => 
    array (
      4 => 
      array (
        0 => 'save_design_settings_event_dispatching',
      ),
    ),
    'Magento\\Store\\Model\\Website_save___self' => 
    array (
      2 => 'themeDesignConfigGridIndexerWebsite',
    ),
    'Magento\\Store\\Model\\Website_delete___self' => 
    array (
      4 => 
      array (
        0 => 'themeDesignConfigGridIndexerWebsite',
      ),
    ),
    'Magento\\Store\\Model\\Group_delete___self' => 
    array (
      4 => 
      array (
        0 => 'themeDesignConfigGridIndexerStoreGroup',
      ),
    ),
    'Magento\\Framework\\MessageQueue\\Consumer\\Config\\CompositeReader_read___self' => 
    array (
      4 => 
      array (
        0 => 'queueConfigPlugin',
      ),
    ),
    'Magento\\Framework\\MessageQueue\\Publisher\\Config\\CompositeReader_read___self' => 
    array (
      4 => 
      array (
        0 => 'queueConfigPlugin',
      ),
    ),
    'Magento\\Framework\\MessageQueue\\Topology\\Config\\CompositeReader_read___self' => 
    array (
      4 => 
      array (
        0 => 'queueConfigPlugin',
      ),
    ),
    'Magento\\Framework\\App\\Config\\Value_save___self' => 
    array (
      4 => 
      array (
        0 => 'admin_system_config_media_gallery_renditions',
        1 => 'admin_system_config_adobe_stock_save_plugin',
      ),
    ),
    'Magento\\Framework\\App\\Config\\Value_afterSave___self' => 
    array (
      4 => 
      array (
        0 => 'webapiResourceSecurityCacheInvalidate',
      ),
    ),
    'Magento\\Backend\\Model\\Auth\\Session_prolong___self' => 
    array (
      2 => 'admin_adobe_ims_backend_auth_session',
    ),
    'Magento\\Authorization\\Model\\Role_save___self' => 
    array (
      4 => 
      array (
        0 => 'updateRoleUsersAcl',
      ),
    ),
    'Magento\\Eav\\Model\\ResourceModel\\Entity\\Attribute_getStoreLabelsByAttributeId___self' => 
    array (
      2 => 'storeLabelCaching',
    ),
    'Magento\\Eav\\Model\\Entity\\AbstractEntity_save___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\AbstractEntity_delete___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\VersionControl\\AbstractEntity_save___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\VersionControl\\AbstractEntity_delete___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Customer_save___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
      ),
      2 => 'recollect_quote_on_customer_group_change',
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Customer_delete___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
      ),
    ),
    'Magento\\Customer\\Api\\CustomerRepositoryInterface_save___self' => 
    array (
      2 => 'transactionWrapper',
    ),
    'Magento\\Customer\\Api\\CustomerRepositoryInterface_save_transactionWrapper' => 
    array (
      4 => 
      array (
        0 => 'login_as_customer_customer_repository_plugin',
        1 => 'update_newsletter_subscription_on_customer_update',
      ),
    ),
    'Magento\\Customer\\Api\\CustomerRepositoryInterface_deleteById___self' => 
    array (
      2 => 'update_newsletter_subscription_on_customer_update',
    ),
    'Magento\\Customer\\Api\\CustomerRepositoryInterface_delete___self' => 
    array (
      4 => 
      array (
        0 => 'update_newsletter_subscription_on_customer_update',
      ),
    ),
    'Magento\\Customer\\Api\\CustomerRepositoryInterface_getById___self' => 
    array (
      4 => 
      array (
        0 => 'update_newsletter_subscription_on_customer_update',
      ),
    ),
    'Magento\\Customer\\Api\\CustomerRepositoryInterface_getList___self' => 
    array (
      4 => 
      array (
        0 => 'update_newsletter_subscription_on_customer_update',
      ),
    ),
    'Magento\\PageCache\\Observer\\FlushFormKey_execute___self' => 
    array (
      2 => 'customerFlushFormKey',
    ),
    'Magento\\Customer\\Model\\AccountManagement_initiatePasswordReset___self' => 
    array (
      1 => 
      array (
        0 => 'security_check_customer_password_reset_attempt',
      ),
    ),
    'Magento\\Customer\\Api\\GroupRepositoryInterface_save___self' => 
    array (
      4 => 
      array (
        0 => 'saveCustomerGroupExcludedWebsite',
      ),
      2 => 'invalidatePriceIndexerOnCustomerGroup',
    ),
    'Magento\\Customer\\Api\\GroupRepositoryInterface_deleteById___self' => 
    array (
      4 => 
      array (
        0 => 'deleteCustomerGroupExcludedWebsite',
        1 => 'invalidatePriceIndexerOnCustomerGroup',
      ),
    ),
    'Magento\\Customer\\Api\\GroupRepositoryInterface_getById___self' => 
    array (
      4 => 
      array (
        0 => 'getByIdCustomerGroupExcludedWebsite',
      ),
    ),
    'Magento\\Customer\\Api\\GroupRepositoryInterface_getList___self' => 
    array (
      4 => 
      array (
        0 => 'getListCustomerGroupExcludedWebsite',
      ),
    ),
    'Magento\\Indexer\\Model\\Config\\Data_get___self' => 
    array (
      4 => 
      array (
        0 => 'indexerCategoryFlatConfigGet',
        1 => 'indexerProductFlatConfigGet',
      ),
    ),
    'Magento\\Indexer\\Model\\Processor_updateMview___self' => 
    array (
      1 => 
      array (
        0 => 'page-cache-indexer-reindex-clean-cache',
      ),
      4 => 
      array (
        0 => 'page-cache-indexer-reindex-clean-cache',
      ),
    ),
    'Magento\\Indexer\\Model\\Processor_reindexAllInvalid___self' => 
    array (
      1 => 
      array (
        0 => 'page-cache-indexer-reindex-clean-cache',
      ),
      4 => 
      array (
        0 => 'page-cache-indexer-reindex-clean-cache',
      ),
    ),
    'Magento\\Framework\\Indexer\\ActionInterface_executeFull___self' => 
    array (
      1 => 
      array (
        0 => 'cache_cleaner_after_reindex',
      ),
      4 => 
      array (
        0 => 'cache_cleaner_after_reindex',
      ),
    ),
    'Magento\\Framework\\Indexer\\ActionInterface_executeList___self' => 
    array (
      1 => 
      array (
        0 => 'cache_cleaner_after_reindex',
      ),
      4 => 
      array (
        0 => 'cache_cleaner_after_reindex',
      ),
    ),
    'Magento\\Framework\\Indexer\\ActionInterface_executeRow___self' => 
    array (
      1 => 
      array (
        0 => 'cache_cleaner_after_reindex',
      ),
      4 => 
      array (
        0 => 'cache_cleaner_after_reindex',
      ),
    ),
    'Magento\\Framework\\Indexer\\CacheContext_registerEntities___self' => 
    array (
      2 => 'defer_cache_cleaning',
    ),
    'Magento\\Framework\\Indexer\\CacheContext_registerTags___self' => 
    array (
      2 => 'defer_cache_cleaning',
    ),
    'Magento\\CatalogImportExport\\Model\\StockItemImporterInterface_import___self' => 
    array (
      4 => 
      array (
        0 => 'update_grouped_product_stock_status_plugin',
        1 => 'importStockItemDataForSourceItemUpdate',
        2 => 'update_configurable_products_stock_item_status',
        3 => 'update_bundle_products_stock_item_status',
      ),
    ),
    'Magento\\Catalog\\Model\\Product_load___self' => 
    array (
      4 => 
      array (
        0 => 'catalogInventoryAfterLoad',
      ),
    ),
    'Magento\\Catalog\\Model\\Product_getIdentities___self' => 
    array (
      4 => 
      array (
        0 => 'product_identities_extender',
        1 => 'cms',
        2 => 'add_bundle_parent_identities',
      ),
    ),
    'Magento\\Catalog\\Model\\Product_getMediaAttributes___self' => 
    array (
      4 => 
      array (
        0 => 'exclude_swatch_attribute',
      ),
    ),
    'Magento\\Cms\\Model\\PageRepository\\ValidationComposite_save___self' => 
    array (
      1 => 
      array (
        0 => 'cms_validate_url_plugin',
      ),
    ),
    'Magento\\ImportExport\\Model\\Import_importSource___self' => 
    array (
      4 => 
      array (
        0 => 'catalogProductFlatIndexerImport',
        1 => 'invalidatePriceIndexerOnImport',
        2 => 'invalidateStockIndexerOnImport',
        3 => 'invalidateEavIndexerOnImport',
        4 => 'invalidateProductCategoryIndexerOnImport',
        5 => 'invalidateCategoryProductIndexerOnImport',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Visitor_clean___self' => 
    array (
      4 => 
      array (
        0 => 'catalogLog',
        1 => 'reportLog',
      ),
    ),
    'Magento\\Catalog\\Model\\Category\\DataProvider_getDefaultMetaData___self' => 
    array (
      4 => 
      array (
        0 => 'set_page_layout_default_value',
      ),
    ),
    'Magento\\Theme\\Block\\Html\\Topmenu_getHtml___self' => 
    array (
      1 => 
      array (
        0 => 'catalogTopmenu',
      ),
    ),
    'Magento\\Theme\\Block\\Html\\Topmenu_getIdentities___self' => 
    array (
      1 => 
      array (
        0 => 'catalogTopmenu',
      ),
    ),
    'Magento\\Theme\\Block\\Html\\Topmenu_getCacheKeyInfo___self' => 
    array (
      4 => 
      array (
        0 => 'catalogTopmenu',
      ),
    ),
    'Magento\\Framework\\Mview\\View\\StateInterface_setStatus___self' => 
    array (
      4 => 
      array (
        0 => 'setStatusForMview',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Website_delete___self' => 
    array (
      4 => 
      array (
        0 => 'invalidatePriceIndexerOnWebsite',
        1 => 'categoryProductWebsiteAfterDelete',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Website_save___self' => 
    array (
      4 => 
      array (
        0 => 'invalidatePriceIndexerOnWebsite',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Store_save___self' => 
    array (
      4 => 
      array (
        0 => 'storeViewResourceAroundSave',
        1 => 'catalogProductFlatIndexerStore',
        2 => 'categoryStoreAroundSave',
        3 => 'productAttributesStoreViewSave',
        4 => 'catalogsearchFulltextIndexerStoreView',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Store_delete___self' => 
    array (
      4 => 
      array (
        0 => 'categoryStoreAroundSave',
        1 => 'catalogsearchFulltextIndexerStoreView',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Group_save___self' => 
    array (
      4 => 
      array (
        0 => 'storeGroupResourceAroundSave',
        1 => 'catalogProductFlatIndexerStoreGroup',
        2 => 'categoryStoreGroupAroundSave',
        3 => 'storeGroupResourceAroundBeforeSave',
        4 => 'catalogsearchFulltextIndexerStoreGroup',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Group_delete___self' => 
    array (
      4 => 
      array (
        0 => 'categoryStoreGroupAroundSave',
        1 => 'catalogsearchFulltextIndexerStoreGroup',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\Attribute\\Set_save___self' => 
    array (
      1 => 
      array (
        0 => 'invalidateEavIndexerOnAttributeSetSave',
      ),
      4 => 
      array (
        0 => 'invalidateEavIndexerOnAttributeSetSave',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\TypeTransitionManager_processProduct___self' => 
    array (
      2 => 'downloadable_product_transition',
    ),
    'Magento\\Catalog\\Model\\Product\\TypeTransitionManager_processProduct_downloadable_product_transition' => 
    array (
      2 => 'configurable_product_transition',
    ),
    'Magento\\CatalogInventory\\Model\\Config\\Backend\\AbstractValue_save___self' => 
    array (
      4 => 
      array (
        0 => 'admin_system_config_media_gallery_renditions',
        1 => 'admin_system_config_adobe_stock_save_plugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Config\\Backend\\AbstractValue_afterSave___self' => 
    array (
      4 => 
      array (
        0 => 'webapiResourceSecurityCacheInvalidate',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Config\\Backend\\ShowOutOfStock_save___self' => 
    array (
      4 => 
      array (
        0 => 'admin_system_config_media_gallery_renditions',
        1 => 'admin_system_config_adobe_stock_save_plugin',
        2 => 'showOutOfStockValueChanged',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Config\\Backend\\ShowOutOfStock_afterSave___self' => 
    array (
      4 => 
      array (
        0 => 'webapiResourceSecurityCacheInvalidate',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Config_getAttributesUsedInListing___self' => 
    array (
      2 => 'productListingAttributesCaching',
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Config_getAttributesUsedForSortBy___self' => 
    array (
      2 => 'productListingAttributesCaching',
    ),
    'Magento\\Eav\\Model\\Entity\\Attribute\\Backend\\AbstractBackend_validate___self' => 
    array (
      2 => 'attributeValidation',
    ),
    'Magento\\Eav\\Model\\Entity\\Attribute\\Backend\\AbstractBackend_validate_attributeValidation' => 
    array (
      2 => 'ConfigurableProduct::skipValidation',
    ),
    'Magento\\Sales\\Api\\OrderItemRepositoryInterface_get___self' => 
    array (
      4 => 
      array (
        0 => 'get_gift_message',
      ),
    ),
    'Magento\\Eav\\Model\\ResourceModel\\ReadSnapshot_execute___self' => 
    array (
      4 => 
      array (
        0 => 'catalogReadSnapshot',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Item\\ToOrderItem_convert___self' => 
    array (
      1 => 
      array (
        0 => 'copy_quote_files_to_order',
      ),
      4 => 
      array (
        0 => 'append_bundle_data_to_order',
        1 => 'gift_message_quote_item_conversion',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\Helper_initializeFromData___self' => 
    array (
      4 => 
      array (
        0 => 'weeeAttributeOptionsProcess',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductRepositoryInterface_delete___self' => 
    array (
      2 => 'remove_images_from_gallery_after_removing_product',
    ),
    'Magento\\Catalog\\Api\\ProductRepositoryInterface_save___self' => 
    array (
      1 => 
      array (
        0 => 'configurableProductSaveOptions',
      ),
      4 => 
      array (
        0 => 'configurableProductSaveOptions',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Repository_getCustomAttributesMetadata___self' => 
    array (
      4 => 
      array (
        0 => 'filterCustomAttribute',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Repository_save___self' => 
    array (
      1 => 
      array (
        0 => 'process_extension_attributes',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Repository_get___self' => 
    array (
      4 => 
      array (
        0 => 'process_extension_attributes',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\AbstractProduct_getImage___self' => 
    array (
      1 => 
      array (
        0 => 'add_product_object_to_image_data_array',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\View_getImage___self' => 
    array (
      1 => 
      array (
        0 => 'add_product_object_to_image_data_array',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\View_getQuantityValidators___self' => 
    array (
      4 => 
      array (
        0 => 'quantityValidators',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Action_updateAttributes___self' => 
    array (
      4 => 
      array (
        0 => 'ReindexUpdatedProducts',
        1 => 'catalogsearchFulltextMassAction',
        2 => 'quoteProductMassChange',
        3 => 'fb_update_attributes',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Action_updateWebsites___self' => 
    array (
      4 => 
      array (
        0 => 'catalogsearchFulltextMassAction',
        1 => 'update_url_rewrites_after_websites_update_plugin',
      ),
    ),
    'Magento\\Framework\\App\\Action\\AbstractAction_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Framework\\App\\Action\\Action_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Backend\\App\\AbstractAction_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Backend\\App\\Action_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
      2 => 'massAction',
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\AbstractResource_save___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\AbstractResource_delete___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product_save___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
      ),
      2 => 'catalogsearchFulltextProduct',
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product_delete___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
      ),
      2 => 'catalogsearchFulltextProduct',
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product_delete_catalogsearchFulltextProduct' => 
    array (
      4 => 
      array (
        0 => 'clean_quote_items_after_product_delete',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product_save_catalogsearchFulltextProduct' => 
    array (
      4 => 
      array (
        0 => 'update_quote_items_after_product_save',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Category_save___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
      ),
      2 => 'catalogsearchFulltextCategory',
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Category_delete___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
      ),
      2 => 'category_delete_plugin',
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Category_changeParent___self' => 
    array (
      4 => 
      array (
        0 => 'category_move_plugin',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Category_save_catalogsearchFulltextCategory' => 
    array (
      4 => 
      array (
        0 => 'update_url_path_for_different_stores',
      ),
    ),
    'Magento\\Catalog\\Model\\Indexer\\Product\\Category\\Action\\Rows_execute___self' => 
    array (
      4 => 
      array (
        0 => 'catalogsearchFulltextCategoryAssignment',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Attribute_getStoreLabelsByAttributeId___self' => 
    array (
      2 => 'storeLabelCaching',
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Attribute_save___self' => 
    array (
      1 => 
      array (
        0 => 'catalogsearchFulltextIndexerAttribute',
      ),
      4 => 
      array (
        0 => 'catalogsearchFulltextIndexerAttribute',
      ),
      2 => 'catalogsearchAttributeSearchWeightCache',
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Attribute_delete___self' => 
    array (
      1 => 
      array (
        0 => 'catalogsearchFulltextIndexerAttribute',
      ),
      4 => 
      array (
        0 => 'catalogsearchFulltextIndexerAttribute',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Attribute_save_catalogsearchAttributeSearchWeightCache' => 
    array (
      1 => 
      array (
        0 => 'updateElasticsearchIndexerMapping',
      ),
      4 => 
      array (
        0 => 'updateElasticsearchIndexerMapping',
      ),
    ),
    'Magento\\Framework\\Search\\Request\\Config\\FilesystemReader_read___self' => 
    array (
      4 => 
      array (
        0 => 'catalogSearchDynamicFields',
        1 => 'productAttributesDynamicFields',
      ),
    ),
    'Magento\\Catalog\\Model\\Layer\\Search\\CollectionFilter_filter___self' => 
    array (
      4 => 
      array (
        0 => 'searchQuery',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Action\\DataProvider_prepareProductIndex___self' => 
    array (
      1 => 
      array (
        0 => 'stockedProductsFilterPlugin',
      ),
    ),
    'Magento\\UrlRewrite\\Model\\StorageInterface_replace___self' => 
    array (
      4 => 
      array (
        0 => 'storage_plugin',
      ),
    ),
    'Magento\\UrlRewrite\\Model\\StorageInterface_deleteByData___self' => 
    array (
      1 => 
      array (
        0 => 'storage_plugin',
      ),
    ),
    'Magento\\UrlRewrite\\Model\\Storage\\AbstractStorage_replace___self' => 
    array (
      4 => 
      array (
        0 => 'storage_plugin',
      ),
    ),
    'Magento\\UrlRewrite\\Model\\Storage\\AbstractStorage_deleteByData___self' => 
    array (
      1 => 
      array (
        0 => 'storage_plugin',
      ),
    ),
    'Magento\\UrlRewrite\\Model\\Storage\\DbStorage_replace___self' => 
    array (
      4 => 
      array (
        0 => 'storage_plugin',
      ),
    ),
    'Magento\\UrlRewrite\\Model\\Storage\\DbStorage_deleteByData___self' => 
    array (
      1 => 
      array (
        0 => 'storage_plugin',
      ),
    ),
    'Magento\\CatalogUrlRewrite\\Model\\Storage\\DbStorage_replace___self' => 
    array (
      4 => 
      array (
        0 => 'storage_plugin',
      ),
    ),
    'Magento\\CatalogUrlRewrite\\Model\\Storage\\DbStorage_deleteByData___self' => 
    array (
      1 => 
      array (
        0 => 'storage_plugin',
      ),
    ),
    'Magento\\CatalogUrlRewrite\\Model\\Storage\\DbStorage_findOneByData___self' => 
    array (
      2 => 'dynamic_storage_plugin',
    ),
    'Magento\\CatalogUrlRewrite\\Model\\Storage\\DbStorage_findAllByData___self' => 
    array (
      2 => 'dynamic_storage_plugin',
    ),
    'Magento\\Framework\\View\\Asset\\MergeService_cleanMergedJsCss___self' => 
    array (
      4 => 
      array (
        0 => 'cleanMergedJsCss',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteRepository_get___self' => 
    array (
      4 => 
      array (
        0 => 'multishipping_quote_repository',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteRepository_getList___self' => 
    array (
      4 => 
      array (
        0 => 'multishipping_quote_repository',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteRepository_save___self' => 
    array (
      1 => 
      array (
        0 => 'multishipping_quote_repository',
      ),
    ),
    'Magento\\Catalog\\Api\\TierPriceStorageInterface_update___self' => 
    array (
      4 => 
      array (
        0 => 'update_quote_items_after_tier_prices_update',
      ),
    ),
    'Magento\\MediaGallerySynchronizationApi\\Model\\ImportFilesComposite_execute___self' => 
    array (
      1 => 
      array (
        0 => 'createMediaGalleryThumbnails',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Page_save___self' => 
    array (
      1 => 
      array (
        0 => 'cms_url_rewrite_plugin',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Page_delete___self' => 
    array (
      4 => 
      array (
        0 => 'cms_url_rewrite_plugin',
      ),
    ),
    'Magento\\Integration\\Api\\IntegrationServiceInterface_create___self' => 
    array (
      4 => 
      array (
        0 => 'webapiIntegrationService',
      ),
    ),
    'Magento\\Integration\\Api\\IntegrationServiceInterface_update___self' => 
    array (
      4 => 
      array (
        0 => 'webapiIntegrationService',
      ),
    ),
    'Magento\\Integration\\Api\\IntegrationServiceInterface_get___self' => 
    array (
      4 => 
      array (
        0 => 'webapiIntegrationService',
      ),
    ),
    'Magento\\Integration\\Api\\IntegrationServiceInterface_delete___self' => 
    array (
      4 => 
      array (
        0 => 'webapiIntegrationService',
      ),
    ),
    'Magento\\User\\Model\\User_save___self' => 
    array (
      4 => 
      array (
        0 => 'revokeTokensFromInactiveAdmins',
      ),
    ),
    'Magento\\User\\Model\\User_delete___self' => 
    array (
      4 => 
      array (
        0 => 'revokeTokensFromInactiveAdmins',
      ),
    ),
    'Magento\\Customer\\Model\\Customer_save___self' => 
    array (
      4 => 
      array (
        0 => 'revokeTokensFromInactiveCustomers',
      ),
    ),
    'Magento\\Customer\\Model\\Customer_delete___self' => 
    array (
      4 => 
      array (
        0 => 'revokeTokensFromInactiveCustomers',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\View_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Creditmemo_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Creditmemo_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Creditmemo_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\History_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\History_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Invoice_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Invoice_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Invoice_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintAction_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintAction_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintAction_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintCreditmemo_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintCreditmemo_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintCreditmemo_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintInvoice_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintInvoice_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintInvoice_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintShipment_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintShipment_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintShipment_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Reorder_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Reorder_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Reorder_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Shipment_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Shipment_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Shipment_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\View_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\View_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Handler\\Address_process___self' => 
    array (
      4 => 
      array (
        0 => 'addressUpdate',
      ),
    ),
    'Magento\\Config\\Model\\Config\\Structure\\Converter_convert___self' => 
    array (
      4 => 
      array (
        0 => 'cron_backend_config_structure_converter_plugin',
      ),
    ),
    'Magento\\Framework\\View\\Model\\Layout\\Merge_getDbUpdateString___self' => 
    array (
      2 => 'widget-layout-update-plugin',
    ),
    'Magento\\Config\\Model\\Config\\Backend\\Baseurl_save___self' => 
    array (
      4 => 
      array (
        0 => 'admin_system_config_media_gallery_renditions',
        1 => 'admin_system_config_adobe_stock_save_plugin',
      ),
    ),
    'Magento\\Config\\Model\\Config\\Backend\\Baseurl_afterSave___self' => 
    array (
      4 => 
      array (
        0 => 'webapiResourceSecurityCacheInvalidate',
        1 => 'updateAnalyticsSubscription',
      ),
    ),
    'Magento\\Integration\\Model\\Validator\\BearerTokenValidator_isIntegrationAllowedAsBearerToken___self' => 
    array (
      4 => 
      array (
        0 => 'allow_bearer_token',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\CartConfiguration_isProductConfigured___self' => 
    array (
      2 => 'Downloadable',
    ),
    'Magento\\Catalog\\Model\\Product\\CartConfiguration_isProductConfigured_Downloadable' => 
    array (
      2 => 'isProductConfigured',
    ),
    'Magento\\Catalog\\Model\\Product\\CartConfiguration_isProductConfigured_isProductConfigured' => 
    array (
      2 => 'configurable_product',
    ),
    'Magento\\Checkout\\Block\\Cart\\LayoutProcessor_isStateActive___self' => 
    array (
      4 => 
      array (
        0 => 'checkout_cart_shipping_dhl',
        1 => 'checkout_cart_shipping_plugin',
      ),
    ),
    'Magento\\Checkout\\Block\\Cart\\LayoutProcessor_isCityActive___self' => 
    array (
      4 => 
      array (
        0 => 'checkout_cart_shipping_dhl',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Backend\\Price_validate___self' => 
    array (
      2 => 'attributeValidation',
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Backend\\Price_validate_attributeValidation' => 
    array (
      2 => 'ConfigurableProduct::skipValidation',
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Backend\\Price_validate_ConfigurableProduct::skipValidation' => 
    array (
      2 => 'bundle',
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Backend\\Price_validate_bundle' => 
    array (
      2 => 'configurable',
    ),
    'Magento\\Sales\\Model\\Order\\Item_getQtyToCancel___self' => 
    array (
      4 => 
      array (
        0 => 'bundle',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Item_isProcessingAvailable___self' => 
    array (
      4 => 
      array (
        0 => 'bundle',
      ),
    ),
    'Magento\\Quote\\Api\\CartManagementInterface_placeOrder___self' => 
    array (
      2 => 'order_cancellation',
    ),
    'Magento\\Quote\\Model\\QuoteManagement_placeOrder___self' => 
    array (
      2 => 'order_cancellation',
    ),
    'Magento\\Quote\\Model\\QuoteManagement_submit___self' => 
    array (
      1 => 
      array (
        0 => 'validate_purchase_order_number',
        1 => 'update_bundle_quote_item_options',
      ),
      2 => 'coupon_uses_increment_plugin',
    ),
    'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Action\\Rows_execute___self' => 
    array (
      4 => 
      array (
        0 => 'catalogsearchFulltextProductAssignment',
      ),
    ),
    'Magento\\Elasticsearch\\SearchAdapter\\DocumentFactory_create___self' => 
    array (
      4 => 
      array (
        0 => 'Klevu_Search_Plugin_Elasticsearch_SearchAdapter',
      ),
    ),
    'Magento\\Framework\\Indexer\\Config\\DependencyInfoProvider_getIndexerIdsToRunBefore___self' => 
    array (
      4 => 
      array (
        0 => 'indexerDependencyUpdaterPlugin',
      ),
    ),
    'Magento\\Framework\\Indexer\\Config\\DependencyInfoProvider_getIndexerIdsToRunAfter___self' => 
    array (
      4 => 
      array (
        0 => 'indexerDependencyUpdaterPlugin',
      ),
    ),
    'Magento\\Search\\Model\\ResourceModel\\SynonymGroup_save___self' => 
    array (
      4 => 
      array (
        0 => 'synonymReaderPlugin',
      ),
    ),
    'Magento\\Search\\Model\\ResourceModel\\SynonymGroup_delete___self' => 
    array (
      4 => 
      array (
        0 => 'synonymReaderPlugin',
      ),
    ),
    'Magento\\Framework\\Mail\\TransportInterface_sendMessage___self' => 
    array (
      1 => 
      array (
        0 => 'WindowsSmtpConfig',
      ),
      2 => 'EmailDisable',
    ),
    'Magento\\Email\\Model\\AbstractTemplate_getUrl___self' => 
    array (
      1 => 
      array (
        0 => 'EmailTemplateLinkUrl',
      ),
    ),
    'Magento\\Shipping\\Block\\DataProviders\\Tracking\\DeliveryDateTitle_getTitle___self' => 
    array (
      4 => 
      array (
        0 => 'update_delivery_date_title',
        1 => 'ups_update_delivery_date_title',
      ),
    ),
    'Magento\\Shipping\\Block\\Tracking\\Popup_formatDeliveryDateTime___self' => 
    array (
      4 => 
      array (
        0 => 'update_delivery_date_value',
      ),
    ),
    'Magento\\Sales\\Api\\OrderRepositoryInterface_save___self' => 
    array (
      4 => 
      array (
        0 => 'save_gift_message',
        1 => 'save_order_tax',
      ),
    ),
    'Magento\\Sales\\Api\\OrderRepositoryInterface_get___self' => 
    array (
      4 => 
      array (
        0 => 'get_gift_message',
        1 => 'candela_load_ordercomment',
      ),
    ),
    'Magento\\Sales\\Api\\OrderRepositoryInterface_getList___self' => 
    array (
      4 => 
      array (
        0 => 'get_gift_message',
        1 => 'candela_load_ordercomment',
      ),
    ),
    'Magento\\Framework\\App\\PageCache\\Identifier_getValue___self' => 
    array (
      4 => 
      array (
        0 => 'core-app-area-design-exception-plugin',
      ),
    ),
    'Magento\\Framework\\App\\PageCache\\Cache_save___self' => 
    array (
      1 => 
      array (
        0 => 'fpc-type-plugin',
      ),
    ),
    'Magento\\Framework\\App\\PageCache\\Cache_load___self' => 
    array (
      4 => 
      array (
        0 => 'fpc-type-plugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Type_getOptionArray___self' => 
    array (
      4 => 
      array (
        0 => 'grouped_output',
        1 => 'configurable_output',
      ),
    ),
    'Magento\\Catalog\\Helper\\Product\\Configuration_getOptions___self' => 
    array (
      2 => 'grouped_options',
    ),
    'Magento\\Catalog\\Helper\\Product\\Configuration_getOptions_grouped_options' => 
    array (
      2 => 'configurable_product',
    ),
    'Magento\\Catalog\\Model\\Product\\Initialization\\Helper\\ProductLinks_initializeLinks___self' => 
    array (
      1 => 
      array (
        0 => 'GroupedProduct',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Link_saveProductLinks___self' => 
    array (
      4 => 
      array (
        0 => 'groupedProductLinkProcessor',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Link_deleteProductLink___self' => 
    array (
      2 => 'groupedProductLinkProcessor',
    ),
    'Magento\\GroupedProduct\\Model\\Product\\Type\\Grouped_prepareForCartAdvanced___self' => 
    array (
      4 => 
      array (
        0 => 'outOfStockFilter',
      ),
    ),
    'Magento\\GroupedProduct\\Model\\Product\\Type\\Grouped_getAssociatedProductCollection___self' => 
    array (
      4 => 
      array (
        0 => 'grouped_product_minimum_advertised_price',
      ),
    ),
    'Magento\\Customer\\Controller\\Ajax\\Login_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
      2 => 'captcha_validation',
    ),
    'Magento\\Checkout\\Block\\Cart\\Sidebar_getConfig___self' => 
    array (
      4 => 
      array (
        0 => 'addAgreementsToMinicartConfig',
        1 => 'login_captcha',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Quote\\Item\\QuantityValidator\\Initializer\\Option_getStockItem___self' => 
    array (
      4 => 
      array (
        0 => 'configurable_product',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Admin\\Item_getSku___self' => 
    array (
      2 => 'configurable_product',
    ),
    'Magento\\Sales\\Model\\Order\\Admin\\Item_getName___self' => 
    array (
      2 => 'configurable_product',
    ),
    'Magento\\Sales\\Model\\Order\\Admin\\Item_getProductId___self' => 
    array (
      2 => 'configurable_product',
    ),
    'Magento\\Catalog\\Model\\Entity\\Product\\Attribute\\Group\\AttributeMapperInterface_map___self' => 
    array (
      2 => 'configurable_product',
    ),
    'Magento\\Catalog\\Block\\Product\\View\\AbstractView_getImage___self' => 
    array (
      1 => 
      array (
        0 => 'add_product_object_to_image_data_array',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\View\\Gallery_getImage___self' => 
    array (
      1 => 
      array (
        0 => 'add_product_object_to_image_data_array',
      ),
    ),
    'Magento\\ProductVideo\\Block\\Product\\View\\Gallery_getImage___self' => 
    array (
      1 => 
      array (
        0 => 'add_product_object_to_image_data_array',
      ),
    ),
    'Magento\\ProductVideo\\Block\\Product\\View\\Gallery_getOptionsMediaGalleryDataJson___self' => 
    array (
      4 => 
      array (
        0 => 'product_video_gallery',
      ),
    ),
    'Magento\\ConfigurableProduct\\Model\\Product\\Type\\Configurable_getUsedProductCollection___self' => 
    array (
      4 => 
      array (
        0 => 'add_swatch_attributes_to_configurable',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Pricing\\Renderer\\SalableResolver_isSalable___self' => 
    array (
      4 => 
      array (
        0 => 'configurable',
      ),
    ),
    'Magento\\SalesRule\\Model\\Rule\\Condition\\Product_validate___self' => 
    array (
      1 => 
      array (
        0 => 'apply_rule_on_configurable_children',
      ),
    ),
    'Magento\\Tax\\Model\\Sales\\Total\\Quote\\CommonTaxCollector_mapItem___self' => 
    array (
      4 => 
      array (
        0 => 'apply_tax_class_id',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\Stock\\Item_save___self' => 
    array (
      1 => 
      array (
        0 => 'updateStockChangedAuto',
      ),
    ),
    'Magento\\Quote\\Model\\Cart\\CartTotalRepository_get___self' => 
    array (
      4 => 
      array (
        0 => 'multishipping_shipping_addresses',
        1 => 'coupon_label_plugin',
      ),
    ),
    'Magento\\Integration\\Model\\ConfigBasedIntegrationManager_processIntegrationConfig___self' => 
    array (
      4 => 
      array (
        0 => 'webapiSetup',
      ),
    ),
    'Magento\\Integration\\Model\\ConfigBasedIntegrationManager_processConfigBasedIntegrations___self' => 
    array (
      4 => 
      array (
        0 => 'webapiSetup',
      ),
    ),
    'Magento\\Backend\\Model\\Auth_logout___self' => 
    array (
      1 => 
      array (
        0 => 'login_as_customer_admin_logout',
      ),
    ),
    'Magento\\Backend\\Model\\Auth_login___self' => 
    array (
      2 => 'disable_admin_login_auth',
    ),
    'Magento\\Framework\\Api\\DataObjectHelper_populateWithArray___self' => 
    array (
      4 => 
      array (
        0 => 'add_allow_remote_shopping_assistance_to_customer',
      ),
    ),
    'Magento\\LoginAsCustomerApi\\Api\\AuthenticateCustomerBySecretInterface_execute___self' => 
    array (
      1 => 
      array (
        0 => 'process_shopping_cart',
      ),
    ),
    'Magento\\MediaGalleryApi\\Api\\DeleteAssetsByPathsInterface_execute___self' => 
    array (
      2 => 'remove_media_content_after_asset_is_removed_by_path',
    ),
    'Magento\\MediaGalleryApi\\Api\\DeleteAssetsByPathsInterface_execute_remove_media_content_after_asset_is_removed_by_path' => 
    array (
      4 => 
      array (
        0 => 'delete_renditions_on_assets_delete',
      ),
    ),
    'Magento\\MediaGalleryApi\\Api\\DeleteDirectoriesByPathsInterface_execute___self' => 
    array (
      2 => 'remove_media_content_after_asset_is_removed_by_directory_path',
    ),
    'Magento\\MediaGallerySynchronization\\Model\\Consume_execute___self' => 
    array (
      4 => 
      array (
        0 => 'synchronize_media_content',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Gallery\\Processor_removeImage___self' => 
    array (
      4 => 
      array (
        0 => 'media_gallery_image_remove_metadata',
      ),
    ),
    'Magento\\Cms\\Model\\Wysiwyg\\Images\\GetInsertImageContent_execute___self' => 
    array (
      1 => 
      array (
        0 => 'set_rendition_path',
      ),
    ),
    'Magento\\MediaGallerySynchronizationApi\\Model\\CreateAssetFromFileInterface_execute___self' => 
    array (
      4 => 
      array (
        0 => 'addMetadataToAssetCreatedFromFile',
      ),
    ),
    'Magento\\Framework\\App\\MaintenanceMode_set___self' => 
    array (
      4 => 
      array (
        0 => 'amqp_maintenance_mode',
      ),
    ),
    'Magento\\Framework\\App\\Http_catchException___self' => 
    array (
      1 => 
      array (
        0 => 'framework-http-newrelic',
      ),
    ),
    'Magento\\Framework\\App\\State_setAreaCode___self' => 
    array (
      4 => 
      array (
        0 => 'framework-state-newrelic',
      ),
    ),
    'Symfony\\Component\\Console\\Command\\Command_run___self' => 
    array (
      1 => 
      array (
        0 => 'newrelic-describe-commands',
      ),
    ),
    'Magento\\Framework\\Profiler\\Driver\\Standard\\Stat_start___self' => 
    array (
      1 => 
      array (
        0 => 'newrelic-describe-cronjobs',
      ),
    ),
    'Magento\\Framework\\Profiler\\Driver\\Standard\\Stat_stop___self' => 
    array (
      1 => 
      array (
        0 => 'newrelic-describe-cronjobs',
      ),
    ),
    'Magento\\Newsletter\\Model\\Subscriber_unsubscribe___self' => 
    array (
      4 => 
      array (
        0 => 'remove_subscriber_from_queue_after_unsubscribe',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Config_getProductAttributes___self' => 
    array (
      4 => 
      array (
        0 => 'append_sales_rule_keys_to_quote',
      ),
    ),
    'Magento\\Sales\\Api\\OrderManagementInterface_place___self' => 
    array (
      4 => 
      array (
        0 => 'save_attributes_to_order',
      ),
    ),
    'Magento\\Sales\\Model\\Service\\OrderService_cancel___self' => 
    array (
      4 => 
      array (
        0 => 'coupon_uses_decrement_plugin',
      ),
    ),
    'Magento\\Sales\\Model\\Service\\OrderService_place___self' => 
    array (
      4 => 
      array (
        0 => 'save_attributes_to_order',
      ),
    ),
    'Magento\\CatalogWidget\\Block\\Product\\ProductsList_getImage___self' => 
    array (
      1 => 
      array (
        0 => 'add_product_object_to_image_data_array',
      ),
    ),
    'Magento\\CatalogWidget\\Block\\Product\\ProductsList_createCollection___self' => 
    array (
      4 => 
      array (
        0 => 'pagebuilder_product_list',
      ),
    ),
    'Magento\\CatalogWidget\\Block\\Product\\ProductsList_getCacheKeyInfo___self' => 
    array (
      4 => 
      array (
        0 => 'pagebuilder_product_list',
      ),
    ),
    'Magento\\CatalogWidget\\Block\\Product\\ProductsList_getIdentities___self' => 
    array (
      4 => 
      array (
        0 => 'pagebuilder_product_list',
      ),
    ),
    'Magento\\Sales\\Api\\Data\\OrderPaymentInterface_getExtensionAttributes___self' => 
    array (
      4 => 
      array (
        0 => 'PaymentVaultExtensionAttributeOperations',
      ),
    ),
    'Magento\\Checkout\\Api\\PaymentInformationManagementInterface_savePaymentInformation___self' => 
    array (
      1 => 
      array (
        0 => 'ProcessPaymentVaultInformationManagement',
      ),
    ),
    'Magento\\Checkout\\Api\\PaymentInformationManagementInterface_savePaymentInformationAndPlaceOrder___self' => 
    array (
      1 => 
      array (
        0 => 'validate-agreements',
      ),
    ),
    'Magento\\Payment\\Model\\Checks\\Composite_isApplicable___self' => 
    array (
      4 => 
      array (
        0 => 'paypal_specification',
      ),
    ),
    'Magento\\Sales\\Model\\Order_canInvoice___self' => 
    array (
      4 => 
      array (
        0 => 'express_order_invoice',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Validation\\CanInvoice_validate___self' => 
    array (
      4 => 
      array (
        0 => 'express_order_invoice',
      ),
    ),
    'Magento\\Framework\\Session\\SessionStartChecker_check___self' => 
    array (
      4 => 
      array (
        0 => 'transparent_session_checker',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Payment_getExtensionAttributes___self' => 
    array (
      4 => 
      array (
        0 => 'PaymentVaultExtensionAttributeOperations',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Payment_accept___self' => 
    array (
      4 => 
      array (
        0 => 'paypal_transparent',
      ),
    ),
    'Magento\\Quote\\Model\\AddressAdditionalDataProcessor_process___self' => 
    array (
      1 => 
      array (
        0 => 'persistent_remember_me_checkbox_processor',
      ),
    ),
    'Magento\\Customer\\CustomerData\\Customer_getSectionData___self' => 
    array (
      2 => 'section_data',
    ),
    'Magento\\Catalog\\Model\\Product\\Gallery\\CreateHandler_execute___self' => 
    array (
      1 => 
      array (
        0 => 'external_video_media_entry_saver',
      ),
      4 => 
      array (
        0 => 'external_video_media_entry_saver',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Gallery\\ReadHandler_execute___self' => 
    array (
      4 => 
      array (
        0 => 'external_video_media_entry_reader',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Gallery_duplicate___self' => 
    array (
      4 => 
      array (
        0 => 'external_video_media_resource_backend',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Gallery_createBatchBaseSelect___self' => 
    array (
      4 => 
      array (
        0 => 'external_video_media_resource_backend',
      ),
    ),
    'Magento\\Checkout\\Api\\GuestPaymentInformationManagementInterface_savePaymentInformationAndPlaceOrder___self' => 
    array (
      1 => 
      array (
        0 => 'validate-guest-agreements',
      ),
    ),
    'Magento\\Framework\\GraphQl\\Query\\ResolverInterface_resolve___self' => 
    array (
      1 => 
      array (
        0 => 'graphql_recaptcha_validation',
      ),
    ),
    'Magento\\Webapi\\Controller\\Soap\\Request\\Handler___call___self' => 
    array (
      1 => 
      array (
        0 => 'soap_webapi_recaptcha_validation',
      ),
    ),
    'Magento\\MediaStorage\\Model\\File\\Storage\\SynchronizationFactory_create___self' => 
    array (
      2 => 'remoteMediaStorageSynchronizationFactory',
    ),
    'Magento\\MediaGalleryMetadata\\Model\\IptcEmbed_get___self' => 
    array (
      1 => 
      array (
        0 => 'remoteIptcEmbed',
      ),
    ),
    'Magento\\MediaGalleryMetadata\\Model\\ExifReader_get___self' => 
    array (
      1 => 
      array (
        0 => 'remoteExifReader',
      ),
    ),
    'Magento\\MediaGallerySynchronization\\Model\\Filesystem\\GetFileInfo_execute___self' => 
    array (
      1 => 
      array (
        0 => 'remoteGetFileInfo',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Option\\Type\\File\\ExistingValidate_isValid___self' => 
    array (
      1 => 
      array (
        0 => 'remoteValidatorInfo',
      ),
    ),
    'Magento\\Framework\\Image\\Adapter\\AbstractAdapter_open___self' => 
    array (
      1 => 
      array (
        0 => 'remoteImageFile',
      ),
    ),
    'Magento\\Framework\\Image\\Adapter\\AbstractAdapter_validateUploadFile___self' => 
    array (
      1 => 
      array (
        0 => 'remoteImageFile',
      ),
    ),
    'Magento\\Framework\\Image\\Adapter\\AbstractAdapter_watermark___self' => 
    array (
      1 => 
      array (
        0 => 'remoteImageFile',
      ),
    ),
    'Magento\\Framework\\Image\\Adapter\\AbstractAdapter_save___self' => 
    array (
      2 => 'remoteImageFile',
    ),
    'Magento\\Framework\\Archive\\Zip_unpack___self' => 
    array (
      2 => 'remoteZipArchive',
    ),
    'Magento\\Framework\\Archive\\Zip_pack___self' => 
    array (
      2 => 'remoteZipArchive',
    ),
    'Magento\\Review\\Model\\ResourceModel\\Rating\\Option_aggregateEntityByRatingId___self' => 
    array (
      4 => 
      array (
        0 => 'Klevu_Search::updateRatingAttributesOnAggregate',
      ),
    ),
    'Magento\\ConfigurableProduct\\Model\\ResourceModel\\Product\\Type\\Configurable\\Product\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\ConfigurableProduct\\Model\\ResourceModel\\Product\\Type\\Configurable\\Product\\Collection_load___self' => 
    array (
      1 => 
      array (
        0 => 'catalogRulePriceForConfigurableProduct',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\CreditmemoDocumentFactory_createFromOrder___self' => 
    array (
      4 => 
      array (
        0 => 'sales_inventory_creditmemo_item_set_back_to_stock',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\CreditmemoDocumentFactory_createFromInvoice___self' => 
    array (
      4 => 
      array (
        0 => 'sales_inventory_creditmemo_item_set_back_to_stock',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Validation\\RefundOrderInterface_validate___self' => 
    array (
      4 => 
      array (
        0 => 'refundOrderValidationAfter',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Validation\\RefundInvoiceInterface_validate___self' => 
    array (
      4 => 
      array (
        0 => 'refundInvoiceValidationAfter',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Eav\\Attribute_beforeSave___self' => 
    array (
      1 => 
      array (
        0 => 'save_swatches_option_params',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Eav\\Attribute_afterSave___self' => 
    array (
      4 => 
      array (
        0 => 'save_swatches_option_params',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Eav\\Attribute_usesSource___self' => 
    array (
      4 => 
      array (
        0 => 'save_swatches_option_params',
      ),
    ),
    'Magento\\LayeredNavigation\\Block\\Navigation\\FilterRenderer_render___self' => 
    array (
      2 => 'swatches_layered_renderer',
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\OptionManagement_add___self' => 
    array (
      1 => 
      array (
        0 => 'swatches_product_attribute_optionmanagement_plugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\OptionManagement_update___self' => 
    array (
      1 => 
      array (
        0 => 'swatches_product_attribute_optionmanagement_plugin',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Address\\ToOrder_convert___self' => 
    array (
      1 => 
      array (
        0 => 'add_tax_to_order',
      ),
      4 => 
      array (
        0 => 'add_tax_to_order',
      ),
    ),
    'Magento\\Quote\\Model\\Cart\\TotalsConverter_process___self' => 
    array (
      4 => 
      array (
        0 => 'add_tax_details',
      ),
    ),
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\Listing\\DataProvider_getData___self' => 
    array (
      4 => 
      array (
        0 => 'taxSettingsProvider',
        1 => 'weeeSettingsProvider',
        2 => 'wishlistSettingsDataProvider',
      ),
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth\\Forgotpassword_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
      2 => 'admin_forgot_password_plugin',
    ),
    'Magento\\Captcha\\Observer\\CheckUserLoginBackendObserver_execute___self' => 
    array (
      2 => 'captcha_check_user_login_backend_observer_plugin',
    ),
    'Magento\\Captcha\\Observer\\ResetAttemptForBackendObserver_execute___self' => 
    array (
      2 => 'captcha_reset_attempt_for_backend_observer_plugin',
    ),
    'Magento\\Integration\\Model\\AdminTokenService_createAdminAccessToken___self' => 
    array (
      2 => 'admin_adobe_ims_admin_token_plugin',
    ),
    'Magento\\Webapi\\Model\\ServiceMetadata_getServicesConfig___self' => 
    array (
      4 => 
      array (
        0 => 'webapiServiceMetadataAsync',
      ),
    ),
    'Magento\\Webapi\\Model\\Cache\\Type\\Webapi_load___self' => 
    array (
      1 => 
      array (
        0 => 'webapiCacheAsync',
      ),
    ),
    'Magento\\Webapi\\Model\\Cache\\Type\\Webapi_save___self' => 
    array (
      1 => 
      array (
        0 => 'webapiCacheAsync',
      ),
    ),
    'Magento\\Webapi\\Model\\Cache\\Type\\Webapi_remove___self' => 
    array (
      1 => 
      array (
        0 => 'webapiCacheAsync',
      ),
    ),
    'Magento\\Webapi\\Controller\\Rest_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'webapiContorllerRestAsync',
        1 => 'configHash',
      ),
    ),
    'Magento\\AsynchronousOperations\\Model\\MassConsumerEnvelopeCallback_execute___self' => 
    array (
      2 => 'storeIdFieldForAsynchronousOperationsMassConsumerEnvelopeCallback',
    ),
    'Magento\\Webapi\\Model\\Config\\Converter_convert___self' => 
    array (
      4 => 
      array (
        0 => 'webapiResourceSecurity',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Attribute\\RemoveProductAttributeData_removeData___self' => 
    array (
      2 => 'removeWeeAttributesData',
    ),
    'Magento\\Catalog\\Ui\\Component\\Listing\\Columns_prepare___self' => 
    array (
      4 => 
      array (
        0 => 'changeWeeColumnConfig',
      ),
    ),
    'Magento\\Wishlist\\Controller\\AbstractIndex_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Wishlist\\Controller\\AbstractIndex_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
      ),
    ),
    'Magento\\Framework\\View\\TemplateEngine\\Php_render___self' => 
    array (
      1 => 
      array (
        0 => 'Amasty_Base::AddEscaperToPhpRenderer',
      ),
    ),
    'Magento\\Framework\\Setup\\Declaration\\Schema\\OperationsExecutor_execute___self' => 
    array (
      1 => 
      array (
        0 => 'Amasty_Base::execute-patches-before-schema-apply',
      ),
    ),
    'Magento\\Framework\\Config\\FileResolverByModule_get___self' => 
    array (
      4 => 
      array (
        0 => 'AmBase::FileResolverByModule',
      ),
    ),
    'Magento\\Store\\ViewModel\\SwitcherUrlProvider_getTargetStoreRedirectUrl___self' => 
    array (
      2 => 'Candela_Blog::switch_blog_entity_url_when_store_was_switched',
    ),
    'Magento\\Setup\\Model\\DeclarationInstaller_installSchema___self' => 
    array (
      1 => 
      array (
        0 => 'Candela_Blog::execute-patches-before-schema-apply',
      ),
    ),
    'Magento\\Checkout\\Model\\ShippingInformationManagement_saveAddressInformation___self' => 
    array (
      1 => 
      array (
        0 => 'candela_save_in_quote',
      ),
    ),
    'Magento\\Checkout\\Block\\Checkout\\LayoutProcessor_process___self' => 
    array (
      4 => 
      array (
        0 => 'candela_checkout_layout_processor_add_block',
      ),
    ),
    'Magento\\ImportExport\\Block\\Adminhtml\\Import\\Edit\\Before_toHtml___self' => 
    array (
      2 => 'firebear_importexport_block_import_before',
    ),
    'Magento\\BundleImportExport\\Model\\Import\\Product\\Type\\Bundle\\RelationsDataSaver_saveSelections___self' => 
    array (
      2 => 'addBundleRelations',
    ),
    'Magento\\ConfigurableImportExport\\Model\\Export\\RowCustomizer_prepareData___self' => 
    array (
      2 => 'prepareJobs',
    ),
    'Magento\\Catalog\\Block\\Adminhtml\\Category\\Checkboxes\\Tree_getData___self' => 
    array (
      2 => 'firebear_importexport_set_rule_chooser_url',
    ),
    'Magento\\Cron\\Model\\Config\\Data_getJobs___self' => 
    array (
      4 => 
      array (
        0 => 'getJobs',
      ),
    ),
    'Firebear\\ImportExport\\Helper\\Data_beforeRun___self' => 
    array (
      1 => 
      array (
        0 => 'firebear_importexport_clear_cache_advanced+pricing',
      ),
    ),
    'Firebear\\ImportExport\\Model\\Import\\Product\\Validator_isAttributeValid___self' => 
    array (
      2 => 'firebear_importexport_import_product_validator',
    ),
    'Magento\\Framework\\View\\Asset\\Minification_getExcludes___self' => 
    array (
      2 => 'excludeFilesFromMinification',
    ),
    'Magento\\Framework\\View\\Asset\\Minification_getExcludes_excludeFilesFromMinification' => 
    array (
      4 => 
      array (
        0 => 'braintreeExcludeFromMinification',
      ),
    ),
    'Magento\\CatalogImportExport\\Model\\Import\\Product\\ImageTypeProcessor_getImageTypes___self' => 
    array (
      4 => 
      array (
        0 => 'video_url',
      ),
    ),
    'Magento\\InventoryCache\\Model\\FlushCacheByProductIds_execute___self' => 
    array (
      2 => 'firebear-import-flush-cache-by-product-ids',
    ),
    'Magento\\InventoryCatalog\\Model\\BulkSourceUnassign_execute___self' => 
    array (
      4 => 
      array (
        0 => 'fb_update_source_unassign',
      ),
    ),
    'Magento\\InventoryCatalog\\Model\\BulkSourceAssign_execute___self' => 
    array (
      4 => 
      array (
        0 => 'fb_update_source_assign',
      ),
    ),
    'Magento\\InventoryCatalog\\Model\\BulkInventoryTransfer_execute___self' => 
    array (
      4 => 
      array (
        0 => 'fb_update_source_transfer',
      ),
    ),
    'Magento\\InventoryCatalog\\Model\\IsSingleSourceMode_execute___self' => 
    array (
      2 => 'firebear_importexport_IsSingleSourceMode_cache_process',
    ),
    'Magento\\Framework\\Serialize\\Serializer\\Json_unserialize___self' => 
    array (
      2 => 'Firebear_ImportExport_Plugin_Magento_Framework_Serialize_Serializer_Json',
    ),
    'Magento\\Framework\\Serialize\\Serializer\\Json_serialize___self' => 
    array (
      2 => 'Firebear_ImportExport_Plugin_Magento_Framework_Serialize_Serializer_Json',
    ),
    'Magento\\Catalog\\Block\\Product\\ProductList\\Toolbar_setCollection___self' => 
    array (
      2 => 'klevu_search_toolbar',
    ),
    'Magento\\Catalog\\Block\\Product\\ProductList\\Toolbar_getCurrentDirection___self' => 
    array (
      4 => 
      array (
        0 => 'klevu_search_toolbar',
      ),
    ),
    'Magento\\CatalogSearch\\Block\\Result_setListOrders___self' => 
    array (
      4 => 
      array (
        0 => 'Klevu_Search::setpersonalization',
      ),
    ),
    'Magento\\Framework\\Api\\Search\\SearchResult_setItems___self' => 
    array (
      1 => 
      array (
        0 => 'Klevu_Search_Plugin_Api_Search_SearchResult',
      ),
    ),
    'Magento\\Cron\\Model\\ConfigInterface_getJobs___self' => 
    array (
      4 => 
      array (
        0 => 'Klevu_Search_SetCustomCronFrequencyPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\StockRegistryInterface_updateStockItemBySku___self' => 
    array (
      4 => 
      array (
        0 => 'Klevu_Search::addStockRegistryProductsInQueue',
      ),
    ),
    'Magento\\Framework\\Search\\Request\\Cleaner_clean___self' => 
    array (
      4 => 
      array (
        0 => 'Klevu_Search::CleanerForProductSearch',
        1 => 'Klevu_Categorynavigation::CleanerForCatNav',
      ),
    ),
    'Magento\\Catalog\\Model\\Config_getAttributeUsedForSortByArray___self' => 
    array (
      4 => 
      array (
        0 => 'klevu_categorynavigation_config',
      ),
    ),
    'Magento\\Checkout\\CustomerData\\AbstractItem_getItemData___self' => 
    array (
      4 => 
      array (
        0 => 'braintreeAddFlagForVirtualProducts',
      ),
    ),
    'Magento\\Framework\\Image_save___self' => 
    array (
      4 => 
      array (
        0 => 'Yireo_NextGenImages::convertAfterImageSave',
      ),
    ),
  ),
);
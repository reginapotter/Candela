var config = {
    map: {
        '*': {
            amBlogSlick: 'Candela_Base/vendor/slick/slick.min',
            candela_appendaround: 'Candela_Blog/js/vendor/appendaround/appendaround',
            amBlogAccord : 'Candela_Blog/js/amBlogAccord',
            amBlogViewStatistic: 'Candela_Blog/js/amBlogViewStatistic',
            amBlogTabs: 'Candela_Blog/js/tabs',
            amBlogViewsList: 'Candela_Blog/js/posts-lists-counter-update',
            amBlogSearch: 'Candela_Blog/js/blog-live-search',
            amBlogScrollTabs: 'Candela_Blog/js/blog-scroll-tabs'
        }
    },
    paths: {
        catalogAddToCart: 'Magento_Catalog/js/catalog-add-to-cart'
    },
    shim: {
        amBlogSlick: {
            deps: [ 'jquery' ]
        }
    }
};

var config = {
    map: {
        '*': {
            amBlogSlick: 'Candela_Base/vendor/slick/slick.min',
            amBlogSlider: 'Candela_Blog/js/blog-slider',
            amBlogDates: 'Candela_Blog/js/components/amblog-humanize-dates'
        }
    },
    shim: {
        amBlogSlider: {
            deps: [ 'Candela_Base/vendor/slick/slick.min' ]
        },
        amBlogSlick: {
            deps: [ 'jquery' ]
        }
    }
};

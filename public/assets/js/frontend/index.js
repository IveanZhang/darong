define(['jquery', 'bootstrap', 'frontend',], function ($, undefined, Frontend) {

    var Controller = {
        index: function () {
            console.log(Config.cityList);
        },
        tour: function () {
            console.log(Config.productlist);
        },
        tour_detail: function() {
            console.log(Config.contentList);
        },
        blog_detail: function() {
            console.log(Config.newContent);
        }
    };
    return Controller;
    
});
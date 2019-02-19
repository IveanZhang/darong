define(['jquery', 'bootstrap', 'frontend',], function ($, undefined, Frontend) {

    var Controller = {
        index: function () {
            $('.filter-button-group button')[0].click();
            $('.blog-post .desc .date').each(function(e) {
                this.innerHTML = timeConverter(this.innerHTML);
            });
        },
        blog: function () {
            $('.blog-post .desc .date').each(function(e) {
                this.innerHTML = timeConverter(this.innerHTML);
            });

            $('article .desc .meta span').each(function(e) {
                this.innerHTML = timeConverter(this.innerHTML);
            });
        }, 
        blog_detail: function() {
            $('.sidebar-box .block-21 .text .meta .createtime').each(function(e) {
                this.innerHTML = timeConverter(this.innerHTML);
            });
        },
        tour: function () {
            console.log(Config.recomLists);
        },
        tour_detail: function() {
            console.log(Config.contentList);
        }
    };
    return Controller;
});
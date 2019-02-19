define(['jquery', 'bootstrap', 'frontend',], function ($, undefined, Frontend) {

    var Controller = {
        index: function () {
            function validateEmail(email) {
                var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(email);
              }

            $('.filter-button-group button')[0].click();
            $('.blog-post .desc .date').each(function(e) {
                this.innerHTML = timeConverter(this.innerHTML);
            });
            $('.subscribe-form .form-group .submit').on('click', function(e){
                e.preventDefault();

                const email = $('.subscribe-form .form-group input[type=email]');
                if(validateEmail(email.val())){
                    $('.alert').addClass('show');
                    setTimeout(function(){ $('.alert').removeClass('show');}, 2000);

                    $('.invalid-feedback').hide();
                    email.val('');
                }else{
                    $('.invalid-feedback').show();
                }
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
        },
        tour_detail: function() {
            console.log(Config.contentList);
        }
    };
    return Controller;
});
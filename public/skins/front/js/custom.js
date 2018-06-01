$(document).ready(function () {

    function showProgress(object, data) {

        var i;

        for (i = 0; i < object.length; i++) {

            $(object[i]).show().animate({

                'width': data[i]
            }, 800, function (e) {
                e.preventDefault();
            });
        }
    }

    var elementPosition = $(".divider hr:even").position().top;
    var languagePercent = ['100%', '80%'];
    var progressBar = $(this).find('.progress-bar');

    $(this).on('scroll', function () {

        if ($(this).scrollTop() >= elementPosition) {

            showProgress(progressBar, languagePercent);
        }

    });

    var images = $('.skill-holder img');

    var i;

    for (i = 0; i < images.length; i++) {

        $(images[i]).hover(function () {
            $(this).css({
                'filter': 'grayscale(0)',
                'cursor': 'pointer'

            });
        }, function () {
            $(this).removeAttr('style');
        });
    }

});



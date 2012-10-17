(function($) {
    $.fn.thumbnailer = function(options) {
        var opts = $.extend({}, $.fn.thumbnailer.defaults, options);
        // the plugin functionality goes in here
        thumbnailBase = $(this);
        imageContainer = thumbnailBase.find('.primary-image');

        return this.each(function() {
            $(this).find('a').click(onClick);
        });

        function onClick(event) {
            event.preventDefault();
            newImage = $(this).find('img').attr('src');
            $('#primary-image').scrollTo($(this).attr('href'), 500);

            return false;
        }
    }

    $.fn.thumbnailer.defaults = {id: 'images'}

})(jQuery);
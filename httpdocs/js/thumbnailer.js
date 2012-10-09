(function($) {
    $.fn.thumbnailer = function(options) {
        var opts = $.extend({}, $.fn.thumbnailer.defaults, options);
        // the plugin functionality goes in here
        thumbnailBase = $(this);
        imageContainer = thumbnailBase.find('.primary-image');

        return this.each(function() {
            $(this).find('a').click(onClick);
        });

        function onClick() {
            newImage = $(this).find('img').attr('src');
            imageContainer.attr('src', newImage);
            console.log(newImage);
            return false;
        }
    }

    $.fn.thumbnailer.defaults = {id: 'thumbnails'}

})(jQuery);
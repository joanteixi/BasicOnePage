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
            imageContainer.fadeOut(function() {
                imageContainer.attr('src', newImage);
            });
            imageContainer.fadeIn();

            return false;
        }
    }

    $.fn.thumbnailer.defaults = {id: 'images'}

})(jQuery);
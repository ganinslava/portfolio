jQuery(function($) {


    $('.upload-img-btn').on('click', function(e) {
        e.preventDefault();
        var inputUrl = $(this).prevAll('.imgUrl');
        var inputTitle = $(this).prevAll('.imgTitle');
        var prevImg = $(this).prevAll('.imgPrev');
        console.log(prevImg.attr('src'));

        var frame              =  wp.media({
            title:                'Выберите или загрузите изображение',
            button:               {text: 'Использовать это изображение'},
            multiple:             false
        });
        frame.open();
        frame.on('select', function() {
            var attachment = frame.state().get('selection').first().toJSON();
            inputUrl.val(attachment.url);
            inputTitle.val(attachment.title);
            prevImg.attr("src", attachment.url);
        });
    });

    $('.upload-video-btn').on('click', function(e) {
        e.preventDefault();
        var inputUrl = $(this).prevAll('.videoUrl');
        var inputTitle = $(this).prevAll('.videoTitle');
        var prevVideo = $(this).prevAll('.videoPrev');
        var prevVideoSrc = prevVideo.find('.videoPrevSrc');
        console.log(prevVideo.attr('src'));

        var frame              =  wp.media({
            title:                'Выберите или загрузите видео',
            button:               {text: 'Использовать это видео'},
            multiple:             false
        });
        frame.open();
        frame.on('select', function() {
            var attachment = frame.state().get('selection').first().toJSON();
            inputUrl.val(attachment.url);
            inputTitle.val(attachment.title);
            prevVideoSrc.attr("src", attachment.url);
        });
    });


});
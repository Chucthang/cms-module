$(document).ready(function() {
        var media = $('video').not("[autoplay='autoplay']"),
            interface = $('button'),
            tolerance = 200;

        function checkMedia() {

            var current = $(window).scrollTop(),
                scrollTop = current + tolerance,
                scrollBottom = current + $(window).height() - tolerance;

            media.each(function(index, el) {

                var yTopMedia = $(this).offset().top,
                    yBottomMedia = $(this).height() + yTopMedia;

                if (scrollTop < yBottomMedia && scrollBottom > yTopMedia) {
                    $(this).get(0).play();
                    interface.text('PAUSE');
                   
                } else {
                    $(this).get(0).pause();
                    interface.text('PLAY');

                }
            }).on('ended', function() {
                interface.text('PLAY');
            });
        }
        
        interface.click(function() {
            if($(".type-8 .bg-video").hasClass("none-bg")){
                $(".type-8 .bg-video").removeClass("none-bg");
            } else{
                $(".type-8 .bg-video").addClass("none-bg");
            }
            if($('.bg-video').hasClass('none-bg')){
                $('.autoplay').css('visibility', 'hidden');
                $('.pause').css('visibility', 'visible');

            }else{
                $('.autoplay').css('visibility', 'visible');
                $('.pause').css('visibility', 'hidden');
            }

            if (media[0].playing) media.get(0).pause();
            else media.get(0).play();

        });
        $(window).scroll(checkMedia);

        Object.defineProperty(HTMLMediaElement.prototype, 'playing', {
            get: function() {
                return !!(this.currentTime > 0 && !this.paused && !this.ended && this.readyState > 2);
            }
        });
});
$(document).ready(function () {



function loadVideo(videoUrl, videoBlock) {
    var videoTag = '<iframe src="' + videoUrl + '" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
    $(videoBlock).html(videoTag);
}

function loadShowVideo (videoUrl, videoBlock) {
    if ($('*').is(videoBlock)) {
        var vFlag = true;
        $(window).on('scroll',function(){
            if ($(window).scrollTop() > ($(videoBlock).offset().top - 2000) && vFlag) {
            vFlag = false;
                if ($(videoBlock).find('iframe').length == 0) {
                        loadVideo(videoUrl, videoBlock);
                }
            }
        });
    }
}

loadShowVideo('https://www.youtube.com/embed/Bd7-02rghHo', '#video-team');

})
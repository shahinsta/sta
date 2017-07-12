var data = "";
$(document).ready(function () {

    // //Control Videos
    // $('.video_box').click(function () {
    //     if($(window).width() > 480 ){
    //         $('.video_box').next().removeClass('active-title');
    //         $(this).next().addClass('active-title');
    //     }
    //     $('.play_icon').show();
    //     $('.videos').css({'opacity': '1', 'cursor': 'pointer', 'border': '3px #eee solid'});
    //     data = $(this).data('video');
    //     $('#video iframe').attr('src', 'http://tv.parsonline.com/embed.php?id=' + data);
    //     $('#play-' + data).hide();
    //     $('#img-' + data).css({'opacity': '.5', 'cursor': 'default', 'border': '3px #ff0000 solid'});
    //     $('#mbl-play-' + data).hide();
    //     $('#mbl-img-' + data).css({'opacity': '.5', 'cursor': 'default', 'border': '3px #ff0000 solid'});
    // });

    //************

    setTimeout(function(){
        $('.filter_container_duration').find('.filter_container_main').html('<input class="filter_input_checkbox" data-filter="duration" data-value="24" type="checkbox"> 24 ماهه (به همراه 50 گیگابایت ترافیک هدیه) <br><input class="filter_input_checkbox" data-filter="duration" data-value="12" type="checkbox"> 12 ماهه (به همراه 20 گیگابایت ترافیک هدیه)<br><input class="filter_input_checkbox" data-filter="duration" data-value="6" type="checkbox"> 6 ماهه (به همراه 6 گیگابایت ترافیک هدیه)<br>');
    },1000);
});
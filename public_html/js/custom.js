$(document).ready(function () {

// загрузка видео при скролле

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

// окно продлить знак - 1 шаг

var clickEvent = document.ontouchstart !== null ? 'click' : 'touchstart';

 $('#call-first-step').click(function(){
	$.fancybox.open({
		src: '#step1',
		type: 'inline',
        clickSlide: "false"
	});
});


// проверка форм на ошибки

/* $('#step1').on('submit', function (e) {
    var check = true;

    if ($(this).find('input[name="name"]').val() == "") {
        $name = $(this).find('input[name="name"]');
        $name.closest('label').addClass('error');
        $name.val('Вы не ввели ' + $name.data('hint'));
        check = false;
        e.preventDefault();

    } else {

        $phone_num = $(this).find('input[name="phone"]').val().replace(/\D+/g, "");  
            
        if ($phone_num.length < 11) {
            $phone = $(this).find('input[name="phone"]');
            $phone.closest('label').addClass('error');
            $phone.val('Введите корректный номер');
            check = false;
            e.preventDefault();
        }
    }
    if (check == true) {   
        e.preventDefault();
        $.fancybox.close();
	    $.fancybox.open({
		    src: '#step2',
		    type: 'inline',
            clickSlide: "false",
            hideOnOverlayClick : false,
            closeClick  : false,
            helpers : { 
                overlay : {closeClick: false} // prevents closing when clicking OUTSIDE fancybox
            }
	    });
    }
}); */

$('#step1').add('#call-modal').add('#tarif-order').on('submit', function (e) {
      var check = true;
      var formId = $(this).find('input[name="title"]').val();
        

    if ($(this).find('input[name="name"]').val() == "") {
        $name = $(this).find('input[name="name"]');
        $name.closest('label').addClass('error');
        $name.val('Вы не ввели ' + $name.data('hint'));
        check = false;
        e.preventDefault();

    } else {

        $phone_num = $(this).find('input[name="phone"]').val().replace(/\D+/g, "");  
            
        if ($phone_num.length < 11) {
            $phone = $(this).find('input[name="phone"]');
            $phone.closest('label').addClass('error');
            $phone.val('Введите корректный номер');
            check = false;
            e.preventDefault();
        }
    }

    if (check == true && formId == "step1") {   
        e.preventDefault();
        $.fancybox.close();
	    $.fancybox.open({
		    src: '#step2',
		    type: 'inline',
            clickSlide: "false",
            hideOnOverlayClick : false,
            closeClick  : false,
            helpers : { 
                overlay : {closeClick: false} // prevents closing when clicking OUTSIDE fancybox
            }
	    });
    } else if (check == true && formId == "Call-order") {

        var oldval = $(this).find('input[type="submit"]').val();
        $(this).find('input[type="submit"]').val("Подождите...");
        $(this).find('input[type="submit"]').attr("disabled", "disabled");
            setTimeout(function() {
                $(this).find('input[type="submit"]').removeAttr("disabled");
                $(this).find('input[type="submit"]').val(oldval);
            }, 6000);
/*             window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({'event': formId});
            console.log('event', formId); */

        }
});

/* ============================================ */

$('#step2 form').on('submit', function (e) {
    var check = true;

    if ($(this).find('input[name="number"]').val() == "") {
        $number = $(this).find('input[name="number"]');
        $number.closest('label').addClass('error');
        $number.val('Вы не ввели ' + $number.data('hint'));
        check = false;
        e.preventDefault();

    }  else if ($(this).find('input[name="owner"]').val() == "") {
        $owner = $(this).find('input[name="owner"]');
        $owner.closest('label').addClass('error');
        $owner.val('Вы не ввели ' + $owner.data('hint'));
        check = false;
        e.preventDefault();

    }  else if ($(this).find('input[name="email"]').val() == "")  {
        $mail = $(this).find('input[name="email"]');
        $mail.closest('label').addClass('error');
        $mail.val('Вы не ввели ' + $mail.data('hint'));
        check = false;
        e.preventDefault();
    }

    if (check == true) {

        var oldval = $(this).find('input[type="submit"]').val();
        $(this).find('input[type="submit"]').val("Подождите...");
        $(this).find('input[type="submit"]').attr("disabled", "disabled");
            setTimeout(function() {
                $(this).find('input[type="submit"]').removeAttr("disabled");
                $(this).find('input[type="submit"]').val(oldval);
            }, 6000);
/*             window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({'event': formId});
            console.log('event', formId); */

        }
}); 

 // убираем сообщение об ошибке на форме при установке курсора

    $('.form-container form input:not([type="submit"])').on(clickEvent, function () {
        if ($(this).closest('label').hasClass('error')) {
            $(this).val('');
            $(this).closest('label').removeClass('error');
        }
    });

    // выравниваем по высоте примечания в тарифах

     function equalHight () {
        let elems = $('#tariffs .js-match-height-bottom');
        let maxH = 0;
        elems.each(function (index, elem) {
            if (maxH < $(elem).outerHeight()) {
                maxH = $(elem).outerHeight();
            }
            return maxH;
        });
        elems.each(function (index, elem)  {
            $(elem).css('minHeight', maxH);
        });     
    };

    equalHight (); 

$.tarifs = {
        tz: {
            id: '00000',
            name: 'Продление товарного знака',
            old_price: 6990,
            new_price: 3990,
            discount: 20,
            descript: 'подзаголовок/описание или ничего',
        },
        tz_changes: {
            id: '11111',
            name: 'Товарный знак: продление + изменения',
            old_price: 16990,
            new_price: 6990,
            discount: 30,
            descript: 'подзаголовок / описание',
        },
        izobretenie: {
            id: '2222222',
            name: 'Продление прав на изобретение',
            old_price: 6990,
            new_price: 3990,
            discount: 10,
            descript: 'подзаголовок или описание',
        },        
        prom_obrazec: {
            id: '333333',
            name: 'Продление прав на промышленный образец',
            old_price: 6990,
            new_price: 3990,
            discount: 20,
            descript: 'подзаголовок/описание или ничего',
        }               
    }    


    // заказ конкретного тарифа

    $('#tariffs .choose-tarif').add('.action .choose-tarif').on(clickEvent, function () {

        var tarif;
        tarif = $(this).data('tarif');  
                
        $('#tarif-order .modal-title').text($.tarifs[tarif].name);
        $('#tarif-order .modal-subtitle').text($.tarifs[tarif].descript);

    });  




});
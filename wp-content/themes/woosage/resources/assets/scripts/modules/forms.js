
export default function forms() {
    /** contact 7 form logic */
    if($('.wpcf7').length){
        $('.wpcf7-form br').remove();
    }
    $('.postition-form .btn.main').addClass('disabled');
    $('.postition-form .wpcf7-submit').attr('disabled','disabled');
    $('.postition-form .wpcf7-list-item.first.last input').on('change', function() {
      if (!$(this).is(':checked')) {
        $('.postition-form .btn.main').addClass('disabled');
        $('.postition-form .wpcf7-submit').attr('disabled','disabled');
      } else {
        $('.postition-form .btn.main').removeClass('disabled');
        $('.postition-form .wpcf7-submit').removeAttr('disabled');
      }
    });
    $('.postition-form .btn.main').on('click', function(e) {
        e.preventDefault();
        $('.postition-form .wpcf7-submit').trigger('click');
    });

    $('#select-position').val($('#popForm h3').text());   

    $('.postition-form .attach').on('click', function() {
        $('.wpcf7-form-control-wrap input').trigger('click');
    })
    $('input[type=file]').change(function () {
        let text = $(this).val();
        let fileName = text.split('\\', -1).pop().split('/').pop();
        $('.file-text.text').remove();
        $('<div class="file-text text flex ai-center"><span>'+ fileName +'</span><span class="icon close"></span></div>').insertAfter('.postition-form .attach');
    })
    $(document).on('click','.icon.close',function () {
        $('input[type=file]').val('');
        $('.file-text.text').remove();
    }); 
      // input fields
    if ($('.postition-form input').length) {
        setTimeout(function() {
        $('.postition-form input').each(function() {
            $(this).parent().prev().removeClass('active');
            if(!$(this).val()) {
            $(this).parent().prev().removeClass('active');
            }
            $(this).on('focus',function(){
            $(this).parent().prev().addClass('active');
            }).blur(function() {
            if($(this).val().length < 1 ) {
                $(this).parent().prev().removeClass('active');
            }
            });
            if($(this).val().length > 0 ) {
            $(this).parent().prev().addClass('active');
            } else if(!$(this).attr('data-placeholder') === ''){
            $(this).parent().prev().addClass('active');
            } else if(!$(this).attr('autocomplete') === '') {
            $(this).parent().prev().addClass('active');
            }else {
            $(this).parent().prev().removeClass('active');
            }
        }) 
        
        $('.postition-form input').on('keyup', function () {
            if ($(this).val().length > 0) {
            $(this).parent().prev().addClass('active');
            } else {
            $(this).parent().prev().removeClass('active');
            }
        })

        $('.postition-form textarea').on('keyup', function () {
            if ($(this).val().length > 0) {
            $(this).parent().prev().addClass('active');
            } else {
            $(this).parent().prev().removeClass('active');
            }
        })
        },1500);
    }
}
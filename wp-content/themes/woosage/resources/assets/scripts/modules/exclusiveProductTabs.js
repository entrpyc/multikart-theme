export default function exclusiveProductTabs() {
    $('.section-exclusive-products-tabs .cat-name').on('click', function(){
        var that = $(this).attr('data-id');
        $(this).addClass('current');
        $('.section-exclusive-products-tabs .cat-name').not($(this)).removeClass('current');
        $('.single-content-result').removeClass('current');
        $('.single-content-result').each(function() {
            if($(this).attr('data-id') == that) {
                $(this).addClass('current');
            }
        });
    });
}

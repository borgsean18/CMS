jQuery(document).ready(function($){
    $('#shadowfiend_final_score').attr('readonly', true);
    $('#shadowfiend_review .inside .rwmb-meta-box > div:gt(0)').wrapAll('<div class="shadowfiend-enabled-review">');
    $('.shadowfiend-enabled-review > div:gt(0):even:lt(6)').each(function() {
        $(this).prev().addBack().wrapAll($('<div/>',{'class': 'shadowfiend-criteria'}));
    });
    var bkReviewCheckbox = $('#shadowfiend_review_checkbox'),
    bkReviewBox = $('.shadowfiend-enabled-review');

    if ( bkReviewCheckbox.is(":checked") ) {
            bkReviewBox.show();
        }
        
    bkReviewCheckbox.click(function(){
        bkReviewBox.slideToggle('slow');
    });
    function shadowfiendAvrScore() { 
        var i = 0;
        var shadowfiend_cs1=0, shadowfiend_cs2=0, shadowfiend_cs3=0, shadowfiend_cs4=0, shadowfiend_cs5=0, shadowfiend_cs6=0;
        
        var shadowfiend_ct1 = $('input[name=shadowfiend_ct1]').val();
        var shadowfiend_ct2 = $('input[name=shadowfiend_ct2]').val();
        var shadowfiend_ct3 = $('input[name=shadowfiend_ct3]').val();
        var shadowfiend_ct4 = $('input[name=shadowfiend_ct4]').val();
        var shadowfiend_ct5 = $('input[name=shadowfiend_ct5]').val();
        var shadowfiend_ct6 = $('input[name=shadowfiend_ct6]').val();          
        if (shadowfiend_ct1) { i+=1; shadowfiend_cs1 = parseFloat($('input[name=shadowfiend_cs1]').val()); } else { shadowfiend_ct1 = null; }
        if (shadowfiend_ct2) { i+=1; shadowfiend_cs2 = parseFloat($('input[name=shadowfiend_cs2]').val()); } else { shadowfiend_ct2 = null; }
        if (shadowfiend_ct3) { i+=1; shadowfiend_cs3 = parseFloat($('input[name=shadowfiend_cs3]').val()); } else { shadowfiend_ct3 = null; }
        if (shadowfiend_ct4) { i+=1; shadowfiend_cs4 = parseFloat($('input[name=shadowfiend_cs4]').val()); } else { shadowfiend_ct4 = null; }
        if (shadowfiend_ct5) { i+=1; shadowfiend_cs5 = parseFloat($('input[name=shadowfiend_cs5]').val()); } else { shadowfiend_ct5 = null; }
        if (shadowfiend_ct6) { i+=1; shadowfiend_cs6 = parseFloat($('input[name=shadowfiend_cs6]').val()); } else { shadowfiend_ct6 = null; }
        var shadowfiendTotal = (shadowfiend_cs1 + shadowfiend_cs2 + shadowfiend_cs3 + shadowfiend_cs4 + shadowfiend_cs5 + shadowfiend_cs6);
        var shadowfiendFinalScore = Math.round((shadowfiendTotal / i)*10)/10;
        
        $("#shadowfiend_final_score").val(shadowfiendFinalScore);
        
        if ( isNaN(shadowfiendFinalScore) ) { $("#shadowfiend_final_score").val(''); }
    }
    $('.rwmb-input').on('change', shadowfiendAvrScore);
    $('#shadowfiend_cs1, #shadowfiend_cs2, #shadowfiend_cs3, #shadowfiend_cs4, #shadowfiend_cs5, #shadowfiend_cs6, #shadowfiend_author_score').on('slidechange', shadowfiendAvrScore);
});
	









// --------------------------  ���� �����̵� -------------------------- //


$(window).load(function(){
    //���� �����̴�
    $('.bxslider').bxSlider({
         auto:true,
         autoHover: true,
        controls:true,
         autoControls: true,

         useCSS: false 
    });

    //�����̴� ����
    $('.main-slide>ul').bxSlider(); //���ν����̴�
    $('.footer-slide>ul').bxSlider();  // ǲ�ͽ����̴�


    //���� �����̴� ����
    var height = $(window).height()*0.9;
    $('.wrap .main_img .bg_box, .bx-wrapper, .bx-viewport').css({
        'height':height + 'px'
    });


    //features list ����� �̹���
    if($(window).width() < 800){
        $('.features_list li').addClass('m_bg');
    }else{
        $('.features_list li').removeClass('m_bg');
    }

});

$(window).resize(function(){

    //���� �����̴� ����
    var height = $(window).height()*0.9;
    $('.wrap .main_img .bg_box, .bx-wrapper, .bx-viewport').css({
        'height':height + 'px'
    });

    //features list ����� �̹���
    if($(window).width() < 800){
        $('.features_list li').addClass('m_bg');
    }else{
        $('.features_list li').removeClass('m_bg');
    }
});











	





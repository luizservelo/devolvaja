$(function(){
    $('.banner').owlCarousel({
        items: 1,
        dots: true,
        nav: false,
        loop: true,
        autoplay: true,
        margin: 0,
        autoplayTimeout: 8000
    });
    $('input[name="choice"]').change(function(){

        var valor = $(this).val();

        if(valor == "outro"){
            $('.inputOther').fadeIn();
        }
        else{
            $('.inputOther').fadeOut();
        }
    })

    $('.closeModal').click(function(){
        $('.modalArea').fadeOut();
        $('body, html').removeClass('travaBody');
    });

    $('.launchModal').click(function(e){
        e.preventDefault();
        $('.modalArea').css('display', 'flex');
    })
    $('[data-toggle="tooltip"]').tooltip();   
    
})

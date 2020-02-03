<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-152834376-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-152834376-1');
</script>
    <title>C3PA</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!--Normalize-->
    <link rel="stylesheet" href="/src/css/bundles/normalize.css">
    <!--Main styles-->
    <!--Font awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="/src/css/bundles/owl.carousel.min.css">
    <link rel="stylesheet" href="/src/css/bundles/owl.theme.default.min.css">
    <link rel="stylesheet" href="/src/css/bundles/jquery.scrollbar.css">
    <link rel="stylesheet" href="/src/css/bundles/jquery.rating.css">
    <link rel="stylesheet" href="/src/css/bundles/main.css">
    <link rel="stylesheet" href="/src/css/bundles/media.css">


    <!-- Cookie Consent by https://www.FreePrivacyPolicy.com -->
 <!--    <script type="text/javascript" src="//www.FreePrivacyPolicy.com/cookie-consent/releases/3.0.0/cookie-consent.js"></script>
    <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {
        cookieconsent.run({"notice_banner_type":"headline","consent_type":"express","palette":"dark","change_preferences_selector":"#changePreferences","language":"en","website_name":"c3pa.net","change_settings_element":"Learn more"});
    });
    </script>   

    <noscript>GDPR Cookie Consent by <a href="https://www.freeprivacypolicy.com/">FreePrivacyPolicy</a></noscript> -->
<!-- End Cookie Consent -->

</head>
<body>

<header class="header">
    <nav class="container">
        <a href="/" class="header__logo">
            <img src="/img/logo_main.png" height="auto" width="80"/>
        </a>
        <button type="button" class="header__menu" id='headerCollapseButton'>
            <span class="line1"></span>
            <span class="line2"></span>
            <span class="line3"></span>
        </button>
        <div class="header__full flex" id="headerCollapse">
            <ul class="header__links">
                    <li class="header__link"><a href="/affiliates">Affiliates</a></li>
                    <li class="header__link"><a href="/advertisers">Advertisers</a></li>
                    <li class="header__link"><a href="/about">About</a></li>
            </ul>
            <div class="header__auth__container">
                <a href="/signin" class="header__auth arrow">Sign in</a>
                <a href="/signup" class="header__auth arrow">Sign up</a>
            </div>
        </div>
    </nav>
</header>

@yield('content')




<footer class="footer">
    <div class="container">
        <div class="footer__first-row">

            <div class="footer__get-in-touch">
                <div class="footer__get-in-touch__list">
                    <button type="button" data-label="support@c3pa.net" class="footer__get-in-touch__set-mail">General
                        inquiry
                    </button>
                    <button type="button" data-label="ak@c3pa.net" class="footer__get-in-touch__set-mail">Affiliate
                        question
                    </button>
                    <button type="button" data-label="is@c3pa.net" class="footer__get-in-touch__set-mail">Advertiser
                        question
                    </button>
                    <button type="button" data-label="support@c3pa.net" class="footer__get-in-touch__set-mail">
                        Support
                    </button>
                    <button type="button" data-label="marketing@c3pa.network" class="footer__get-in-touch__set-mail">
                        Marketing questions
                    </button>
                </div>
                <div class="footer__get-in-touch__bg"></div>
                <button type="button" class="footer__get-in-touch__button">
                    Get in touch <img src="/img/get-in-touch.png" height="15" width="23"/>
                </button>
                <div class="footer__get-in-touch__mail-link">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <a href=""></a>
                </div>
            </div>

            <div class="footer__social">
                <h6 class="footer__social__title">Follow us</h6>
                <div class="footer__social__items">
                    <a href="https://www.facebook.com/C3PAnetwork/" class="footer__social__item">
                            <i class="fab fa-facebook-f"></i>
                    </a>

                    <a href="https://www.instagram.com/c3pa_agency/" class="footer__social__item">
                            <i class="fab fa-instagram"></i>
                        </a>

                    <a href="https://twitter.com/c3panet" class="footer__social__item">
                            <i class="fab fa-twitter"></i>
                    </a>

                    <a href="https://vk.com/c3pa.network" class="footer__social__item">
                            <i class="fab fa-vk"></i>
                    </a>

                    <a href="https://www.linkedin.com/company/c3pa/" class="footer__social__item">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>

        <span class="legal__info">
                CYTRIPIA OÜ<br>
                Pae tn 25-47, Lasnamäe linnaosa, Tallinn, Harju maakond, 11414<br>
                For questions and suggestions: support@c3pa.net
                <br><br>
                © 2014-2019 C3PA Network
        </span>

        <div class="footer__second-row">
            <div class="footer__links">
                <!-- <a href="" class="footer__link">Affiliates</a>
                <a href="" class="footer__link">Advertisers </a>
                <a href="" class="footer__link">About</a>
                <a href="" class="footer__link">Careers</a>
                <a href="" class="footer__link">Promo</a>
                <a href="" class="footer__link">News</a> -->
            </div>
            <span class="footer__rights"></span>
        </div>



    </div>
</footer>

<script src="/src/js/jquery-3.3.1.min.js"></script>
<!--Siema Carousel-->
<script src="/src/js/owl.carousel.min.js"></script>
<script src="/src/js/jquery.scrollbar.min.js"></script>
<script src="/src/js/jquery.rating-2.0.js"></script>
<!--Main front js-->
<script src="/src/js/slider.js"></script>
<script src="/src/js/main.js"></script>
<script>
   $('.rating__star').rating({
    fx: 'float',
    readOnly: true,
    titles: ['Reviwes','Reviwes','Reviwes'],
    image: '/img/stars.png',
    loader: '/img/ajax-loader.gif',
    minimal: 0.1,
    url: 'rating.php',
    callback: function(responce){
        this.vote_success.fadeOut(2000);
        if(responce.msg) alert(responce.msg);
    }
});
</script>

{{-- SignUp --}}
<script>
$('#tab1').click(function() {
    $(this).addClass('active');
    $(this).removeClass('ok');
    $("#tab2").removeClass('ok');
    $("#tab3").removeClass('ok');
    $("#tab2").removeClass('active');
    $("#tab3").removeClass('active');
    $('.tabs_content1').addClass('active');
    $('.tabs_content2').removeClass('active');
    $('.tabs_content3').removeClass('active');
});  
$('#tab2').click(function () {
    $(this).addClass('active');
    $("#tab1").addClass('ok');
    $("#tab1").removeClass('active');
    $("#tab3").removeClass('active');
    $('.tabs_content1').removeClass('active');
    $('.tabs_content2').addClass('active');
    $('.tabs_content3').removeClass('active');
}); 
$('#tab3').click(function () {
    $(this).addClass('active');
    $("#tab1").removeClass('active');
    $("#tab2").removeClass('active');
    $("#tab1").addClass('ok');
    $("#tab2").addClass('ok');
    $('.tabs_content1').removeClass('active');
    $('.tabs_content2').removeClass('active');
    $('.tabs_content3').addClass('active');
}); 
$('#button1').click(function() {
    $("#tab1").addClass('ok');
    $("#tab2").addClass('active');
    $("#tab1").removeClass('active');
    $('.tabs_content1').removeClass('active');
    $('.tabs_content2').addClass('active');
    $('.tabs_content3').removeClass('active');
});  
$('#button2').click(function() {
    $("#tab1").removeClass('ok');
    $("#tab2").removeClass('ok');
    $("#tab2").removeClass('active');
    $("#tab1").addClass('active');
    $('.tabs_content1').addClass('active');
    $('.tabs_content2').removeClass('active');
});  
$('#button3').click(function() {
    $("#tab2").addClass('ok');
    $("#tab3").addClass('active');
    $("#tab2").removeClass('active');
    $('.tabs_content1').removeClass('active');
    $('.tabs_content2').removeClass('active');
    $('.tabs_content3').addClass('active');
});  
$('#button4').click(function() {
    $("#tab2").removeClass('ok');
    $("#tab3").removeClass('active');
    $("#tab2").addClass('active');
    $('.tabs_content1').removeClass('active');
    $('.tabs_content2').addClass('active');
    $('.tabs_content3').removeClass('active');
});  
$('select').each(function(){
    // Variables
    var $this = $(this),
        selectOption = $this.find('option'),
        selectOptionLength = selectOption.length,
        selectedOption = selectOption.filter(':selected'),
        dur = 500;
    var reload = false;
    if ($(this).hasClass('onchange')) reload = true;    
    $this.hide();
    // Wrap all in select box
    $this.wrap('<div class="select"></div>');
    // Style box

    $('<div>',{
        class: 'select__gap',
        text: selectedOption.eq(0).text()
    }).insertAfter($this);  
    
    var selectGap = $this.next('.select__gap'),
        caret = selectGap.find('.caret');

    $('<div>',{
        class: 'select__bg',
    }).insertAfter(selectGap);  
    var selectBg = selectGap.next('.select__bg'); 
    // Add ul list
    $('<ul>',{
        class: 'select__list'
    }).insertAfter(selectBg);  
    var selectList = selectBg.next('.select__list');
    // Add li - option items
    for(var i = 1; i < selectOptionLength; i++){
        if (!$(this).hasClass('pag')) {
        
        $('<li>',{
                class: 'select__item',
                html: $('<span>',{
                    text: selectOption.eq(i).text()
                })
            })
            .attr('data-value', selectOption.eq(i).val())
            .appendTo(selectList);
        } 
        else {
                $('<li>',{
                class: 'select__item',
                html: $('<a>',{
                    text: selectOption.eq(i).text()
                }).attr('href', selectOption.eq(i).val())
            })
            .attr('data-value', selectOption.eq(i).val())
            .appendTo(selectList);
        }
    }
    // Find all items
    var selectItem = selectList.find('li'); 
    // selectList.hide(0);
    selectGap.on('click', function(){
        if(!$(this).hasClass('on')){
            $(this).addClass('on');
            $(this).parent().addClass('on');
            $('.select__list').css('display', 'block');
             var height = $('.select__list').height();
            $('.select__bg').css('top',  -height - 15);
            $('.select__list').css('display', 'none');
            $('.select__list').show(300);
            selectItem.on('click', function(){
                var chooseItem = $(this).data('value'); 
        if (reload) location = chooseItem;  
                $('select').val(chooseItem).attr('selected', 'selected');
                selectGap.text($(this).find('span').text());    

                selectGap.removeClass('on');
                $('.select__bg').removeAttr('style');
                $('.select__list').hide();
                $(this).parent().parent().removeClass('on');
            }); 
        } else {
            $(this).removeClass('on');
            $(this).parent().removeClass('on');
            $('.select__bg').removeAttr('style');
            $('.select__list').hide();
        }
    });
});
</script>




<!-- Scripts -->
{{-- <script src="{{ asset('js/app.js') }}"></script> --}}
@stack('scripts')
</body>
</html>

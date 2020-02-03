document.addEventListener('DOMContentLoaded', ready);

function ready() {

    //    menu trigger event listener
    document.querySelector('#headerCollapseButton').addEventListener('click', headerCollapse);
    //    menu trigger event listener end

    //    get in touch event
    document.querySelector('.footer__get-in-touch__button').addEventListener('click', getInTouch);
    //    get in touch event end

    //    get in touch set mail event
    let setMailButtons = document.querySelectorAll('.footer__get-in-touch__set-mail');
    for (let setMailButton  of setMailButtons){
        setMailButton.addEventListener('click', setMail);
    }
    //    get in touch set mail event end
}

//    menu trigger handler
function headerCollapse() {
    this.classList.toggle('open');
    document.querySelector('#headerCollapse').classList.toggle('open');
}

//    menu trigger end

//    get in touch handler
function getInTouch() {
    this.classList.toggle('open');
    this.parentNode.classList.toggle('open');
}

//    get in touch handler end

//    get in touch set mail handler
function setMail() {
    let mail = this.dataset.label;
    let link = document.querySelector('.footer__get-in-touch__mail-link a');
    link.parentNode.classList.add('open');
    link.innerHTML = mail;
    link.href = `mailto:${mail}`;
    document.querySelector('.footer__get-in-touch__button').classList.remove('open');
    document.querySelector('.footer__get-in-touch').classList.remove('open');

}
//    get in touch set mail handler end

$(window).scroll(function() {
    var height = $(window).scrollTop(); 

         /*Если сделали скролл на 100px задаём новый класс для header*/
    if(height > 1){
    $('header').addClass('header-fixed');
    } else{
         /*Если меньше 100px удаляем класс для header*/
    $('header').removeClass('header-fixed');
    }

});


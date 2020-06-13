var backdrop= document.querySelector(".backdrop");
var modal= document.querySelector(".modal");
var nope= document.querySelector(".modal__action--negative");
var buttons= document.querySelector(".main-header__items");

buttons.addEventListener('click', function(){
        backdrop.style.display= 'block';
        modal.style.display = 'block';
    });

nope.addEventListener('click',function(){
    modal.style.display= 'none';
    backdrop.style.display= 'none';
});

backdrop.addEventListener('click', function(){
    modal.style.display= 'none';
    backdrop.style.display= 'none';
})
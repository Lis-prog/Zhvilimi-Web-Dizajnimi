let slidePosition=0;
const slides = document.getElementsByClassName('slider-item');
const totalSlides = slides.length;

document.getElementById('slider-btn-next').addEventListener("click", function(){
    moveToNextSlide();
});

document.getElementById('slider-btn-prev').addEventListener("click", function(){
    moveToPrevSlide();
});

function updateSlidePosition(){
    for(let slide of slides){
        slide.classList.remove('slider-item-visible');
        slide.classList.add('slider-item-hidden');
    }
    slides[slidePosition].classList.add('slider-item-visible');
}

function moveToNextSlide(){
    if(slidePosition == totalSlides - 1){
        slidePosition = 0;
    }else{
        slidePosition++;
    }
    updateSlidePosition();
}

function moveToPrevSlide(){
    if(slidePosition == 0){
        slidePosition = 0;
    }else{
        slidePosition--;
    }
    updateSlidePosition();
}


$(document).ready(function(){
    $('.list').slick();
});
$('.list').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    draggable: false,
    prevArrow:`<button type='button' class='slick-prev slick-arrow'><i class='fa fa-angle-left' aria-hidden='true'></i></button>`,
    nextArrow:`<button type='button' class='slick-next slick-arrow'><i class='fa fa-angle-right' aria-hidden='true'></i></button>`
});

function RedirectIndex() {
    window.location = "./web/course-2.php";
}

const btnMoreIndex = document.querySelectorAll(".btn-more-index");
for (let index = 0; index < btnMoreIndex.length; index++) {
    const element = btnMoreIndex[index];
    element.addEventListener('click', RedirectIndex);
}
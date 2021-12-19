function Redirect() {
    window.location = "../web/course-2.html";
}
function RedirectIndex() {
    window.location = "./web/course-2.html";
}

const btnMore = document.querySelectorAll(".btn-more");
for (let index = 0; index < btnMore.length; index++) {
    const element = btnMore[index];
    element.addEventListener('click', Redirect);
}

const btnMoreIndex = document.querySelectorAll(".btn-more-index");
for (let index = 0; index < btnMoreIndex.length; index++) {
    const element = btnMoreIndex[index];
    element.addEventListener('click', RedirectIndex);
}
function Redirect() {
    window.location = "../web/course-2.php";
}


const btnMore = document.querySelectorAll(".btn-more");
for (let index = 0; index < btnMore.length; index++) {
    const element = btnMore[index];
    element.addEventListener('click', Redirect);
}


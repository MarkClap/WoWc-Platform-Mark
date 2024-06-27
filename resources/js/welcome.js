import "@splidejs/splide/dist/css/splide.min.css";
import Splide from "@splidejs/splide";

document.addEventListener("DOMContentLoaded", function () {
    var splide = new Splide(".splide", {
        type: "loop",
        autoplay: true,
    });

    splide.mount();
});

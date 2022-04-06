// carousel / hero image
const splide = new Splide("#image-slider", {
    heightRatio: 0.5,
    cover: true,
    type: "loop",
    autoplay: true,
    interval: 5000,
});
const bar = splide.root.querySelector(".splide__progress-bar");
splide.on("mounted move", function () {
    var end = splide.Components.Controller.getEnd() + 1;
    bar.style.width = String((100 * (splide.index + 1)) / end) + "%";
});
splide.mount();

// slider / informasi guru
const splide2 = new Splide("#slider-guru", {
    arrows: false,
    width: "auto",
    cover: true,
    type: "loop",
    autoplay: true,
    interval: 3000,
});

splide2.mount();

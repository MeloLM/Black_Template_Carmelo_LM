(function () {
    const second = 1000,
    minute = second * 60,
    hour = minute * 60,
    day = hour * 24;


    let x = setInterval(function() {

        let now = new Date().getTime();

        document.getElementById("days").innerText = Math.floor(now/(day));
        document.getElementById("hours").innerText = Math.floor((now%(day)/hour));
        document.getElementById("minutes").innerText = Math.floor((now%(hour)/minute));
        document.getElementById("seconds").innerText = Math.floor((now%(minute)/second));
    }, 1000);

}());
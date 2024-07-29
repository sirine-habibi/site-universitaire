document.body.onload = function () {
    nbr = 4;
    p = 0;
    container = document.getElementById("container");

    g = document.getElementById("g");
    d = document.getElementById("d");
    container.style.width = (800 * nbr) + "px";
    for (i = 1; i <= nbr; i++) {
        div = document.createElement("div");
        div.classList.add("photo");
        div.style.backgroundImage = "url('images/im" + i + ".jpg')";
        container.appendChild(div);

    }
}
g.onclick = function () {
    if (p > -nbr + 1)
        p--;
    container.style.transform = "translate(" + p * 800 + "px)";
    container.style.transition = "all 0.5s ease";

}
d.onclick = function () {
    if (p < 0)
        p++;
    container.style.transform = "translate(" + p * 800 + "px)";
    container.style.transition = "all 0.5s ease";

}





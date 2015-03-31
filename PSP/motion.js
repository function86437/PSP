var counter = 0;

document.getElementById("add").addEventListener("click", function(){

    var input = document.createElement("input");
    input.setAttribute("id",counter);
    input.style.border = "2px solid #888888";
    input.style.textAlign = "center";
    input.style.width = "40px";
    input.style.margin = "10px";
    input.style.backgroundColor = "#DDDDDD";

    var label = document.createElement("label");
    label.style.textAlign = "center";
    label.innerHTML = "實數" + counter;
    counter++;
    document.getElementById("top").appendChild(input);
    document.getElementById("top").appendChild(label);
});


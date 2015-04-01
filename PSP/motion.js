/**
*   Auto new input box when user click "new" button
*   @version 0.2
**/

window.onload = function() {
    //count amount of input box
    var counter = 0;

    var top = document.getElementById("top");

    /**
    *   Event listener for add button
    **/
    document.getElementById("add").addEventListener("click", function(){

        var input = document.createElement("input");
        input.setAttribute("name","input[]");
        input.style.border = "2px solid #888888";
        input.style.textAlign = "center";
        input.style.width = "40px";
        input.style.margin = "10px";
        input.style.backgroundColor = "#DDDDDD";

        var label = document.createElement("label");
        label.style.textAlign = "center";
        label.innerHTML = "實數" + counter;
        counter++;
        top.appendChild(input);
        top.appendChild(label);
    });

    /**
    *   Event Listener on submit button
    *
    **/
    document.getElementById("submit").addEventListener("click", function(){
        var size = document.createElement("input");

        size.innerHTML = counter;

        size.setAttribute("name", "size");
        size.setAttribute("type", "hidden");

        top.appendChild(size);

        document.getElementById("form").submit();

    });

}

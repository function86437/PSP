/**
*   Auto new input box when user click "new" button
*   @version 2.0
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

        document.getElementById("size").value = counter;
    });

}

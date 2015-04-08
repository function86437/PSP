/**
*   Auto new input box when user click "new" button
*   @version 3.0
*   @auther Banana
**/
window.onload = function() {
    //count amount of input box
    var counter = 0;

    var top = document.getElementById("top");

    var submit = document.getElementById("submit");

    var form = document.getElementById("form");
    /**
    *   Event listener for add button
    **/
    document.getElementById("add").addEventListener("click", function() {
        var input = document.createElement("input");
        var check = document.createElement("input");
        //Attribute of input box
        input.setAttribute("name","input[]");
        input.style.border = "2px solid #888888";
        input.style.textAlign = "center";
        input.style.width = "40px";
        input.style.margin = "10px";
        input.style.backgroundColor = "#DDDDDD";

        check.setAttribute("id", counter);
        check.setAttribute("type", "hidden");
        input.addEventListener("blur", function() {
            if(!regExp(input.value)) {
                input.style.backgroundColor = "green";
                input.style.border = "thick solid red";
                input.value = "";
                check.value = false;
            } else {
                input.style.backgroundColor = "";
                input.style.border = "";
                check.value = true;
            }
            console.log(input.value);
            console.log(regExp(input.value));
        });

        var label = document.createElement("label");
        label.style.textAlign = "center";
        label.innerHTML = "實數" + counter;
        counter++;
        top.appendChild(input);
        top.appendChild(check);
        top.appendChild(label);

        document.getElementById("size").value = counter;

    });

    sub.addEventListener("click", function() {
        for(var i = 0; i < counter; i++) {
            if(document.getElementById(i).value == "false") {
                alert("Some input box had error value");
            }
        }
        console.log(form);
        form.submit();
    });
}


/**
*   RegularExpression
*   @param str require string
**/
function regExp(str) {
    var patt = /\d(\.?\d)?/i;
    return patt.test(str);
}

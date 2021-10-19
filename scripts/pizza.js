document.getElementById("pizza_form").onsubmit = validate;


//disply address block when delivery option is selected
document.getElementById("delivery").onclick = function (){
    //display adress block
    document.getElementById("address-block").style.display ="block";
}

document.getElementById("pick-up").onclick = function (){
    //display adress block
    document.getElementById("address-block").style.display ="none";
}



function validate(){

    let isvalid = true;

    //clear err mess
    let errrors = document.getElementsByClassName("err");

        for (let i =0; i<errrors.length;i++){
            errrors[i].style.display = "none";
        }
    //validate first name
    let first = document.getElementById("fName").value;
    if(first==""){
        document.getElementById("err_fname").style.display ="block";
        isvalid = false;
    }
//validate last name
    let last = document.getElementById("lName").value;
    if(last=="") {
        document.getElementById("err_lname").style.display = "block";
        isvalid = false;;
    }
//validate size
    let size = document.getElementById("size").value;
    if(size=="none") {
        document.getElementById("err_size").style.display = "block";
        isvalid = false;
    }

    //validat pu or delivery
    let method = document.getElementsByName("method");
    let count = 0;
    for (let i =0; i<method.length;i++){
        if(method[i].checked);
        count++;
    }
    let deliveryChecked = document.getElementById("delivery").checked;
   if(address =="")

    return isvalid;
}
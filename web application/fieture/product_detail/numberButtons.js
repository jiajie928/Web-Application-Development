const myInput = document.getElementById("quantity");
function stepper(btn){
    let id = btn.getAttribute("id");
    let min = myInput.getAttribute("min");
    let max = myInput.getAttribute("max");
    let step = myInput.getAttribute("step");
    let val = myInput.getAttribute("value");

    let calcstep = (id == "increment") ? (step*1) : (step*-1);
    let newval = parseInt(val) + calcstep;

    if(newval >= min && newval<= max){
        myInput.setAttribute("value",newval)
    }
    
}
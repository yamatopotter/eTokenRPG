console.log("MAIN.JS - CARREGADO");

var skillCheckboxes = document.querySelectorAll("input.skillCheckbox");
let skillLimit = 3;

console.log(skillCheckboxes.length);

for (let i=0; i < skillCheckboxes.length; i++){
    skillCheckboxes[i].onclick = skillLimitSelection;
    console.log("A checkbox de numero "+i+" foi adicionada a função");
}

function skillLimitSelection(event){
    let checked = document.querySelectorAll(".skillCheckbox:checked");
    
    if(checked.length >= skillLimit+1){
        alert("Há o limite de 3 perícias apenas.")
        return false;
    }
    else{
        console.log("Habilidade adicionada a lista");
    }
}
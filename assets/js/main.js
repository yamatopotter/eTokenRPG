console.log("MAIN.JS - CARREGADO");

var skillCheckboxes = document.querySelectorAll(".skillCheckbox");
var birthdatePlayer = document.getElementById("dataNascimento");
let skillLimit = 3;

// console.log(skillCheckboxes.length);

// Adição de função onClick usando JS
for (let i=0; i < skillCheckboxes.length; i++){
    skillCheckboxes[i].onclick = skillLimitSelection;
    // console.log("A checkbox de numero "+i+" foi adicionada a função");
}

function skillLimitSelection(event){
    let checked = document.querySelectorAll(".skillCheckbox:checked");
    
    if(checked.length >= skillLimit+1){
        alert("Há o limite de 3 perícias apenas.")
        return false;
    }
    else{
        console.log("Habilidade adicionada/removida à lista");
    }
}

function olderThan18(event){
    let datePlayer = new Date(birthdatePlayer.value);
    let dateNow = new Date();

    if(datePlayer.getFullYear()+18>dateNow.getFullYear()){
        alert("Você não pode usar o sistema pois possui menos de 18 anos");
        document.getElementById("btnCadastrar").disabled = true;
    }

    console.log(datePlayer.getFullYear());
}
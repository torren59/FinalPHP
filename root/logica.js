function navitemselect(id){
    let seleccionado = document.getElementById(id);
    seleccionado.style.backgroundColor= "#103900";
    seleccionado.style.color= "white";
    if(id==1){
        let noseleccionado = document.getElementById(2);
        noseleccionado.style.backgroundColor= "#06BA63";
    }
    else{
        let noseleccionado = document.getElementById(1);
        noseleccionado.style.backgroundColor= "#06BA63";
    }
}
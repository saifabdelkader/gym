function saisie(txt_defaut, nom_controle)
{
   if( document.getElementById(nom_controle).value==txt_defaut)
         document.getElementById(nom_controle).value='';
}

function retablir(txt_defaut,nom_controle)
{
    if( document.getElementById(nom_controle).value=='')
    document.getElementById(nom_controle).value=txt_defaut;
}

function mev(txt_defaut,nom_controle){
    var longeur= document.getElementById(nom_controle).value.length;
    if
        (nom_controle=="pseudo")
    

     if(longeur< 4 || document.getElementById(nom_controle).value==txt_defaut)
    {
        document.getElementById(nom_controle).style.border='#CC3300 2px solid';
        switch(nom_controle){
                case "Prénom":
                b_prénom=false;
                break;
                case "Nom":
                b_nom=false;
                break;
                case "pseudo":
                b_pseudo=false;
                break;
                case "pass":
                b_pass=false;
                break;
                case "naissance":
                b_naiss=false;
                break;
        } 
    }
    else{
        document.getElementById(nom_controle).style.border='#333 1px solid';
        switch(nom_controle){
            case "Prénom":
            b_prénom=true;
            break;
            case "Nom":
            b_nom=true;
            break;
            case "pseudo":
            b_pseudo=true;
            break;

        }}
}
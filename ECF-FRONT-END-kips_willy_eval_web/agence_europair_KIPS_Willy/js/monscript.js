fetch("voyages.json")
.then(res => res.json())
.then (data => genererVoyages(data))


function genererVoyages(_data)
{

    let maSection = document.getElementById("films");//chercher l element container qui contient section ID film dans la page html
    for (let i = 0; i < _data.length; i++) {

        let monArticle = document.createElement("article");
        maSection.appendChild(monArticle);//creation des elements articles rattachement a la section ID film si appendchild Depent depent de getElement  
       let monTitre = document.createElement("h2");//creer l element h2 et inclure le titre 
        monTitre.innerHTML=_data[i].trip_title;
        monArticle.appendChild(monTitre);//ajouter h2 dans l'article 

        let monImage = document.createElement("img");//creer une image et l'inclure dans l'article
        monImage.src = './images/voyages/id'+ _data[i].trip_id+".jpg";
        monImage.setAttribute("alt",_data[i].trip_title);
        //donner l'attribut source a l'image  (src=) ajout atribut alt malvoyant Non voyant

        monArticle.appendChild(monImage);
        monImage.classList.add("gauche");

       let myResume = document.createElement("div");//creation d'un div dans l'article qui contient la description de l'image et un button "voir plus "
        myResume.classList.add("summary");
        monArticle.appendChild(myResume);
        myResume.innerHTML=(_data[i].trip_description).substr(0,200);  

        let myDescription = document.createElement("div");
        myDescription.classList.add("description");
        monArticle.appendChild(myDescription);


        let myButton = document.createElement("button");
        myButton.innerHTML= "lire la suite";
        myButton.id = "btnplus"+_data[i].id;
        myButton.name = "btnplus";
        myButton.classList.add ("btnplus");
        myResume.appendChild(myButton);

        let test=true;
        myButton.addEventListener("click",function(){
            if(test==true)
            {
            myDescription.innerHTML=_data[i].trip_description;
            test=false;}
            else{
                myDescription.innerHTML="";
                test=true;
            }

        })
    
    }

}
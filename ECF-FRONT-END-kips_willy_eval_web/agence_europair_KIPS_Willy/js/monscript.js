fetch("voyages.json")
.then(res => res.json())
.then (data => genererVoyages(data))


function genererVoyages(_data)
{
    let maSection = document.getElementById("films");
    for (let i = 0; i < _data.length; i++) {

        let monArticle = document.createElement("article");
        maSection.appendChild(monArticle);
       let monTitre = document.createElement("h2");
        monTitre.innerHTML=_data[i].trip_title;
        monArticle.appendChild(monTitre);

        let monImage = document.createElement("img");
        monImage.src = './images/voyages/id'+ _data[i].trip_id+".jpg";
        monImage.setAttribute("alt",_data[i].trip_title);

        monArticle.appendChild(monImage);
        monImage.classList.add("gauche");

       let myResume = document.createElement("div");
        myResume.classList.add("summary");
        monArticle.appendChild(myResume);
        myResume.innerHTML=_data[i].trip_description;  

  
    
    }
}
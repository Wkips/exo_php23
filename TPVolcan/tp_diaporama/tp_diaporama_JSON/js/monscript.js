let xhr= new XMLHttpRequest();


document.getElementById("btnDiapo").addEventListener("click",function(){

    let min = document.getElementById("txtmin").value;
    let max = document.getElementById("txtmax").value;
    loadJSON(min,max);
})


function loadJSON(_min,_max){
    xhr.open("GET","traitement.php?txtmin="+_min+"&txtmax="+_max,true);
   // xhr.responseType= "json";
    xhr.send();

    xhr.onload=function()
    {
        if (xhr.status ==200){
            let tabdata=JSON.parse(xhr.responseText);
            genererDiapo(tabdata);
        }
        else {
            console.log("Erreur"+xhr.status+":"+xhr.statusText);
        }
    }
}
    function genererDiapo(_tabdata)
    
    {
        let hook = document.getElementsByClassName("carousel-inner")[0];   //getElementByClassName[0]
        while (hook.firstChild) 
        { hook.removeChild(hook.firstChild);
            
        }



        let hookButton = document.getElementsByClassName("carousel-indicators")[0];

        while (hookButton.firstChild)
        {
            hookButton.removeChild(hookButton.firstChild);
        }


        for (let i = 0; i < _tabdata.length; i++) {

            let myitem = document.createElement("div"); //creation de l element div

            myitem.classList.add("carousel-item"); // ajoute la classe "carousel item"
            if(i==0)
            {
                myitem.classList.add("active");
            }
          hook.appendChild(myitem); 
          let myimage = document.createElement("img");// cree l ement image du diaporama
          myimage.src= "./img/"+_tabdata[i].id+".jpg";
         myimage.setAttribute("alt",_tabdata[i].alt);
          myimage.setAttribute("class","d-md-block w-100 perso");
          myitem.appendChild(myimage);

            let myLegende = document.createElement("div");
            myLegende.setAttribute("class","carousel-caption d-none d-md-block");
            myitem.appendChild(myLegende);
            let monTitre = document.createElement("h5");
            monTitre.innerText = _tabdata[i].titre;
            myLegende.appendChild(monTitre);

            let boutoNav = document.createElement("button");
            boutoNav.setAttribute("data-bs-target","#carouselBali");
            boutoNav.setAttribute("data-bs-slide-to",i);
            boutoNav.setAttribute("aria-label","Slide"+_tabdata[i].id);
            hookButton.appendChild(boutoNav);

            if(i==0) {       
                boutoNav.classList.add("active");
                boutoNav.setAttribute("aria-current","true");
            }

        }

        /* <button type="button" data-bs-target="#carouselBali" data-bs-slide-to="0" class="active" aria-current="true"
        aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselBali" data-bs-slide-to="1" aria-label="Slide 1"></button> */


  

      }

      
      
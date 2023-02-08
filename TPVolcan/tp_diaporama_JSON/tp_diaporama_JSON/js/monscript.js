let xhr= new XMLHttpRequest();
    xhr.open("GET","diapo.json",true);
   // xhr.responseType= "json";
    xhr.send();

    xhr.onload=function()
    {
        if (xhr.status ==200){
            let tabdata=JSON.parse(xhr.responseText);
            console.log(tabdata);
        }
        else {
            console.log("Erreur"+xhr.status+":"+xhr.statusText);
        }
    }

    function genererDiapo (_tadata)
    
    {
        let hook = document.querySelector(".carousel-inner")   //getElementByClassName[0]


    } 
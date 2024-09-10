In=document.querySelectorAll('.item');
Out=document.querySelectorAll('.service');
items=document.querySelector('.items');
// main = document.getElementsByTagName("main");

In.forEach((element, index) => {

    element.onclick = () => {

        // main.querySelector('.service').classList.remove('show');

        for(i=0;i<Out.length;i++){

            if(Out[i].getAttribute("data-service") == element.getAttribute("data-service")){
                Out[i].classList.add("show");
            } else {
                Out[i].classList.remove("show");
            }
        }

        items.querySelector('.active').classList.remove('active');
        element.classList.add('active');
    }
});

// FOR MEDICAL RECORDS

dossier=document.querySelectorAll('.dossier');
content=document.querySelectorAll('.content');
dossiers=document.querySelector('.dossiers');
closeContent=document.querySelectorAll('.close');

dossier.forEach(element => {

    element.onclick = () => {

        for(i=0;i<content.length;i++){

            if(content[i].getAttribute("data-service") == element.getAttribute("data-service")){

                content[i].classList.add("show");

                closeContent.onclick = function (){
                    alert("dataservice");
                }
                
            } else {
                content[i].classList.remove("show");
            }

        }

        dossiers.querySelector('.active').classList.remove('active');
        element.classList.add('active');
    }
});

// TO CLOSE THE CONTENT PART

closeContent.forEach(element => {
    element.onclick = () => {
        for(i=0;i<content.length;i++){
            content[i].classList.remove("show");
        }
    }
});

// FOR MEDICAL RECORDS DETAIL

openDetail = document.querySelectorAll('.toOpen');
door = document.querySelectorAll('.contentItem');
contenu = document.querySelector('.dossierContents');

door.forEach(element => {
    element.querySelector('.toOpen').onclick = () => {

        verify = contenu.querySelector('.open');

        if (verify) {
            //alert('verify');
            verify.classList.remove('open');
        }

        element.classList.add('open');

    }
    element.querySelector('.toClose').onclick = () => {

        element.classList.remove('open');

    }
});


// FOR PATIENTS LIST DOCTOR PAGE

list_info=document.querySelectorAll('.list_info');
data=document.querySelectorAll('.data');
list_infos=document.querySelector('.list_infos');

list_info[0].classList.add('active');
data[0].classList.add('show');

list_info.forEach(element => {

    element.onclick = () => {

        for(i=0;i<data.length;i++){

            if(data[i].getAttribute("data-service") == element.getAttribute("data-service")){
                data[i].classList.add("show");
            } else {
                data[i].classList.remove("show");
            }
        }

        list_infos.querySelector('.active').classList.remove('active');
        element.classList.add('active');
    }
});
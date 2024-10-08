buttons=document.querySelectorAll('.item');
sections=document.querySelectorAll('.service');
items=document.querySelector('.items');

document.addEventListener('DOMContentLoaded', (event) => {
    let params = new URLSearchParams(window.location.search);
    let onglet = params.get('onglet');

    if (onglet) {
        showOnglet(onglet);
    }
});

buttons.forEach(button => {

    button.onclick = function () {
        const page = this.getAttribute("data-service");
        showOnglet(page);
        // alert(page);
    }

});

function showOnglet(page){

    sections.forEach((section, index) => {

        if(section.getAttribute("data-service") == page){
            // alert(index);
            section.classList.add("show");

            items.querySelector('.active').classList.remove('active');
            buttons[index].classList.add('active');

            nav.classList.remove("nav_visible");

            let params = new URLSearchParams(window.location.search);
            onglet = section.getAttribute("data-service");
            params.set('onglet', onglet);
            window.history.replaceState({}, '', `${window.location.pathname}?${params.toString()}`); 

        } else {
            section.classList.remove("show");
        }
        
    })

}

// FOR MEDICAL RECORDS, PATIENT PAGE

dossier=document.querySelectorAll('.open_dossier');
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

// TO CLOSE THE CONTENT PART, MEDICAL RECORDS

closeContent.forEach(element => {
    element.onclick = () => {
        for(i=0;i<content.length;i++){
            content[i].classList.remove("show");
        }
    }
});

// PREV / NEXT THE CONTENT PART, MEDICAL RECORDS

// FOR MEDICAL RECORDS DETAIL


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
window.onload = function(){
    setTimeout(function(){
        var messageElement = document.getElementById("message");
        if(messageElement){
            // alert(messageElement);
            // alert("bonjour");
            messageElement.style.display = 'none';
        }
    }, 5000);
}
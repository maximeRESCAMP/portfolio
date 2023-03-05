
document.getElementById("projet__java").addEventListener('click', function(){
    let web= document.getElementsByClassName("web");
    for (let index = 0; index < web.length; index++) {
        web[index].style.display= "none"
    }
})
document.getElementById("projet__web").addEventListener('click', function(){
    let web= document.getElementsByClassName("web");
    for (let index = 0; index < web.length; index++) {
        web[index].style.display= "block"
    }
})
document.getElementById("projet__all").addEventListener('click', function(){
    let web= document.getElementsByClassName("web");
    for (let index = 0; index < web.length; index++) {
        web[index].style.display= "block"
    }
})


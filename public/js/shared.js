function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

function topFunction() {
    $('html, body').animate({scrollTop:0}, 'slow');
}

function showTime() {
    var date = new Date(),
        utc = new Date(Date.UTC(
          date.getFullYear(),
          date.getMonth(),
          date.getDate(),
          date.getHours(),
          date.getMinutes(),
          date.getSeconds()
        ));

    document.getElementById('time').innerHTML = date.toLocaleTimeString();
}

function myFunction() {
    console.log('fuck this shit');
}

$(document).ready(function(){
    /*$('.card').click(function() {
        window.open('/laravel/larablog/public/blog/{{$blogitems->id}}')
    });*/

    $('')
});
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh React component instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

require('./components/Example');



$(document).on('change', '#photos', function(event) {
    var photos = $("#photos").prop("files");
    $("#filesgallery").empty();
    for(var i=0; i<photos.length; i++)
    {
        $("#filesgallery").append("<img src='"+ URL.createObjectURL(event.target.files[i]) +"' width ='200px' height='200px' />");
    }
});

$(document).on('click', '.car-photo', function(){
    var id = $(this).attr("val");
    console.log($(this).attr("val"));
    $.ajax({
        type:'GET',
        url: '../test/'+ id,
        success:function(data){
           console.log("test");
        }
     });
});

$(document).on('click', '#nextphoto', function(){
    if($("#test").next().is("img")){
        var src = $("#test").next().attr("src");
        $("#test").insertAfter($("#test").next());
        $("#test").attr("src", src);
    }
});

$(document).on('click', '#prevphoto', function(){
    if($("#test").prev().is("img")){
        var src = $("#test").prev().attr("src");
        $("#test").attr("src", src);
        $("#test").insertBefore($("#test").prev());
    }
});
$.ajax({
  type: "GET",
  dataType: "jsonp",
  url: "https://api.instagram.com/v1/users/1066437105/media/recent/?access_token=249170565.8251092.a4b1b33d6418484dbab251f75a0cb771",
  success: function(data) {
    let n = 0;
    for (var i = 0; i < 6; i++) {
      $(".footer_section").before('<div class="row justify-content-center align-items-center" id=row_'+i+'></div>');
      for (var k = 0; k < 3; k++) {
        $('#row_'+i+'').append('<div class=col-sm-4><figure><a href="'+ data.data[n].images.standard_resolution.url +'" data-fancybox="gallery"><img class=painting_gallery src='+ data.data[n].images.standard_resolution.url +'></a></figure></div>');
        n++;
      }
    }
  }
});

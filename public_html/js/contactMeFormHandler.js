const today = new Date(),
      nameRegex = /([a-zA-Z\s-])/g,
      emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/g,
      messageRegex = /([a-zA-Z0-9\s.,?!$%&])/gm,
      url = "http://katilowe.local:3000/";

$(".submitButton").click(function(){
  const data = JSON.stringify({
    content: {
      email: $(".email").val().match(emailRegex).join(""),
      name: $(".name").val().match(nameRegex).join(""),
      message: $(".message").val().match(messageRegex).join("")
    },
    date: {
      date: (today.getMonth()+1)+'-'+today.getDate()+'-'+today.getFullYear(),
      time: today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds()
    },
    metadata: {},
    beenEmailed: false
  });
  $.post(url, data, function(data, status){
    console.log(`${data} and status is ${status}`);
  }, "json")
})

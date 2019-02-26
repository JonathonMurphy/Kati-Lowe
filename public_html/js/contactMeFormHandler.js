const name = $(".name");
const email = $(".email");
const message = $(".message");
const submitButton = $(".submitButton");
const nameRegex = /([a-zA-Z\s-])/g;
const emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/g;
const messageRegex = /([a-zA-Z\s.,?!$%&])/gm;

const url = "http://katilowe.gallery/public_html/logs/"

submitButton.click(function(){
  let nameContents = name.val().match(nameRegex).join("");
  let emailContents = email.val().match(emailRegex).join("");
  let messageContents = message.val().match(messageRegex).join("");
  // if (emailRegex.test(emailContents) == true) {
  //   let emailValid = emailContents;
  // } else {
  //   console.log("Email is invalid");
  // };
  const data = {
    email: emailContents,
    name: nameContents,
    message: messageContents
  }
  $.post(url, data, function(data, status){
    console.log('${data} and status is ${status}');
  })
})

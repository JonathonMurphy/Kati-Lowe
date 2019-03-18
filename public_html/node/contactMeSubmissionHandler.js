// TODO: Add in geolocation metadata for POST requests
'use strict';
const http = require('http'),
      fs = require('fs'),
      nameRegex = /([a-zA-Z\s-])/g,
      emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/g,
      messageRegex = /([a-zA-Z0-9\s.,?!$%&])/gm;

let messageIndex = 0;

http.createServer((request, response) => {
    let body = [];
    request.on('error', (err) => {
      console.error(err);
    }).on('data', (chunk) => {
      body.push(chunk);
    }).on('end', () => {
      body = JSON.parse(Buffer.concat(body).toString());
      body.content.email = body.content.email.match(emailRegex).join("");
      body.content.name = body.content.name.match(nameRegex).join("");
      body.content.message = body.content.message.match(messageRegex).join("");
      console.log(body);
      fs.writeFile('./contact'+messageIndex+'.json', JSON.stringify(body));
      messageIndex++;
    });
    response.end();
  }).listen(3000);

'use strict';
const http = require('http'),
      fs = require('fs'),
      stream = require('stream'),
      nameRegex = /([a-zA-Z\s-])/g,
      emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/g,
      messageRegex = /([a-zA-Z0-9\s.,?!$%&])/gm;

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
      body.metadata.ipAddress = request.connection.remoteAddress.replace(/^.*:/, '');
      console.log(body);
      fs.writeFile('tempContactMe.json', JSON.stringify(body));
    });
    response.end();
  }).listen(3000);

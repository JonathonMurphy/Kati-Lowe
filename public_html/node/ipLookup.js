'use strict';
const fs = require('fs'),
      http = require('https'),
      oauth = require('./oauth.js'),
      log = require('./tempContactMe.json'),
      apiKey = JSON.stringify(oauth.apiKey).replace(/"/g,""),
      ipAddress = JSON.stringify(log.metadata.ipAddress).replace(/"/g,"");

let messageIndex = 0,
    options = {
      "method": "GET",
      "host": 'api.ipgeolocation.io',
      "path": '/ipgeo?apiKey='+apiKey+'&ip='+ipAddress,
      "port": 443,
      "headers": {
        "Accept": "application/json"
      }
    };

fs.watch('tempContactMe.json', () => {
  http.get(options, (response) => {
    let data = '';
    response.on('data', (chunk) => {
      data += chunk;
    });
    response.on("end", () => {
      log.metadata = JSON.parse(data);
      fs.writeFile('testLog'+messageIndex+'.json', JSON.stringify(log));
      messageIndex++;
    });
  }).on('error', (err) => {
    console.log(err)
  });
})

'use strict';
// url + ipAddress
const fs = require('fs'),
      http = require('https'),
      oauth = require('./oauth.js'),
      log = require('./testLog.json'),
      apiKey = JSON.stringify(oauth.apiKey).replace(/"/g,""),
      ipAddress = JSON.stringify(log.metadata.ipAddress).replace(/"/g,"");

let options = {
  "method": "GET",
  "host": 'api.ipgeolocation.io',
  "path": '/ipgeo?apiKey='+apiKey+'&ip='+ipAddress,
  "port": 443,
  "headers": {
    "Accept": "application/json"
  }
};

http.get(options, (response) => {
  let data = '';
  response.on('data', (chunk) => {
    data += chunk;
  });
  response.on("end", () => {
    log.metadata = JSON.parse(data);
    fs.writeFile('testLog2.json', JSON.stringify(log));
  });
}).on('error', (err) => {
  console.log(err)
});

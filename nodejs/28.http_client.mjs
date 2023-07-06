import https from 'https';

const endpoint = 'https://eopki42tynrauql.m.pipedream.net';
const request = https.request(endpoint, {
    method: 'POST',
    headers: {
        'Content-Type' : 'application/json',
        'Accept' : 'application/json'
    }
}, (response) => {
    response.addListener('data', (data) => {
        console.info(`Response : ${data}`);
    });
});

const body = JSON.stringify({
    firstName: 'Satrya',
    lastName: 'Putra'
});

request.write(body);
request.end()
import { json } from 'stream/consumers';
import util from 'util';

const firstName = 'Satrya';
const lastName = 'Putra';

console.info(`Hello ${firstName} ${lastName}`);
console.info(util.format('Hello %s %s', firstName, lastName));

const person = {
    firstName : "Satrya",
    lastName : "Putra"
} 

console.info(`Person : ${JSON.stringify(person)}`);
console.info(util.format('Person : %j'), person);
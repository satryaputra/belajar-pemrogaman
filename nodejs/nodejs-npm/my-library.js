import { sayHello, sum } from "nodejs-npm-library-ekasatrya";
import { min, max } from "nodejs-npm-library-ekasatrya/number";

console.info(sayHello("Putra"));

const numbers = [1,2,3,4,5,6,7,8,9];
console.info(sum(numbers));

console.info(min(10, 5));
console.info(max(10, 5));
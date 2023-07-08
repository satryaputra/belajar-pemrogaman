// buffer adalah global standard library

const buffer = Buffer.from('Putra');

console.info(buffer);
console.info(buffer.toString());

buffer.reverse();
console.info(buffer.toString());
const buffer = Buffer.from('Mohammad Eka Satrya Putra', 'utf8');

console.info(buffer.toString());
console.info(buffer.toString('hex'));
console.info(buffer.toString('base64'));

const bufferBase64 = Buffer.from('TW9oYW1tYWQgRWthIFNhdHJ5YSBQdXRyYQ==', 'base64');
console.info(buffer.toString('utf8'));
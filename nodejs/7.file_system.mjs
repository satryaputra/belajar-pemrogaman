import fs from 'fs/promises';

const buffer = await fs.readFile('7.file_system.mjs');

console.info(buffer.toString());

await fs.writeFile('temp.txt', "Hello World");
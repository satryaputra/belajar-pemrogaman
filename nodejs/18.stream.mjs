import fs from 'fs';

const writer = fs.createWriteStream('target.log');

writer.write('Mohammad\n');
writer.write('Eka\n');
writer.write('Satrya\n');
writer.write('Putra\n');
writer.end();

const reader = fs.createReadStream('target.log');
reader.addListener('data', (data) => {
    console.info(data.toString());
});
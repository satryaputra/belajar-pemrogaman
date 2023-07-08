import {Console} from 'console';
import fs from 'fs';

const file = fs.createWriteStream('26.application.log');

const log = new Console({
    stdout: file,
    stderr: file
});

const person = {
    firstName : "Satrya",
    lastName : "Putra"
};

log.info('Halo');
log.error('Ini adalah error');

log.table(person);
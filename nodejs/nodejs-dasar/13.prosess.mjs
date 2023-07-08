import process from 'process';

process.addListener('exit', (exitCode) => {
    console.info(`NodeJS exit with code ${exitCode}`);
});

console.info(process.version);
console.info(process.argv);
console.info(process.report);
console.info(process.env);

process.exit(1);

console.info('Ini tidak akan dijalankan, karena NodeJs telah berhenti')
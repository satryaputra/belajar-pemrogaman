// Timer adalah library global yang versi callback

// setInterval(() => {
//     console.info(`Start time at ${new Date()}`);
// }, 1000);

// Timer juga terdapat versi promises, namun perlu untuk mengimport librarynya terlebih dahulu
import timers from 'timers/promises';

// console.info(new Date());

// const name = await timers.setTimeout(5000, 'Putra');

// console.info(new Date());
// console.info(name);

for await (const startTime of timers.setInterval(5000, 'ignored')) {
    console.info(`Start time at ${new Date()}`);
}
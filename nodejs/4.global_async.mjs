function samplePromise() {
    return Promise.resolve("Putra");
}

const name = await samplePromise(); // kode ini kalau di format .js akan mengalami error, karena kita menggunakan format .mjs makanya tidak akan error karena mjs memiliki global asynchronous
console.info(name);
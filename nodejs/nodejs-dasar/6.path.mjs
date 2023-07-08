import path from 'path';

const file = "/Users/Satrya/contoh.txt";

console.info(path.dirname(file)); // utk mendapatkan nama folder dari file
console.info(path.basename(file)); // untuk menapatkan nama file beserta ekstensinya
console.info(path.extname(file)); // untuk mendapatkan ekstensi dari file
console.info(path.parse(file)); // lengkap, return object
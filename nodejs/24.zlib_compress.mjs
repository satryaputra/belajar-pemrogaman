import zlib from 'zlib';
import fs from 'fs';

const source = fs.readFileSync('24.zlib_compress.mjs');
const result = zlib.gzipSync(source);

fs.writeFileSync('24.zlib_compress.mjs.txt', result);
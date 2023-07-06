import {URL} from 'url';

const pzn = new URL('https://www.programmerzamannow.com/belajar?kelas=nodejs');

console.info(pzn.toString());
console.info(pzn.href);
console.info(pzn.protocol);
console.info(pzn.host);
console.info(pzn.pathname);
console.info(pzn.searchParams);
console.info(pzn.hostname);

pzn.host = 'www.satryaputra.com';
pzn.searchParams.append('status', 'premium');

console.info(pzn.toString());
console.info(pzn.href);
console.info(pzn.protocol);
console.info(pzn.host);
console.info(pzn.pathname);
console.info(pzn.searchParams);
console.info(pzn.hostname);
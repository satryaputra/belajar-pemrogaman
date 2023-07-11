// Asychronous adalah teknik penyelesaian tugas secara bersamaan tanpa memengaruhi tugas satu sama lain
// ibaratnya ketika ada 10 tugas yang akan diselesaikian 10 orang

console.log('I');

console.log('eat');

// ini akan tampil 2 detik setelah di run
setTimeout(() => {
    console.log('ice cream')
}, 2000);

console.log('with a');

console.log('spoon');
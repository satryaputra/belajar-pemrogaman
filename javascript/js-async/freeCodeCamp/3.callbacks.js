// Callbacks adalah function yang dijadikan parameter di function lain

function stepOne(callback) {
    console.log('step one is running');
    console.log('step on is done, let call step two');

    callback();
}

function stepTwo() {
    console.log('step two is running');
}

stepOne(stepTwo);
let stocks = {
    Fruits : ["strawberry", "grapes", "banana", "apple"],
    liquid : ["water", "ice"],
    holder : ["cone", "cup", "stick"],
    toppings : ["chocolate", "peanuts"],
};

let order = (fruit_name, call_production) => {

    setTimeout(() => {
        console.log(`${stocks.Fruits[fruit_name]} was selected`);

        call_production();

    }, 2000);


};

let production = () => {

    setTimeout(() => {
        console.log('production has started');

        setTimeout(() => {
            console.log('the fruit has been chopped');

            setTimeout(() => {
                console.log(`${stocks.liquid[0]} and ${stocks.liquid[1]} Added`);

                setTimeout(() => {
                    console.log("start the machine");
                    
                    setTimeout(() => {
                        console.log(`Ice cream placed on ${stocks.holder[1]}`);

                        setTimeout(() => {
                            console.log(`${stocks.toppings[0]} as toppings`);

                            setTimeout(() => {
                                console.log("serve Ice cream");
                            }, 2000);

                        }, 3000);

                    }, 2000);

                }, 1000)

            }, 1000)

        }, 2000);

    }, 0000);

};

order(0, production);


// Code tidak efektif dan susah di mantainance, ini disebut callback hell
// Untuk mengatasi callback hell kita bisa menggunakan promises
const f = (number) => {
    let string = '';
    let caunter = number;
    for (let i = 0; i < number; i++) {
        for( let g = 0; g <= number; g++) {
            if(caunter - 1 <= g) string += (g + 1 > number ? '\n' : '#' );
            else string += (g + 1 > number ? '\n' : '*' );
        }
        caunter --;
    }
    console.log(string);
}

f(8);
study material

#palindrome

function palindrome(str) {
    const reversed = str.split('').reverse().join('')
    return str === reversed;
}


function palindrome(str) {
    str = str.toLowerCase();
    const reversed = str.split('').reverse().join('')
    return str === reversed;
}

https://hellodevworld.com/javascript





const fruits = ["Banana", "Orange", "Lemon", "Apple", "Mango"];
const citrus = fruits.slice(1, 3)

answer = Orange,Lemon



The splice() method adds and/or removes array elements.
The splice() method overwrites the original array


const fruits = ["Banana", "Orange", "Apple", "Mango"];
// At position 2, add 2 elements: 
fruits.splice(2, 0, "Lemon", "Kiwi");

answer = Banana,Orange,Lemon,Kiwi,Apple,Mango


// At position 2, remove 2 items: 
fruits.splice(2, 2);

answer = Banana,Orange,Kiwi




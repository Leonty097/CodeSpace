console.log("Hello world! test node.js")

// Define an arrow function
let reverseString = parameter => {
    // Declare an empty string to store the reversed letters during the process    
    let reverse = "";
    // Perform a for loop to iterate over the characters of the parameter (i --)
    for (let i = parameter.length - 1; i >= 0; i--) {
        // Append each character to the reverse string
        reverse += parameter[i];
    }
    // Return the reversed string
    return reverse;
}

// Test the function
console.log(reverseString("John"));
console.log(reverseString("James"));




// Define an arrow function 
let reverseArray = array => 
    /* Use slice() to create a copy of the array and then reverse() 
    to reverse the order of its elements */
    array.slice().reverse();

// Test the function with different parameters such as numbers and strings
console.log(reverseArray([1, 2, 3, 4, 5]));
console.log(reverseArray(["I", "like", "JavaScript"])); 
console.log(reverseArray([1, "Two", 3 , "Four", 5]));





// Create a variable to store the arrays
let items = [
    { item: "irn bru", price: 3.25, stock: 50 },
    { item: "fanta", price: 3.98, stock: 45 },
    { item: "diet coke", price: 4.40, stock: 38 }, 
    { item: "7up", price: 3.99, stock: 42 }
];
4// Define arrow function
let mostExpensiveItem = array => {
    // Let's assume the first item is the most expensive initially
    let mostExpensive = array[0]; 
    // Using a for loop to iterate over the array checking for all the items
    for (let i = 1; i < array.length; i++) {
        // Compare the price * stock to determine the most expensive
        if ((array[i].price * array[i].stock) > (mostExpensive.price * mostExpensive.stock)) {
            mostExpensive = array[i];
        }
    }
    // Return the highest value
    return mostExpensive;
}

console.log(mostExpensiveItem(items));






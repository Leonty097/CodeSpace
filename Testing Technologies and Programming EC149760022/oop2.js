/*
            Encapsulation
            
 Write the class User and add the properties.
    Add the method that says hello.
    Create the first instance, and call it user1. Use the new keyword to create an object from the class.
*/ 

class User {
    constructor(firstName, lastName) {
        // Initialize empty variables
        this._firstName = "";
        this._lastName = "";
    }

    //Getters and setters Method for firstName
    get firstName(){
        return this._firstName
    }

    set firstName(firstName){
        this._firstName = firstName
    }

    //Getters and setters Method for lastName
    get lastName(){
        return this._lastName
    }

    set lastName(lastName){
        this._lastName = lastName
    }


    // Hello method
    hello() {
        return "Hello World!";
    }
}

// Create the user instance User (object)
const user = new User();

// Use setters for firstName and lastName
user.firstName = "John"
user.lastName = "Doe"

// Use the getters to retrieve firstName and lastName
let fullName = user.firstName + " " + user.lastName

console.log(user.hello());
console.log("My name is " + fullName)



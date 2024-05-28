/*
 Write the class User and add the properties.
    Add the method that says hello.
    Create the first instance, and call it user1. Use the new keyword to create an object from the class.
*/ 

class User {
    constructor(firstName, lastName) {
        this.firstName = firstName;
        this.lastName = lastName;
    }

    hello() {
        console.log(`hello, ${this.firstName} ${this.lastName}`);
    }
}

// Create the first instance, user1
let user1 = new User('John', 'Doe');

// Create another instance, user2
let user2 = new User('Jane', 'Doe');

// Say hello to user1
user1.hello();

// Say hello to user2
user2.hello();




/*
            Inheritance
            
*/ 

class User {
    constructor() {
        // Initialize empty variables
        this._userName = "";
    }

    //Getters and setters Method for _userName
    get userName(){
        return this._userName
    }

    set userName(_userName){
        this._userName = _userName
    }


    // Hello method
    hello() {
        return "Hello World!";
    }
}

// Create the Admin class inheriting the user class
class Admin extends User {
    // Class constructor
    constructor(){
        //call the Super Class constructor
        super();
    }

    //Method to express role
    expressYourRole(){
        return "Admin";
    }
    
    //Method to day hello with username
    sayHello(){
        return `Hello Admin, ${this.userName}`
    }
}

//Create an Admin object
const admin = new Admin ();

// Set username
admin.userName = "Balthazar";

// say Hello to admin
console.log(admin.sayHello());




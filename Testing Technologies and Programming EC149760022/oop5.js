//Abstraction

// Define the abstract User class
class User {
    constructor() {
        // Initialize userName property
        this._userName = "";
    }

    // Abstract method to state user's role
    stateYourRole() {
        throw new Error("Method 'stateYourRole' must be implemented in the subclass.");
    }

    // Getter method for userName
    get userName() {
        return this._userName;
    }

    // Setter method for userName
    set userName(userName) {
        this._userName = userName;
    }
}

// Define the Admin class inheriting from the User abstract class
class Admin extends User {
    // Method to state Admin's role
    stateYourRole() {
        return "Admin";
    }
}

// Define the Viewer class inheriting from the User abstract class
class Viewer extends User {
    // Method to state Viewer's role
    stateYourRole() {
        return "Viewer";
    }
}

// Create an object admin from the Admin class
const admin = new Admin();
// Set the userName for admin
admin.userName = "Balthazar";

// Create an object viewer from the Viewer class
const viewer = new Viewer();
// Set the userName for viewer
viewer.userName = "Melchior";

// Log the userName and role for admin
console.log(`Admin userName: ${admin.userName}`);
console.log(`Admin role: ${admin.stateYourRole()}`);

// Log the userName and role for viewer
console.log(`Viewer userName: ${viewer.userName}`);
console.log(`Viewer role: ${viewer.stateYourRole()}`);

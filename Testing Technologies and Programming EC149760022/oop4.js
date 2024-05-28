// Polymorphism

class User {
    constructor() {
        this.numberOfArticles = 0;
    }

    // Method to set the number of articles
    setNumberOfArticles(numberOfArticles) {
        this.numberOfArticles = numberOfArticles;
    }

    // Method to get the number of articles
    getNumberOfArticles() {
        return this.numberOfArticles;
    }

    // Method to calculate scores (to be overridden by subclasses)
    calcScores() {
        throw new Error("Method must be implemented in the subclasses.");
    }
}

// Create the Author class inheriting from the User class
class Author extends User {
    // Override calcScores method for Author
    calcScores() {
        return this.numberOfArticles * 10 + 20;
    }
}

// Create the Editor class inheriting from the User class
class Editor extends User {
    // Override calcScores method for Editor
    calcScores() {
        return this.numberOfArticles * 6 + 15;
    }
}

// Create an object author from the Author class
const author = new Author();
// Set the number of articles for author
author.setNumberOfArticles(8);
// Print the scores gained by author
console.log("Author's scores: ", author.calcScores());

// Create an object editor from the Editor class
const editor = new Editor();
// Set the number of articles for editor
editor.setNumberOfArticles(15);
// Print the scores gained by editor
console.log("Editor's scores: ", editor.calcScores());

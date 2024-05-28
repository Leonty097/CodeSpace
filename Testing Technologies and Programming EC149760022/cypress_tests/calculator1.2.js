// Get references to the display elements
let display = document.getElementById("calc-display");
let historyDisplay = document.getElementById("calc-history");

// Initialize state variables
let newCalculation = false;
let currentOperator = null;
let storedValue = '';

// Adds a number, operator, or special function to the display
const add = (param) => {
    if (newCalculation) {
        display.value = '';
        newCalculation = false;
    }
    if (param === '+/-') {
        // Toggle the sign of the current value
        if (display.value.startsWith('-')) {
            display.value = display.value.slice(1);
        } else {
            display.value = '-' + display.value;
        }
    } else {
        display.value += param;
    }
};

// Adds an operator to the calculation and prepares for the next value
const addOperator = (operator) => {
    if (display.value === '' && operator !== '-') return;

    if (storedValue === '' || newCalculation) {
        // Store the current value if none is stored or if starting a new calculation
        storedValue = display.value;
        display.value = '';
    } else {
        // Calculate the current operation and store the result
        storedValue = calculate(storedValue, currentOperator, display.value);
        display.value = '';
    }

    // Update the current operator and display the operation in history
    currentOperator = operator;
    historyDisplay.value = storedValue + ' ' + operator;
    newCalculation = false;
};

/* Performs the calculation of the current operation, including percentage calculations.

    At first, the code was using eval to do the math, but due to issues with percentages, 
    after a bit of research found out that eval is highly discouraged for mathematical calculations due to a lack of safety.

*/
const calcThis = () => {
    if (currentOperator && storedValue !== '') {
        let operation = storedValue + currentOperator + display.value;
        let result = calculate(storedValue, currentOperator, display.value);

        // Show the full operation in the history display
        historyDisplay.value = operation + ' =';
        
        // Display the result and log the operation
        display.value = result;
        logOperation(operation, result);

        // Reset stored values and operators
        storedValue = '';
        currentOperator = null;
        newCalculation = true;
    }
};

const calculate = (a, operator, b) => {
    a = parseFloat(a);
    b = parseFloat(b);
    switch (operator) {
        case '+': return a + b;
        case '-': return a - b;
        case '*': return a * b;
        case '/': return a / b;
        case '%': return (a * (b / 100)); 
        default: return b;
    }
};

// Clears the display and resets all stored values and operators
const clearCalc = () => {
    display.value = '';
    historyDisplay.value = '';
    storedValue = '';
    currentOperator = null;
    newCalculation = false;
};

// Deletes the last digit in the display
const delLast = () => {
    display.value = display.value.slice(0, -1);
};

// Array to store logged operations
const operations = [];

// Logs the operation in the memory section
const logOperation = (param1, param2) => {
    operations.push(`${param1} = ${param2}`); // Add the operation to the log
    updateDisplay(); // Update the memory display
};

// Updates the memory display with logged operations
const updateDisplay = () => {
    const calcMem = document.getElementById("calc-mem");
    calcMem.innerHTML = ""; // Clear the memory display

    // Add each logged operation to the memory display
    operations.forEach(operation => {
        const operationElement = document.createElement("span");
        operationElement.textContent = operation;
        calcMem.appendChild(operationElement);
    });
};

// Toggles the memory section's visibility and adjusts calculator width
const toggleMemory = () => {
    const memorySection = document.getElementById("memory-section");
    const calculatorMain = document.getElementById("calculator-main");
    if (memorySection.style.display === "none" || memorySection.style.display === "") {
        memorySection.style.display = "block";
        calculatorMain.style.width = "640px";
    } else {
        memorySection.style.display = "none";
        calculatorMain.style.width = "430px";
    }
};

// Initial state: hide memory section
document.getElementById("memory-section").style.display = "none";

// Handle percentage conversion for single values
const convertToPercentage = () => {
    display.value = parseFloat(display.value) / 100;
};


document.getElementById('percent').onclick = convertToPercentage;

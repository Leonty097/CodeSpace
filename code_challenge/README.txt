This code challege was done within an hour to comply with the following requeriments:

Challenge

In a language of your choice, write a higher/lower game that satisfies the following criteria:

· Generates a random number.

· Takes in a guess.

· Returns a string with the guess and whether that guess is lower or higher than the random number. E.g., “You answered 9. The correct answer is higher.”

· If the guess matches the random number, then return a string which confirms this. E.g., “You answered 9. This is the correct answer!”

This challenge (deliberately) does not give any guidance about ranges, input validation, presentation etc., so you are also required to explain any assumptions that you have made. This can be done using comments in the code or in a readme file, or both.

You have one hour to complete the task and upload it to GitHub. This can be done any time before the interview. Please do not share answers or discuss with people who have not completed the challenge. 


The first approach was to decide on a suitable language and write some pseudo-code to devise the structure.

Pseudo-code:

# PC chooses a random number between 0 and 10

import random library

def randomPcNumber = random(0,10) = 8

# User chooses a number through input

let userInput = 5

# PC compares options and checks if the input is less than, greater than, or equal to

if (userInput !== pcNumber): {

	if (userInput > pcNumber): {
	
	print: " "
	
	}
	
	else: {
	print: " "	
}

else {
print: you win
}

}

# There must be a for loop where the number of tries is regulated

It can be:

for i in a range (0,3)

let user_input = " "

If the condition is not equal, continue within the loop

i++,

If the condition is equal, break the loop

Error handling missing

(PC creates a number

A for loop of 3 attempts is made

PC compares:
Not equal = i++,
if i = 3
print you lose.
It's equal = break)


Problems:

- There is no error handling, have to check for invalid inputs (S: 2 scenarios numbers out of range and non-numeric inputs)
- PCnumber keeps changing on every loop (S: define it befor the loop and storage it inside a new variable)
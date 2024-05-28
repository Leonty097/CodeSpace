# Py start time: 12:25
# I chose Python because for this exercise I have little time to do a proper UI, and Py
# is quite easy to interact with straight to the point
# The PC considers a randomly chosen number of int between 0 and 10,
# then the user considers a number within the same range and compares the values

import random

# Initialize the counter variable to 0 so the user can track how many chances are left
attempts = 0

def pc_random_number():
    return random.randint(0, 10)
#Save the constant before the loop or it will change randomly (Experience)
pc_value = pc_random_number()
#Just to make sure the value keeps constant along the game
#print(f"{pc_value}")

# Create a for loop giving the user three attempts
for i in range(3):
    try:
        user_input = int(input("Select a number between 0 and 10: "))
        # Check if the number is in the correct range
        if user_input < 0 or user_input > 10:
            print("The number is out of range. Please select a number between 0 and 10.")
            continue

        if user_input != pc_value:
            if user_input > pc_value:
                print(f"You selected {user_input}, this number is bigger than the special number, try again.")
            else:
                print(f"You selected {user_input}, this number is smaller than the special number, try again.")
            attempts += 1
            print(f"Attempt {attempts} of 3")
        else:
            print(f"Congratulations!, your selection {user_input} is the same as the special number {pc_value}.")
            break
    #Check for non-numeric inputs
    except ValueError:
        print("That's not a valid number. Please enter a numeric value.")
        attempts += 1
        print(f"Attempt {attempts} of 3")
else:
    print(f"Unfortunately, this time you were not successful. The special number was {pc_value}.")




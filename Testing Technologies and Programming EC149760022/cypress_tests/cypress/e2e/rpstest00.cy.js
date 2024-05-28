describe('RPS Game', () => {
  beforeEach(() => {
    cy.visit('http://127.0.0.1:3000/RPS4cy.html');
    //rename attributes
    cy.get('[data-cy= "rock"]').as('rock') 
    cy.get('[data-cy= "paper"]').as('paper') 
    cy.get('[data-cy= "scissors"]').as('scissors') 
    cy.get('[data-cy="userOption"]').as('userOption') 
    cy.get('[data-cy="pcOption"]').as('pcOption') 
   // cy.get('data-cy="reset"]').as('reset') 
    
  });

  // Rock Test Case
  it('plays Rock and checks the result', () => {
    // Simulate playing the game with Rock 
cy.get('@rock').should('exist').click()

    //Check if user choose is set for Rock
cy.get('@userOption').should('have.value', "Rock")
    //Check for computer option
cy.get('@pcOption')
      // if the computer option is Rock = tie +1

      // if the computer option is Paper = losses +1

      //if the computer options is set to scissors = wins +1

    // Check the result (assert that it contains the expected text)
  });

  // Paper Test Case
  it('plays Paper and checks the result', () => {
    // Simulate playing the game with Paper
    // Check the result
  });

  // Scissors Test Case
  it('plays Scissors and checks the result', () => {
    // Simulate playing the game with Scissors
    // Check the result
  });


    // Reset Test Case
    it('Click on reset and checks the result', () => {
      // Simulate playing the game with Scissors
      // Check the result
    });
});

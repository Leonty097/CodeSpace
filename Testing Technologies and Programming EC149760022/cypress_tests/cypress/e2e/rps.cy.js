describe('RPS Game', () => {
  beforeEach(() => {
    cy.visit('http://127.0.0.1:3000/RPS4cy.html');
    
    // Alias elements for easy reference
    cy.get('[data-cy="rock"]').as('rock');
    cy.get('[data-cy="paper"]').as('paper');
    cy.get('[data-cy="scissors"]').as('scissors');
    cy.get('[data-cy="userOption"]').as('userOption');
    cy.get('[data-cy="pcOption"]').as('pcOption');
    cy.get('[data-cy="result"]').as('result');
    cy.get('[data-cy="reset"]').as('reset');
    cy.get('[data-cy="wins"]').as('wins');
    cy.get('[data-cy="ties"]').as('ties');
    cy.get('[data-cy="losses"]').as('losses');
  });

  // Rock Test Case
  it('plays Rock and checks the result', () => {
    // Click on Rock card
    cy.get('@rock').should('exist').click();

    // Check if user choice is set to Rock
    cy.get('@userOption').should('have.value', 'Rock');

    // Check for computer option
    cy.get('@pcOption').then(($pcOption) => {
      const pcChoice = $pcOption.val();

      if (pcChoice === 'Rock') {
        // If the computer option is Rock, the result should be Tie
        cy.get('@result').should('have.value', 'Its a tie!');
      } else if (pcChoice === 'Paper') {
        // If the computer option is Paper, the result should be Loss
        cy.get('@result').should('have.value', 'You lose!');
      } else if (pcChoice === 'Scissors') {
        // If the computer option is Scissors, the result should be Win
        cy.get('@result').should('have.value', 'You win!');
      }
    });
  });

  // Paper Test Case
  it('plays Paper and checks the result', () => {
    // Click on Paper card
    cy.get('@paper').should('exist').click();

    // Check if user choice is set to Paper
    cy.get('@userOption').should('have.value', 'Paper');

    // Check for computer option
    cy.get('@pcOption').then(($pcOption) => {
      const pcChoice = $pcOption.val();

      if (pcChoice === 'Rock') {
        // If the computer option is Rock, the result should be Win
        cy.get('@result').should('have.value', 'You win!');
      } else if (pcChoice === 'Paper') {
        // If the computer option is Paper, the result should be Tie
        cy.get('@result').should('have.value', 'Its a tie!');
      } else if (pcChoice === 'Scissors') {
        // If the computer option is Scissors, the result should be Loss
        cy.get('@result').should('have.value', 'You lose!');
      }
    });
  });

  // Scissors Test Case
  it('plays Scissors and checks the result', () => {
    // Click on Scissors card
    cy.get('@scissors').should('exist').click();

    // Check if user choice is set to Scissors
    cy.get('@userOption').should('have.value', 'Scissors');

    // Check for computer option
    cy.get('@pcOption').then(($pcOption) => {
      const pcChoice = $pcOption.val();

      if (pcChoice === 'Rock') {
        // If the computer option is Rock, the result should be Loss
        cy.get('@result').should('have.value', 'You lose!');
      } else if (pcChoice === 'Paper') {
        // If the computer option is Paper, the result should be Win
        cy.get('@result').should('have.value', 'You win!');
      } else if (pcChoice === 'Scissors') {
        // If the computer option is Scissors, the result should be Tie
        cy.get('@result').should('have.value', 'Its a tie!');
      }
    });
  });

  // Reset Test Case
  it('clicks on reset and checks the result', () => {
    // Click on Rock card to start a game
    cy.get('@rock').click();

    // Click on reset button
    cy.get('@reset').click();

    // Check if user choice is reset
    cy.get('@userOption').should('have.value', '');

    // Check if PC choice is reset
    cy.get('@pcOption').should('have.value', '');

    // Check if result is reset
    cy.get('@result').should('have.value', '');
    //Check scores
    cy.get('@wins').should('have.text', 'Wins: 0');
    cy.get('@losses').should('have.text', 'Losses: 0');
    cy.get('@ties').should('have.text', 'Ties: 0');
  });
});

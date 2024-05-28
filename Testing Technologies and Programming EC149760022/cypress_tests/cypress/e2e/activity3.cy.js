describe('Cypress Example Test 3', () => {
  it('Performs various actions on the actions page', () => {
    // Visit the page
    cy.visit('https://example.cypress.io/commands/actions')

    // Search for .action-btnfield and click 
    cy.get('.action-btn').click()

    // Query for the element with an id "#action-canvas" and click on it.

    cy.get('#action-canvas').click()

    // Query for the element with an id "#action-canvas" and click top left.
    cy.get('#action-canvas').click('topLeft')

     // Query for the element with an id "#action-canvas" and click bottomRight.
     cy.get('#action-canvas').click('bottomRight')
  })
})

//working fine
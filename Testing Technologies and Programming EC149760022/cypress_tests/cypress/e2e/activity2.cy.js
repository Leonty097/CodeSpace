describe('Cypress Example Test 2', () => {
  it('Visits the actions page, types an email and asserts the input field', () => {
    // Visit the page
    cy.visit('https://example.cypress.io/commands/actions')

    // Search for the email field and renamed to emailField
    cy.get('input[type="email"]').as('emailField')

    // Type the email address
    cy.get('@emailField').type('test@mail.com')

    // Assert about the content on the page
    cy.get('@emailField').should('have.value', 'test@mail.com')
  })
})

//working fine
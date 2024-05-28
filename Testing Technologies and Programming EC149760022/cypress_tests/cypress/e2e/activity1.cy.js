describe('Cypress Example Test1', () => {
  it('Visits the Cypress example page, queries an element, interacts with it and assert about the content', () => {
    // Visit the page
    cy.visit('https://example.cypress.io')

    // Query for an element
    cy.get('.home-list').contains('location')

    // Interact with the element
    cy.get('.home-list').contains('location').click()

    // Assert about the content on the page
    cy.url().should('include', '/commands/location')
    cy.get('h1').should('contain', 'Location')
  })
})

//working fine
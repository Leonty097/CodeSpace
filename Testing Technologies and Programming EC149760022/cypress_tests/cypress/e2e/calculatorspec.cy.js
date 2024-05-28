describe('Calculator Tests', () => {
  beforeEach(() => {
    // Visit the calculator page before each test
    cy.visit('http://127.0.0.1:3000/calculator1.2.html'); // Adjust the URL as needed

    // Alias frequently used elements
    cy.get('#calc-display').as('display');
    cy.get('#calc-history').as('history');
    cy.get('.button').contains('AC').as('clear');
    cy.get('.button').contains('=').as('equals');
    cy.get('.memory-toggle').as('memoryToggle');
  });

  // Check all buttons; probably could skip this test and use all the buttons along the operations
  it('should check that all buttons work correctly', () => {
    const buttons = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '.', '+', '-', 'X', '÷', '%', '+/-', 'AC', 'DEL'];
    buttons.forEach(button => {
      cy.get('.button').contains(button).click();
    });
    cy.get('@clear').click();
  });

  // Check if the display is working and appending numbers correctly
  it('should display numbers when they are clicked', () => {
    cy.get('.button').contains('1').click();
    cy.get('@display').should('have.value', '1');

    cy.get('.button').contains('2').click();
    cy.get('@display').should('have.value', '12');
  });

  // Check the AC (All Clear) functionality
  it('should clear the display when AC is clicked', () => {
    cy.get('.button').contains('7').click();
    cy.get('.button').contains('8').click();
    cy.get('@display').should('have.value', '78');
    cy.get('@clear').click();
    cy.get('@display').should('have.value', '');
  });

  // Check addition operation
  it('should perform addition', () => {
    cy.get('.button').contains('9').click();
    cy.get('.button').contains('9').click();
    cy.get('.button').contains('+').click();
    cy.get('.button').contains('1').click();
    cy.get('@equals').click();
    cy.get('@display').should('have.value', '100');
  });

  // Check subtraction operation
  it('should perform subtraction', () => {
    cy.get('.button').contains('2').click();
    cy.get('.button').contains('2').click();
    cy.get('.button').contains('-').click();
    cy.get('.button').contains('9').click();
    cy.get('@equals').click();
    cy.get('@display').should('have.value', '13');
  });

  // Check multiplication operation
  it('should perform multiplication', () => {
    cy.get('.button').contains('3').click();
    cy.get('.button').contains('X').click();
    cy.get('.button').contains('4').click();
    cy.get('@equals').click();
    cy.get('@display').should('have.value', '12');
  });

  // Check division operation
  it('should perform division', () => {
    cy.get('.button').contains('9').click();
    cy.get('.button').contains('÷').click();
    cy.get('.button').contains('3').click();
    cy.get('@equals').click();
    cy.get('@display').should('have.value', '3');
  });

  // Check handling of decimal points
  it('should handle decimal points', () => {
    cy.get('.button').contains('1').click();
    cy.get('.button').contains('.').click();
    cy.get('.button').contains('5').click();
    cy.get('@equals').click();
    cy.get('@display').should('have.value', '1.5');
  });

  // Check toggle positive/negative functionality
  it('should toggle positive/negative', () => {
    cy.get('.button').contains('5').click();
    cy.get('.button').contains('+/-').click();
    cy.get('@display').should('have.value', '-5');
    cy.get('.button').contains('+/-').click();
    cy.get('@display').should('have.value', '5');
  });

  // Check percentage conversion
  it('should handle percentage conversion', () => {
    cy.get('.button').contains('5').click();
    cy.get('.button').contains('0').click();
    cy.get('.button').contains('0').click();
    cy.get('.button').contains('%').click();
    cy.get('@display').should('have.value', '5');
    cy.get('.button').contains('0').click();
    cy.get('.button').contains('X').click();
    cy.get('.button').contains('5').click();
    cy.get('.button').contains('0').click();
    cy.get('.button').contains('%').click();
    cy.get('@equals').click();
    cy.get('@display').should('have.value', '25'); // 50*(1/2)=25
  });

  // Check the delete (DEL) functionality
  it('should delete the last digit', () => {
    cy.get('.button').contains('7').click();
    cy.get('.button').contains('8').click();
    cy.get('.button').contains('9').click();
    cy.get('.button').contains('DEL').click();
    cy.get('@display').should('have.value', '78');
  });

  // Toggle memory button
  it('should toggle memory section visibility', () => {
    // Check if memory section is hidden initially
    cy.get('#memory-section').should('not.be.visible');
    
    // Toggle memory section visibility
    cy.get('@memoryToggle').click();
    cy.get('#memory-section').should('be.visible');

    // Toggle memory section visibility back to hidden
    cy.get('@memoryToggle').click();
    cy.get('#memory-section').should('not.be.visible');
  });

  // Check that the first operand appears in history when adding a second operation
  it('should show the first operand in history when adding a second operation', () => {
    cy.get('.button').contains('5').click();
    cy.get('.button').contains('+').click();
    cy.get('@history').should('have.value', '5 +');

    cy.get('.button').contains('3').click();
    cy.get('.button').contains('X').click();
    cy.get('@history').should('have.value', '8 *');

    cy.get('.button').contains('2').click();
    cy.get('@equals').click();
    cy.get('@display').should('have.value', '16'); // (5 + 3) * 2 = 16
  });

});

describe('MKT Time full Test', () => {
  beforeEach(() => {
    cy.visit('http://localhost/MKTime2/signin.php');
  });

  it('should log in, add all watches to the basket, delete one, proceed with checkout and log out', () => {
    cy.get('[data-cy=email-input]').type('test@test1.com');
    cy.get('[data-cy=password-input]').type('1234');
    cy.get('[data-cy=signin-button]').click();

    cy.get('#successModal').should('be.visible');
    cy.get('#successModal .btn-secondary').click();

    cy.visit('http://localhost/MKTime2/watches.php');

    cy.get('.card', { timeout: 10000 }).should('have.length.at.least', 3); //wait 10s

/* cy.get('[data-cy=view-details-skye-time]').click();
    cy.url().should('include', '/products/skyetime.php');
    cy.get('[data-cy=add-to-basket]').click();

    cy.visit('http://localhost/MKTime2/watches.php');

    cy.get('[data-cy=view-details-glencoe-wrist]').click();
    cy.url().should('include', '/products/glencoewrist.php');
    cy.get('[data-cy=add-to-basket]').click();

    cy.visit('http://localhost/MKTime2/watches.php');

    cy.get('[data-cy=view-details-mk-ness]').click();
    cy.url().should('include', '/products/mkness.php');
    cy.get('[data-cy=add-to-basket]').click();

    cy.visit('http://localhost/MKTime2/watches.php');

    cy.get('[data-cy=view-details-old-blair]').click();
    cy.url().should('include', '/products/oldblair.php');
    cy.get('[data-cy=add-to-basket]').click();

    cy.visit('http://localhost/MKTime2/watches.php');

    cy.get('[data-cy=view-details-wee-laggan]').click();
    cy.url().should('include', '/products/weelaggan.php');
    cy.get('[data-cy=add-to-basket]').click();
*/

// Make an array and a for loop instead:
const watches = [
  { name: 'Skye Time', url: '/products/skyetime.php', selector: '[data-cy=view-details-skye-time]' },
  { name: 'Glencoe Wrist', url: '/products/glencoewrist.php', selector: '[data-cy=view-details-glencoe-wrist]' },
  { name: 'MK Ness', url: '/products/mkness.php', selector: '[data-cy=view-details-mk-ness]' },
  { name: 'Old Blair', url: '/products/oldblair.php', selector: '[data-cy=view-details-old-blair]' },
  { name: 'Wee Laggan', url: '/products/weelaggan.php', selector: '[data-cy=view-details-wee-laggan]' }
];

// Loop through each watch
watches.forEach(watch => {
  cy.get(watch.selector).click();

  cy.url().should('include', watch.url);

  cy.get('[data-cy=add-to-basket]').click();

  cy.visit('http://localhost/MKTime2/watches.php');
});

    cy.visit('http://localhost/MKTime2/basket.php');
    cy.get('[data-cy=cart-item]').should('contain', 'Skye time');
    cy.get('[data-cy=cart-item]').should('contain', 'Glencoe wrist');
    cy.get('[data-cy=cart-item]').should('contain', 'MK Ness');
    cy.get('[data-cy=cart-item]').should('contain', 'Old Blair');
    cy.get('[data-cy=cart-item]').should('contain', 'Wee Laggan');

    cy.get('[data-cy=total-amount]').should('contain', '£8,095.00');

    cy.get('[data-cy=cart-item]').contains('Old Blair').parent().find('[data-cy=delete-button]').click(); //test buttons

    cy.get('[data-cy=checkout-button]').click();

    cy.get('[data-cy=card-number-input]').type('4111111111111111');
    cy.get('[data-cy=name-on-card-input]').type('Test User');
    cy.get('[data-cy=expiry-date-input]').type('12/23');
    cy.get('[data-cy=cvv-input]').type('123');
    cy.get('[data-cy=pay-now-button]').click();

    cy.get('#confirmationModal').should('be.visible');
    cy.get('#confirmationModal .btn-secondary').click();

    cy.visit('http://localhost/MKTime2/logout.php');
  });
});

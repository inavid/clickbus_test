import { CashierPage } from './app.po';

describe('cashier App', () => {
  let page: CashierPage;

  beforeEach(() => {
    page = new CashierPage();
  });

  it('should display welcome message', () => {
    page.navigateTo();
    expect(page.getParagraphText()).toEqual('Welcome to app!');
  });
});

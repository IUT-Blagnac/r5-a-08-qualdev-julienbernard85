Feature: Cocktail Order

  Scenario: Creating an empty order
    Given "Romeo" who wants to buy a drink
    When an order is declared for "Juliette"
    Then there is no cocktail in the order

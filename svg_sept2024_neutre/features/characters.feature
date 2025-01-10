Feature: Product basket
  In order to show characters
  I need to be able to add characters in a list
  And show that list

  Scenario: Displaying characters
    Given there is a character in a list
    When I add the second character
    Then I should have 2 characters in the list
    And the overall list is characters

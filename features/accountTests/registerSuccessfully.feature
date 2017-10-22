Feature: Create account successfully
  Scenario: Create account with male, full fields successfully
    Given I am on "/customer/account/create/"
    When I check "male"
    And I fill in "RegistrationForm[email]" with random yopmail
    And I fill in "RegistrationForm[first_name]" with "Duc"
    And I select "RegistrationForm[day]" from "01"
    And I select "RegistrationForm[month]" from "03"
    And I select "RegistrationForm[year]" from "1989"
    And I fill in "RegistrationForm[password]" with "123456abc"
    And I fill in "RegistrationForm[password2]" with "123456abc"
    And I press "send"

Feature: info_search
  In order to find information	
  As a consumer
  I need to be able to submit a written query

  Scenario: try info_search
	Given I have written a query "Java" in the text box
	When I click the submit button
	Then I should see search results

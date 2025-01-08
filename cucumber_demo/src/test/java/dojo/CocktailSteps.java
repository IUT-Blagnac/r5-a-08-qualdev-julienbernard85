package dojo;

import java.util.List;

import static org.junit.Assert.assertEquals;

import cucumber.api.java.en.Given;
import cucumber.api.java.en.Then;
import cucumber.api.java.en.When;

public class CocktailSteps {
    private Order order;
    
    @Given("{string} who wants to buy a drink")
    public void romeo_who_wants_to_buy_a_drink(String from) {
         order = new Order();
         order.declareOwner(from);
    }
    @When("an order is declared for {string}")
           public void an_order_is_declared_for_juliette(String to) {
            order.declareTarget(to);
    }
    @Then("there is no cocktail in the order")
    public void there_is_no_cocktail_in_the_order() {
        List<String> cocktails =  order.getCocktails();
        assertEquals(0, cocktails.size());
    }
}
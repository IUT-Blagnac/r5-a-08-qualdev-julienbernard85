<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Tester\Exception\PendingException;
use PHPUnit\Framework\Assert; // Assurez-vous d'importer PHPUnit pour les assertions

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    /**
     * @var Characters
     */
    private $character_list;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     */
    public function __construct()
    {
        $this->character_list = new Characters();
    }

    /**
     * @Given there is a character in a list
     */
    public function thereIsACharacterInAList(): void
    {
        // Déclarez un personnage dans la liste
        $this->character_list->declareCharacter("Character 1");
    }

    /**
     * @When I add the second character
     */
    public function iAddTheSecondCharacter(): void
    {
        // Ajoutez un deuxième personnage à la liste
        $this->character_list->addToList("Character 2");
    }

    /**
     * @Then I should have :arg1 characters in the list
     */
    public function iShouldHaveCharactersInTheList(int $arg1): void
    {
        $characters = $this->character_list->getCharacters();

        // Vérifiez que la taille de la liste correspond à l'argument
        Assert::assertCount($arg1, $characters);
    }

    /**
     * @Then the overall list is characters
     */
    public function theOverallListIsCharacters(): void
    {
        // Récupérez les personnages de la liste et effectuez une vérification
        $characters = $this->character_list->getCharacters();

        // Vous pouvez ajouter des assertions ici, par exemple :
        Assert::assertNotEmpty($characters);
    }
}

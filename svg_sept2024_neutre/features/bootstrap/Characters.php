<?php

class Characters
{
    private $characters = [];

    public function declareCharacter(string $character): void
    {
        $this->characters[] = $character;
    }

    public function addToList(string $character): void
    {
        $this->characters[] = $character;
    }

    public function getCharacters(): array
    {
        return $this->characters;
    }
}

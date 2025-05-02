<?php
require_once 'Human.php';


class Programmer extends Human
{
    private array $languages;
    private int $experience;

    public function __construct(float $height, float $weight, int $age, array $languages, int $experience)
    {
        parent::__construct($height, $weight, $age);
        $this->languages = $languages;
        $this->experience = $experience;
    }

    public function addLanguage(string $lang): void
    {
        if (!in_array($lang, $this->languages)) {
            $this->languages[] = $lang;
        }
    }

    protected function onBirthMessage(): void
    {
        echo "Програміст отримав нового користувача у своє життя!<br>";
    }
}

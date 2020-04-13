<?php


namespace Budget\Service;


use Pimple\Container;

class BudgetService
{
    use ContainerTrait;

    private $validator;

    public function __construct(ValidatorService $validator)
    {
        $this->validator = $validator;
    }

    public function addRecord(string $title, $amount, int $typeId, string $description = null)
    {
        //TODO implement
        var_dump($this->validator->validate('title', $title));die;

        /** @var \PDO $pdo */
        $pdo = $this->getContainer()['db'];
    }
}
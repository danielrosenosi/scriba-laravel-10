<?php

namespace App\Repositories;

use App\DTO\StoreSupportDTO;
use App\DTO\UpdateSupportDTO;
use stdClass;

interface SupportRepositoryInterface
{
    public function index(string $filter = null): array;
    public function show(int $id): stdClass|null;
    public function store(StoreSupportDTO $dto): stdClass;
    public function update(UpdateSupportDTO $dto): stdClass|null;
    public function delete(int $id): void;
}
<?php

namespace Paginator;

interface PaginatorInterface
{
    public function getTotalItems(): int;
    public function setTotalItems($totalItems): void;
    public function getPerPage(): int;
    public function setPerPage($perPage): void;
    public function setCurrentPage($pageNumber): void;
    public function getCurrentPage();
    public function getNumberOfPages(): int;
    public function hasPages(): bool;
}

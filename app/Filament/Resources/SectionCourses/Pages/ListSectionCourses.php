<?php

namespace App\Filament\Resources\SectionCourses\Pages;

use App\Filament\Resources\SectionCourses\SectionCourseResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSectionCourses extends ListRecords
{
    protected static string $resource = SectionCourseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

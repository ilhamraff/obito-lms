<?php

namespace App\Filament\Resources\SectionCourses\Pages;

use App\Filament\Resources\SectionCourses\SectionCourseResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Resources\Pages\EditRecord;

class EditSectionCourse extends EditRecord
{
    protected static string $resource = SectionCourseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}

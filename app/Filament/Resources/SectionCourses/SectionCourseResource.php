<?php

namespace App\Filament\Resources\SectionCourses;

use App\Filament\Resources\SectionCourses\Pages\CreateSectionCourse;
use App\Filament\Resources\SectionCourses\Pages\EditSectionCourse;
use App\Filament\Resources\SectionCourses\Pages\ListSectionCourses;
use App\Filament\Resources\SectionCourses\Schemas\SectionCourseForm;
use App\Filament\Resources\SectionCourses\Tables\SectionCoursesTable;
use App\Models\SectionCourse;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SectionCourseResource extends Resource
{
    protected static ?string $model = SectionCourse::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::DocumentText;

    protected static ?string $recordTitleAttribute = 'SectionCourse';

    public static function form(Schema $schema): Schema
    {
        return SectionCourseForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SectionCoursesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
                //
            ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListSectionCourses::route('/'),
            'create' => CreateSectionCourse::route('/create'),
            'edit' => EditSectionCourse::route('/{record}/edit'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()->withoutGlobalScopes([
            SoftDeletingScope::class,
        ]);
    }
}

<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            //
            TextInput::make('name')->maxLength(255)->required(),
            TextInput::make('email')->maxLength(255)->email()->required(),
            TextInput::make('password')
                ->helperText('Minimum 9 characters')
                ->password()
                ->minLength(9)
                ->maxLength(255)
                ->required(),
            Select::make('occupation')
                ->options([
                    'Developer' => 'Developer',
                    'Designer' => 'Designer',
                    'Marketer' => 'Marketer',
                    'Cyber Security' => 'Cyber Security',
                    'Project Manager' => 'Project Manager',
                ])
                ->required(),
            Select::make('roles')
                ->label('Role')
                ->relationship('roles', 'name')
                ->required()
                ->multiple()
                ->preload(),
            FileUpload::make('photo')->required()->image(),
        ]);
    }
}

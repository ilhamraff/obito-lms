<?php

namespace App\Filament\Resources\Transactions\Schemas;

use App\Models\Pricing;
use App\Models\User;
use Carbon\Carbon;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ToggleButtons;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Wizard;
use Filament\Schemas\Components\Wizard\Step;
use Filament\Schemas\Schema;

class TransactionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Wizard::make([
                Step::make('Product & Price')->schema([
                    Grid::make('2')->schema([
                        Select::make('pricing_id')
                            ->relationship('pricing', 'name')
                            ->searchable()
                            ->preload()
                            ->required()
                            ->live()
                            ->afterStateUpdated(function ($state, callable $set) {
                                $pricing = Pricing::find($state);

                                $price = $pricing->price;
                                $duration = $pricing->duration;

                                $subTotal = $price * $state;
                                $totalPpn = $subTotal * 0.11;
                                $totalAmount = $subTotal + $totalPpn;

                                $set('total_tax_amount', $totalPpn);
                                $set('grand_total_amount', $totalAmount);
                                $set('sub_total_amount', $price);
                                $set('duration', $duration);
                            })
                            ->afterStateHydrated(function (callable $set, $state) {
                                $pricingId = $state;
                                if ($pricingId) {
                                    $pricing = Pricing::find($pricingId);
                                    $duration = $pricing->duration;
                                    $set('duration', $duration);
                                }
                            }),
                        TextInput::make('duration')
                            ->required()
                            ->numeric()
                            ->readOnly()
                            ->prefix('Months'),
                    ]),
                    Grid::make(3)->schema([
                        TextInput::make('sub_total_amount')
                            ->required()
                            ->numeric()
                            ->readOnly()
                            ->prefix('IDR'),
                        TextInput::make('total_tax_amount')
                            ->required()
                            ->numeric()
                            ->readOnly()
                            ->prefix('IDR'),
                        TextInput::make('grand_total_amount')
                            ->required()
                            ->numeric()
                            ->readOnly()
                            ->prefix('IDR')
                            ->helperText('Harga sudah include PPN 11%'),
                    ]),
                    Grid::make(2)->schema([
                        DatePicker::make('started_at')
                            ->live()
                            ->afterStateUpdated(function ($state, callable $set, callable $get) {
                                $duration = $get('duration');
                                if ($state && $duration) {
                                    $endedAt = Carbon::parse($state)->addMonth($duration);
                                    $set('ended_at', $endedAt->format('Y-n-d'));
                                }
                            })
                            ->required(),
                        DatePicker::make('ended_at')->readOnly()->required(),
                    ]),
                ]),
                Step::make('Customer Information')->schema([
                    Select::make('user_id')
                        ->relationship('student', 'email')
                        ->searchable()
                        ->preload()
                        ->required()
                        ->live()
                        ->afterStateUpdated(function ($state, callable $set) {
                            $user = User::find($state);

                            $name = $user->name;
                            $email = $user->email;

                            $set('name', $name);
                            $set('email', $email);
                        })
                        ->afterStateHydrated(function (callable $set, $state) {
                            $userId = $state;
                            if ($userId) {
                                $user = User::find($userId);
                                $name = $user->name;
                                $email = $user->email;
                                $set('name', $name);
                                $set('email', $email);
                            }
                        }),
                    TextInput::make('name')->required()->readOnly()->maxLength(255),
                    TextInput::make('email')->required()->readOnly()->maxLength(255),
                ]),
                Step::make('Payment Information')->schema([
                    ToggleButtons::make('is_paid')
                        ->label('Apakah sudah membayar?')
                        ->boolean()
                        ->grouped()
                        ->icons([
                            true => 'heroicon-o-pencil',
                            false => 'heroicon-o-clock',
                        ])
                        ->required(),
                    Select::make('payment_type')
                        ->options([
                            'Midtrans' => 'Midtrans',
                            'Manual' => 'Manual',
                        ])
                        ->required(),
                    FileUpload::make('proof')->image(),
                ]),
            ])
                ->columnSpanFull()
                ->columns(1)
                ->skippable(),
        ]);
    }
}

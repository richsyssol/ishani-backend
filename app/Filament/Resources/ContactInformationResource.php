<?php

namespace App\Filament\Resources;

use App\Models\ContactInformation;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use App\Filament\Resources\ContactInformationResource\Pages;

class ContactInformationResource extends Resource
{
    protected static ?string $model = ContactInformation::class;

    protected static ?string $navigationIcon = 'heroicon-o-phone';

    protected static ?string $navigationLabel = 'Contact Information';

    protected static ?string $modelLabel = 'Contact Information';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Contact Information')
                    ->schema([
                        Forms\Components\TextInput::make('tel_number')
                            ->label('Telephone Number')
                            ->tel()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('mobile_number')
                            ->label('Mobile Number')
                            ->tel()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('email')
                            ->email()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('whatsapp_number')
                            ->label('WhatsApp Number')
                            ->tel()
                            ->maxLength(255),
                    ])->columns(2),

                Forms\Components\Section::make('Corporate Office Address')
                    ->schema([
                        Forms\Components\TextInput::make('corporate_address_line1')
                            ->label('Address Line 1'),
                        Forms\Components\TextInput::make('corporate_address_line2')
                            ->label('Address Line 2'),
                        Forms\Components\TextInput::make('corporate_address_line3')
                            ->label('Address Line 3'),
                        Forms\Components\TextInput::make('corporate_address_line4')
                            ->label('Address Line 4'),
                        Forms\Components\TextInput::make('corporate_address_line5')
                            ->label('Address Line 5'),
                    ]),

                Forms\Components\Section::make('Factory Address')
                    ->schema([
                        Forms\Components\TextInput::make('factory_address_line1')
                            ->label('Address Line 1'),
                        Forms\Components\TextInput::make('factory_address_line2')
                            ->label('Address Line 2'),
                        Forms\Components\TextInput::make('factory_address_line3')
                            ->label('Address Line 3'),
                        Forms\Components\TextInput::make('factory_address_line4')
                            ->label('Address Line 4'),
                        Forms\Components\TextInput::make('factory_address_line5')
                            ->label('Address Line 5'),
                    ]),

                Forms\Components\Section::make('Outlet Address')
                    ->schema([
                        Forms\Components\TextInput::make('outlet_address_line1')
                            ->label('Address Line 1'),
                        Forms\Components\TextInput::make('outlet_address_line2')
                            ->label('Address Line 2'),
                        Forms\Components\TextInput::make('outlet_address_line3')
                            ->label('Address Line 3'),
                        Forms\Components\TextInput::make('outlet_address_line4')
                            ->label('Address Line 4'),
                        Forms\Components\TextInput::make('outlet_address_line5')
                            ->label('Address Line 5'),
                    ]),

                Forms\Components\Section::make('Business Hours')
                    ->schema([
                        Textarea::make('open_hours')
                            ->label('Open Hours')
                            ->placeholder('Example: Monday-Friday: 9:00 AM - 6:00 PM\nSaturday: 10:00 AM - 4:00 PM')
                            ->columnSpanFull()
                    ]),
                Forms\Components\Section::make('Transport Information')
                    ->schema([
                        Textarea::make('by_road')
                            ->label('By Road Directions')
                            ->columnSpanFull(),
                        Textarea::make('parking')
                            ->label('Parking Information')
                            ->columnSpanFull(),
                        Textarea::make('public_transport')
                            ->label('Public Transport Options')
                            ->columnSpanFull(),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('tel_number')
                    ->label('Telephone'),
                Tables\Columns\TextColumn::make('mobile_number')
                    ->label('Mobile'),
                Tables\Columns\TextColumn::make('email'),
                // TextColumn::make('how_to_reach_us')
                //     ->label('Transport Info')
                //     ->limit(30)
                //     ->tooltip(function (TextColumn $column): ?string {
                //         $state = $column->getState();
                //         return $state;
                //     }),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            // ->actions([
            //     Tables\Actions\EditAction::make(),
            // ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContactInformation::route('/'),
            'create' => Pages\CreateContactInformation::route('/create'),
            'edit' => Pages\EditContactInformation::route('/{record}/edit'),
        ];
    }
}
<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DemandeResource\RelationManagers\PayementRelationManager;
use App\Filament\Resources\PayementResource\Pages;
use App\Filament\Resources\PayementResource\RelationManagers;
use App\Models\Demande;
use App\Models\Payement;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Forms;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Livewire\Features\SupportFileUploads\FileUploadSynth;

class PayementResource extends Resource
{
    protected static ?string $model = Payement::class;

    protected static ?string $navigationIcon = 'heroicon-o-banknotes';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()->schema([
                    Section::make('Payement Info')->schema([
                        Select::make('demande_id')
                            ->label('Requerant')
                            // ->options(['1' => 'One', '2' => 'Two', '3' => 'Three'])
                            ->searchable()
                            ->preload()
                            ->relationship('demande', 'postnom'),
                        TextInput::make('demande_id')
                            ->label('Numero Demande')
                            ->required(),
                        TextInput::make('montant_cdf')
                            ->label('Montant (CDF)')
                            ->numeric()
                            ->inputMode('decimal')
                            ->prefix('CDF')
                            ->reactive()
                            ->afterStateUpdated(fn($state, Set $set, Get $get) => $set('montant_usd', round($state / 2770, 2) /* $get('unit_amount') */))
                            ->required(),
                        TextInput::make('montant_usd')
                            ->prefix('USD')
                            ->label('Montant ($)')
                            ->disabled()
                            ->dehydrated()
                            ->required(),
                    ])->columns(2),
                ])->columnSpanFull(),
                Section::make('Preuve de Payement')->schema([
                    Group::make()->schema([
                        Section::make('Note de Perception')->schema([
                            TextInput::make('numero_note')
                                ->label('Numeero Note de Perception')
                                ->required(),
                            DatePicker::make('date_taxation')
                                ->format('d/m/Y')
                                ->native(false)
                                ->firstDayOfWeek(7)
                                ->required(),
                            FileUpload::make('copie_note')
                                ->directory('copie_note')
                                ->label('Joindre la Note')
                                ->required(),
                        ]),
                    ]),
                    Group::make()->schema([
                        Section::make('Bordereau Bancaire')->schema([
                            TextInput::make('numero_bordereau')->required(),
                            DatePicker::make('date_bordereau')
                                ->required()
                                ->native(false)
                                ->firstDayOfWeek(7)
                                ->format('d/m/Y'),
                            FileUpload::make('copie_bordereau')
                                ->label('Joindre le Bordereau')
                                ->directory('copie_bordereau')
                                ->required()
                                ->label('Joindre Bordereau'),
                        ]),
                    ]),
                ])->columns(2),
                Toggle::make('deja_paye')
                    ->label('Confirmer Payement')
                    ->onColor('success')
                    ->offColor('danger')
                    ->onIcon('heroicon-m-check')
                    ->offIcon('heroicon-m-x-mark')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->label('Payement ID'),
                TextColumn::make('demande_id')
                    ->label('Demande ID'),
                TextColumn::make('demande.fullName')
                    ->label('Concerne'),
                TextColumn::make('montant_cdf')
                    ->label('Montant (CDF)')
                    ->money('CDF'),
                TextColumn::make('montant_usd')->money('USD')->label('Montant (USD)'),
                // ImageColumn::make('preuve_paiement'),
                IconColumn::make('deja_paye')
                    ->boolean()
                    ->label('Confirmé'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ]),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            PayementRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPayements::route('/'),
            'create' => Pages\CreatePayement::route('/create'),
            'edit' => Pages\EditPayement::route('/{record}/edit'),
        ];
    }
}

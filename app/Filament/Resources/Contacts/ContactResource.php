<?php

namespace App\Filament\Resources\Contacts;

use App\Enums\ContactStatus;
use App\Filament\Resources\Contacts\ContactResource\Pages;
use App\Filament\Resources\Contacts\ContactResource\RelationManagers;
use App\Models\Contacts\Contact;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $navigationIcon = 'heroicon-o-envelope';

    protected static ?string $navigationGroup = 'Contato';

    protected static ?string $modelLabel = 'contato';

    public static function form(Form $form): Form
    {
        return $form
            ->columns(3)
            ->schema([
                Forms\Components\Section::make()
                    ->columns(2)
                    ->columnSpan(2)
                    ->schema([
                        Forms\Components\Placeholder::make('name')
                            ->label('Nome')
                            ->content(fn (string $state): string => $state),
                        Forms\Components\Placeholder::make('email')
                            ->content(fn (string $state): string => $state),
                        Forms\Components\Placeholder::make('subject')
                            ->label('Assunto')
                            ->content(fn (string $state): string => $state),
                        Forms\Components\ToggleButtons::make('status')
                            ->required()
                            ->inline()
                            ->options(ContactStatus::class),
                        Forms\Components\Placeholder::make('message')
                            ->label('Mensagem')
                            ->content(fn (string $state): string => $state)
                            ->columnSpanFull(),
                    ]),
                Forms\Components\Section::make()
                    ->columnSpan(1)
                    ->schema([
                        Forms\Components\Placeholder::make('created_at')
                            ->label('Criado em')
                            ->content(fn (Contact $record): string => $record->created_at?->format('d/m/Y H:i:s') ?? 'Nunca'),
                        Forms\Components\Placeholder::make('updated_at')
                            ->label('Atualizado em')
                            ->content(fn (Contact $record): string => $record->updated_at?->format('d/m/Y H:i:s') ?? 'Nunca'),
                        Forms\Components\Placeholder::make('deleted_at')
                            ->label('Excluído em')
                            ->content(fn (Contact $record): string => $record->deleted_at?->format('d/m/Y H:i:s') ?? 'Nunca'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('created_at', 'desc')
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->translateLabel()
                    ->searchable()
                    ->limit(16),
                Tables\Columns\TextColumn::make('email')
                    ->searchable()
                    ->limit(16),
                Tables\Columns\TextColumn::make('subject')
                    ->label('Assunto')
                    ->searchable()
                    ->limit(16),
                Tables\Columns\TextColumn::make('message')
                    ->label('Mensagem')
                    ->searchable()
                    ->limit(16),
                Tables\Columns\TextColumn::make('status')
                    ->searchable()
                    ->badge()
                    ->alignCenter(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Criado em')
                    ->dateTime('d/m/Y H:i')
                    ->alignCenter()
                    ->sortable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Atualizado em')
                    ->dateTime('d/m/Y H:i')
                    ->alignCenter()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->label('Excluído em')
                    ->dateTime('d/m/Y H:i')
                    ->alignCenter()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make()
                    ->native(false),
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                    Tables\Actions\ForceDeleteAction::make(),
                    Tables\Actions\RestoreAction::make(),
                ]),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListContacts::route('/'),
            'create' => Pages\CreateContact::route('/create'),
            'edit' => Pages\EditContact::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
    
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
}

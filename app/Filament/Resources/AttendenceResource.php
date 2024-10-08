<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AttendenceResource\Pages;
use App\Filament\Resources\AttendenceResource\RelationManagers;
use App\Models\Attendence;
use Filament\Forms;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AttendenceResource extends Resource
{
    protected static ?string $model = Attendence::class;

    protected static ?string $navigationIcon = 'fas-user-check';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),

                CheckboxList::make('students')
                    ->columnSpan('full')
                    ->columns(5)
                    ->bulkToggleable()
                    ->searchable()
                    ->relationship('students', 'name'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAttendences::route('/'),
            'create' => Pages\CreateAttendence::route('/create'),
            'view' => Pages\ViewAttendence::route('/{record}'),
            'edit' => Pages\EditAttendence::route('/{record}/edit'),
        ];
    }
}

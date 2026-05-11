<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\PeminjamanResource\Pages;
use App\Filament\Admin\Resources\PeminjamanResource\RelationManagers;
use App\Models\Peminjaman;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PeminjamanResource extends Resource
{
    protected static ?string $model = Peminjaman::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Sistem Perpustakaan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('buku_id')
                    ->label('Buku')
                    ->relationship('buku', 'judul')
                    ->preload()
                    ->searchable()
                    ->required(),
                Forms\Components\Select::make('anggota_id')
                    ->label('Nama Peminjam')
                    ->relationship('anggota', 'nama')
                    ->preload()
                    ->searchable()
                    ->required(),
                Forms\Components\DatePicker::make('tanggal_pinjam')
                    ->required(),
                Forms\Components\DatePicker::make('tanggal_kembali'),
                Forms\Components\TextInput::make('status')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('buku.judul')
                    ->label('Buku')
                    ->sortable(),
                Tables\Columns\TextColumn::make('anggota.nama')
                    ->label('Nama Peminjam')
                    ->sortable(),
                Tables\Columns\TextColumn::make('tanggal_pinjam')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tanggal_kembali')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
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
            'index' => Pages\ListPeminjamen::route('/'),
            'create' => Pages\CreatePeminjaman::route('/create'),
            'edit' => Pages\EditPeminjaman::route('/{record}/edit'),
        ];
    }
}

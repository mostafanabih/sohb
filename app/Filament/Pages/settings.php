<?php

namespace App\Filament\Pages;

use App\Models\Setting;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Radio;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Support\Exceptions\Halt;
use Filament\Resources\Pages\EditRecord\Concerns\Translatable;
use Filament\Actions\LocaleSwitcher;



use Filament\Pages\Page;

class settings extends Page implements HasForms
{
    
    use InteractsWithForms;
    public ?array $data = []; 
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';
    protected static ?int $navigationSort = 8;


    protected static string $view = 'filament.pages.settings';

    
    public function mount(): void 
    {

        $setting=Setting::first();
        
        

        if($setting){
            $this->form->fill(Setting::first()->attributesToArray()); 
        }
        else{
            $this->form->fill();
        }
    }
 
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->translateLabel(),
                TextInput::make('phone')->translateLabel(),
                TextInput::make('email')->translateLabel(),
                TextInput::make('snapchat')->translateLabel(),
                TextInput::make('insta')->translateLabel(),
                TextInput::make('twitter')->translateLabel(),
                TextInput::make('facebook')->translateLabel(),
                FileUpload::make('logo')->disk('public')->directory('setting')->translateLabel(),

                

            ])
            ->statePath('data');
    }
    
    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label(__('filament-panels::resources/pages/edit-record.form.actions.save.label'))
                ->submit('save'),
        ];
    }


    public function save(): void
    {
        try {
            $data = $this->form->getState();
            $setting =Setting::first();
            if($setting){
                 $setting->update($data);
            }else{
                Setting::create($data);
            }

            
        } catch (Halt $exception) {
            dd($exception);
        }

        Notification::make() 
        ->success()
        ->title(__('filament-panels::resources/pages/edit-record.notifications.saved.title'))
        ->send();
    }

    public  static function getNavigationLabel(): string
        {
            return __('Settings');
        }

        public static function getModelLabel(): string
            {
                return __('Settings');
            }

}

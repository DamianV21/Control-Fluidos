<x-jet-form-section submit="updatePassword">
    <x-slot name="title">
        {{ __('Actualiza contraseña') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Asegúrese de que su cuenta esté usando una contraseña larga y aleatoria para mantenerse seguro.') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="current_password" value="{{ __('Contraseña actual') }}" />
            <x-jet-input id="current_password" type="password" class="mt-0.5 block w-full text-sm" wire:model.defer="state.current_password" autocomplete="current-password" />
            <x-jet-input-error for="current_password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="password" value="{{ __('Nueva contraseña') }}" />
            <x-jet-input id="password" type="password" class="mt-0.5 block w-full text-sm" wire:model.defer="state.password" autocomplete="new-password" />
            <x-jet-input-error for="password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="password_confirmation" value="{{ __('Confirmar contraseña') }}" />
            <x-jet-input id="password_confirmation" type="password" class="mt-0.5 block w-full text-sm" wire:model.defer="state.password_confirmation" autocomplete="new-password" />
            <x-jet-input-error for="password_confirmation" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            <div class="alert alert-dark text-sm text-white" role="alert">
                <strong>¡Éxito!</strong> Cambio guardado
            </div>
        </x-jet-action-message>

        <x-jet-button>
            {{ __('Guardar cambios') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>

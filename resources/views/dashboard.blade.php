<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
                <div class="flex justify-center
                ">
                    <x-mary-form class="content-center" wire:submit="save">
                        <x-mary-input label="Name" wire:model="name" />
                        <x-mary-input label="Amount" wire:model="amount" prefix="USD" money
                            hint="It submits an unmasked value" />

                        <x-slot:actions>
                            <x-mary-button label="Cancel" />
                            <x-mary-button label="Click me!" class="btn-primary" type="submit" spinner="save" />
                        </x-slot:actions>
                    </x-mary-form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

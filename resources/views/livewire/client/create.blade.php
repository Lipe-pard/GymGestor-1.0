<div>
    <button wire:click="open" class="bg-blue-500 text-white px-4 py-2 rounded">Adicionar Cliente</button>

    @if($isOpen)
        <div class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50">
            <div class="bg-white p-6 rounded shadow-lg w-2/4">
                <div class="w-full flex justify-between items-center">
                    <h2 class="text-lg font-semibold">Adicionar Cliente</h2>
                    <button wire:click="close" class="hover:bg-gray-200 p-2 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <form wire:submit.prevent="store" class="mt-4 space-y-4 w-full">
                    <div>
                        <x-input-label for="name" value="Nome" />
                        <x-text-input wire:model="name" id="name" class="block mt-1 w-full" type="text"  autofocus placeholder="Nome"/>
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    <div class="grid xl:grid-cols-2 gap-4">
                        <div>
                            <x-input-label for="cpf" value="CPF" />
                            <x-text-input wire:model.defer="cpf" id="cpf" class="block mt-1 w-full" type="text"  placeholder="000.000.000-00" oninput="formatCpf(this)" maxlength="14"/>
                            <x-input-error :messages="$errors->get('cpf')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="phone" value="Celular" />
                            <x-text-input wire:model.defer="phone" id="phone" class="block mt-1 w-full" type="text"  placeholder="(00) 00000-0000" oninput="formatCelular(this)" maxlength="15"/>
                            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="">
                            <x-input-label for="zip_code" value="Cep" />
                            <x-text-input wire:model.defer="zip_code" id="zip_code" class="block mt-1 w-full" type="text"  placeholder="00000-000" oninput="formatCep(this)" maxlength="9"/>
                            <x-input-error :messages="$errors->get('zip_code')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="street" value="Rua" />
                            <x-text-input wire:model="street" id="street" class="block mt-1 w-full" type="text"  placeholder="Nome da Rua"/>
                            <x-input-error :messages="$errors->get('street')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="neighborhood" value="Bairro" />
                            <x-text-input wire:model="neighborhood" id="neighborhood" class="block mt-1 w-full" type="text"  placeholder="Bairro"/>
                            <x-input-error :messages="$errors->get('neighborhood')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="number" value="Número" />
                            <x-text-input wire:model="number" id="number" class="block mt-1 w-full" type="text"  placeholder="Número"/>
                            <x-input-error :messages="$errors->get('number')" class="mt-2" />
                        </div>
                    </div>
                    <div class="grid xl:grid-cols-2 gap-4">
                        <div>
                            <x-input-label for="birth_date" value="Data de Nascimento" />
                            <x-text-input wire:model="birth_date" id="birth_date" class="block mt-1 w-full" type="date" />
                            <x-input-error :messages="$errors->get('birth_date')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="due_day" value="Dia do Vencimento" />
                            <x-text-input wire:model="due_day" id="due_day" class="block mt-1 w-full" type="number" min="1" max="30" placeholder="Dia do Vencimento"/>
                            <x-input-error :messages="$errors->get('due_day')" class="mt-2" />
                        </div>
                    </div>

                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Salvar</button>
                </form>
            </div>
        </div>
    @endif

</div>

<script src="{{ asset('js/client/format-input.js') }}"></script>

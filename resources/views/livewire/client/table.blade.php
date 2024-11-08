<div class="mt-4">
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200 text-center">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-center">
                                Nome
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-center">
                                CPF
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-center">
                                Telefone
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-center">
                                Proximo Vencimento
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-center">
                                Ação
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($clients as $client)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $client->name }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $client->cpf }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $client->phone }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $client->due_day }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <button class="bg-indigo-600 hover:bg-indigo-700 text-white py-2 px-4 rounded">
                                        Editar
                                    </button>
                                    <button class="bg-red-600 hover:bg-red-700 text-white py-2 px-4 rounded">
                                        Excluir
                                    </button>
                                    <button class="bg-cyan-600 hover:bg-cyan-700 text-white py-2 px-4 rounded">
                                        Pagamentos
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

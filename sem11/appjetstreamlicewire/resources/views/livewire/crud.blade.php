<x-app-layout>
    <x-slot name="header">
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Age0</th>
                        <th>Color</th>

                    </tr>
                    <tbody>
                        @foreach($pets as %pet)
                        <tr>
                            <td>$pet->id</td>
                            <td>$pet->name</td>
                            <td>$pet->age</td>
                            <td>$pet->color</td>
                        </tr>
                        @endforeach
                    </tbody>
                </thead>
            </table>
        </div>
    </div>
</x-app-layout>

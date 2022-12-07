<div>
    <div class="">
        <div class="">
            <div class="">
                @if (session()->has('success'))
                    <div class="" role="alert">
                        {{ session()->get('success') }}
                    </div>
                @endif

                @if (session()->has('error'))
                    <div class="" role="alert">
                        {{ session()->get('error') }}
                    </div>
                @endif

                @if ($updatePost)
                    @include('livewire.update')
                @else
                    @include('livewire.create')
                @endif
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg bg-[#232323] max-h-full md:min-h-full">
                <div class="p-6">
                    <table class="w-full whitespace-nowrap">
                        <thead>
                            <tr class="text-left font-bold">
                                <x-table-column>Title</x-table-column>
                                <x-table-column>file_path</x-table-column>
                                <x-table-column>Price</x-table-column>
                                <x-table-column>Description</x-table-column>
                                <x-table-column>Action</x-table-column>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($posts) > 0)
                                @foreach ($posts as $rs)
                                    <tr>
                                        <x-table-column>
                                            {{ $rs->title }}
                                        </x-table-column>
                                        <x-table-column>
                                            {{ $rs->file_path }}
                                        </x-table-column>
                                        <x-table-column>
                                            {{ $rs->price }}
                                        </x-table-column>
                                        <x-table-column>
                                            {{ $rs->description }}
                                        </x-table-column>
                                        <x-table-column>
                                            <button wire:click="edit({{ $rs->id }})" class="">Edit</button>
                                            <button wire:click="deletePost({{ $rs->id }})"
                                                class="">Delete</button>
                                        </x-table-column>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td>
                                        No post Found.
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

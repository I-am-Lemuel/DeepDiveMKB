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

    <div class="p-12">
        <div class="p-6">
            <div class="bg-[#232323]">
                <table class="w-full border-2 border-[#0abdc6]">
                    <thead class="border-b-2 border-white">
                        <tr>
                            <x-table-header>Title</x-table-header>
                            <x-table-header>Image-URL</x-table-header>
                            <x-table-header>Price</x-table-header>
                            <x-table-header>Description</x-table-header>
                            <x-table-header>Action</x-table-header>
                        </tr>
                        </th>
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
                                        <div class="flex flex-row space-x-6">
                                            <button wire:click="edit({{ $rs->id }})" class="">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                    <path
                                                        d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                                </svg>
                                            </button>
                                            <button wire:click="deletePost({{ $rs->id }})" class="">
                                                <svg width="24" height="24" stroke-width="1.5"
                                                    viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M19.2616 17.0378L20.9383 4.46293C20.9746 4.19069 20.8214 3.92855 20.5664 3.82655L16 2H10.5L9.81818 3.5L5 2L3.20966 3.79034C3.07751 3.92249 3.01449 4.10866 3.03919 4.2939L4.73838 17.0378C4.90325 18.2744 5.6356 19.3632 6.71873 19.9821L7.03861 20.1649C10.1129 21.9217 13.8871 21.9217 16.9614 20.1649L17.2813 19.9821C18.3644 19.3632 19.0968 18.2744 19.2616 17.0378Z"
                                                        stroke="currentColor" stroke-width="1.5" />
                                                    <path d="M16 2L14 7" stroke="currentColor" stroke-width="1.5" />
                                                    <path d="M9 6.5L9.81818 3.5" stroke="currentColor"
                                                        stroke-width="1.5" />
                                                    <path d="M3 5.00002C5.57143 7.66668 18.4286 7.66664 21 5.00002"
                                                        stroke="currentColor" stroke-width="1.5" />
                                                </svg>
                                            </button>
                                        </div>
                                    </x-table-column>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <x-table-column>
                                    No post Found.
                                </x-table-column>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

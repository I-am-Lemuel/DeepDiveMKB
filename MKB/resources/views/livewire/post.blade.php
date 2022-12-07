<div>
    <div class="">
        <div class="">
            <div class="">
                @if(session()->has('success'))
                <div class="" role="alert">
                    {{ session()->get('success') }}
                </div>
                @endif

                @if(session()->has('error'))
                <div class="" role="alert">
                    {{ session()->get('error') }}
                </div>
                @endif

                @if($updatePost)
                @include('livewire.update')
                @else
                @include('livewire.create')
                @endif
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>file_path</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($posts) > 0)
                            @foreach ($posts as $rs)
                            <tr>
                                <td>
                                    {{$rs->title}}
                                </td>
                                <td>
                                    {{$rs->file_path}}
                                </td>
                                <td>
                                    {{$rs->price}}
                                </td>
                                <td>
                                    {{$rs->description}}
                                </td>
                                <td>
                                    <button wire:click="edit({{$rs->id}})" class="">Edit</button>
                                    <button wire:click="deletePost({{$rs->id}})" class="">Delete</button>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="3">
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
</div>
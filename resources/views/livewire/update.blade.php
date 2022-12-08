<form class="mx-auto ">
    <input type="hidden" wire:model="post_id">
    <h1 class="text-center text-3xl w-full py-10 text-orange-500">Update Event</h1>
    <div class="flex flex-row justify-center space-x-6 pb-6 pt-5 text-white">
        <input type="text"
            class="form-control @error('title') is-invalid @enderror border-2 border-orange-500 bg-transparent p-2 text-center"
            id="postTitle" placeholder="title" wire:model="title">
        @error('title')
            <span class="bg-red-600">{{ $message }}</span>
        @enderror
        <input
            class="form-control @error('file_path') is-invalid @enderror border-2 border-orange-500 bg-transparent p-2 text-center"
            id="postImage" wire:model="file_path" placeholder="Image-URL">
        @error('file_path')
            <span class="bg-red-600">{{ $message }}</span>
        @enderror
        <input type="number"
            class="form-control @error('price') is-invalid @enderror border-2 border-orange-500 bg-transparent p-2 text-center"
            id="postPrice" wire:model="price" placeholder="Price">
        @error('price')
            <span class="bg-red-600">{{ $message }}</span>
        @enderror
    </div>
        <div class="flex justify-center text-white">
            <textarea class="@error('description') is-invalid @enderror border-2 border-orange-500 bg-transparent p-2 text-center resize-none"
                id="postDescription" wire:model="description" cols="77" placeholder="Description"></textarea>
            @error('description')
                <span class="bg-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex justify-center space-x-4 mt-5 text-white">
            <button wire:click.prevent="update()" class="border-2 border-orange-500 bg-transparent py-1 px-3 text-center transition ease-in-out delay-150 hover:scale-110">Save</button>
            <button wire:click.prevent="cancel()" class="border-2 border-orange-500 bg-transparent py-1 px-3 text-center transition ease-in-out delay-150 hover:scale-110">Cancel</button>
        </div>
</form>

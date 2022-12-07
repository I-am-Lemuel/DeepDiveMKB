    <form class="mx-auto">
        <h1 class="text-center text-3xl w-full py-10">Create a new event</h1>
        </hr>
        <div class="flex flex-row justify-center space-x-6 pb-6 pt-5">
            <input type="text" name="title" id="postTitle" placeholder="Title"
                class="border-2 border-[#0abdc6] bg-transparent p-2 text-center" wire:model="title">
            <input type="text" name="image" id="postImage" placeholder="Image-URL"
                class="border-2 border-[#0abdc6] bg-transparent p-2 text-center" wire:model="file_path">
            <input type="number" name="price" id="postPrice" placeholder="Price"
                class="border-2 border-[#0abdc6] bg-transparent p-2 text-center" wire:model="price">
        </div>
        <div class="flex justify-center">
            <textarea name="description" id="postDescription" cols="78" wire:model="description"
                placeholder="Description" class="border-2 border-[#0abdc6] bg-transparent p-2 text-center resize-none"></textarea>
        </div>
        <div class="flex justify-center mt-5">
        <button wire:click.prevent="store()"
            class="border-2 border-[#0abdc6] bg-transparent py-1 px-6 text-center transition ease-in-out delay-150 hover:scale-110 rounded">Create</button>
        </div>
    </form>

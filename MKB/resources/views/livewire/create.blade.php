<div class="">
    <form class="">
        <h1 class="">Create a new event</h1>
        <input type="text" name="title" id="postTitle" placeholder="Title"
            class="border-2 border-[#0abdc6] bg-transparent p-2 text-center" wire:model="title">
        <input type="text" name="image" id="postImage" placeholder="Image-URL"
            class="border-2 border-[#0abdc6] bg-transparent p-2 text-center" wire:model="file_path">
        <input type="number" name="price" id="postPrice" placeholder="Price"
            class="border-2 border-[#0abdc6] bg-transparent p-2 text-center" wire:model="price">
        <textarea name="description" id="postDescription" cols="50" rows="" wire:model="description"
            placeholder="Description" class="border-2 border-[#0abdc6] bg-transparent p-2 text-center"></textarea>
        <button wire:click.prevent="store()"
            class="border-2 border-[#0abdc6] bg-transparent p-2 text-center">Create</button>
    </form>
</div>

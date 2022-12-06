<form class="px-4 my-28 container mx-auto space-y-6">
    <h1 class="text-2xl font-bold text-center">Create a new event</h1>
    <hr/>
    <div class="flex flex-row space-x-8 justify-center">
        <input type="text" name="title" id="postTitle" placeholder="Title" class="border border-gray-300 p-2 rounded-md" wire:model="name">
        <input type="text" name="image" id="postImage" placeholder="Image-URL" class="border border-gray-300 p-2 rounded-md" wire:model="image">
        <input type="number" name="price" id="postPrice" placeholder="Price" class="border border-gray-300 p-2 rounded-md" wire:model="price">
    </div>
    <div class="flex flex-row space-x-8 justify-center">
        <textarea name="description" id="postDescription" cols="50" rows="" wire:model="description" placeholder="Description" class="border border-gray-300 p-2 rounded-md"></textarea>
    </div>
    <div class="flex flex-row space-x-8 justify-center">
        <button wire:click.prevent="store()" class="bg-[#343434] text-white py-2 px-5 rounded-md">Create</button>
    </div>
</form>
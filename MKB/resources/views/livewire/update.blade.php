<form>
    <input type="hidden" wire:model="post_id">
    <div class="form-group mb-3">
        <label for="postName">Name:</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="postTitle" placeholder="title" wire:model="title">
        @error('title') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group mb-3">
        <label for="postDescription">Description:</label>
        <input class="form-control @error('file_path') is-invalid @enderror" id="postImage" wire:model="file_path" placeholder="Image-URL">
        @error('file_path') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group mb-3">
        <label for="postDescription">Description:</label>
        <input type="number" class="form-control @error('price') is-invalid @enderror" id="postPrice" wire:model="price" placeholder="Price">
        @error('price') <span class="bg-red-600">{{ $message }}</span>@enderror
    </div>
    <div class="form-group mb-3">
        <label for="postDescription">Description:</label>
        <textarea class="form-control @error('description') is-invalid @enderror" id="postDescription" wire:model="description" placeholder="Description"></textarea>
        @error('description') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="d-grid gap-2">
        <button wire:click.prevent="update()" class="btn btn-success btn-block">Save</button>
        <button wire:click.prevent="cancel()" class="btn btn-danger">Cancel</button>
    </div>
</form>
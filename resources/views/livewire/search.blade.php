
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <div class="modal-body input-group input-group-lg">
            <span class="input-group-text" id="basic-addon1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                </svg>
            </span>
                <input wire:model="term" type="text" class="form-control" placeholder="Type to search in tasks, documents and wiki..." aria-label="Input group example" aria-describedby="basic-addon1" id="searchbar" autocomplete="off">
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="list-group list-group-flush">
            @foreach($results as $result)
                <a href="{{ $result->url }}" class="list-group-item list-group-item-action px-4">{{ $result->name }}</a>

            @endforeach
        </div>
    </div>
</div>

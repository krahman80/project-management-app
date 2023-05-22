<div class="modal-dialog">
    <form wire:submit.prevent="saveTask">
        <div class="modal-content">
            @csrf
            <input type="hidden" wire:model="project_id">
            <div class="modal-header">
                <h5 class="modal-title">Add New task</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="mb-3">
                    <label for="taskName" class="form-label">Task Name</label>
                    <input type="text" wire:model.lazy="name" id="taskName"
                        class="form-control form-control-sm @error('name') is-invalid @enderror">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class=" mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea wire:model.lazy="description" id="description"
                        class="form-control form-control-sm @error('description') is-invalid @enderror"
                        rows="2"></textarea>
                    @error('description')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-check-label" for="ownerId">Task owner</label>
                    <select class="form-select @error('owner_id') is-invalid @enderror" size="3" id="ownerId"
                        wire:model.lazy="owner_id">
                        <option value="0" selected>choose...</option>
                        @forelse ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @empty
                        <option value="no data found">No data found</option>
                        @endforelse
                    </select>
                    @error('owner_id')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="startDate" class="form-label">Start date</label>
                    <input type="text" wire:model.lazy="start_date" id="startDate" value="2023-06-06"
                        class="form-control form-control-sm @error('start_date') is-invalid @enderror">
                    @error('start_date')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="endDate" class="form-label">End date</label>
                    <input type="text" wire:model.lazy="end_date" id="endDate" value="2023-08-08"
                        class="form-control form-control-sm @error('end_date') is-invalid @enderror">
                    @error('end_date')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-check-label" for="status">Status</label>
                    <select class="form-select @error('status') is-invalid @enderror" size="2" id="status"
                        wire:model.lazy="status">
                        <option value="0" selected>choose...</option>
                        <option value="in progress">in progress</option>
                        <option value="planned">planned</option>
                        <option value="completed">completed</option>
                    </select>
                    @error('status')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                {{-- <button type="button" class="btn btn-primary">Save Task</button> --}}
                <button type="submit" wire:loading.attr="disabled" class="btn btn-sm btn-primary">Save Task</button>
            </div>
        </div>
    </form>
</div>
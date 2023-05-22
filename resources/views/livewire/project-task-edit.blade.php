<div class="modal-dialog">
    <form wire:submit.prevent="updateTask">
        <div class="modal-content">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title">Edit task</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="mb-3">
                    <label for="taskName" class="form-label">Task Name</label>
                    <input type="text" wire:model.lazy="task.name" id="taskName"
                        class="form-control form-control-sm @error('task.name') is-invalid @enderror">
                    @error('task.name')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>

                <div class=" mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea wire:model.lazy="task.description" id="description"
                        class="form-control form-control-sm @error('task.description') is-invalid @enderror"
                        rows="2"></textarea>
                    @error('task.description')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-check-label" for="ownerId">Task owner</label>
                    <select class="form-select @error('task.owner_id') is-invalid @enderror" size="3" id="ownerId"
                        wire:model.lazy="task.owner_id">
                        <option value="0" selected>choose...</option>
                        @forelse ($users as $user)
                        <option value="{{ $user->id }}" @if ($user->id == $task->owner_id) selected @endif>
                            {{ $user->name }}
                        </option>
                        @empty
                        <option value="no data found">No data found</option>
                        @endforelse
                    </select>
                    @error('task.owner_id')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="startDate" class="form-label">Start date</label>
                    <input type="text" wire:model.lazy="task.start_date" id="startDate" value="2023-06-06"
                        class="form-control form-control-sm @error('task.start_date') is-invalid @enderror">
                    @error('task.start_date')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="endDate" class="form-label">End date</label>
                    <input type="text" wire:model.lazy="task.end_date" id="endDate" value="2023-08-08"
                        class="form-control form-control-sm @error('task.end_date') is-invalid @enderror">
                    @error('task.end_date')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-check-label" for="status">Status</label>
                    <select class="form-select @error('task.status') is-invalid @enderror" size="2" id="status"
                        wire:model.lazy="task.status">
                        <option value="0">choose...</option>
                        <option value="in progress" @if ( $task->status == 'in progress') selected @endif>in progress
                        </option>
                        <option value="planned" @if ( $task->status == 'planed') selected @endif>planned</option>
                        <option value="completed" @if ( $task->status == 'completed') selected @endif>completed</option>
                    </select>
                    @error('task.status')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                {{-- <button type="button" class="btn btn-primary">Save Task</button> --}}
                <button type="submit" wire:loading.attr="disabled" class="btn btn-sm btn-primary">Update Task</button>
            </div>
        </div>
    </form>
</div>
<div class="border w-75 float-end mb-1" id="taskFormCollapse-{{$task->id}}">
    <h5 class="h5 m-2">Update Task <span class="text-muted"><i class="bi bi-journal-text"></i></span></h5>
    <div class="p-2">
      <form method="post" action="{{route('user.mytask.update',['id' => $task->id])}}" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <div class="row mb-1">
          <label for="inputProgress" class="col-sm-3 form-label">Progress</label>
          <div class="col-sm-9">
            <input type="number" class="form-control form-control-sm" name="progress" placeholder="input progress from 0-100" max="100" id="inputProgress">
          </div>
        </div>
        <div class="row mb-1">
          <label for="inputStatus" class="col-sm-3 form-label">Status</label>
          <div class="col-sm-9">
            <select class="form-select form-select-sm" id="inputStatus" name="status">
              <option value="0" {{$task->status == 0  ? 'selected' : ''}}>In progress</option>
              <option value="1" {{$task->status == 1  ? 'selected' : ''}}>Pending</option>
              <option value="2" {{$task->status == 2  ? 'selected' : ''}}>Completed</option>
            </select>
          </div>
        </div>
        <div class="row mb-1 mt-1">
          <div class="col-sm-3">&nbsp;</div>
          <div class="col-sm-9 mt-1"><button type="submit" class="btn btn-sm btn-primary w-25">update task</button></div>
        </div>
      </form>
    </div>
  </div>
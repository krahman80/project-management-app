<div class="border w-75 float-end mb-1" id="commentCollapse-{{$task->id}}">
    <h5 class="h5 m-2">message <span class="text-muted"><i class="bi bi-chat-dots"></i></span></h5>
    @forelse ($comments as $comment)
    <div class="d-flex flex-row justify-content-start p-2">
      <div class="w-25"><i class="bi bi-person-circle"></i>&nbsp;{{ $comment->username }}</div>
      <div class="w-75">
        <p class="small p-2 ms-3 mb-1 rounded" style="background-color: #f5f6f7;">{{ $comment->comment }}</p>
        <p class="small ms-3 mb-1 rounded-3 text-muted float-end">{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $comment->comment_date)->format('H:i A | d F Y') }}</p>
        {{-- <p class="small ms-3 mb-1 rounded-3 text-muted float-end">{{ $comment->comment_date->format('H:i A | d F Y' ) }}</p> --}}
      </div>
    </div>
    @empty
      <div class="d-flex flex-row justify-content-start p-2">
        <p>No Comments</p>
      </div>
    @endforelse
    {{-- <hr class="w-75 justify-content-center"/> --}}
    <div class="pb-2 pt-2 border-top">
      <form method="post" action="{{route('comment.store')}}">
          @csrf
          <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
          <input type="hidden" name="task_id" value="{{ $task->id }}">
       <div class="row mb-1">
          <label for="inputComment" class="col-sm-3 col-form-label">Comment</label>
          <div class="col-sm-9">
              <textarea class="form-control form-control-sm" name="comment" id="inputComment" placeholder="Leave a comment here"></textarea>
          </div>
        </div>
        <div class="row mb-1 mt-1">
          <div class="col-sm-3 col-form-label">&nbsp;</div>
          <div class="col-sm-9 mt-1"><button type="submit" class="btn btn-sm btn-primary w-25">Add comment</button>
          </div>
        </div>                                  
      </form>
    </div>
  </div>
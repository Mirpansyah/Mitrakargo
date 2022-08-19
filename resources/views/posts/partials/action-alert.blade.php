<!-- Modal -->
<div class="modal fade" id="deleteAlert" tabindex="-1" aria-labelledby="deleteAlertModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteAlertModal">Hapus Post ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div>
          <div>
            <h5><b>{{ $post->title }}</b></h5>
          </div>
          <div class="text-small text-secondary">
            Published {{ $post->created_at->format("d F, Y") }}
          </div>
        </div>
        
        {{-- confirm delete --}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Cancel</button>
        <form action="/admin/artikel/{{ $post->slug }}/delete" method="post">
          @csrf
          @method('delete')
          <button class="btn btn-sm btn-danger" type="submit">Delete Post</button>
        </form>
      </div>
    </div>
  </div>
</div>
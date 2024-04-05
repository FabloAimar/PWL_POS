<a href="{{ url('/kategori/' . $id . '/edit') }}" class="btn btn-primary">
    Edit
  </a>
  <button id="delete" class="btn btn-danger" data-confirm-delete="true"
    onclick="
      event.preventDefault();
      if (confirm('Are you sure? It will delete the data permanently!')) {
          document.getElementById('destroy{{ $id }}').submit()
      }
      ">
    Delete
    <form id="destroy{{ $id }}" class="d-none" action="{{ url('/kategori/' . $id) }}" method="POST">
      @csrf
      @method('delete')
    </form>
  </button>
<div class="btn-group" role="group" aria-label="Companies">
    <a href="{{ route('companies.show', $company->id) }}" class="btn btn-primary">Show</a>
    <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-warning">Edit</a>
    <button type="button" class="btn btn-outline-danger"
        onclick="event.preventDefault(); if(confirm('Are you sure to delete this row?')){
        document.getElementById('delete-data-{{ $company->id }}').submit();}">
        Delete
    </button>
    <form id="delete-data-{{ $company->id }}" action="{{ route('companies.destroy', $company->id) }}" method="POST">
        @csrf
        @method('DELETE')
    </form>

</div>

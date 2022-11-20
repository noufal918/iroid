<div class="btn-group" role="group" aria-label="Employees">
    <a href="{{ route('employees.show', $employee->id) }}" class="btn btn-primary">Show</a>
    <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning">Edit</a>
    <button type="button" class="btn btn-outline-danger"
        onclick="event.preventDefault(); if(confirm('Are you sure to delete this row?')){
        document.getElementById('delete-data-{{ $employee->id }}').submit();}">
        Delete
    </button>
    <form id="delete-data-{{ $employee->id }}" action="{{ route('employees.destroy', $employee->id) }}" method="POST">
        @csrf
        @method('DELETE')
    </form>

</div>

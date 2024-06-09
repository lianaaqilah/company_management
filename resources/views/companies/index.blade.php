@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card custom-table">
        <div class="card-header text-white tablecard">
            <h3 >Companies</h3>
            <a href="{{ route('companies.create') }}" class="save-button">Add New Company</a>
        </div>
        <div class="card-body">
            <table class="table table-hover" id="companiesTable">
                <thead class="columntable">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Website</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($companies as $company)
                        <tr>
                            <td>
                                @if ($company->logo)
                                    <img src="{{ asset('storage/' . $company->logo) }}" alt="company" class="company-image">
                                @endif
                                {{ $company->name }}
                            </td>
                            <td>{{ $company->email }}</td>
                            <td>{{ $company->website }}</td>
                            <td>
                                <a href="{{ route('companies.edit', $company) }}" class="editButton">Edit</a>
                                <form action="{{ route('companies.destroy', $company) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="deleteButton">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#companiesTable').DataTable({
                "pageLength": 5, // Show only five records per page
                "paging": true, // Enable pagination
                "info": false, // Disable the info text
                "searching": false // Disable the search bar
            });
    });
</script>

@endsection





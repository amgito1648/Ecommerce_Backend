<table class="table align-items-center mb-0">
    <thead class="bg-light">
        <tr>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder">ID</th>

            <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Logo</th>

            <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Name</th>

            <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Created</th>

            <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Updated</th>

            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Actions</th>
        </tr>
    </thead>

    <tbody>
        @foreach($brands as $brand)
        <tr>
            <td>{{ $brand->id }}</td>

            <td>
                @if($brand->logo)
                    <img src="{{ asset('storage/'.$brand->logo) }}" 
                         alt="{{ $brand->name }}" 
                         class="img-fluid rounded" 
                         style="height:40px;">
                @else
                    <span class="text-muted">—</span>
                @endif
            </td>

            <td>
                <strong>{{ $brand->name }}</strong>
            </td>

            <td>{{ $brand->created_at->format('Y-m-d H:i') }}</td>

            <td>{{ $brand->updated_at->format('Y-m-d H:i') }}</td>

            <td class="text-center">

                {{-- Edit button --}}
                <a href="{{ route('admin.brands.edit', $brand->id) }}" 
                   class="btn btn-sm btn-warning mx-1">
                    Edit
                </a>

                {{-- Delete --}}
                <form action="{{ route('admin.brands.destroy', $brand->id) }}" 
                      method="POST" 
                      style="display:inline-block;"
                      onsubmit="return confirm('¿Eliminar esta marca?');">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">
                        Delete
                    </button>
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

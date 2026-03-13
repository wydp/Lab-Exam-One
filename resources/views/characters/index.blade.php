@extends('layouts.app')

@section('content')

{{-- "Characters" heading --}}
<h2 class="fw-bold my-3">Characters</h2>

{{-- Create character button --}}
<a href="{{ route('characters.create') }}"
   class="btn btn-outline-secondary btn-sm mb-3"
   style="font-size: 0.88rem; border-radius: 4px;">
    &#x2295; Create character
</a>

{{-- Character cards --}}
@forelse($characters as $character)

    <div class="d-flex justify-content-between align-items-center
                border rounded px-4 py-3 mb-2 bg-white">

        {{-- Left: name + power + universe --}}
        <div>
            <div class="fw-bold" style="font-size: 1.05rem; color: #111;">
                {{ $character->name }}
            </div>
            <div style="font-size: 0.88rem; color: #555; margin-top: 1px;">
                {{ $character->power }}
            </div>
            <div style="font-size: 0.88rem; color: #555;">
                {{ $character->universe }}
            </div>
        </div>

        {{-- Right: Actions dropdown --}}
        <div class="dropdown">
            <button class="btn btn-outline-secondary btn-sm dropdown-toggle"
                    type="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false">
                Actions
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
                <li>
                    <a class="dropdown-item"
                       href="{{ route('characters.edit', $character) }}">
                        Edit
                    </a>
                </li>
                <li>
                    <form action="{{ route('characters.destroy', $character) }}"
                          method="POST"
                          onsubmit="return confirm('Delete this character?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="dropdown-item text-danger">
                            Delete
                        </button>
                    </form>
                </li>
            </ul>
        </div>

    </div>

@empty
    <p class="text-muted" style="font-size: 0.9rem;">No characters found.</p>
@endforelse

@endsection
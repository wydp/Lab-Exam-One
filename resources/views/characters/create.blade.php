@extends('layouts.app')

@section('content')

<h1 class="mb-4" style="font-weight: 500;">
    Create Character
</h1>

<form action="{{ route('characters.store') }}" method="POST"
        >
    @csrf

    {{-- Name --}}
    <div class="mb-1">
        <label class="form-label "
               style="font-size: 0.83rem; color: #333;">Name</label>
        <input type="text"
               name="name"
               placeholder="Name"
               class="form-control @error('name') is-invalid @enderror"
               value="{{ old('name') }}">
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    {{-- Power --}}
    <div class="mb-1">
        <label class="form-label "
               style="font-size: 0.83rem; color: #333;">Power</label>
        <input type="text"
               name="power"
               placeholder="Power"
               class="form-control @error('power') is-invalid @enderror"
               value="{{ old('power') }}">
        @error('power')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    {{-- Universe --}}
    <div class="mb-1">
        <label class="form-label "
               style="font-size: 0.83rem; color: #333;">Universe</label>
        <input type="text"
               name="universe"
               placeholder="Universe"
               class="form-control @error('universe') is-invalid @enderror"
               value="{{ old('universe') }}">
        @error('universe')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mt-3 d-flex gap-2">
        <button type="submit" class="btn btn-outline-secondary btn-sm">
            Save Character
        </button>
        <a href="{{ route('characters.index') }}"
           class="btn btn-outline-danger btn-sm">
            Cancel
        </a>
    </div>

</form>

@endsection
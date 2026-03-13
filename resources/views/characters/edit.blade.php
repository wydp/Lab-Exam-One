@extends('layouts.app')

@section('content')

{{-- Form title --}}
<h1 class="mb-4" style=" font-weight: 600;">
    Edit Character
</h1>

<form action="{{ route('characters.update', $character) }}" method="POST"
      >
    @csrf
    @method('PUT')

    {{-- Name — standard Bootstrap input (blue border on focus, matches screenshot) --}}
    <div class="mb-1">
        <label class="form-label "
               style="font-size: 0.83rem; color: #333;">Name</label>
        <input type="text"
               name="name"
               placeholder="Name"
               class="form-control @error('name') is-invalid @enderror"
               value="{{ old('name', $character->name) }}"
               style="border-radius: 4px;">
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    {{-- Power — underline only --}}
    <div class="mb-1">
        <label class="form-label "
               style="font-size: 0.83rem; color: #333;">Power</label>
        <input type="text"
               name="power"
               placeholder="Power"
               class="form-control @error('power') is-invalid @enderror"
               value="{{ old('power', $character->power) }}">
        @error('power')
            <div style="color:red; font-size:0.78rem;">{{ $message }}</div>
        @enderror
    </div>

    {{-- Universe — underline only --}}
    <div class="mb-1">
        <label class="form-label "
               style="font-size: 0.83rem; color: #333;">Universe</label>
        <input type="text"
               name="universe"
                placeholder="Universe"
               class="form-control @error('universe') is-invalid @enderror"
               value="{{ old('universe', $character->universe) }}">
        @error('universe')
            <div style="color:red; font-size:0.78rem;">{{ $message }}</div>
        @enderror
    </div>

    {{-- Buttons --}}
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
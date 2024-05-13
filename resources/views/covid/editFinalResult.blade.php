@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Covid-19 Final Result</h2>

    <form method="POST" action="{{ route('covid.updateFinalResult', $covidData->id) }}">
        @csrf
        @method('PUT')
        <!-- Dropdown menu with three items -->
        <div class="mb-3">
            <label for="finalResult" class="form-label">Final Result</label>
            <select class="form-control" id="finalResult" name="final_result">
                <option value="Undetermined">Undetermined</option>
                <option value="Good">Good</option>
                <option value="Fair">Fair</option>
                <option value="Serious">Serious</option>
                <option value="Critical">Critical</option>
            </select>
        </div>

        <!-- Button to confirm selection -->
        <button type="submit" class="btn btn-primary">Update Record</button>
    </form>
</div>
@endsection

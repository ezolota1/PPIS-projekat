@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


            <h2>Covid-19 Project Data</h2>

            @if(auth()->user()->role_id == 1)
            <form method="POST" action="{{ route('covid.generatePdfGlobal') }}">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-success">Statistics PDF</button>
            </form>
            @endif

             @if(auth()->user()->role_id == 2)
            <a href="{{ route('covid.create') }}" class="btn btn-primary mb-3">Add New</a>
            @endif
            <table class="table">
                <thead>
                    <tr>
                        <th>SPOL</th>
                        <th>LE WBC</th>
                        <th>Limf%</th>
                        <th>Mid%</th>
                        <th>Gran%</th>
                        <th>HGB</th>
                        @if(auth()->user()->role_id == 1)
                        <th>Final Result</th>
                        @endif
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($covidData as $data)
                    <tr>
                        <td>{{ $data->SPOL }}</td>
                        <td>{{ $data->LE_WBC }}</td>
                        <td>{{ $data->Limf }}</td>
                        <td>{{ $data->Mid }}</td>
                        <td>{{ $data->Gran }}</td>
                        <td>{{ $data->HGB }}</td>
                        @if(auth()->user()->role_id == 1)
                        <td>{{ $data->FinalResult }}</td>
                        @endif
                        <td>
                            @if(auth()->user()->role_id == 2)
                            <a href="{{ route('covid.edit', ['id' => $data->id]) }}" class="btn btn-sm btn-primary">Edit</a>
                            @elseif(auth()->user()->role_id == 1)
                            <a href="{{ route('covid.editFinalResult', ['id' => $data->id]) }}" class="btn btn-sm btn-primary">Edit Final Result</a>
                            @endif
                            <form method="POST" action="{{ route('covid.generatePdf', ['id' => $data->id]) }}">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-success">Download PDF</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

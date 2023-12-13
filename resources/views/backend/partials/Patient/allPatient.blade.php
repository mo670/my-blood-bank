@extends('master')
@section('main')

    <div class="card">
        <div class="card-body">
            <h5 class="card-title text-center">All Patients</h5>


            @if (session()->has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert" id="alert">
                    {{ session()->get('message') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            {{-- error message --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- 
        @dd($allPatients) --}}
            <!-- Table with hoverable rows -->
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col"> Name</th>
                        <th scope="col"> Age</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Address</th>
                        <th scope="col">Reason</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($allPatients as $key => $item)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $item->patient_name }}</td>
                            <td>{{ $item->patient_age }}</td>
                            <td>{{ $item->patient_mobile }}</td>
                            <td>{{ $item->patient_address }}</td>
                            <td>{{ $item->patient_reason }}</td>
                            <td>
                                {{-- <a class="btn btn-warning btn-sm" href="{{ route('patient.edit', $item->id) }}"> <i class="bi bi-pen"></i> </a> --}}
                                <a class="btn btn-danger btn-sm" href="{{ route('patient.delete', $item->id) }}"> <i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

            {{ $allPatients->links() }}


            <!-- End Table with hoverable rows -->


        </div>
    </div>

@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <p>Liste des utilisateurs</p>
                </div>
                <div class="card-body">
                    <div class="mt-4">
                            @foreach ($users as $user)
                            <p>User name : {{ $user->name }}</p>
                            <p>User email : {{ $user->email }}</p>
                            @endforeach
                    </div>
                </div>
            </div>
            <div class="card mt-4">
                <div class="card-header">
                    <p>Liste des skills</p>
                </div>
                <div class="card-body">
                    <div class="mt-4">
                            @foreach ($skills as $skill)
                            <p>Skill name : {{ $skill->name }} - {{ $skill->label }}</p>
                            @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection

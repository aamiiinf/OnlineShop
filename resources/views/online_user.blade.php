@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{__('online_user')}}</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content pt-5">
      <div class="container-fluid">
          <table class="table" id="posts-table">
              <thead>
              <tr>
                  <th>{{__('image')}}</th>
                  <th>{{__('name')}}</th>
                  <th>{{__('email')}}</th>
                  <th>{{__('user_platform')}}</th>
                  <th>{{__('user_browser')}}</th>
              </tr>
              </thead>
              <tbody>
                @foreach($online_users as $online_user)
                  <tr>
                      <td><img height="25" class="rounded-circle" src="{{ asset($online_user->image) }}"></td>
                      <td><span class="badge badge-info">{{ $online_user->name }}</span></td>
                      <td><span class="badge badge-secondary">{{ $online_user->email }}</span></td>
                      <td><span class="badge badge-warning">{{ $user_platform }}</span></td>
                      <td><span class="badge badge-danger">{{ $user_browser }}</span></td>
                  </tr>
                @endforeach
              </tbody>
          </table>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

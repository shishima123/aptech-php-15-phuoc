@extends('master')
@section('tittle','Edit User')
@section('page-description','EDIT PAGE')
@section('table')
    <form action="#" method="get">
        <input type="hidden" name="_method" value="put">
        <div class="form-group ">
          <label class="text-uppercase font-weight-bold" for="name">name</label>
          <input type="text" class="form-control rounded-0" id="name" placeholder="Name" name="name" value="{{ $users[0]->name }}">
        </div>
        <div class="form-group ">
          <label class="text-uppercase font-weight-bold" for="email">email</label>
          <input type="email" class="form-control rounded-0" id="email" placeholder="Email" name="email" value="{{ $users[0]->email }}">
        </div>

        <div class="form-group ">
          <button type="submit" class="btn btn-warning text-uppercase rounded-0 font-weight-bold">
            save
          </button>
        </div>
      </form>
@endsection

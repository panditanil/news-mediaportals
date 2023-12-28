@extends('backend.layout.master')
@section('title','User Data')
@section('content')

<div class="row">         
            </div>

            <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Categories List</h4>
                    <div class="table-responsive">
                      <table class="table">
                      <caption>Total Records{{$data->count()}}</caption>
                        <thead>
                          <tr>

                            <th>S.N</th>
                            <th> Category Name </th>
                            <th> Status </th>
                            <th> Actions </th>
                          </tr>
                        </thead>
                        <tbody>
                            @forelse($data as $cate)
                          <tr>
                            <td> {{$loop->iteration}} </td>
                            <td>{{$cate->name}}</td>
                            <td>{{$cate->status}}</td>
                            <td><a href="#" class='btn btn-danger'>Delete</a>
                                <a href="{{route('admin_edit',$cate->id)}}" class='btn btn-primary'>edit</a></td>
                                </tr>
                            @empty
                            <td> Empty !!</td>
                            @endforelse
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           
@endsection

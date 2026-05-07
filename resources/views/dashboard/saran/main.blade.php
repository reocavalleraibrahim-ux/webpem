@extends('dashboard.layout.app')

@section('title','Saran')

@section('content')
    <div class="col-xl-12 col-md-8">
            <div class="card Recent-Users table-card">
              <div class="card-header">
                
                @if (session('success'))
                  <br>
                  <br>
                  <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                  </div>
                @endif  
              </div>
              <div class="card-body px-0 py-3 container">
                <div class="table-responsive">
                  <table class="table table-hover mb-0" id="example2">
                    <thead>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Telepon</th>
                        <th>Pesan</th>
                    </thead>
                    <tbody>
                      <?php
                       $a = 1;
                       foreach($saran as $s):     
                      ?>
                        <tr>
                            <td>{{$a}}</td>
                            <td>{{$s->nama}}</td>
                            <td>{{$s->email}}</td>
                            <td>{{$s->telepon}}</td>
                            <td>{{$s->pesan}}</td>
                        </tr>
                      <?php
                        $a++;
                        endforeach;
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>


@endsection
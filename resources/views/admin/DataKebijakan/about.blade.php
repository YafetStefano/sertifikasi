@extends('admin.layout.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h1>
                DATA TENTANG DEVELOPER
                
            </h1>
        </div>
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>DATA DIRI
                        </h2>
                    </div>
                    <div class="body">

                         <div class="row clearfix">
                                <div class="col-md-3">
                              <div class="image">
                                <a style="cursor: pointer;" data-toggle="modal" data-target="#gantiFoto">
                                    <img src="{{url('images/1931710171.jpeg')}}" width="200px" height="100%" alt="User" />
                                </a>
                            </div>
                         </div>
                         <div class="col-md-4">
                                <h3>NIM : 1931710171</h3>
                                <h3>NAMA : Yafet Stefano</h3>
                                <h3>KELAS : MI3A</h3>
                                <h3>Tanggal : 29 September 2022</h3>
                         </div>
                     </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Examples -->
    </div>
</section>
<script type="text/javascript">
@if (Session::has('messages')) 
    alert("{{ Session::get('messages') }}");
@endif
</script>
@endsection


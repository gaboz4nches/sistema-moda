<!-- @extends("layouts.app")

@section('title', 'Instituciones')

@section('content')

<div class="col-md-12">
    <br>
    <h1 class="text-center txtb"><i class="far fa-building"></i> Instituciones</h1>
    <hr>
    <a href="{{ url('institutions/create')}}" class="btn btn-outline-info">
        <i class="fa fa-plus"></i> Institucion
    </a>
    <hr>
    <div class="row justify-content-center aling-items-center">
        @foreach($inst as $ins)
        <div class="card col-md-4" style="width: 18rem; border: none;">
            <div class="card-img-top" style="background: url({{ asset($ins->imagen) }}) no-repeat center / cover; width: 100%; height: 350px;"></div>
            <div class="card-body text-white bg-dark">
                <h5 class="card-title">{{ $ins->contacto }}</h5>
                <hr style="background-color: #fff;">
                <div id="summary">
                    <p class="collapse" id="collapseExample">
                        {{ $ins->direccion }}
                    </p>
                    <a href="https://{{ $ins->web }}">
                        {{ $ins->web }}
                    </a>
                </div>
                <br>
                <div class="text-center">
                    <a href="{{ url('institutions/'.$ins->id.'/edit') }}" class="btn btn-success"><i class="fas fa-pencil-alt"></i></a>
                    <form action="{{ url('institutions/'.$ins->id) }}" method="post" style="display: inline-block">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger btn-delete" type="button"> 
                            <i class="fa fa-trash"></i> 
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <tfoot>
        <tr>
            <td colspan="4"> 
                <div class="row justify-content-center align-items-center">
                    {!! $inst->render() !!}  
                </div>
            </td>
        </tr>
    </tfoot>
</div>
@endsection -->
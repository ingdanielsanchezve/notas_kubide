@extends('layout')

@section('content')

    <!-- Main content -->
    <section class="content">

      <div class="row">

        <!-- /.col -->
        <div class="col-lg-6 col-12">
          <div class="nav-tabs-custom box-profile">
            <ul class="nav nav-tabs">
              
              <li><a class="active" href="#timeline" data-toggle="tab">Editar nota: {{$nota->note_id}}</a></li>
            </ul>
                        
            <div class="tab-content">
             
             <div class="active tab-pane" id="timeline">
                <div class="publisher publisher-multi bg-white b-1 mb-30">
                    <form method="POST" action="{{ url('/actualizar_notas') }}">
                        {{ csrf_field() }}
                        <input type="hidden" value="{{$nota->note_id}}" name="note_id">
                        <textarea class="publisher-input auto-expand" name="note_text" rows="4" placeholder=""> {{ old('note_text', $nota->note_text) }} </textarea>
                        <div class="flexbox">
                            <button type="submit" class="btn btn-xs btn-bold btn-primary"> <i class="fa fa-save"></i> </button>
                        </div>
                    </form>
                </div> 
                <div class="text-center bt-1 border-light p-2">
                    <a class="text-uppercase d-block font-size-12" href="{{ action('NotasController@index') }}">Volver al Listado</a>
                </div>
                
              </div>    
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
		  
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  
  @endsection
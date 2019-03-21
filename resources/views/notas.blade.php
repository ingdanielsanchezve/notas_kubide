@extends('layout')

@section('content')

    <!-- Main content -->
    <section class="content">

      <div class="row">

        <!-- /.col -->
        <div class="col-lg-6 col-12">
          <div class="nav-tabs-custom box-profile">
            <ul class="nav nav-tabs">
              
              <li><a class="active" href="#timeline" data-toggle="tab">Crear nueva nota</a></li>
            </ul>
                        
            <div class="tab-content">
             
             <div class="active tab-pane" id="timeline">
                <div class="publisher publisher-multi bg-white b-1 mb-30">


                  <form method="POST" action="{{ url('/notas') }}">
                    
                    <textarea name="note_text" required="required" class="publisher-input auto-expand" rows="4" placeholder="Escribe una nota"></textarea>
                    @if($errors->has('note_text'))
                        <p class="text-danger">{{ $errors->first('note_text') }}!!!</p>
                    @endif
                    <div class="flexbox">
                    {{ csrf_field() }}
                      <button type="submit" class="btn btn-xs btn-bold btn-primary"> <i class="fa fa-save"></i> </button>
                    </div>
                    </form>
                </div> 
                

                <div class="box">
                    <div class="box-header with-border">
                      <div class="row">
                        <h5 class="box-title col-lg-4">Lista de Notas</h5>
                        <div class="col-lg-8">
                          <div class="btn-group float-right">
                            <a class="btn btn-primary btn-xs" href="/"> Todas</a>
                            <a class="btn btn-warning btn-xs" href="/mostrar_favoritas"><i class="fa fa-star"></i> Favoritas</a>
                            <a class="btn btn-default btn-xs" href="/mostrar_no_favoritas"> <i class="fa fa-star-o"></i> No Favoritas</a>
                          </div>
                        </div>
                        </div>
                    </div>
                  <div class="box-body p-0">
                    <div class="notes-list media-list media-list-hover media-list-divided">
                          
                          @foreach($notas as $nota)
                            <div class="media">

                                <div class="media-body">
                                  
                                  <p>{{ e($nota->note_text)}}</p>
                                  <p> <time class="timeago float-right" datetime="{{$nota->created_at}}"></time></p>
                                <div class="media-block-actions">
                                    <nav class="nav nav-dot-separated no-gutters">
                                      @if($nota->note_is_favorite)
                                        <div class="nav-item">
                                            <a class="nav-link text-warning" href="{{ url('/marcar_favorita/'.$nota->note_id) }}"><i class="fa fa-star"></i></a>
                                        </div>
                                      @else
                                        <div class="nav-item">
                                            <a class="nav-link" href="{{ url('/marcar_favorita/'.$nota->note_id) }}"><i class="fa fa-star-o"></i></a>
                                        </div>
                                      @endif
                                    </nav>

                                    <nav class="nav no-gutters gap-2 font-size-16 media-hover-show float-right">
                                        <a class="nav-link text-primary" href="{{ url('/notas/'.$nota->note_id) }}" data-toggle="tooltip" title="" data-original-title="Mostrar"><i class="ion-eye"></i></a>
                                        <a class="nav-link text-success" href="{{ url('/editar_nota/'.$nota->note_id) }}" data-toggle="tooltip" title="" data-original-title="Editar"><i class="ion-edit"></i></a>
                                        <a class="nav-link text-danger" href="{{ url('/eliminar_nota/'.$nota->note_id) }}" data-toggle="tooltip" title="" data-original-title="Borrar"><i class="ion-close"></i></a>
                                    </nav>
                                </div>
                                </div>
                            </div>
                          @endforeach

                    </div>

                  </div>
                              
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
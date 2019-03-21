@extends('layout')

@section('content')

    <!-- Main content -->
    <section class="content">

      <div class="row">

        <!-- /.col -->
        <div class="col-lg-6 col-12">
          <div class="nav-tabs-custom box-profile">
            <ul class="nav nav-tabs">
              
              <li><a class="active" href="#timeline" data-toggle="tab">Nota: {{$nota->note_id}}</a></li>
            </ul>
                        
            <div class="tab-content">
             
             <div class="active tab-pane" id="timeline">                

                <div class="box">

                  <div class="box-body p-0">
                    <div class="media-list media-list-hover media-list-divided">
                          
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
                                    <a class="nav-link text-success" href="{{ url('/editar_nota/'.$nota->note_id) }}" data-toggle="tooltip" title="" data-original-title="Editar"><i class="ion-edit"></i></a>
                                        <a class="nav-link text-danger" href="{{ url('/eliminar_nota/'.$nota->note_id) }}" data-toggle="tooltip" title="" data-original-title="Borrar"><i class="ion-close"></i></a>
                                    </nav>
                                </div>
                                </div>
                            </div>

                    </div>

                  </div>
                        
                  <div class="text-center bt-1 border-light p-2">
                    <a class="text-uppercase d-block font-size-12" href="{{ action('NotasController@index') }}">Volver al Listado</a>
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
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
                  <textarea class="publisher-input auto-expand" rows="4" placeholder=""> {{ e($nota->note_text) }} </textarea>
                  <div class="flexbox">
                    <button class="btn btn-xs btn-bold btn-primary"> <i class="fa fa-save"></i> </button>
                  </div>
                </div> 
                <div class="text-center bt-1 border-light p-2">
                    <a class="text-uppercase d-block font-size-12" href="/">Volver al Listado</a>
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
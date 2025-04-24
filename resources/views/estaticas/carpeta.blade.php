<section class="service-details">
    <div class="container">
        @if ($carpeta->carpetas->count()>0)
            
        
        <div class="row d-flex align-items-start">
            <div class="col-md-4">
                <div class="Success nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    @php
                        $i=0;
                    @endphp
                    @foreach ($carpeta->carpetas as $tra)
                        <button class="nav-link {{ $i==0?'active':'' }}" id="v-pills-{{ $tra->id }}-tab" data-bs-toggle="pill" data-bs-target="#v-pills-{{ $tra->id }}" type="button" role="tab" aria-controls="v-pills-{{ $tra->id }}" aria-selected="true">{{ $tra->nombre }}</button>  
                        @php
                            $i++;
                        @endphp    
                    @endforeach

                </div>
            </div>
            <div class="col-md-8">
                <div class="tab-content" id="v-pills-tabContent">
                    @php
                        $ii=0;
                    @endphp
                    @foreach ($carpeta->carpetas as $sub_carpeta)
                        <div class="tab-pane fade show {{ $ii==0?'active':'' }}" id="v-pills-{{ $sub_carpeta->id }}" role="tabpanel" aria-labelledby="v-pills-{{ $sub_carpeta->id }}-tab">
                            <ul>
                                <li class="text-dark"><strong>{{ $sub_carpeta->nombre }}</strong></li>
                                @include('estaticas.archivos',['carpeta'=>$sub_carpeta])
                                @if ($sub_carpeta->carpetas)
                                    <ul>
                                        @foreach ($sub_carpeta->carpetas as $subCarpeta_s)
                                            @include('estaticas.sub', ['sub_carpeta' => $subCarpeta_s])
                                        @endforeach
                                    </ul>
                                @endif
                            </ul>
                        </div>  
                        @php
                            $ii++;
                        @endphp      
                    @endforeach
                </div>
            </div>
        </div>
        @else
        <div class="alert alert-primary" role="alert">
            <strong>No existe datos para {{ $carpeta->nombre }}</strong> 
        </div>
        
        @endif
    </div>
</section>
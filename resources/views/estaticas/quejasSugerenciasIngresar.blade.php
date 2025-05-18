@extends('layouts.cliente')
@section('content')
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>

<section class="services-one" id="services">
    <div class="container">
        <div class="section-title text-center">
            <div class="section-title__icon">
                <span class="fa fa-star"></span>
            </div>
            <span class="section-title__tagline">Estimado usuario, agradecemos su amabilidad y disposición para colaborar en la mejora de nuestros servicios. Para formalizar su solicitud, le pedimos que complete la siguiente información.</span>
        </div>


        
        <div class="row">
            <div class="col-xl-4">
                <div class="services-one__left">
                    <div class="services-one__shape-2 img-bounce">
                        <img src="{{ asset('assets/images/shapes/services-one-shape-2.png') }}" alt="">
                    </div>
                    <div class="services-one__img-box">
                        <div class="services-one__img">
                            <img src="{{ asset('assets/images/resources/services-one-img-1.png') }}" alt="">
                            <div class="services-one__img-shadow"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="services-one__right">
                    <div class="services-one__shape-1 float-bob-x">
                        <img src="{{ asset('assets/images/shapes/services-one-shape-1.png') }}" alt="">
                    </div>
                    <div class="services-one__shape-3 float-bob-x">
                        <img src="{{ asset('assets/images/shapes/services-one-shape-3.png') }}" alt="">
                    </div>
                    <div class="services-one__points-title-box">
                        <p><small>Le agradecemos que ingrese datos precisos y veraces.</small></p>
                    </div>
                    <div class="services-one__points-box">
                        <form class="row g-3" method="POST" action="{{ route('enviarQuejaSugerencia') }}">
                            @csrf
                            <div class="col-md-6">
                              <label for="email" class="form-label">Correo electrónico</label>
                              <input  name="email" value="{{ old('email') }}" type="email" class="form-control @error('email') is-invalid @enderror" id="email" required>
                              @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                              @enderror
                            </div>
                            <div class="col-md-6">
                              <label for="cedula" class="form-label">Cédula de identidad</label>
                              <input name="cedula" value="{{ old('cedula') }}" type="number" class="form-control @error('cedula') is-invalid @enderror" id="cedula" required>
                              @error('cedula')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                              @enderror
                            </div>
                            <div class="col-12">
                              <label for="apellidosnombres" class="form-label">Apellidos y Nombres</label>
                              <input name="apellidosnombres" value="{{ old('apellidosnombres') }}" type="text" class="form-control @error('apellidosnombres') is-invalid @enderror" id="apellidosnombres" placeholder="" required>
                              @error('apellidosnombres')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                              @enderror
                            </div>
                            
                            <div class="col-md-6">
                              <label for="telefonocelular" class="form-label">Teléfono o Celular</label>
                              <input name="telefonocelular" value="{{ old('telefonocelular') }}" type="tel" class="form-control @error('telefonocelular') is-invalid @enderror" id="telefonocelular" required>
                              @error('telefonocelular')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                              @enderror
                            </div>
                            <div class="col-md-6">
                              <label for="quejasugerencia" class="form-label">Queja o Sugerencia</label>
                              <select name="quejasugerencia" id="quejasugerencia" class="form-select @error('quejasugerencia') is-invalid @enderror" required>
                                <option value="Queja" {{ old('quejasugerencia')=='Queja'?'selected':'' }}>Queja</option>
                                <option value="Sugerencia" {{ old('quejasugerencia')=='Queja'?'selected':'' }}>Sugerencia</option>
                              </select>
                              @error('quejasugerencia')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                              @enderror
                            </div>
                            
                            <div class="col-12">
                                <label for="dependencia" class="form-label">Dependencia</label>
                                <input name="dependencia" value="{{ old('dependencia') }}" type="text" class="form-control @error('dependencia') is-invalid @enderror" id="dependencia" placeholder="Departamento, Autoridad, Etc" required>
                                @error('dependencia')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="descripcion" class="form-label">Ingrese la descripción</label>
                                <textarea name="descripcion" class="form-control @error('descripcion') is-invalid @enderror" id="descripcion" rows="3" required>{{ old('descripcion') }}</textarea>
                                @error('descripcion')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                              <div class="col-12">
                                <div class="form-check">
                                  <input name="termino" class="form-check-input @error('termino') is-invalid @enderror" type="checkbox" id="termino" onchange="terminos(this)" required>
                                  <label class="form-check-label" for="termino">
                                    Acepto, Términos y Condiciones para Presentar Quejas y Sugerencias
                                  </label>
                                  @error('termino')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div id="terminos" style="display: none;">
                                    <p>
                                        Bienvenido a nuestra plataforma de presentación de quejas y sugerencias. Antes de proceder, le pedimos que lea detenidamente los siguientes términos y condiciones. Al utilizar este servicio, usted acepta cumplir con estos términos:
                                    </p>
                                    <ul>
                                        <li><strong>Uso Responsable:</strong> Al presentar una queja o sugerencia, usted se compromete a hacerlo de manera respetuosa y constructiva. No se permitirá el uso de lenguaje ofensivo, difamatorio o inapropiado.</li>
                                        <li><strong>Información Veraz:</strong> La información proporcionada en su queja o sugerencia debe ser precisa y veraz. Cualquier intento de proporcionar información falsa o engañosa puede resultar en la anulación de su presentación.</li>
                                        <li><strong>Confidencialidad:</strong> Sus datos personales y la información proporcionada en su queja o sugerencia serán tratados con confidencialidad. Solo se compartirán con el personal relevante encargado de abordar su caso.</li>
                                        <li><strong>Propiedad Intelectual:</strong> Al presentar una sugerencia, usted acepta que cualquier idea, sugerencia o concepto propuesto se convierta en propiedad de la empresa y puede ser utilizado con fines de mejora sin requerir compensación adicional.</li>
                                        <li><strong>Respuesta y Seguimiento:</strong> Aunque nos esforzamos por responder a todas las quejas y sugerencias, no garantizamos una respuesta individualizada. Sin embargo, cada presentación será revisada y considerada en nuestro proceso de mejora continua.</li>
                                        <li><strong>Modificaciones de los Términos:</strong> Nos reservamos el derecho de modificar estos términos y condiciones en cualquier momento. Cualquier cambio será efectivo tan pronto como se publique en esta plataforma.</li>
                                        <li><strong>Contacto:</strong> Si surge alguna pregunta o inquietud acerca de estos términos y condiciones, no dude en ponerse en contacto con nuestro equipo de soporte.</li>
                                    </ul>
                                    <p>
                                        Al utilizar nuestro servicio de presentación de quejas y sugerencias, usted acepta estar legalmente vinculado por estos términos y condiciones. Le agradecemos su participación en la mejora de nuestros servicios y esperamos recibir sus comentarios de manera constructiva.
                                    </p>
                                </div>
                                
                              </div>
                            <div class="col-12">
                              <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </form>
            </div>
        </div>
    </div>
</section>

<script>
    function terminos(cb){
        if(cb.checked){
            $('#terminos').show();
        }else{
            $('#terminos').hide();
        }
    }
    CKEDITOR.replace( 'descripcion' );
</script>
@endsection
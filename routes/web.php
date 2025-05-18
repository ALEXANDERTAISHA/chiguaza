<?php

use App\Http\Controllers\AutoridadController;
use App\Http\Controllers\CarpetaController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\EstaticasController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuejasSugerenciasController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TipoDocumentoController;
use App\Http\Controllers\WelcomeController;
use App\Models\TipoDocumento;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Session;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [WelcomeController::class,'index'])->name('welcome');

Route::get('/autoridades', [WelcomeController::class,'autoridades'])->name('autoridades');
Route::get('/funcionarios', [WelcomeController::class,'funcionarios'])->name('funcionarios');
Route::get('/resena-historica', [WelcomeController::class,'resenahistorica'])->name('resenahistorica');
Route::get('/mision-y-vision', [WelcomeController::class,'misionvision'])->name('misionvision');
Route::get('/himno', [WelcomeController::class,'himno'])->name('himno');
Route::get('/organigrama', [WelcomeController::class,'organigrama'])->name('organigrama');
Route::get('/turismo', [WelcomeController::class,'turismo'])->name('turismo');


Route::get('/detallevocal', [WelcomeController::class,'detallevocal'])->name('detallevocal');
Route::get('/detallevocal1', [WelcomeController::class,'detallevocal1'])->name('detallevocal1');
Route::get('/detallevocal2', [WelcomeController::class,'detallevocal2'])->name('detallevocal2');
Route::get('/detallevocal3', [WelcomeController::class,'detallevocal3'])->name('detallevocal3');

Route::get('/laberintos', [WelcomeController::class,'laberintos'])->name('laberintos');
Route::get('/cascadachiguaza', [WelcomeController::class,'cascadachiguaza'])->name('cascadachiguaza');
Route::get('/riochiguaza', [WelcomeController::class,'riochiguaza'])->name('riochiguaza');
Route::get('/rioandrentza', [WelcomeController::class,'rioandrentza'])->name('rioandrentza');
Route::get('/lagunamarianita', [WelcomeController::class,'lagunamarianita'])->name('lagunamarianita');
Route::get('/cavernaanaconda', [WelcomeController::class,'cavernaanaconda'])->name('cavernaanaconda');

Route::get('/descargar-archivo/{id}',[EstaticasController::class,'descargarArchivo'])->name('descargarArchivo');
Route::get('/tramites',[EstaticasController::class,'tramites'])->name('tramites');
Route::get('/transparencia/{id}',[EstaticasController::class,'carpeta'])->name('transparencia');
Route::get('/rendicion-de-cuentas/{id}',[EstaticasController::class,'carpeta'])->name('rendicionCuentas');
Route::get('/quejas-y-sugerencias',[EstaticasController::class,'quejasSugerencias'])->name('quejasSugerencias');
Route::get('/quejas-y-sugerencias/ingresar',[EstaticasController::class,'quejasSugerenciasIngresar'])->name('quejasSugerenciasIngresar');
Route::get('/quejas-y-sugerencias/consultar',[EstaticasController::class,'quejasSugerenciasConsultar'])->name('quejasSugerenciasConsultar');
Route::post('/enviar-queja-sugerencia',[EstaticasController::class,'enviarQuejaSugerencia'])->name('enviarQuejaSugerencia');
Route::get('/noticias',[EstaticasController::class,'noticias'])->name('noticias');
Route::get('/detalle-de-noticia/{id}',[EstaticasController::class,'noticiasDetalle'])->name('noticiasDetalle');
Route::get('/contactos',[EstaticasController::class,'contactos'])->name('contactos');
Route::post('/contactos-enviar',[EstaticasController::class,'contactoEnviar'])->name('contactoEnviar');



Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');



    // sliders
    Route::resource('slider', SliderController::class);
    Route::resource('autoridad', AutoridadController::class);
    Route::resource('noticias-admin', NoticiaController::class);
    Route::resource('empresa', EmpresaController::class);

    Route::resource('carpetas', CarpetaController::class);
    Route::post('guardarArchivo', [CarpetaController::class,'guardarArchivo'])->name('guardarArchivo');
    Route::get('eliminarArchivo/{id}', [CarpetaController::class,'eliminarArchivo'])->name('eliminarArchivo');
    Route::get('admin-quejas-sugerencias', [QuejasSugerenciasController::class,'index'])->name('admin.quejasSugerencias');
    Route::get('admin-quejas-sugerencias/ver/{id}', [QuejasSugerenciasController::class,'ver'])->name('admin.quejasSugerenciasVer');




});

require __DIR__.'/auth.php';

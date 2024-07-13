<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DomicilioController extends Controller
{
    public function index() {
        return "Pagina para doctores sevico a domicilio";
    }
    public function doctoradomicilio($nombre) {
        return "Pagi para doctores a domicilio, el nombre es: $nombre";
    }
}

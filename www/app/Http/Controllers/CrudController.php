<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{
    public function index(){
        $datos=DB::select(" select * from empleados ");
        return view("welcome")->with("datos", $datos);
    }

    public function create(Request $request){
        try {
            $sql=DB::insert(" insert into empleados(id,Nombre,Apellidos,Correo,Foto,Usuario,Contraseña)values(?,?,?,?,?,?,?) ",[
                $request->txtid,
                $request->txtnombre,
                $request->txtapellidos,
                $request->txtcorreo,
                $request->txtfoto,
                $request->txtuser,
                $request->txtpassw,
            ]);
        } catch (\Throwable $th) {
            $sql=0;
        }

        if ($sql==true) {
            return back()->with("Correcto","Usuario Registrado Correctamente");
        } else {
            return back()->with("Algo Fallo","EL USUARIO NO PUDO SER REGISTRADO");
        }
        
    }

    public function update(Request $request){
        try {
            $sql=DB::update(" update empleados set nombre=?, apellidos=?, correo=?, usuario=?, contraseña=?, foto=? where id=? ",[
                $request->txtnombre,
                $request->txtapellidos,
                $request->txtcorreo,
                $request->txtuser,
                $request->txtpassw,
                $request->txtfoto,
                $request->txtid,
            ]);
            if ($sql==0) {
                $sql=1;
            }
        } catch (\Throwable $th) {
            $sql=0;
        }

        if ($sql==true) {
            return back()->with("Correcto","Usuario Modificado Correctamente");
        } else {
            return back()->with("Algo Fallo","ERROR INTENTE NUEVAMENTE");
        }
        
    }

    public function delete($id){
        try {
            $sql=DB::delete(" delete from empleados where id=$id ");
        } catch (\Throwable $th) {
            $sql=0;
        }

        if ($sql==true) {
            return back()->with("Correcto","Usuario Eliminado Correctamente");
        } else {
            return back()->with("Algo Fallo","EL USUARIO NO PUDO SER ELIMINADO");
        }
    }
}

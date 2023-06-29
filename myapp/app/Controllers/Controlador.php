<?php

namespace App\Controllers;
use App\Models\Modelo;

class Controlador extends BaseController
{
    public function index()
    {
        return view ('templates/header').
        view('Monitoreo');
    }

    public function espPost()
    {
        if ($this->request->getPost()) {
            $model = new Modelo();
            $data = [
                'Temperatura' => $this->request->getVar('Temperatura'),
                'Humedad' => $this->request->getVar('Humedad'),
                'CalidadAire' => $this->request->getVar('CalidadAire'),
            ];
            $model->insert($data);
            return "201";
        }
        return "401";
    }

    public function informacion(){
        return view('templates/header').
        view('Monitoreo').
        view('templates/footer');
    }

    public function getGoogleGauge(){
        $model = new Modelo();
        $data= $model->getGoogleGauge();
        echo json_encode($data);
    }
    public function googleGauge(){
        return view('templates/header').
         view('charts/google_gauge').
         view('templates/footer');
    }
    public function getGoogleLine(){
        $model = new Modelo();
        $data= $model->getGoogleLine();
        echo json_encode($data);
    }
    public function googleLine(){
        return view('templates/header').
        view('charts/google_line').
        view('templates/footer');
    }
    public function dataEchartsBar(){
        $model = new Modelo();
        $data= $model->getEcharBar();
        echo json_encode($data);
    }

    public function echartsBar(){
        return view('templates/header').
        view('charts/echarts_bar').
        view('templates/footer');
    }
    public function table(){
        $data =[];
        $model = new Modelo();
        $data['medidas'] = $model->findAll();
        return  view('templates/header').
                view('tables',$data).
                view('templates/footer');
    }
    public function dataEchartsLine(){
        $model = new Modelo();
        $data= $model->getEcharLine();
        echo json_encode($data);
    }
    public function echartsLine(){
        return  view('templates/header').
        view('charts/echarts_line').
        view('templates/footer');
    }
    public function echartsGauge(){
        return  view('templates/header').
                view('charts/echarts_gauge').
                view('templates/footer');
    }
    public function dashboard(){
        return  view('templates/header').
                view('charts/dashboard').
                view('templates/footer');
    }
}

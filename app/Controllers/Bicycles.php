<?php
namespace App\Controllers;

class Bicycles extends BaseController
{
    public function index()
    {
        return view('header')
                .view('bicycle_start')
                .view('footer');          
    }
    
    public function getBicycle()
    {
        try
        {
            $data = array('type' => '', 'color' => '', 'tires' => '');
            $data['type'] = $this->getBicycleType();
            $data['color'] = $this->getBicycleColor();
            $data['tires'] = $this->getBicycleTire();

            return view('header')
                    .view('build_bicycle', $data)
                    .view('footer');            
        } 
        catch (\Exception $ex) 
        {
            log_message('error', '[ERROR] {exception}', ['exception' => $ex]);
            
            $data = ['error' => $ex->getMessage()];
            return view('error', $data);
        }        
    }
    
    private function getBicycleType()
    {
        try
        {
            $bicyclesModel = new \App\Models\BicyclesModel();
            $result = $bicyclesModel->getBicycleTypes();

            return $result['bicycle_type'];
        } 
        catch (\Exception $ex) 
        {
            log_message('error', '[ERROR] {exception}', ['exception' => $ex]);
            
            $data = ['error' => $ex->getMessage()];
            return view('error', $data);            
        }
    }
    
    private function getBicycleTire()
    {
        try
        {
            $bicyclesModel = new \App\Models\BicyclesModel();
            $result = $bicyclesModel->getBicycleTires();

            return $result['tire_type'];
        } 
        catch (Exception $ex) 
        {
            log_message('error', '[ERROR] {exception}', ['exception' => $ex]);
            
            $data = ['error' => $ex->getMessage()];
            return view('error', $data);       
        }       
    }
    
    private function getBicycleColor()
    {
        try
        {
            $bicyclesModel = new \App\Models\BicyclesModel();
            $result = $bicyclesModel->getBicycleColors();

            return $result['color'];
        } 
        catch (Exception $ex) 
        {
            log_message('error', '[ERROR] {exception}', ['exception' => $ex]);
            
            $data = ['error' => $ex->getMessage()];
            return view('error', $data);       
        }       
    }
}
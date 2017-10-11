<?php
    namespace Cinema\Http\Controllers;

class PruebaController extends Controller{
    /* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    Public function index(){
        return 'hola desde controlador';
    }
    Public function nombre($nombre = 'Edgar'){
        return 'hola mi nombre es: '.$nombre;
    }
}
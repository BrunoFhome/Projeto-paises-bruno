<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CityController extends Controller
{
    public function fetchFromApi()
    {
        // Requisição para a API do IBGE para buscar os estados
        $response = Http::get('https://servicodados.ibge.gov.br/api/v1/localidades/estados');
        $states = $response->json();

        // Supondo que estamos buscando cidades do estado de São Paulo (UF = 35)
        $uf = 35; // Código do IBGE para São Paulo

        // Requisição para a API para buscar os municípios do estado de São Paulo
        $citiesResponse = Http::get("https://servicodados.ibge.gov.br/api/v1/localidades/estados/$uf/municipios");
        $cities = $citiesResponse->json();

        // Retornar uma view para exibir as cidades e estados
        return view('cities.api-list', compact('states', 'cities'));
    }

    public function showCityDetailsFromApi($id)
    {
        // Requisição para a API para buscar detalhes de uma cidade
        $cityResponse = Http::get("https://servicodados.ibge.gov.br/api/v1/localidades/municipios/{$id}");
        $city = $cityResponse->json();

        // Retornar uma view para exibir os detalhes da cidade
        return view('cities.api-show', compact('city'));
    }

}


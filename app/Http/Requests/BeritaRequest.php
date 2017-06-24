<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class BeritaRequest extends Request {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return TRUE;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        if (Request::has('data')) {
            return[
                'data' => 'required'
            ];
        }
        return [
            'judul_berita'          => 'required',
            'kategori_berita'       => 'required',
            'isi'                   => 'required',
            'foto'                  => 'required',
        ];
    }

    public function messages() {
        return [
            'judul_berita.required'     => 'Judul Berita Diperlukan!',
            'kategori_berita.required'  => 'Kategori Berita Diperlukan!',
            'data.required'             => 'Field Isi & Judul diperlukan!',
            'isi.required'              => 'Isi Diperlukan!',
            'foto.required'             => 'Foto header konten berita diperlukan!',
        ];
    }

}

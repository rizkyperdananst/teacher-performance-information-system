<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TeacherUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nip' => 'required',
            'password' => 'nullable',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'spesialisasi' => 'required',
            'golongan_pangkat' => 'required',
            'pendidikan_terakhir' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nip.required' => 'NIP tidak boleh kosong',
            'nama.required' => 'Nama tidak boleh kosong',
            'jenis_kelamin.required' => 'Jenis Kelamin tidak boleh kosong',
            'tempat_lahir.required' => 'Tempat Lahir tidak boleh kosong',
            'tanggal_lahir.required' => 'Tanggal Lahir tidak boleh kosong',
            'spesialisasi.required' => 'Spesialisasi tidak boleh kosong',
            'golongan_pangkat.required' => 'Golongan Pangkat tidak boleh kosong',
            'pendidikan_terakhir.required' => 'Pendidikan Terakhir tidak boleh kosong',
        ];
    }
}

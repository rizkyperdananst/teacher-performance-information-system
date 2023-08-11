<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class RatingRequest extends FormRequest
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
            'teacher_id' => 'required|integer',
            'course_id' => 'required|integer',
            'class_name_id' => 'required|integer',
            'tanggal_penilaian' => 'required',
            'nilai' => 'required|max:3',
        ];
    }

    public function messages()
    {
        return [
            'teacher_id.required' => 'Guru Wajib Diisi',
            'teacher_id.integer' => 'Pastikan Nama Guru Benar',
            'course_id.required' => 'Mata Pelajaran Wajib Diisi',
            'course_id.integer' => 'Pastikan Mata Pelajaran Benar',
            'class_name_id.required' => 'Kelas Wajib Diisi',
            'class_name_id.integer' => 'Pastikan Kelas Benar',
            'tanggal_penilaian.required' => 'Tanggal Penilaian Wajib Diisi',
            'nilai.required' => 'Nilai Wajib Wajib Diisi',
            'nilai.max' => 'Nilai Maksimal 3 digit',
        ];
    }
}

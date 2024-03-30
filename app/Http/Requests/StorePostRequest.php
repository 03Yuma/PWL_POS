<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use PHPUnit\Framework\MockObject\ReturnValueNotConfiguredException;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'kategori_kode'=>'required',
            'kategori_nama'=>'required',
        ];
    }

    public function store(StorePostRequest $request):RedirectResponse{
        $validate = $request->validated();

        $validate=$request->safe()->only(['kategori_kode','kategori_nama']);
        $validate=$request->safe()->except(['kategori_kode','kategori_nama']);

        return redirect('/kategori');

        $validate=$request->safe()->only(['level_id','level_nama','lavel_kode']);
        $validate=$request->safe()->except(['level_id','level_nama','lavel_kode']);

        return redirect('/level');

        $validate=$request->safe()->only(['username','nama','password']);
        $validate=$request->safe()->except(['username','nama','password']);

        return redirect('/user');
    }
}

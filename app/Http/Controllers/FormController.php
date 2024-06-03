<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
class FormController extends Controller
{
    public function index(Request $request)
    {
        $model = new User();

        $form = $request->input('form');
        $name = $request->input('fio');
        $phone = $request->input('phone');

        if($form == "true") {
            DB::table('users')->insert([
                'name' => $name,
                'phone' => $phone
            ]);
        }

        $all = $model->all();

        return view('welcome', ['phones' => $all]);
    }
    public function delete($id)
    {

        DB::table('users')->where('id', '=', $id)->delete();

        return Redirect::to('/');
    }

    public function edit($id, Request $request)
    {
        $model = new User();
        $result = $model->where('id', $id)->first();
        $form = $request->input('form');
        $name = $request->input('fio');
        $phone = $request->input('phone');

        if($form == "true") {
            DB::table('users')
                ->where('id', '=', $id)
                ->update([
                    'name' => $name,
                    'phone' => $phone
                ]);

           return Redirect::to('/');
        }
        return view('edit',
            [
                'id' => $id,
                'phone' => $result['phone'],
                'name' => $result['name']
            ]);
    }
}

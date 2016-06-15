<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use Mockery\CountValidator\Exception;
use Session;

class InstallController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        \Artisan::call('config:clear');

        if(Storage::disk('root')->exists('.env.example')) {
            $file = Storage::disk('root')->get('.env.example');
            $file = preg_replace('/\bSomeRandomString\b/', str_random(32), $file);
        }
        else {
            $file = trans('install.env_not_found');
        }

        return view('install.index', compact('file'));
    }

    public function storebasic(Request $request)
    {
        $fileName = '.env';
        $fileData = $request->envfile;

        if(Storage::disk('root')->exists($fileName))
            Storage::disk('root')->delete($fileName);

        Storage::disk('root')->put($fileName, $fileData);

        return redirect()->route('install.key');
    }

    public function database()
    {
        try {
            \Artisan::call('key:generate');
            \Artisan::call('migrate');
            if(\DB::connection()->getDatabaseName()) {
                $db = true;
            } else {
                $db = false;
            }
        } catch(Exception $e) {
            $db = false;
        }

        return view('install.database', compact('db'));
    }

    public function user()
    {
        return view('install.user');
    }

    public function storeuser(Requests\InstallUserRequest $request)
    {
        $request->password  = bcrypt($request->password);
        $request->rol       = 'admin';
        User::create($request->all());
        return redirect()->route('install.finish');
    }

    public function finish()
    {
        try {
            \Artisan::call('key:generate');
        } catch(Exception $e) {
            $error = $e;
        }

        return view('install.finish');
    }
}

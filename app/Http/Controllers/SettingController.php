<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard.setting.index', [
            'title' => 'Setting',
            'settings' => Setting::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        // return view('admin.dashboard.setting.index', [

        //     'settings' => $setting
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        // return view('admin.dashboard.setting.index', [
        //     'settings' => $setting
        // ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
      $validateData = $request->validate([
        'title_logo' => 'image|file|max:500',
        'navbar_logo' => 'image|file|max:1024',
        'hero' => 'image|file|max:3072',
        'foto_tentang_kami' => 'image|file|max:500',
        'slogan' => 'nullable|max:100',
        'tentang_kami' => 'nullable',
        'alamat' => 'nullable',
        'instagram' => 'nullable',
        'email' => 'nullable|email',
        'no_telepon' => 'nullable|numeric',
        'link_gmaps' => 'nullable',
    ]);

    if ($request->file('title_logo')) {
      if ($request->oldTitleLogo) {
        Storage::delete($request->oldTitleLogo);
      }
      $validateData['title_logo'] = $request->file('title_logo')->store('setting-images');
    }

    if ($request->file('navbar_logo')) {
      if ($request->oldNavbarLogo) {
          Storage::delete($request->oldNavbarLogo);
      }
      $validateData['navbar_logo'] = $request->file('navbar_logo')->store('setting-images');
    }

    if ($request->file('hero')) {
      if ($request->oldHero) {
        Storage::delete($request->oldHero);
      }
      $validateData['hero'] = $request->file('hero')->store('setting-images');
    }

    if ($request->file('foto_tentang_kami')) {
      if ($request->oldFotoTentangKami) {
        Storage::delete($request->oldFotoTentangKami);
      }
      $validateData['foto_tentang_kami'] = $request->file('foto_tentang_kami')->store('setting-images');
    }

    Setting::where('id', $setting->id)->update($validateData);

    return redirect('/dashboard/setting')->with('success', 'Setting Aplikasi berhasil di-update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}

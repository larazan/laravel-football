<?php

namespace App\Http\Controllers\Admin;

use App\Models\Media;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\MediaRequest;

class MediaController extends Controller
{
    //
     //
     public function __construct()
     {
         $this->data['statuses'] = Media::statuses();
         $this->data['sizeTol'] = Media::LARGE;
     }
 
     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
         $this->data['media'] = null;
 
         return view('admin.medias.form', $this->data);
     }
 
     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(MediaRequest $request)
     {
         $params = $request->except('_token');
         // var_dump($params); exit();
         $params['slug'] =  Str::slug($params['title']);
         $params['body'] = $params['body'];
         $params['user_id'] = Auth::user()->id;
         $params['rand_id'] = Str::random(10);
         $params['url'] = $params['url'];
         $params['meta_title'] = $params['meta_title'];
         $params['meta_description'] = $params['meta_description'];
         $params['video_url'] = $params['embedUrl'];
         $params['status'] = $params['mediaStatus'];
         
         if ($params['published_at'] == '') {
             $params['published_at'] = now();
         }
 
         $image = $request->file('featured_image');
 
         if ($image) {
        
             $name = Str::slug($params['title']) . '_' . time();
             $fileName = $name . '.' . $image->getClientOriginalExtension();
 
             $folder = Media::UPLOAD_DIR;
             $filePath = $image->storeAs($folder, $fileName, 'public');
             $resizedImage = $this->_resizeImage($image, $fileName, $folder);
 
             $params['original'] = $filePath;
             $params['medium'] = $resizedImage['medium'];
             $params['small'] = $resizedImage['small'];
 
             unset($params['image']);
         } else {
             $params['original'] = '';
             $params['medium'] = '';
             $params['small'] = '';
         }
 
         $media = Media::create($params);
         if ($media) {
             Session::flash('success', 'Media has been created');
         } else {
             Session::flash('error', 'Media could not be created');
         }
 
         return redirect('admin/medias');
     }
 
      /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {
         $media = Media::findOrFail($id);
 
         $this->data['media'] = $media;
         $this->data['mediaImage'] = $media->images;
 
         return view('admin.medias.form', $this->data);
     }
 
     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function update(MediaRequest $request, $id)
     {
         $media = Media::findOrFail($id);
 
         $params = $request->except('_token');
         $params['slug'] =  Str::slug($params['title']);
         $params['body'] = $params['body'];
         $params['user_id'] = Auth::user()->id;
         $params['rand_id'] = Str::random(10);
         $params['url'] = $params['url'];
         $params['meta_title'] = $params['meta_title'];
         $params['meta_description'] = $params['meta_description'];
         $params['video_url'] = $params['embedUrl'];
         $params['status'] = $params['mediaStatus'];
         
         if ($params['published_at'] == '') {
             $params['published_at'] = now();
         }
 
         $image = $request->file('featured_image');
 
         if ($image) {
        
             $name = Str::slug($params['title']) . '_' . time();
             $fileName = $name . '.' . $image->getClientOriginalExtension();
 
             $folder = Media::UPLOAD_DIR;
             $filePath = $image->storeAs($folder, $fileName, 'public');
             $resizedImage = $this->_resizeImage($image, $fileName, $folder);
 
             $params['original'] = $filePath;
             $params['medium'] = $resizedImage['medium'];
             $params['small'] = $resizedImage['small'];
 
             unset($params['image']);
         } else {
             $params['original'] = '';
             $params['medium'] = '';
             $params['small'] = '';
         }
  
         if ($media->update($params)) {
             Session::flash('success', 'Media has been updated.');
         }
        
         return redirect('admin/medias');
     }
 
     private function _resizeImage($image, $fileName, $folder)
     {
         $resizedImage = [];
 
         // SMALL
         $smallImageFilePath = $folder . '/small/' . $fileName;
         $size = explode('x', Media::SMALL);
         list($width, $height) = $size;
 
         $smallImageFile = Image::make($image)->fit($width, $height)->stream();
         if (Storage::put('public/' . $smallImageFilePath, $smallImageFile)) {
             $resizedImage['small'] = $smallImageFilePath;
         }
         
         // MEDIUM
         $mediumImageFilePath = $folder . '/medium/' . $fileName;
         $size = explode('x', Media::MEDIUM);
         list($width, $height) = $size;
 
         $mediumImageFile = Image::make($image)->fit($width, $height)->stream();
         if (Storage::put('public/' . $mediumImageFilePath, $mediumImageFile)) {
             $resizedImage['medium'] = $mediumImageFilePath;
         }
 
         // LARGE
         // $largeImageFilePath = $folder . '/large/' . $fileName;
         // $size = explode('x', Media::LARGE);
         // list($width, $height) = $size;
 
         // $largeImageFile = Image::make($image)->fit($width, $height)->stream();
         // if (Storage::put('public/' . $largeImageFilePath, $largeImageFile)) {
         // 	$resizedImage['large'] = $largeImageFilePath;
         // }
 
         // EXTRA_LARGE
         // $extraLargeImageFilePath  = $folder . '/xlarge/' . $fileName;
         // $size = explode('x', Media::EXTRA_LARGE);
         // list($width, $height) = $size;
 
         // $extraLargeImageFile = Image::make($image)->fit($width, $height)->stream();
         // if (Storage::put('public/' . $extraLargeImageFilePath, $extraLargeImageFile)) {
         // 	$resizedImage['extra_large'] = $extraLargeImageFilePath;
         // }
 
         return $resizedImage;
     }
 
     public function deleteImage($id = null) {
         $mediaImage = Media::where(['id' => $id])->first();
         $path = 'storage/';
 
         if (Storage::exists($path.$mediaImage->original)) {
             Storage::delete($path.$mediaImage->original);
         }
         
         if (Storage::exists($path.$mediaImage->small)) {
             Storage::delete($path.$mediaImage->small);
         }   
 
         if (Storage::exists($path.$mediaImage->medium)) {
             Storage::delete($path.$mediaImage->medium);
         }
 
              
         return true;
     }
}

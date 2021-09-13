<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryFormRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
class CategoryController extends Controller
{
  public function __construct()
  {
    $this->middleware([ 'api','localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]);
  }
  public function index(){
    $categories = Category::get();
     return response()->json($categories);
  }

  public function edit($id){
    $category = Category::find($id);
    return response()->json($category);
  }

  
  public function store(CategoryFormRequest $request){
    $image    = $request->file('image');
    $filename = time() . '.' . $image->getClientOriginalExtension();
    Image::make($image)->save('images/' . $filename);
$input = [
  'image'      => $filename,
      'slug'       =>Str::slug($request['name_en']),
  'ar'          => [
    'name'        => $request['name_ar'],
],
'en'          => [
    'name'        => $request['name_en'],
],
];
    Category::create($input);
    
    return  "u r added";
  }
}